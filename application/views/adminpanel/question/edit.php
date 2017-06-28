<?php defined('BASEPATH') or exit('No direct script access allowed.'); ?><?php defined('BASEPATH') or exit('No permission resources.'); ?>
<form class="form-horizontal" role="form" id="validateform" name="validateform" action="<?php echo base_url('adminpanel/question/edit')?>" >
	<div class='panel panel-default '>
		<div class='panel-heading'>
			<i class='fa fa-table'></i> 常见问题 修改信息
			<div class='panel-tools'>
				<div class='btn-group'>
					<a class="btn " href="<?php echo base_url('adminpanel/question')?>"><span class="glyphicon glyphicon-arrow-left"></span> 返回 </a>
				</div>
			</div>
		</div>
		<div class='panel-body '>
								<fieldset>
						<legend>基本信息</legend>
													
	<div class="form-group">
				<label for="title" class="col-sm-2 control-label form-control-static">标题</label>
				<div class="col-sm-9 ">
					<input type="text" name="title"  id="title"  value='<?php echo isset($data_info['title'])?$data_info['title']:'' ?>'  class="form-control validate[required]"  placeholder="请输入标题" >
				</div>
			</div>
													
	<div class="form-group">
				<label for="content" class="col-sm-2 control-label form-control-static">内容</label>
				<div class="col-sm-9 ">
					<input type="text" name="content"  id="content"  value='<?php echo isset($data_info['content'])?$data_info['content']:'' ?>'  class="form-control validate[required]"  placeholder="请输入内容" >
				</div>
			</div>
													
	<div class="form-group">
				<label for="type" class="col-sm-2 control-label form-control-static">类型</label>
				<div class="col-sm-9 ">
					<select class="form-control  validate[required]"  name="type"  id="type">
				<option value="">==请选择==</option>
								<option value='卷直发器' <?php if(isset($data_info['type'])&&($data_info['type']=='卷直发器')) { ?> selected="selected" <?php } ?>            >卷直发器</option>
				<option value='电吹风' <?php if(isset($data_info['type'])&&($data_info['type']=='电吹风')) { ?> selected="selected" <?php } ?>            >电吹风</option>
				<option value='理发器' <?php if(isset($data_info['type'])&&($data_info['type']=='理发器')) { ?> selected="selected" <?php } ?>            >理发器</option>
</select>
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
		        require(['<?php echo SITE_URL?>scripts/adminpanel/question/edit.js']);
		    });
		</script>
	
	