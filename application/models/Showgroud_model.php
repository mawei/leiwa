<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * AutoCodeIgniter.com
 *
 * 基于CodeIgniter核心模块自动生成程序
 *
 * 源项目		AutoCodeIgniter
 * 作者：		AutoCodeIgniter.com Dev Team
 * 版权：		Copyright (c) 2015 , AutoCodeIgniter com.
 * 项目名称：达人秀场 MODEL
 * 版本号：1 
 * 最后生成时间：2017-06-25 01:12:07 
 */
class Showgroud_model extends Base_Model {
	
    var $page_size = 10;
    function __construct()
	{
    	$this->db_tablepre = 't_aci_';
    	$this->table_name = 'showgroud';
		parent::__construct();
	}
    
    /**
     * 初始化默认值
     * @return array
     */
    function default_info()
    {
    	return array(
		'showgroud_id'=>0,
		'name'=>'',
		'content'=>'',
		'image'=>'',
		'date'=>'',
		'createtime'=>'',
		);
    }
    
    /**
     * 安装SQL表
     * @return void
     */
    function init()
    {
    	$this->query("CREATE TABLE  IF NOT EXISTS `t_aci_showgroud`
(
`name` varchar(250) DEFAULT NULL COMMENT '姓名',
`content` text COMMENT '内容',
`image` varchar(250) DEFAULT NULL COMMENT '配图',
`date` varchar(250) DEFAULT NULL COMMENT '日期',
`createtime` varchar(50) DEFAULT NULL COMMENT '创建时间',
`showgroud_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
PRIMARY KEY (`showgroud_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
");
    }
    
        }

// END showgroud_model class

/* End of file showgroud_model.php */
/* Location: ./showgroud_model.php */
?>