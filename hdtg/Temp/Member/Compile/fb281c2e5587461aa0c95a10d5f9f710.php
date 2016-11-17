<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_WARNING",false);?>	<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_WARNING",false);?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<script type='text/javascript' src="http://a615268.sn20908.gzonet.net/Public/js/jquery-1.11.1.min.js"></script>
<link href="http://a615268.sn20908.gzonet.net/Public/css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="http://a615268.sn20908.gzonet.net/Public/css/style.css" rel='stylesheet' type='text/css' />
<link href="http://a615268.sn20908.gzonet.net/Public/css/register.css" rel="stylesheet" type='text/css' />
<link href="http://a615268.sn20908.gzonet.net/Public/css/reset.css" rel='stylesheet' type='text/css' />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='http://fonts.useso.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.useso.com/css?family=Playfair+Display:400,700,900' rel='stylesheet' type='text/css'>
<!-- start menu -->
<link rel="icon" href="http://a615268.sn20908.gzonet.net/Public/images/favicon.png" mce_href="http://a615268.sn20908.gzonet.net/Public/images/favicon.png" type="image/x-icon">
<link href="http://a615268.sn20908.gzonet.net/Public/css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="http://a615268.sn20908.gzonet.net/Public/js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<script src="http://a615268.sn20908.gzonet.net/Public/js/menu_jquery.js"></script>
<script src="http://a615268.sn20908.gzonet.net/Public/js/simpleCart.min.js"> </script>
<script src="http://a615268.sn20908.gzonet.net/Public/js/Login.js"></script>
<script src="http://a615268.sn20908.gzonet.net/Public/js/bootstrap.min.js"></script>
<script src="http://a615268.sn20908.gzonet.net/Public /js/loginCheck.js"></script>
<meta name="keywords" content="" />
<meta name="description" content="" />
<title><?php echo $title;?></title>
<style>
.search input[type="submit"]{
	background: url('http://a615268.sn20908.gzonet.net/Public/images/search.png') no-repeat 0px 1px;
	border: none;
	cursor: pointer;
	width: 24px;
	outline: none;
	position: absolute;
	height: 24px;
	top: 6px;
	right: 5px;
}
i.phone {
  width: 19px;
  height: 21px;
  display: inline-block;
  background: url(http://a615268.sn20908.gzonet.net/Public/images/img-sprite.png) no-repeat -235px -39px;
  vertical-align: middle;
  margin-right: 0.5em;
}
i.add {
  width: 17px;
  height: 24px;
  display: inline-block;
  background: url(http://a615268.sn20908.gzonet.net/Public/images/img-sprite.png) no-repeat -236px -11px;
  vertical-align: middle;
  margin-right: 0.5em;
}
i.mail {
  width: 17px;
  height: 14px;
  display: inline-block;
  background: url(http://a615268.sn20908.gzonet.net/Public/images/img-sprite.png) no-repeat -236px -76px;
  margin-right: 0.5em;
}
#main{
	position: relative;
	width:520px;
	height:auto;
	float:left;
	margin:10px;
	overflow:hidden;
}
#page{
	width:100%;
	height:30px;
	margin:10px 0px;
	text-align:center;
}
#page a{
	display:inline-block;
	padding:5px 12px;
	border:1px solid #e3e8e8;
	color:#00bbc6;
	background:#FFF;
	margin:0px 5px;
}
#page strong{
	margin:0px 5px;
	color:#FFF;
	padding:5px 12px;
	border:1px solid #00bbbb;
	background:#00bbbb;
}
#loginForm .prompt{
	font-size:14px;
	color:red;
	margin-left:10px;
}
</style>
</head>
<body>
	<!-- 顶部开始 -->
	<div class="top_bg">
	<div class="container">
		<div class="header_top">
			<div class="top_right">
				<ul>
					<li><a href="javascript:void(0)">欢迎来到献梦队作品首页</a></li>|
					<li><a href="javascript:void(0)"></a></li>
					<li><a href="javascript:void(0)">投递信息</a></li>
				</ul>
			</div>
			<div class="top_left">
				<h2><span></span>联系：18924244166</h2>
			</div>
				<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!-- header -->
<div class="header_bg">
<div class="container">
	<div class="header">
	<div class="head-t">
		<div class="logo">
			<a href="<?php echo U('Index/Index/index');?>"><img src="http://a615268.sn20908.gzonet.net/Public/images/logo.png" class="img-responsive" alt=""/> </a>
		</div>
		<!-- start header_right -->
		<div class="header_right">
			<div class="rgt-bottom">
			<!-- 判断是否存在seeion -->
			<?php if($userIsLogin == 1){?>
			<div class="btn-group" role="group" aria-label="...">
  			<div class="btn-group" role="group">
   			 <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
     		 <?php echo $username['uname'];?>
      	<span class="caret"></span>
    		</button>
    		<ul class="dropdown-menu">
      		<li><a href="<?php echo U('Member/user/index');?>">我的信息</a></li>
      		<li><a href="<?php echo U('Member/goods/index');?>">我的商品</a></li>
      		<li><a href="<?php echo U('Member/goods/add');?>">我要上传</a></li>
      		<li><a href="#">我的订单</a></li>
      		<li><a href="<?php echo U('Member/Login/quit');?>">退出登录</a></li>
    	</ul>
  </div>
</div>
			<?php  }elseif($userIsLogin == 0){ ?>
				<div class="log">
					<div class="login" >
						<div id="loginContainer"><a href="#" id="loginButton"><span>登录</span></a>
						    <div id="loginBox">           
						        <form id="loginForm" action="<?php echo U('Member/Login/login');?>" method="post">
						                <fieldset id="body">
						                	<dl class='focus'>
												<dt>用户名或者邮箱：</dt>
												<dd class='text'><input class='must' type="text" id="username1" url="<?php echo U('Member/Login/loginCheck');?>" ajax=1  name="username1" placeholder="账户名称:" /></dd>
												<dd class='prompt'></dd>
											</dl>
											<br>
						                    <dl>
												<dt>密码:</dt>
												<dd class='text'><input class='must' type="password" id="password1" url="<?php echo U('Member/Login/loginCheck');?>" ajax=1  name="password1" placeholder="密码:" /></dd>
												<dd class='prompt'></dd>
											</dl>
											<br>
						                    <input type="submit" class='submit' id="login" value="确定">
						                	<label for="checkbox"><input type="checkbox" id="checkbox"> <i>记住密码</i></label>
						            	</fieldset>
						            <span><a href="#">忘记密码?</a></span>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="reg">
					<a href="<?php echo U('Member/reg/index');?>">注册</a>
				</div>
			<?php  }else{ ?>
			<?php }?>	
			<div class="cart box_1">
				<a href="<?php echo U('Member/Cart/index');?>">
					<h3> <span class="btn btn-default">我的购物车</span><img src="http://a615268.sn20908.gzonet.net/Public/images/bag.png" alt=""></h3>
				</a>	
				<p><a href="javascript:;" class="simpleCart_empty"></a></p>
				<div class="clearfix"> </div>
			</div>
			<div class="create_btn">
				<a href="<?php echo U('Member/Cart/index');?>">结账</a>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="search">
		    <form action="<?php echo U('Index/Index/index');?>" method="get">
		    	<input type="text" name="like" value="" placeholder="搜索...">
				<input type="submit" value="">
			</form>
		</div>
		<div class="clearfix"> </div>
		</div>
		<div class="clearfix"> </div>
	</div>
		<!-- start header menu -->
		
		<ul class="megamenu skyblue">
			<li class="active grid"><a class="color1" href="<?php echo U('Index/Index/index');?>">首页</a></li>
			<?php if(is_array($categoryhead)):?><?php  foreach($categoryhead as $k=>$v){ ?>
			<li class="grid">
			<a class="color2" href="<?php echo U('Index/Index/index');?>/cid/<?php echo $v['cid'];?>">
				<?php echo $v['cname'];?>
			</a>
			
			
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4><?php echo $category[0]['cname'];?></h4>
								<ul>
								<?php if(is_array($category)):?><?php  foreach($category as $key=>$value){ ?>
								<?php if($value['pid'] == 1){?>
									<li><a href="<?php echo U('Index/Index/index');?>/cid/<?php echo $value['cid'];?>"><?php echo $value['cname'];?></a></li>
								<?php }?>
								<?php }?><?php endif;?>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4><?php echo $category[1]['cname'];?></h4>
								<ul>
									<?php if(is_array($category)):?><?php  foreach($category as $key=>$value){ ?>
								<?php if($value['pid'] == 7){?>
									<li><a href="<?php echo U('Index/Index/index');?>/cid/<?php echo $value['cid'];?>"><?php echo $value['cname'];?></a></li>
								<?php }?>
								<?php }?><?php endif;?>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4><?php echo $category[2]['cname'];?></h4>
								<ul>
								<?php if(is_array($category)):?><?php  foreach($category as $key=>$value){ ?>
								<?php if($value['pid'] == 8){?>
									<li><a href="<?php echo U('Index/Index/index');?>/cid/<?php echo $value['cid'];?>"><?php echo $value['cname'];?></a></li>
								<?php }?>
								<?php }?><?php endif;?>
								</ul>	
							</div>												
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4><?php echo $category[3]['cname'];?></h4>
								<ul>
								<?php if(is_array($category)):?><?php  foreach($category as $key=>$value){ ?>
								<?php if($value['pid'] == 9){?>
									<li><a href="<?php echo U('Index/Index/index');?>/cid/<?php echo $value['cid'];?>"><?php echo $value['cname'];?></a></li>
								<?php }?>
								<?php }?><?php endif;?>
								</ul>	
							</div>						
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4><?php echo $category[4]['cname'];?></h4>
								<ul>
								<?php if(is_array($category)):?><?php  foreach($category as $key=>$value){ ?>
								<?php if($value['pid'] == 10){?>
									<li><a href="<?php echo U('Index/Index/index');?>/cid/<?php echo $value['cid'];?>"><?php echo $value['cname'];?></a></li>
								<?php }?>
								<?php }?><?php endif;?>
								</ul>	
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4><?php echo $category[5]['cname'];?></h4>
								<ul>
								<?php if(is_array($category)):?><?php  foreach($category as $key=>$value){ ?>
								<?php if($value['pid'] == 11){?>
									<li><a href="<?php echo U('Index/Index/index');?>/cid/<?php echo $value['cid'];?>"><?php echo $value['cname'];?></a></li>
								<?php }?>
								<?php }?><?php endif;?>
								</ul>	
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4><?php echo $category[6]['cname'];?></h4>
								<ul>
									<?php if(is_array($category)):?><?php  foreach($category as $key=>$value){ ?>
								<?php if($value['pid'] == 12){?>
									<li><a href="<?php echo U('Index/Index/index');?>/cid/<?php echo $value['cid'];?>"><?php echo $value['cname'];?></a></li>
								<?php }?>
								<?php }?><?php endif;?>
								</ul>	
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col2"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
					</div>
    				</div>
				</li>
				<?php }?><?php endif;?>
		 </ul> 
	</div>
</div>
</div>
	<!-- 导航结束 -->
	
	<!-- 载入公共头部文件-->
	<link href="http://a615268.sn20908.gzonet.net/hdtg/App/Member/Tpl/Public/css/buy.css" type="text/css" rel="stylesheet" >
	<div class='position'>
		<div id="main">
			<div class='step'>
				<ul>
					<li class='current'>1.查看购物车 </li>
					<li>2.选择支付方式 </li>
					<li>3.购买成功 </li>
				</ul>	
			</div>
			<!-- 购物车列表 -->
			<table class='buy-table' border=0>
			<thead>
				<tr>
					<th>项目</th>
					<th width='20%' style="text-align:left;">数量</th>
					<th width='20%'>单价</th>
					<th width='10%'>总价</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>
						<a href="">天堂烧烤：双人餐，无需预约，美味享受</a>
					</td>
					<td class='goods-num'>
						<a href="" class='reduce' id="reduce"></a>
						<input id="num" type="text" value=1> 
						<a href="" class='add' id="add"></a>
					</td>
					<td>-</td>
					<td>12</td>
				</tr>
			</tbody>
			</table>
			<!-- 订单提交 -->
			<div class='bottom'>
				<input type="submit" class='submit' value="提交订单">
			</div>
		</div>
	</div>	
</body>
</html>