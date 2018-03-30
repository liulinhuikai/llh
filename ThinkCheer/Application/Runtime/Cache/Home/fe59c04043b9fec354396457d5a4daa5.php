<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <title>video_start</title>
    <!-- Path to Framework7 Library CSS-->
    <link rel="stylesheet" href="/github/Wplus/ThinkWplus/Public/front/css/framework7.ios.min.css">
    <link rel="stylesheet" href="/github/Wplus/ThinkWplus/Public/front/css/framework7.ios.colors.min.css">
    <!-- Path to your custom app styles-->
    <link rel="stylesheet" href="/github/Wplus/ThinkWplus/Public/front/css/font-awesome.css">
    <link rel="stylesheet" href="/github/Wplus/ThinkWplus/Public/front/css/font-awesome.min.css">
    <link rel="stylesheet" href="/github/Wplus/ThinkWplus/Public/front/css/style.css">
  </head>
  <body>
    <!-- Views-->
    <div class="views">
      <!-- Your main view, should have "view-main" class-->
      <div class="view view-main">
        <!-- Top Navbar-->
        <div class="navbar navCss">
          <div class="navbar-inner">
            <div class="left">
              <!-- Right link contains only icon - additional "icon-only" class--><a href="/github/Wplus/ThinkWplus/index.php/Home/Video/lists" class="link icon-only open-panel external">  <i class="icon fa fa-arrow-left whiteColor"></i></a>
            </div>
            <div class="center whiteColor">我要直播</div>
          </div>
        </div>
        <!-- Pages, because we need fixed-through navbar and toolbar, it has additional appropriate classes-->
        <div class="pages navbar-through toolbar-through">
          <!-- Page, data-page contains page name-->
          <div data-page="index" class="page">
            <!-- Scrollable page content-->
            <div class="page-content">
                    <div class="card">
                      <div class="card-content textCenter ">
                          <div class="card-content-inner ">   
                            <div class=""><img src="/github/Wplus/ThinkWplus/Public/front/images/head.jpg" width="40%" height="40%" />
                            </div>
                            <h3>周周山人</h3>
                            <div class="greyColor ">房间号：16547</div><br/>
                              <div>
                                <div class="list-block">
                                  <div class="item-content">     
                                    <div class="item-inner">
                                      <div class="item-input">
                                        <input type="text" value="周周山人的直播间">
                                      </div>
                                    </div>
                                     <div class="item-media"><i class="icon fa fa-edit font20"></i></div>
                                  </div>
                                </div>
                              </div>  
                          </div>
                      </div>
                    </div> 
                    <div class="card cardScreen">
                      <div class="card-content  ">
                          <div class="card-content-inner ">
                            <div class="row textCenter "> 
                                <div class="col-10"></div>
                                <div class="col-30"><a href="#" class="button button-round color-red" id="screen1"><i class="icon fa fa-window-maximize font11"></i>&nbsp;横屏</a></div>
                                 <div class="col-20"></div>
                                <div class="col-30"><a href="#" class="greyColor" id="screen2"><i class="icon fa fa-mobile font18"></i>&nbsp;竖屏</a></div>
                                <div class="col-10"></div>
                            </div> 
                            <br/><br/>
                            <div class="row textCenter">
                                  <div class="col-10"></div>
                                  <div class="col-30"><a href="#" class="greyColor" id="clear1">高清</a></div>
                                  <div class="col-30"><a href="#" class="button button-round color-red" id="clear2">标清</a></div>
                                  <div class="col-30"><a href="#" class="greyColor" id="clear3">原画</a></div>
                                  <div class="col-10"></div>
                            </div> 
                          </div>
                      </div>
                    </div>         
            </div>
          </div>
        </div>
        <!-- Bottom Toolbar-->
          <div class="toolbar">
            <div class="toolbar-inner navCss">
                <a href="/github/Wplus/ThinkWplus/index.php/Home/Video/content" class="external link navCss imgCenter">START</a>
            </div>
          </div>


      </div>
    </div>
    <!-- Path to Framework7 Library JS-->
    <script type="text/javascript" src="/github/Wplus/ThinkWplus/Public/front/js/framework7.min.js"></script>
    <!-- Path to your app js-->
    <script type="text/javascript" src="/github/Wplus/ThinkWplus/Public/front/js/my-app.js"></script>
    <script type="text/javascript">
      //实现选择屏幕和流畅度
        var whichScreen2=document.getElementById('screen2');
        var whichScreen1=document.getElementById('screen1');
        whichScreen2.onclick=function(){
          this.setAttribute("class","button button-round color-red ")
          whichScreen1.setAttribute("class",'greyColor');
        }
        whichScreen1.onclick=function(){
          this.setAttribute("class","button button-round color-red ")
          whichScreen2.setAttribute("class",'greyColor');
        }
        var clear1=document.getElementById('clear1');
        var clear2=document.getElementById('clear2');
        var clear3=document.getElementById('clear3');
        clear1.onclick=function(){
          this.setAttribute("class","button button-round color-red ");
          clear2.setAttribute("class","greyColor");
          clear3.setAttribute("class","greyColor");
        }
         clear2.onclick=function(){
          this.setAttribute("class","button button-round color-red ");
          clear1.setAttribute("class","greyColor");
          clear3.setAttribute("class","greyColor");
        }
         clear3.onclick=function(){
          this.setAttribute("class","button button-round color-red ");
          clear2.setAttribute("class","greyColor");
          clear1.setAttribute("class","greyColor");
        }


    </script>
  </body>
</html>