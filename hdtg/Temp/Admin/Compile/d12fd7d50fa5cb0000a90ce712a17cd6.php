<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_WARNING",false);?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>欢迎来到校园二手商品拍卖后台</title>
<script type='text/javascript' src='http://a615268.sn20908.gzonet.net/hdphp/Extend/Org/Jquery/jquery-1.8.2.min.js'></script>
<link href="http://a615268.sn20908.gzonet.net/hdphp/Extend/Org/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"><script src="http://a615268.sn20908.gzonet.net/hdphp/Extend/Org/bootstrap/js/bootstrap.min.js"></script>
  <!--[if lte IE 6]>
  <link rel="stylesheet" type="text/css" href="http://a615268.sn20908.gzonet.net/hdphp/Extend/Org/bootstrap/ie6/css/bootstrap-ie6.css">
  <![endif]-->
  <!--[if lte IE 7]>
  <link rel="stylesheet" type="text/css" href="http://a615268.sn20908.gzonet.net/hdphp/Extend/Org/bootstrap/ie6/css/ie.css">
  <![endif]-->
<style>
body{background:#d0dee3;}
#loginBox{
	width:496px;
	height:300px;
	position:absolute;
	left:50%;
	top:50%;
	margin-left:-248px;
	margin-top:-120px;
}
#loginBox h1{
	font-size:25px;
	text-align:center;
	color:#333;
	text-shadow:0px 2px 3px #ddd;
}
	
</style>
</head>
<body>
<div id="loginBox">
	<h1>欢迎来到校园二手商品拍卖后台</h1>
	<form class="form-horizontal" id="loginForm" action="<?php echo U('Admin/Login/Login');?>" method="post">
    	<div class="control-group">
    		<label class="control-label" for="inputUser">用户名</label>
    		<div class="controls">
    			<input type="text" name="username" id="inputUser" placeholder="请输入用户名..">
    		</div>
    	</div>
   		<div class="control-group">
    		<label class="control-label" for="inputPassword">密码</label>
    		<div class="controls">
    			<input type="password"  name="password" id="inputPassword" placeholder="请输入密码..">
    		</div>
   		</div>
		<div class="control-group">
    		<label class="control-label" for="inputCode">验证码</label>
    		<div class="controls">
    			<input type="text" style="width:120px;" url="<?php echo U('Admin/Login/checkCode');?>" id="inputCode" placeholder="请输入验证码..">
    			<img  id="codeImg" width="80" height="30"  onclick="change.call(this);" src="<?php echo U('Admin/Login/showCode');?>"/>
			</div>
   		</div>
    	<div class="control-group">
    		<br/>
    		<div class="controls">
    			<button type="submit" class="btn">登陆</button>
    		</div>
    	</div>
    </form>
</div>
<script>
$('#loginForm').submit(function(){
	var code = $('#inputCode').val();
	var url = $('#inputCode').attr('url');
	$.ajax({
		url:url,
		type:'post',
		dataType:'json',
		data:'code='+code,
		success:function(result){
			if(result.status === true){
				$('#loginForm')[0].submit();
				}else{
					alert('验证输入错误');
				}
			}
	})
	return false;
})
	/*  
	切换验证码的方法
	*/
	var codeSrc = $('#codeImg').attr('src');
	function change(){
		$(this).attr('src',codeSrc+'/mt'+Math.random());
	}
</script>


</body>
</html>









