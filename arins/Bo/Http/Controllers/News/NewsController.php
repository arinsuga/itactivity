<?php

namespace Arins\Bo\Http\Controllers\News;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Arins\Repositories\News\NewsRepositoryInterface;
use Arins\Facades\Response;
use Arins\Facades\Filex;
use Arins\Facades\Formater;
use Arins\Facades\ConvertDate;

class NewsController extends Controller
{

    protected $sViewRoot;
    protected $data;
    protected $dataModel;
    protected $validateFields;

    public function __construct(NewsRepositoryInterface $parData)
    {
        $this->middleware('auth.admin');
        $this->middleware('is.admin');

        $psViewRoot = 'bo.news';
        $this->sViewRoot = $psViewRoot;
        $this->data = $parData;
        $this->validateFields = [
            'date' => 'required',
            'name' => 'required',
            'description' => 'required',
        ];
    }

    public function index()
    {
        $data = $this->data->allOrderByDateAndIdDesc();
        
        $viewModel = Response::viewModel();
        $viewModel->data = $data;

        return view($this->sViewRoot.'.index',
        ['viewModel' => $viewModel]);
    }

    public function show($id)
    {
        $data = $this->data->find($id);
        $viewModel = Response::viewModel();
        $viewModel->data = $data;

        return view($this->sViewRoot.'.show',
        ['viewModel' => $viewModel, 'new' => false, 'fieldEnabled' => false]);
    }

    public function create()
    {
        $data = [
            'date' => null,
            'name' => null,
            'description' => null,
            'link' => null,
            'image' => null,
        ];
        $viewModel = Response::viewModel();
        $viewModel->data = json_decode(json_encode($data));
        $viewModel->data->date = now();

        return view($this->sViewRoot.'.create',
        ['viewModel' => $viewModel, 'new' => true, 'fieldEnabled' => true]);
    }

    public function edit($id)
    {
        $data = $this->data->find($id);
        $viewModel = Response::viewModel();
        $viewModel->data = $data;

        return view($this->sViewRoot.'.edit',
        ['viewModel' => $viewModel, 'new' => false, 'fieldEnabled' => true]);
    }

    //not use
    public function delete($id)
    {
        return view($this->sViewRoot.'.delete');
    }

    public function store(Request $request)
    {

        $data = $request->validate($this->validateFields);

        $model = $this->data->getInstant();
        $data = $request->only($model->getFillable());

        $path = '';
        $upload = $request->file('upload');
        if ($upload) {
            $path = $upload->store('news', 'public');
        }
        
        if ($path != '')
        {
            $data['image'] = $path;
        }
        $data['date'] = ConvertDate::strDatetimeToDate($data['date']);
        
        $model->fill($data)->save();

        return redirect()->route('news.index');
    }

    public function update(Request $request, $id)
    {

        $data = $request->validate($this->validateFields);

        $model = $this->data->find($id);
        $data = $request->only($model->getFillable());
        $upload = $request->file('upload');
        $toggleRemoveImage = $request->input('toggleRemoveImage');

        $data['image'] = Filex::uploadOrRemove($model->image, 'news', $upload, 'public', $toggleRemoveImage);
        $data['date'] = ConvertDate::strDatetimeToDate($data['date']);

        $model->fill($data)->save();
                
        return redirect()->route('news.index');
    }

    public function destroy(Request $request, $id)
    {
        //
        $model = $this->data->find($id);
        $fileName = $model->image;
        $model->delete();
        Filex::delete($fileName);

        return redirect()->route('news.index');
    }
}
