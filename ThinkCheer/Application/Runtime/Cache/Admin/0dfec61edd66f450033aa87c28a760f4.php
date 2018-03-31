<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <title> - 登录</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link href="/llh/ThinkCheer/Public/back/css/bootstrap.min.css" rel="stylesheet">
    <link href="/llh/ThinkCheer/Public/back/css/font-awesome.css?v=4.4.0" rel="stylesheet">
    <link href="/llh/ThinkCheer/Public/back/css/animate.css" rel="stylesheet">
    <link href="/llh/ThinkCheer/Public/back/css/style.css" rel="stylesheet">
    <link href="/llh/ThinkCheer/Public/back/css/login.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <meta http-equiv="refresh" content="0;ie.html" />
    <![endif]-->
    <script>
        if (window.top !== window.self) {
            window.top.location = window.location;
        }
    </script>

</head>

<body class="signin">
    <div class="signinpanel">
        <div class="row">
            <div class="col-sm-12">
                <form method="post" action="/llh/ThinkCheer/index.php/Admin/Login/login">
                    <h4 class="no-margins">登录：</h4>
                    <p class="m-t-md">登录到 Cheer 后台</p>
                    <input type="text" name="adminname" class="form-control uname" placeholder="用户名" />
                    <input type="password" name="password" class="form-control pword m-b" placeholder="密码" />
                    <a href="">忘记密码了？</a>
                    <button class="btn btn-success btn-block">登录</button>
                </form>
            </div>
        </div>
        <div class="signup-footer">
            <div class="pull-left">
                &copy; 味+
            </div>
        </div>
    </div>
</body>

</html>