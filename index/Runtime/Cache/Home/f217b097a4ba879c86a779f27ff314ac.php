<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>订单中心</title>
	<link rel="stylesheet" type="text/css" href="/car-thinkphp/Public/css/order.css">
	<link rel="stylesheet" type="text/css" href="/car-thinkphp/Public/css/application.css">
	<script type="text/javascript" src="/car-thinkphp/Public/js/jquery.js"></script>
<script type="text/javascript" src="/car-thinkphp/Public/js/jquery.raty.min.js"></script>
</head>
<body>
<div id="content">
	<div id="top">
		<div id="top_1">
			<span><img src="/car-thinkphp/Public/images/apply/u0.png"></span>
			<span><a style="text-decoration: none;font-size: 22px" href="/car-thinkphp">返回申请</a></span>
			<div id="top_1-1">
				<a href="/car-thinkphp"><span>首页</span></a>
			</div>
		</div>
	</div>
	<div id="main">

		<!-- <div id="main-1" class="main">订单中心</div> -->

		<div id="main-2" class="main">
			<ul>
				<li><span style="width: 150px">近一个月订单</span></li>
				<li><span style="width: 400px">订单详情</span></li>
				<li><span style="width: 350px">状态</span></li>
				<li><span style="width: 150px">操作</span></li>
			</ul>
		</div>

		<div style="clear: both"></div>
		<?php if(is_array($list)): foreach($list as $key=>$vo): ?><div id="main-3" class="main">
				<ul id="u1">
					<li><span style="width: 530px;">订单号：<?php echo ($vo["uid"]); ?></span></li>
					<li style="margin-left: 520px;">
						<?php switch($vo["state"]): case "0": ?><li><span style="width: 350px;text-align: center;color: blue">等待审批</span></li><?php break;?>
                            <?php case "1": ?><li><span style="width: 350px;text-align: center;color: red">不通过</span></li><?php break;?>
                            </case>
                            <?php case "2": ?><li><span style="width: 350px;text-align: center;color: blue">审核通过</span></li><?php break;?>
                            </case>
                            <?php case "3": ?><li><span style="width: 350px;text-align: center;color: blue">以完成</span></li><?php break;?>
                            </case>
                            <?php case "4": ?><li><span style="width: 350px;text-align: center;color: blue">正在进行</span></li><?php break;?>
                            </case>
                            <?php case "5": ?><li><span style="width: 350px;text-align: center;color: red">未评价</span></li><?php break;?>
                            </case>
                            <?php case "6": ?><li><span style="width: 350px;text-align: center;color: blue">拼车订单待审核</span></li><?php break;?>
                            </case>
                            <?php case "7": ?><li><span style="width: 350px;text-align: center;color: blue">拼车通过</span></li><?php break;?>
                            </case><?php endswitch;?>
					</li>
								
				</ul>
				<ul id="u2">
				<?php if($section == $vo['psection']): ?><li style="width:192px;font-size: 16px;"><p style="text-align: center;margin-top:10px"><?php echo ($vo["pnote"]); ?></p><p style="text-align: center;margin-top: 5px">共<?php echo ($vo["pnum"]); ?>人</p>
					<li style="width:350px;"><p>地点：
							<?php switch($vo["padrid"]): case "0": ?>三河<?php break;?>
	                            <?php case "1": ?>燕郊<?php break;?>
	                            <?php case "2": ?>北京<?php break;?>
	                            <?php case "3": ?>廊坊<?php break;?>
	                            <?php case "4": ?>石家庄<?php break;?>
	                            <?php case "5": ?>秦皇岛<?php break;?>
	                            <?php case "6": ?>其他<?php break; endswitch; echo ($vo["padress"]); ?>
						</p>
						<p>出发时间：<?php echo (date("m-d H:i",$vo["start_time"])); ?> 返回：<?php echo (date("m-d H:i",$vo["preturn_time"])); ?></p>
						<p>申请理由：<?php echo ($vo["preason"]); ?></p>
				<?php else: ?>
					<li style="width:192px;font-size: 16px;"><p style="text-align: center;margin-top:10px"><?php echo ($vo["note"]); ?></p><p style="text-align: center;margin-top: 5px">共<?php echo ($vo["num"]); ?>人</p>
					<li style="width:350px;"><p>地点：
							<?php switch($vo["adrid"]): case "0": ?>三河<?php break;?>
	                            <?php case "1": ?>燕郊<?php break;?>
	                            <?php case "2": ?>北京<?php break;?>
	                            <?php case "3": ?>廊坊<?php break;?>
	                            <?php case "4": ?>石家庄<?php break;?>
	                            <?php case "5": ?>秦皇岛<?php break;?>
	                            <?php case "6": ?>其他<?php break; endswitch; echo ($vo["adress"]); ?>
						</p>
						<p>出发时间：<?php echo (date("m-d H:i",$vo["start_time"])); ?> 返回：<?php echo (date("m-d H:i",$vo["return_time"])); ?></p>
						<p>申请理由：<?php echo ($vo["reason"]); ?></p><?php endif; ?>
					<?php switch($vo["state"]): case "0": ?><li style="width:350px;">
									<p style="color: red">如有紧急派车，请电话联系管理员</p>
								
								<li style="width:150px;">
									 <a href="<?php echo U(close);?>?uid=<?php echo ($vo["uid"]); ?>" style="margin: 58PX;">关闭</a> 
								</li><?php break;?>
                            <?php case "1": ?><li style="width:350px;">
		                            <p style="color: red">关闭理由：<?php echo ($vo["close_reason"]); ?></p>    
	                          
								<li style="width:150px;">
	
								<!-- </li> --><?php break;?>
                            <?php case "2": ?><li style="width:350px;">
									<p style="color: red">如有变动，请直接联系管理员或司机</p>
									<p>车辆：<?php echo ($vo["car"]); ?>|<?php echo ($vo["chepai"]); ?></p>
									<p>司机：<?php echo ($vo["driver"]); ?>电话：<?php echo ($vo["driver_tell"]); ?></p>
								
								<li style="width:150px;">
									
								<!-- </li> --><?php break;?>
                            <?php case "3": ?><li style="width:350px;">
									<if condition="$vo.carpooling eq 0">
                               			<p>拼车单</p>
                               		<if>
									<p>开始时间 | 开始里程：<?php echo (date("m-d H:i",$vo["shenhe"])); ?> | <?php echo ($vo["menweili"]); ?></p>
									<p>返回时间 | 返回里程：<?php echo (date("m-d H:i",$vo["complete"])); ?> | <?php echo ($vo["swancheng"]); ?></p>
								
								<li style="width:150px;">
									<div id='<?php echo ($vo["uid"]); ?>' data-score="1" style="margin:25px;"></div>
								   	<script type="text/javascript">
								   			$(function(){

								   				$('#<?php echo ($vo["uid"]); ?>').raty(
								   					{ 
								   						path: "/car-thinkphp/Public/images/img/",
								   						readOnly: true, score: "<?php echo ($vo["evaluate"]); ?>" }
								   					    
								   					);
								   			});
								   	</script>
								<!-- </li> --><?php break;?>
                            <?php case "4": ?><li style="width:350px;">
									<p>开始时间 | 开始里程：<?php echo (date("m-d H:i",$vo["shenhe"])); ?> | <?php echo ($vo["menweili"]); ?>
								
								<li style="width:150px;">
									
								<!-- </li> --><?php break;?>
                            <?php case "5": ?><li style="width:350px;">
                               		<if condition="$vo.carpooling eq 0">
                               			<p>拼车单</p>
                               		<if>
									<p>开始时间 | 开始里程：<?php echo (date("m-d H:i",$vo["shenhe"])); ?> | <?php echo ($vo["menweili"]); ?></p>
									<p>返回时间 | 返回里程：<?php echo (date("m-d H:i",$vo["complete"])); ?> | <?php echo ($vo["swancheng"]); ?></p>
                               
							   <li style="width:150px;">
								   	<div id='<?php echo ($vo["uid"]); ?>' data-score="1" style="margin:25px;"></div>
								   	<script type="text/javascript">
								   			$(function(){
								   				var  jj = "<?php echo ($vo["uid"]); ?>";
								   				$('#<?php echo ($vo["uid"]); ?>').raty(
								   					{ 
								   						path: "/car-thinkphp/Public/images/img/",
								   						click: function(score, evt){
								   							$.post("/car-thinkphp/index.php/Home/order/add", {sc:score,uid:jj},  function(){
								   									location.href = '/car-thinkphp/index.php/Home/order/';
								   							});
								   						}
								   					    
								   					});
								   			});
								   	</script>
							   <!-- </li> --><?php break;?>
                            <?php case "6": ?><li style="width:350px;">
		                          <p style="color: red">如有紧急派车，请电话联系管理员</p>
	                           
							   <li style="width:150px;">
								<a href="#">修改</a> | <a href="#">关闭</a>
							   <!-- </li> --><?php break;?>
                            <?php case "7": ?><li style="width:350px;">
			                            <p style="color: red">如有变动，请直接联系管理员或司机</p>
			                            <p>车辆：<?php echo ($vo["car"]); ?> | <?php echo ($vo["chepai"]); ?></p>
			                            <p>司机：<?php echo ($vo["driver"]); ?> 电话：<?php echo ($vo["driver_tell"]); ?></p>   
	                          
							   <li style="width:150px;">
									
							   <!-- </li> --><?php break; endswitch;?>			
				</ul>
			</div><?php endforeach; endif; ?>
		<div id="pagelist">
			<?php echo ($page); ?>
		</div>
	</div>
</div>

</body>

</html>