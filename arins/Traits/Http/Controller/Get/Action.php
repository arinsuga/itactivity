<?php

namespace Arins\Traits\Http\Controller\Get;

use Arins\Facades\Response;
use Arins\Facades\Filex;
use Arins\Facades\Formater;
use Arins\Facades\ConvertDate;

trait Action
{
    use Actionprocess, Actionresponse;

    /** get */
    public function index()
    {
        //Check if additional data exist
        if (method_exists($this, 'indexAdditionalData')) {
            $additionalData = $this->indexAdditionalData();
        } //end if

        $this->processIndex();

        return $this->runResponseMethod('index', null, null);
    }

    /** get */
    public function show($id)
    {
        //Check if additional data exist
        if (method_exists($this, 'showAdditionalData')) {
            $additionalData = $this->showAdditionalData($id);
        } //end if

        $this->processShow($id);

        return $this->runResponseMethod('show', null, null);
    }

    /** get */
    public function create()
    {
        //Check if additional data exist
        if (method_exists($this, 'createAdditionalData')) {
            $additionalData = $this->createAdditionalData();
        } //end if

        $this->processCreate();

        return $this->runResponseMethod('create', null, null);
    }

    /** get */
    public function edit($id)
    {
        //Check if additional data exist
        if (method_exists($this, 'editAdditionalData')) {
            $additionalData = $this->editAdditionalData($id);
        } //end if

        $this->processEdit($id);

        return $this->runResponseMethod('edit', null, null);
    }

}

