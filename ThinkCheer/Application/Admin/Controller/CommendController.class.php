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
    public function add(){
    	$this->display();
    }
    //WYW同时上传音乐、图片文件，设置两个上传类
    public function doAdd(){
		$uploadimg = new \Think\Upload();// 实例化图片上传类

	    $uploadimg->maxSize   =     3145728 ;// 设置附件上传大小
	    $uploadimg->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
	    $uploadimg->rootPath  =     THINK_PATH; // 设置附件上传根目录
	    $uploadimg->savePath  =     '../Public/uploads/'; // 设置附件上传（子）目录
	    // 上传文件 
	    $infoimg   =   $uploadimg->upload();

	    $uploadmusic = new \Think\Upload();// 实例化音乐上传类

	    $uploadmusic->maxSize   =     5*1024*1024 ;// 设置附件上传大小
	    $uploadmusic->exts      =     array('mp3');// 设置附件上传类型
	    $uploadmusic->rootPath  =     THINK_PATH; // 设置附件上传根目录
	    $uploadmusic->savePath  =     '../Public/uploads/'; // 设置附件上传（子）目录
	    // 上传文件 
	    $infomusic   =   $uploadmusic->upload();

		$commendModel = D('commend');
		$data = $commendModel->create();

    	//设置headimg属性值
    	$data['img'] = $infoimg['img']['savepath'].$infoimg['img']['savename'];
    	$data['music'] = $infomusic['music']['savepath'].$infomusic['music']['savename'];
		$commendModel->add($data);
		$this->redirect("lists");

	}
}