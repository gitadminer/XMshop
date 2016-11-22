<?php
if (!defined("HDPHP_PATH"))exit('No direct script access allowed');
//更多配置请查看hdphp/Config/config.php
return array(
		/**************** url配置 ********************/
		"PATHINFO_HTML"    => "",     //伪静态扩展名
		
		/***************** 数据库的配置 ***************/
		"DB_DRIVER"                     => "mysql",    //数据库驱动
		"DB_HOST"                       => "localhost", //数据库连接主机  如127.0.0.1
		"DB_PORT"                       => 3306,        //数据库连接端口
		"DB_USER"                       => "root",      //数据库用户名
		"DB_PASSWORD"                   => "root",          //数据库密码
		"DB_DATABASE"                   => "shop",    //数据库名称
		"DB_PREFIX"                     => "group_",     //表前缀
		"DB_FIELD_CACHE"                => 1,           //字段缓存
		"DB_BACKUP"                     => ROOT_PATH . "backup/".time(), //数据库备份目录

	/***************** 商品服务   ***************/
		'goods_server'=>array(
			1=>array(
				'name'=>'假一赔十',
				'img'=>'<span class="ico" style="background-position:0px -92px;"></span>'
			),
			2=>array(
				'name'=>'支持随时退款',
				'img'=>'<span class="ico" style="background-position:0px 0px;"></span>'
			),
			3=>array(
				'name'=>'7天无理由退换货',
				'img'=>'<span class="ico" style="background-position:0px -62px;"></span>'
			),
			4=>array(
				'name'=>'不支持随时退款',
				'img'=>'<span class="ico" style="background-position:0px -121px;"></span>'
			),
			5=>array(
				'name'=>'不支持7天退换货',
				'img'=>'<span class="ico" style="background-position:0px -182px;"></span>'
			)
),
	/*************** 文件上传的 ***************/
	"UPLOAD_PATH"                   => ROOT_PATH . "/upload/".date('Y-m',time()), //上传路径
	/****************** rbac ***************/
	"RBAC_AUTH_KEY"                 => "uid",      //用户SESSION名
	"COOKIE_LIFT_TIME" => 864000,
	
	/********************************SESSION********************************/
	"SESSION_AUTO"                  => 1,           //自动开启SESSION
	"SESSION_NAME"                  => "hdsid",     //session_name
	"SESSION_ENGINE"                => "file",      //引擎:file,mysql,memcache
	"SESSION_SAVE_PATH"             => "/www/users/H10044210/TMP",          //以文件处理时的位置
	"SESSION_LIFETIME"              => 1440,        //SESSION过期时间
	"SESSION_TABLE_NAME"            => "session",   //SESSION的表名
	"SESSION_GC_DIVISOR"            => 10,          //SESSION清理频率,数字越小清理越频繁
	"SESSION_MEMCACHE"              => array(       //Memcache配置,支持集群
			"host" => "127.0.0.1",  //主机
			"port" => 11211         //端口
	),
	"SESSION_REDIS"                 => array(       //Redis配置,支持集群
			"host" => "127.0.0.1",          //主机
			"port" => 6379,                 //端口
			"password" => "",               //密码
			"Db" => 0,                      //数据库
	),
);


?>