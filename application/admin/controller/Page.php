<?php

namespace app\admin\controller;

use think\Controller;
use think\facade\Request;
use app\admin\facade\Page as PageFacade;
use app\admin\service\Page as PageService;

class Page extends Controller
{
    // private $page;

    // /**
    //  * Page constructor.
    //  * @param App|null $app
    //  * @param PageService $page
    //  */
    // public function __construct(App $app = null, PageService $page = null)
    // {
    //     parent::__construct($app);
    //     $this->page = $page;
    // }

    /**
     * 列表页
     *
     * @return \think\Response
     */
    public function index()
    {
        return view();
    }
    /**
     * 数据添加
     *
     * @return \think\Response
     */
    public function welcome1()
    {
        if (Request::isGet()) {
            return view();
        }
        return json(PageFacade::add());
    }

    /**
     * 编辑
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function edit($id)
    {
        if (Request::isGet()) {
            //$this->assign('data', ArticleFacade::getDataById());
            //$this->assign('type', ArticleTypeFacade::getAll());
            return view();
        }
        return json(PageFacade::editData());
    }

    /**
     * 删除
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function delete($id)
    {
        return json(PageFacade::deleteData());
    }
}