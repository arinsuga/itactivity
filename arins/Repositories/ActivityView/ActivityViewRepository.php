<?php

namespace Arins\Repositories\ActivityView;

use Arins\Repositories\BaseRepository;
use Arins\Repositories\Activitytype\ActivitytypeRepositoryInterface;
use Carbon\Carbon;

class ActivityViewRepository extends BaseRepository implements ActivityViewRepositoryInterface
{
    public function __construct($parData)
    {
        parent::__construct($parData);

    }

    public function filterByUserId($id, $where=null) {
        if (isset($where)) {

            $result = $where->model::where('created_by', $id);

        } else {

            $result = $this->model::where('created_by', $id);

        }


        return $result;
    }

    public function filterUntilDate($untilDate, $where=null) {
        if (isset($where)) {

            $result = $where->whereDate('activity_dt', '<=', $untilDate);

        } else {

            $result = $this->whereDate('activity_dt', '<=', $untilDate);

        }

        return $result;
    }

    public function countOpenSupportIncidentByUserUntilDate($userId, $untilDate) {

        $result = $this->filterByUserId($userId);
        $result = $this->filterUntilDate($untilDate, $result);
        $result = $result->sum('support_incident_open');

        return $result;
    }

    public function countOpenSupportRequestByUserUntilDate($userId, $untilDate) {

        $result = $this->filterByUserId($userId);
        $result = $this->filterUntilDate($untilDate, $result);
        $result = $result->sum('support_request_open');

        return $result;
    }

    public function countSupportPendingByUserUntilDate($userId, $untilDate) {

        $result = $this->filterByUserId($userId);
        $result = $this->filterUntilDate($untilDate, $result);
        $result = $result->sum('support_pending');

        return $result;
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
    
}