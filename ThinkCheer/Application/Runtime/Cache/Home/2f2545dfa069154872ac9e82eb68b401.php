<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <title>MYAPP</title>
    <!-- Path to Framework7 Library CSS, iOS Theme -->
    <link rel="stylesheet" href="/github/Wplus/ThinkWplus/Public/front/css/framework7.ios.min.css">
    <!-- Path to Framework7 color related styles, iOS Theme -->
    <link rel="stylesheet" href="/github/Wplus/ThinkWplus/Public/front/css/framework7.ios.colors.min.css">
    <link rel="stylesheet" href="/github/Wplus/ThinkWplus/Public/front/css/font-awesome.min.css">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="/github/Wplus/ThinkWplus/Public/front/css/swiper.min.css">
    <link rel="stylesheet" href="/github/Wplus/ThinkWplus/Public/front/css/style.css">
    <link rel="stylesheet" href="/github/Wplus/ThinkWplus/Public/front/css/menu-swiper.css">
    <!-- Demo styles -->
    <style>
      html, body {
          position: relative;
          height: 100%;
      }
      body {
          background: #eee;
          font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
          font-size: 14px;
          color:#000;
          margin: 0;
          padding: 0;
      }
      .swiper-container {
          width: 100%;
          height: 100%;
      }
      .swiper-slide {
          text-align: center;
          font-size: 18px;
          background: #fff;
          /* Center slide text vertically */
          display: -webkit-box;
          display: -ms-flexbox;
          display: -webkit-flex;
          display: flex;
          -webkit-box-pack: center;
          -ms-flex-pack: center;
          -webkit-justify-content: center;
          justify-content: center;
          -webkit-box-align: center;
          -ms-flex-align: center;
          -webkit-align-items: center;
          align-items: center;
      }
    </style>
</head>
<body>
    <div class="statusbar-overlay"></div>
    <div class="views">
      <div class="view view-main">
        <div class="navbar" style="opacity:0.5;">
          <div class="navbar-inner">
            <div class="left">
              <a href="/github/Wplus/ThinkWplus/index.php/Home/Menu/content/id/<?php echo $recipe['id'];?>" class="external grayLeft">
                <i class="fa fa-close fa-lg" aria-hidden="true"></i>
              </a>
            </div>
            <div class="right">
              <a href="#" data-popup=".popup-about" class="open-popup grayLeft"><i class="fa fa-th-list" aria-hidden="true" style="padding-right:10px"></i></a>
            </div>
          </div>
        </div>
        <!-- Swiper -->
      <div class="swiper-container">
          <div class="swiper-wrapper">
            <?php
 for($i=0,$k=0;$i<count($recipe['step']);$i++){ $j = $i+1; if($recipe['clocknum'][$k] == $j){ echo '<div class="swiper-slide">'. '<!-- 闹钟弹出层 -->'. '<div class="popDiv">'. '<h3 style="text-align:center">时间到！</h3>'. '<p><a href="#" class="button color-gray okBtn">确定</a></p>'. '</div>'. '<div class="row">'. '<div class="col-5"></div>'. '<div class="col-5 orderNum">'.$j.'</div>'. '<div class="col-90 stepContent">'. $recipe['step'][$i]. '<!-- 定时闹钟 -->'. '<input type="hidden" name="clocktime" class="clocktime" value="'.$recipe['clocktime'][$k].'">'. '<a href="#" class="stepsKeepTimeA grayLeft">'. '<i class="fa fa-hourglass-end fa-lg stepsKeepTime" aria-hidden="true"></i><span></span>'. '</a>'. '</div>'. '<img src="../../'.$recipe['img'][$i].'" width="100%" class="stepImgs">'. '</div>'. '</div>'; $k++; }else{ echo '<div class="swiper-slide">'. '<!-- 闹钟弹出层 -->'. '<div class="popDiv">'. '<h3 style="text-align:center">时间到！</h3>'. '<p><a href="#" class="button color-gray okBtn">确定</a></p>'. '</div>'. '<div class="row">'. '<div class="col-5"></div>'. '<div class="col-5 orderNum">'.$j.'</div>'. '<div class="col-90 stepContent">'. $recipe['step'][$i]. '</div>'. '<img src="../../'.$recipe['img'][$i].'" width="100%" class="stepImgs">'. '</div>'. '</div>'; } } ?> 
          </div>
          <!-- Add Pagination -->
          <div class="swiper-pagination"></div>
      </div>
      </div>
    </div>
    <!-- About Popup -->
  <div class="popup popup-about">
    <p style="padding-left:90%;"><a href="#" class="close-popup grayLeft"><i class="fa fa-close fa-lg" aria-hidden="true"></i></a></p>
    <!-- <a href="#" class="close-popup grayLeft" style="float:right"><i class="fa fa-close fa-lg" aria-hidden="true"></i></a> -->
      <div class="content-block">
        <div class="row">
          <div class="col-33"></div>
          <div class="col-33 textCenter twentyFont">用料</div>
          <div class="col-33"></div>
        </div>
        <ul class="list-block" style="list-style:none;padding-left:1%;margin:1% 0;">
          <?php
 for($i=0;$i<count($recipe['foodname']);$i++){ echo '<li>' . '<div class="item-media">'. '<i class="icon icon-form-checkbox"></i>'. '</div>'. '<div class="item-inner row">'. '<div class="col-60 item-title">'.$recipe['foodname'][$i].'</div>'. '<div class="col-40 level">'.$recipe['foodnum'][$i].'</div>'. ' </div>'. '</li>'; } ?>
        </ul><!--用料end-->
      </div>
  </div>

  <!-- Swiper JS -->
  <script src="/github/Wplus/ThinkWplus/Public/front/js/swiper.min.js"></script>
  <!-- Path to Framework7 Library JS-->
  <script type="text/javascript" src="/github/Wplus/ThinkWplus/Public/front/js/framework7.min.js"></script>
  <!-- Path to your app js-->
  <script type="text/javascript" src="/github/Wplus/ThinkWplus/Public/front/js/my-app.js"></script>
  <script type="text/javascript" src="/github/Wplus/ThinkWplus/Public/front/js/jquery-2.2.2.js"></script>
  <!-- Initialize Swiper -->
  <script type="text/javascript">
  $(document).ready(function(){
    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        paginationClickable: true
    });

    var stepImgs = $(".stepImgs").width();
    $(".stepImgs").height(stepImgs*0.6);
    
    // 闹钟及漏斗转换
    var intervalId = null;
    $("body").on("click",".stepsKeepTimeA",function(){
      var t = $(this).children("i").attr("class");//获取i标签的class值
      var i = $(this).children("i");//获取i标签
      var span = $(this).children("span");//获取span标签
      var clocktime = $(this).prev().val();//获取当前时间
      var hour = parseInt(clocktime.substr(0,2));
      var minute = parseInt(clocktime.substr(3,2));
      var second = parseInt(clocktime.substr(6,2));
      var seconds = second + minute*60 + hour*3600;
      var intDiff = parseInt(seconds);//倒计时总秒数量,获取闹钟总秒数

      if(t == "fa fa-hourglass-end fa-lg stepsKeepTime"){
        i.attr("class","fa fa-hourglass-start fa-lg stepsKeepTime");
        function timer(intDiff){
          intervalId = window.setInterval(function(){
            if (intDiff<=0) {
              //添加音频，闹钟提示音
              $("body").append('<audio id="audios"  loop="loop" autoplay="autoplay" hidden="true"><source src="/github/Wplus/ThinkWplus/Public/front/images/clock.mp3" type="audio/mpeg"><source src="/github/Wplus/ThinkWplus/Public/front/images/2.ogg" type="audio/ogg"></audio>');
              $(".popDiv").css("visibility","visible");
              $(".okBtn").click(function(){
                $('#audios').remove();//移除声音
                $(".popDiv").css("visibility","hidden");
                i.attr("class","fa fa-hourglass-end fa-lg stepsKeepTime");
                span.html("");
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
            span.html(hour+":"+minute+":"+second);//时间随时更新
            intDiff--;    
          }, 1000);
        } 
        $(function(){
            timer(intDiff);
        }); 
      }
      else{
        i.attr("class","fa fa-hourglass-end fa-lg stepsKeepTime");
        span.html("");
        clearInterval(intervalId);
      }
    });
  });
  </script>
</body>
</html>