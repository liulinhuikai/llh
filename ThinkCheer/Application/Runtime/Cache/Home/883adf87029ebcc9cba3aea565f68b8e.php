<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
 <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<title>Essayedit</title>
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
		      		<div class="center sliding">撰写文章</div>
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
			        	<div class="list-block essayList">
				       		<ul>
				       			<!-- Text inputs -->
							    <li>
							      <div class="item-content">
							        <div class="item-inner">
							          <div class="item-input">
							            <input type="text" autofocus="autofocus" placeholder="文章标题">
							          </div>
							        </div>
							      </div>
							    </li>
							    <!-- Textarea -->
							    <li class="align-top">
							      <div class="item-content">
							        <div class="item-inner">
							          <div class="item-input">
							            <textarea onpropertychange="MaxMe(this)" oninput="MaxMe(this)" placeholder="文章内容"></textarea>
							          </div>
							        </div>
							      </div>
							    </li>
						    </ul>
						</div>
			        </div>
		        </div>
		    </div>
		          <!-- Bottom Toolbar-->
		    <div class="toolbar tabbar">
			    <div class="toolLink toolbar-inner">
			        <a href="#" class="tab-link">
			            <i class="icon fa fa-image"></i>
			        </a>
			        <a href="#" class="tab-link">
			            <i class="icon fa fa-bell"></i>
			        </a>
			        <a href="#" class="tab-link">
			            <i class="icon fa fa-at"></i>
			        </a>
			        <a href="#" class="tab-link">
			            <i class="icon fa fa-file-text"></i>
			        </a>
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