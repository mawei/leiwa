<?php defined('BASEPATH') or exit('No direct script access allowed.'); ?><?php defined('BASEPATH') or exit('No permission resources.'); ?>
<div class='panel panel-default '>
    <div class='panel-heading'>
        <i class='fa fa-table'></i> 产品图片 查看信息 
        <div class='panel-tools'>
            <div class='btn-group'>
            	<a class="btn " href="<?php echo base_url('adminpanel/productimage')?>"><span class="glyphicon glyphicon-arrow-left"></span> 返回 </a>
            </div>
        </div>
    </div>
    <div class='panel-body '>
<div class="form-horizontal"  >
	<fieldset>
        <legend>基本信息</legend>
     
  	  	
	<div class="form-group">
				<label for="title" class="col-sm-2 control-label form-control-static">图片名称</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['title'])?$data_info['title']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="image" class="col-sm-2 control-label form-control-static">图片</label>
				<div class="col-sm-9 ">
					<img src='<?php echo SITE_URL;?><?php echo  isset($data_info['image'])?('product/'.$data_info['image']):'' ?>' width="100" />
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="product_id" class="col-sm-2 control-label form-control-static">对应产品</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['product_id'])?$data_info['product_id']:'' ?>
				</div>
			</div>
	    </fieldset>
	</div>
</div>
</div>
