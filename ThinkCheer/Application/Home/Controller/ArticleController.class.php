<?php
namespace Home\Controller;
use Think\Controller;
class ArticleController extends Controller {
	public function lists(){
		  $Model = M('article');
        $article = $Model->table("article")->select();
        // dump($article);
        $this->assign("article", $article);
        $this->display();
	}

	public function content(){
		 $Model = M('article');
		 $getid = I("id");//获取上页的id
		 // dump($getid);
        $article = $Model->where("aid = $getid")->find();
        // dump($article);
        $this->assign("article", $article);
        $this->display();
	}

	public function publish(){
		$this->display();
	}
	
	public function doPublish(){
		if(!IS_POST){
			exit("bad request");
		}
		
		$booksModel = D("article");
		
		if(!$booksModel->create()){
			$this->error($booksModel->getError());
		}
	    $upload = new \Home\Controller\Upload();// 实例化上传类
	    $upload->maxSize  = 3145728 ;// 设置附件上传大小
	    $upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
	    $upload->rootPath = './Public';
	    $upload->savePath =  '/uploads/';// 设置附件上传目录	
	    $uploadPic = $upload->upload();	
		if(!$uploadPic) {// 上传错误提示错误信息
	        $this->error($upload->getError());
	    }else{

			$bookdata['title'] = I("post.title");
			$bookdata['img'] = $uploadPic['photo']['savepath'].$uploadPic['photo']['savename'];
			$bookdata['content'] = I("post.content");
			
			if($booksModel->filter('strip_tags')->add($bookdata)){
				$this->success("添加成功",U("lists"));
			}else{
				$this->error("添加失败");
			}
		}
	}
	
}