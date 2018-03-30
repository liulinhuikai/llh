<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <!-- Required meta tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <title>主页</title>
    <link rel="stylesheet" href="/github/Wplus/ThinkWplus/Public/front/css/framework7.ios.min.css">
    <link rel="stylesheet" href="/github/Wplus/ThinkWplus/Public/front/css/framework7.ios.colors.min.css">
    <link rel="stylesheet" href="/github/Wplus/ThinkWplus/Public/front/css/font-awesome.min.css">
    <link rel="stylesheet" href="/github/Wplus/ThinkWplus/Public/front/css/style.css">
  </head>
  <body>
    <div class="statusbar-overlay"></div>
    <div class="views">
      <!--主视图-->
      <div class="view view-main">
        <!-- Top Navbar-->
        <div class="navbar redBGColor">
          <div class="navbar-inner">
            <div class="left"><a href="/github/Wplus/ThinkWplus/index.php/Home/Menu/assortment" class="link whiteColor">菜谱</a></div>
            <div class="center searchBlock">
              <!-- Search bar -->
              <form class="searchbar redBGColor">
                  <div class="searchbar-input">
                      <input type="search" placeholder="搜索文章、菜谱">
                      <a href="#" class="searchbar-clear"></a>
                  </div>
              </form>
            </div>
            <div class="right"><a href="/github/Wplus/ThinkWplus/index.php/Home/Menu/add" class="link whiteColor"><i class="fa fa-plus"></i></a></div>
          </div>
        </div>
        <div class="pages navbar-through toolbar-through">
          <div data-page="index" class="page">
            <div class="page-content">
              <!-- 图片轮播 -->
              <div class="main_visual">
                <div class="flicking_con">
                  <a href="#"></a>
                  <a href="#"></a>
                  <a href="#"></a>
                  <a href="#"></a>
                  <a href="#"></a>
                </div>
                <div class="main_image">
                  <ul>
                    <li><span class="img_3"></span></li>
                    <li><span class="img_4"></span></li>
                    <li><span class="img_1"></span></li>
                    <li><span class="img_2"></span></li>
                    <li><span class="img_5"></span></li>
                  </ul>
                </div>
              </div><!-- 图片轮播end -->
              <!-- 达人推荐 -->
              <div class="Recommend">
                <div class="rcmdTitle">达人推荐</div>
                <div class="rcmdContent row">
                  <div class="col-33 rcmdUser">
                    <div class="rcmdAvatar"><img src="/github/Wplus/ThinkWplus/Public/uploads/avatar/1.jpg" /></div>
                    <div class="rcmdUsername">王子豪</div>
                  </div>
                  <div class="col-33 rcmdUser">
                    <div class="rcmdAvatar"><img src="/github/Wplus/ThinkWplus/Public/uploads/avatar/2.jpg" /></div>
                    <div class="rcmdUsername">孙哲</div>
                  </div>
                  <div class="col-33 rcmdUser">
                    <div class="rcmdAvatar"><img src="/github/Wplus/ThinkWplus/Public/uploads/avatar/3.jpg" /></div>
                    <div class="rcmdUsername">赵海</div>
                  </div>
                  <div class="col-33 rcmdUser">
                    <div class="rcmdAvatar"><img src="/github/Wplus/ThinkWplus/Public/uploads/avatar/4.jpg" /></div>
                    <div class="rcmdUsername">刘能</div>
                  </div>
                  <div class="col-33 rcmdUser">
                    <div class="rcmdAvatar"><img src="/github/Wplus/ThinkWplus/Public/uploads/avatar/5.jpg" /></div>
                    <div class="rcmdUsername">韩东虎</div>
                  </div>
                  <div class="col-33 rcmdUser">
                    <div class="rcmdAvatar"><img src="/github/Wplus/ThinkWplus/Public/uploads/avatar/6.jpg" /></div>
                    <div class="rcmdUsername">韩东的</div>
                  </div>
                </div>
                <div class="rcmdMore">查看更多达人&nbsp;&nbsp;&nbsp;<i class="fa fa-chevron-right"></i></div>
              </div><!--达人推荐 end-->
              <!-- 文章推荐 -->
              <div class="Recommend">
                <div class="rcmdTitle">菜谱推荐</div>
                <div class="rcmdContent row no-gutter marBot">
                  <div class="col-33 rcmdImg"><img src="/github/Wplus/ThinkWplus/Public/front/images/001_70.jpg" /></div>
                  <div class="col-33 rcmdImg"><img src="/github/Wplus/ThinkWplus/Public/front/images/002_70.jpg" /></div>
                  <div class="col-33 rcmdImg"><img src="/github/Wplus/ThinkWplus/Public/front/images/003_70.jpg" /></div>
                  <div class="col-33 rcmdImg"><img src="/github/Wplus/ThinkWplus/Public/front/images/004_70.jpg" /></div>
                  <div class="col-33 rcmdImg"><img src="/github/Wplus/ThinkWplus/Public/front/images/005_70.jpg" /></div>
                  <div class="col-33 rcmdImg"><img src="/github/Wplus/ThinkWplus/Public/front/images/006_70.jpg" /></div>
                  <div class="col-33 rcmdImg"><img src="/github/Wplus/ThinkWplus/Public/front/images/007_70.jpg" /></div>
                  <div class="col-33 rcmdImg"><img src="/github/Wplus/ThinkWplus/Public/front/images/008_70.jpg" /></div>
                  <div class="col-33 rcmdImg"><img src="/github/Wplus/ThinkWplus/Public/front/images/009_70.jpg" /></div>
                  <div class="col-33 rcmdImg"><img src="/github/Wplus/ThinkWplus/Public/front/images/010_70.jpg" /></div>
                  <div class="col-33 rcmdImg"><img src="/github/Wplus/ThinkWplus/Public/front/images/011_70.jpg" /></div>
                  <div class="col-33 rcmdImg"><img src="/github/Wplus/ThinkWplus/Public/front/images/012_70.jpg" /></div>
                </div>
              </div><!--文章推荐 end-->
            </div>
          </div>
        </div>
        <!-- Bottom Toolbar-->
        <div class="toolbar">
          <div class="toolbar-inner">
            <a href="/github/Wplus/ThinkWplus/index.php/Home/Index/index" class="tab-link redColor">
              <i class="icon fa fa-home font20"></i>
              <span class="tabbar-label font11">主页</span>
            </a>
            <a href="/github/Wplus/ThinkWplus/index.php/Home/Video/lists" class="tab-link greyColor">
              <i class="icon fa fa-video-camera font16"></i>
              <span class="tabbar-label font11">直播间</span>
            </a>
            <a href="/github/Wplus/ThinkWplus/index.php/Home/Nowait/requestlist" class="tab-link greyColor">
              <i class="icon fa fa-shopping-bag font16"></i>
              <span class="tabbar-label font11">不等袋</span>
            </a>
            <a href="/github/Wplus/ThinkWplus/index.php/Home/Nearby/lists" class="tab-link greyColor">
              <i class="icon fa fa-map-signs font16"></i>
              <span class="tabbar-label font11">附近</span>
            </a>
            <a href="/github/Wplus/ThinkWplus/index.php/Home/Me/index" class="tab-link greyColor">
              <i class="icon fa fa-user font16"></i>
              <span class="tabbar-label font11">我</span>
            </a>
          </div>
        </div><!-- toolbar end -->
      </div>
    </div>
    <script type="text/javascript" src="/github/Wplus/ThinkWplus/Public/front/js/framework7.min.js"></script>
    <script type="text/javascript" src="/github/Wplus/ThinkWplus/Public/front/js/jquery-2.2.2.js"></script>
    <script type="text/javascript" src="/github/Wplus/ThinkWplus/Public/front/js/jquery.event.drag-1.5.min.js"></script>
    <script type="text/javascript" src="/github/Wplus/ThinkWplus/Public/front/js/jquery.touchSlider.js"></script>
    <script type="text/javascript" src="/github/Wplus/ThinkWplus/Public/front/js/index.js"></script>
    <!-- <script type="text/javascript" src="js/my-app.js"></script> -->
  </body>
</html>