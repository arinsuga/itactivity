<?php

namespace Arins\Repositories\Activity;

use Arins\Repositories\BaseRepository;
use Arins\Repositories\Activitytype\ActivitytypeRepositoryInterface;
use Carbon\Carbon;

class ActivityRepository extends BaseRepository implements ActivityRepositoryInterface
{
    public function __construct($parData)
    {
        parent::__construct($parData);

        $this->inputField = [
            'activitytype_id' => null,
            'activitysubtype_id' => null,
            'activitystatus_id' => null,
            'tasktype_id' => null,
            'tasksubtype1_id' => null,
            'tasksubtype2_id' => null,
            'name' => null,
            'subject' => null,
            'description' => null,
            'resolution' => null,
            'image' => null,
            'startdt' => null,
            'enddt' => null,
            'enduser_id' => null,
            'enduserdept_id' => null,
            'endusersubdept_id' => null,
            'technician_id' => null
        ];

        $this->validateInput = [
            //remarkfortes 'activitysubtype_id' => 'required',
            //remarkfortes 'tasktype_id' => 'required',
            'subject' => 'required',
            'description' => 'required',
        ];

        $this->validateField = [
            //code array here...
            'startdt' => 'required',
            'activitytype_id' => 'required',
            //remarkfortes 'activitysubtype_id' => 'required',
            //remarkfortes 'tasktype_id' => 'required',
            'subject' => 'required',
            'description' => 'required',
        ];

    }

    function byActivitytypeCustom($id, $filter, $take=null)
    {
        $result = $this->model::where('activitytype_id', $id);

        //end date
        if (
            isset($filter->startdt) &&
            isset($filter->enddt)
        ) {
            $result = $result->where('startdt', '>=', $filter->startdt);
            $result = $result->where('enddt', '<=', $filter->enddt);
        }

        //start date
        if (isset($filter->startdt)) {
            $result = $result->where('startdt', '>=', $filter->startdt);
        }

        //activitystatus_id
        if (isset($filter->activitystatus_id)) {
            $result = $result->where('activitystatus_id', $filter->activitystatus_id);
        }
        //enduser_id
        if (isset($filter->enduser_id)) {
            $result = $result->where('enduser_id', $filter->enduser_id);
        }
        //technician_id
        if (isset($filter->technician_id)) {
            $result = $result->where('technician_id', $filter->technician_id);
        }
        //activitysubtype_id
        if (isset($filter->activitysubtype_id)) {
            $result = $result->where('activitysubtype_id', $filter->activitysubtype_id);
        }
        //tasktype_id
        if (isset($filter->tasktype_id)) {
            $result = $result->where('tasktype_id', $filter->tasktype_id);
        }
        //tasksubtype1_id
        if (isset($filter->tasksubtype1_id)) {
            $result = $result->where('tasksubtype1_id', $filter->tasksubtype1_id);
        }
        //tasksubtype2_id
        if (isset($filter->tasksubtype2_id)) {
            $result = $result->where('tasksubtype2_id', $filter->tasksubtype2_id);
        }


        if ($take == null) {
            $result = $result->get();
        } else {
            $result = $result->take($take)->get();
        }

        return $result;
    }
    
    public function byActivitytype($id, $take=null)
    {
        if ($take == null) {
            return $this->model::where('activitytype_id', $id)->get();
        } else {
            return $this->model::where('activitytype_id', $id)
            ->take($take)
            ->get();
        }
    }

    public function byActivitytypeOrderByIdAndStartdtDesc($id, $take=null)
    {
        if ($take == null) {

            return $this->model::where('activitytype_id', $id)
            ->orderBy('startdt', 'desc')
            ->orderBy('id', 'desc')
            ->get();

        } else {
            return $this->model::where('activitytype_id', $id)
            ->take($take)
            ->get();
        }
    }

    public function byActivitytypeStatusOpenOrderByIdAndStartdtDesc($id, $take=null)
    {
        if ($take == null) {

            return $this->model::where('activitytype_id', $id)
            ->where('activitystatus_id', 1)
            ->orderBy('startdt', 'desc')
            ->orderBy('id', 'desc')
            ->get();

        } else {
            return $this->model::where('activitytype_id', $id)
            ->where('activitystatus_id', 1)
            ->take($take)
            ->get();
        }
    }

    public function byActivitytypeTodayOrderByIdAndStartdtDesc($id, $take=null)
    {
        if ($take == null) {

            return $this->model::where('activitytype_id', $id)
            ->whereDate('created_at', Carbon::today())
            ->orderBy('startdt', 'desc')
            ->orderBy('id', 'desc')
            ->get();

        } else {
            return $this->model::where('activitytype_id', $id)
            ->take($take)
            ->get();
        }
    }

    //override parent method
    public function allOrderByDateAndIdDesc()
    {
        return $this->model
               ->orderBy('startdt', 'desc')
               ->orderBy('id', 'desc')
               ->get();
    }


    // public function countActivityByActivityType() {

    //     return 'hasil dari function countActivityByActivityType';

    // }

}