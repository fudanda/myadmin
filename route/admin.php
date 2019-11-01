<?php

use think\facade\Route; // 门面类：路由
/** 特殊路由 */
Route::get('/admin', 'admin/page/index'); // 首页路由
/** 首页路由器：开始 */
Route::group('admin', function () {

    Route::get('admin/login$', 'admin/login/index'); //登入跳转
    Route::post('admin/login$', 'admin/login/login'); //登入提交
    Route::get('admin/logout$', 'admin/login/logout'); //登出跳转
    Route::get('page/colorselect$', 'admin/page/colorselect'); //
    Route::get('page/editor$', 'admin/page/editor'); //
    Route::get('page/form$', 'admin/page/form'); //
    Route::get('page/formstep$', 'admin/page/formstep'); //
    Route::get('page/icon$', 'admin/page/icon'); //
    Route::get('page/iconpicker$', 'admin/page/iconpicker'); //
    Route::get('page/layer$', 'admin/page/layer'); //
    Route::get('page/login1$', 'admin/page/login1'); //
    Route::get('page/login2$', 'admin/page/login2'); //
    Route::get('page/menu$', 'admin/page/menu'); //
    Route::get('page/setting$', 'admin/page/setting'); //
    Route::get('page/table$', 'admin/page/table'); //
    Route::get('page/tableselect$', 'admin/page/tableselect'); //
    Route::get('page/upload$', 'admin/page/upload'); //
    Route::get('page/userpassword$', 'admin/page/userpassword'); //
    Route::get('page/usersetting$', 'admin/page/usersetting'); //
    Route::get('page/welcome1$', 'admin/page/welcome1'); //
    Route::get('page/welcome2$', 'admin/page/welcome2'); //
});