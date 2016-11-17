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
	
	<link href="http://a615268.sn20908.gzonet.net/hdtg/App/Member/Tpl/Public/css/logincheck.css" rel="stylesheet" type='text/css' />
	<script src="http://a615268.sn20908.gzonet.net/hdtg/App/Member/Tpl/Public/js/loginCheck1.js"></script>
	<script src="http://a615268.sn20908.gzonet.net/Public/js/regCheck.js"></script>
	<script>
		var __JSCONTROL__ = 'http://a615268.sn20908.gzonet.net/index.php/Member/Reg';
	</script>
	<!-- 载入公共头部文件-->
	<div class="container">
<div class="main">
	<!-- start registration -->
	<div class="registration">
		<div class="registration_left">
		<h2>新用户? <span> 创建账号 </span></h2>
		<!-- [if IE] 
		    < link rel='stylesheet' type='text/css' href='ie.css'/>  
		 [endif] -->  
		  
		<!-- [if lt IE 7]>  
		    < link rel='stylesheet' type='text/css' href='ie6.css'/>  
		<! [endif] -->  
		<script>
			(function() {
		
			// Create input element for testing
			var inputs = document.createElement('input');
			
			// Create the supports object
			var supports = {};
			
			supports.autofocus   = 'autofocus' in inputs;
			supports.required    = 'required' in inputs;
			supports.placeholder = 'placeholder' in inputs;
		
			// Fallback for autofocus attribute
			if(!supports.autofocus) {
				
			}
			
			// Fallback for required attribute
			if(!supports.required) {
				
			}
		
			// Fallback for placeholder attribute
			if(!supports.placeholder) {
				
			}
			
			// Change text inside send button on submit
			var send = document.getElementById('register-submit');
			if(send) {
				send.onclick = function () {
					this.innerHTML = '...Sending';
				}
			}
		
		})();
		</script>
		 <div class="registration_form">
		 <!-- Form -->
		<div id="regBox">
		<div class='form'>
		<form action="<?php echo U('Member/Reg/adduser');?>" method="post" id="regForm">
			<dl>
				<dt></dt>
				<dd class='text'><input class='must' type="text"  ajax=1   name="username" placeholder="账户名称:" /></dd>
				<dd class='prompt'></dd>
			</dl>
			<dl>
				<dt></dt>
				<dd class='text'><input class='must' id="password" type="password" name="password" placeholder="密码:" /></dd>
				<dd class='prompt'></dd>
			</dl>
			<dl>
				<dt></dt>
				<dd class='text'><input class='must' type="password" id="password_d" name="password_d" placeholder="重复密码:" /></dd>
				<dd class='prompt'></dd>
			</dl>
			<dl class='focus'>
				<dt></dt>
				<dd class='text'><input class='must' type="text" ajax=1   name="email" placeholder="账户邮箱:"/></dd>
				<dd class='prompt'>用于登录和找回密码，不会公开</dd>
			</dl>
			<dl>
				<dt></dt>
				<dd class='text'><input class='must' type="text" ajax=1   name="phone" placeholder="账号电话号码:"/></dd>
				<dd class='prompt'></dd>
			</dl>
			<dl>
				<dt></dt>
				<dd class='text'>
					<select name="school_name" id="">
						<option value="">学校地址</option>
						<?php if(is_array($school)):?><?php  foreach($school as $k=>$v){ ?>
						<option value="<?php echo $v['school_name'];?>"><?php echo $v['school_name'];?></option>
						<?php }?><?php endif;?>
					</select>
				</dd>
				<dd class='prompt'></dd>
			</dl>
			<dl>
				<dt>宿舍地址：(必填)</dt>
				<dd class="select_room">
					<select name="user_floor" id="" >
						<option value="">幢</option>
						<option value="128">128</option>
						<option value="210">210</option>
						<option value="211">211</option>
						<option value="212">212</option>
						<option value="213">213</option>
						<option value="214">214</option>
						<option value="215">215</option>
						<option value="217">217</option>
					</select>
					<select name="user_level" id="" >
						<option value="">层</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
					</select>
					<select name="user_room" id="" >
						<option value="">房号</option>
						<option value="01">01</option>
						<option value="02">02</option>
						<option value="03">03</option>
						<option value="04">04</option>
						<option value="05">05</option>
						<option value="06">06</option>
						<option value="07">07</option>
						<option value="08">08</option>
						<option value="09">09</option>
					</select>
				</dd>
			</dl>
		
	
	<div class="sky-form">
		<label class="checkbox"><input type="checkbox" name="checkbox" ><i></i>我同意shoppe.com &nbsp;<a class="terms" href="#"> 服务条例</a> </label>
	</div>
	<dl>
			<dt></dt>
			<dd class='submit'><input type="submit" value="注册"></dd>
	</dl>
	</form>
		</div>
	
	</div>
	<!-- /Form -->
		</div>
	</div>
	<div class="registration_left">
		<h2>已有用户</h2>
		<div>
		 <div class="registration_form" id="logincheck1">
		 <!-- Form -->
			<form id="registration_form" action="<?php echo U('Member/Login/login');?>" method="post">
				<div>
				<dl>
					<dt></dt>
					<dd class='text'><input class='must' type="text" url="<?php echo U('Member/Login/loginCheck');?>" ajax=2   name="username1" placeholder="账户名称:" /></dd>
					<dd class='prompt'></dd>
				</dl>
				</div>
				<div>
					<dl>
						<dt></dt>
						<dd class='text'><input class='must' type="password" url="<?php echo U('Member/Login/loginCheck');?>" ajax=2   name="password1" placeholder="密码:" /></dd>
						<dd class='prompt'></dd>
					</dl>
				</div>						
				<div>
					<input type="submit" class = "submit" value="确定" id="register-submit">
				</div>
				<div class="forget">
					<a href="#">忘记密码</a>
				</div>
			</form>
			<!-- /Form -->
			</div>
			</div>
	</div>
	<div class="clearfix"></div>
	</div>
	<!-- end registration -->
</div>
</div>
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
	<!-- 载入公共头部文件-->
</body>

</html>