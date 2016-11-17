<?php
class GoodsModel extends ViewModel{
	public $table = 'goods';
	public $keywords = null;
	public $view = array(
			'category'=>array(
					'type'=>'inner',
					'on'=>'category.cid=goods.cid'
			),
	);
	/* 
	 * 导航栏商品查询
	 */
	public function searchGoods($cid,$limit){
		if($date=$this->where(array('goods.cid'=>$cid))->limit(4)->order('gid DESC')->select()){
			return $date;
		}else{
			return array();
		}
	}
}