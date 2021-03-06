<?php

/*
 * This file is part of the thans/layui-admin.
 *
 * (c) Thans <thans@thans.cn>
 *
 * This source file is subject to the Apache2.0 license that is bundled.
 */

namespace Kuiba\kuibaAdmin\model;

use think\Model;

class Admins extends Model
{
    protected $hidden = ['password', 'salt'];

    protected $name = 'admins';

    public $statusText
    = [
        0 => '正常',
        1 => '禁用',
    ];

    public function roles()
    {
        return $this->belongsToMany(
            'AuthRole',
            'Kuiba\kuibaAdmin\model\AuthRoleAdmins',
            'role_id',
            'admins_id'
        );
    }

    public function hidden(array $array = [], $override = false)
    {
        parent::hidden(array_merge($this->hidden, $array), $override);

        return $this;
    }

    public function getLastLoginTimeAttr($value)
    {
        return $value ? date('Y-m-d H:i:s', $value) : '未登录过';
    }

    public function getStatusTextAttr($value, $data)
    {
        return $this->statusText[$data['status']];
    }

    public static function init()
    {
        self::event(
            'before_insert',
            function ($admins) {
                self::existAdmins($admins);
                $admins['salt'] = random_str(20);
                $admins['password'] = encrypt_password(
                    $admins['password'],
                    $admins['salt']
                );
            }
        );
        self::event(
            'before_update',
            function ($admins) {
                self::existAdmins($admins, $admins['id']);
            }
        );
    }

    public static function existAdmins($admins, $admins_id = '')
    {
        if (self::exist('name', $admins['name'], $admins_id)) {
            exception('管理员已存在');
        }
        if (self::exist('nickname', $admins['nickname'], $admins_id)) {
            exception('昵称已存在');
        }
        if (self::exist('mobile', $admins['mobile'], $admins_id)) {
            exception('手机号已存在');
        }
        if (self::exist('email', $admins['email'], $admins_id)) {
            exception('邮箱已存在');
        }
    }

    public static function exist($field, $value, $admins_id = '')
    {
        $where = [];
        if ($admins_id) {
            $where[] = ['id', 'neq', $admins_id];
        }
        $model = self::where($where);
        if ($value && $model->where($field, $value)->find()) {
            return true;
        }

        return false;
    }
}