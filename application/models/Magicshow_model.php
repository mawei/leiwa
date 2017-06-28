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
 * 项目名称：魔发秀 MODEL
 * 版本号：1 
 * 最后生成时间：2017-06-25 01:05:03 
 */
class Magicshow_model extends Base_Model {
	
    var $page_size = 10;
    function __construct()
	{
    	$this->db_tablepre = 't_aci_';
    	$this->table_name = 'magicshow';
		parent::__construct();
	}
    
    /**
     * 初始化默认值
     * @return array
     */
    function default_info()
    {
    	return array(
		'magicshow_id'=>0,
		'type'=>'',
		'title'=>'',
		'product'=>'',
		'video'=>'',
		'createtime'=>'',
		);
    }
    
    /**
     * 安装SQL表
     * @return void
     */
    function init()
    {
    	$this->query("CREATE TABLE  IF NOT EXISTS `t_aci_magicshow`
(
`type` varchar(250) DEFAULT NULL COMMENT '类型',
`title` varchar(250) DEFAULT NULL COMMENT '标题',
`product` varchar(250) DEFAULT NULL COMMENT '产品名称',
`video` varchar(250) DEFAULT NULL COMMENT '视频',
`createtime` varchar(50) DEFAULT NULL COMMENT '创建时间',
`magicshow_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
PRIMARY KEY (`magicshow_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
");
    }
    
        }

// END magicshow_model class

/* End of file magicshow_model.php */
/* Location: ./magicshow_model.php */
?>