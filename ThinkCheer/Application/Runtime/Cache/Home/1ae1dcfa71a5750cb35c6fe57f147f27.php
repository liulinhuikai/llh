<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <title>注册</title>
    <link rel="stylesheet" href="/github/Wplus/ThinkWplus/Public/front/css/framework7.ios.min.css">
    <link rel="stylesheet" href="/github/Wplus/ThinkWplus/Public/front/css/framework7.ios.colors.min.css">
    <link rel="stylesheet" href="/github/Wplus/ThinkWplus/Public/front/css/font-awesome.min.css">
    <link rel="stylesheet" href="/github/Wplus/ThinkWplus/Public/front/css/style.css">
  </head>
  <body>
    <div class="statusbar-overlay"></div>
    <div class="views">
      <div class="view view-main">
        <!-- Top Navbar-->
        <div class="navbar redBGColor">
          <div class="navbar-inner">
            <div class="left"><a href="/github/Wplus/ThinkWplus/index.php/Home/Signup/signin"><i class="whiteColor fa fa-arrow-left"></i></a></div>
            <div class="center whiteColor">注册</div>
            <div class="right" style="width: 30px;"></div>
          </div>
        </div>
        <div class="pages navbar-through toolbar-throug">
          <div data-page="index" class="page">
            <div class="page-content whiteBGColor">
              <form class="list-block inputList" action="/github/Wplus/ThinkWplus/index.php/Home/Signup/sendMsg" id="form" method="post">
                <div class="item-content">
                  <span class="areaCode">+86</span>
                  <div class="item-inner">
                    <div class="item-input">
                      <input type="text" placeholder="输入11位中国大陆手机号码" id="mobile" name="phonenum">
                    </div>
                  </div>
                </div>
              </form>
              <div class="sign">
                <a href="#" class="button signBtn" disabled="disabled" name="submit" onclick="document.getElementById('form').submit();return false;">下一步</a>
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
    <script type="text/javascript" src="/github/Wplus/ThinkWplus/Public/front/js/framework7.min.js"></script>
    <script type="text/javascript" src="/github/Wplus/ThinkWplus/Public/front/js/jquery-2.2.2.js"></script>
    <script src="/github/Wplus/ThinkWplus/Public/front/js/signup.js"></script>
  </body>
</html>