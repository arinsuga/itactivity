<?php

namespace Arins\Repositories\Event;

use Arins\Repositories\BaseRepository;
use Arins\Repositories\Event\EventRepositoryInterface;

class EventRepository extends BaseRepository implements EventRepositoryInterface
{
    public function allOrderByDateAndIdDesc()
    {
        return $this->data
               ->orderBy('date', 'desc')
               ->orderBy('id', 'desc')
               ->get();
    }

}