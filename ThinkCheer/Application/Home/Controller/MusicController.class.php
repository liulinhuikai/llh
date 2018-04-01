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
	// 添加菜谱add页
	public function add(){
		$this->display();
	}
	//assortment页动态获取
	public function assortment(){
		$menuModel = M("menu");
		$menu = $menuModel->select();
		$this->assign("menu", $menu);
		$this->display();
	}

	// lists页动态获取
	// public function lists($tagid){
	// 	// dump($tagid)
	// 	$menuModel = M("menu");
	// 	$menu = $menuModel->where("id=$tagid")->select();
	// 	$this->assign("menu", $menu);

	// 	$recipeModel = M("recipe");
	// 	$recipe = $recipeModel->where("recipetagid = $tagid")->field("id,recipename,img")->select();

	// 	for($i = 0; $i < count($recipe); $i++) {
	// 		// 获取步骤中最后一张图
	// 		$pos = strripos($recipe[$i]['img'], "uploads");
	// 		$recipe[$i]["img"] = substr($recipe[$i]["img"], $pos);
	// 	}
	// 	// dump($recipe);

	// 	$this->assign("recipe", $recipe);
	// 	$this->display();
	// }
	//content页
	public function content(){
		// $id = I("id");
		// $recipeModel = M('recipe');
		// $recipe = $recipeModel->where("id=$id")->find();//获取当前数据

		// // 将字符串转为数组
		// $recipe["foodname"] = explode("&", $recipe["foodname"]);
		// $recipe["foodnum"] = explode("&", $recipe["foodnum"]);
		// $recipe["step"] = explode("&", $recipe["step"]);
		// $recipe["clocktime"] = explode("&", $recipe["clocktime"]);
		// $recipe["clocknum"] = explode("&", $recipe["clocknum"]);
		// $recipe["img"] = explode("&", $recipe["img"]);
		
		// // dump($recipe);

		// $this->assign("recipe",$recipe);
		$id = I("id");
        $musicModel = M("music");
        $music = $musicModel->join('users ON music.userid = users.userid');
        $music = $music->where("music.mid=$id")->select();
        $this->assign("music", $music);
		$this->display();
	}
	//steps页
	public function steps(){
		$id = I("id");
		$recipeModel = M('recipe');
		$recipe = $recipeModel->where("id=$id")->find();//获取当前数据

		// 将字符串转为数组
		$recipe["foodname"] = explode("&", $recipe["foodname"]);
		$recipe["foodnum"] = explode("&", $recipe["foodnum"]);
		$recipe["step"] = explode("&", $recipe["step"]);
		$recipe["img"] = explode("&", $recipe["img"]);
		$recipe["clocktime"] = explode("&", $recipe["clocktime"]);
		$recipe["clocknum"] = explode("&", $recipe["clocknum"]);
		
		$this->assign("recipe",$recipe);
		$this->display();
	}
	//生成订单页，makeorder
	public function makeorder(){
		$id = I("id");
		$recipeModel = M('recipe');
		$userModel = M('user');
		$addressModel = M('address');
		$recipe = $recipeModel->where("id=$id")->find();//获取当前数据
		$condition['username'] = I("session.username");//获取当前用户名
		$userid = $userModel->where($condition)->getField('id');//获取当前用户id
		$address = $addressModel->where("userid=$userid")->find();//获取当前用户的地址信息

		$recipe["foodname"] = explode("&", $recipe["foodname"]);

		$this->assign("recipe",$recipe);
		$this->assign("address",$address);
		$this->display();
	}
	//找人代买
	public function othersbuy(){
		$userModel = M('user');
		$addressModel = M('address');
		
		$condition['username'] = I("session.username");//获取当前用户名
		$userid = $userModel->where($condition)->getField('id');//获取当前用户id
		// $adCondition['address'] = $_POST['address'];
		// $addressId = $addressModel->where($adCondition)->getField('id');//获取当前地址id

		$data = $_POST;
		// 将数组转成字符串
		$data["ingredients"] = implode("&", $data["ingredients"]);
		$data["amount"] = implode("&", $data["amount"]);
		$data["makerid"] = $userid;
		$data["purchaserid"] = null;
		// $data["addressid"] = $addressId;
		// dump($data);

		$orderModel = M('orderform');
		if ($orderModel->create() && $orderModel->add($data)) {
			$this->redirect("Nowait/requestlist");
		}
	}
	//自己买
	public function ownbuy(){
		$userModel = M('user');
		$addressModel = M('address');
		
		$condition['username'] = I("session.username");//获取当前用户名
		$userid = $userModel->where($condition)->getField('id');//获取当前用户id
		$adCondition['address'] = $_POST['address'];
		$addressId = $addressModel->where($adCondition)->getField('id');//获取当前地址id

		$data = $_POST;
		// 将数组转成字符串
		$data["ingredients"] = implode("&", $data["ingredients"]);
		$data["amount"] = implode("&", $data["amount"]);
		$data["makerid"] = $userid;
		$data["purchaserid"] = $userid;
		$data["addressid"] = $addressId;

		$orderModel = M('orderform');
		if ($orderModel->create() && $orderModel->add($data)) {
			$this->redirect('Nowait/basketlist');
		}
	}
}
?>
