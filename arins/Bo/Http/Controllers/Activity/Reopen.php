<?php

namespace Arins\Bo\Http\Controllers\Activity;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

trait Reopen
{

    /** pending */
    public function reopen($id)
    {
        //Check if additional data exist
        if (method_exists($this, 'editAdditionalData')) {
            $additionalData = $this->editAdditionalData($id);
        } //end if

        $this->processEdit($id);

        return $this->responseView('reopen');
    }

    /** post */
    public function updateReopen(Request $request, $id)
    {
        $processResult = $this->updateResult($request, $id, 1);
        return $this->runResponseMethod('update', $processResult, $id);
    }

}

