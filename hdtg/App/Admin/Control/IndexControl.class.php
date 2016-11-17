<?php
/**
 * 后台首页控制器
 * @author zhengyin
 * 
 */
class IndexControl extends CommonControl{
	/**
	 * 显示首页
	 */
    public function index(){
    	$admininfo = $this->getAdmin();
    	$this->assign('admininfo',$admininfo);
       $this->display();
    }
    /**
     * 欢迎界面
     */
    public function welcome(){
    	$admininfo = $this->getAdmin();
    	$this->assign('admininfo',$admininfo);
    	//var_dump($admininfo);exit;
    	$this->assign('server',$_SERVER);
    	$this->display();
    }
    /*  
     * 获取管理员信息
     */
    public function getAdmin(){
    	$getdb = M('admin');
    	$aid = $_SESSION['super_admin'];
    	$where = array('aid'=>$aid);
    	return $getdb->where($where)->find();
    }
    
}
?>