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
 * 项目名称：潮流发型 MODEL
 * 版本号：1 
 * 最后生成时间：2017-06-25 00:57:08 
 */
class Fashionhair_model extends Base_Model {
	
    var $page_size = 10;
    function __construct()
	{
    	$this->db_tablepre = 't_aci_';
    	$this->table_name = 'fashionhair';
		parent::__construct();
	}
    
    /**
     * 初始化默认值
     * @return array
     */
    function default_info()
    {
    	return array(
		'fashionhair_id'=>0,
		'type'=>'',
		'title'=>'',
		'content'=>'',
		'createtime'=>'',
		'image'=>'',
		);
    }
    
    /**
     * 安装SQL表
     * @return void
     */
    function init()
    {
    	$this->query("CREATE TABLE  IF NOT EXISTS `t_aci_fashionhair`
(
`type` varchar(250) DEFAULT NULL COMMENT '类型',
`title` varchar(250) DEFAULT NULL COMMENT '标题',
`content` text COMMENT '内容',
`createtime` varchar(50) DEFAULT NULL COMMENT '创建时间',
`image` varchar(250) DEFAULT NULL COMMENT '配图',
`fashionhair_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
PRIMARY KEY (`fashionhair_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
");
    }
    
        }

// END fashionhair_model class

/* End of file fashionhair_model.php */
/* Location: ./fashionhair_model.php */
?>