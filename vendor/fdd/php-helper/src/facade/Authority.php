<?php

namespace Kuiba\kuibaAdmin\facade;

// use think\Facade;
use Kuiba\kuibaAdmin\Facade;


class Authority extends Facade
{
    protected static function getFacadeClass()
    {
        return 'Kuiba\kuibaAdmin\Auth\Authority';
    }
}