<?php
namespace app\api\model;

use think\Model;
use think\facade\Session;
class BankModel extends Model
{
    // 设置当前模型对应的完整数据表名称
    protected $table = 'bank_bind';
    // 模型初始化
    protected static function init()
    {
        //TODO:初始化内容
    }
    
   
}