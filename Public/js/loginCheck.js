var checkForm = {
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
	check();
	$('#loginForm').submit(function(){
		for(var i=0;i<aEls11.length;i++){
			if(aEls11[i].status === false){
				//显示提示信息
				return false;
			}
		}
	})
})
//原生的元素集合
var aEls11 = [];
function check(){
	var aMust = $('#loginForm .must');
	aMust.each(function(){
		aEls11.push(this);
		this.status = false;
	})
	/**
	 * 添加表单事件
	 */
	for(var i=0;i<aEls11.length;i++){
		aEls11[i].onfocus=function(){
			var name = this.name;
			var msg = checkForm[name]['focus'];
			showFocus.call(this,msg);
			this.onblur=function(){
				var val = this.value;
				//为空的情况
				if(val == ''){
					var msg = checkForm[name]['empty'];
					showError.call(this,msg);
					return;
				}
				
				//需要ajax校验的
				if($(this).attr('ajax') == 1){
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

/**
 * 显示获得焦点的
 * @param msg
 */
function showFocus(msg){
	var parent = $(this).parents('dl');
	var oPrompt = parent.find('.prompt');
	parent.attr('class','focus');
	oPrompt.html(msg);
}

/**
 * 显示错误提示
 */
function showError(msg){
	var parent = $(this).parents('dl');
	var oPrompt = parent.find('.prompt');
	parent.attr('class','error');
	oPrompt.html(msg);
	this.status = false;
}
/**
 * 显示成功信息的
 */
function showSuccess(msg){
	var parent = $(this).parents('dl');
	var oPrompt = parent.find('.prompt');
	parent.attr('class','success');
	oPrompt.html(msg);
	this.status = true;
}