<?php
namespace app\site\model;
use think\Model;
use traits\model\SoftDelete;

class ArticleTags extends Model{
    
    /**
     * 使用软删除
     */
    use SoftDelete;
    
    /**
     * 开启自动写入字段
     */
    protected static $deleteTime = 'delete_time';

    /**
     * 查询所有的标签
     * @param where
     */
    public function getAllTagsByWhere($where="")
    {
        return $this::withTrashed()->where($where)
        ->order('id desc')
        ->select();
    }
}
