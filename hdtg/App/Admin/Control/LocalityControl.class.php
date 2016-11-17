<?php
class LocalityControl extends CommonControl{
	private $lid;
	public function __auto(){
		$this->db = K('locality');
		$this->lid = $this->_get('lid','intval',0);
	}
	/**
	 * 显示地区
	 */
	public function index(){
		$data = $this->db->getLocalityAll();
		$this->assign('data',$data);
		$this->display();
	}
	
	
	/**
	 * 添加学校
	 */
	public function add(){
		//如果是get请求,显示模板
		if(IS_GET === true){
			
			//分配用于选择的数据
			$data = $this->db->getLocalityAll();
			//显示模板
			$this->display();
			exit;
		}
		//获取提交的数据
		$data = $this->getData();
		//完成学校的添加
		if($this->db->addLocality($data)){
			$this->success('添加成功','index');
		}else{
			throw new Exception('添加失败!');
		}
	}
	
	/*  
	 * 学校编辑
	 */
	public function edit(){
		if(IS_GET === true){
		$parent=$this->db->getLocalityFind($this->lid);
		$this->assign('parent', $parent);
		$this->display();
		exit;
		}
		$data = $this->getData();
		if($this->db->editLocality($data,$this->lid)){
			$this->success('编辑成功',U('Admin/Locality/index'));
		}else{
			$this->error('编辑失败!');
		}
	}
	
	/*  
	 * 删除学校
	 */
	public function del(){
		if($this->db->delLocality($this->lid)){
			$this->success('删除成功','index');
		}else{
			throw new Exception('删除失败');
		}
	}
	
	/**
	 * 获取地区数据
	 */
	private function getData(){
		$data = array();
		$data['region']=$this->_post('region','intval');
		$data['province']= $this->_post('province','strip_targs');
		$data['city'] = $this->_post('city','strip_targs');
		$data['school_name'] = $this->_post('school_name','strip_targs');
		$data['sort'] = $this->_post('sort','intval');
		$data['display'] = $this->_post('display','intval');
		return $data;
	}
	
	
	
	
	
	
	
}




















?>