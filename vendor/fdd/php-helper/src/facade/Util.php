<?php

namespace Kuiba\kuibaAdmin\facade;

// use Kuiba\kuibaAdmin\Facade;
use think\Facade;

class Util extends Facade
{
    protected static function getFacadeClass()
    {
        return 'Kuiba\kuibaAdmin\Util';
    }
}