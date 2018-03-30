<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>添加菜谱</title>
    <meta name="keywords" content="">
    <meta name="description" content="">

    <link rel="shortcut icon" href="favicon.ico"> <link href="/github/Wplus/ThinkWplus/Public/back/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="/github/Wplus/ThinkWplus/Public/back/css/font-awesome.css?v=4.4.0" rel="stylesheet">
    <link href="/github/Wplus/ThinkWplus/Public/back/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="/github/Wplus/ThinkWplus/Public/back/css/animate.css" rel="stylesheet">
    <link href="/github/Wplus/ThinkWplus/Public/back/css/style.css?v=4.1.0" rel="stylesheet">
    <link href="/github/Wplus/ThinkWplus/Public/back/css/fileinput.css" rel="stylesheet" >
    <link href="/github/Wplus/ThinkWplus/Public/back/css/luxiaojia.css" rel="stylesheet" >

</head>

<body class="gray-bg">
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-sm-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>编辑菜谱</h5>
                    </div>
                    <div class="ibox-content">
                        <form method="post" class="form-horizontal" enctype="multipart/form-data" action="/github/Wplus/ThinkWplus/index.php/Admin/Recipe/doEdit">
                            <?php if(is_array($recipe)): $i = 0; $__LIST__ = $recipe;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="form-group">
                                <label class="col-sm-2 control-label">菜名</label>

                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="recipename" value="<?php echo ($vo["recipename"]); ?>">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">标签</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" value="">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            
                            <?php
 for($i = 0; $i<count($vo['foodname']); $i++) { echo '<div class="form-group">'; if($i == 0){ echo '<label class="col-sm-2 control-label">用料</label>'; } else{ echo '<div class="col-sm-2"></div>'; } echo '<div class="col-sm-5">
                                            <input type="text" class="form-control" placeholder="食材" name="foodname[]" value="'.$vo["foodname"][$i].'">
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" placeholder="数量" name="foodnum[]" value="'.$vo["foodnum"][$i].'">
                                        </div>'; if($i == 0){ echo '<div class="addAndRemove" id="addFood">
                                                <span class="glyphicon glyphicon-plus"></span>
                                            </div>'; } else{ echo '<div class="addAndRemove remove">
                                                <span class="glyphicon glyphicon-remove"></span>
                                            </div>'; } echo '</div>'; } ?>
                            
                            <div class="hr-line-dashed"></div>
                            <?php if(is_array($vo['step'])): $i = 0; $__LIST__ = $vo['step'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$st): $mod = ($i % 2 );++$i;?><div class="form-group row">
                            <?php if($st == $vo['step'][0]): ?><label class="col-sm-2 control-label">做法</label>
                                <div class="col-sm-7">
                                    <textarea name="step[]" id="" rows="7" class="form-control" placeholder="步骤"><?php echo ($st); ?></textarea>
                                </div>
                                <div class="col-sm-2">
                                    <div class="control-group js_uploadBox">
                                        <div class="btn-upload">
                                          <a href=""><i class="icon-upload"></i><span class="js_uploadText">上传</span>图片</a>
                                          <input class="js_upFile" type="file" name="img[]">
                                        </div>
                                        <div class="js_showBox "><img class="js_logoBox" src="/github/Wplus/ThinkWplus/Public/back/img/a2.jpg" width="100px" ></div>
                                    </div>
                                </div>
                                <div class="addAndRemove" id="addProcedure">
                                    <span class="glyphicon glyphicon-plus"></span>
                                </div>
                            <?php else: ?>
                                <div class="col-sm-2"></div>
                                <div class="col-sm-7">
                                    <textarea name="step[]" id="" rows="7" class="form-control" placeholder="步骤"><?php echo ($st); ?></textarea>
                                </div>
                                <div class="col-sm-2">
                                    <div class="control-group js_uploadBox">
                                        <div class="btn-upload">
                                          <a href=""><i class="icon-upload"></i><span class="js_uploadText">上传</span>图片</a>
                                          <input class="js_upFile" type="file" name="img[]">
                                        </div>
                                        <div class="js_showBox "><img class="js_logoBox" src="/github/Wplus/ThinkWplus/Public/back/img/a2.jpg" width="100px" ></div>
                                    </div>
                                </div>
                                <div class="addAndRemove remove">
                                    <span class="glyphicon glyphicon-remove"></span>
                                </div><?php endif; ?>
                            </div><?php endforeach; endif; else: echo "" ;endif; ?>
                            <div class="hr-line-dashed"></div>
                            <?php
 for($i = 0; $i<count($vo['clocknum']); $i++) { echo '<div class="form-group">'; if($i == 0){ echo '<label class="col-sm-2 control-label">闹钟</label>'; } else{ echo '<div class="col-sm-2"></div>'; } echo '<div class="col-sm-5">
                                            <input type="text" class="form-control" placeholder="第几步，请输入数字" name="clocknum[]" value="'.$vo["clocknum"][$i].'">
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" name="clocktime[]" placeholder="时间" value="'.$vo["clocktime"][$i].'">
                                        </div>'; if($i == 0){ echo '<div class="addAndRemove" id="addClock">
                                                <span class="glyphicon glyphicon-plus"></span>
                                            </div>'; } else{ echo '<div class="addAndRemove remove">
                                                <span class="glyphicon glyphicon-remove"></span>
                                            </div>'; } echo '</div>'; } ?>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group Center">
                                <button class="btn btn-primary" type="submit">保存内容</button>
                            </div>
                            <input type="hidden" name="id" value="<?php echo ($vo["id"]); ?>"><?php endforeach; endif; else: echo "" ;endif; ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 全局js -->
    <script src="/github/Wplus/ThinkWplus/Public/back/js/jquery.min.js?v=2.1.4"></script>
    <script src="/github/Wplus/ThinkWplus/Public/back/js/bootstrap.min.js?v=3.3.6"></script>   

    <!-- 自定义js -->
    <script src="/github/Wplus/ThinkWplus/Public/back/js/fileinput.js"></script>
    <script src="/github/Wplus/ThinkWplus/Public/back/js/fileinput_locale_zh.js"></script>
    <script src="/github/Wplus/ThinkWplus/Public/back/js/content.js?v=1.0.0"></script>
    <script src="/github/Wplus/ThinkWplus/Public/back/js/luxiaojia.js"></script>

    <!-- iCheck -->
    <script src="/github/Wplus/ThinkWplus/Public/back/js/plugins/iCheck/icheck.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });
        });
    </script>

    
    

</body>

</html>