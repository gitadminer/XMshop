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
			<a href="<?php echo U('Index/Index/index');?>"><img src="http://a615268.sn20908.gzonet.net/public/images/logo.png" class="img-responsive" alt=""/> </a>
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
      		<li><a href="<?php echo U('Member/User/index');?>">我的信息</a></li>
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
					<h3> <span class="btn btn-default">我的购物车</span><img src="http://a615268.sn20908.gzonet.net/public/images/bag.png" alt=""></h3>
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
	
<!-- 载入公共头部文件结束 -->
	<link href="http://a615268.sn20908.gzonet.net/hdtg/App/Index/Tpl/Public/css/etalage.css" type="text/css" rel="stylesheet" >
	<link href="http://a615268.sn20908.gzonet.net/hdtg/App/Index/Tpl/Public/css/detail.css" type="text/css" rel="stylesheet" >
	<link href="http://a615268.sn20908.gzonet.net/hdtg/App/Index/Tpl/Public/css/windon.css" type="text/css" rel="stylesheet" >
	<script src="http://a615268.sn20908.gzonet.net/hdtg/App/Index/Tpl/Public/js/detail.js"></script>
	<script src="http://a615268.sn20908.gzonet.net/hdtg/App/Index/Tpl/Public/js/jquery.etalage.min.js"></script>
<script>
		var cartSucc = "<div class='colse'><a href='javascript:hideInfoWindow();'></a></div>\
			<ul class='status'>\
			<li class='ico'></li>\
			<li class='msg'>\
				<h3>添加成功!</h3>\
				<p>购物车内共有<span id='total'></span>种商品</p>\
			</li>\
		</ul>\
		<div class='goBtn'>\
			<a href='javascript:hideInfoWindow();'>继续浏览</a>\
			<a href='<?php echo U('Member/Cart/index');?>'>查看购物车</a>\
		</div>";
		var collectSucc = "<div class='colse'><a href='javascript:hideInfoWindow();'></a></div>\
			<ul class='status'>\
			<li class='ico'></li>\
			<li class='msg'>\
				<h3>收藏成功!</h3>\
			</li>\
		</ul>\
		<div class='goBtn'>\
			<a href='javascript:hideInfoWindow();'>继续浏览</a>\
			<a href='<?php echo U('Member/Index/collect');?>'>查看我的收藏</a>\
		</div>";
		var userIsLogin = false;
		<?php if($userIsLogin){?>
			userIsLogin = true;
		<?php }?>
	</script>
	<div class="container">
<div class="women_main">
	<!-- start content -->
			<div class="row single">
				<div class="col-md-9 det">
				  <div class="single_left">
					<div class="grid images_3_of_2">
						<ul id="etalage">
							<li>
								<a href="optionallink.html">
									<img class="etalage_thumb_image" src="<?php echo $goodsuserinfo['goods_img'];?>" class="img-responsive" />
									<img class="etalage_source_image" src="<?php echo $goodsuserinfo['goods_img'];?>" class="img-responsive" title="" />
								</a>
							</li>	
						</ul>
						 <div class="clearfix">
						  <span>&nbsp;商品服务：</span><br />
          	    			<?php if(is_array($goodsuserinfo['serve'])):?><?php  foreach($goodsuserinfo['serve'] as $k=>$v){ ?>
								<div><span class="label label-default" style="margin-left:100px;"><?php echo $v['name'];?></span></div><br>
							<?php }?><?php endif;?>
						 </div>		
				  </div>
				  <div class="desc1 span_3_of_2">
				  <ul class="list-group" style="width:560px">
  					<li class="list-group-item"><h3><?php echo $goodsuserinfo['main_title'];?></h3></li>
					  <li class="list-group-item"><span class="brand">类型: <a href="#"><?php echo $goodsuserinfo['cname'];?> </a></span></li>
					  <li class="list-group-item"><span class="code"><?php echo $goodsuserinfo['sub_title'];?></span></li>
					  <li class="list-group-item"><span>上架时间：<?php echo date('Y-m-d',$goodsuserinfo['begin_time']);?></span>&nbsp;&nbsp;&nbsp;<span>下架时间：<?php echo $goodsuserinfo['end_time'];?></span></li>
					  <li class="list-group-item"><p>卖家地址：<?php echo $goodsuserinfo['school_name'];?>&nbsp;<?php echo $goodsuserinfo['user_floor'];?>栋<?php echo $goodsuserinfo['user_level'];?><?php echo $goodsuserinfo['user_room'];?>房&nbsp;&nbsp;&nbsp;卖家电话：<?php echo $goodsuserinfo['phone'];?></p> </li>
					  <li class="list-group-item">
					  <p><div class="price">
							<span class="text">现价:</span>
							<span class="price-new"><?php echo $goodsuserinfo['price'];?></span><span class="price-old"><?php echo $goodsuserinfo['old_price'];?></span> 
					  </div></p></li>
					  <li class="list-group-item">
					  <p><div class="btn_form">
							<a href="javascript:void(0)">购买</a>
							</div></p></li>
					  <li class="list-group-item">
							<!-- <a href="javascript:void(0);"  url="<?php echo U('Member/Cart/addCart');?>/gid/<?php echo $goodsuserinfo['gid'];?>" id="addCart" class='cart'><span>保存到购物车</span></a>-->			
						<div class='deal-buy-cart'>
							<a href="<?php echo U('Member/Buy/index');?>/gid/<?php echo $detail['gid'];?>" class='buy'></a>
							<a href="javascript:void(0);"  url="<?php echo U('Member/Cart/add');?>/gid/<?php echo $goodsuserinfo['gid'];?>" id="addCart" class='cart'><span>保存到购物车</span></a>
						</div>
						</li>
				</ul>
			   	</div>
          	    <div class="clearfix"></div>
          	  </div>
          	  <div class="single-bottom1">
					<h6>描述</h6>
					<p class="prod-desc"><?php echo $goodsuserinfo['detail'];?></p>
			</div>
	     </div>
	</div>
</div>
</div>	
	<div id="cover"></div>
	<div id="infoWindow"></div>				
	<!-- end content -->
<!-- 载入公共头部文件开始 --> 
	<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_WARNING",false);?>
	<div class="footer">
	<div class="container">
		<div class="col-md-3 cust">
			<h4>客户问题</h4>
				<li><a href="javascript:void(0)">帮助中心</a></li>
				<li><a href="javascript:void(0)">疑问FAQ</a></li>
				<li><a href="javascript:void(0)">如何购物</a></li>
				<li><a href="javascript:void(0)">投递</a></li>
		</div>
		<div class="col-md-2 abt">
			<h4>关于我们</h4>
				<li><a href="javascript:void(0)">我们的故事</a></li>
				<li><a href="javascript:void(0)">出版</a></li>
				<li><a href="javascript:void(0)">职业</a></li>
				<li><a href="contact.html">联系</a></li>
		</div>
		<div class="col-md-2 myac">
			<h4>我的账户</h4>
				<li><a href="<?php echo U('Member/Reg/index');?>">注册</a></li>
				<li><a href="<?php echo U('Member/Cart/index');?>">我的购物车</a></li>
				<li><a href="javascript:void(0)">浏览历史</a></li>
				<li><a href="javascript:void(0)">付款</a></li>
		</div>
		<div class="col-md-5 our-st">
			<div class="our-left">
				<h4>联系方式</h4>
			</div>
			<div class="clearfix"> </div>
				<li><i class="add"> </i>广东省广东邮电职业技术学院</li>
				<li><i class="phone"> </i>18924244166</li>
				<li><a href="javascript:void(0)"><i class="mail"> </i>1030697048@qq.com </a></li>
			
		</div>
		<div class="clearfix"> </div>
			<p>本网站仅用于参加本团队比赛使用  &copy; 最终解析权归本团队所有</p>
	</div>
</div>
	</body>
</html>
<!-- 载入公共头部文件结束 -->