<?php

namespace Arins\Bo\Http\Controllers\Activity;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

trait Pending
{

    /** pending */
    public function pending($id)
    {
        //Check if additional data exist
        if (method_exists($this, 'editAdditionalData')) {
            $additionalData = $this->editAdditionalData($id);
        } //end if

        $this->processEdit($id);

        return $this->responseView('pending');
    }

    /** post */
    public function updatePending(Request $request, $id)
    {
        $processResult = $this->updateResult($request, $id, 3);
        return $this->runResponseMethod('update', $processResult, $id);
    }

}

