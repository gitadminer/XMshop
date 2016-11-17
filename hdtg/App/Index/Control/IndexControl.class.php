<?php
/**
 *	首页控制器 
 */
class IndexControl extends CommonControl{
	//初始化
	public function __auto(){
		$this->db = k('Index');
	}
	
    function index(){
    	$categorys = $this->getCategory();//获得分类信息
    	$categoryhead = $this->db->getCategoryhead();//获得分类信息
    	//p($categoryhead);exit;
    	$total = $this->db->getGoodsTotal();
    	$page = new Page($total,4);//设置分页
    	if(isset($_GET['cid'])){
    		$cid = $this->_get('cid','intval');
    		$good = $this->search($cid);
    	}elseif(isset($_GET['like'])){
    		$likeword = $this->_get('like','strip_targs');
    		$good = $this->searchLike($likeword);
    	}else{
    		$good = $this->db->getGoodsAll($page->limit());//获得分页商品的数据
    	}
    	
    	//p($good);exit;
    	$userinfo = $this->getRegName();
    	$goods = $this->disGoods($good);
    	//p($categorys);exit;
    	$this->assign('goods',$goods);
    	$this->assign('page',$page->show());
    	$this->assign('category', $categorys);
    	$this->assign('username',$userinfo);
    	$this->assign('categoryhead',$categoryhead);
    	$this->assign('title', '校拍网');
    	$this->display();
    }
    
    /**
     * 处理查询结果
     */
    private function disGoods($data){
    	if(!is_array($data)) return;
    	foreach ($data as $k=>$v){
    		$pathInfo = pathinfo($v['goods_img']);
    		$data[$k]['goods_img'] = __ROOT__.'/'.$pathInfo['dirname'].'/'.$pathInfo["filename"].'_556x387.'.$pathInfo['extension'];
    	}
    	return $data;
    }
    /**
     * 设置排序规则
     */
    private function setOrder(){
    	$order = '';
    	$arr = explode('-',$this->order);
    	switch ($arr[0]){
    		case 'd':
    			$order = 'begin_time '.$arr[1];
    			break;
    		case 'b':
    			$order = 'buy '.$arr[1];
    			break;
    		case 'p':
    			$order = 'price '.$arr[1];
    			break;
    		case 't':
    			$order = 'begin_time '.$arr[1];
    			break;
    	}
    	$this->db->order = $order;
    }
    public function search($cid){
    	$total = $this->db->getGoodsTotal();
    	$page = new Page($total,4);//设置分页
    	$data= array();
    	$categroy_cid = $this->db->searchCid($cid);
    	if(empty($categroy_cid)){
    		$cids=array();
    	}else{
    	foreach ($categroy_cid as $k => $v){
    		foreach($v as $value){
    		$cids[]=$value;
    		}
    	}}
    	array_unshift($cids,"$cid");
    	$db = k('goods');
    	if($data = $db->searchGoods($cids,$page->limit())){
    		return $data;
    	}else{
    		return false;
    	}
    	
    }
    /*  
     * 获得模糊查询的数据
     */
    public function searchLike($likeword){
    	$total = $this->db->getGoodsTotal();
    	$page = new Page($total,4);//设置分页
    	$data= array();
    	$categroy_cid = $this->db->searchLikeCid($likeword);
    	$db = k('goods');
    	if(empty($categroy_cid)){
    		return $date['msg']='没有找到你查询的商品';
    	}else{
    		foreach ($categroy_cid as $k => $v){
    			foreach($v as $value){
    				$cids[]=$value;
    			}
    		}}
    	if($data = $db->searchGoods($cids,$page->limit())){
    		return $data;
    	}else{
    		return false;
    	}
    }
    
    /*
     * 获得分类信息
    */
    private function getCategory(){
    	$category = K('Admin/Category');
    	return  $category->getCategoryAll();	
    }
    /* 
     * 获取注册成功的用户信息
     */
    private function getRegName(){
    	if(isset($_SESSION[C('RBAC_AUTH_KEY')])){
    		$uid=$_SESSION[C('RBAC_AUTH_KEY')];
    		return $this->db->getUsername($uid);
    	}
    }
    
    
    
    
    
    
}

?>