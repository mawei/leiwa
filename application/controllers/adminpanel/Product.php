<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * AutoCodeIgniter.com
 *
 * 基于CodeIgniter核心模块自动生成程序
 *
 * 源项目		AutoCodeIgniter
 * 作者：		AutoCodeIgniter.com Dev Team EMAIL:hubinjie@outlook.com QQ:5516448
 * 版权：		Copyright (c) 2015 , AutoCodeIgniter com.
 * 项目名称：产品 
 * 版本号：1 
 * 最后生成时间：2017-06-25 15:24:34 
 */
class Product extends Admin_Controller {
	
    var $method_config;
    function __construct()
	{
		parent::__construct();
		$this->load->model(array('product_model'));
        $this->load->helper(array('auto_codeIgniter_helper','array'));
        
        $this->method_config['upload'] = array(
										'teach_video'=>array('upload_size'=>1000000,'upload_file_type'=>'jpg|png|gif','upload_path'=>'video','upload_url'=>'video'),
										'info_video'=>array('upload_size'=>1000000,'upload_file_type'=>'jpg|png|gif','upload_path'=>'video','upload_url'=>'video'),
										'image'=>array('upload_size'=>10000,'upload_file_type'=>'jpg|png|gif','upload_path'=>'images','upload_url'=>'images'),
										);
  
	}
    
    /**
     * 默认首页列表
     * @param int $pageno 当前页码
     * @return void
     */
    function index($page_no=0,$sort_id=0)
    {
    	$page_no = max(intval($page_no),1);
        
        $orderby = "product_id desc";
        $dir = $order=  NULL;
		        
        $where ="";
        $_arr = NULL;//从URL GET
        	$data_list = $this->product_model->listinfo($where,'*',$orderby , $page_no, $this->product_model->page_size,'',$this->product_model->page_size,page_list_url('adminpanel/product/index',true));
        if($data_list)
        {
            	foreach($data_list as $k=>$v)
            	{
					$data_list[$k] = $this->_process_datacorce_value($v);
            	}
        }
    	$this->view('lists',array('require_js'=>true,'data_info'=>$_arr,'order'=>$order,'dir'=>$dir,'data_list'=>$data_list,'pages'=>$this->product_model->pages));
    }
    
    /**
     * 处理数据源结
     * @param array v 
     * @return array
     */
    function _process_datacorce_value($v,$is_edit_model=false)
    {
         return $v;
    }
     /**
     * 新增数据
     * @param AJAX POST 
     * @return void
     */
    function add()
    {
    	//如果是AJAX请求
    	if($this->input->is_ajax_request())
		{
        	//接收POST参数
			$_arr['name'] = isset($_POST["name"])?trim(safe_replace($_POST["name"])):exit(json_encode(array('status'=>false,'tips'=>'产品名称必填')));
			if($_arr['name']=='')exit(json_encode(array('status'=>false,'tips'=>'产品名称必填')));
			$_arr['type'] = isset($_POST["type"])?trim(safe_replace($_POST["type"])):exit(json_encode(array('status'=>false,'tips'=>'类型必填')));
			if($_arr['type']=='')exit(json_encode(array('status'=>false,'tips'=>'类型必填')));
			$_arr['style'] = isset($_POST["style"])?trim(safe_replace($_POST["style"])):exit(json_encode(array('status'=>false,'tips'=>'型号必填')));
			if($_arr['style']=='')exit(json_encode(array('status'=>false,'tips'=>'型号必填')));
			$_arr['info'] = isset($_POST["info"])?trim(safe_replace($_POST["info"])):exit(json_encode(array('status'=>false,'tips'=>'介绍必填')));
			if($_arr['info']=='')exit(json_encode(array('status'=>false,'tips'=>'介绍必填')));
			$_arr['memo'] = isset($_POST["memo"])?trim(safe_replace($_POST["memo"])):exit(json_encode(array('status'=>false,'tips'=>'产品亮点必填')));
			if($_arr['memo']=='')exit(json_encode(array('status'=>false,'tips'=>'产品亮点必填')));
// 			$_arr['qudao'] = isset($_POST["qudao"])?trim(safe_replace($_POST["qudao"])):exit(json_encode(array('status'=>false,'tips'=>'购买渠道必填')));;
// if(is_array($_arr['qudao'])) $_arr['qudao'] = implode(",",$_arr['qudao']);
// 			if($_arr['qudao']=='')exit(json_encode(array('status'=>false,'tips'=>'购买渠道必填')));
			$_arr['tmall'] = isset($_POST["tmall"])?trim(safe_replace($_POST["tmall"])):'';
			$_arr['jingdong'] = isset($_POST["jingdong"])?trim(safe_replace($_POST["jingdong"])):'';
			$_arr['1haodian'] = isset($_POST["1haodian"])?trim(safe_replace($_POST["1haodian"])):'';
			$_arr['teach_video'] = isset($_POST["teach_video"])?trim(safe_replace($_POST["teach_video"])):'';
			$_arr['info_video'] = isset($_POST["info_video"])?trim(safe_replace($_POST["info_video"])):'';
			$_arr['createtime'] = date('Y-m-d H:i:s');
			$_arr['sort'] = isset($_POST["sort"])?trim(safe_replace($_POST["sort"])):'';
			if($_arr['sort']!=''){
			if(!is_number($_arr['sort']))exit(json_encode(array('status'=>false,'tips'=>'排序(数字越大优先级越高)输入错误')));
			}
			$_arr['image'] = isset($_POST["image"])?trim(safe_replace($_POST["image"])):'';
            $_arr['qr_image'] = isset($_POST["qr_image"])?trim(safe_replace($_POST["qr_image"])):'';
            $_arr['info_image'] = isset($_POST["info_image"])?trim(safe_replace($_POST["info_image"])):'';
            $_arr['teach_image'] = isset($_POST["teach_image"])?trim(safe_replace($_POST["teach_image"])):'';
            $_arr['big_image'] = isset($_POST["big_image"])?trim(safe_replace($_POST["big_image"])):'';
            $new_id = $this->product_model->insert($_arr);
            if($new_id)
            {
				exit(json_encode(array('status'=>true,'tips'=>'信息新增成功','new_id'=>$new_id)));
            }else
            {
            	exit(json_encode(array('status'=>false,'tips'=>'信息新增失败','new_id'=>0)));
            }
        }else
        {
        	$this->view('edit',array('require_js'=>true,'is_edit'=>false,'id'=>0,'data_info'=>$this->product_model->default_info()));
        }
    }
     /**
     * 删除单个数据
     * @param int id 
     * @return void
     */
    function delete_one($id=0)
    {
    	$id = intval($id);
        $data_info =$this->product_model->get_one(array('product_id'=>$id));
        if(!$data_info)$this->showmessage('信息不存在');
        $status = $this->product_model->delete(array('product_id'=>$id));
        if($status)
        {
        	$this->showmessage('删除成功');
        }else
        	$this->showmessage('删除失败');
    }

    /**
     * 删除选中数据
     * @param post pid 
     * @return void
     */
    function delete_all()
    {
        if(isset($_POST))
		{
			$pidarr = isset($_POST['pid']) ? $_POST['pid'] : $this->showmessage('无效参数', HTTP_REFERER);
			$where = $this->product_model->to_sqls($pidarr, '', 'product_id');
			$status = $this->product_model->delete($where);
			if($status)
			{
				$this->showmessage('操作成功', HTTP_REFERER);
			}else 
			{
				$this->showmessage('操作失败');
			}
		}
    }
     /**
     * 修改数据
     * @param int id 
     * @return void
     */
    function edit($id=0)
    {
    	$id = intval($id);
        
        $data_info =$this->product_model->get_one(array('product_id'=>$id));
    	//如果是AJAX请求
    	if($this->input->is_ajax_request())
		{
        	if(!$data_info)exit(json_encode(array('status'=>false,'tips'=>'信息不存在')));
        	//接收POST参数
			$_arr['name'] = isset($_POST["name"])?trim(safe_replace($_POST["name"])):exit(json_encode(array('status'=>false,'tips'=>'产品名称必填')));
			if($_arr['name']=='')exit(json_encode(array('status'=>false,'tips'=>'产品名称必填')));
			$_arr['type'] = isset($_POST["type"])?trim(safe_replace($_POST["type"])):exit(json_encode(array('status'=>false,'tips'=>'类型必填')));
			if($_arr['type']=='')exit(json_encode(array('status'=>false,'tips'=>'类型必填')));
			$_arr['style'] = isset($_POST["style"])?trim(safe_replace($_POST["style"])):exit(json_encode(array('status'=>false,'tips'=>'型号必填')));
			if($_arr['style']=='')exit(json_encode(array('status'=>false,'tips'=>'型号必填')));
			$_arr['info'] = isset($_POST["info"])?trim(safe_replace($_POST["info"])):exit(json_encode(array('status'=>false,'tips'=>'介绍必填')));
			if($_arr['info']=='')exit(json_encode(array('status'=>false,'tips'=>'介绍必填')));
			$_arr['memo'] = isset($_POST["memo"])?trim(safe_replace($_POST["memo"])):exit(json_encode(array('status'=>false,'tips'=>'产品亮点必填')));
			if($_arr['memo']=='')exit(json_encode(array('status'=>false,'tips'=>'产品亮点必填')));
// 			$_arr['qudao'] = isset($_POST["qudao"])?safe_replace($_POST["qudao"]):exit(json_encode(array('status'=>false,'tips'=>'购买渠道必填')));;
// if(is_array($_arr['qudao'])) $_arr['qudao'] = implode(",",$_arr['qudao']);
// 			if($_arr['qudao']=='')exit(json_encode(array('status'=>false,'tips'=>'购买渠道必填')));
			$_arr['tmall'] = isset($_POST["tmall"])?trim(safe_replace($_POST["tmall"])):'';
			// $_arr['jingdong'] = isset($_POST["jingdong"])?trim(safe_replace($_POST["jingdong"])):'';
			// $_arr['1haodian'] = isset($_POST["1haodian"])?trim(safe_replace($_POST["1haodian"])):'';
			$_arr['teach_video'] = isset($_POST["teach_video"])?trim(safe_replace($_POST["teach_video"])):'';
			$_arr['info_video'] = isset($_POST["info_video"])?trim(safe_replace($_POST["info_video"])):'';
			$_arr['createtime'] = date('Y-m-d H:i:s');
			$_arr['sort'] = isset($_POST["sort"])?trim(safe_replace($_POST["sort"])):'';
			if($_arr['sort']!=''){
			if(!is_number($_arr['sort']))exit(json_encode(array('status'=>false,'tips'=>'排序(数字越大优先级越高)输入错误')));
			}
            $_arr['image'] = isset($_POST["image"])?trim(safe_replace($_POST["image"])):'';
            $_arr['qr_image'] = isset($_POST["qr_image"])?trim(safe_replace($_POST["qr_image"])):'';
            $_arr['info_image'] = isset($_POST["info_image"])?trim(safe_replace($_POST["info_image"])):'';
            $_arr['teach_image'] = isset($_POST["teach_image"])?trim(safe_replace($_POST["teach_image"])):'';
			 $_arr['big_image'] = isset($_POST["big_image"])?trim(safe_replace($_POST["big_image"])):'';

            $status = $this->product_model->update($_arr,array('product_id'=>$id));
            if($status)
            {
				exit(json_encode(array('status'=>true,'tips'=>'信息修改成功')));
            }else
            {
            	exit(json_encode(array('status'=>false,'tips'=>'信息修改失败')));
            }
        }else
        {
        	if(!$data_info)$this->showmessage('信息不存在');
            $data_info = $this->_process_datacorce_value($data_info,true);
        	$this->view('edit',array('require_js'=>true,'data_info'=>$data_info,'is_edit'=>true,'id'=>$id));
        }
    }
 
  
     /**
     * 只读查看数据
     * @param int id 
     * @return void
     */
    function readonly($id=0)
    {
    	$id = intval($id);
        $data_info =$this->product_model->get_one(array('product_id'=>$id));
        if(!$data_info)$this->showmessage('信息不存在');
		$data_info = $this->_process_datacorce_value($data_info);
        
        $this->view('readonly',array('require_js'=>true,'data_info'=>$data_info));
    }
  
    
     /**
     * 上传附件
     * @param string $fieldName 字段名
     * @param string $controlId HTML控件ID
     * @param string $callbackJSfunction 是否返回函数
     * @return void
     */
	function upload($isImage=true,$fieldName='',$controlId='',$callbackJSfunction=false)
	{
    	if( isset($this->method_config['upload'][$fieldName]))
        {
        	if(isset($_POST['dosubmit']))
            {
                $upload_path = $this->method_config['upload'][$fieldName]['upload_path'];
               
               
               if($upload_path=='')die('缺少上传参数');
               
                $config['upload_path'] = $upload_path;
                $config['allowed_types'] = $this->method_config['upload'][$fieldName]['upload_file_type'];
                $config['max_size'] = $this->method_config['upload'][$fieldName]['upload_size'];
                $config['overwrite']  = FALSE;
                $config['encrypt_name']=false;
                $config['file_name']=date('Ymdhis').random_string('nozero',4);
               
                dir_create($upload_path);//创建正式文件夹
                $this->load->library('upload', $config);
                $this->upload->set_allowed_types('*');

                 
                if ( ! $this->upload->do_upload('upload')) $this->showmessage("上传失败:".$this->upload->display_errors());
                $filedata =  $this->upload->data();
                
                $file_name = $filedata['file_name'];
                $file_size = $filedata['file_size'];
                $image_width = $isImage?$filedata['image_width']:0;
                $image_height =  $isImage?$filedata['image_height']:0;
                $uc_first_id=  ucfirst($controlId);
                $this->showmessage("上传成功！",'','','',$callbackJSfunction?"window.parent.get{$uc_first_id}(\"$file_name\",\"$file_size\",\"$image_width\",\"$image_height\");":"$(window.parent.document).find(\"#$controlId\").val(\"$file_name\");$(\"#dialog\" ).dialog(\"close\")");	
            }else
            {
            	$this->view('upload',array('require_js'=>true,'hidden_menu'=>true,'field_name'=>$fieldName,'control_id'=>$controlId,'upload_url'=>$this->method_config['upload'][$fieldName]['upload_url'],'is_image'=>$isImage));
            }
        }else
        {
        	die('缺少上传参数');
        }
	}

    /**
     * 
     * @return array
     */
    function product_window($controlId='',$page_no=0)
    {
    	$page_no = max(intval($page_no),1);
        $orderby = 'product_ID desc';
        $keyword=safe_replace(trim($this->input->get('keyword')));

		$where ="";
		if (isset($_GET['dosubmit'])) {
			if($keyword!="") $where = "concat(product_id,name,style) like '%{$keyword}%'";
		}
		
        
    	$data_list = $this->product_model->listinfo($where,'product_id,name,style',$orderby , $page_no, $this->product_model->page_size,'',$this->product_model->page_size,page_list_url('adminpanel/product/product_window',true));
        if($data_list)
        {
            	foreach($data_list as $k=>$v)
            	{
    
    			}
        }
    	$this->view('choose',array('require_js'=>true,'hidden_menu'=>true,'fields_convert'=>explode(",",'name,style'),'fields'=>explode(",",'product_id,name,style'),'fields_caption'=>explode(",",'ID,产品名称,型号'),'data_list'=>$data_list,'pages'=>$this->product_model->pages,'control_id'=>$controlId,'keyword'=>$keyword,'concat_char'=>''));
      
    }
}

// END product class

/* End of file product.php */
/* Location: ./product.php */
?>