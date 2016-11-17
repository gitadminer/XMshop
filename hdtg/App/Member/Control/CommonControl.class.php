<?php
 class CommonControl extends Control{
 	protected $db; //数据库连接;
 	protected $uid;
 	public function __init(){
 		//如果没有登录跳转到登录界面
 		if(!isset($_SESSION[C('RBAC_AUTH_KEY')])){
 			go(U('Member/Reg/index'));
 			exit;	
 		}
 		//执行子控制器的方法
 		if(method_exists($this,'__auto')){
 			$this->__auto();
 		}
 		//配置uid
 		$this->uid = (int)$_SESSION[C('RBAC_AUTH_KEY')];
 		$this->assign('userIsLogin',isset($_SESSION[C('RBAC_AUTH_KEY')]));
 			
 	}
 	public function getCategoryhead(){
 		$db = k('Index/index');
 		$categoryhead = $db->getCategoryhead();//获得分类信息
 		$this->assign('categoryhead', $categoryhead);
 	}
 	
 	
 	
 	
 	
 	
 	
 	
 	
 	
 	
 	
 	
 }