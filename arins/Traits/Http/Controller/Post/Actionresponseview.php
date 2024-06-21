<?php

namespace Arins\Traits\Http\Controller\Post;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

trait Actionresponseview
{

    public function responseViewStore0()
    {
        return redirect()->route($this->sViewName . '.index');
    }

    public function responseViewStore1()
    {
        // return dd('berhasil response view store 1');
        return redirect()->route($this->sViewName . '.create')
        ->withErrors($this->validator)
        ->withInput();
    }

    public function responseViewStore2()
    {
        // return dd('berhasil response view store 2');
        return redirect()->route($this->sViewName . '.create')
        ->withInput();
    }

    public function responseViewUpdate0($id)
    {
        return redirect()->route($this->sViewName . '.index');
    }

    public function responseViewUpdate1($id)
    {
        return redirect()->route($this->sViewName . '.edit', $id)
        ->withErrors($this->validator)
        ->withInput();
    }

    public function responseViewUpdate2($id)
    {
        return redirect()->route($this->sViewName . '.edit', $id)
        ->withInput();
    }

    public function responseViewDestroy0($id)
    {
        return redirect()->route($this->sViewName . '.index');
    }

    public function responseViewDestroy1($id)
    {
        //code here...
    }

    public function responseViewDestroy2($id)
    {
        //code here...
    }


}

