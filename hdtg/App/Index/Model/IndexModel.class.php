<?php
class IndexModel extends ViewModel{
	public $table = 'user';

	/*  
	 * 获取当前登录的用户的用户名
	 */
	public function getUsername($uid){
		return $this->table('user')->where(array('uid'=>$uid))->find();
	}
	/*  
	 *获得商品的总数量
	 */
	public function getGoodsTotal(){
		return $this->table('goods')->count();
	}
	
	/*  
	 * 获得全部的商品
	 */
	public function getGoodsAll($limit){
		return $this->table('goods')->limit($limit)->order('gid DESC')->select();	
	}
	/*  
	 * 获得当前分类id及子类id
	 * */
	public function searchCid($cid){
		if($date = $this->table('category')->field('cid')->where(array('pid'=>$cid))->select()){
			return $date;
		}else{
			return array();
		}
	}
	/*
	 * 获得当前分类id及子类id
	* */
	public function searchLikeCid($likeword){
		$where ='keywords like "%'.$likeword.'%"';
		if($date = $this->table('category')->field('cid')->where($where)->select()){
			return $date;
		}else{
			return array();
		}
	}
	/*  
	 * 获得顶级分类
	 */
	public function getCategoryhead(){
		return $this->table('category')->where(array('pid'=>0))->select();
	}
	
}