<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>订单展示</title>
	<link rel="stylesheet" type="text/css" href="/car-thinkphp/Public/css/index.css">
	<script type="text/javascript" src="/car-thinkphp/Public/js/jquery.js"></script>
</head>
<body>
<div class="top">
	<div class="top-1">
		<span class="top-left"><img src="/car-thinkphp/Public/images/apply/u0.png"></span>
		<span class="top-left"><a style="text-decoration: none;font-size: 22px" href="/car-thinkphp/index.php/Home/Order?section=<?php echo ($section); ?>">订单中心</a></span>
		<div class="top-right" id="top_1-1" style="display: block;">
			<span ><?php echo ($section); ?></span>
		</div>
	</div>
</div>
<div style="margin: 18px auto;width:250px">
	<a href="<?php echo U('Index/apply');?>?section=<?php echo ($section); ?>" >
		<button  style="background-color: #2e2b3e;height: 63px;width: 207px;border-radius: 10px " >
			<span style="color:#FFFF77;font-size: 26px;">申请车俩</span>
		</button>
	</a>
</div>
<div class="main">
	<div class="main-1">
		<ul>
			<li class="jjff"><span style="width: 150px">车辆信息</span></li>
			<li class="jjff"><span style="width: 100px">操作</span></li>
			<li><span style="width: 250px"><?php echo (date("m-d",$time[0] )); ?></span></li>
			<li><span style="width: 250px"><?php echo (date("m-d",$time[1] )); ?></span></li>
			<li><span style="width: 250px"><?php echo (date("m-d",$time[2] )); ?></span></li>
			
		</ul>
	</div>
	<?php if(is_array($li)): foreach($li as $key=>$vo): if(is_array($vo)): foreach($vo as $key=>$vo1): ?><div class="main-total">
		
				
					<!-- {*车辆栏*} -->
					<div class="total-1">
						<ul>
							<li class="jkhkl"><?php echo ($key); ?></li>
						</ul>
					</div>
					<div class="total-3 center">
						<ul >
							<li><span id="center" ><a href="<?php echo U('Index/pinche');?>?car=<?php echo ($key); ?>&section=<?php echo ($section); ?>">拼车</a></span></li>
						</ul>
					</div>
					<!-- {*遍历生成主文件*} -->
						<?php if(is_array($vo1)): foreach($vo1 as $key=>$vo11): ?><div class="total-2">	
								<ul style="display: block;">
									<?php if(is_array($vo11)): $i = 0; $__LIST__ = $vo11;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$voa): $mod = ($i % 2 );++$i; if(count($voa) > '4' ): if((int)$voa["carpooling"] == '0'): ?><li style="border-bottom: 1px #e4e4e4 solid; width:310px;height: 50px;">

													<span>部门:<?php echo ($voa["section"]); ?></span>
													<span>目的地：
														<?php switch($voa["adrid"]): case "0": ?>三河<?php break;?>
									                            <?php case "1": ?>燕郊<?php break;?>
									                            <?php case "2": ?>北京<?php break;?>
									                            <?php case "3": ?>廊坊<?php break;?>
									                            <?php case "4": ?>石家庄<?php break;?>
									                            <?php case "5": ?>秦皇岛<?php break;?>
									                            <?php case "6": ?>其他<?php break; endswitch;?>	
													</span>
													<span>出发时间：<?php echo (date("d h:i",$voa["start_time"])); ?></span>
													<span>预计返回：<?php echo (date("d h:i",$voa["return_time"])); ?></span>
													<span style="color: block">剩余:无座位</span>
												</li>	
											<?php else: ?>
												<li style="border-bottom: 1px #e4e4e4 solid; width:310px;height: 50px;">
													<span>部门:<?php echo ($voa["section"]); ?></span>
														<span>目的地：
															<?php switch($voa["adrid"]): case "0": ?>三河<?php break;?>
										                            <?php case "1": ?>燕郊<?php break;?>
										                            <?php case "2": ?>北京<?php break;?>
										                            <?php case "3": ?>廊坊<?php break;?>
										                            <?php case "4": ?>石家庄<?php break;?>
										                            <?php case "5": ?>秦皇岛<?php break;?>
										                            <?php case "6": ?>其他<?php break; endswitch;?>	
														</span>
													<span>出发时间：<?php echo (date("d h:i",$voa["start_time"])); ?></span>
													<span>预计返回：<?php echo (date("d h:i",$voa["return_time"])); ?></span>
													<?php if($voa["state"] == 4): ?><span style="color: grey">正在进行</span><?php endif; ?>
													<?php if($voa["state"] == 2): ?><span style="color: red">剩余:<?php echo ($voa["residue"]); ?>座位</span><?php endif; ?>
													<?php if($voa["state"] == 6): ?><span style="color: grey">拼车待审核</span><?php endif; ?>
													<?php if($voa["state"] == 3): ?><span style="color: grey">已完成</span><?php endif; ?>

												</li><?php endif; endif; endforeach; endif; else: echo "" ;endif; ?>
								</ul>
								<?php if(count($voa) > '3'): ?><ul style="display: block;">
										<span>参考预计返回时间进行申请</span> 
									</ul>
								<?php else: ?>
									<ul style="display: block;">
										<span>还没有订单，可以申请</span> 
									</ul><?php endif; ?>
							</div><?php endforeach; endif; ?>
					
		
					<!-- {*操作栏*} -->
					

				
				
			
			

		
		<div style="clear: both"></div>
		</div><?php endforeach; endif; endforeach; endif; ?>
	<div class="footer">
		<p>Copyright 2007-2108 xxx.com All rights Reserved 新宏昌车辆管理系统于信息管理部开发 如果系统bug请联系信息管理部相关人员</p>
	</div>
</div>
</body>
</html>