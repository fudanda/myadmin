<?php

namespace Kuiba\kuibaAdmin\model;

use think\Model;
use think\model\concern\SoftDelete;

class AuthPermission extends Model
{
    use SoftDelete;

    protected $name = 'auth_permission';
}
