<?php defined('BASEPATH') or exit('No direct script access allowed.'); ?><?php defined('BASEPATH') or exit('No permission resources.'); ?>
<form class="form-horizontal" role="form" id="validateform" name="validateform" action="<?php echo base_url('adminpanel/news/edit')?>" >
	<div class='panel panel-default '>
		<div class='panel-heading'>
			<i class='fa fa-table'></i> 新闻管理 修改信息
			<div class='panel-tools'>
				<div class='btn-group'>
					<a class="btn " href="<?php echo base_url('adminpanel/news')?>"><span class="glyphicon glyphicon-arrow-left"></span> 返回 </a>
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
				<label for="memo" class="col-sm-2 control-label form-control-static">新闻简介</label>
				<div class="col-sm-9 ">
					<textarea name="memo"  id="memo"  cols="45" rows="5" class="form-control  validate[required]" placeholder="请输入新闻简介" > <?php echo isset($data_info['memo'])?$data_info['memo']:'' ?></textarea>
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
				<label for="type" class="col-sm-2 control-label form-control-static">新闻类型</label>
				<div class="col-sm-9 ">
					<select class="form-control  validate[required]"  name="type"  id="type">
				<option value="">==请选择==</option>
								<option value='公司新闻' <?php if(isset($data_info['type'])&&($data_info['type']=='公司新闻')) { ?> selected="selected" <?php } ?>            >公司新闻</option>
				<option value='产品新闻' <?php if(isset($data_info['type'])&&($data_info['type']=='产品新闻')) { ?> selected="selected" <?php } ?>            >产品新闻</option>
</select>
				</div>
			</div>
													
	<div class="form-group">
				<label for="years" class="col-sm-2 control-label form-control-static">所属年份</label>
				<div class="col-sm-9 ">
					<input type="text" name="years"  id="years"  value='<?php echo isset($data_info['years'])?$data_info['years']:'' ?>'  class="form-control validate[required]"  placeholder="请输入所属年份" >
				</div>
			</div>
													
			<div class="form-group">
				<label for="content" class="col-sm-2 control-label form-control-static">内容</label>
				<div class="col-sm-9 "  >
					<script id="content" name="content" type="text/plain"></script>
				</div>
				<!-- <div class="col-sm-9 " id="content" >
					<textarea name="content"  cols="45" rows="5" class="form-control  validate[required]" placeholder="请输入内容" ><?php echo isset($data_info['content'])?$data_info['content']:'' ?></textarea>
				</div> -->
			</div>

																								</fieldset>
			<div class='form-actions'>
				<button class='btn btn-primary ' type='submit' id="dosubmit">保存</button>
			</div>
</form>
			<!-- 加载编辑器的容器 -->
	    <script id="container" name="content" type="text/plain">
	        这里写你的初始化内容
	    </script>


		<script language="javascript" type="text/javascript">
			require(['<?=SITE_URL()?>scripts/lib/third-party/zeroclipboard/ZeroClipboard.js'], function (ZeroClipboard) {
			    window['ZeroClipboard'] = ZeroClipboard;
			});

			var is_edit =<?php echo ($is_edit)?"true":"false" ?>;
			var id =<?php echo $id;?>;
			require(['<?php echo SITE_URL?>scripts/common.js'], function (common) {
		        require(['<?php echo SITE_URL?>scripts/adminpanel/news/edit.js']);
		    });
		</script>
		<!-- 配置文件 -->
	    <script type="text/javascript" src="<?=base_url()?>scripts/lib/ueditor.config.js"></script>
	    <!-- 编辑器源码文件 -->
	    <script type="text/javascript" src="<?=base_url()?>scripts/lib/ueditor.all.min.js"></script>
	    <!-- 实例化编辑器 -->
	    <script type="text/javascript">
	    var ue = UE.getEditor('content', {
			    autoHeight: false
			});
	    ue.ready(function() {
		    ue.setContent('<?php echo isset($data_info["content"])?htmlspecialchars_decode($data_info["content"]):"" ?>');
		});
	    
	    </script>
	
	