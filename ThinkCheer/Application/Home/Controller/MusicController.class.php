<?php
namespace Home\Controller;
use Think\Controller;

class MusicController extends Controller {
	public function lists(){
		$musicModel = M("music");
		$music = $musicModel->select();
		$this->assign("music", $music);
		$this->display();
	}
	// 音乐发布页
	public function publish(){
		$this->display();
	}
	//有问题
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

		$musicModel = D('music');
		$data = $musicModel->create();

    	//设置headimg属性值
    	$data['img'] = $infoimg['img']['savepath'].$infoimg['img']['savename'];
    	$data['music'] = $infomusic['music']['savepath'].$infomusic['music']['savename'];
		$musicModel->add($data);
		$this->redirect("lists");

	}
	//content页
	public function content(){
		$id = I("id");
        $musicModel = M("music");
        $music = $musicModel->join('users ON music.userid = users.userid');
        $music = $music->where("music.mid=$id")->select();
        $this->assign("music", $music);
		$this->display();
	}

	public function play(){
		$id = I("id");
        $musicModel = M("music");
        $music = $musicModel->where("music.mid=$id")->select();
        $this->assign("music", $music);
		$this->display();
	}
}
?>
