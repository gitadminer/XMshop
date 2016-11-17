<?php
class RegControl extends Control{
	protected $db;	//数据连接
	//初始化的
	public function __init(){
		if(method_exists($this,'__auto')){
			$this->__auto();
		}
	}
	//初始化数据库
	public function __auto(){
		$this->db = k('Reg');
	}
	/* 
	 * 判断是否存在session
	 */
	public function checkSession(){
		
	} 
	/**
	 * 显示注册界面
	 */
	public function index(){
		$category = K('Admin/Category');
		$categorys = $category ->getCategoryAll();
		$locality = k('Admin/Locality');
		$localitys = $locality->getLocalityAll();
		 /* echo "<pre>";
		 var_dump($localitys);exit; */
		$this->getCategoryhead();
		$this->assign('category', $categorys);
		$this->assign('school',$localitys);
		$this->assign('title', '注册');
		$this->display();
	}
	public function addUser(){
		if(IS_POST === false) throw  new Exception("非法操作"); 
		$data = $this->getData();
		//var_dump($data);exit;
		$uid = $this->db->addUser($data);
		if($uid){
			$_SESSION[C('RBAC_AUTH_KEY')] = $uid;
			setcookie(session_name(),session_id(),time()+C('COOKIE_LIFT_TIME'),'/');
			$this->success('注册成功',U('Index/Index/index'));
		}else{
			$this->error('注册失败',U('Index/Index/index'));
		}
		
	}
	/*  
	 * ajax的验证
	 */
	public function check(){
		//验证是否为ajax请求
		if(IS_AJAX === false) throw new Exception('非法请求');
		$key =  addslashes(key($_POST));
		$value = $this->_post($key);
		switch ($key){
			case 'email':
				if($this->db->check('email',$value)){
					$result = array('status'=>false,'msg'=>'该邮箱已经存在');
				}else{
					$result = array('status'=>true);
				}
				break;
			case 'username':
				if($this->db->check('uname',$value)){
					$result = array('status'=>false,'msg'=>'用户名已经存在');
				}else{
					$result = array('status'=>true);
				}
				break;
			case 'phone':
				if($this->db->check('phone',$value)){
					$result = array('status'=>false,'msg'=>'电话号码已经存在');
				}else{
					$result = array('status'=>true);
				}
				break;
		}
		exit(json_encode($result));
	}
	/*  
	 * 获得数据
	 */
	private function getData(){
		$data=array();
		$data['email'] = $this->_post('email');
		$data['uname'] = $this->_post('username','strip_targs');
		$data['password'] = $this->_post('password','md5');
		$data['phone'] = $this->_post('phone');
		$data['school_name'] =$this->_post('school_name','strip_targs');
		$data['user_floor'] = $this->_post('user_floor','intval');
		$data['user_level'] =$this->_post('user_level','intval');
		$data['user_room'] = $this->_post('user_room','strip_targs');
 		return $data;
	}
	private function getCategoryhead(){
		$db = k('Index/index');
		$categoryhead = $db->getCategoryhead();//获得分类信息
		$this->assign('categoryhead', $categoryhead);
	}
	
	
	
	
	
	
	
	
	
}















?>