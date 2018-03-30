<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <title>personal</title>
    <!-- Path to Framework7 Library CSS-->
    <link rel="stylesheet" href="/github/Wplus/ThinkWplus/Public/front/css/framework7.ios.min.css">
    <link rel="stylesheet" href="/github/Wplus/ThinkWplus/Public/front/css/framework7.ios.colors.min.css">
    <!-- Path to your custom app styles-->
    <link rel="stylesheet" href="/github/Wplus/ThinkWplus/Public/front/css/font-awesome.min.css">
    <link rel="stylesheet" href="/github/Wplus/ThinkWplus/Public/front/css/my-app.css">
    <link rel="stylesheet" href="/github/Wplus/ThinkWplus/Public/front/css/jialin.css">
  </head>
  <body>
    <!-- Status bar overlay for fullscreen mode-->
    <div class="statusbar-overlay"></div>
    <!-- Panels overlay-->
    <div class="panel-overlay"></div>
    <!-- Views-->
    <div class="views">
      <!-- Your main view, should have "view-main" class-->
      <div class="view view-main">
        <!-- Top Navbar-->
        <div class="navbar bW redColor">
          <div class="navbar-inner">
            <div class="left">
              <a href="/github/Wplus/ThinkWplus/index.php/Home/Me/index" class="link icon-only external"> <i class="fa fa-arrow-left redColor"></i></a>
            </div>
            <div class="center addressHeader">个人信息页</div>
            
          </div>
        </div>
        <div class="pages navbar-fixed toolbar-fixed">
          <!-- Page, data-page contains page name-->
          <div data-page="index" class="page">
            <!-- Scrollable page content-->
            <div class="page-content">
             <div>
               <div class="imgCircle imgCerten mT10">
               </div>
             </div>
             <div class="list-block mT7">
              <ul>
                <li>
                <a href="#" class="item-link item-content">
                  <div class="item-inner">昵称</div>
                </a>
                </li>
                <li>
                <a href="#" class="item-link item-content">
                  <div class="item-inner">性别</div>
                </a>
                </li>
                <li>
                <a href="#" class="item-link item-content">
                  <div class="item-inner">生日</div>
                </a>
                </li>
                <li>
                <a href="/github/Wplus/ThinkWplus/index.php/Home/Me/address" class="item-link item-content external">
                  <div class="item-inner">收货地址</div>
                </a>
                </li>
              </ul>
             </div>
             <div class="list-block">
              <ul>
                <li>
                <a href="#" class="item-link item-content">
                  <div class="item-inner">QQ</div>
                </a>
                </li>
                <li>
                <a href="#" class="item-link item-content">
                  <div class="item-inner">微信</div>
                </a>
                </li>
                <li>
                <a href="#" class="item-link item-content">
                  <div class="item-inner">微博</div>
                </a>
                </li>
              </ul>
             </div>

             
                
          </div>
        </div>
        
      </div>
     
    </div>
    <!-- Path to Framework7 Library JS-->
    <script type="text/javascript" src="/github/Wplus/ThinkWplus/Public/front/js/framework7.min.js"></script>
    <!-- Path to your app js-->
    <script type="text/javascript" src="/github/Wplus/ThinkWplus/Public/front/js/my-app.js"></script>
  </body>
</html>