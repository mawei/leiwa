<?php defined('BASEPATH') or exit('No direct script access allowed.'); ?><?php defined('BASEPATH') or exit('No permission resources.'); ?>
<div class='panel panel-default '>
    <div class='panel-heading'>
        <i class='fa fa-table'></i> 达人秀场 查看信息 
        <div class='panel-tools'>
            <div class='btn-group'>
            	<a class="btn " href="<?php echo base_url('adminpanel/showgroud')?>"><span class="glyphicon glyphicon-arrow-left"></span> 返回 </a>
            </div>
        </div>
    </div>
    <div class='panel-body '>
<div class="form-horizontal"  >
	<fieldset>
        <legend>基本信息</legend>
     
  	  	
	<div class="form-group">
				<label for="name" class="col-sm-2 control-label form-control-static">姓名</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['name'])?$data_info['name']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="content" class="col-sm-2 control-label form-control-static">内容</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['content'])?$data_info['content']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="image" class="col-sm-2 control-label form-control-static">配图</label>
				<div class="col-sm-9 ">
					<img src='<?php echo SITE_URL;?><?php echo  isset($data_info['image'])?('images/'.$data_info['image']):'' ?>' width="100" />
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="date" class="col-sm-2 control-label form-control-static">日期</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['date'])?$data_info['date']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="createtime" class="col-sm-2 control-label form-control-static">创建时间</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['createtime'])?$data_info['createtime']:'' ?>
				</div>
			</div>
	    </fieldset>
	</div>
</div>
</div>
