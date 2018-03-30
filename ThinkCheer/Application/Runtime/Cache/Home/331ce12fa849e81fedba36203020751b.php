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
      <div class="view view-main">
        <!-- Top Navbar-->
        <div class="navbar">
          <div class="navbar-inner">
            <div class="left"><a href="/github/Wplus/ThinkWplus/index.php/Home/Index/index" class="link fa fa-arrow-left blackColor external"></a></div>
            <div class="center">添加菜谱</div>
            <div class="right"></div>
          </div>
        </div>
        <div class="pages navbar-through toolbar-through">
          <div data-page="index" class="page">
            <div class="page-content">
              <div class="list-block noMargin">
                <ul>
                  <li>
                    <div class="item-content">
                      <div class="item-inner">
                        <div class="item-input">
                          <input type="text" placeholder="请输入菜谱名(最多15字)">
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="content-block-title menuLabel">食材</div>
              <div class="list-block noMargin">
                <ul>
                  <li>
                    <div class="item-content">
                      <div class="item-inner">
                        <div class="item-input row">
                          <div class="col-50"><input type="text" placeholder="食材名"></div>
                          <div class="col-40"><input type="text" placeholder="用量"></div>
                          <div class="col-10 addAndRemove" id="addFood"><span class="fa fa-plus"></span></div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="item-content">
                      <div class="item-inner">
                        <div class="item-input row">
                          <div class="col-50"><input type="text" placeholder="食材名"></div>
                          <div class="col-40"><input type="text" placeholder="用量"></div>
                          <div class="col-10 addAndRemove"><span class="fa fa-times"></span></div>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="content-block-title menuLabel">闹钟</div>
              <div class="list-block noMargin">
                <ul>
                  <li>
                    <div class="item-content">
                      <div class="item-inner">
                        <div class="item-input row">
                          <!-- <input type="text" placeholder="闹钟" readonly id="picker-describe"> -->
                          <select class="col-50">
                            <option value="1">步骤1</option>
                            <option value="2">步骤2</option>
                            <option value="3">步骤3</option>
                            <option value="4">步骤4</option>
                          </select>
                          <div class="col-40"><input type="text" placeholder="时间"></div>
                          <div class="col-10 addAndRemove" id="addClock"><span class="fa fa-plus"></span></div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="item-content">
                      <div class="item-inner">
                        <div class="item-input row">
                          <select class="col-50">
                            <option value="1">步骤1</option>
                            <option value="2">步骤2</option>
                            <option value="3">步骤3</option>
                            <option value="4">步骤4</option>
                          </select>
                          <div class="col-40"><input type="text" placeholder="时间"></div>
                          <div class="col-10 addAndRemove"><span class="fa fa-times"></span></div>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="content-block-title menuLabel">步骤</div>
              <div class="list-block noMargin">
                <ul>
                  <li>
                    <div class="item-content">
                      <div class="item-inner step row">
                        <div class="col-40 stepImg"><img src="/github/Wplus/ThinkWplus/Public/front/images/001_70.jpg"></div>
                        <div class="col-50 stepDescription">步骤1的一些描述...步骤1的一些描述步骤1的一些描述步骤1的一些描述步骤1的一些描述步骤1的一些描述</div>
                        <div class="col-10 addAndRemove"><span class="fa fa-times"></span></div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="item-content">
                      <div class="item-inner step row">
                        <div class="col-40 stepImg"><img src="/github/Wplus/ThinkWplus/Public/front/images/2.jpg"></div>
                        <div class="col-50 stepDescription">步骤1的一些描述...步骤1的一些描述步骤1的一些描述步骤1的一些描述步骤1的一些描述步骤1的一些描述</div>
                        <div class="col-10 addAndRemove"><span class="fa fa-times"></span></div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="item-content">
                      <div class="item-inner"><a href="" class="button addStepBtn redColor noBorder"><span class="fa fa-plus"></span> 添加步骤</a></div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="/github/Wplus/ThinkWplus/Public/front/js/framework7.min.js"></script>
    <script type="text/javascript" src="/github/Wplus/ThinkWplus/Public/front/js/jquery-2.2.2.js"></script>
    <script type="text/javascript" src="/github/Wplus/ThinkWplus/Public/front/js/menuAdd.js"></script>
    <script type="text/javascript" src="/github/Wplus/ThinkWplus/Public/front/js/my-app.js"></script>
  </body>
</html>