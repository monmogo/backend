<?php
namespace app\admin\model;

use think\Model;
use think\facade\Session;
use app\admin\model\MemberModel;
use app\admin\model\LotteryModel;

class BannerModel extends Model
{
    // 设置当前模型对应的完整数据表名称
    protected $table = 'banner';
    // 模型初始化
    protected static function init()
    {
        //TODO:初始化内容
    }
    public function getList($get){
        $where = [];
        // if(!empty($get['username'])){
        //     $where[] = ['username','like',"%".$get['username']."%"];
        // }
        // if(!empty($get['status']) || $get['status'] === "0"){
        //   $where[] = ['status','=',$get['status']];
        // }        
        if(!empty($get['start_time']) && !empty($get['end_time'])){
           $count = $this->where($where)->whereTime('create_time', 'between', [strtotime($get['start_time']), strtotime($get['end_time'])])->count();
           $list = $this->where($where)->whereTime('create_time', 'between', [strtotime($get['start_time']), strtotime($get['end_time'])])->limit($get['limit'])->page($get['page'])->order('id','desc')->select();
        }else {
           $count = $this->where($where)->count();
           $list = $this->where($where)->limit($get['limit'])->page($get['page'])->order('id','desc')->select();
        }   
        $MemberModel = new MemberModel;
        $LotteryModel = new LotteryModel;
        foreach ($list as $k=>&$v){
            $v['create_time'] = date("Y-m-d H:i:s",$v['create_time']);
        }
        return [
            'data'=>$list,
            'count'=>$count
        ];        
    }    
    public function editStatus($post){
        $info = $this->where(['id'=>$post['id']])->find();
        if($info){
             $data['status'] = $post['status'];
             $data['update_time'] = time();
             $this->save($data,['id'=>$info['id']]) ? json_exit(200,'修改成功！'):json_exit(200,'修改失败！');
        }else{
             json_exit(401,'数据不存在！');
        }
    }    
    public function saveData($post){
        if(!empty($post['id'])){
            $info = $this->where(['id'=>$post['id']])->find();
            if(empty($info)){
                json_exit(401,'数据不存在！');
            }else{
                $data['url'] = $post['url'] ?$post['url']:$info['url'];
                $data['name'] = $post['name'] ?$post['name']:$info['name'];
                $data['update_time'] = time();
                return $this->save($data,['id'=>$post['id']]) ? json_exit(200,'更新成功！',$data) : json_exit(401,'更新失败！');
            }            
        }else{
            $data['name'] = (string)trim($post['name']);
            $data['status'] = 1;
            $data['url'] = $post['url'];
            $data['create_time'] = time();
            $data['update_time'] = time();
            return $this->save($data) ? json_exit(200,'提交成功！') : json_exit(401,'提交失败！');
            
        }        
    }
    public function getOneData($id){
        $info = $this->where(['id'=>$id])->find();
        if(empty($info)){
            json_exit(401,'数据不存在！');
        }else{
            return $info;
        }
    } 
    
    
    
        
    // 删除
    public function delData($id){
        $info = $this->where(['id'=>$id])->find();
        if(empty($info)){
            json_exit(401,'数据不存在！');
        }else{
            return $this->where(['id'=>$id])->delete() ? json_exit(200,'删除成功！') : json_exit(401,'删除失败！');
        }
    }
   
}