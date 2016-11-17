<?php
class LoginControl extends Control{
	/*  
	 * 显示登录页面
	 */
	public function index(){
		$this->display();
	}
	
	/*  
	 * 验证码
	 */
	public function showCode(){
		$code = new Code();
		$code->show();
	}
	/*  
	 * 登录验证
	 */
	public function login(){
		if(IS_POST === false) exit();
		$username = $this->_post('username','addslashes','');
		$password = $this->_post('password','md5');
		$db = M('admin');
		//echo "<pre>";
		$where = array('username'=>$username);
		$info = $db->where($where)->find();
		$GLOBALS['info'] = $info;
		if($info['password']!=$password){
			$this->error('登录失败！','index');
		}else{
			$this->edit($info['aid']);
			$_SESSION[C('RBAC_SUPER_ADMIN')] = $info['aid'];
			
			//var_dump($_SESSION);exit;
			$this->success('登录成功',U('Admin/Index/index'));
		}
 	}
	/*  
	 *检验验证码
	 */
	public function checkCode(){
		$data = array('statis' => false);
		if($_SESSION['code'] == strtoupper($_POST['code'])){
			$data['status'] = true;
		}
		exit(json_encode($data));	
	}
	/*  
	 * 退出登录
	 */
	public function logout(){
		$this->time();
		session_destroy();
		session_unset();
		$this->success('退出成功',U('Admin/Login/index'));
	}
	
	/*  
	 * 登录成功完成数据库的更新
	 */
	public function edit($aid){
		$reset =M('admin');
		//定义数组
		$data = array();
		$data['lastloginip'] =$_SERVER['SERVER_ADDR'];
		$data['loginhits'] = $GLOBALS['info']['loginhits']+1;
		$data['status']=0;
		//var_dump($data);exit;
		$where = array('aid'=>$aid);
		$reset->where($where)->save($data);
	}
	/*  
	 * 用户退出时候记住用户退出的时间
	 */
	public function time(){
		$reset =M('admin');
		//var_dump($_SESSION['super_admin']);exit;
		$aid = $_SESSION['super_admin'];
		$data = array();
		$data['lastlogintime'] = time();
		$data['status'] = 1;
		$where = array('aid'=>$aid);
		$reset->where($where)->save($data);
	}
}




















