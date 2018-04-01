<?php
namespace Home\Controller;
use Think\Controller;
class CommendController extends Controller {
	public function lists(){
		$commendModel = M("commend");
		$commend = $commendModel->order('comid desc')->select();
		$this->assign("commend", $commend);
		$this->display();
	}

	public function content(){
		$id = I("id");
        $commendModel = M("commend");
        // $commend = $commendModel->join('users ON commend.userid = users.userid');
        $commend = $commendModel->where("commend.comid=$id")->select();
        $this->assign("commend", $commend);
		$this->display();
	}

	public function mplay(){
		$id = I("id");
        $commendModel = M("commend");
        $commend = $commendModel->where("commend.comid=$id")->select();
        $this->assign("commend", $commend);
		$this->display();
	}
}