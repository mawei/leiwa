<?php defined('BASEPATH') or exit('No direct script access allowed.'); ?><?php defined('BASEPATH') or exit('No permission resources.'); ?>
<div class='panel panel-default '>
    <div class='panel-heading'>
        <i class='fa fa-table'></i> 魔发秀 查看信息 
        <div class='panel-tools'>
            <div class='btn-group'>
            	<a class="btn " href="<?php echo base_url('adminpanel/magicshow')?>"><span class="glyphicon glyphicon-arrow-left"></span> 返回 </a>
            </div>
        </div>
    </div>
    <div class='panel-body '>
<div class="form-horizontal"  >
	<fieldset>
        <legend>基本信息</legend>
     
  	  	
	<div class="form-group">
				<label for="type" class="col-sm-2 control-label form-control-static">类型</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['type'])?$data_info['type']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="title" class="col-sm-2 control-label form-control-static">标题</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['title'])?$data_info['title']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="product" class="col-sm-2 control-label form-control-static">产品名称</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['product'])?$data_info['product']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="video" class="col-sm-2 control-label form-control-static">视频</label>
				<div class="col-sm-9 ">
					<img src='<?php echo SITE_URL;?><?php echo  isset($data_info['video'])?('video/'.$data_info['video']):'' ?>' width="100" />
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
