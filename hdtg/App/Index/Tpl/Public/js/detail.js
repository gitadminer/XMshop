jQuery(document).ready(function($){
				$('#etalage').etalage({
					thumb_image_width: 500,
					thumb_image_height: 400,
					source_image_width: 900,
					source_image_height: 1200,
					show_hint: true,
					click_callback: function(image_anchor, instance_id){
						alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
					}
				})

			})

$(function(){
	$('#addCart').click(function(){
		var url = $(this).attr('url');
		$.ajax({
			url:url,
			dataType:'json',
			success:function(result){
				if(result.status === true){
					showInfoWindow(cartSucc);
					$('#total').html(result.total);
				}else{
					alert('添加购物车失败');
				}
			}
		})
	})
})

/**
 * 显示信息提示框
 * @param html
 */
function showInfoWindow(html){
	$('#infoWindow').show().css({
		top:$(window).scrollTop()+Math.floor(($(window).height()-$('#infoWindow').innerHeight())/2)
	})
	$('#cover').show().css({
		width:$(window).width(),
		height:$(document).height(),
		position:'absolute',
		left:0,
		top:0,
		background:'#333',
		opacity:0.3,
		zIndex:10000
	})
	$('#infoWindow').html(html);
}
/**
 * 隐藏信息提示框
 */
function hideInfoWindow(){
	$('#infoWindow').hide();
	$('#cover').hide();
}
	
	
	
	
