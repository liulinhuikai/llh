<?php
namespace Home\Controller;
use Think\Controller;
class SignupController extends Controller {
	public function signin(){
		$this->display();
	}

	public function signup(){
		$this->display();
	}
	public function dosign(){
		if (IS_POST) {
			session(null);

			$userModel = M("users");
			$condition = array(
				"phonenum" => I("post.mobile"),
				"password" => I("post.password")
			);
			$result = $userModel->where($condition)->count();
			$username = $userModel->where($condition)->getField("username");
			$password = $userModel->where($condition)->getField("password");

			if ($result > 0) {
				$_SESSION['username'] = $username;
				$_SESSION['password'] = $password;

				$this->redirect("Index/index");
			}
			else{
				$this->error("用户名或密码不正确");
			}

		}
	}

    public function sendMsg(){
    	// 此功能需要开启php_curl.dll扩展
		if (IS_POST) {
			$username = I("post.mobile");
			$password = I("post.password");

			$data = $_POST;
			$data['phonenum'] = I("session.phonenum");

			$userModel = M("users");
			if($userModel->add($data)) {
				$_SESSION['username'] = $username;

				// 写成where('username=$username')可能会因为字段名与变量名相同，识别错误
				$condition = array('mobile' => $username);
				$id = $userModel->where($condition)->getField("password");
				$username = $userModel->where($condition)->getField("username");
				$_SESSION['password'] = $id;

				// dump($_SESSION);
				$this->redirect("Index/index");
			}
		}
	}
	
	
}