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
 * 项目名称：产品 MODEL
 * 版本号：1 
 * 最后生成时间：2017-06-25 15:24:34 
 */
class Product_model extends Base_Model {
	
    var $page_size = 10;
    function __construct()
	{
    	$this->db_tablepre = 't_aci_';
    	$this->table_name = 'product';
		parent::__construct();
	}
    
    /**
     * 初始化默认值
     * @return array
     */
    function default_info()
    {
    	return array(
		'product_id'=>0,
		'name'=>'',
		'type'=>'',
		'style'=>'',
		'info'=>'',
		'memo'=>'',
		'qudao'=>'',
		'tmall'=>'',
		'jingdong'=>'',
		'1haodian'=>'',
		'teach_video'=>'',
		'info_video'=>'',
		'createtime'=>'',
		'sort'=>'',
		'image'=>'',
		);
    }
    
    /**
     * 安装SQL表
     * @return void
     */
    function init()
    {
    	$this->query("CREATE TABLE  IF NOT EXISTS `t_aci_product`
(
`name` varchar(250) DEFAULT NULL COMMENT '产品名称',
`type` varchar(250) DEFAULT NULL COMMENT '类型',
`style` varchar(250) DEFAULT NULL COMMENT '型号',
`info` varchar(250) DEFAULT NULL COMMENT '介绍',
`memo` text COMMENT '产品亮点',
`qudao` varchar(250) DEFAULT NULL COMMENT '购买渠道',
`tmall` varchar(250) DEFAULT NULL COMMENT '天猫链接',
`jingdong` varchar(250) DEFAULT NULL COMMENT '京东链接',
`1haodian` varchar(250) DEFAULT NULL COMMENT '1号店链接',
`teach_video` varchar(250) DEFAULT NULL COMMENT '视频教程',
`info_video` varchar(250) DEFAULT NULL COMMENT '介绍视频',
`createtime` varchar(50) DEFAULT NULL COMMENT '创建时间',
`sort` int(11) DEFAULT '0' COMMENT '排序(数字越大优先级越高)',
`image` varchar(250) DEFAULT NULL COMMENT '配图',
`product_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
PRIMARY KEY (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
");
    }
    
        
    /**
     * 产品     * @return array
     */
    function product_datasource($where='',$limit = '', $order = '', $group = '', $key='')
    {
    	$datalist = $this->select($where,'product_id,name,style',$limit,$order,$group,$key);
        return $datalist;
    }
    
    /**
     * 产品选择中项值     * @return array
     */
    function product_value($id=0)
    {
    	$data_info = $this->get_one(array('product_id'=>$id),'name,style');
        if($data_info)
        {
        	return  implode("-",$data_info);
        }
        return NULL;
    }
        }

// END product_model class

/* End of file product_model.php */
/* Location: ./product_model.php */
?>