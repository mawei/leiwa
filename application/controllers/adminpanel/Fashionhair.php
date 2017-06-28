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
 * 项目名称：潮流发型 
 * 版本号：1 
 * 最后生成时间：2017-06-25 00:57:08 
 */
class Fashionhair extends Admin_Controller {
	
    var $method_config;
    function __construct()
	{
		parent::__construct();
		$this->load->model(array('fashionhair_model'));
        $this->load->helper(array('auto_codeIgniter_helper','array'));
        
        $this->method_config['upload'] = array(
										'image'=>array('upload_size'=>10000,'upload_file_type'=>'jpg|png|gif','upload_path'=>'images','upload_url'=>'images'),
										);
  
  
        //保证排序安全性
        $this->method_config['sort_field'] = array(
										'type'=>'type',
										'title'=>'title',
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
        
        $orderby = "fashionhair_id desc";
        $dir = $order=  NULL;
		$order=isset($_GET['order'])?safe_replace(trim($_GET['order'])):'';
		$dir=isset($_GET['dir'])?safe_replace(trim($_GET['dir'])):'asc';
        
        if(trim($order)!="")
        {
        	//如果找到得
        	if(isset($this->method_config['sort_field'][strtolower($order)]))
            {
            	if(strtolower($dir)=="asc")
            		$orderby = $this->method_config['sort_field'][strtolower($order)]." asc," .$orderby;
                 else
            		$orderby = $this->method_config['sort_field'][strtolower($order)]." desc," .$orderby;
            }
        }
                
        $where ="";
        $_arr = NULL;//从URL GET
        if (isset($_GET['dosubmit'])) {
        	$where_arr = NULL;
			$_arr['keyword'] =isset($_GET['keyword'])?safe_replace(trim($_GET['keyword'])):'';
			if($_arr['keyword']!="") $where_arr[] = "concat(title) like '%{$_arr['keyword']}%'";
                
			$_arr['type'] = isset($_GET["type"])?trim(safe_replace($_GET["type"])):'';
        	if($_arr['type']!="") $where_arr[] = "type = '".$_arr['type']."'";

                
        
		        
        	if($where_arr)$where = implode(" and ",$where_arr);
        }

        	$data_list = $this->fashionhair_model->listinfo($where,'*',$orderby , $page_no, $this->fashionhair_model->page_size,'',$this->fashionhair_model->page_size,page_list_url('adminpanel/fashionhair/index',true));
        if($data_list)
        {
            	foreach($data_list as $k=>$v)
            	{
					$data_list[$k] = $this->_process_datacorce_value($v);
            	}
        }
    	$this->view('lists',array('require_js'=>true,'data_info'=>$_arr,'order'=>$order,'dir'=>$dir,'data_list'=>$data_list,'pages'=>$this->fashionhair_model->pages));
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
			$_arr['type'] = isset($_POST["type"])?trim(safe_replace($_POST["type"])):exit(json_encode(array('status'=>false,'tips'=>'类型必填')));
			if($_arr['type']=='')exit(json_encode(array('status'=>false,'tips'=>'类型必填')));
			$_arr['title'] = isset($_POST["title"])?trim(safe_replace($_POST["title"])):exit(json_encode(array('status'=>false,'tips'=>'标题必填')));
			if($_arr['title']=='')exit(json_encode(array('status'=>false,'tips'=>'标题必填')));
			$_arr['content'] = isset($_POST["content"])?trim(safe_replace($_POST["content"])):exit(json_encode(array('status'=>false,'tips'=>'内容必填')));
			if($_arr['content']=='')exit(json_encode(array('status'=>false,'tips'=>'内容必填')));
			$_arr['createtime'] = date('Y-m-d H:i:s');
			$_arr['image'] = isset($_POST["image"])?trim(safe_replace($_POST["image"])):'';
			
            $new_id = $this->fashionhair_model->insert($_arr);
            if($new_id)
            {
				exit(json_encode(array('status'=>true,'tips'=>'信息新增成功','new_id'=>$new_id)));
            }else
            {
            	exit(json_encode(array('status'=>false,'tips'=>'信息新增失败','new_id'=>0)));
            }
        }else
        {
        	$this->view('edit',array('require_js'=>true,'is_edit'=>false,'id'=>0,'data_info'=>$this->fashionhair_model->default_info()));
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
        $data_info =$this->fashionhair_model->get_one(array('fashionhair_id'=>$id));
        if(!$data_info)$this->showmessage('信息不存在');
        $status = $this->fashionhair_model->delete(array('fashionhair_id'=>$id));
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
			$where = $this->fashionhair_model->to_sqls($pidarr, '', 'fashionhair_id');
			$status = $this->fashionhair_model->delete($where);
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
        
        $data_info =$this->fashionhair_model->get_one(array('fashionhair_id'=>$id));
    	//如果是AJAX请求
    	if($this->input->is_ajax_request())
		{
        	if(!$data_info)exit(json_encode(array('status'=>false,'tips'=>'信息不存在')));
        	//接收POST参数
			$_arr['type'] = isset($_POST["type"])?trim(safe_replace($_POST["type"])):exit(json_encode(array('status'=>false,'tips'=>'类型必填')));
			if($_arr['type']=='')exit(json_encode(array('status'=>false,'tips'=>'类型必填')));
			$_arr['title'] = isset($_POST["title"])?trim(safe_replace($_POST["title"])):exit(json_encode(array('status'=>false,'tips'=>'标题必填')));
			if($_arr['title']=='')exit(json_encode(array('status'=>false,'tips'=>'标题必填')));
			$_arr['content'] = isset($_POST["content"])?trim(safe_replace($_POST["content"])):exit(json_encode(array('status'=>false,'tips'=>'内容必填')));
			if($_arr['content']=='')exit(json_encode(array('status'=>false,'tips'=>'内容必填')));
			$_arr['createtime'] = date('Y-m-d H:i:s');
			$_arr['image'] = isset($_POST["image"])?trim(safe_replace($_POST["image"])):'';
			
            $status = $this->fashionhair_model->update($_arr,array('fashionhair_id'=>$id));
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
        $data_info =$this->fashionhair_model->get_one(array('fashionhair_id'=>$id));
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

}

// END fashionhair class

/* End of file fashionhair.php */
/* Location: ./fashionhair.php */
?>