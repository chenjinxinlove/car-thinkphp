<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>处理订单</title>
	<link rel="stylesheet" type="text/css" href="/car-thinkphp/Public/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="/car-thinkphp/Public/css/main.css">
	<style type="text/css">
		dt
		{
			border-bottom: 1px #e4e4e4 solid;
			border-top: 1px #e4e4e4 solid;
			margin: 10px 0;
			padding: 5px 0;
		}
		dd
		{
			margin-left: 10px;
		}
	</style>
</head>
<body>
	<?php if($ind["state"] == 0): ?><div class="container">
	<div class="row">
		<div class="span6 col-sm-6">
			<h3 class="text-left" style="margin-bottom: 20px;">
				订单号：<?php echo ($ind["uid"]); ?> 
				<small>状态： 
					<?php switch($ind["state"]): case "0": ?>待审批<?php break;?>
                            <?php case "1": ?>不通过<?php break;?>
                            <?php case "2": ?>审核通过<?php break;?>
                            <?php case "3": ?>以完成<?php break;?>
                            <?php case "4": ?>正在进行<?php break;?>
                            <?php case "5": ?>未评价<?php break;?>
                            <?php case "6": ?>拼车订单待审核<?php break; endswitch;?>
				</small>
			</h3>
			<dl >
				<dt >
					用车部门 | 用车人 | 联系电话 | 用车人数
				</dt>
				<dd>
					<?php echo ($ind["section"]); ?> | <?php echo ($ind["note"]); ?> | <?php echo ($ind["tel"]); ?> | <?php echo ($ind["num"]); ?>
				</dd>
				<dt>
					出发时间 | 预计返回时间
				</dt>
				<dd>
					<?php echo (date("y-m-d h:i",$ind["start_time"])); ?> | <?php echo (date("y-m-d h:i",$ind["return_time"])); ?>
				</dd>
				<dt>
					地址
				</dt>
				<dd>
				    <?php switch($ind["adrid"]): case "0": ?>三河<?php break;?>
                            <?php case "1": ?>燕郊<?php break;?>
                            <?php case "2": ?>北京<?php break;?>
                            <?php case "3": ?>廊坊<?php break;?>
                            <?php case "4": ?>石家庄<?php break;?>
                            <?php case "5": ?>秦皇岛<?php break;?>
                            <?php case "6": ?>其他<?php break; endswitch; echo ($ind["adress"]); ?>
				</dd>
				<dt>
					事由
				</dt>
				<dd>
					<?php echo ($ind["reason"]); ?>
				</dd>
				<dt>
					时间节点
				</dt>
				<dd>
					<p>
						创建时间：<?php echo (date("y-m-d h:i",$ind["creat_time"])); ?>
						审核时间：
						<?php if(strlen($ind.shenhe) == 4): echo (date("y-m-d h:i",$ind["shenhe"])); endif; ?>
					</p>
					<p>
						离开工厂时间：
						<?php if(strlen($ind.menweili) == 4): echo (date("y-m-d h:i",$ind["menweili"])); endif; ?>
						完成时间：<?php echo (date($ind["complete"],"y-m-d h:i")); ?>
						<?php if(strlen($ind.complete) == 4): echo (date($ind["complete"],"y-m-d h:i")); endif; ?>
					</p>
					
				</dd>
				<dt>
					评价
				</dt>
				<dd>
					<?php echo ($ind["evaluate"]); ?>
				</dd>
			</dl>
		</div>
		<div class="span6 col-sm-6 " style="margin-top:20px" ;>
			<form class="form-inline" action="<?php echo U('check');?>" method="post">
				<fieldset>
					<legend style="font-size: 24px;font-weight: bold;padding-bottom: 12px;">处理订单</legend> 

					<label>处理人：</label><input type="text" name="name" /> <span class="help-block">请填写处理人，指派司机和车辆然后提交，关闭务必填写关闭理由</span>
					<div style="margin: 10px 0"></div>
					
					  <div class="control-group">
				          <!-- Select Basic -->
				          <label>指派车辆：</label>
				          <div class="controls" style="display: inline-block">
				            <select class="form-control" name="car">
				            <option>选择车辆</option>
				            <?php if(is_array($car)): foreach($car as $key=>$car): ?><option value="<?php echo ($car["model"]); ?>|<?php echo ($car["numsq"]); ?>|<?php echo ($car["num"]); ?>"><?php echo ($car["model"]); ?></option><?php endforeach; endif; ?>
				            </select>
				          </div>
				     
				
				          <!-- Select Basic -->
				          <label>指派司机：</label>
				          <div class="controls" style="display: inline-block">

				            <select class="form-control" name="driver">
				            <option>选择司机</option>
					            <?php if(is_array($driver)): foreach($driver as $key=>$driver): ?><option value="<?php echo ($driver["name"]); ?>|<?php echo ($driver["tell"]); ?>"><?php echo ($driver["name"]); ?></option><?php endforeach; endif; ?>
				      		</select>
				          </div>
				       </div>
				       <input type="text" style="display: none" name='num' value="<?php echo ($ind["num"]); ?>">
				       <input type="text" style="display: none" name="uid" value="<?php echo ($ind["uid"]); ?>">
					<div style="margin: 10px 0">
						<button class="btn btn-primary" type="submit">提交</button>
					</div>
					
				</fieldset>
			</form>
			<div style="margin:40px 0">
						<form class="form-inline" action="<?php echo U('checkclose');?>" method="post">
						  <div class="form-group">
						    <div class="input-group">
						      <input type="text"  class="form-control" id="exampleInputAmount" placeholder="填写关闭理由" name="reason">
						      <div class="input-group-addon">订单号：<?php echo ($ind["uid"]); ?> </div>
						    </div>
						  </div>
						  <input type="text" style="display: none" name="uid" value="<?php echo ($ind["uid"]); ?>">
						  <div style="margin: 20px"></div>
						  <button type="submit" class="btn btn-danger">不通过</button>
						</form>
					</div>	
		</div>
	</div>
</div><?php endif; ?>
	<?php if($ind["state"] == 1): endif; ?>
	<?php if($ind["state"] == 2): endif; ?>
	<?php if($ind["state"] == 3): endif; ?>
	<?php if($ind["state"] == 4): endif; ?>
	<?php if($ind["state"] == 5): endif; ?>
	<?php if($ind["state"] == 6): ?><div class="container">
	<div class="row">
		<div class="span6 col-sm-6">
			<h3 class="text-left" style="margin-bottom: 20px;">
				订单号：<?php echo ($ind["uid"]); ?> 
				<small>状态：
					<?php switch($ind["state"]): case "0": ?>待审批<?php break;?>
                            <?php case "1": ?>不通过<?php break;?>
                            <?php case "2": ?>审核通过<?php break;?>
                            <?php case "3": ?>以完成<?php break;?>
                            <?php case "4": ?>正在进行<?php break;?>
                            <?php case "5": ?>未评价<?php break;?>
                            <?php case "6": ?>拼车订单待审核<?php break; endswitch;?>
				</small>
			</h3>
			<dl >
				<dt >
					用车部门 | 用车人 | 联系电话 | 用车人数
				</dt>
				<dd>
					<?php echo ($ind["section"]); ?> | <?php echo ($ind["note"]); ?> | <?php echo ($ind["tel"]); ?> | <?php echo ($ind["num"]); ?>
				</dd>
				<dt>
					出发时间 | 预计返回时间
				</dt>
				<dd>
					<?php echo (date("y-m-d h:i",$ind["start_time"])); ?> | <?php echo (date("y-m-d h:i",$ind["return_time"])); ?>
				</dd>
				<dt>
					地址
				</dt>
				<dd>
				    <?php switch($ind["adrid"]): case "0": ?>三河<?php break;?>
                            <?php case "1": ?>燕郊<?php break;?>
                            <?php case "2": ?>北京<?php break;?>
                            <?php case "3": ?>廊坊<?php break;?>
                            <?php case "4": ?>石家庄<?php break;?>
                            <?php case "5": ?>秦皇岛<?php break;?>
                            <?php case "6": ?>其他<?php break; endswitch; echo ($ind["adress"]); ?>
				</dd>
				<dt>
					事由
				</dt>
				<dd>
					<?php echo ($ind["reason"]); ?>
				</dd>
				<dt>
					时间节点
				</dt>
				<dd>
					<p>
						创建时间：<?php echo (date("y-m-d h:i",$ind["creat_time"])); ?>
						审核时间：
						<?php if(strlen($ind.shenhe) == 4): echo (date("y-m-d h:i",$ind["shenhe"])); endif; ?>
					</p>
					<p>
						离开工厂时间：
						<?php if(strlen($ind.menweili) == 4): echo (date("y-m-d h:i",$ind["menweili"])); endif; ?>
						完成时间：<?php echo (date($ind["complete"],"y-m-d h:i")); ?>
						<?php if(strlen($ind.complete) == 4): echo (date($ind["complete"],"y-m-d h:i")); endif; ?>
					</p>
					
				</dd>
				<dt>
					评价
				</dt>
				<dd>
					<?php echo ($ind["evaluate"]); ?>
				</dd>
			</dl>
		</div>
		<div class="span6 col-sm-6 " style="margin-top:20px" ;>
			<form class="form-inline" action="<?php echo U('pccheck');?>" method="post">
					<dl >
						<dt >
							拼车部门 | 拼车人 | 联系电话 | 拼车人数
						</dt>
						<dd>
							<?php echo ($ind["psection"]); ?> | <?php echo ($ind["pnote"]); ?> | <?php echo ($ind["ptel"]); ?> | <?php echo ($ind["pnum"]); ?>
						</dd>
						<dt>
							出发时间 | 预计返回时间
						</dt>
						<dd>
							<?php echo (date("y-m-d h:i",$ind["start_time"])); ?> | <?php echo (date("y-m-d h:i",$ind["preturn_time"])); ?>
						</dd>
						<dt>
							地址
						</dt>
						<dd>
						    <?php switch($ind["padrid"]): case "0": ?>三河<?php break;?>
		                            <?php case "1": ?>燕郊<?php break;?>
		                            <?php case "2": ?>北京<?php break;?>
		                            <?php case "3": ?>廊坊<?php break;?>
		                            <?php case "4": ?>石家庄<?php break;?>
		                            <?php case "5": ?>秦皇岛<?php break;?>
		                            <?php case "6": ?>其他<?php break; endswitch; echo ($ind["paddress"]); ?>
						</dd>
					</dl>

					<label>处理人：</label><input type="text" name="name" /> <span class="help-block">请填写处理人，拒绝请务必填写关闭理由</span>
					<div style="margin: 10px 0"></div>
					
					  
				       <input type="text" style="display: none" name='num' value="<?php echo ($ind["num"]); ?>">
				       <input type="text" style="display: none" name="uid" value="<?php echo ($ind["uid"]); ?>">
					<div style="margin: 10px 0">
						<button class="btn btn-primary" type="submit">同意</button>
					</div>
					
				</fieldset>
			</form>
			<div style="margin:40px 0">
						<form class="form-inline" action="<?php echo U('pcclose');?>" method="post">
						  <div class="form-group">
						    <div class="input-group">
						      <input type="text"  class="form-control" id="exampleInputAmount" placeholder="填写关闭理由" name="reason">
						    </div>
						  </div>
						  <input type="text" style="display: none" name="uid" value="<?php echo ($ind["uid"]); ?>">
						  <div style="margin: 20px"></div>
						  <button type="submit" class="btn btn-danger">拒绝拼车</button>
						</form>
					</div>	
		</div>
	</div>
</div><?php endif; ?>
</body>
<script type="text/javascript" src="/car-thinkphp/Public/js/jquery.js"></script>
<script type="text/javascript" src="/car-thinkphp/Public/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/car-thinkphp/Public/js/main.js"></script>

</html>