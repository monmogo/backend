<?php
namespace app\admin\controller;
use think\Request;
use think\Controller;
use app\admin\controller\Base;
class Withdrawal extends Base
{
    public function index()
    {
       return $this->fetch();
    }
    public function list(){
        $get['page'] = $this->request->get('page') ?: 1;
        $get['limit'] = $this->request->get('limit') ?: 10;
        $get['username'] = $this->request->get('username') ?: "";
        $get['bankname'] = $this->request->get('bankname') ?: "";
        $get['status'] = 1;
        $get['start_time'] = $this->request->get('start_time') ?: "";
        $get['end_time'] = $this->request->get('end_time') ?: "";
     
        $list = $this->WithdrawalModel->getList($get);
        
        return json_table(0, "",$list['count'],$list['data']);
    }    
    public function doSave(){
        $post = $this->request->param();
        $this->BanksModel->saveData($post);
    }    
    public function acceptWithdrawal(){
        $post = $this->request->param();
        $get['id'] = $this->request->get('id');
        $this->WithdrawalModel->acceptWithdrawal($post,$get['id']);
    }
    public function operation($operation = null, $id = null){
        if(!empty($operation)){
            if($operation == "add"){
   
            } else {
                if(!empty($id) || $id == 0){
                   $info = $this->BanksModel->getOneData($id);
                   $this->assign('info',$info);
                }else{
                   $this->error('编辑错误ID不能为空！'); 
                }
            }
            $bankinfo = $this->MemberModel->selectList();
            $this->assign('bankinfo',$bankinfo);              
            $this->assign('operation',$operation);
            return $this->fetch();
        } else {
            $this->error('操作类型错误！');
        }
    } 
    
    // 删除
    public function doDel(){
        $post = $this->request->param();
        $this->BanksModel->delData($post['id']);
    }
    
}
