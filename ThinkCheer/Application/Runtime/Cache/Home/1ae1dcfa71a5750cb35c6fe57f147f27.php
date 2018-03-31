<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <title>登录</title>
    <link rel="stylesheet" href="/llh/ThinkCheer/Public/front/css/framework7.ios.min.css">
    <link rel="stylesheet" href="/llh/ThinkCheer/Public/front/css/framework7.ios.colors.min.css">
    <link rel="stylesheet" href="/llh/ThinkCheer/Public/front/css/font-awesome.min.css">
    <link rel="stylesheet" href="/llh/ThinkCheer/Public/front/css/llh1.css">
    <script type="text/javascript"  src="/llh/ThinkCheer/Public/front/js/jquery.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
  $("input").blur(function(){
    var signBtn = $(".signBtn");
    if ($("#mobile").val()!="" && $("#password").val()!="") {
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
  </head>
  <body>
    <div class="statusbar-overlay"></div>
    <div class="views">
      <div class="view view-main">
        <!-- Top Navbar-->
        <div class="navbar">
          <div class="navbar-inner">
            <div class="left" style="width: 30px;"></div>
            <div class="center">登 录</div>
            <div class="right"><a href="signin.html" class="link redColor">注册</a></div>
          </div>
        </div>
        <div class="pages navbar-through toolbar-throug">
        <form method="post" id="form" action="/llh/ThinkCheer/index.php/Home/Signup/doSign">
          <div data-page="index" class="page">
            <div class="page-content whiteBGColor">
              <div class="list-block inputList">
                <ul>
                  <li>
                    <div class="item-content">
                      <div class="item-inner">
                        <div class="item-input">
                          <input type="text" name="mobile" placeholder="请输入手机账号" id="mobile">
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="item-content">
                      <div class="item-inner bottomBorder">
                        <div class="item-input">
                          <input type="password" name="password" placeholder="请输入密码" id="password">
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="rightFloat problemLink">
                <a href="#" class="link redColor">登录遇到问题？</a>
              </div>
              <div class="clearFloat"></div>
              <div class="sign">
                <a href="#" class="button signBtn" disabled="disabled"  onclick="document.getElementById('form').submit();return false;">登录</a>
              </div>
              
              <p class="greyColor clearBoth OR">OR</p>
              <div class="orBox">
                <a href="#" class="greyColor"><i class="fa fa-qq"></i></a>
                <a href="#" class="greyColor"><i class="fa fa-wechat"></i></a>
                <a href="#" class="greyColor"><i class="fa fa-weibo"></i></a>
              </div>
            </div>
          </div>
        </form>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="/llh/ThinkCheer/Public/front/js/framework7.min.js"></script>
    <script type="text/javascript" src="/llh/ThinkCheer/Public/front/js/jquery-2.2.2.js"></script>
  </body>
</html>