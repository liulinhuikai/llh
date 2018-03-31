<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <title>My App</title>
    <!-- Path to Framework7 Library CSS-->
    <link rel="stylesheet" href="/llh/ThinkCheer/Public/front/css/framework7.ios.min.css">
    <link rel="stylesheet" href="/llh/ThinkCheer/Public/front/css/framework7.ios.colors.min.css">
    <link rel="stylesheet" href="/llh/ThinkCheer/Public/front/css/fa-svg-with-js.css">
    <!-- Path to your custom app styles-->
    <link rel="stylesheet" href="/llh/ThinkCheer/Public/front/css/style.css">
    <link rel="stylesheet" href="/llh/ThinkCheer/Public/front/css/llh.css">
    <script type="text/javascript" src="/llh/ThinkCheer/Public/front/js/jquery.js"></script>
    <style>
      .pop{
        display: none;
      }
    </style>
  </head>
  <body class="theme-gray">
    <!-- 遮罩层 -->
    <div class="pop">
      <h3 class="biao">发布新的</h3>
      <div class="pai">
       <div>
          <a href="fawen.html" class="external">
            <img src="/llh/ThinkCheer/Public/front/img/fa1.jpg" width="50%" />
            <p>文章</p>
          </a>
        </div>
        <div>
          <a href="" class="external">
            <img src="/llh/ThinkCheer/Public/front/img/fa2.png" width="50%" />
            <p>图片</p>
          </a>
        </div>
        <div>
          <a href="musicPublish.html" class="external">
            <img src="/llh/ThinkCheer/Public/front/img/fa1.jpg" width="50%" />
            <p>音乐</p>
          </a>
        </div>
        <div>
          <a href="communityPublish.html" class="external">
            <img src="/llh/ThinkCheer/Public/front/img/fa2.png" width="50%" />
            <p>动态</p>
          </a>
        </div>
      </div>
    </div>

    <!-- Status bar overlay for fullscreen mode-->
    <div class="statusbar-overlay"></div>
    <!-- Views-->
    <div class="views whiteBGColor">
      <!-- Your main view, should have "view-main" class-->
      <div class="view view-main whiteBGColor">
        <!-- Top Navbar-->
        <div class="navbar whiteBGColor">
          <div class="navbar-inner">
            <!-- We have home navbar without left link-->
            <div class="left">
              <a href="#" id="autocomplete-standalone-popup" class="grayColor autocomplete-opener">
                <i class="fas fa-search">
                  <div class="item-after"></div>
                </i>
              </a>
            </div>
            <div class="center sliding">首页</div>
            <div class="right">
              <a href="musicPlay.html" class="external grayColor"><i class="fas fa-music"></i></a>
            </div>
          </div>
        </div>
        <!-- Pages, because we need fixed-through navbar and toolbar, it has additional appropriate classes-->
        <div class="pages navbar-through toolbar-through">
          <!-- Page, data-page contains page name-->
          <div data-page="index" class="page">
            <div class="page-content">
              <!-- banner图     -->
              <div class="swiper-container swiper-1">
                <div class="swiper-pagination"></div>
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <span>
                      <img src="/llh/ThinkCheer/Public/front/img/iu1.jpg" width="100%" class="imgW">
                    </span>
                  </div>
                  <div class="swiper-slide">
                    <span>
                      <img src="/llh/ThinkCheer/Public/front/img/1.jpg" width="100%" class="imgW">
                    </span>
                  </div>
                  <div class="swiper-slide">
                    <span>
                      <img src="/llh/ThinkCheer/Public/front/img/iu2.jpg" width="100%" class="imgW">
                    </span>
                  </div>
                </div>
              </div>
              <!-- banner图  end   -->
              <!-- 卡片列表1 -->
              <div class="card facebook-card">
                <div class="card-header">
                  <div class="fb">
                    <div class="facebook-avatar">
                      <img src="/llh/ThinkCheer/Public/front/img/2.jpg" width="34" height="34">
                    </div>
                    <div class="facebook-name" style="font-size:16px">John Doe</div>
                    <div class="facebook-date">Monday at 2:15 PM</div>
                  </div>
                  <a href="#" class="button followBtn" style="color:Tomato;border-color:#FF5722;">关注</a>
                </div>
                <div class="card-content">
                  <a href="musicContent.html" class="external">
                    <div class="card-content-inner">
                      <p class="font16" style="color:black">What a nice photo i took yesterday!</p>
                      <img src="/llh/ThinkCheer/Public/front/img/1.jpg" width="280" height="140">
                    </div>
                  </a>
                </div>
                <div class="card-footer">
                  <a href="#" class="link">
                   <i class="fas fa-share-square"></i>&nbsp;
                   <span>转发</span>
                  </a>
                  <a href="#" class="link">
                    <i class="far fa-comment-alt"></i>&nbsp;
                    <span>评论</span>
                  </a>
                  <a href="#" class="link thumbs">
                    <i class="far fa-thumbs-up"></i>&nbsp;
                    <span>11</span>
                  </a>
                </div>
              </div> 
              <!-- 卡片列表1 end -->
              <!-- 卡片列表2 -->
              <div class="card facebook-card">
                <div class="card-header">
                  <div class="fb">
                    <div class="facebook-avatar">
                      <img src="/llh/ThinkCheer/Public/front/img/2.jpg" width="34" height="34">
                    </div>
                    <div class="facebook-name" style="font-size:16px">John Doe</div>
                    <div class="facebook-date">Monday at 2:15 PM</div>
                  </div>
                  <a href="#" class="button followBtn" style="color:Tomato;border-color:#FF5722;">关注</a>
                </div>
                <div class="card-content">
                  <a href="musicContent.html" class="external">
                    <div class="card-content-inner">
                      <p class="font16 blackColor">What a nice photo i took yesterday!</p>
                      <img src="/llh/ThinkCheer/Public/front/img/1.jpg" width="280" height="140">
                    </div>
                  </a>
                </div>
                <div class="card-footer">
                  <a href="#" class="link">
                   <i class="fas fa-share-square"></i>&nbsp;
                   <span>转发</span>
                  </a>
                  <a href="#" class="link">
                    <i class="far fa-comment-alt"></i>&nbsp;
                    <span>评论</span>
                  </a>
                  <a href="#" class="link thumbs">
                    <i class="far fa-thumbs-up"></i>&nbsp;
                    <span>点赞</span>
                  </a>
                </div>
              </div> 
              <!-- 卡片列表2 end -->
            </div>
          </div>
        </div>
        <!-- Bottom Toolbar-->
        <div class="toolbar tabbar tabbar-labels">
          <div class="toolbar-inner">
              <a href="#" class="tab-link active">
                  <i class="icon fas fa-home fa-lg" style="color:Tomato"></i>
                  <span class="tabbar-label redColor">首页</span>
              </a>
              <a href="find.html" class="external tab-link">
                  <i class="icon far fa-compass fa-lg"></i>
                  <span class="tabbar-label">发现</span>
              </a>
              <a href="javascript:;" class="tab-link open-about click_pop">
                  <i class="icon fas fa-plus-square fa-2x" style="color:Tomato"></i>  
              </a>
              <a href="community.html" class="external tab-link">
                  <i class="icon fas fa-bars fa-lg"></i>
                  <span class="tabbar-label">社区</span>
              </a>
              <a href="my.html" class="external tab-link">
                  <i class="icon fas fa-user fa-lg"></i>
                  <span class="tabbar-label">我的</span>
              </a>
          </div>
        </div><!-- toolbar end -->
      </div>
    </div>
    <script type="text/javascript">
      $(function(){
            $(".click_pop").click(function(){
                $(".pop").show()
                // $(".yaoqing").show()
            })
            $(".pop").click(function(){
                $(".pop").hide()
                // $(".tishi").show()
            })
            // $(".bg-black").click(function(){
            //     $(".bg-black").hide();
            //     $(".yaoqing").hide();
            //     $(".tishi").hide();
            // })
        })
    </script>
    <!-- Path to Framework7 Library JS-->
    <script type="text/javascript" src="/llh/ThinkCheer/Public/front/js/jquery-2.2.2.js"></script>
    <script type="text/javascript" src="/llh/ThinkCheer/Public/front/js/framework7.min.js"></script>
    <script type="text/javascript" src="/llh/ThinkCheer/Public/front/js/fontawesome-all.min.js"></script>
    <script>
      // 搜索弹出搜索框
      var myApp = new Framework7();            
      var $$ = Dom7;
      var autocompleteStandalonePopup = myApp.autocomplete({
        openIn: 'popup', //open in popup
        opener: $$('#autocomplete-standalone-popup'), //link that opens autocomplete
        backOnSelect: true, //go back after we select something
        source: function (autocomplete, query, render) {
            var results = [];
            if (query.length === 0) {
                render(results);
                return;
            }
            // Find matched items
            for (var i = 0; i < fruits.length; i++) {
                if (fruits[i].toLowerCase().indexOf(query.toLowerCase()) >= 0) results.push(fruits[i]);
            }
            // Render items by passing array with result items
            render(results);
        },
        onChange: function (autocomplete, value) {
            // Add item text value to item-after
            $$('#autocomplete-standalone-popup').find('.item-after').text(value[0]);
            // Add item value to input value
            $$('#autocomplete-standalone-popup').find('input').val(value[0]);
        }
      });
      //幻灯片 1 Slide Per View, 50px Between
      var mySwiper1 = myApp.swiper('.swiper-1', {
        pagination:'.swiper-1 .swiper-pagination',
        spaceBetween: 50,
        speed:500
      });
    </script>
    <script type="text/javascript">
      $(document).ready(function(){
        //banner幻灯大小
        var imgWidth = $(".imgW").width();
        $(".imgW").height(imgWidth*0.5);

        //点赞效果变换
        $(".thumbs").click(function(){
          var thumbs = $(this).children("svg");
          var thumnum = $(this).children("span").text();
          console.log(thumnum);
          if (thumbs.attr("data-prefix") == "far") {
            thumbs.attr("data-prefix","fas");
            thumbs.attr("style","color:red");
            if(thumnum == "点赞"){
              $(this).children("span").text("1");
            }else{
              thumnum = parseInt(thumnum);
              thumnum = thumnum + 1;
              console.log(thumnum);
              $(this).children("span").text(thumnum);
            }
          }else{
            thumbs.attr("data-prefix","far");
            thumbs.attr("style","");
            if (thumnum == "1") {
              $(this).children("span").text("点赞");
            }else{
              thumnum = parseInt(thumnum);
              thumnum = thumnum - 1;
              console.log(thumnum);
              $(this).children("span").text(thumnum);
            }
          }
        });
      })
    </script>
  </body>
</html>