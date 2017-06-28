<?php defined('BASEPATH') or exit('No direct script access allowed.'); ?><?php defined('BASEPATH') or exit('No permission resources.'); ?>
<div class='panel panel-default '>
    <div class='panel-heading'>
        <i class='fa fa-table'></i> 产品 查看信息 
        <div class='panel-tools'>
            <div class='btn-group'>
            	<a class="btn " href="<?php echo base_url('adminpanel/product')?>"><span class="glyphicon glyphicon-arrow-left"></span> 返回 </a>
            </div>
        </div>
    </div>
    <div class='panel-body '>
<div class="form-horizontal"  >
	<fieldset>
        <legend>基本信息</legend>
     
  	  	
	<div class="form-group">
				<label for="name" class="col-sm-2 control-label form-control-static">产品名称</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['name'])?$data_info['name']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="type" class="col-sm-2 control-label form-control-static">类型</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['type'])?$data_info['type']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="style" class="col-sm-2 control-label form-control-static">型号</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['style'])?$data_info['style']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="info" class="col-sm-2 control-label form-control-static">介绍</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['info'])?$data_info['info']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="memo" class="col-sm-2 control-label form-control-static">产品亮点</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['memo'])?$data_info['memo']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="qudao" class="col-sm-2 control-label form-control-static">购买渠道</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['qudao'])?$data_info['qudao']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="tmall" class="col-sm-2 control-label form-control-static">天猫链接</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['tmall'])?$data_info['tmall']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="jingdong" class="col-sm-2 control-label form-control-static">京东链接</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['jingdong'])?$data_info['jingdong']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="1haodian" class="col-sm-2 control-label form-control-static">1号店链接</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['1haodian'])?$data_info['1haodian']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="teach_video" class="col-sm-2 control-label form-control-static">视频教程</label>
				<div class="col-sm-9 ">
					<img src='<?php echo SITE_URL;?><?php echo  isset($data_info['teach_video'])?('video/'.$data_info['teach_video']):'' ?>' width="100" />
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="info_video" class="col-sm-2 control-label form-control-static">介绍视频</label>
				<div class="col-sm-9 ">
					<img src='<?php echo SITE_URL;?><?php echo  isset($data_info['info_video'])?('video/'.$data_info['info_video']):'' ?>' width="100" />
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="createtime" class="col-sm-2 control-label form-control-static">创建时间</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['createtime'])?$data_info['createtime']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="sort" class="col-sm-2 control-label form-control-static">排序(数字越大优先级越高)</label>
				<div class="col-sm-9 form-control-static ">
					<?php echo isset($data_info['sort'])?$data_info['sort']:'' ?>
				</div>
			</div>
	  	
	<div class="form-group">
				<label for="image" class="col-sm-2 control-label form-control-static">配图</label>
				<div class="col-sm-9 ">
					<img src='<?php echo SITE_URL;?><?php echo  isset($data_info['image'])?('images/'.$data_info['image']):'' ?>' width="100" />
				</div>
			</div>
	    </fieldset>
	</div>
</div>
</div>
