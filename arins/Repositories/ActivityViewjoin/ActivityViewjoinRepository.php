<?php

namespace Arins\Repositories\ActivityViewjoin;

use Arins\Repositories\BaseRepository;
use Arins\Repositories\Activitytype\ActivitytypeRepositoryInterface;
use Carbon\Carbon;

class ActivityViewjoinRepository extends BaseRepository implements ActivityViewjoinRepositoryInterface
{
    public function __construct($parData)
    {
        parent::__construct($parData);

        $this->inputField = [
        ];

        $this->validateInput = [
        ];

        $this->validateField = [
        ];

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

    public function getTaskByUser($userId, $activitytype_id=null, $where=null, $take=null) {

        if (isset($where)) {

            $result = $where->filterByUserId($userId);

        } else {

            $result = $this->filterByUserId($userId);

        }
        
        if (isset($activitytype_id)) {
            
            $result = $result->where('activitytype_id', $activitytype_id);

        } //end if

        if ($take == null) {
            $result = $result->get();
        } else {
            $result = $result
            ->orderBy('startdt', 'desc')
            ->orderBy('id', 'desc')
            ->take($take)->get();
        }

        return $result;
    }

    public function getSupportByUser($userId, $take=null) {

        $result = $this->getTaskByUser($userId, 1, null, $take);

        return $result;
    }

    public function getProjectByUser($userId, $take=null) {

        $result = $this->getTaskByUser($userId, 3, null, $take);

        return $result;
    }

}