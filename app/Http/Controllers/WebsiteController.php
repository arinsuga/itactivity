<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Arins\Facades\Response;
use Arins\Repositories\News\NewsRepositoryInterface;
use Arins\Repositories\Event\EventRepositoryInterface;
use Arins\Repositories\Producttype\ProducttypeRepositoryInterface;
use Arins\Repositories\Productsubtype\ProductsubtypeRepositoryInterface;
use Arins\Repositories\Product\ProductRepositoryInterface;

class WebsiteController extends Controller
{
    protected $sViewRoot;
    protected $newsData, $eventData;
    protected $productData, $producttypeData, $productsubtypeData;
    protected $navbar;


    /**
     * Create a new controller instance.
     *
     * Method Name: Constructor
     * 
     * @return void
     */
    public function __construct($psViewRoot = 'website',
                                NewsRepositoryInterface $newsData,
                                EventRepositoryInterface $eventData,
                                ProducttypeRepositoryInterface $producttypeData,
                                ProductsubtypeRepositoryInterface $productsubtypeData,
                                ProductRepositoryInterface $productData)
    {
        $this->sViewRoot = $psViewRoot;
        $this->newsData = $newsData;
        $this->eventData = $eventData;
        $this->productData = $productData;
        $this->producttypeData = $producttypeData;
        $this->productsubtypeData = $productsubtypeData;
    }




    protected function initNavbar()
    {
        //initialize navbar active
        $this->navbar = [
            'home' => '',
            'about' => '',
            'product' => '',
            'branch' => '',
            'event' => '',
            'contact' => '',
            'shop' => ''
        ];
    }

    protected function setNavbarActive($activeNavbar)
    {
        $this->initNavbar();
        $this->navbar[$activeNavbar] = 'active';
    }

    /**
     * Method Name: index
     * 
     * http method: GET
     * 
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $this->setNavbarActive('home');
        return view($this->sViewRoot.'.index', ['active' => $this->navbar]);

    } //end method

    /**
     * Method Name: about
     * 
     * http method: GET
     * 
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function about()
    {
        $this->setNavbarActive('about');
        return view($this->sViewRoot.'.about', ['active' => $this->navbar]);
    } //end method

    /**
     * Method Name: about1
     * 
     * http method: GET
     * 
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function about1()
    {

        $this->setNavbarActive('about');
        return view($this->sViewRoot.'.about1', ['active' => $this->navbar]);

    } //end method

    /**
     * Method Name: about2
     * 
     * http method: GET
     * 
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function about2()
    {

        $this->setNavbarActive('about');
        return view($this->sViewRoot.'.about2', ['active' => $this->navbar]);

    } //end method

    /**
     * Method Name: about3
     * 
     * http method: GET
     * 
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function about3()
    {

        $this->setNavbarActive('about');
        return view($this->sViewRoot.'.about3', ['active' => $this->navbar]);

    } //end method

    /**
     * Method Name: product
     * 
     * http method: GET
     * 
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function product()
    {

        $data = [
            'types' => null,
            'subtypes' => null,
            'type1' => null,
            'type2' => null,
            'type3' => null
        ];
        $viewModel = Response::viewModel($data);

        $viewModel->data->types = $this->producttypeData->all();
        // $viewModel->data->type1 = $this->productData->byProducttype(1, 3);
        // $viewModel->data->type2 = $this->productData->byProducttype(2, 3);
        // $viewModel->data->type3 = $this->productData->byProducttype(3, 3);

        $this->setNavbarActive('product');
        return view($this->sViewRoot.'.product',
        ['viewModel' => $viewModel, 'active' => $this->navbar]);
    } //end method

    /**
     * Method Name: productList
     * 
     * http method: GET
     * 
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function productList($producttype_id, $productsubtype_id)
    {
        $viewModel = Response::viewModel();
        $viewModel->data = $this->productData->byMultikey($producttype_id, $productsubtype_id);
        $productsubtype = $this->productsubtypeData->find($productsubtype_id); 

        $this->setNavbarActive('product');
        return view($this->sViewRoot.'.product-list',
        ['viewModel' => $viewModel,
        'productsubtype' => $productsubtype,
        'active' => $this->navbar]);

    } //end method

    /**
     * Method Name: productInfo
     * 
     * http method: GET
     * 
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function productInfo($id)
    {
        $viewModel = Response::viewModel();
        $viewModel->data = $this->productData->find($id);

        $this->setNavbarActive('product');
        return view($this->sViewRoot.'.product-info',
        ['viewModel' => $viewModel, 'active' => $this->navbar]);

    } //end method

    /**
     * Method Name: branch
     * 
     * http method: GET
     * 
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function branch()
    {

        $this->setNavbarActive('branch');
        return view($this->sViewRoot.'.branch', ['active' => $this->navbar]);

    } //end method

    /**
     * Method Name: event
     * 
     * http method: GET
     * 
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function event()
    {
        $data = [
            'news' => null,
            'event' => null
        ];
        
        $viewModel = Response::viewModel($data);
        $viewModel->data->news = $this->newsData->allOrderByDateAndIdDescTake(3);
        $viewModel->data->event = $this->eventData->allOrderByDateAndIdDescTake(6);

        $this->setNavbarActive('event');
        return view($this->sViewRoot.'.event',
        ['viewModel' => $viewModel, 'active' => $this->navbar]);
    } //end method

    /**
     * Method Name: eventShow
     * 
     * http method: GET
     * 
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function newsShow($id)
     {
        $viewModel = Response::viewModel();
        $viewModel->data = $this->newsData->find($id);

        $this->setNavbarActive('event');
        return view($this->sViewRoot.'.news-show',
        ['viewModel' => $viewModel, 'active' => $this->navbar]);
     } //end method

    /**
     * Method Name: eventList
     * 
     * http method: GET
     * 
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function newsList()
    {
        $viewModel = Response::viewModel();
        $viewModel->data = $this->newsData->allOrderByDateAndIdDesc();

        $this->setNavbarActive('event');
        return view($this->sViewRoot.'.news-list',
        ['viewModel' => $viewModel, 'active' => $this->navbar]);
    } //end method
    
     /**
     * Method Name: contact
     * 
     * http method: GET
     * 
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function contact()
    {

        $this->setNavbarActive('contact');
        return view($this->sViewRoot.'.contact', ['active' => $this->navbar]);
    } //end method

     /**
     * Method Name: shop
     * 
     * http method: GET
     * 
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function shop()
    {

        $this->setNavbarActive('shop');
        return view($this->sViewRoot.'.shop', ['active' => $this->navbar]);
    } //end method

} //end class
