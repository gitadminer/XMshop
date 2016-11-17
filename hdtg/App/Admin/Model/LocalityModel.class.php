<?php
class LocalityModel extends Model{
	
	public $table = 'locality';
	
	/***
	 * 查询所有的学校数据
	 */
	public function getLocalityAll(){
		return $this->select();
	}
	
	/**
	 * 添加学校
	 */
	public function addLocality($data){
		return $this->add($data);
	}
	
	/*  
	 * 获取地区学校信息
	 */
	public function getParentInfo($lid){
		$result = $this->field('school_name,lid')->where(array('lid'=>$lid))->find();
		if($result){
			return $result;
		}else{
			return array('school_name'=>'广东邮电职技术学院','lid'=>0);
		}
	}
	
	/*
	 * 编辑学校信息
	*/
	public function getLocalityFind($lid){
		return $this->where(array('lid'=>$lid))->find();
	}
	
	/*  
	 * 
	 * 保存修改数据
	 */
	public function editLocality($data,$lid){
		$this->where(array('lid'=>$lid))->save($data);
		return  $this->getAffectedRows();
	}
	
	/*  
	 * 删除学校
	 * @parmar $lid需要删除的地区id
	 */
	public function delLocality($lid){
		return $this->where(array('lid'=>$lid))->del();
	}
	
	
	
	
	
	
	
	
}














?>