<?php

namespace Arins\Traits\Repositories;

trait ByActivitytype
{

    public function byActivitytype($id, $take=null)
    {
        if ($take == null) {
            return $this->data::where('activitytype_id', $id)->get();
        } else {
            return $this->data::where('activitytype_id', $id)
            ->take($take)
            ->get();
        }
    }


}

