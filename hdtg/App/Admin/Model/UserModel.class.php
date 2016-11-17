<?php
class UserModel extends Model{
	public $table='Locality';
	/*  
	 * 获得学校名字
	 */
	public function getLocalitySchool(){
		return $this->table('locality')->field('school_name')->find();
	}
	/**
	 * 验证字段是否存在
	 * @param  $field
	 * @param  $value
	 * @return int
	 */
	public function check($field,$value){
		return $this->table('user')->where(array($field=>$value))->count();
	}
	
	/*  
	 * 添加用户
	 */
	public function addUser($data){
		return $this->table('user')->add($data);
	}
	/*  
	 * 查找用户信息
	 */
	public function getUserInfo(){
		return $this->table('user')->select();
	}
	
	/*  
	 * 查询修改用户旧信息
	 */
	public function getUserFind($uid){
		return $this->table('user')->find($uid);
	}
	
	/*  
	 * 删除用户
	 */
	public function delUser($uid){
		return $this->table('user')->where(array('uid'=>$uid))->del();
		
	}
}






