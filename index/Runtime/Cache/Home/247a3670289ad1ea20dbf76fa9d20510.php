<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>常见问题</title>
	<link rel="shortcut icon" href="images/icon/icon.ico" />
	<link rel="stylesheet" type="text/css" href="/car-thinkphp/Public/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="/car-thinkphp/Public/css/main.css">
	<style type="text/css"></style>
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
            <li class="dropdown " style="margin-left: 25px;">
                <a href="/car-thinkphp/index.php/Home/File">
                    <button type="button" class="btn btn-default btn-lg">
                      <span class="glyphicon glyphicon-briefcase" aria-hidden="true">档案管理</span>
                    </button>
                </a>
                
            </li>
            <li class="dropdown" style="margin-left: 25px;">
            <a href="/car-thinkphp/">
                <button type="button" class="btn btn-default btn-lg">
                  <span class="glyphicon glyphicon-refresh" aria-hidden="true">车辆调度</span>
                </button>
            </a>
                
            </li>
            <li class="dropdown" style="margin-left: 25px;">
            <a href="">
                <button type="button" class="btn btn-default btn-lg ">
                  <span class="glyphicon glyphicon-edit" aria-hidden="true">报表管理</span>
                </button>
            </a>
                
            </li>
            <li class="dropdown" style="margin-left: 25px;">
            <a href="/car-thinkphp/index.php/Home/User">
                 <button type="button" class="btn  btn-lg btn-default">
                  <span class="glyphicon glyphicon-paperclip" aria-hidden="true">系统设置</span>
                </button>
            </a>
               
            </li>
            <li class="dropdown" style="margin-left: 25px;">
            <a href="/car-thinkphp/index.php/Home/Ab/dever">
                 <button type="button" class="btn btn-default btn-lg">
                  <span class="glyphicon glyphicon-tree-conifer" aria-hidden="true">关于软件</span>
                </button>
            </a>   
            </li>
            <li class="dropdown" style="margin-left: 25px;">
                <a href="<?php echo U('Index/LoginOut');?>" style="margin-top:6px">
                    <button type="button" class="btn btn-danger "><span class="glyphicon glyphicon-off" aria-hidden="true">退出</span></button>
                </a>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div><!--/.container -->
    </nav>
</header>

<main role="main">
       <div class="list-group" style="width: 13%;height:495px;position: relative;left:10%;border: 1px solid #878787;padding:8px;display: inline-block;vertical-align: top;">
            <a href="<?php echo U('dever');?>" style="text-decoration: none"><button type="button" class="list-group-item " style="margin-bottom: 15px">开发信息</button></a>
            <a href="<?php echo U('info');?>" style="text-decoration: none"><button type="button" class="list-group-item " style="margin-bottom: 15px">信息反馈</button></a>
            <a href="<?php echo U('pro');?>" style="text-decoration: none"><button type="button" class="list-group-item active" style="margin-bottom: 15px">常见问题</button></a>
        </div>
        <div style="width:68%;height: 495px;border: 1px solid #878787;display: inline-block;vertical-align: top;position: relative;left:11%;"></div>
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
</html>