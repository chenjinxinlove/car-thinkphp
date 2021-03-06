<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>订单申请</title>
	<link rel="stylesheet" type="text/css" href="/car-thinkphp/Public/css/apply.css">
	<link rel="stylesheet" type="text/css" href="/car-thinkphp/Public/css/jquery.datetimepicker.css"/ >
	<script type="text/javascript" src="/car-thinkphp/Public/js/jquery.js"></script>
	<script src="/car-thinkphp/Public/js/jquery.datetimepicker.js"></script>
	<script src="/car-thinkphp/Public/js/jquery.validate.min.js"></script> 
	<style>
		.error{
			color:red;
			font-size: 12px;
			margin-left: 10px;
		}
	</style>
</head>
<body>
	
	<div class="main">
		<div class="main-left">
		<form action="/car-thinkphp/index.php/Home/Index/applyaddd" method="post" id="validate">
			<ul>
				<li >
					<span>目的地：</span>
					<p class="u">*</p>
					<select style="width: 153px;" name="mudidi">
						<option value="0">三河</option>
						<option value="1">燕郊</option>
						<option value="2">北京</option>
						<option value="3">廊坊</option>
						<option value="3">石家庄</option>
						<option value="5">秦皇岛</option>
						<option value="6">其他</option>
					</select>
				</li>
				<li>
					<span>详细地址：</span>
					<p class="u">*</p>
					<textarea rows="2" cols="20" name="address" id="address"></textarea>
				</li>
				<li>
					<span>出发时间：</span>
					<p class="u">*</p>
					<input id="datetimepicker" type="text" name="fache" id="fache">
				</li>
				<li>
					<span>预计返回时间：</span>
					<p class="u">*</p>
					<input id="datetimepicker1" type="text" name="fanhui" id="fanhui">
				</li>
				<li>
					<span>部门：</span>
					<p class="u">*</p>
					<input type="text" name="section" id="fanhui1">
				</li>
				<li>
					<span>用车人：</span>
					<p class="u">*</p>
					<input type="text" name="yongche" id="fanhui">
				</li>
				<li>
					<span>用车人数：</span>
					<p class="u">*</p>
					<input type="text" name="num" id="num">
				</li>
				<li>
					<span>拼车：</span>
					<p class="u">*</p>
					<select name="pingche" id="">
						<option value="1">同意</option>
						<option value="2">不同意</option>
					</select>
				</li>
				<li>
					<span>手机号码：</span>
					<p class="u">*</p>
					<input type="text" name="tel" id="tel">
				</li>
				<li>
					<span>申请车用途：</span>
					<p class="u">*</p>
					<textarea rows="2" cols="20" name="yongtu" id="yongtu"></textarea>
				</li>
				<li ><input type="submit" value="确定添加" style="margin-left: 280px;width:100px;height: 30px;"></li>
			</ul>
	
	</div>
	</form>
	
</body>
<script type="text/javascript">
	$(function() {
		$('#datetimepicker').datetimepicker();
		$('#datetimepicker1').datetimepicker();
		$('#validate').validate({

			 rules: {
		      address: {
		        required: true,
		        minlength: 5,
		        maxlength:10
		      },
		      fache: "required",
		      fanhui:"required",
		      yongche: {
		        required: true,
		      },
		      num: {
		      	required: true,
		        digits:true
		      },
		      tel: {
		        required: true,
		        minlength: 11,
		      },
		     yongtu: {
		        required: true,
		      }
		    },
		    messages: {
		      address: {
		        required: "请输入详细的地址",
		        minlength: "详细的地址必需大于五个汉字",
		        maxlength: "详细的地址不能大于十个汉字"
		      },
		      fache: {
		        required: "请输入出发的时间",
		      },
		      fanhui: {
		        required: "请输入返回的时间",
		      },
		      yongche: {
		        required: "请输入用车人",
		      },
		      num: {
		        required: "请输入用车数",
		        digits:  "必须为整数",
		      },
		      tel: {
		        required: "请输入可以联系到电话",
		        minlength: "必须为11位的手机号",
		      },
		      yongtu: "请输入用车用途",
		    }

		});
			});
</script>
</html>