<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <title>setting</title>
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
        <div class="navbar ">
          <div class="navbar-inner">
           <div class="left">
              <a href="/github/Wplus/ThinkWplus/index.php/Home/Me/index" class="link icon-only external"> <i class="fa fa-arrow-left blackColor"></i></a>
            </div> 
            <div class="center addressHeader">设置</div>
          </div>
        </div>
          <!-- Page, data-page contains page name-->
          <div data-page="index" class="page">
            <!-- Scrollable page content-->
            <div class="page-content">
            <div class="list-block">
            <!-- First group-->
            <div class="list-group">
              <ul>
              <li class="list-group-title">&nbsp;</li>
                <li class="item-content">
                  <div class="item-inner">
                    <div class="item-title">账号管理</div>
                  </div>
                </li>
                <li class="item-content">
                  <div class="item-inner">
                    <div class="item-title">账户安全</div>
                  </div>
                </li>
              </ul>
            </div>
           
            </div>
            <div class="list-block">
            <!-- First group-->
            <div class="list-group">
              <ul>
                <li class="item-content">
                  <div class="item-inner">
                    <div class="item-title">通用设置</div>
                  </div>
                </li>
                <li class="item-content">
                  <div class="item-inner">
                    <div class="item-title">隐私</div>
                  </div>
                </li>
              </ul>
            </div>
           
            </div>
             <div class="list-block">
            <!-- First group-->
            <div class="list-group">
              <ul>
                <li class="item-content">
                  <div class="item-inner">
                    <div class="item-title">意见反馈</div>
                  </div>
                </li>
                <li class="item-content">
                  <div class="item-inner">
                    <div class="item-title">服务中心</div>
                  </div>
                </li>
                <li class="item-content">
                  <div class="item-inner">
                    <div class="item-title">关于味+</div>
                  </div>
                </li>
              </ul>
            </div>
          <!--  <div class="navbar">
            <div class="redback"><a href="#">退出味+</a></div>
          </div> -->
            </div>
          </div>
          <div class="toolbar">
          <div class="toolbar-inner redBack">
              
              <a href="/github/Wplus/ThinkWplus/index.php/Home/Me/signout" class="link external redBack imgCerten">退出味+</a>
              
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