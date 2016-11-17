<?php
class GoodsModel extends ViewModel{
	public  $table ='goods';
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
	 * 添加商品
	 */
	public function addGoods($data){
		$gid=$this->table('goods')->add($data['goods']);
		$data['goods_detail']['goods_id'] = $gid;
		return $this->table('goods_detail')->add($data['goods_detail']);
	}
	/*  
	 *获得商品的总数量
	 */
	public function getGoodsTotal(){
		return $this->count();
	}
	
	/*  
	 * 获得全部的商品
	 */
	public function getGoodsAll($limit){
		return $this->limit($limit)->select();
		
	}
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
	/*  
	 * 修改商品数据
	 */
	public function editGoods($data,$gid){
		$count = 0;
// 		echo "<pre>";
// 		var_dump($data);exit;
		$this->table('goods')->where(array('gid'=>$gid))->save($data['goods']);
		$count +=$this->getAffectedRows();
		$this->table('goods_detail')->where(array('goods_id'=>$gid))->save($data['goods_detail']);
		$count +=$this->getAffectedRows();
		return $count;
	}
	/*  
	 * 删除该条商品
	 */
	public function delGoods($gid){
		$count = 0;
		$count +=$this->table('goods_detail')->where(array('goods_id'=>$gid))->del();
		$count +=$this->table('goods')->where(array('gid'=>$gid))->del();
		return ($count==2);
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
}