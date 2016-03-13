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
             <form action="/car-thinkphp/index.php/Home/Car/addUser" method="post">
                  <div class="form-group">
                    <label for="exampleInputEmail1">车牌号</label>
                    <input type="text" class="form-control" name="num" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">车辆类型</label>
                    <input type="text" class="form-control" name="type">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">车辆型号</label>
                    <input type="text" class="form-control" name="model">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">座位数</label>
                    <input type="text" class="form-control" name="nums" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">颜色</label>
                    <input type="text" class="form-control" name="color" >
                  </div>
                  <div>
                  <label for="exampleInputEmail1">购车时间</label>
                    <input type="text" class="form-control" name="time" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">购车金额</label>
                    <input type="text" class="form-control" name="money">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">到保时间</label>
                    <input type="text" class="form-control" name="ins_expire_time" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">投保金额</label>
                    <input type="text" class="form-control" name="ins_money" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">备注</label>
                    <input type="text" class="form-control" name="car_note" >
                  </div>
                  <button type="submit" class="btn btn-primary">新增</button>
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