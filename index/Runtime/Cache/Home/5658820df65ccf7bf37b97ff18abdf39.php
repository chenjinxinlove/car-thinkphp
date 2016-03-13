<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>订单展示</title>
	<link rel="stylesheet" type="text/css" href="/car-thinkphp/Public/css/index1.css">
	<link rel="stylesheet" type="text/css" href="/car-thinkphp/Public/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="/car-thinkphp/Public/css/main.css">
	<script type="text/javascript" src="/car-thinkphp/Public/js/jquery.js"></script>
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

<main role="main" >
        <div class="list-group" style="width: 13%;height:495px;position: relative;left:10%;border: 1px solid #878787;padding:8px;display: inline-block;vertical-align: top;">
            <a href="/car-thinkphp/index.php/Home/Index/admin" style="text-decoration: none"><button type="button" class="list-group-item " style="margin-bottom: 15px">订单审批</button></a>
            <a href="/car-thinkphp/index.php/Home/Index/ycqk" style="text-decoration: none"><button type="button" class="list-group-item active" style="margin-bottom: 15px">用车情况</button></a>
        </div>
        <div style="width:68%;height: 495px;border: 1px solid #878787;display: inline-block;vertical-align: top;position: relative;left:11%;overflow: auto">
        	

        	<!-- 开始 -->
				<div class="main" style="margin-top: -10px">
	<div class="main-1">
		<ul>
			<li class="jjff"><span style="width: 150px">三天出车信息</span></li>
			
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
										<span>参考预计返回时间进行派车</span> 
									</ul>
								<?php else: ?>
									<ul style="display: block;">
										<span>还没有订单，可以派车</span> 
									</ul><?php endif; ?>
							</div><?php endforeach; endif; ?>
					
		
					<!-- {*操作栏*} -->
					

				
				
			
			

		
		<div style="clear: both"></div>
		</div><?php endforeach; endif; endforeach; endif; ?>
	
</div>
        	<!-- 开始 -->


		</div>
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