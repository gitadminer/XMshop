var checkLoginForm = {
	'username1':{
		focus:'请填写你的用户名或邮箱!',
		empty:'不能为空',
	},
	'password1':{
		focus:'请填写你的密码!',
		empty:'密码不能为空',
		error:'密码错误'	
	},
		
};
$(function(){
	checklogin();
	$('#registration_form').submit(function(){
		for(var i=0;i<aEls1.length;i++){
			if(aEls1[i].status === false){
				//显示提示信息
				return false;
			}
		}
	})
})
//原生的元素集合
var aEls1 = [];
function checklogin(){
	var aMust = $('#registration_form .must');
	aMust.each(function(){
		aEls1.push(this);
		this.status = false;
	})
	/**
	 * 添加表单事件
	 */
	for(var i=0;i<aEls1.length;i++){
		aEls1[i].onfocus=function(){
			var name = this.name;
			var msg = checkLoginForm[name]['focus'];
			showFocus.call(this,msg);
			this.onblur=function(){
				var val = this.value;
				//为空的情况
				if(val == ''){
					var msg = checkLoginForm[name]['empty'];
					showError.call(this,msg);
					return;
				}
				
				//需要ajax校验的
				if($(this).attr('ajax') == 2){
					var url = $(this).attr('url');
					var self = this;
					$.ajax({
						url:url,
						type:'POST',
						data:name+'='+val,
						dataType:'json',
						success:function(result){
							if(result.status === true){
								showSuccess.call(self,'');
							}else{
								showError.call(self,result.msg);
							}
						}
					})
				}else{
					showSuccess.call(this,'');
				}
			}
		}
	}
	
}