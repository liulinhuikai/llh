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
    <link rel="stylesheet" href="/github/Wplus/ThinkWplus/Public/front/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/github/Wplus/ThinkWplus/Public/front/css/style.css">
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
          <div class="navbar-inner" id="makeOrderTil">
            <div class="left">
              <a href="/github/Wplus/ThinkWplus/index.php/Home/Menu/content/id/<?php echo ($recipe["id"]); ?>" class="external redLeft">
                <i class="fa fa-arrow-left" aria-hidden="true"></i>
              </a>
            </div>
            <div class="center blackColor">买菜</div>
          </div>
        </div>
        <!-- Pages container, because we use fixed-through navbar and toolbar, it has additional appropriate classes-->
        <div class="pages navbar-through toolbar-through">
          <!-- Page, "data-page" contains page name -->
          <div data-page="index" class="page">
            <!-- Scrollable page content -->
            <div class="page-content" style="padding-top:10px">
              <!-- 用料用量 -->
              <form enctype="multipart/form-data" action="" method="post">
                <div class="list-block">
                  <img src="/github/Wplus/ThinkWplus/Public/front/images/up.png" width="100%" />
                  <ul id="selectedMenu">
                    <!--用料列表-->
                      <?php
 for($i=0;$i<count($recipe['foodname']);$i++){ echo '<li class="item-content menuData">'. '<div class="item-inner">'. '<input type="text" name="ingredients[]" placeholder="" value="'.$recipe['foodname'][$i].'">'. '<div class="item-input">'. '<input type="text" name="amount[]" class="textRight" placeholder="数量" value="">'. '</div>'. '<i class="rightBtn fa fa-close"></i>'. '</div>'. '</li>'; } ?>
                  </ul>
                  <img src="/github/Wplus/ThinkWplus/Public/front/images/down.png" width="100%" />
                  <ul>
                    <li class="item-content">
                      <div class="item-inner">
                        <div class="item-title label">我还想买</div>
                        <div class="item-input">
                          <input type="text" class="textRight" id="plusName" placeholder="菜名" value="">
                        </div>
                        <div class="item-input">
                          <input type="text" class="textRight" id="plusNum" placeholder="数量" value="">
                        </div>
                        <div class="rightBtn fa fa-plus"></div>
                      </div>
                    </li>
                  </ul>
                </div>
                <!-- 按钮：一键带和自己买 -->
                <div class="row btnGroup" style="margin-top:-30px">
                  <div class="col-10"></div>
                  <div class="col-33">
                    <div class="accordion-item">
                      <div class="accordion-item-toggle">
                        <div class="otherBuy">一键代</div>
                      </div>
                      <div class="accordion-item-content" id="daiBuyContent">
                        <div class="list-block">
                          <ul>
                            <li>
                              <div class="item-content">
                                <div class="item-inner">
                                  <div class="item-title label">打赏</div>
                                  <div class="item-input">
                                    <input type="text" name="reward" placeholder="输入你想打赏的金额" value="">
                                  </div>
                                  元
                                </div>
                              </div>
                            </li>
                            <li>
                              <div class="item-content">
                                <div class="item-inner">
                                  <div class="item-title label">订单截止</div>
                                  <div class="item-input">
                                    <input type="text" name="deadline" placeholder="选择该订单的截止时间" readonly id="picker-time">
                                  </div>
                                </div>
                              </div>
                            </li>
                            <li>
                              <div class="item-content">
                                <div class="item-inner">
                                  <div class="item-title label">送菜地址</div>
                                  <div class="item-input">
                                    <input type="text" name="address" placeholder="请选择收货地址" value="<?php echo ($address["province"]); echo ($address["city"]); echo ($address["area"]); echo ($address["community"]); echo ($address["address"]); ?>"
                                    class="fourteenFont"> 
                                  </div>
                                  <a href="/github/Wplus/ThinkWplus/index.php/Home/Me/address" class="external grayLeft">
                                      <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
                                  </a>
                                </div>
                              </div>
                            </li>
                          </ul>
                        </div>
                        <div class="row" style="padding-bottom:10px;">
                          <div class="col-65"></div>
                          <div class="col-30">
                            <button type="submit" class="external button button-fill color-red" id="othersbuy">确认</button>
                          </div>
                          <div class="col-5"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-10"></div>
                  <div class="col-33"><button type="submit" class="external button selfBuy" id="ownbuy">自己买</button></div>
                  <div class="col-10"></div>
                </div>
              </form>
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
        var pageWidth = $(".page").width();
        $("#daiBuyContent").width(pageWidth);

        //实现＋号效果
        $(".fa-plus").click(function(){
          var plusName =  $("#plusName").val();
          var plusNum = $("#plusNum").val();

          if (plusNum=='' || plusName=='') {alert('食材及数量不能为空哦！')}
          else{
            var one = $('<li class="item-content menuData"></li>');
            var two = $('<div class="item-inner"></div>');
            var three1 = $('<input type="text" name="ingredients[]" placeholder="" value="'+plusName+'">');
            var three2 = $('<div class="item-input"></div>');
            var three3 = $('<i class="rightBtn fa fa-close"></i>');
            var four = $('<input type="text" name="amount[]" class="textRight" placeholder="数量" value="'+plusNum+'">');
            var newOrder = one.append(two.append(three1,three2.append(four),three3));
            $("#selectedMenu").append(newOrder);
            //添加后使原输入框中val为空
            $("#plusName").val('');
            $("#plusNum").val('');
          }
        });
        // ×号实现删除
        $("body").on("click",".fa-close",function(){
          var del = $(this).parent().parent();
          del.remove();
        });

        $("#othersbuy").click(function(){
          $('form').attr('action','/github/Wplus/ThinkWplus/index.php/Home/Menu/othersbuy');
        });
        $("#ownbuy").click(function(){
          $('form').attr('action','/github/Wplus/ThinkWplus/index.php/Home/Menu/ownbuy');
        });
      });

      // 时间选择器
      var pickerInline = myApp.picker({
          input: '#picker-time',
          rotateEffect: true,      
          toolbarTemplate: 
            '<div class="toolbar">' +
                '<div class="toolbar-inner">' +
                    '<div class="left">' +
                    '</div>' +
                    '<div class="right">' +
                        '<a href="#" class="link close-picker">完成</a>' +
                    '</div>' +
                '</div>' +
            '</div>',

          formatValue: function (p, values, displayValues) {
              return values[0] + ':' + values[1];
          },
       
          cols: [
              // Hours
              {
                  textAlign: 'left',
                  values: (function () {
                      var arr = [];
                      for (var i = 0; i <= 23; i++) { arr.push(i); }
                      return arr;
                  })(),
              },
              // Divider
              {
                  divider: true,
                  content: ':'
              },
              // Minutes
              {
                  values: (function () {
                      var arr = [];
                      for (var i = 0; i <= 59; i++) { arr.push(i < 10 ? '0' + i : i); }
                      return arr;
                  })(),
              }
          ]
      }); 
    </script>
  </body>
</html>