<?php

namespace Arins\Http\Controllers;

use App\Http\Controllers\Controller;
//use Illuminate\Http\Request;

// use Arins\Facades\Response;
// use Arins\Facades\Filex;
// use Arins\Facades\Formater;
// use Arins\Facades\ConvertDate;

class BoController extends Controller
{

    protected $appConfig, $appMode;
    protected $viewModel, $dataModel, $dataField;
    protected $sViewRoot, $sViewName;
    protected $aResponseData;
    protected $data, $validator;
    protected $controllerModes;
    protected $uploadDirectory;

    public function __construct($psViewName=null)
    {
        $this->middleware('auth.admin');
        $this->middleware('is.admin');

        if ($psViewName != null)
        {
            $this->sViewName = $psViewName;
        } //end if
        
        $this->sViewRoot = 'bo.' . $this->sViewName;
        $this->appConfig = 'a1.app';
        $this->appMode = config($this->appConfig . '.mode');
        $this->aResponseData = [];
        $this->dataModel = [];

        $this->controllerModes = $this->initControllerModes();
    }

    protected function initControllerModes()
    {
        return [
            'mvc' => [
                'response' => [
                    'index' => 'responseViewIndex',
                    'show' => 'responseViewShow',
                    'create' => 'responseViewCreate',
                    'edit' => 'responseViewEdit',
                    'delete' => 'responseViewDelete', //Temporary not use (only prepare)
                    'store' => ['responseViewStore0', 'responseViewStore1', 'responseViewStore2'],
                    'update' => ['responseViewUpdate0', 'responseViewUpdate1', 'responseViewUpdate2'],
                    'destroy' => ['responseViewDestroy0', 'responseViewDestroy1', 'responseViewDestroy2'],
                ] //end response
    
                
            ], //end mvc
    
            'api' => [
                'response' => [
                    'index' => 'responseJsonIndex',
                    'show' => 'responseJsonShow',
                    'create' => 'responseJsonCreate',
                    'edit' => 'responseJsonEdit',
                    'delete' => 'responseJsonDelete', //Temporary not use (only prepare)
                    'store' => ['responseJsonStore0', 'responseJsonStore1', 'responseJsonStore2'],
                    'update' => ['responseJsonUpdate0', 'responseJsonUpdate1', 'responseJsonUpdate2'],
                    'destroy' => ['responseJsonDestroy0', 'responseJsonDestroy1', 'responseJsonDestroy2'],
                ], //end response
    
                
            ], //end api
    
        ];
    }

    protected function insertDataModelToResponseData() {

        foreach ($this->dataModel as $key => $value) {

            $this->aResponseData[$key] = $value;

        } //end loop
        

    }

    protected function runResponseMethod($methodName, $responseType = null, $id = null)
    {        
        if ($responseType === null)
        {
            $runMethod = $this->controllerModes[config('a1.app.mode')]['response'][$methodName];
        } else {
            $runMethod = $this->controllerModes[config('a1.app.mode')]['response'][$methodName][$responseType];
        }

        if ($id === null)
        {
            return $this->$runMethod();
        } else {
            return $this->$runMethod($id);
        }
    }

}
