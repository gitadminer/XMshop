<?php
class RegModel extends viewModel{
	public $table = 'user';
	public $view;
	/*  
	 * ajax表单验证
	 */
	public function check($field,$value){
		return $this->table('user')->where(array($field=>$value))->count();
	}
	/*  
	 * 添加用户
	 *$data 需要添加的用户数据
	 */
	public function addUser($data){
		$uid = $this->table('user')->add($data);
		return $uid;
	}
}