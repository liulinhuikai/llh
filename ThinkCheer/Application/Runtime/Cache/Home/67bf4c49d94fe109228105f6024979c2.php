<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <title>Dynamicedit</title>
  <!-- Path to Font-awesome Library CSS-->
  <link rel="stylesheet" href="/github/Wplus/ThinkWplus/Public/front/css/font-awesome.min.css">
  <!-- Path to Framework7 Library CSS-->
  <link rel="stylesheet" href="/github/Wplus/ThinkWplus/Public/front/css/framework7.ios.min.css">
  <link rel="stylesheet" href="/github/Wplus/ThinkWplus/Public/front/css/framework7.ios.colors.min.css">
  <!-- Path to your custom app styles-->
  <link rel="stylesheet" href="/github/Wplus/ThinkWplus/Public/front/css/style.css">
</head>
<body>
  <!-- Status bar overlay for fullscreen mode-->
  <div class="statusbar-overlay"></div>
  <!-- Views-->
  <div class="views">
    <!-- Your main view, should have "view-main" class-->
    <div class="view view-main">
      <!-- Top Navbar-->
      <div class="nav2 navbar">
          <div class="navbar-inner">
            <div class="left">
              <!-- Left link contains only icon - additional "icon-only" class--><a href="/github/Wplus/ThinkWplus/index.php/Home/Nearby/lists" data-popover=".popover-links" class="external link icon-only open-popover"> <i class="icon fa fa-arrow-left"></i></a>
              </div>
              <!-- We have home navbar without left link-->
              <div class="center sliding">发动态</div>
              <div class="right">
              <!-- Right link contains only icon - additional "icon-only" class--><a href="#" data-popover=".popover-links" class="link icon-only open-popover"> <i class="icon fa fa-send"></i></a>
              </div>
          </div>
        </div>
        <!-- Pages, because we need fixed-through navbar and toolbar, it has additional appropriate classes-->
        <div class="pages navbar-through toolbar-through">
            <!-- Page, data-page contains page name-->
            <div data-page="index" class="page">
              <!-- Scrollable page content-->
              <div class="page-content essayPage">
                <div class="list-block essayList sayText">
                  <ul>
                  <!-- Textarea -->
                  <li class="align-top">
                    <div class="item-content">
                      <div class="item-inner ">
                        <div class="item-input">
                          <textarea onpropertychange="MaxMe(this)" oninput="MaxMe(this)" placeholder="说点儿什么吧"></textarea>
                        </div>
                      </div>
                    </div>
                    <div class="inputCamera">
                      <input class="Camera" type="file" accept="image/*"/>
                    </div>
                  </li>
                  <!-- Smart select item -->
                  <li>
                    <!-- Additional "smart-select" class -->
                    <a href="#" class="item-link smart-select" data-page-title="选择地点" data-back-text=" " data-form-theme="green">
                      <!-- select -->
                      <select name="addresses">
                        <option value="1" selected>河北师范大学</option>
                        <option value="2">河北科技大学</option>
                        <option value="3">河北经贸大学</option>
                        <option value="4">河北地质大学</option>
                        <option value="5">石家庄铁道大学</option>
                        <option value="6">河北工业大学</option>
                        <option value="7">河北大学</option>
                        <option value="8">河北工业大学</option>
                        <option value="9">燕山大学</option>
                      </select>
                      <div class="item-content">
                        <div class="item-inner">
                          <!-- Select label -->
                          <div class="showGPS item-title">显示地点</div>
                          <!-- Selected value, not required -->
                          <div class="item-after">河北师范大学</div>
                        </div>
                      </div>
                    </a>
                  </li>
                </ul>
            </div>
              </div>
            </div>
        </div>
    </div>
  </div>
  <!-- Path to Framework7 Library JS-->
  <script type="text/javascript" src="/github/Wplus/ThinkWplus/Public/front/js/framework7.min.js"></script>
  <!-- Path to jQuery js-->
  <script type="text/javascript" src="/github/Wplus/ThinkWplus/Public/front/js/jquery-2.2.2.js"></script>
  <!-- Path to your app js-->
  <script type="text/javascript" src="/github/Wplus/ThinkWplus/Public/front/js/my-app.js"></script>
  <script type="text/javascript" src="/github/Wplus/ThinkWplus/Public/front/js/zhou.js"></script>
</body>
</html>