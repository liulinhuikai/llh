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
    <!-- Path to your custom app styles-->
    <link rel="stylesheet" href="/github/Wplus/ThinkWplus/Public/front/css/font-awesome.min.css">
    <link rel="stylesheet" href="/github/Wplus/ThinkWplus/Public/front/css/style.css">
    <style type="text/css">
    /*分割线上边框不显示，必须写在此文件中，武*/
    html.pixel-ratio-2 .list-block ul:before {
      -webkit-transform: scaleY(.0);
      transform: scaleY(.0);
    }
    </style>
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
              <a href="/github/Wplus/ThinkWplus/index.php/Home/Menu/assortment" class="external grayLeft">
                <i class="fa fa-arrow-left" aria-hidden="true"></i>
              </a>
            </div>
            <div class="center"><?php if(is_array($menu)): $i = 0; $__LIST__ = $menu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; echo ($vo["menuname"]); endforeach; endif; else: echo "" ;endif; ?></div>
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
            <div class="page-content" style="margin-top:10px">
              
              <!-- 早餐分类可折叠列表 -->
              <div class="accordion-item" id="accordItem" style="background-color:white;">  
                <div class="row hotTags">
                    <div class="col-33">
                      <a href="#" class="button color-gray">家常菜</a>
                    </div>
                    <div class="col-33">
                      <a href="#" class="button color-gray">肉类</a>
                    </div>
                    <div class="col-33">
                      <a href="#" class="button color-gray">豆制品</a>
                    </div>
                </div>
                <div class="row hotTags">
                    <div class="col-33">
                      <a href="#" class="button color-gray">营养</a>
                    </div>
                    <div class="col-33">
                      <a href="#" class="button color-gray">凉菜</a>
                    </div>
                    <div class="col-33">
                      <a href="#" class="button color-gray">蔬菜</a>
                    </div>
                </div>
                <div class="accordion-item-content">
                  <div class="row hotTags">
                    <div class="col-33">
                      <a href="#" class="button color-gray">排骨</a>
                    </div>
                    <div class="col-33">
                      <a href="#" class="button color-gray">海鲜</a>
                    </div>
                    <div class="col-33">
                      <a href="#" class="button color-gray">烘焙</a>
                    </div>
                  </div>
                  <div class="row hotTags">
                    <div class="col-33">
                      <a href="#" class="button color-gray">素食</a>
                    </div>
                    <div class="col-33">
                      <a href="#" class="button color-gray">外貌协会</a>
                    </div>
                    <div class="col-33">
                      <a href="#" class="button color-gray">宴客</a>
                    </div>
                  </div>
                  <div class="row hotTags">
                    <div class="col-33">
                      <a href="#" class="button color-gray">鸡蛋</a>
                    </div>
                    <div class="col-33">
                      <a href="#" class="button color-gray">低糖</a>
                    </div>
                    <div class="col-33">
                      <a href="#" class="button color-gray">鸡肉</a>
                    </div>
                  </div>
                  <div class="row hotTags" style="padding-bottom:10px">
                    <div class="col-33">
                      <a href="#" class="button color-gray">便当</a>
                    </div>
                    <div class="col-33">
                      <a href="#" class="button color-gray">下酒菜</a>
                    </div>
                    <div class="col-33">
                      <a href="#" class="button color-gray">甜品饮品</a>
                    </div>
                  </div>
                </div>
                <div class="accordion-item-toggle lookAll">
                  <div class="row" style="padding-top:10px">
                    <div class="col-30"></div>
                    <div class="col-40" style="text-align:center" id="seeAll">查看全部&nbsp;
                      <i class="fa fa-chevron-down" aria-hidden="true" style="color:#ea4027" id="faDown"></i>
                    </div>
                    <div class="col-30"></div>
                  </div>
                </div>
              </div>
              <!-- 早餐推荐列表 -->
              <div class="list-block" style="margin-top:6%;">
                <ul>
                  <?php if(is_array($recipe)): $i = 0; $__LIST__ = $recipe;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$re): $mod = ($i % 2 );++$i;?><li class="divider"></li><!--分割-->
                  <li class="list-content">
                    <a href="/github/Wplus/ThinkWplus/index.php/Home/Menu/content/id/<?php echo ($re["id"]); ?>" class="external">
                      <div class="row">
                         <img class="bannerImg" src="/github/Wplus/ThinkWplus/Public/<?php echo ($re["img"]); ?>" width="100%">
                      </div>
                    </a>
                    <div class="row">
                      <div class="col-10"></div>
                      <div class="col-50">
                        <p><?php echo ($re["recipename"]); ?></p>
                        <p class="littleTag"># <a href="#">家常菜</a>&nbsp;&nbsp;<a href="#">宴客</a></p>
                      </div>
                      <div class="col-30 lookBtn">
                        <a href="/github/Wplus/ThinkWplus/index.php/Home/Menu/content/id/<?php echo ($re["id"]); ?>" class="external button button-round color-red">
                          查看菜谱
                        </a>
                      </div>
                      <div class="col-10"></div>
                    </div>
                  </li><?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
              </div><!--end-->
            </div>  
          </div>
        </div>
        <!-- Bottom Toolbar-->  
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
        var imgWidth = $(".bannerImg").width();
        $(".bannerImg").height(imgWidth*0.65);
      });
    </script>
  </body>
</html>