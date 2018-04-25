<?php

namespace app\admin\model;

use think\Model;

class ExpressAddress extends Model
{
    // 表名
    protected $name = 'express_address';
    
    // 自动写入时间戳字段
    protected $autoWriteTimestamp = 'int';

    // 定义时间戳字段名
    protected $createTime = 'createtime';
    protected $updateTime = 'updatetime';
    
    // 追加属性
    protected $append = [
        'is_default_text'
    ];

    public function getIsDefaultList()
    {
        return ['0' => __('否'),'1' => __('是')];
    }

    public function getIsDefaultTextAttr($value, $data)
    {        
        $value = $value ? $value : $data['is_default'];
        $list = $this->getIsDefaultList();
        return isset($list[$value]) ? $list[$value] : '';
    }




}
