<?php

namespace Arins\Bo\Http\Controllers\Activity;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

trait Cancel
{

    /** cancel */
    public function cancel($id)
    {
        //Check if additional data exist
        if (method_exists($this, 'editAdditionalData')) {
            $additionalData = $this->editAdditionalData($id);
        } //end if

        $this->processEdit($id);

        return $this->responseView('cancel');
    }

    /** post */
    public function updateCancel(Request $request, $id)
    {
        $processResult = $this->updateResult($request, $id, 4);
        return $this->runResponseMethod('update', $processResult, $id);
    }

}

