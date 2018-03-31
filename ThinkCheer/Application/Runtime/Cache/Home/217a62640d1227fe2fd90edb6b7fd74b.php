<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <title>注册</title>
    <link rel="stylesheet" href="/llh/ThinkCheer/Public/front/css/framework7.ios.min.css">
    <link rel="stylesheet" href="/llh/ThinkCheer/Public/front/css/framework7.ios.colors.min.css">
    <link rel="stylesheet" href="/llh/ThinkCheer/Public/front/css/font-awesome.min.css">
    <link rel="stylesheet" href="/llh/ThinkCheer/Public/front/css/llh1.css">
    <script type="text/javascript"  src="/llh/ThinkCheer/Public/front/js/jquery.js"></script>
  </head>
  <body>
    <div class="statusbar-overlay"></div>
    <div class="views">
      <div class="view view-main">
        <!-- Top Navbar-->
        <div class="navbar">
          <div class="navbar-inner">
            <div class="left"><a href="#" onClick="javascript :history.back(-1);" class="greyColor"><i class=" fa fa-arrow-left"></i></a></div>
            <div class="center redColor">注册</div>
            <div class="right" style="width: 30px;"></div>
          </div>
        </div>
        <div class="pages navbar-through toolbar-throug">
          <div data-page="index" class="page">
            <div class="page-content whiteBGColor">
              <form class="list-block inputList" action="/llh/ThinkCheer/index.php/Home/Signup/sendMsg" id="form" method="post">
                <div class="item-content">
                  <span class="areaCode" style="width:90px">手机号</span>
                  <div class="item-inner">
                    <div class="item-input">
                      <input type="text" placeholder="请填入手机号" id="mobile" name="mobile">
                    </div>
                  </div>
                </div>
                <div class="item-content">
                  <span class="areaCode" style="width:90px">用户名</span>
                  <div class="item-inner">
                    <div class="item-input">
                      <input type="text" placeholder="请输入用户名" id="username" name="username">
                    </div>
                  </div>
                </div>
                <div class="item-content">
                  <span class="areaCode" style="width:90px" >密&#12288码</span>
                  <div class="item-inner">
                    <div class="item-input">
                      <input type="text" placeholder="请设置密码" id="password" name="password">
                    </div>
                  </div>
                </div>
              </form>
              <div class="sign">
                <a href="#" class="button signBtn" disabled="disabled" name="submit" onclick="document.getElementById('form').submit();return false;">注册</a>
              </div>
              
              <p class="greyColor clearBoth OR">OR</p>
              <div class="orBox">
                <a href="#" class="greyColor"><i class="fa fa-qq"></i></a>
                <a href="#" class="greyColor"><i class="fa fa-wechat"></i></a>
                <a href="#" class="greyColor"><i class="fa fa-weibo"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="/llh/ThinkCheer/Public/front/js/framework7.min.js"></script>
    <script type="text/javascript" src="/llh/ThinkCheer/Public/front/js/jquery-2.2.2.js"></script>
    <script >
    $(document).ready(function(){
  $("input").blur(function(){
    var signBtn = $(".signBtn");
    if ($("#mobile").val()!="" && $("#password").val()!="" && $("#username").val()!="") {
      signBtn.attr("disabled",false);
      signBtn.css({
        "background" : "#ea4027"
      });
    }
    else{
      signBtn.attr("disabled","disabled");
      signBtn.css({
        "background" : "#ccc"
      });
    }
  });
});
    </script>
  </body>
</html>