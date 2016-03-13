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
<section>
<div class="containner"> 
    <div class="row">
        <div class="col-sm-4 col-sm-offset-2" >
             <form action="/car-thinkphp/index.php/Home/User/addUser" method="post">
                  <div class="form-group">
                    <label for="exampleInputEmail1">登录名</label>
                    <input type="text" class="form-control" name="username" placeholder="6-11位字母与数字">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">密码</label>
                    <input type="password" class="form-control" name="password" placeholder="6-11位字母与数字">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">密码</label>
                    <input type="password" class="form-control" name="password1" placeholder="6-11位字母与数字">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">部门</label>
                    <input type="text" class="form-control" name="section" placeholder="输入部门">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">电话</label>
                    <input type="text" class="form-control" name="tel" placeholder="输入部门电话">
                  </div>
                  <div class="form-group">
                      <label>选择类型</label>
                      <select name="pock">
                          <option value="2">普通用户</option>
                          <option value="1">门卫</option>
                          <option value="0">管理员</option>
                      </select>
                  </div>
                  <button type="submit" class="btn btn-primary">注册</button>
              </form>
        </div>
    </div>
</div>
   
</section>
	
</div><!-- /.table-responsive -->
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


    
</body>
<script  src="/car-thinkphp/Public/js/jquery.js"></script>
<script  src="/car-thinkphp/Public/js/bootstrap.min.js"></script>
</html>