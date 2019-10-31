<?php

use think\facade\Route; // 门面类：路由
/** 特殊路由 */
// Route::get('/admin', 'admin/index/index'); // 首页路由
/** 首页路由器：开始 */
Route::group('admin', function () {
    Route::get('page/welcome$', 'admin/page/welcome'); //首页
    Route::get('page/welcome1$', 'admin/page/welcome1'); //首页
    Route::get('page/welcome2$', 'admin/page/welcome2'); //首页

    Route::get('login$', 'admin/login/index'); //登入跳转
    Route::post('login$', 'admin/login/login'); //登入提交
    Route::get('logout$', 'admin/login/logout'); //登出跳转





    // Route::resource('menu', 'admin/menu');

    Route::get('menu$', 'admin/menu/index');
    Route::get('menu/index$', 'admin/menu/index');
    Route::post('menu/index$', 'admin/menu/index');
    Route::get('menu/add$', 'admin/menu/add');
    Route::post('menu/add$', 'admin/menu/add');
    Route::get('menu/edit/:id$', 'admin/menu/edit');
    Route::post('menu/edit/:id$', 'admin/menu/edit');
});