<?php

namespace Arins\Bo\Http\Controllers\Activity;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

trait Close
{

    /** close */
    public function close($id)
    {
        //Check if additional data exist
        if (method_exists($this, 'editAdditionalData')) {
            $additionalData = $this->editAdditionalData($id);
        } //end if

        $this->processEdit($id);

        return $this->responseView('close', false, false, true);
    }

    /** post */
    public function updateClose(Request $request, $id)
    {
        $processResult = $this->updateResult($request, $id, 2);
        return $this->runResponseMethod('update', $processResult, $id);
    }

}

