<?php if(!defined('HDPHP_PATH'))exit;
return array (
  'uid' => 
  array (
    'field' => 'uid',
    'type' => 'int(10) unsigned',
    'null' => 'NO',
    'key' => true,
    'default' => NULL,
    'extra' => 'auto_increment',
  ),
  'email' => 
  array (
    'field' => 'email',
    'type' => 'varchar(32)',
    'null' => 'NO',
    'key' => false,
    'default' => NULL,
    'extra' => '',
  ),
  'uname' => 
  array (
    'field' => 'uname',
    'type' => 'char(16)',
    'null' => 'NO',
    'key' => false,
    'default' => NULL,
    'extra' => '',
  ),
  'password' => 
  array (
    'field' => 'password',
    'type' => 'char(32)',
    'null' => 'NO',
    'key' => false,
    'default' => NULL,
    'extra' => '',
  ),
  'phone' => 
  array (
    'field' => 'phone',
    'type' => 'char(11)',
    'null' => 'NO',
    'key' => false,
    'default' => NULL,
    'extra' => '',
  ),
  'school_name' => 
  array (
    'field' => 'school_name',
    'type' => 'char(40)',
    'null' => 'YES',
    'key' => false,
    'default' => NULL,
    'extra' => '',
  ),
  'user_floor' => 
  array (
    'field' => 'user_floor',
    'type' => 'char(3)',
    'null' => 'YES',
    'key' => false,
    'default' => NULL,
    'extra' => '',
  ),
  'user_level' => 
  array (
    'field' => 'user_level',
    'type' => 'char(1)',
    'null' => 'YES',
    'key' => false,
    'default' => NULL,
    'extra' => '',
  ),
  'user_room' => 
  array (
    'field' => 'user_room',
    'type' => 'char(3)',
    'null' => 'YES',
    'key' => false,
    'default' => NULL,
    'extra' => '',
  ),
);
?>