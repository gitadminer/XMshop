<?php if(!defined('HDPHP_PATH'))exit;
return array (
  'lid' => 
  array (
    'field' => 'lid',
    'type' => 'smallint(5) unsigned',
    'null' => 'NO',
    'key' => true,
    'default' => NULL,
    'extra' => 'auto_increment',
  ),
  'region' => 
  array (
    'field' => 'region',
    'type' => 'smallint(2)',
    'null' => 'YES',
    'key' => false,
    'default' => NULL,
    'extra' => '',
  ),
  'province' => 
  array (
    'field' => 'province',
    'type' => 'varchar(24)',
    'null' => 'YES',
    'key' => false,
    'default' => NULL,
    'extra' => '',
  ),
  'city' => 
  array (
    'field' => 'city',
    'type' => 'varchar(30)',
    'null' => 'YES',
    'key' => false,
    'default' => NULL,
    'extra' => '',
  ),
  'school_name' => 
  array (
    'field' => 'school_name',
    'type' => 'char(40)',
    'null' => 'NO',
    'key' => true,
    'default' => '',
    'extra' => '',
  ),
  'sort' => 
  array (
    'field' => 'sort',
    'type' => 'smallint(5) unsigned',
    'null' => 'YES',
    'key' => false,
    'default' => '0',
    'extra' => '',
  ),
  'display' => 
  array (
    'field' => 'display',
    'type' => 'tinyint(4)',
    'null' => 'YES',
    'key' => false,
    'default' => '1',
    'extra' => '',
  ),
);
?>