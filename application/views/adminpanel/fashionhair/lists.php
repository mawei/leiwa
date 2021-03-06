<?php defined('BASEPATH') or exit('No direct script access allowed.'); ?><?php defined('BASEPATH') or exit('No permission resources.'); ?>
<div class='panel panel-default grid'>
    <div class='panel-heading'>
        <i class='fa fa-table'></i> 潮流发型列表
        <div class='panel-tools'>
            <div class='btn-group'>
                 <a class="btn " href="<?php echo base_url('adminpanel/fashionhair/add')?>"><span class="glyphicon glyphicon-plus"></span> 添加 </a>             </div>
            <div class='badge'><?php echo count($data_list)?></div>
        </div>
    </div>
        <div class='panel-filter '>
      <div class='row'>
        <div class='col-md-12'>
        <form class="form-inline" role="form" method="get">
          
<div class="form-group">
<label for="keyword" class="control-label form-control-static">关键词</label>
<input class="form-control" type="text" name="keyword"  value="<?php echo isset($data_info['keyword'])? $data_info['keyword']:"";?>" id="keyword" placeholder="请输入关键词"/></div>

	<div class="form-group">
				<label for="type" class="col-sm-5 control-label form-control-static">类型</label>
				<div class="col-sm-7 ">
					<select class="form-control "  name="type"  id="type">
				<option value="">==不限==</option>
								<option value='时尚修颜系' <?php if(isset($data_info['type'])&&($data_info['type']=='时尚修颜系')) { ?> selected="selected" <?php } ?>            >时尚修颜系</option>
				<option value='清纯减龄系' <?php if(isset($data_info['type'])&&($data_info['type']=='清纯减龄系')) { ?> selected="selected" <?php } ?>            >清纯减龄系</option>
				<option value='职场御姐系' <?php if(isset($data_info['type'])&&($data_info['type']=='职场御姐系')) { ?> selected="selected" <?php } ?>            >职场御姐系</option>
				<option value='未来发型趋势' <?php if(isset($data_info['type'])&&($data_info['type']=='未来发型趋势')) { ?> selected="selected" <?php } ?>            >未来发型趋势</option>
</select>
				</div>
			</div>
<button type="submit" name="dosubmit" value="搜索" class="btn btn-success"><i class='glyphicon glyphicon-search'></i></button>        </form>
        </div>
      </div> 
    </div>
          <form method="post" id="form_list"  action="<?php echo base_url('adminpanel/fashionhair/delete_all')?>"  > 
    <div class='panel-body '>
    <?php if($data_list):?>
        <table class="table table-hover dataTable" id="checkAll">
          <thead>
            <tr>
              <th>#</th>
                            <?php $css=""; $next_url = base_url('adminpanel/fashionhair?order=type&dir=desc'); ?>
              <?php if(($order=='type'&&$dir=='desc')) { ?>
              <?php $css="sorting_desc";$next_url = base_url('adminpanel/fashionhair?order=type&dir=asc'); ?>
              <?php } elseif (($order=='type'&&$dir=='asc')) { ?>
              <?php $css="sorting_asc";?>
              <?php } ?><th class="sorting <?php echo $css;?>"   onclick="window.location.href='<?php echo $next_url;?>'"   nowrap="nowrap">类型</th>
                            <?php $css=""; $next_url = base_url('adminpanel/fashionhair?order=title&dir=desc'); ?>
              <?php if(($order=='title'&&$dir=='desc')) { ?>
              <?php $css="sorting_desc";$next_url = base_url('adminpanel/fashionhair?order=title&dir=asc'); ?>
              <?php } elseif (($order=='title'&&$dir=='asc')) { ?>
              <?php $css="sorting_asc";?>
              <?php } ?><th class="sorting <?php echo $css;?>"   onclick="window.location.href='<?php echo $next_url;?>'"   nowrap="nowrap">标题</th>
              <th>操作</th>
            </tr>
          </thead>
          <tbody>
          <?php foreach($data_list as $k=>$v):?>
            <tr>
              <td><input type="checkbox" name="pid[]" value="<?php echo $v['fashionhair_id']?>" /></td>
                             <td><?php echo $v['type']?></td>
                            <td><?php echo $v['title']?></td>
              <td>
                            	<a href="<?php echo base_url('adminpanel/fashionhair/readonly/'.$v['fashionhair_id'])?>"  class="btn btn-default btn-xs"><span class="glyphicon glyphicon-share-alt"></span> 查看</a>
                                            <a href="<?php echo base_url('adminpanel/fashionhair/edit/'.$v['fashionhair_id'])?>"  class="btn btn-default btn-xs"><span class="glyphicon glyphicon-edit"></span> 修改</a>
                                            <button type="button" class="btn btn-default btn-xs delete-btn" value="<?php echo $v['fashionhair_id'];?>"><span class="glyphicon glyphicon-remove"></span> 删除</button>
                
              </td>
            </tr>
            <?php endforeach;?>
            
          </tbody>
        </table> 
    	</div>
      <div class="panel-footer">
        <div class="pull-left">
          <div class="btn-group">
                  <button type="button" class="btn btn-default" id="reverseBtn"><span class="glyphicon glyphicon-ok"></span> 反选</button>
            <button type="button" id="deleteBtn"  class="btn btn-default"><span class="glyphicon glyphicon-remove"></span> 删除勾选</button>
                 </div>
      </div>
        <div class="pull-right">
        <?php echo $pages;?>
        </div>
      </div> 
      </form>  
  </div>
<?php else:?>
    <div class="no-result">-- 暂无数据 -- </div>
<?php endif;?>

	    <script language="javascript" type="text/javascript">
    require(['<?php echo SITE_URL?>scripts/common.js'], function (common) {
        require(['<?php echo SITE_URL?>scripts/adminpanel/fashionhair/lists.js']);
    });
</script>
    