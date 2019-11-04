<?php

namespace Kuiba\kuibaAdmin\Facade;

use Kuiba\kuibaAdmin\Facade;

class Tool extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Kuiba\kuibaAdmin\Tool::class;
    }
}