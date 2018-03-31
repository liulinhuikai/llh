<?php
namespace Admin\Controller;
use Think\Controller;

class StateController extends Controller {
	//文章数据获取和展示
    public function Lists(){
      $stateModel = M("users");
       // $state = $stateModel->join('user ON state.authorid = user.id');
      $state = $stateModel->join('state ON users.userid = state.suid');
      $state = $state->select();
      $this->assign("state", $state);
      $this->display();
   }
   //分页
   public function page(){
        $User = M('state'); 
        $count      = $User->count();// 查询满足要求的总记录数
        $Page       = new \Think\Page($count,6);// 实例化分页类 传入总记录数和每页显示的记录数
        $orderby['id']='ASC';

        $image = $Model->order($orderby)->limit($Page->firstRow.','.$Page->listRows)->select();

        $this->assign(state,$image);// 赋值数据集
        $Page -> setConfig('first','首页');
        $Page -> setConfig('last','共%TOTAL_PAGE%页');
        $Page -> setConfig('prev','上一页');
        $Page -> setConfig('next','下一页');
        $Page -> setConfig('link','indexpagenumb');//pagenumb 会替换成页码
        $Page -> setConfig('theme','%HEADER% %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
        $show= $Page->show();
        $this->assign('page',$show);// 赋值分页输出

        $this->display(); // 输出模板
   }
   //单条删除数据
   public function stateDelete(){
      $id=I('id');
      $Model=M('state');
      $Model->where("sid=$id")->delete();
      $this->redirect("Lists");
    }
    // 批量删除数据
    public function stateBatchDelete() {
      $stateModel = M("state");
      $id = I("id");
      $getId = implode(',', $id);
      $stateModel->delete($getId);
      $this->redirect("Lists");
    }
    //文章详情页
    public function content(){
      $id = I("id");
      $stateModel = M("state");
      $state = $stateModel->join('users ON state.suid = users.userid');
      $state = $state->where("state.sid=$id")->select();
      $this->assign("state", $state);
      $this->display();
    }
}