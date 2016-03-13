<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>订单申请</title>
	<link rel="stylesheet" type="text/css" href="/car-thinkphp/Public/css/apply1.css">
	<link rel="stylesheet" type="text/css" href="/car-thinkphp/Public/css/jquery.datetimepicker.css"/ >
	<link rel="stylesheet" type="text/css" href="/car-thinkphp/Public/css/bootstrap.css">
	<script type="text/javascript" src="/car-thinkphp/Public/js/jquery.js"></script>
	<script src="/car-thinkphp/Public/js/jquery.datetimepicker.js"></script>
	<script src="/car-thinkphp/Public/js/jquery.validate.min.js"></script>
	<style>
		.error{
			color:red;
			font-size: 12px;
			margin-left: 10px;
		}
		#info
		{
			margin-left: 25px;
		}
		#info ul
		{
			display: inline-block;
		}
		#info ul li
		{
			line-height: 20px;
			width: 260px;
			border-bottom: 1px solid #e4e4e4;
			margin: 10px 0px;
		}
	</style>
</head>
<body>
	<div class="top">
		<div class="top-1">
		<span class="top-left"><img src="/car-thinkphp/Public/images/apply/u0.png"></span>
		<span class="top-left"><a style="text-decoration: none;font-size: 22px" href="/car-thinkphp/index.php/Home/Order?section=<?php echo ($section); ?>">订单中心</a></span>
		<div class="top-right" id="top_1-1" style="display: block;">
			<a href="/car-thinkphp"><span >首页</span></a>
		</div>
	</div>
	</div>
	<div class="main">
		<div class="main-top">
			<!-- <span><p>拼车订单</p></span> -->
		</div>
		<form action="/car-thinkphp/index.php/Home/Index/pincheadd" method="post" id="validate">
		<div class="main-left" style="border-right: 2px dotted #ccc">
			<div class="left-1">
				<ul>
					<li><label for="">车辆信息：<?php echo ($where); ?></label><span>&nbsp;</span></li>
					<li><label for="">申请单号：</label>
					<select name="dingdanhao" id="dinfd" style="width: 153px">
						<option>选择拼车订单</option>
						<?php if(is_array($list)): foreach($list as $key=>$vo): ?><option value="<?php echo ($vo["uid"]); ?>"><?php echo ($vo["uid"]); ?></option><?php endforeach; endif; ?>	
					</select>
					</li>
				</ul>
			</div>
			
						
			<div id="info">
				<ul >
					<li>订单号：</li>
					<li>驾驶员：</li>
					<li>申请部门：</li>
					<li>申请人：</li>
					<li>申请人电话：</li>	
				</ul>
				<ul >
					<li>座位剩余：</li>
					<li>出发时间：</li>
					<li>预计返回：</li>
					<li>目的地：</li>
					<li>详细地址：</li>
				</ul>
			</div>
			<div class="container-fluid">
	<div class="row-fluid">
		<div class="span12">
			<div class="alert alert-info">
				 <button type="button" class="close" data-dismiss="alert">×</button>
				<h4>
					提示：
				</h4> <strong>亲们</strong> <p>1/选择单号，查看详情，决定拼车</p><p>2/情况不定，可以钉钉联系拼车人.</p>
			</div>
		</div>
	</div>
</div>
		</div>

		<div class="main-right">
			<ul>
				<li >
					<span>目的地：</span>
					<p class="u">*</p>
					<select style="width: 153px;" name="mudidi">
						<option value="0">三河</option>
						<option value="1">燕郊</option>
						<option value="2">北京</option>
						<option value="3">廊坊</option>
						<option value="4">石家庄</option>
						<option value="5">秦皇岛</option>
						<option value="6">其他</option>
					</select>
				</li>
				<li>
					<span>详细地址：</span>
					<p class="u">*</p>
					<textarea rows="2" cols="20" name="paddress" id="address"></textarea>
				</li>
				<li>
					<span>预计返回时间：</span>
					<p class="u">*</p>
					<input id="datetimepicker1" type="text" name="pfanhui" id="fanhui">
				</li>
				<li>
					<span>用车人：</span>
					<p class="u">*</p>
					<input type="text" name="yongche" id="yongche">
				</li>
				<li>
					<span>用车人数：</span>
					<p class="u">*</p>
					<input type="text" name="num" id="pnum">
				</li>
				<li>
					<span>手机号码：</span>
					<p class="u">*</p>
					<input type="text" name="tel" id="ptel">
				</li>
				<li>
					<span>申请车用途：</span>
					<p class="u">*</p>
					<textarea rows="2" cols="20" name="pyongtu" id="yongtu"></textarea>
				</li>
				<input type="text"  value="<?php echo ($section); ?>" name="psection" style="display: none">
			</ul>	
		</div>
		<div class="main-bottom" style="margin-top: 20px;">
			<ul>
				<li>
					<span><input type="radio" value="1" id="radio1" checked="checked"></span>
					<p class="u1">同意拼车，与拼车费用分担办法</p>
				</li>
				<li>
					<span><input type="radio" value="2" id="radio2" checked="checked"></span>
					<p class="u1">同意新宏昌用车管理办法</p>
				</li>
			</ul>
			<ul>
				<li ><input type="submit" value="申请拼车" id="u1"></li>
			</ul>	
		</div>
	</div>
	</form>
	<div class="footer">
		<p>Copyright 2007-2108 xxx.com All rights Reserved 新宏昌车辆管理系统于信息管理部开发 如果系统bug请联系信息管理部相关人员</p>
	</div>
</body>
<script type="text/javascript">
	$url = "<?php echo U('Index/pinchexx');?>";
	$(function() {
		$('#dinfd').change(function(event) {
			$data = $(this).val();
			$.post($url, 'uid=' + $data, function(data) {
				 $('#info').html("");
				 var obj = JSON.parse(data);
					$("#info").append(
						 "<ul >" +
						 "<li>订单号："+obj.uid+"</li>"+
						 "<li>驾驶员："+obj.driver +"</li>"+
						"<li>申请部门："+obj.section +"</li>"+
						"<li>申请人："+obj.name +"</li>"+
						"<li>申请人电话："+obj.tell +"</li>"+
						"</ul>"+
						"<ul >"+
						"<li>座位剩余："+obj.nums +"</li>"+
						"<li>出发时间："+obj.stime +"</li>"+
						"<li>预计返回："+obj.rtime+"</li>"+
						"<li>目的地："+ obj.adrid+"</li>"+
						"<li>详细地址："+obj.adress+"</li>"+
						"</ul>"	
						);
			});
		});
			
		
		$('#datetimepicker').datetimepicker();
		$('#datetimepicker1').datetimepicker();
		$('#validate').validate({

			 rules: {
		      address: {
		        required: true,
		        minlength: 5
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
		        minlength: "详细的地址必需大于五个汉字"
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