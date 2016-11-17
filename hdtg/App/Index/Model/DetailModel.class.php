<?php
class DetailModel extends ViewModel{
	public $table = 'goods';
	public $view = array(
			'category'=>array(
					'type'=>'inner',
					'on'=>'category.cid=goods.cid'
		),
			'user'=>array(
					'type'=>'inner',
					'on'=>'user.uid=goods.uid'
		),
	);
	/*
	 * 获取单条商品数据
	*/
	public function getGoodsFind($gid){
		$this->view['goods_detail'] = array(
				'type' =>'inner',
				'on' => 'goods_detail.goods_id = goods.gid'
		);
		return $this->where(array('gid'=>$gid))->find();
	}
	
}