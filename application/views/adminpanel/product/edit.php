<?php defined('BASEPATH') or exit('No direct script access allowed.'); ?><?php defined('BASEPATH') or exit('No permission resources.'); ?>
<form class="form-horizontal" role="form" id="validateform" name="validateform" action="<?php echo base_url('adminpanel/product/edit')?>" >
	<div class='panel panel-default '>
		<div class='panel-heading'>
			<i class='fa fa-table'></i> 产品 修改信息
			<div class='panel-tools'>
				<div class='btn-group'>
					<a class="btn " href="<?php echo base_url('adminpanel/product')?>"><span class="glyphicon glyphicon-arrow-left"></span> 返回 </a>
				</div>
			</div>
		</div>
		<div class='panel-body '>
								<fieldset>
						<legend>基本信息</legend>
													
	<div class="form-group">
				<label for="name" class="col-sm-2 control-label form-control-static">产品名称</label>
				<div class="col-sm-9 ">
					<input type="text" name="name"  id="name"  value='<?php echo isset($data_info['name'])?$data_info['name']:'' ?>'  class="form-control validate[required]"  placeholder="请输入产品名称" >
				</div>
			</div>
													
	<div class="form-group">
				<label for="type" class="col-sm-2 control-label form-control-static">类型</label>
				<div class="col-sm-9 ">
					<select class="form-control  validate[required]"  name="type"  id="type">
				<option value="">==请选择==</option>
								<option value='烫发器' <?php if(isset($data_info['type'])&&($data_info['type']=='烫发器')) { ?> selected="selected" <?php } ?>            >烫发器</option>
				<option value='电吹风' <?php if(isset($data_info['type'])&&($data_info['type']=='电吹风')) { ?> selected="selected" <?php } ?>            >电吹风</option>
				<option value='理发器' <?php if(isset($data_info['type'])&&($data_info['type']=='理发器')) { ?> selected="selected" <?php } ?>            >理发器</option>
				<option value='美容健康' <?php if(isset($data_info['type'])&&($data_info['type']=='美容健康')) { ?> selected="selected" <?php } ?>            >美容健康</option>
</select>
				</div>
			</div>
													
	<div class="form-group">
				<label for="style" class="col-sm-2 control-label form-control-static">型号</label>
				<div class="col-sm-9 ">
					<input type="text" name="style"  id="style"  value='<?php echo isset($data_info['style'])?$data_info['style']:'' ?>'  class="form-control validate[required]"  placeholder="请输入型号" >
				</div>
			</div>
													
	<div class="form-group">
				<label for="info" class="col-sm-2 control-label form-control-static">介绍</label>
				<div class="col-sm-9 ">
					<input type="text" name="info"  id="info"  value='<?php echo isset($data_info['info'])?$data_info['info']:'' ?>'  class="form-control validate[required]"  placeholder="请输入介绍" >
				</div>
			</div>
													
	<div class="form-group">
				<label for="memo" class="col-sm-2 control-label form-control-static">产品亮点</label>
				<div class="col-sm-9 ">
					<textarea name="memo"  id="memo"  cols="45" rows="5" class="form-control  validate[required]" placeholder="请输入产品亮点" > <?php echo isset($data_info['memo'])?$data_info['memo']:'' ?></textarea>
				</div>
			</div>
<!-- 													
	<div class="form-group">
				<label for="qudao" class="col-sm-2 control-label form-control-static">购买渠道</label>
				<div class="col-sm-9 ">
					<label class="radio-inline">  <input type="checkbox" class=" validate[required]" name="qudao[]"  id="qudao天猫" value="天猫
"   <?php if(isset($data_info['qudao'])&&(str_exists($data_info['qudao'],'天猫'))) { ?> checked="checked" <?php } ?>            > 天猫</label><label class="radio-inline">  <input type="checkbox" class=" validate[required]" name="qudao[]"  id="qudao京东" value="京东
"   <?php if(isset($data_info['qudao'])&&(str_exists($data_info['qudao'],'京东'))) { ?> checked="checked" <?php } ?>            > 京东</label><label class="radio-inline">  <input type="checkbox" class=" validate[required]" name="qudao[]"  id="qudao1号店" value="1号店"   <?php if(isset($data_info['qudao'])&&(str_exists($data_info['qudao'],'1号店'))) { ?> checked="checked" <?php } ?>            > 1号店</label>
				</div>
			</div>
							 -->						
	<div class="form-group">
				<label for="tmall" class="col-sm-2 control-label form-control-static">天猫链接</label>
				<div class="col-sm-9 ">
					<input type="text" name="tmall"  id="tmall"  value='<?php echo isset($data_info['tmall'])?$data_info['tmall']:'' ?>'  class="form-control validate[required]"  placeholder="请输入天猫链接" >
				</div>
			</div>
													
<!-- 	<div class="form-group">
				<label for="jingdong" class="col-sm-2 control-label form-control-static">京东链接</label>
				<div class="col-sm-9 ">
					<input type="text" name="jingdong"  id="jingdong"  value='<?php echo isset($data_info['jingdong'])?$data_info['jingdong']:'' ?>'  class="form-control validate[required]"  placeholder="请输入京东链接" >
				</div>
			</div>
													
	<div class="form-group">
				<label for="1haodian" class="col-sm-2 control-label form-control-static">1号店链接</label>
				<div class="col-sm-9 ">
					<input type="text" name="1haodian"  id="1haodian"  value='<?php echo isset($data_info['1haodian'])?$data_info['1haodian']:'' ?>'  class="form-control validate[required]"  placeholder="请输入1号店链接" >
				</div>
			</div> -->

	<div class="form-group">
		<label for="teach_video" class="col-sm-2 control-label form-control-static">视频教程文件名</label>
		<div class="col-sm-9 ">
			<input type="text" name="teach_video"  id="teach_video"  value='<?php echo isset($data_info['teach_video'])?$data_info['teach_video']:'' ?>'  class="form-control validate[required]"  placeholder="请输入视频教程文件名" >
		</div>
	</div>

	<div class="form-group">
		<label for="info_video" class="col-sm-2 control-label form-control-static">介绍视频文件名</label>
		<div class="col-sm-9 ">
			<input type="text" name="info_video"  id="info_video"  value='<?php echo isset($data_info['info_video'])?$data_info['info_video']:'' ?>'  class="form-control validate[required]"  placeholder="请输入介绍视频文件名" >
		</div>
	</div>
													
<!-- 	<div class="form-group">
		<label for="teach_video" class="col-sm-2 control-label form-control-static">视频教程</label>
		<div class="col-sm-9 ">
			<a id="teach_video_a"><img  width="100" id="teach_video_SRC" border="1" src="<?php echo SITE_URL?><?php echo isset($data_info["teach_video"])?"video/".$data_info["teach_video"]:"images/nopic.gif" ?>"/></a>
<input type="hidden" id="teach_video" name="teach_video" value="<?php echo isset($data_info["teach_video"])?$data_info["teach_video"]:"" ?>" /> <a id="teach_video_b" class="btn btn-default btn-sm" > 选择图片 ...</a><span class="help-block">只支持图片上传.</span>
		</div>
	</div> -->
													
<!-- 	<div class="form-group">
				<label for="info_video" class="col-sm-2 control-label form-control-static">介绍视频</label>
				<div class="col-sm-9 ">
					<a id="info_video_a"  ><img  width="100" id="info_video_SRC" border="1" src="<?php echo SITE_URL?><?php echo isset($data_info["info_video"])?"video/".$data_info["info_video"]:"images/nopic.gif" ?>"/></a>
<input type="hidden" id="info_video" name="info_video" value="<?php echo isset($data_info["info_video"])?$data_info["info_video"]:"" ?>" /> <a id="info_video_b" class="btn btn-default btn-sm" > 选择图片 ...</a><span class="help-block">只支持图片上传.</span>
				</div>
			</div> -->
																										
	<div class="form-group">
				<label for="sort" class="col-sm-2 control-label form-control-static">排序(数字越大优先级越高)</label>
				<div class="col-sm-9 ">
					<input type="number" name="sort"  id="sort"  value='<?php echo isset($data_info['sort'])?$data_info['sort']:'' ?>'   class="form-control validate[custom[integer]]" placeholder="请输入排序(数字越大优先级越高)" >
				</div>
			</div>
													
	<div class="form-group">
				<label for="image" class="col-sm-2 control-label form-control-static">配图(408*408)</label>
				<div class="col-sm-9 ">
					<a id="image_a"  ><img  width="100" id="image_SRC" border="1" src="<?php echo SITE_URL?><?php echo isset($data_info["image"])?"images/".$data_info["image"]:"images/nopic.gif" ?>"/></a>
<input type="hidden" id="image" name="image" value="<?php echo isset($data_info["image"])?$data_info["image"]:"" ?>" /> <a id="image_b" class="btn btn-default btn-sm" > 选择图片 ...</a><span class="help-block">只支持图片上传.</span>
				</div>
			</div>
				<div class="form-group">
				<label for="qr_image" class="col-sm-2 control-label form-control-static">天猫二维码图(121*121)</label>
				<div class="col-sm-9 ">
					<a id="qr_image_a"  ><img  width="100" id="qr_image_SRC" border="1" src="<?php echo SITE_URL?><?php echo isset($data_info["qr_image"])?"images/".$data_info["qr_image"]:"images/nopic.gif" ?>"/></a>
<input type="hidden" id="qr_image" name="qr_image" value="<?php echo isset($data_info["qr_image"])?$data_info["qr_image"]:"" ?>" /> <a id="qr_image_b" class="btn btn-default btn-sm" > 选择图片 ...</a><span class="help-block">只支持图片上传.</span>
				</div>
			</div>
				<div class="form-group">
				<label for="info_image" class="col-sm-2 control-label form-control-static">介绍视频配图(115*71)</label>
				<div class="col-sm-9 ">
					<a id="info_image_a"  ><img  width="100" id="info_image_SRC" border="1" src="<?php echo SITE_URL?><?php echo isset($data_info["info_image"])?"images/".$data_info["info_image"]:"images/nopic.gif" ?>"/></a>
<input type="hidden" id="info_image" name="info_image" value="<?php echo isset($data_info["info_image"])?$data_info["info_image"]:"" ?>" /> <a id="info_image_b" class="btn btn-default btn-sm" > 选择图片 ...</a><span class="help-block">只支持图片上传.</span>
				</div>
			</div>
				<div class="form-group">
				<label for="teach_image" class="col-sm-2 control-label form-control-static">教学视频配图(168*106)</label>
				<div class="col-sm-9 ">
					<a id="teach_image_a"  ><img  width="100" id="teach_image_SRC" border="1" src="<?php echo SITE_URL?><?php echo isset($data_info["teach_image"])?"images/".$data_info["teach_image"]:"images/nopic.gif" ?>"/></a>
<input type="hidden" id="teach_image" name="teach_image" value="<?php echo isset($data_info["teach_image"])?$data_info["teach_image"]:"" ?>" /> <a id="teach_image_b" class="btn btn-default btn-sm" > 选择图片 ...</a><span class="help-block">只支持图片上传.</span>
				</div>
			</div>
			<div class="form-group">
				<label for="big_image" class="col-sm-2 control-label form-control-static">产品详情页大图(1457*727)</label>
				<div class="col-sm-9 ">
					<a id="big_image_a"  ><img  width="100" id="big_image_SRC" border="1" src="<?php echo SITE_URL?><?php echo isset($data_info["big_image"])?"images/".$data_info["big_image"]:"images/nopic.gif" ?>"/></a>
<input type="hidden" id="big_image" name="big_image" value="<?php echo isset($data_info["big_image"])?$data_info["big_image"]:"" ?>" /> <a id="big_image_b" class="btn btn-default btn-sm" > 选择图片 ...</a><span class="help-block">只支持图片上传.</span>
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
		        require(['<?php echo SITE_URL?>scripts/adminpanel/product/edit.js']);
		    });
		</script>
	
	