$(function(){
	$("#localityForm").validation({
		lname: {
			 rule: {
				 maxlen:10,
				 required: true
			 },
			 error: {
				 maxlen: "不能大于10个字符 ",
		         required: "不能为空 "
		     },
		     message: "学校名称长度 1到 20 位 ",
		     success: "学校名称正确"
		 },
		 sort: {
			 rule: {
				 num:"1,100",
				 required: true
			 },
			 error: {
				 num: "排序不能大于100 ",
		         required: "不能为空 "
		     },
		     message: "填写排序1~100之间的数字 ",
		     success: "排序填写正确"
		 }
	})
})