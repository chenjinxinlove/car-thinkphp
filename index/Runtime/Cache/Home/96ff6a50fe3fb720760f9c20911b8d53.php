<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>订单审批</title>
	<link rel="shortcut icon" href="images/icon/icon.ico" />
	<link rel="stylesheet" type="text/css" href="/car-thinkphp/Public/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="/car-thinkphp/Public/css/main.css">
	<style type="text/css"></style>
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

<main role="main">
        <div class="list-group" style="width: 13%;height:495px;position: relative;left:10%;border: 1px solid #878787;padding:8px;display: inline-block;vertical-align: top;">
            <a href="/car-thinkphp/index.php/Home/Index/admin" style="text-decoration: none"><button type="button" class="list-group-item active" style="margin-bottom: 15px">订单审批</button></a>
            <a href="/car-thinkphp/index.php/Home/Index/ycqk" style="text-decoration: none"><button type="button" class="list-group-item " style="margin-bottom: 15px">用车情况</button></a>
        </div>
        <div style="width:68%;height: 495px;border: 1px solid #878787;display: inline-block;vertical-align: top;position: relative;left:11%;">
        <button type="button" class="btn btn-primary add-btnn" style="margin:10px 100px">新增订单<span style="display: none"><?php echo U('Index/add');?></span></button>
        <!-- Single button -->
        <div class="btn-group " style="margin:10px 0">
          <button type="button" class="btn btn-default dropdown-toggle btn-primary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            筛选订单 <span class="caret"></span>
          </button> 
          <ul class="dropdown-menu">
            <li><a href="<?php echo U('Index/admin');?>?page=0">待审订单</a></li>
            <li><a href="<?php echo U('Index/admin');?>?page=1">审核通过</a></li>
            <li><a href="<?php echo U('Index/admin');?>?page=2">完成订单</a></li>
            <li><a href="<?php echo U('Index/admin');?>?page=3">拼车订单</a></li>
            <li><a href="<?php echo U('Index/admin');?>?page=4">正在进行</a></li>
            <li><a href="<?php echo U('Index/admin');?>?page=5">未评价订单</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="<?php echo U('Index/admin');?>?page=6">全部订单</a></li>
          </ul>
        </div>


        <div class="table-responsive">
          <table class="table table-bordered table-hover table-striped">
            <thead>
              <tr>
                <th><input type="checkbox" id="blankCheckbox" value="option1" aria-label="..."></th>
                <th>开始</th>
                <th>部门</th>
                <th>人数</th>
                <th>目的地</th>
                <th>地址</th>
                <th>事宜</th>
                <th>用车人</th>
                <th>电话</th>
                <th>拼车单</th>
                <th>操作</th>
              </tr>
            </thead>
            <tbody>
            <?php if(is_array($list)): foreach($list as $key=>$vo): ?><tr id="btn-tr">
                    <th scope="row"><input type="checkbox" id="blankCheckbox" value="option1" aria-label="..."></th>
                        <td><?php echo (date("y-m-d h:i",$vo["start_time"])); ?></td>
                        <td><?php echo ($vo["section"]); ?></td>
                        <td><?php echo ($vo["num"]); ?></td>
                        <td>
                        <?php switch($vo["adrid"]): case "0": ?>三河<?php break;?>
                            <?php case "1": ?>燕郊<?php break;?>
                            <?php case "2": ?>北京<?php break;?>
                            <?php case "3": ?>廊坊<?php break;?>
                            <?php case "4": ?>石家庄<?php break;?>
                            <?php case "5": ?>秦皇岛<?php break;?>
                            <?php case "6": ?>其他<?php break; endswitch;?>
                        </td>
                        <td><?php echo ($vo["adress"]); ?></td>
                        <td><?php echo ($vo["reason"]); ?></td>
                        <td><?php echo ($vo["note"]); ?></td>
                        <td><?php echo ($vo["tel"]); ?></td>
                        <td>
                        <?php if($vo["state"] == 6 OR $vo["state"] == 7): ?>是
                         <?php else: ?>
                            否<?php endif; ?>
                         </td>
                    <td class="add-btn">

                    <?php if($vo["state"] == 0): ?><span style="display: none"><?php echo U('handle').'?uid='.$vo['uid'];?></span><a>处理</a><?php endif; ?>
                    <?php if($vo["state"] == 6): ?><span style="display: none"><?php echo U('handle').'?uid='.$vo['uid'];?></span><a>处理</a><?php endif; ?>
                    </td>
              </tr><?php endforeach; endif; ?>
              
            </tbody>

          </table>
          <div style="float: right;margin-right: 20px;"><?php echo ($page); ?></div>
          
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

<footer> 
	<ul class="foot">
		<li><a href="#">Copyright 2007-2108 xxx.com All rights Reserved 新宏昌车辆管理系统于信息管理部开发 如果系统bug请联系信息管理部相关人员</a></li>
	</ul>
</footer><!-- footer结束 -->
	
</body>
<script type="text/javascript" src="/car-thinkphp/Public/js/jquery.js"></script>
<script type="text/javascript" src="/car-thinkphp/Public/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/car-thinkphp/Public/js/main.js"></script>
<script  src="/car-thinkphp/Public/js/layer.js"></script>
<script type="text/javascript">
layer.config({
    extend: 'extend/layer.ext.js'
});
    $(function() {
        $(".add-btn").on("click" , function(){
            var content = $(this).children('span').html();
            /*alert(content);*/
                layer.open({
                type: 2,
                //skin: 'layui-layer-lan',
                title: '审核订单',
                fix: false,
                shadeClose: true,
                maxmin: true,
                area: ['66%', '80%'],
                content: content,
                });
            
            });
        $(".add-btnn").on("click" , function(){
            var content = $(this).children('span').html();
            /*alert(content);*/
                layer.open({
                type: 2,
                //skin: 'layui-layer-lan',
                title: '审核订单',
                fix: false,
                shadeClose: true,
                maxmin: true,
                area: ['50%', '80%'],
                content: content,
                });
            
            });
         $(".li").click(function(event){
            event.stopPropagation();
        });
            
    });
</script>
</html>