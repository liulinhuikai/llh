<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <!-- Required meta tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <!-- Your app title -->
    <title>MYAPP</title>
    <!-- Path to Framework7 Library CSS, iOS Theme -->
    <link rel="stylesheet" href="/github/Wplus/ThinkWplus/Public/front/css/framework7.ios.min.css">
    <!-- Path to Framework7 color related styles, iOS Theme -->
    <link rel="stylesheet" href="/github/Wplus/ThinkWplus/Public/front/css/framework7.ios.colors.min.css">
    <link rel="stylesheet" href="/github/Wplus/ThinkWplus/Public/front/css/font-awesome.min.css">
    <link rel="stylesheet" href="/github/Wplus/ThinkWplus/Public/front/css/style.css">
  </head>
  <body>
    <!-- Status bar overlay for full screen mode (PhoneGap) -->
    <div class="statusbar-overlay"></div>
    <!-- Views -->
    <div class="views">
      <!-- Your main view, should have "view-main" class -->
      <div class="view view-main">
        <!-- Top Navbar-->
        <div class="navbar">
          <div class="navbar-inner">
            <div class="left">
              <a href="/github/Wplus/ThinkWplus/index.php/Home/Menu/lists/tagid/<?php echo $recipe['recipetagid']?>" class="external grayLeft">
                <i class="fa fa-arrow-left" aria-hidden="true"></i>
              </a>
              
            </div>
            <div class="right">
              <a href="#" data-picker=".picker-1" class="open-picker" id="picker1">
                <i class="fa fa-share-alt" id="link" aria-hidden="true" style="padding-right:30px"></i>
              </a>
              <i class="fa fa-ellipsis-v" id="more" aria-hidden="true" style="padding-right:10px"></i>
            </div>
          </div>
        </div>
        <!-- Pages container, because we use fixed-through navbar and toolbar, it has additional appropriate classes-->
        <div class="pages navbar-through toolbar-through">
          <!-- 闹钟弹出层 -->
          <div id="pop">
            <h3 style="text-align:center">时间到！</h3>
            <p><a href="#" id="ok" class="button color-gray">确定</a></p>
          </div>
          <!-- Page, "data-page" contains page name -->
          <div data-page="menu-content" class="page">
            <!-- Scrollable page content -->
            <div class="page-content">
              <!-- 菜谱banner图 -->
              <div class="row">
                <img src="../../<?php echo end($recipe['img']);?>" width="100%" class="contentImg">
              </div>
              <!-- 菜谱内容 -->
              <h2 class="contentTitle"><?php echo ($recipe["recipename"]); ?></h2>
              <p class="ppp">用料 ： </p>
              <ul class="list-block" style="list-style:none;padding-left:1%;margin:1% 0;">
                <!--用料列表-->
                <?php
 for($i=0;$i<count($recipe['foodname']);$i++){ echo "<li> ". "<div class='item-inner row'>". "<div class='col-10'></div>". "<div class='col-50 item-title'>".$recipe['foodname'][$i]."</div>". "<div class='col-40 level'>".$recipe['foodnum'][$i]."</div>". "</div>". "</li>"; } ?>
              </ul><!--用料end-->
              <div class="row" style="padding-top:1%">
                <div class="col-50"></div>
                <div class="col-40">
                  <a href="/github/Wplus/ThinkWplus/index.php/Home/Menu/makeorder/id/<?php echo $recipe['id'];?>" class="external button button-round color-red">
                    购买
                  </a>
                </div>
                <div class="col-5"></div>
              </div>
              <div class="row">
                <div class="col-40"><p class="ppp">做法 ： </p></div>
                <div class="col-50">
                  <p style="padding-top:5%;"><a href="/github/Wplus/ThinkWplus/index.php/Home/Menu/steps/id/<?php echo $recipe['id'];?>" class="external grayLink">(点击切换大图模式)</a></p>
                </div>
                <div class="col-10"></div>
              </div>
              <?php
 for($i=0,$k=0;$i<count($recipe['step']);$i++){ $j = $i+1; if($recipe['clocknum'][$k] == $j){ echo '<div class="row">'. '<div class="col-5"></div>'. '<div class="col-5 orderNum">'.$j.'</div>'. '<div class="col-90 stepContent">'. $recipe['step'][$i]. '<input type="hidden" name="clocktime" class="clocktime" value="'.$recipe['clocktime'][$k].'">'. '<a href="#" class="button button-round button-fill timekeeper" id="timeKeep">开始计时</a>'. '</div>'. '<a href="/github/Wplus/ThinkWplus/index.php/Home/Menu/steps/id/'.$recipe['id'].'" class="external menuImgA"><img src="../../'.$recipe['img'][$i].'" width="80%" class="menuImg"></a>'. '</div>'; $k++; }else{ echo '<div class="row">'. '<div class="col-5"></div>'. '<div class="col-5 orderNum">'.$j.'</div>'. '<div class="col-90 stepContent">'. $recipe['step'][$i]. '</div>'. '<a href="/github/Wplus/ThinkWplus/index.php/Home/Menu/steps/id/'.$recipe['id'].'" class="external menuImgA"><img src="../../'.$recipe['img'][$i].'" width="80%" class="menuImg"></a>'. '</div>'; } } ?>             
            </div>  
          </div>
        </div>
        <!-- Bottom Toolbar-->
        <div class="toolbar">
          <div class="toolbar-inner row">
            <div class="col-5"></div>
            <div class="col-20">
              <a href="#" id="thumbs"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>&nbsp;&nbsp;赞</a>
            </div>
            <div class="col-30">
              <a href="#" id="heart"><i class="fa fa-heart-o" aria-hidden="true" id="heart"></i>&nbsp;&nbsp;收藏</a>
            </div>
            <div class="col-40"></div>
          </div>
        </div>
      </div>
    </div>

    <!-- Picker -->
    <div class="picker-modal picker-1" style="background-color:white;height:60%">
      <div class="toolbar">
        <div class="toolbar-inner">
          <div class="left"></div>
          <div class="right" id="cancel"><a href="#" class="close-picker">取消</a></div>
        </div>
      </div>
      <div class="picker-modal-inner pickerInner">
        <div class="content-block">
          <div class="row">
            <div class="col-25">
              <img src="/github/Wplus/ThinkWplus/Public/front/images/fa.png" width="50%">
              <p>转发</p>
            </div>
            <div class="col-25">
              <img src="/github/Wplus/ThinkWplus/Public/front/images/link.png" width="50%">
              <p>复制链接</p>
            </div>
            <div class="col-25">
              <img src="/github/Wplus/ThinkWplus/Public/front/images/qq.png" width="50%">
              <p>发送给QQ好友</p>
            </div>
            <div class="col-25">
              <img src="/github/Wplus/ThinkWplus/Public/front/images/kj.png" width="50%">
              <p>发送到QQ空间</p>
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <img src="/github/Wplus/ThinkWplus/Public/front/images/weibo.png" width="50%">
              <p>发送到微博</p>
            </div>
            <div class="col-25">
              <img src="/github/Wplus/ThinkWplus/Public/front/images/weixin.png" width="50%">
              <p>发送给微信好友</p>
            </div>
            <div class="col-25">
              <img src="/github/Wplus/ThinkWplus/Public/front/images/pyq.png" width="50%">
              <p>发送到朋友圈</p>
            </div>
            <div class="col-25">
              <img src="/github/Wplus/ThinkWplus/Public/front/images/error.png" width="50%">
              <p>投诉</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Path to Framework7 Library JS-->
    <script type="text/javascript" src="/github/Wplus/ThinkWplus/Public/front/js/framework7.min.js"></script>
    <!-- Path to your app js-->
    <script type="text/javascript" src="/github/Wplus/ThinkWplus/Public/front/js/my-app.js"></script>
    <script type="text/javascript" src="/github/Wplus/ThinkWplus/Public/front/js/jquery-2.2.2.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        //实现菜谱banner图
        var imgWidth = $(".contentImg").width();
        $(".contentImg").height(imgWidth*0.5);

        var menuImg = $(".menuImg").width();
        $(".menuImg").height(menuImg*0.6);
        //实现点赞收藏效果
        $("#thumbs").click(function(){
          var icon = $("#thumbs i").attr("class");
          if(icon == "fa fa-thumbs-o-up"){
            $("#thumbs i").attr("class","fa fa-thumbs-up");
          }
          if(icon == "fa fa-thumbs-up"){
            $("#thumbs i").attr("class","fa fa-thumbs-o-up");
          }
        });
        $("#heart").click(function(){
          var icon = $("#heart i").attr("class");
          if(icon == "fa fa-heart-o"){
            $("#heart i").attr("class","fa fa-heart");
          }
          if(icon == "fa fa-heart"){
            $("#heart i").attr("class","fa fa-heart-o");
          }
        });   
        // 闹钟实现动态获取，武
        var intervalId = null;
        $(".timekeeper").click(function(){
          var btn = $(this);
          var clocktime = btn.prev().val();
          var hour = parseInt(clocktime.substr(0,2));
          var minute = parseInt(clocktime.substr(3,2));
          var second = parseInt(clocktime.substr(6,2));
          var seconds = second + minute*60 + hour*3600;
          var intDiff = parseInt(seconds);//倒计时总秒数量,获取闹钟总秒数
          
          if(btn.html() =="开始计时"){
            function timer(intDiff){
              intervalId = window.setInterval(function(){
                if (intDiff<=0) {
                  //添加音频，闹钟铃声
                  $("#pop").append('<audio id="audios"  loop="loop" autoplay="autoplay" hidden="true"><source src="/github/Wplus/ThinkWplus/Public/front/images/clock.mp3" type="audio/mpeg"><source src="/github/Wplus/ThinkWplus/Public/front/images/2.ogg" type="audio/ogg"></audio>');
                  $("#pop").css("visibility","visible");  //弹出框显示
                  //点击弹出框确认事件
                  $("#ok").click(function(){
                    $('#audios').remove();  //移除声音
                    $("#pop").css("visibility","hidden");  //弹出框隐藏
                    btn.html("开始计时");
                    clearInterval(intervalId);
                  });
                  clearInterval(intervalId);
                };
                var day=0,
                    hour=0,
                    minute=0,
                    second=0;//时间默认值        
                if(intDiff > 0){
                    day = Math.floor(intDiff / (60 * 60 * 24));
                    hour = Math.floor(intDiff / (60 * 60)) - (day * 24);
                    minute = Math.floor(intDiff / 60) - (day * 24 * 60) - (hour * 60);
                    second = Math.floor(intDiff) - (day * 24 * 60 * 60) - (hour * 60 * 60) - (minute * 60);
                }
                if (minute <= 9) minute = '0' + minute;
                if (second <= 9) second = '0' + second;
                btn.html(hour+":"+minute+":"+second);  //显示倒计时时间
                intDiff--;    
              }, 1000);
            } 
            $(function(){
                timer(intDiff);
            }); 
          }
          else{
            btn.html("开始计时");
            clearInterval(intervalId);
          }
        });
      });
    </script>
  </body>
</html>