<?php
namespace Home\Controller;
use Think\Controller;
class MeController extends Controller {
    //用户首页动态获取4-1
    public function index(){
        $userModel = M("users");
        $name = I("session.username");//获取当前用户名
        // dump($name);
        $userId = $userModel->getFieldByusername($name,'userid');//获取当前用户id
        
        // dump($userId);
        $users = $userModel->where("userid = $userId")->select();
        // dump($users);
        $this->assign("users", $users);

        $this->display();
    }

    public function setting(){
        $this->display();
    }

    public function personal(){
        $this->display();
    }

    public function address(){
        $Model = M();
        $id = I("session.id");
        $address = $Model->table("address a, user b")->where("a.userid = b.id and b.id = $id")->select();
        $this->assign("address", $address);
        $this->display();
    }

    // 功能未实现
    public function getCity($id){
        $cityModel = M("city");
        $city = $cityModel->where("provinceid = $id")->select();
        json_encode($city);
    }

    // 功能未实现
    public function addAddress(){
        $provinceModel = M("province");
        $province = $provinceModel->select();
        $this->assign("province", $province);

        $cityModel = M("city");
        $city = $cityModel->where("provinceid = 130000")->select();
        $this->assign("city", $city);

        $this->display();
    }

    public function doAdd(){
        if(IS_POST){    
            $userid = I("session.id");
            // 前台没写输入手机号码，所以此处的手机号是获取的用户注册的手机号
            $phonenum = M("user")->where("id = $userid")->getField("phonenum");

            $addressModel = M("address");
            $data = $_POST;
            $data['userid'] = $userid;
            $data['phonenum'] = $phonenum;
            // dump($data);

            if($addressModel->add($data)){
                $this->redirect("Me/address");
            }
        }
    }

    public function signout(){
    	session(null);
    	$this->redirect("Signup/signin");
    }
}