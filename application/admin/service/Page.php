<?php

/**
 * author:
 * time:
 */

namespace app\admin\service;

use app\common\model\Page as PageModel;

/**
 * @method
 */

class Page extends PageModel
{
    /**
     * 获取数据列表
     */
    public function getList()
    {
        $data = [
            'page_id' =>  input('param.page_id/s', null),
        ];
        $condition[] = ['page_id', 'like', '%' . $data['page_id'] . '%'];
        /** 查询列表数据 */
        $list = $this->scope(['order', 'page'])->where($condition)->select();
        /** 查询总数据量 */
        $total = $this->where($condition)->count();
        /** 返回数据 */
        return ['code' => 0, 'msg' => '获取成功', 'data' => $list, 'total' => $total];
    }
    /**
     * 新增数据
     */
    public function addInfo()
    {
        $data = [
            'page_title' =>  input('post.page_title/s', '', 'trim'),
        ];
        //$save_res = saveBase64Image($data['article_litimg'], 'admin');
        //if ($save_res['code'] != 0) return  ['code' => 1, 'msg' => $save_res['msg']];
        //$data['article_litimg'] = $save_res['url'];
        $result = self::save($data);

        /* 确认并返回结果 */
        return $result  ? ['code' => 0, 'msg' => '新增成功', 'data' => $data] : ['code' => 1, 'msg' => '新增失败'];
    }
    /**
     * 获取数据
     */
    public function getInfo()
    {
        /* 验证用户ID存在性 */
        if (!$id = input('param.page_id/s')) return ['code' => 1, 'msg' => 'ID不能为空'];
        $result = self::get($id);
        // $result = $this->getLastsql();
        /* 确认并返回结果 */
        return $result;
    }
    /**
     * 更新数据
     * @param null
     * @return array
     */
    public function updateInfo()
    {
        /* 验证用户ID存在性 */
        if (!$id = input('param.page_id/s')) return ['code' => 1, 'msg' => 'ID不能为空'];
        $data = [
            'page_data'   =>  input('post.page_data/s', '', 'trim'),
        ];
        /* 执行更新 */
        $result = self::where('page_id', $id)
            ->update($data);
        $result = $this->getLastSql();
        /* 确认并返回结果 */
        return $result ? ['code' => 0, 'msg' => '更新成功'] : ['code' => 1, 'msg' => '更新失败'];
    }
    /**
     * 删除数据（单多项）
     * @param null
     * @return array
     */
    public function deleteData()
    {
        /* 验证用户ID存在性 */
        if (!$id = input('param.{%data_field%_id}/a')) return ['code' => 1, 'msg' => 'ID不能为空'];

        /* 执行删除 */
        $result = self::destroy($id);

        /* 确认并返回结果 */
        return $result ? ['code' => 0, 'msg' => '删除成功'] : ['code' => 1, 'msg' => '删除失败'];
    }
}