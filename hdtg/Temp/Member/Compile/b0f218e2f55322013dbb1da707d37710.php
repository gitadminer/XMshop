<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_WARNING",false);?><?php if(!defined("HDPHP_PATH"))exit;C("SHOW_WARNING",false);?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<script type='text/javascript' src="http://www.shop.com/Public/js/jquery-1.11.1.min.js"></script>
<link href="http://www.shop.com/Public/css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="http://www.shop.com/Public/css/style.css" rel='stylesheet' type='text/css' />
<link href="http://www.shop.com/Public/css/register.css" rel="stylesheet" type='text/css' />
<link href="http://www.shop.com/Public/css/reset.css" rel='stylesheet' type='text/css' />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='http://fonts.useso.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.useso.com/css?family=Playfair+Display:400,700,900' rel='stylesheet' type='text/css'>
<!-- start menu -->
<link href="http://www.shop.com/Public/css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="http://www.shop.com/Public/js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<script src="http://www.shop.com/Public/js/menu_jquery.js"></script>
<script src="http://www.shop.com/Public/js/simpleCart.min.js"> </script>
<script src="http://www.shop.com/Public/js/Login.js"></script>
<script src="http://www.shop.com/Public/js/bootstrap.min.js"></script>
<script src="http://www.shop.com/Public /js/loginCheck.js"></script>
<meta name="keywords" content="" />
<meta name="description" content="" />
<title><?php echo $webInfo['title'];?></title>
<style>
.search input[type="submit"]{
	background: url('http://www.shop.com/Public/images/search.png') no-repeat 0px 1px;
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
  background: url(http://www.shop.com/Public/images/img-sprite.png) no-repeat -235px -39px;
  vertical-align: middle;
  margin-right: 0.5em;
}
i.add {
  width: 17px;
  height: 24px;
  display: inline-block;
  background: url(http://www.shop.com/Public/images/img-sprite.png) no-repeat -236px -11px;
  vertical-align: middle;
  margin-right: 0.5em;
}
i.mail {
  width: 17px;
  height: 14px;
  display: inline-block;
  background: url(http://www.shop.com/Public/images/img-sprite.png) no-repeat -236px -76px;
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
					<li><a href="#">帮助</a></li>|
					<li><a href="contact.html">联系</a></li>|
					<li><a href="#">投递信息</a></li>
				</ul>
			</div>
			<div class="top_left">
				<h2><span></span> 电话 : 032 2352 782</h2>
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
			<a href="<?php echo U('Index/Index/index');?>"><img src="http://www.shop.com/public/images/logo.png" class="img-responsive" alt=""/> </a>
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
					<h3> <span class="btn btn-default">我的购物车</span><img src="http://www.shop.com/public/images/bag.png" alt=""></h3>
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
	
<script type="text/javascript" src="http://www.shop.com/hdtg/App/Member/Tpl/Public/js/goods.js"></script>
<script type="text/javascript" src="http://www.shop.com/hdtg/App/Member/Tpl/Public/js/hdui.js"></script>
<link rel="stylesheet" href="http://www.shop.com/hdtg/App/Member/Tpl/Public/css/hdui.css" />
<link href="http://www.shop.com/hdphp/Extend/Org/JqueryUi/css/flick/jquery-ui-1.10.3.custom.css" rel="stylesheet"><script src="http://www.shop.com/hdphp/Extend/Org/JqueryUi/js/jquery-ui-1.10.3.custom.js"></script>
<div id="map">
	<span class='title'>添加商品</span>
</div>
<div id="content">
	<form id="goodsForm" action="<?php echo U('Member/Goods/edit');?>/gid/<?php echo $goods['gid'];?>" method="post">
	<table class='table table-striped table-bordered'>
		<thead>
			<tr>
				<th width="20%">名称</th>
				<th>值</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>分类名称</td>
				<td>
					<select name="cid" >
						<?php if(is_array($category)):?><?php  foreach($category as $v){ ?>
							<option value="<?php echo $v['cid'];?>"><?php echo $v['html'];?><?php echo $v['cname'];?></option>	
						<?php }?><?php endif;?>
					</select>
				</td>
			</tr>
			<tr>
				<td>商品主标题</td>
				<td>
					<input type="text" name="main_title" value="<?php echo $goods['main_title'];?>"/>
				</td>
			</tr>
			<tr>
				<td>商品副标题</td>
				<td>
					<textarea name="sub_title"><?php echo $goods['sub_title'];?></textarea>
				</td>
			</tr>
			<tr>
				<td>现价</td>
				<td>
					<input type="text" name="price" value="<?php echo $goods['price'];?>"/>
				</td>
			</tr>
			<tr>
				<td>原价</td>
				<td>
					<input type="text" name="old_price" value="<?php echo $goods['old_price'];?>"/>
				</td>
			</tr>
			<tr>
				<td>上架时间</td>
				<td>
					<input id="begin_time" type="text" name="begin_time" value="<?php echo date('Y-m-d',$goods['begin_time']);?>"/>
				</td>
			</tr>
			<tr>
				<td>下架时间</td>
				<td>
					<input id="end_time" type="text" name="end_time" value="<?php echo date('Y-m-d',$goods['end_time']);?>"/>
				</td>
			</tr>
			
			
			<tr>
				<td>商品展示图</td>
				<td>
					<link rel="stylesheet" type="text/css" href="http://www.shop.com/hdphp/Extend/Org/Uploadify/uploadify.css" />
            <script type="text/javascript" src="http://www.shop.com/hdphp/Extend/Org/Uploadify/jquery.uploadify.min.js"></script>
            <script type="text/javascript">
            var HDPHP_CONTROL         = "http://www.shop.com/index.php/Member/Goods";
            var UPLOADIFY_URL    = "http://www.shop.com/hdphp/Extend/Org/Uploadify/";
            var HDPHP_UPLOAD_THUMB    ="556,387,600,400,170,250";
HDPHP_UPLOAD_TOTAL = 0</script>
            <script type="text/javascript" src="http://www.shop.com/hdphp/Extend/Org/Uploadify/hd_uploadify.js"></script>
<script type="text/javascript">
    $(function() {
        hd_uploadify_options.removeTimeout  =0;
        hd_uploadify_options.fileSizeLimit  ="2MB";
        hd_uploadify_options.fileTypeExts   ="*.jpg;*.png;*.gif";
        hd_uploadify_options.queueID        ="hd_uploadify_goods_img_queue";
        hd_uploadify_options.showalt        =true;
        hd_uploadify_options.uploadLimit    =1;
        hd_uploadify_options.success_msg    ="正在上传...";//上传成功提示文字
        hd_uploadify_options.formData       ={image : "1", someOtherKey:1,hdsid:"448crgcg882p08phv09gfeucb2",upload_dir:"",hdphp_upload_thumb:"556,387,600,400,170,250"};
        hd_uploadify_options.thumb_width          =200;
        hd_uploadify_options.thumb_height          =150;
        hd_uploadify_options.uploadsSuccessNums = 0;

        $("#hd_uploadify_goods_img").uploadify(hd_uploadify_options);
        });
</script>
<input type="file" name="up" id="hd_uploadify_goods_img"/>
<div tool="hd_uploadify_goods_img_msg uploadify_upload_msg">
</div>
<div id="hd_uploadify_goods_img_queue"></div>
<div class="hd_uploadify_goods_img_files uploadify_upload_files" input_file_id ="hd_uploadify_goods_img">
    <ul></ul>
    <div style="clear:both;"></div>
</div>
					原图：<img width="200" src = "http://www.shop.com/<?php echo $goods['goods_img'];?>"/>
					<input type="hidden" name="old_img" value="<?php echo $goods['goods_img'];?>"/>
				</td>
			</tr>	
			<tr>
				<td>商品服务</td>
				<td>
					<?php if(is_array($server)):?><?php  foreach($server as $k=>$v){ ?>
						<?php if(in_array($k,$goods['goods_server'])){?>
						<label>
							<input type="checkbox" name="goods_server[]" checked=true value="<?php echo $k;?>">
							<?php echo $v['name'];?>
						</label>
						<?php }else{?>
						<label>
							<input type="checkbox"  name="goods_server[]" value="<?php echo $k;?>">
							<?php echo $v['name'];?>
							<?php } ?>
						</label>
					<?php }?><?php endif;?>
				</td>
			</tr>	
			<tr>
				<td>商品细节展示</td>
				<td>
					<script type="text/javascript" charset="utf-8" src="http://www.shop.com/hdphp/Extend/Org/Editor/Ueditor/ueditor.config.js"></script><script type="text/javascript" charset="utf-8" src="http://www.shop.com/hdphp/Extend/Org/Editor/Ueditor/ueditor.all.min.js"></script><script type="text/javascript">UEDITOR_HOME_URL="http://www.shop.com/hdphp/Extend/Org/Editor/Ueditor/"</script><script id="hd_detail" name="detail" type="text/plain"></script>
    <script type='text/javascript'>
        var ue = UE.getEditor('hd_detail',{
        imageUrl:'http://www.shop.com/index.php/Member/Goods&m=ueditor_upload&water=1&uploadsize=2000000&maximagewidth=false&maximageheight=false'//处理上传脚本
        ,zIndex : 0
        ,autoClearinitialContent:false
        ,initialFrameWidth:"100%" //宽度1000
        ,initialFrameHeight:"300" //宽度1000
        ,autoHeightEnabled:false //是否自动长高,默认true
        ,autoFloatEnabled:false //是否保持toolbar的位置不动,默认true
        ,maximumWords:2000 //允许的最大字符数
        ,initialContent:'<?php echo $goods['detail'];?>' //初始化编辑器的内容 也可以通过textarea/script给值
        ,readonly : false //编辑器初始化结束后,编辑区域是否是只读的，默认是false
        ,wordCount:true //是否开启字数统计
        
    });
    </script>
				</td>
			</tr>	
			<tr style="height:100px;">
				<td></td>
				<td><input type="submit" class='btn btn-success' value="确认修改" /></td>
			</tr>
		</tbody>
	</table>
	</form>
	
	
	
</div>
<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_WARNING",false);?>
	<div class="footer">
	<div class="container">
		<div class="col-md-3 cust">
			<h4>客户问题</h4>
				<li><a href="#">帮助中心</a></li>
				<li><a href="#">疑问FAQ</a></li>
				<li><a href="buy.html">如何购物</a></li>
				<li><a href="#">投递</a></li>
		</div>
		<div class="col-md-2 abt">
			<h4>关于我们</h4>
				<li><a href="#">我们的故事</a></li>
				<li><a href="#">出版</a></li>
				<li><a href="#">职业</a></li>
				<li><a href="contact.html">联系</a></li>
		</div>
		<div class="col-md-2 myac">
			<h4>我的账户</h4>
				<li><a href="register.html">注册</a></li>
				<li><a href="#">我的购物车</a></li>
				<li><a href="#">浏览历史</a></li>
				<li><a href="buy.html">付款</a></li>
		</div>
		<div class="col-md-5 our-st">
			<div class="our-left">
				<h4>联系方式</h4>
			</div>
			<div class="clearfix"> </div>
				<li><i class="add"> </i>广东省广东邮电职业技术学院</li>
				<li><i class="phone"> </i>18924244166</li>
				<li><a href="mailto:info@example.com"><i class="mail"> </i>1030697048@qq.com </a></li>
			
		</div>
		<div class="clearfix"> </div>
			<p>本网站仅用于参加本团队比赛使用  &copy; 最终解析权归本团队所有</p>
	</div>
</div>
	</body>
</html>