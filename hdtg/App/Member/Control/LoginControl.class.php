<?php
class LoginControl extends Control{
	
	public function __init(){
		$this->setNav();
		$this->assign('userIsLogin', isset($_SESSION[C('PBAC_AUTH_KEY')]));
	} 
	private function setNav(){
		$category = K('Admin/Category');
		$categorys = $category ->getCategoryAll();
		$this->assign('category', $categorys);
	}
	
	/*  
	 *登录验证
	 */
	public function login(){
		if(IS_POST == false) throw new Exception('非法操作');
		$username = $this->_post('username1');
		$password = $this->_post('password1','md5');
		$where = array('uname'=>$username,'or','email'=>$username);
		$this->db = K('user');
		$userinfo=$this->db->getUser($where);
		if($userinfo['password'] == $password){
			$_SESSION[C('RBAC_AUTH_KEY')] = $userinfo['uid'];
			if(isset($_POST['auto_login'])){
				exit(json_encode(array('status'=>true)));
				setcookie(session_name(),session_id(),time()+C('COOKIE_LIFT_TIME'),'/');
			}else{
				setcookie(session_name(),session_id(),0,'/');
			}
			
			$this->success('登陆成功!',U('Index/Index/index'));
		}else{
			$this->error('登录失败!',U('Index/Index/index'));
		}
	}
	/*  
	 * 退出登录
	 */
	public function loginCheck(){
		if(IS_AJAX === false) throw new Exception('非法请求');
		//p($_POST);exit;
		//获取post数据
		$key =  addslashes(key($_POST));
		$value['username'] = addslashes($this->_post('username1'));
		$value['password'] = $this->_post('password1','md5');
		$where = array('uname'=>$value['username'],'or','email'=>$value['username']);
		$this->db = K('user');
		$userinfo=$this->db->getUser($where);
		//查询条件
		switch ($key){
			case 'username1':
				if($userinfo == false){
					$result = array('status'=>false,'msg'=>'用户名不存在');
				}else{
					$_SESSION['password'] = $userinfo['password'];
					$result = array('status'=>true);
				}
				break;
			case 'password1':
				if($_SESSION['password'] !== $value['password']){
					$result = array('status'=>false,'msg'=>'密码不匹配');
				}else{
					exit(json_encode(array('status'=>true)));
				}
				break;
		}
		exit(json_encode($result));
	}
	public function quit(){
		setcookie(session_name(),session_id(),1,'/');
		session_unset();
		session_destroy();
		$this->success('退出成功',U('Index/Index/index'));
	}
	
	
	
}














?>