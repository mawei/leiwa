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
 * 项目名称：产品图片 MODEL
 * 版本号：1 
 * 最后生成时间：2017-06-25 15:37:17 
 */
class Productimage_model extends Base_Model {
	
    var $page_size = 10;
    function __construct()
	{
    	$this->db_tablepre = 't_aci_';
    	$this->table_name = 'productimage';
		parent::__construct();
	}
    
    /**
     * 初始化默认值
     * @return array
     */
    function default_info()
    {
    	return array(
		'productimage_id'=>0,
		'title'=>'',
		'image'=>'',
		'product_id'=>'',
		);
    }
    
    /**
     * 安装SQL表
     * @return void
     */
    function init()
    {
    	$this->query("CREATE TABLE  IF NOT EXISTS `t_aci_productimage`
(
`title` varchar(250) DEFAULT NULL COMMENT '图片名称',
`image` varchar(250) DEFAULT NULL COMMENT '图片',
`product_id` varchar(50) DEFAULT NULL COMMENT '对应产品',
`productimage_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
PRIMARY KEY (`productimage_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
");
    }
    
        }

// END productimage_model class

/* End of file productimage_model.php */
/* Location: ./productimage_model.php */
?>