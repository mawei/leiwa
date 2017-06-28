<?php defined('BASEPATH') or exit('No direct script access allowed.'); ?><?php defined('BASEPATH') or exit('No permission resources.'); ?>
<form class="form-horizontal" role="form" id="validateform" name="validateform" action="<?php echo base_url('adminpanel/fashionhair/edit')?>" >
	<div class='panel panel-default '>
		<div class='panel-heading'>
			<i class='fa fa-table'></i> 潮流发型 修改信息
			<div class='panel-tools'>
				<div class='btn-group'>
					<a class="btn " href="<?php echo base_url('adminpanel/fashionhair')?>"><span class="glyphicon glyphicon-arrow-left"></span> 返回 </a>
				</div>
			</div>
		</div>
		<div class='panel-body '>
								<fieldset>
						<legend>基本信息</legend>
													
	<div class="form-group">
				<label for="type" class="col-sm-2 control-label form-control-static">类型</label>
				<div class="col-sm-9 ">
					<select class="form-control  validate[required]"  name="type"  id="type">
				<option value="">==请选择==</option>
								<option value='时尚修颜系' <?php if(isset($data_info['type'])&&($data_info['type']=='时尚修颜系')) { ?> selected="selected" <?php } ?>            >时尚修颜系</option>
				<option value='清纯减龄系' <?php if(isset($data_info['type'])&&($data_info['type']=='清纯减龄系')) { ?> selected="selected" <?php } ?>            >清纯减龄系</option>
				<option value='职场御姐系' <?php if(isset($data_info['type'])&&($data_info['type']=='职场御姐系')) { ?> selected="selected" <?php } ?>            >职场御姐系</option>
				<option value='未来发型趋势' <?php if(isset($data_info['type'])&&($data_info['type']=='未来发型趋势')) { ?> selected="selected" <?php } ?>            >未来发型趋势</option>
</select>
				</div>
			</div>
													
	<div class="form-group">
				<label for="title" class="col-sm-2 control-label form-control-static">标题</label>
				<div class="col-sm-9 ">
					<input type="text" name="title"  id="title"  value='<?php echo isset($data_info['title'])?$data_info['title']:'' ?>'  class="form-control validate[required]"  placeholder="请输入标题" >
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
											</fieldset>
							<div class='form-actions'>
				<button class='btn btn-primary ' type='submit' id="dosubmit">保存</button>
			</div>
</form>
			<script language="javascript" type="text/javascript">
			var is_edit =<?php echo ($is_edit)?"true":"false" ?>;
			var id =<?php echo $id;?>;

			require(['<?php echo SITE_URL?>scripts/common.js'], function (common) {
		        require(['<?php echo SITE_URL?>scripts/adminpanel/fashionhair/edit.js']);
		    });
		</script>
	
	