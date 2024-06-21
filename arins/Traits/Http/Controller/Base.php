<?php

namespace Arins\Traits\Http\Controller;

use Arins\Traits\Http\Controller\Get\Action as Actionget;
use Arins\Traits\Http\Controller\Post\Action as Actionpost;

trait Base
{
    use Actionget, Actionpost;

}

