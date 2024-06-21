<?php

namespace Arins\Traits\Http\Controller\Get;

trait Actionresponse
{
    protected function responseViewIndex()
    {
        $this->aResponseData = ['viewModel' => $this->viewModel];

        $this->insertDataModelToResponseData();

        // foreach ($this->dataModel as $key => $value) {

        //     $this->aResponseData[$key] = $value;

        // } //end loop

        return view($this->sViewRoot.'.index', $this->aResponseData);
    }

    protected function responseJsonIndex()
    {
        $this->aResponseData = ['viewModel' => $this->viewModel];

        $this->insertDataModelToResponseData();

        // foreach ($this->dataModel as $key => $value) {

        //     $this->aResponseData[$key] = $value;

        // } //end loop

        return json_encode($this->aResponseData);
    }

    protected function responseViewShow()
    {
        $this->aResponseData = [
            'viewModel' => $this->viewModel,
            'new' => false,
            'fieldEnabled' => false
        ];

        $this->insertDataModelToResponseData();

        // foreach ($this->dataModel as $key => $value) {

        //     $this->aResponseData[$key] = $value;

        // } //end loop

        return view($this->sViewRoot.'.show', $this->aResponseData);
    }
    
    protected function responseJsonShow()
    {
        $this->aResponseData = [
            'viewModel' => $this->viewModel,
            'new' => false,
            'fieldEnabled' => false
        ];

        $this->insertDataModelToResponseData();

        // foreach ($this->dataModel as $key => $value) {

        //     $this->aResponseData[$key] = $value;

        // } //end loop

        return json_encode($this->aResponseData);
    }

    protected function responseViewCreate()
    {
        $this->aResponseData = [
            'viewModel' => $this->viewModel,
            'new' => true,
            'fieldEnabled' => true,
        ];

        $this->insertDataModelToResponseData();

        // foreach ($this->dataModel as $key => $value) {

        //     $this->aResponseData[$key] = $value;

        // } //end loop

        return view($this->sViewRoot.'.create', $this->aResponseData);
    }

    protected function responseJsonCreate()
    {
        $this->aResponseData = [
            'viewModel' => $this->viewModel,
            'new' => true,
            'fieldEnabled' => true,
            'dataModel' => $this->dataModel
        ];

        $this->insertDataModelToResponseData();

        // foreach ($this->dataModel as $key => $value) {

        //     $this->aResponseData[$key] = $value;

        // } //end loop

        return json_encode($this->aResponseData);
    }

    protected function responseViewEdit()
    {
        $this->aResponseData = [
            'viewModel' => $this->viewModel,
            'new' => false,
            'fieldEnabled' => true,
            'dataModel' => $this->dataModel
        ];

        $this->insertDataModelToResponseData();

        // foreach ($this->dataModel as $key => $value) {

        //     $this->aResponseData[$key] = $value;

        // } //end loop

        return view($this->sViewRoot.'.edit', $this->aResponseData);
    }

    protected function responseJsonEdit()
    {
        $this->aResponseData = [
            'viewModel' => $this->viewModel,
            'new' => false,
            'fieldEnabled' => true,
            'dataModel' => $this->dataModel
        ];

        $this->insertDataModelToResponseData();

        // foreach ($this->dataModel as $key => $value) {

        //     $this->aResponseData[$key] = $value;

        // } //end loop

        return json_encode($this->aResponseData);
    }

}

