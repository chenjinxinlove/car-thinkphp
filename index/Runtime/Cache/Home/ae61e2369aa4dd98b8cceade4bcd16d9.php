<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>里程</title>
	<link rel="stylesheet" type="text/css" href="/car-thinkphp/Public/css/bootstrap.css">
</head>
<body>
	<div class="container-fluid">
	<div class="row-fluid">
		<div class="span12">
			<div class="page-header">
				<h2>
					车辆出门填写出门里程，回来填写回来里程 
				</h2>
			</div>
			<div class="page-header">
				<h3>
					订单号：<?php echo ($list["uid"]); ?>
				</h3>
				<h3>
					车辆：<?php echo ($list["car"]); ?> 车牌号: <?php echo ($list["chepai"]); ?>
				</h3>
			</div>
			</div>
			<div class="row-fluid">
				<div class="col-sm-6">
					<?php if($list["menweili"] == null ): ?><form class="form-inline" action="/car-thinkphp/index.php/Home/Index/menweiadd" method="post">
						  <div class="form-group">
						    <label class="sr-only" for="exampleInputAmount">出厂里程</label>
						    <div class="input-group">
						      <div class="input-group-addon">出厂里程</div>

						      <input type="text" class="form-control" name="lichang" id="exampleInputAmount" placeholder="出厂里程">
							  <input type="text" value="<?php echo ($list["uid"]); ?>" style="display: none" name="uid">
						    </div>
					  		</div>
					  	<button type="submit" class="btn btn-primary">添加</button>
					</form>
					<?php else: ?>
					 <fieldset disabled>
						<form class="form-inline">
					  <div class="form-group">
					    <label class="sr-only" for="exampleInputAmount">出厂里程</label>
					    <div class="input-group">
					      <div class="input-group-addon">出厂里程</div>

					      <input type="text" class="form-control" id="exampleInputAmount" placeholder="出厂里程" value="<?php echo ($list["menweili"]); ?>">

					    </div>
					  </div>
					  <button type="submit" class="btn btn-primary">添加</button>
					</form>
					</fieldset><?php endif; ?>
					

				</div>
				<div class="row-fluid">
				<div class="col-sm-6">
					<?php if($list["complete"] == null ): ?><form class="form-inline" action="/car-thinkphp/index.php/Home/Index/com" method="post">
						  <div class="form-group">
						    <label class="sr-only" for="exampleInputAmount">进厂里程</label>
						    <div class="input-group">
						      <div class="input-group-addon">进厂里程</div>

						      <input type="text" class="form-control" name="lichang" id="exampleInputAmount" placeholder="进厂里程">
							  <input type="text" value="<?php echo ($list["uid"]); ?>" style="display: none" name="uid">
						    </div>
					  		</div>
					  	<button type="submit" class="btn btn-primary">添加</button>
					</form>
					<?php else: ?>
					 <fieldset disabled>
						<form class="form-inline">
					  <div class="form-group">
					    <label class="sr-only" for="exampleInputAmount">进厂里程</label>
					    <div class="input-group">
					      <div class="input-group-addon">进厂里程</div>

					      <input type="text" class="form-control" id="exampleInputAmount" placeholder="进厂里程" value="<?php echo ($list["swancheng"]); ?>">

					    </div>
					  </div>
					  <button type="submit" class="btn btn-primary">添加</button>
					</form>
					</fieldset><?php endif; ?>
					

				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>