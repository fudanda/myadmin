<?php

namespace Kuiba\kuibaAdmin\facade;

// use Kuiba\kuibaAdmin\Facade;
use think\Facade;

class Casbin extends Facade
{
    protected static function getFacadeClass()
    {
        return 'Kuiba\kuibaAdmin\Auth\Casbin';
    }
}