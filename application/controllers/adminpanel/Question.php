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
 * 项目名称：常见问题 
 * 版本号：1 
 * 最后生成时间：2017-06-25 01:19:48 
 */
class Question extends Admin_Controller {
	
    var $method_config;
    function __construct()
	{
		parent::__construct();
		$this->load->model(array('question_model'));
        $this->load->helper(array('auto_codeIgniter_helper','array'));
  
  
        //保证排序安全性
        $this->method_config['sort_field'] = array(
										'title'=>'title',
										'content'=>'content',
										'type'=>'type',
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
        
        $orderby = "question_id desc";
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
			if($_arr['keyword']!="") $where_arr[] = "concat(title,content) like '%{$_arr['keyword']}%'";
                
			$_arr['type'] = isset($_GET["type"])?trim(safe_replace($_GET["type"])):'';
        	if($_arr['type']!="") $where_arr[] = "type = '".$_arr['type']."'";

                
        
		        
        	if($where_arr)$where = implode(" and ",$where_arr);
        }

        	$data_list = $this->question_model->listinfo($where,'*',$orderby , $page_no, $this->question_model->page_size,'',$this->question_model->page_size,page_list_url('adminpanel/question/index',true));
        if($data_list)
        {
            	foreach($data_list as $k=>$v)
            	{
					$data_list[$k] = $this->_process_datacorce_value($v);
            	}
        }
    	$this->view('lists',array('require_js'=>true,'data_info'=>$_arr,'order'=>$order,'dir'=>$dir,'data_list'=>$data_list,'pages'=>$this->question_model->pages));
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
			$_arr['title'] = isset($_POST["title"])?trim(safe_replace($_POST["title"])):exit(json_encode(array('status'=>false,'tips'=>'标题必填')));
			if($_arr['title']=='')exit(json_encode(array('status'=>false,'tips'=>'标题必填')));
			$_arr['content'] = isset($_POST["content"])?trim(safe_replace($_POST["content"])):exit(json_encode(array('status'=>false,'tips'=>'内容必填')));
			if($_arr['content']=='')exit(json_encode(array('status'=>false,'tips'=>'内容必填')));
			$_arr['type'] = isset($_POST["type"])?trim(safe_replace($_POST["type"])):exit(json_encode(array('status'=>false,'tips'=>'类型必填')));
			if($_arr['type']=='')exit(json_encode(array('status'=>false,'tips'=>'类型必填')));
			$_arr['createtime'] = date('Y-m-d H:i:s');
			
            $new_id = $this->question_model->insert($_arr);
            if($new_id)
            {
				exit(json_encode(array('status'=>true,'tips'=>'信息新增成功','new_id'=>$new_id)));
            }else
            {
            	exit(json_encode(array('status'=>false,'tips'=>'信息新增失败','new_id'=>0)));
            }
        }else
        {
        	$this->view('edit',array('require_js'=>true,'is_edit'=>false,'id'=>0,'data_info'=>$this->question_model->default_info()));
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
        $data_info =$this->question_model->get_one(array('question_id'=>$id));
        if(!$data_info)$this->showmessage('信息不存在');
        $status = $this->question_model->delete(array('question_id'=>$id));
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
			$where = $this->question_model->to_sqls($pidarr, '', 'question_id');
			$status = $this->question_model->delete($where);
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
        
        $data_info =$this->question_model->get_one(array('question_id'=>$id));
    	//如果是AJAX请求
    	if($this->input->is_ajax_request())
		{
        	if(!$data_info)exit(json_encode(array('status'=>false,'tips'=>'信息不存在')));
        	//接收POST参数
			$_arr['title'] = isset($_POST["title"])?trim(safe_replace($_POST["title"])):exit(json_encode(array('status'=>false,'tips'=>'标题必填')));
			if($_arr['title']=='')exit(json_encode(array('status'=>false,'tips'=>'标题必填')));
			$_arr['content'] = isset($_POST["content"])?trim(safe_replace($_POST["content"])):exit(json_encode(array('status'=>false,'tips'=>'内容必填')));
			if($_arr['content']=='')exit(json_encode(array('status'=>false,'tips'=>'内容必填')));
			$_arr['type'] = isset($_POST["type"])?trim(safe_replace($_POST["type"])):exit(json_encode(array('status'=>false,'tips'=>'类型必填')));
			if($_arr['type']=='')exit(json_encode(array('status'=>false,'tips'=>'类型必填')));
			$_arr['createtime'] = date('Y-m-d H:i:s');
			
            $status = $this->question_model->update($_arr,array('question_id'=>$id));
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
        $data_info =$this->question_model->get_one(array('question_id'=>$id));
        if(!$data_info)$this->showmessage('信息不存在');
		$data_info = $this->_process_datacorce_value($data_info);
        
        $this->view('readonly',array('require_js'=>true,'data_info'=>$data_info));
    }

}

// END question class

/* End of file question.php */
/* Location: ./question.php */
?>