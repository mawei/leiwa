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
 * 项目名称：新闻管理 MODEL
 * 版本号：1 
 * 最后生成时间：2017-06-25 00:47:03 
 */
class News_model extends Base_Model {
	
    var $page_size = 10;
    function __construct()
	{
    	$this->db_tablepre = 't_aci_';
    	$this->table_name = 'news';
		parent::__construct();
	}
    
    /**
     * 初始化默认值
     * @return array
     */
    function default_info()
    {
    	return array(
		'news_id'=>0,
		'title'=>'',
		'memo'=>'',
		'image'=>'',
		'type'=>'',
		'years'=>'',
		'content'=>'',
		'createtime'=>'',
		);
    }
    
    /**
     * 安装SQL表
     * @return void
     */
    function init()
    {
    	$this->query("CREATE TABLE  IF NOT EXISTS `t_aci_news`
(
`title` varchar(250) DEFAULT NULL COMMENT '标题',
`memo` text COMMENT '新闻简介',
`image` varchar(250) DEFAULT NULL COMMENT '配图',
`type` varchar(250) DEFAULT NULL COMMENT '新闻类型',
`years` varchar(250) DEFAULT NULL COMMENT '所属年份',
`content` text COMMENT '内容',
`createtime` varchar(50) DEFAULT NULL COMMENT '创建时间',
`news_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
PRIMARY KEY (`news_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
");
    }
    
        }

// END news_model class

/* End of file news_model.php */
/* Location: ./news_model.php */
?>