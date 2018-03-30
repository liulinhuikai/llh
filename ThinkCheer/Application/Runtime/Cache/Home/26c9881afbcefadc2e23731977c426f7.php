<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <title>address</title>
    <!-- Path to Framework7 Library CSS-->
    <link rel="stylesheet" href="/github/Wplus/ThinkWplus/Public/front/css/framework7.ios.min.css">
    <link rel="stylesheet" href="/github/Wplus/ThinkWplus/Public/front/css/framework7.ios.colors.min.css">
    <!-- Path to your custom app styles-->
    <link rel="stylesheet" href="/github/Wplus/ThinkWplus/Public/front/css/font-awesome.min.css">
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
              <a href="address.html" class="link icon-only external"> <i class="fa fa-arrow-left blackColor"></i></a>
            </div> 
            <div class="center addressHeader">添加收货地址</div>
          </div>
        </div>
          <!-- Page, data-page contains page name-->
          <div data-page="index" class="page">

            <!-- Scrollable page content-->
            <div class="page-content">
            <div class="row">
              <div class="col-100">&nbsp;</div>
            </div>
            <form class="list-block" action="/github/Wplus/ThinkWplus/index.php/Home/Me/doAdd" method="post" id="form">
              <ul>
                <!-- <li>
                  <div class="item-content">
                    <div class="item-inner">
                      <div class="item-title label">所在省</div>
                      <div class="item-input">
                          <select id="provSelect">
                            <?php if(is_array($province)): $i = 0; $__LIST__ = $province;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option class="province" value="<?php echo ($vo["provinceid"]); ?>"><?php echo ($vo["province"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                          </select>
                      </div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="item-content">
                    <div class="item-inner">
                      <div class="item-title label">所在城市</div>
                      <div class="item-input">
                        <select>
                          <?php if(is_array($city)): $i = 0; $__LIST__ = $city;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vocity): $mod = ($i % 2 );++$i;?><option><?php echo ($vocity["city"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                        </select>
                      </div>
                    </div>
                  </div>
                </li> -->
                <li>
                  <div class="item-content">
                    <div class="item-inner">
                      <div class="item-title label">所在省</div>
                      <div class="item-input">
                          <select id="provSelect" name="province">
                            <?php if(is_array($province)): $i = 0; $__LIST__ = $province;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option class="province"><?php echo ($vo["province"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                          </select>
                      </div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="item-content">
                    <div class="item-inner">
                      <div class="item-title label">所在城市</div>
                      <div class="item-input">
                        <select name="city">
                          <option>市辖区</option>
                          <?php if(is_array($city)): $i = 0; $__LIST__ = $city;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vocity): $mod = ($i % 2 );++$i;?><option><?php echo ($vocity["city"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                        </select>
                      </div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="item-content">
                    <div class="item-inner">
                      <div class="item-title label">所在区</div>
                      <div class="item-input">
                        <select name="area">
                          <option>市辖区</option>
                          <option>长安区</option>
                          <option>桥东区</option>
                          <option>桥西区</option>
                          <option>新华区</option>
                          <option>井陉矿区</option>
                          <option>裕华区</option>
                          <option>井陉县</option>
                          <option>正定县</option>
                          <option>栾城县</option>
                          <option>行唐县</option>
                          <option>灵寿县</option>
                          <option>高邑县</option>
                          <option>深泽县</option>
                          <option>赞皇县</option>
                          <option>无极县</option>
                          <option>平山县</option>
                          <option>元氏县</option>
                          <option>赵　县</option>
                          <option>辛集市</option>
                          <option>藁城市</option>
                          <option>晋州市</option>
                          <option>新乐市</option>
                          <option>鹿泉市</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="item-content">
                    <div class="item-inner">
                      <div class="item-title label">小区</div>
                      <div class="item-input">
                        <input type="text" placeholder="请输入小区名称" name="community">
                      </div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="item-content">
                    <div class="item-inner">
                      <div class="item-title label">门牌号</div>
                      <div class="item-input">
                        <input type="text" placeholder="例:16号楼427" name="address">
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </form>
          </div>
          <div class="toolbar">
          <div class="toolbar-inner redBack">
              <a href="#" class="link redBack imgCerten" onclick="document.getElementById('form').submit();return false;">完成</a>
          </div>
</div>
      </div>
    </div>
    <!-- Path to Framework7 Library JS-->
    <script src="/github/Wplus/ThinkWplus/Public/front/js/framework7.min.js"></script>
    <script src="/github/Wplus/ThinkWplus/Public/front/js/jquery-2.2.2.js"></script>
    <!-- Path to your app js-->
    <script src="/github/Wplus/ThinkWplus/Public/front/js/my-app.js"></script>
    <script>
    // 以下代码功能未实现
    // var province = $(".province").val();
    // $("#provSelect").change(function(){
    //   var province = $(this).val();
    //   $.ajax({
    //     url: '/github/Wplus/ThinkWplus/index.php/Home/Me/getCity/id/'+province,
    //     type: 'get',
    //     success:function(msg){
    //       // console.log(msg);
    //       // var citys = JSON.parse(msg);
    //     }
    //   });
    // });
    </script>
  </body>
</html>