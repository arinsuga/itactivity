<?php

namespace Arins\Bo\Http\Controllers\Employee;

use Arins\Http\Controllers\BoController;
use Arins\Traits\Http\Controller\Base;

use Arins\Repositories\Employee\EmployeeRepositoryInterface;
use Arins\Repositories\Job\JobRepositoryInterface;
use Arins\Repositories\Dept\DeptRepositoryInterface;
use Arins\Repositories\Subdept\SubdeptRepositoryInterface;

class EmployeeController extends BoController
{
    use Base;

    protected $dataDept, $dataSubdept, $dataJob;

    public function __construct(EmployeeRepositoryInterface $parData,
                                DeptRepositoryInterface $parDept,
                                SubdeptRepositoryInterface $parSubdept,
                                JobRepositoryInterface $parJob)
    {
        $this->uploadDirectory = 'employee';
        $this->sViewName = 'employee';

        parent::__construct('employee');

        $this->data = $parData;
        $this->dataDept = $parDept;
        $this->dataSubdept = $parSubdept;
        $this->dataJob = $parJob;

        //Pakai cara ini jika create dan edit additional data nya sama
        //Cara lain adalah buat method [actionname]AdditionalData dan
        //tempatkan array dibawah di dalam method tersebut
        $this->dataModel = [
            'subdept' => $this->dataSubdept->all(),
            'job' => $this->dataJob->all()];        
    }

    protected function transformField($paDataField) {
        $dataField = $paDataField;

        $subdept_id = $dataField['subdept_id'];
        $dataField['dept_id'] = $this->dataSubdept->find($subdept_id)->dept->id;

        return $dataField;
    }

}
