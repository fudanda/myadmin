<?php

use think\facade\Route; // 门面类：路由
Route::group('admin', function () {
    Route::get('$', 'admin/page/index'); //后台页面
    Route::get('admin/login$', 'admin/login/index'); //登入跳转
    Route::post('admin/login$', 'admin/login/login'); //登入提交
    Route::get('admin/logout$', 'admin/login/logout'); //登出跳转


    Route::get('colorselect$', 'admin/page/colorselect'); //
    Route::get('editor$', 'admin/page/editor'); //
    Route::get('form$', 'admin/page/form'); //
    Route::get('formstep$', 'admin/page/formstep'); //
    Route::get('icon$', 'admin/page/icon'); //
    Route::get('iconpicker$', 'admin/page/iconpicker'); //
    Route::get('layer$', 'admin/page/layer'); //
    Route::get('login1$', 'admin/page/login1'); //
    Route::get('login2$', 'admin/page/login2'); //
    Route::get('menu$', 'admin/page/menu'); //
    Route::get('setting$', 'admin/page/setting'); //
    Route::get('table$', 'admin/page/table'); //
    Route::get('tableselect$', 'admin/page/tableselect'); //
    Route::get('upload$', 'admin/page/upload'); //
    Route::get('userpassword$', 'admin/page/userpassword'); //
    Route::get('usersetting$', 'admin/page/usersetting'); //
    Route::get('welcome1$', 'admin/page/welcome1'); //
    Route::get('welcome2$', 'admin/page/welcome2'); //
});