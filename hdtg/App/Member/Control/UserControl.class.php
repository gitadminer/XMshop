<?php
class UserControl extends CommonControl{
	public function __auto(){
		$this->assign('userIsLogin', isset($_SESSION[C('PBAC_AUTH_KEY')]));
	}
	
	/* 
	 * 显示用户管理主页
	 */
	public function index(){
		$this->getCategoryhead();
		$this->setNav();
		$username = $this->getRegName();
		$this->assign('username', $username);
		$this->assign('title', '用户中心');
		$this->display();
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
			return $db->getUsername($uid);
		}
	}
}