<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>用户管理</title>
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
            <button type="button" class="list-group-item active" style="margin-bottom: 15px">用户管理</button>
        </div>
        <div style="width:68%;height: 495px;border: 1px solid #878787;display: inline-block;vertical-align: top;position: relative;left:11%;">
        <div class="table-responsive" style="width:500px;margin-left: 50px;margin-top:20px;">

            <form action="/car-thinkphp/index.php/Home/Car/alertinfo?id=<?php echo ($content[0]["id"]); ?>" method="post" >
               <div style="width:250px;float: left">
                 <div class="form-group">
                      <label for="exampleInputEmail1">车牌号</label>
                      <input type="text" class="form-control" name="num" value="<?php echo ($content[0]["num"]); ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">车辆类型</label>
                      <input type="text" class="form-control" name="type" value="<?php echo ($content[0]["type"]); ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">车辆型号</label>
                      <input type="text" class="form-control" name="model" value="<?php echo ($content[0]["model"]); ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">座位数</label>
                      <input type="text" class="form-control" name="nums" value="<?php echo ($content[0]["numsq"]); ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">颜色</label>
                      <input type="text" class="form-control" name="color" value="<?php echo ($content[0]["color"]); ?>">
                    </div>
               </div>
                <div style="width:250px;float: right;">
                  <div class="form-group">
                    <label for="exampleInputEmail1">购车时间</label>
                      <input type="text" class="form-control" name="time" value="<?php echo ($content[0]["time"]); ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">购车金额</label>
                      <input type="text" class="form-control" name="money" value="<?php echo ($content[0]["money"]); ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">到保时间</label>
                      <input type="text" class="form-control" name="ins_expire_time" value="<?php echo ($content[0]["ins_expire_time"]); ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">投保金额</label>
                      <input type="text" class="form-control" name="ins_money" value="<?php echo ($content[0]["money"]); ?>" >
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">备注</label>
                      <input type="text" class="form-control" name="car_note" value="<?php echo ($content[0]["car_note"]); ?>">
                    </div>
                    
                </div>    
                <button type="submit" class="btn btn-primary">修改</button>    
            </form>
 
</section>
	
</body>
<script  src="/car-thinkphp/Public/js/jquery.js"></script>
<script  src="/car-thinkphp/Public/js/bootstrap.min.js"></script>

</html>