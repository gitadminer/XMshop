<?php
class GoodsControl extends CommonControl{
	//初始化
	public function __auto(){
		$this->db= K('Goods');
		$this->gid = $this->_get('gid','intval');
		$this->getRegName();
		$this->assign('userIsLogin', isset($_SESSION[C('PBAC_AUTH_KEY')]));
	}
	
	/*  
	 * 显示商品
	 */
	public function index(){
		$this->getCategoryhead();
		$total = $this->db->getGoodsTotal();
		$page = new Page($total,4);
		$good = $this->db->getGoodsAll($this->uid,$page->limit());
		$goods = $this->disGoods($good);
		$this->assign('goods',$goods);
		$this->assign('page',$page->show());
		$this->assign('title', '我的商品');
		$this->setNav();
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
	/*  
	 * 添加商品
	 */
	public function add(){
		if(IS_GET==true){
			$this->getCategoryhead();
			$this->setCategory();
			$this->assign('goods_server', C('goods_server'));
			$this->display();
			$this->assign('title', '添加商品');
			exit;
		}
		$data = $this->getData();
		//p($data);exit;
		if($this->db->addGoods($data)){
			$this->success('添加成功',U('Member/Goods/index'));
		}else{
			throw new Exception('添加商品失败！');
		}
	}


	/*  
	 * 商品编辑
	 */
	public function edit(){
	if(IS_GET == true){
		$this->getCategoryhead();
		$goods = $this->db->getGoodsFind($this->gid);
		$this->setCategory();
		$this->assign('server',C('goods_server'));
		$goods['goods_server'] = unserialize($goods['goods_server']);
		$this->assign('goods',$goods);
		$this->display();
		$this->assign('title', '编辑我的商品');
		exit;
	  }
	  $data = $this->getData();
	  if($this->db->editGoods($data,$this->gid)){
	  	$this->success('编辑成功','Member/Goods/index');
	  }else{
	  	throw new Exception('编辑失败！');
	  }
	}
	/*  
	 * 商品删除
	 */
	public function del(){
		if($this->db->delGoods($this->gid)){
			$this->success('删除成功',U('Member/Goods/index'));
		}else{
			throw new Exception('删除失败');
		}
	}
	/*  
	 * 获取商品数据
	 */
	public function getData(){
		$data = array();
		$data['goods']['uid'] = $this->uid;
		$data['goods']['cid'] = $this->_post('cid','intval');
		$data['goods']['price']=$this->_post('price','intval');
		$data['goods']['old_price'] = $this->_post('old_price','intval');
		$data['goods']['main_title'] = $this->_post('main_title','strip_tags');
		$data['goods']['sub_title'] = $this->_post('sub_title','strip_tags');
		$data['goods']['begin_time'] = $this->_post('begin_time','strtotime');
		$data['goods']['end_time'] = $this->_post('end_time','strtotime');
		if(isset($_POST['goods_img'])){
			if(isset($_POST['old_img'])){
				$this->delOldFile($_POST['old_img']);
			}
			$data['goods']['goods_img'] = $_POST['goods_img'][1]['path'];
		}
		$data['goods_detail']['detail'] = $_POST['detail'];
		$data['goods_detail']['goods_server'] = serialize($_POST['goods_server']);
		return $data;
	}
	/*  
	 * 删除更改前的照片
	 */
	public function delOldFile($img){
		$pathInfo = pathinfo($img);
		//460,280,90,55
		$oldFiles=array(
				ROOT_PATH.$img,
				ROOT_PATH.$pathInfo['dirname'].'/'.$pathInfo['filename'].'_556x387.'.$pathInfo['extension'],
				ROOT_PATH.$pathInfo['dirname'].'/'.$pathInfo['filename'].'_170x250.'.$pathInfo['extension'],
				ROOT_PATH.$pathInfo['dirname'].'/'.$pathInfo['filename'].'_600x400.'.$pathInfo['extension'],
		);
		//var_dump($oldFiles);exit;
		foreach ($oldFiles as $v){
			
			if(file_exists($v)) unlink($v);
		}
		
	}
	/*  
	 * 设置商品分类
	 */
	public function setCategory(){
		$db = K('Admin/category');
		$data = $db->getCategoryAll();
		$category = Data::channel($data,'cid','pid',0,0,2,'--');
		$this->assign('category',$category);	
	}
	/*
	 * 获取分类
	*/
	private function setNav(){
		$category = K('Admin/Category');
		$categorys = $category ->getCategoryAll();
		$this->assign('category', $categorys);
	}
	/*
	 * 获取登录成功的用户信息
	*/
	private function getRegName(){
		if(isset($_SESSION[C('RBAC_AUTH_KEY')])){
			$uid=$_SESSION[C('RBAC_AUTH_KEY')];
			$db= K('Index/Index');
			$username= $db->getUsername($uid);
			$this->assign('username', $username);
		}
	}






}




