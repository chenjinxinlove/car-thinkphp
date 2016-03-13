<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>门卫界面</title>
	<link rel="shortcut icon" href="/car-thinkphp/Public/images/icon/icon.ico" />
	<link rel="stylesheet" type="text/css" href="/car-thinkphp/Public/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="/car-thinkphp/Public/css/main.css">
	<style type="text/css">
    .table-responsive table td,th{
        text-align: center;
    }
    /*#table-responsive table th,td{
        text-align: center;
    }*/
    #btn-amend{
        color:#ffffff;
        background:#d9534f;
        border-color: #ac2925;
        font-weight: bold;
        text-align: center;
    }
    #btn-amend:hover{
        color: #ffffff;
        background: #c9302c;

    }
    </style>
</head>
<body>
<header role="banner" >
    <nav role="navigation" class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html"><img src="/car-thinkphp/Public/images/icon/xch.ico" alt="xhc'" ></a>
        </div>
        <div class="navbar-collapse collapse " style="line-height: 90px;position: relative;left: 100px;">
          <ul class="nav navbar-nav nav-top" >
            <!-- <li class="dropdown " style="margin-left: 25px;">
                <button type="button" class="btn btn-default btn-lg">
				  <span class="glyphicon glyphicon-briefcase" aria-hidden="true">档案管理</span>
				</button>
            </li> -->
            <li class="dropdown" style="margin-left: 25px;">
                <button type="button" class="btn btn-primary btn-lg">
				  <span class="glyphicon glyphicon-refresh" aria-hidden="true">车辆调度</span>
				</button>
            </li>
            <!-- <li class="dropdown" style="margin-left: 25px;">
                <button type="button" class="btn btn-default btn-lg ">
				  <span class="glyphicon glyphicon-edit" aria-hidden="true">报表管理</span>
				</button>
            </li> -->
            <!-- <li class="dropdown" style="margin-left: 25px;">
                <button type="button" class="btn  btn-lg btn-default">
				  <span class="glyphicon glyphicon-paperclip" aria-hidden="true">系统设置</span>
				</button>
            </li> -->
            <li class="dropdown" style="margin-left: 25px;">
                <button type="button" class="btn btn-default btn-lg">
				  <span class="glyphicon glyphicon-tree-conifer" aria-hidden="true">关于软件</span>
				</button>
            </li>
            <li class="dropdown" style="margin-left: 25px;">
                <button type="button" class="btn btn-danger ">
                  <span class="glyphicon glyphicon-off" aria-hidden="true">退出</span>
                </button>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div><!--/.container -->
    </nav>
</header>

<main role="main">
        <div class="list-group" style="width: 13%;height:495px;position: relative;left:10%;border: 1px solid #878787;padding:8px;display: inline-block;vertical-align: top;">
            <button type="button" class="list-group-item active" style="margin-bottom: 15px">查看调度单</button>
            <!-- <button type="button" class="list-group-item " style="margin-bottom: 15px">订单中心</button> -->
        </div>
        <div style="width:68%;height: 495px;border: 1px solid #878787;display: inline-block;vertical-align: top;position: relative;left:11%;">
        <!-- <button type="button" class="btn btn-primary" style="margin:10px 100px">修改</button> -->
        <!-- <button type="button" class="btn btn-primary" style="margin:10px 0">合并订单</button> -->
            <div class="table-responsive" id="licheng">
              <table class="table table-bordered table-hover table-striped">
                <thead>
                  <tr>
                    <th>预计出发</th>
                    <th>订单号</th>
                    <th>车俩|车牌</th>
                    <th>司机</th>
                    <th>状态</th>
                    <th>操作</th>
                  </tr>
                </thead>
                <tbody>
                  <?php if(is_array($list)): foreach($list as $key=>$vo): ?><tr>
                    
                        <th><?php echo (date("m-d H:i",$vo["start_time"])); ?></th>
                        <td><?php echo ($vo["uid"]); ?></td>
                        <td><?php echo ($vo["car"]); ?>|<?php echo ($vo["chepai"]); ?></td>
                        <td><?php echo ($vo["driver"]); ?></td>
                        <td>
                             <?php switch($vo["state"]): case "2": ?>未开始<?php break;?>
                                <?php case "4": ?>正在进行<?php break;?>
                                <?php case "6": ?>未开始<?php break;?>
                                <?php case "7": ?>未开始<?php break; endswitch;?>

                        </td>
                        <td><button class="btn btn-danger btn-sm add-btn" >添加里程</button><span style="display: none"><?php echo U('Index/menwei').'?uid='.$vo['uid'];?></span></td>
                  </tr><?php endforeach; endif; ?>
                </tbody>
                <?php echo ($page); ?>
              </table>
            </div>
            
        </div>
        <!-- <div class="container">
            <div class="row">
                <div class="col-md-2 col-sm-2 col-xl-6 list-group" style="border: 1px solid #878787;height:490px;padding:8px">
                    <button type="button" class="list-group-item" style="margin-bottom: 15px">组织管理</button>
                    <button type="button" class="list-group-item" style="margin-bottom: 15px">组织管理</button>
                    <button type="button" class="list-group-item" style="margin-bottom: 15px">组织管理</button>
                    <button type="button" class="list-group-item" style="margin-bottom: 15px">组织管理</button>
                    <button type="button" class="list-group-item" style="margin-bottom: 15px">组织管理</button>  
                </div>
                <div class="col-md-9 " style="border: 1px solid #878787;height:490px;margin-left: 20px;">
                    
                </div>
            </div>
        </div> -->
</main>

<footer>
	<ul class="foot">
		<li><a href="#">Copyright 2007-2108 xxx.com All rights Reserved 新宏昌车辆管理系统于信息管理部开发 如果系统bug请联系信息管理部相关人员</a></li>
	</ul>
</footer><!-- footer结束 -->
	
</body>
<script type="text/javascript" src="/car-thinkphp/Public/js/jquery.js"></script>
<script type="text/javascript" src="/car-thinkphp/Public/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/car-thinkphp/Public/js/layer.js"></script>
<script  src="/car-thinkphp/Public/js/layer.js"></script>
<script type="text/javascript">
layer.config({
    extend: 'extend/layer.ext.js'
});
    $(function() {
        $(".add-btn").on("click" , function(){
            var content = $(this).next().html();
            // alert(content);
                layer.open({
                type: 2,
                //skin: 'layui-layer-lan',
                title: '里程记录',
                fix: false,
                shadeClose: true,
                maxmin: true,
                area: ['66%', '80%'],
                content: content,
                });
            
            });
         $(".li").click(function(event){
            event.stopPropagation();
        });
            
    });
</script>
</html>