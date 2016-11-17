<?php
   class DetailControl extends CommonControl{
   		//初始化
   		public function __auto(){
   			$this->db = K('Detail');
   			$this->getCategoryhead();
   		}
        public function index(){
        	$categorys=$this->getCategory();//获得分类信息
        	//var_dump($_GET);exit;
        	$this->gid= $this->_get('gid','intval');
        	$goods = $this->db->getGoodsFind($this->gid);
        	//$goods['goods_server'] = unserialize($goods['goods_server']);
        	$goods = $this->disDetailData($goods);
        	$userinfo = $this->getRegName();
        	$this->assign('server',C('goods_server'));
        	$this->assign('category', $categorys);
        	$this->assign('goodsuserinfo', $goods);
        	$this->assign('username',$userinfo);
        	$this->assign('title', '商品信息');
        	$this->display();            
        }
        /**
    	 * 处理商品细节数据
    	 */
        private function disDetailData($detail){
        	$detail['zhekou'] = round(($detail['price']/($detail['old_price']-1)*10),1);
        	$pathInfo = pathinfo($detail['goods_img']);
        	$detail['goods_img'] = __ROOT__.'/'.$pathInfo['dirname'].'/'.$pathInfo["filename"].'_600x400.'.$pathInfo['extension'];
        	if($detail['end_time']-time()>(pow(60,2)*24*3)){
        		$detail['end_time'] = '剩余<span>3</span>天以上';
        	}else{
        		$detail['end_time'] = date('Y-m-d H:i:s').'下架';
        	}
        	$goodsServe = array_slice(unserialize($detail['goods_server']),0,2);
        	$serve = C('goods_server');
        	$detail['serve'] = array(
        			$serve[$goodsServe[0]],
        			$serve[$goodsServe[1]]
        	);
        	return $detail;
        }
        
        private function getCategory(){
        	$category = K('Admin/Category');
        	return  $category->getCategoryAll();
        }
        /*  
         * 获得导航数据
         */
        public function getCategoryhead(){
        	$db = k('index');
        	$categoryhead = $db->getCategoryhead();//获得分类信息
        	$this->assign('categoryhead', $categoryhead);
        }
        /*
         * 获取登录成功的用户信息
        */
        private function getRegName(){
        	if(isset($_SESSION[C('RBAC_AUTH_KEY')])){
        		$uid=$_SESSION[C('RBAC_AUTH_KEY')];
        		$db= K('Index');
        		return $db->getUsername($uid);
        	}
        }
        
   }
?>