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
 * 项目名称：友情链接 MODEL
 * 版本号：1 
 * 最后生成时间：2017-07-14 11:45:18 
 */
class Link_model extends Base_Model {
	
    var $page_size = 10;
    function __construct()
	{
    	$this->db_tablepre = 't_aci_';
    	$this->table_name = 'link';
		parent::__construct();
	}
    
    /**
     * 初始化默认值
     * @return array
     */
    function default_info()
    {
    	return array(
		'link_id'=>0,
		'name'=>'',
		'link'=>'',
		);
    }
    
    /**
     * 安装SQL表
     * @return void
     */
    function init()
    {
    	$this->query("CREATE TABLE  IF NOT EXISTS `t_aci_link`
(
`name` varchar(250) DEFAULT NULL COMMENT '网站名称',
`link` varchar(250) DEFAULT NULL COMMENT '链接地址',
`link_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
PRIMARY KEY (`link_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
");
    }
    
        }

// END link_model class

/* End of file link_model.php */
/* Location: ./link_model.php */
?>