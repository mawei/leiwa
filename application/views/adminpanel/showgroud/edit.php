<?php defined('BASEPATH') or exit('No direct script access allowed.'); ?><?php defined('BASEPATH') or exit('No permission resources.'); ?>
<form class="form-horizontal" role="form" id="validateform" name="validateform" action="<?php echo base_url('adminpanel/showgroud/edit')?>" >
	<div class='panel panel-default '>
		<div class='panel-heading'>
			<i class='fa fa-table'></i> 达人秀场 修改信息
			<div class='panel-tools'>
				<div class='btn-group'>
					<a class="btn " href="<?php echo base_url('adminpanel/showgroud')?>"><span class="glyphicon glyphicon-arrow-left"></span> 返回 </a>
				</div>
			</div>
		</div>
		<div class='panel-body '>
								<fieldset>
						<legend>基本信息</legend>
													
	<div class="form-group">
				<label for="name" class="col-sm-2 control-label form-control-static">姓名</label>
				<div class="col-sm-9 ">
					<input type="text" name="name"  id="name"  value='<?php echo isset($data_info['name'])?$data_info['name']:'' ?>'  class="form-control validate[required]"  placeholder="请输入姓名" >
				</div>
			</div>
													
	<div class="form-group">
				<label for="content" class="col-sm-2 control-label form-control-static">内容</label>
				<div class="col-sm-9 ">
					<textarea name="content"  id="content"  cols="45" rows="5" class="form-control  validate[required]" placeholder="请输入内容" > <?php echo isset($data_info['content'])?$data_info['content']:'' ?></textarea>
				</div>
			</div>
													
	<div class="form-group">
				<label for="image" class="col-sm-2 control-label form-control-static">配图</label>
				<div class="col-sm-9 ">
					<a id="image_a"  ><img  width="100" id="image_SRC" border="1" src="<?php echo SITE_URL?><?php echo isset($data_info["image"])?"images".$data_info["image"]:"images/nopic.gif" ?>"/></a>
<input type="hidden" id="image" name="image" value="<?php echo isset($data_info["image"])?$data_info["image"]:"" ?>" /> <a id="image_b" class="btn btn-default btn-sm" > 选择图片 ...</a><span class="help-block">只支持图片上传.</span>
				</div>
			</div>
													
	<div class="form-group">
				<label for="date" class="col-sm-2 control-label form-control-static">日期</label>
				<div class="col-sm-9 ">
					<input type="text" name="date"  id="date"  value='<?php echo isset($data_info['date'])?$data_info['date']:'' ?>'  class="form-control validate[required]"  placeholder="请输入日期" >
				</div>
			</div>
																								</fieldset>
							<div class='form-actions'>
				<button class='btn btn-primary ' type='submit' id="dosubmit">保存</button>
			</div>
</form>
			<script language="javascript" type="text/javascript">
			var is_edit =<?php echo ($is_edit)?"true":"false" ?>;
			var id =<?php echo $id;?>;

			require(['<?php echo SITE_URL?>scripts/common.js'], function (common) {
		        require(['<?php echo SITE_URL?>scripts/adminpanel/showgroud/edit.js']);
		    });
		</script>
	
	