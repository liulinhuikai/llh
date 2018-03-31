<?php
namespace Admin\Controller;
use Think\Controller;

class MusicController extends Controller {
	//文章数据获取和展示
    public function Lists(){
      $musicModel = M("users");
       // $music = $musicModel->join('user ON music.authorid = user.id');
      $music = $musicModel->join('music ON users.userid = music.userid');
      $music = $music->select();
      $this->assign("music", $music);
      $this->display();
   }
   //分页
   public function page(){
        $User = M('music'); 
        $count      = $User->count();// 查询满足要求的总记录数
        $Page       = new \Think\Page($count,6);// 实例化分页类 传入总记录数和每页显示的记录数
        $orderby['id']='ASC';

        $image = $Model->order($orderby)->limit($Page->firstRow.','.$Page->listRows)->select();

        $this->assign(music,$image);// 赋值数据集
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
   public function musicDelete(){
      $id=I('id');
      $Model=M('music');
      $Model->where("mid=$id")->delete();
      $this->redirect("Lists");
    }
    // 批量删除数据
    public function musicBatchDelete() {
      $musicModel = M("music");
      $id = I("id");
      $getId = implode(',', $id);
      $musicModel->delete($getId);
      $this->redirect("Lists");
    }
    //文章详情页
    public function content(){
      $id = I("id");
      $musicModel = M("music");
      $music = $musicModel->join('users ON music.userid = users.userid');
      $music = $music->where("music.mid=$id")->select();
      $this->assign("music", $music);
      $this->display();
    }
}