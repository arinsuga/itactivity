<?php

namespace Arins\Traits\Http\Controller\Post;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use Arins\Facades\Response;
use Arins\Facades\Filex;
use Arins\Facades\Formater;
use Arins\Facades\ConvertDate;

trait Action
{
    use Actionprocess, Actionresponseview, Actionresponsejson;

    /** post */
    public function store(Request $request)
    {
        $processResult = $this->processStore($request);
        return $this->runResponseMethod('store', $processResult);
    }

    /** post */
    public function update(Request $request, $id)
    {
        $processResult = $this->processUpdate($request, $id);
        return $this->runResponseMethod('update', $processResult, $id);
    }

    /** post */
    public function destroy($id)
    {
        $processResult = $this->processDestroy($id);
        return $this->runResponseMethod('destroy', $processResult, $id);

   }


}

