<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_WARNING",false);?><?php if(!defined("HDPHP_PATH"))exit;C("SHOW_WARNING",false);?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title></title>
<script type='text/javascript' src='http://www.shop.com/hdphp/Extend/Org/Jquery/jquery-1.8.2.min.js'></script>
<link href="http://www.shop.com/hdphp/Extend/Org/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"><script src="http://www.shop.com/hdphp/Extend/Org/bootstrap/js/bootstrap.min.js"></script>
  <!--[if lte IE 6]>
  <link rel="stylesheet" type="text/css" href="http://www.shop.com/hdphp/Extend/Org/bootstrap/ie6/css/bootstrap-ie6.css">
  <![endif]-->
  <!--[if lte IE 7]>
  <link rel="stylesheet" type="text/css" href="http://www.shop.com/hdphp/Extend/Org/bootstrap/ie6/css/ie.css">
  <![endif]-->
<script type="text/javascript" src="http://www.shop.com/hdtg/App/Admin/Tpl/Public/js/common.js"> </script>
<link href="http://www.shop.com/hdtg/App/Admin/Tpl/Public/css/common.css" rel="stylesheet" type="text/css" />
</head>
<body>

<div id="map">
	<span class='title'>会员列表</span>
</div>
<div id="content">
	<table id="table" class='table table-striped table-bordered'>
		<thead>
			<tr>
				<th width="15%">用户名</th>
				<th width="18%">邮箱</th>
				<th width="15%">电话号码</th>
				<th width="25%">学校名称</th>
				<th width="15%">宿舍地址</th>
				<th >操作</th>
			</tr>
		</thead>
		<tbody>
		<?php if(is_array($user)):?><?php  foreach($user as $k=>$v){ ?>
			<tr>
				<td><?php echo $v['uname'];?></td>
				<td><?php echo $v['email'];?></td>
				<td><?php echo $v['phone'];?></td>
				<td><?php echo $v['school_name'];?></td>
				<td><?php echo $v['user_floor'];?>-<?php echo $v['user_level'];?><?php echo $v['user_room'];?></td>
				<td>
					<!-- <a class='btn btn-small' href="<?php echo U('Admin/User/edit');?>/uid/<?php echo $v['uid'];?>">编辑</a> -->
					<a class='btn btn-small delAffirm' href="<?php echo U('Admin/User/del');?>/uid/<?php echo $v['uid'];?>">删除</a>
				</td>
			</tr>
		<?php }?><?php endif;?>	
		</tbody>
	</table>
</div>
</body>
</html>