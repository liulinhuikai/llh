<?php
namespace Admin\Controller;
use Think\Controller;
class CommendController extends Controller {
    public function lists(){
		$commendModel = M("commend");
		$commend = $commendModel->select();
		$this->assign("commend", $commend);
		$this->display();
	}
	//单条删除数据
   public function commendDelete(){
      $id=I('id');
      $Model=M('commend');
      $Model->where("comid=$id")->delete();
      $this->redirect("Lists");
    }
	//文章详情页
    public function content(){
      $id = I("id");
      $commendModel = M("commend");
      // $commend = $commendModel->join('users ON commend.auid = users.userid');
      $commend = $commendModel->where("commend.comid=$id")->select();
      $this->assign("commend", $commend);
      $this->display();
    }
}