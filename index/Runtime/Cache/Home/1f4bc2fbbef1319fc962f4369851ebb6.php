<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>登录</title>
	<link rel="shortcut icon" href="images/icon/icon.ico" />
	<link rel="stylesheet" type="text/css" href="/car-thinkphp/Public/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="/car-thinkphp/Public/css/main.css">
	<style type="text/css">
		
	</style>
</head>
<body>
<nav role="nav" style="margin-top: 10px">
	<div class="containter">
		<div class="row">
			<div class="col-md-4 col-md-offset-1">
				<div class="navbar nav-default">
					<div navbar-header>
						<button type="button" class="btn btn-primary btn-lg ">
						  <span class="glyphicon glyphicon-list" aria-hidden="true"></span>  新宏昌在线选车系统欢迎您
						</button>
					</div>	
				</div>
			</div>
		</div>
	</div>
</nav><!-- nav结束 -->
<div class="content" >
	<div class="shuru">
		<div class="containter">
			<div class="row col-md-2 col-md-offset-4 col-sm-3 col-sm-offset-4">
				<div class="input-group input-group-lg">
				  <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
				  <input id="username" type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
				</div>
			</div>
			<div class="row col-md-2 col-sm-3">
				<div class="input-group input-group-lg">
				  <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></span>
				  <input id="password" type="password" class="form-control" placeholder="Password" aria-describedby="basic-addon1">
				</div>
			</div>
			<div class="row col-md-2 col-sm-3 ">
				<div type="button" class="btn btn-primary btn-lg" id="login_btn">登录</div>
			</div>
		</div><!-- containter结束 -->
	</div>
	<div class="alert alert-info"  id="alert" role="alert" style="display: none;width:80%;height: 50px;margin:auto" >
	<p style="width: 200px;margin:auto;line-height: 20px;vertical-align: control;position: relative;top: -30px;"></p>
	</div>
	
	<!-- <ul class="gonggao">
		<li>公告</li>
	</ul>  -->
		
</div>

<footer style="margin-top: -30px">
	<ul class="foot">
		<li><a href="#">Copyright 2007-2108 xxx.com All rights Reserved 新宏昌车辆管理系统于信息管理部开发 如果系统bug请联系信息管理部相关人员</a></li>
	</ul>
</footer><!-- footer结束 -->
	
</body>
<script type="text/javascript" src="/car-thinkphp/Public/js/jquery.js"></script>
<script type="text/javascript" src="/car-thinkphp/Public/js/bootstrap.min.js"></script>
<script type="text/javascript" >
	$(function () {

		$("#login_btn").on('click', function() {
			var username = $("#username").val();
			var password = $("#password").val();
			if (!isNaN(username) || !isNaN(password)) {
				$('#alert').show()
				.children().text("账号或密码不能为空");
			}else{
				var url = "<?php echo U('Login/Login');?>";
				$.post(url, {"username" : username , "password" : password}, function(data) {
					switch(data) {
						case  '0' :
						var showdata = "管理员登录成功！";
						break;
						case '1' : 
						var showdata = "门卫登录成功！";
						break;
						case '2' :
						var showdata = "普通用户登录成功！";
						break;
						case '3':
						var showdata = "账号被锁定请联系管理员！";
						break;
						default:
						var showdata = "账号或密码不正确请重新登录！";
					}
					$('#alert').show()
					.children().text(showdata);
					location.href = "/car-thinkphp/index.php/Home/Index"
				});
			}


		});
	})

</script>
</html>