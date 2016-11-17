$(function(){
	$('.reduceGoods').click(function(){
		var oGoodsNum  = $(this).parent().find('.goodsNum');
		var goodsNum = Number(oGoodsNum.val())-1;
		ajaxUpdateGoodsNum(goodsNum,oGoodsNum)
	})
	$('.addGoods').click(function(){
		var oGoodsNum  = $(this).parent().find('.goodsNum');
		var goodsNum =  Number(oGoodsNum.val())+1;
		ajaxUpdateGoodsNum(goodsNum,oGoodsNum);
	})
	/**
	 * 异步更新购物车商品数
	 */
	function ajaxUpdateGoodsNum(goodsNum,oGoodsNum){
		if(goodsNum <=0){
			return false;
		}
		var gid = oGoodsNum.attr('gid');
		var url = oGoodsNum.attr('url');
		$.ajax({
			url:url,
			type:'POST',
			data:'gid='+gid+'&num='+goodsNum,
			dataType:'json',
			success:function(result){
				if(result.status === true){
					oGoodsNum.val(result.num);
				}
			}
		})
	}
})
$(function(){
$('#my-cart').click(function(){
		var url = $(this).attr('url');
		$.ajax({
			url:url,
			dataType:'json',
			success:function(result){
				if(result.status === true){
					location.replace(location) 
				}else{
					alert('删除失败!');
				}
			}
		})
	})
})



