<?php
class UserModel extends ViewModel{
	public $table = 'user';
	public $view;
	
	
	/**  
	 * 获取用户
	 */
	public function getUser($where){
		return $this->where($where)->find();
	}
}