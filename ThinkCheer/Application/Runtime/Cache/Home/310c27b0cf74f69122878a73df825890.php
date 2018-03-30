<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <!-- Required meta tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <!-- Your app title -->
    <title>MyApp</title>
    <!-- Path to Framework7 Library CSS, iOS Theme -->
    <link rel="stylesheet" href="/github/Wplus/ThinkWplus/Public/front/css/framework7.ios.min.css">
    <!-- Path to Framework7 color related styles, iOS Theme -->
    <link rel="stylesheet" href="/github/Wplus/ThinkWplus/Public/front/css/framework7.ios.colors.min.css">
    <link rel="stylesheet" href="/github/Wplus/ThinkWplus/Public/front/css/font-awesome.min.css">
    <link rel="stylesheet" href="/github/Wplus/ThinkWplus/Public/front/css/swiper.min.css">
    <link rel="stylesheet" href="/github/Wplus/ThinkWplus/Public/front/css/style.css">
    <link rel="stylesheet" href="/github/Wplus/ThinkWplus/Public/front/css/menu-swiper.css">
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
              <a href="/github/Wplus/ThinkWplus/index.php/Home/index/index" class="external grayLeft">
                <i class="fa fa-arrow-left" aria-hidden="true"></i>
              </a>
            </div>
            <div class="center">菜谱分类</div>
            <div class="right">
              <i class="fa fa-search" aria-hidden="true"></i>
            </div>
          </div>
        </div>
        <!-- Pages container, because we use fixed-through navbar and toolbar, it has additional appropriate classes-->
        <div class="pages navbar-through toolbar-through">
          <!-- Page, "data-page" contains page name -->
          <div data-page="index" class="page">
            <!-- Scrollable page content -->
            <div class="page-content">
              <!-- 幻灯片 -->
              <div class="swiper-container">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <a href="/github/Wplus/ThinkWplus/index.php/Home/Menu/lists/tagid/1" class="menuAsLink">
                      <div class="category">
                        <div class="catTitle">早餐</div>
                        <div class="row">
                          <img src="/github/Wplus/ThinkWplus/Public/front/images/breakfast1.jpg" class="smallImg">
                          <img src="/github/Wplus/ThinkWplus/Public/front/images/breakfast2.jpg" class="smallImg">
                        </div>
                        <div class="row">
                          <img src="/github/Wplus/ThinkWplus/Public/front/images/breakfast3.jpg" class="smallImg">
                          <img src="/github/Wplus/ThinkWplus/Public/front/images/breakfast4.jpg" class="smallImg">
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="swiper-slide">
                    <a href="/github/Wplus/ThinkWplus/index.php/Home/Menu/lists/tagid/2" class="menuAsLink">
                      <div class="category">
                        <div class="catTitle">午餐</div>
                        <div class="row">
                          <img src="/github/Wplus/ThinkWplus/Public/front/images/001_70.jpg" class="smallImg">
                          <img src="/github/Wplus/ThinkWplus/Public/front/images/010_70.jpg" class="smallImg">
                        </div>
                        <div class="row">
                          <img src="/github/Wplus/ThinkWplus/Public/front/images/012_70.jpg" class="smallImg">
                          <img src="/github/Wplus/ThinkWplus/Public/front/images/004_70.jpg" class="smallImg">
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="swiper-slide">
                    <a href="/github/Wplus/ThinkWplus/index.php/Home/Menu/lists/tagid/3" class="menuAsLink">
                      <div class="category">
                        <div class="catTitle">晚餐</div>
                        <div class="row">
                          <img src="/github/Wplus/ThinkWplus/Public/front/images/011_70.jpg" class="smallImg">
                          <img src="/github/Wplus/ThinkWplus/Public/front/images/006_70.jpg" class="smallImg">
                        </div>
                        <div class="row">
                          <img src="/github/Wplus/ThinkWplus/Public/front/images/008_70.jpg" class="smallImg">
                          <img src="/github/Wplus/ThinkWplus/Public/front/images/005_70.jpg" class="smallImg">
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="swiper-slide">
                    <a href="/github/Wplus/ThinkWplus/index.php/Home/Menu/lists/tagid/4" class="menuAsLink">
                      <div class="category">
                        <div class="catTitle">夜宵</div>
                        <div class="row">
                          <img src="/github/Wplus/ThinkWplus/Public/front/images/002_70.jpg" class="smallImg">
                          <img src="/github/Wplus/ThinkWplus/Public/front/images/008_70.jpg" class="smallImg">
                        </div>
                        <div class="row">
                          <img src="/github/Wplus/ThinkWplus/Public/front/images/009_70.jpg" class="smallImg">
                          <img src="/github/Wplus/ThinkWplus/Public/front/images/013_70.jpg" class="smallImg">
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
              </div><!-- swiper-container end -->
              <!-- 热门标签 -->
              <div class="card" style="margin-top:6%;">
                <div class="card-content tagAssorts">
                  <div class="row">
                    <div class="col-5"></div>
                    <div class="col-25 hotTag">热门标签</div>
                    <div class="col-70"></div>
                  </div>
                  <div class="row hotTags">
                      <?php if(is_array($menu)): $i = 0; $__LIST__ = $menu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="col-33">
                            <a name="tag" href="/github/Wplus/ThinkWplus/index.php/Home/Menu/lists/tagid/<?php echo ($vo["id"]); ?>" class="external button color-gray"><?php echo ($vo["menuname"]); ?></a>
                        </div><?php endforeach; endif; else: echo "" ;endif; ?>
                  </div>
                </div>
              </div><!--hotTags end-->
            </div>  
          </div>
        </div>
        <!-- Bottom Toolbar-->
       
      </div>
    </div>
    <!-- Path to Framework7 Library JS-->
    <script type="text/javascript" src="/github/Wplus/ThinkWplus/Public/front/js/framework7.min.js"></script>
    <script src="/github/Wplus/ThinkWplus/Public/front/js/swiper.min.js"></script>
    <script src="/github/Wplus/ThinkWplus/Public/front/js/menuSwiper.js"></script>
    <script type="text/javascript" src="/github/Wplus/ThinkWplus/Public/front/js/jquery-2.2.2.js"></script>
    <script type="text/javascript">
      // 实现图片为正方形显示
      $(document).ready(function(){
        var imgWidth = $(".smallImg").width();
        $(".smallImg").height(imgWidth);
      });
    </script>
  </body>
</html>