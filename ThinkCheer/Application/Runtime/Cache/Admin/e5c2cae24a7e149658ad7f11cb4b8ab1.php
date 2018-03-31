<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--360浏览器优先以webkit内核解析-->


    <title> - 主页示例</title>

    <link rel="shortcut icon" href="favicon.ico"> <link href="/llh/ThinkCheer/Public/back/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="/llh/ThinkCheer/Public/back/css/font-awesome.css?v=4.4.0" rel="stylesheet">

    <link href="/llh/ThinkCheer/Public/back/css/animate.css" rel="stylesheet">
    <link href="/llh/ThinkCheer/Public/back/css/style.css?v=4.1.0" rel="stylesheet">

</head>

<body class="gray-bg">
    <div class="wrapper wrapper-content">
        <div class="row">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="row row-sm text-center">
                            <div class="col-xs-6">
                                <div class="panel padder-v item">
                                    <div class="h1 text-info font-thin h1">521</div>
                                    <span class="text-muted text-xs">同比增长</span>
                                    <div class="top text-right w-full">
                                        <i class="fa fa-caret-down text-warning m-r-sm"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="panel padder-v item bg-info">
                                    <div class="h1 text-fff font-thin h1">521</div>
                                    <span class="text-muted text-xs">今日累计访问量</span>
                                    <div class="top text-right w-full">
                                        <i class="fa fa-caret-down text-warning m-r-sm"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="panel padder-v item bg-primary">
                                    <div class="h1 text-fff font-thin h1">521</div>
                                    <span class="text-muted text-xs">注册数量</span>
                                    <div class="top text-right w-full">
                                        <i class="fa fa-caret-down text-warning m-r-sm"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="panel padder-v item">
                                    <div class="font-thin h1">$129</div>
                                    <span class="text-muted text-xs">累计注册量</span>
                                    <div class="bottom text-left">
                                        <i class="fa fa-caret-up text-warning m-l-sm"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   <!--  右边的图 -->
                    <div class="col-sm-8">
                        <div class="ibox float-e-margins">
                            <!-- <div class="ibox-title" style="border-bottom:none;background:#fff;">
                                <h5>用户在线量监控</h5>
                            </div> -->
                            <div class="ibox-content" style="border-top:none;">
                                <div id="leftChart" style="height:259px;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
               <!--  下边的表 -->
                    <div class="col-sm-9" style="padding-right:0;">
                        <div class="ibox float-e-margins">
                            <!-- <div class="ibox-title" style="border-bottom:none;background:#fff;">
                                <h5>往年数据</h5>
                            </div> -->
                            <div class="ibox-content" style="border-top:none;">
                                <div id="rightChart" style="height:259px;">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3" style="padding-left:0;">
                        <div class="ibox float-e-margins">
                            <div class="ibox-content" style="border-top:none;background-color:#e4eaec;">
                                <h5>新增用户</h5>
                                <div class="progress progress-striped active">
                                    <div style="width: 75%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="75" role="progressbar" class="progress-bar">
                                        <span class="sr-only"></span>
                                    </div>
                                </div>
                                <h5>流失用户</h5>
                                <div class="progress progress-striped active">
                                    <div style="width: 75%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="75" role="progressbar" class="progress-bar progress-bar-warning">
                                        <span class="sr-only"></span>
                                    </div>
                                </div>
                                <h5>往年用户</h5>
                                <div class="progress progress-striped active">
                                    <div style="width: 75%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="75" role="progressbar" class="progress-bar .progress-bar-danger">
                                        <span class="sr-only"></span>
                                    </div>
                                </div>
                                <h5>固定用户</h5>
                                <div class="progress progress-striped active">
                                    <div style="width: 75%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="75" role="progressbar" class="progress-bar progress-bar-info">
                                        <span class="sr-only"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              
            </div>
            
        </div>
    </div>
    <!-- 全局js -->
    <script src="/llh/ThinkCheer/Public/back/js/echarts1.min.js"></script>
    <script src="/llh/ThinkCheer/Public/back/js/macarons.js"></script>
    <script src="/llh/ThinkCheer/Public/back/js/jquery.min.js?v=2.1.4"></script>
    <script src="/llh/ThinkCheer/Public/back/js/bootstrap.min.js?v=3.3.6"></script>
    <script src="/llh/ThinkCheer/Public/back/js/plugins/layer/layer.min.js"></script>
    <!-- Flot -->
    <script src="/llh/ThinkCheer/Public/back/js/plugins/flot/jquery.flot.js"></script>
    <script src="/llh/ThinkCheer/Public/back/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="/llh/ThinkCheer/Public/back/js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="/llh/ThinkCheer/Public/back/js/plugins/flot/jquery.flot.pie.js"></script>
    <!-- 自定义js -->
    <script src="/llh/ThinkCheer/Public/back/js/content.js"></script>

     <script type="text/javascript">
         var myChart1 = echarts.init(document.getElementById('rightChart'),'macarons');
         var myChart2 = echarts.init(document.getElementById('leftChart'),'macarons');


         option1 = {
            title: {
            text: '往年数据'
            },
            tooltip : {
                trigger: 'axis'
            },
            legend: {
                data:['新增用户','流失用户','潜在用户','往年用户','固定用户']
            },
            toolbox: {
                feature: {
                    saveAsImage: {}
                }
            },
            grid: {
                left: '2%',
                right: '3%',
                bottom: '3%',
                containLabel: true
            },
            xAxis : [
                {
                    type : 'category',
                    boundaryGap : false,
                    data : ['2003年','2004年','2005年','2006年','2007年','2008年','2009年']
                }
            ],
            yAxis : [
                {
                    type : 'value'
                }
            ],
            series : [
                {
                    name:'新增用户',
                    type:'line',
                    stack: '总量',
                    areaStyle: {normal: {}},
                    data:[120, 132, 101, 134, 90, 230, 210]
                },
                {
                    name:'流失用户',
                    type:'line',
                    stack: '总量',
                    areaStyle: {normal: {}},
                    data:[220, 182, 191, 234, 290, 330, 310]
                },
                {
                    name:'潜在用户',
                    type:'line',
                    stack: '总量',
                    areaStyle: {normal: {}},
                    data:[150, 232, 201, 154, 190, 330, 410]
                },
                {
                    name:'往年用户',
                    type:'line',
                    stack: '总量',
                    areaStyle: {normal: {}},
                    data:[320, 332, 301, 334, 390, 330, 320]
                },
                {
                    name:'固定用户',
                    type:'line',
                    stack: '总量',
                    label: {
                        normal: {
                            show: true,
                            position: 'top'
                        }
                    },
                    areaStyle: {normal: {}},
                    data:[820, 932, 901, 934, 1290, 1330, 1320]
                }
            ]
        };

        option2 = {
            title: {
            text: '用户年龄层'
            },
            color: ['#3398DB'],
            tooltip : {
                trigger: 'axis',
                axisPointer : {            // 坐标轴指示器，坐标轴触发有效
                    type : 'shadow'        // 默认为直线，可选为：'line' | 'shadow'
                }
            },
            grid: {
                left: '3%',
                right: '4%',
                bottom: '3%',
                containLabel: true
            },
            xAxis : [
                {
                    type : 'category',
                    data : ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
                    axisTick: {
                        alignWithLabel: true
                    }
                }
            ],
            yAxis : [
                {
                    type : 'value'
                }
            ],
            series : [
                {
                    name:'直接访问',
                    type:'bar',
                    barWidth: '60%',
                    data:[10, 52, 200, 334, 390, 330, 220]
                }
            ]
        };

       


         myChart1.setOption(option1);
         myChart2.setOption(option2);
     </script>
</body>

</html>