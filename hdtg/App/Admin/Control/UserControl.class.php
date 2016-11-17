<?php
class UserControl extends CommonControl{
	public $uid;
	public function __auto(){
		$this->db = k('User');
		$this->uid=$this->_get('uid','intval');
	}
	/*  
	 * 用户列表
	 */
	public function index(){
		$user=$this->db->getUserInfo();
		$this->assign('user', $user);
		$this->display();
	}
	
	/*  
	 * 修改用户信息
	 */
	public function edit(){
		if(IS_GET){
				$userinfo = $this->db->getUserFind($this->uid);
				$this->assign('userinfo',$userinfo);
				$this->display();
		}
	}
	
	public function check(){
		
		//验证是否为ajax请求
		if(IS_AJAX === false)	throw new Exception('非法请求');
		
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
	 * 添加用户
	*/
	public function add(){
		if(IS_GET == true){
		$school=$this->db->getLocalitySchool();
		$this->assign('school', $school);
		$this->display();
		}	
	}
	
	/*  
	 * 添加用户的数据插入
	 */
	public function adduser(){
		if(IS_POST === false ) throw new Exception('请求非法!');
		$data = $this->getData();
		if($this->db->adduser($data)){
			$this->success('添加成功',U('Admin/User/index'));
		}else{
			throw new Exception('添加失败');
	  }
	}
	
	/*
	 * 删除用户
	*/
	public function del(){
		if($this->db->delUser($this->uid)){
			$this->success('删除成功',U('Admin/User/index'));
		}else{
			throw new Exception('删除失败');
		}
	}
	/*
	 * 验证表单
	*/
	/*  
	 * 添加用户
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










}

