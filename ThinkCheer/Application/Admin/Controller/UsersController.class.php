<?php
namespace Admin\Controller;
use Think\Controller;
class UsersController extends Controller {
    public function lists(){
		$usersModel = M("users");
		$users = $usersModel->select();
		$this->assign("users", $users);
		$this->display();
	}
	public function delete(){
		$usersModel = M("users");
		$id = I("id");
		// dump($id);
		$users = $usersModel->delete($id);
		$this->redirect("lists");
	}
	// 批量删除数据
	public function batchDelete() {
		$usersModel = M("users");
		$id = I("id");
		$getId = implode(',', $id);
		$usersModel->delete($getId);
		$this->redirect("lists");
		// 	$this->success("批量删除成功！", U("lists"));
		// }
		// else {
		// 	$this->error("批量删除失败！");
		// }
	}
	public function page(){
        $User = M('users'); 
        $count      = $User->count();// 查询满足要求的总记录数
        $Page       = new \Think\Page($count,6);// 实例化分页类 传入总记录数和每页显示的记录数
        $orderby['id']='ASC';

        $image = $Model->order($orderby)->limit($Page->firstRow.','.$Page->listRows)->select();

        $this->assign(users,$image);// 赋值数据集
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
}