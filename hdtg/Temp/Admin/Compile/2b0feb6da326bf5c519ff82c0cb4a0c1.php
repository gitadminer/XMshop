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
<link href="http://www.shop.com/hdphp/Extend/Org/HdUi/css/hdui.css" rel="stylesheet" media="screen"><script src="http://www.shop.com/hdphp/Extend/Org/HdUi/js/hdui.js"></script>
<link href="http://www.shop.com/hdtg/App/Admin/Tpl/Public/css/reg.css" type="text/css" rel="stylesheet" >
<script src="http://www.shop.com/hdtg/App/Admin/Tpl/Public/js/regCheck.js"></script> 
<script>
		var __JSCONTROL__ = 'http://www.shop.com/index.php/Admin/User';
	</script>
	<div id="map">
	<span class='title'>添加会员</span>
	</div>
	<div id="regBox">
		<div class='form'>
		<form action="<?php echo U('Admin/User/adduser');?>" method="post" id="regForm">
			<dl>
				<dt>用户名：</dt>
				<dd class='text'><input class='must' type="text"  ajax=1   name="username" /></dd>
				<dd class='prompt'></dd>
			</dl>
			<dl>
				<dt>创建密码：</dt>
				<dd class='text'><input class='must' id="password" type="password" name="password"/></dd>
				<dd class='prompt'></dd>
			</dl>
			<dl>
				<dt>确认密码：</dt>
				<dd class='text'><input class='must' type="password" name="password_d"/></dd>
				<dd class='prompt'></dd>
			</dl>
			<dl class='focus'>
				<dt>邮箱：</dt>
				<dd class='text'><input class='must' type="text" ajax=1   name="email" /></dd>
				<dd class='prompt'>用于登录和找回密码，不会公开</dd>
			</dl>
			<dl>
				<dt>电话号码：</dt>
				<dd class='text'><input class='must' type="text" ajax=1   name="phone" /></dd>
				<dd class='prompt'></dd>
			</dl>
			<dl>
				<dt>学校地址：</dt>
				<dd class='text'>
					<select name="school_name" id="">
						<option value="">学校地址</option>
						<option value="<?php echo $school['school_name'];?>"><?php echo $school['school_name'];?></option>
					</select>
				</dd>
				<dd class='prompt'></dd>
			</dl>
			<dl>
				<dt>宿舍地址：</dt>
				<dd>
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
					<dd>
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
					<dd>
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
			<dl>
				<dt></dt>
				<dd class='submit'><input type="submit" value="注册"></dd>
			</dl>
		</form>
		</div>
	</div>
</body>
</html>