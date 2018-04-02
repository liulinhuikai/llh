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

    public function content(){
        $this->display();
    }
    //我的收藏页
    public function collection(){
        $userModel = M("users");
        $commendModel = M("commend");
        $pictureModel = M("picture");
        $articleModel = M("article");
        $musicModel = M("music");
        $stateModel = M("state");

        $name = I("session.username");//获取当前用户名
        $userId = $userModel->getFieldByusername($name,'userid');//获取当前用户id
        // dump($userId);
        // $collcid = $collcommend->where("collcuid = $userId")->order('cdate desc')->field("collcid")->select();
        // $collpid = $collpicture->where("collpuid = $userId")->order('date desc')->select();
        // $collaid = $collarticle->where("collauid = $userId")->order('date desc')->select();
        // $collmid = $collmusic->where("collmuid = $userId")->order('date desc')->select();
        // $collsid = $collstate->where("collsuid = $userId")->order('date desc')->select();

        $commend = $commendModel->join('collectcommend ON commend.comid = collectcommend.collcid');
        $collcommend = $commend->order('cdate desc')->select();
        // dump($collcommend);

        $picture = $pictureModel->join('collectpicture ON picture.pid = collectpicture.collpid')->join('users ON picture.puid = users.userid');
        // ->join('picture ON users.userid = picture.puid');
        $collpicture = $picture->order('pdate desc')->select();
        // dump($collpicture);

        $article = $articleModel->join('collectarticle ON article.aid = collectarticle.collaid')->join('users ON article.auid = users.userid');
        // ->join('picture ON users.userid = picture.puid');
        $collarticle = $article->order('adate desc')->select();

        $music = $musicModel->join('collectmusic ON music.mid = collectmusic.collmid')->join('users ON music.userid = users.userid');
        $collmusic = $music->order('mdate desc')->select();

        $state = $stateModel->join('collectstate ON state.sid = collectstate.collsid')->join('users ON state.suid = users.userid');
        $collstate = $state->order('sdate desc')->select();

        $this->assign("collcommend", $collcommend );
        $this->assign("collpicture", $collpicture );
        $this->assign("collarticle", $collarticle );
        $this->assign("collmusic", $collmusic );
        $this->assign("collstate", $collstate);

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