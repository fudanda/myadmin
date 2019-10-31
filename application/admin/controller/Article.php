<?php

namespace app\admin\controller;

use think\Controller;
use think\facade\Request;
use app\common\controller\Common;
use app\admin\facade\Article as ArticleFacade;
use app\admin\service\Article as ArticleService;

class Article extends Common
{
    private $article;

    /**
     * Article constructor.
     * @param App|null $app
     * @param ArticleService $article
     */
    public function __construct(App $app = null, ArticleService $article = null)
    {
        parent::__construct($app);
        $this->article = $article;
    }

    /**
     * 列表页
     *
     * @return \think\Response
     */
    public function index()
    {
        if (!Request::isAjax()) return view();
        return json(ArticleFacade::dataList());
    }
    /**
     * 数据添加
     *
     * @return \think\Response
     */
    public function add()
    {
        if (Request::isGet()) {
            return view();
        }
        return json(ArticleFacade::add());
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
        return json(ArticleFacade::editData());
    }

    /**
     * 删除
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function delete($id)
    {
        return json(ArticleFacade::deleteData());
    }
}
