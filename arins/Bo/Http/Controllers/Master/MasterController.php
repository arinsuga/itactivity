<?php

namespace Arins\Bo\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Arins\Http\Controllers\BoController;
use Arins\Traits\Http\Controller\Base;

// use Arins\Facades\Response;
// use Arins\Facades\Filex;
// use Arins\Facades\Formater;
// use Arins\Facades\ConvertDate;

class MasterController extends BoController
{
    use Base;

    protected $activitytype_id;
    protected $tasktype_id, $tasksubtype1_id, $tasksubtype2_id;

    public function __construct()
    {
        parent::__construct();
    }

    //override method
    protected function transformField($paDataField) {
        $dataField = $paDataField;
        
        //activitytype
        if ($this->activitytype_id != null)
        {
            $dataField['activitytype_id'] = $this->activitytype_id;
        } //end if

        //tasktype
        if ($this->tasktype_id != null)
        {
            $dataField['tasktype_id'] = $this->tasktype_id;
        } //end if

        //tasksubtype1
        if ($this->tasksubtype1_id != null)
        {
            $dataField['tasksubtype1_id'] = $this->tasksubtype1_id;
        } //end if

        //tasksubtype2
        if ($this->tasksubtype2_id != null)
        {
            $dataField['tasksubtype2_id'] = $this->tasksubtype2_id;
        } //end if

        return $dataField;
    } //end method
    

}
