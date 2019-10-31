<?php
/**
 * author:
 * time:
 */
namespace app\admin\facade;

use think\Facade;

/**
 * @method array getList() static 获取列表
 * @method array addInfo() static 新增记录
 * @method array getInfo() static 获取记录
 * @method array updateInfo() static 更新记录
 * @method array deleteData() static 删除数据
 */
class Page extends Facade
{
    protected static function getFacadeClass()
    {
        return 'app\admin\service\Page';
    }
}
