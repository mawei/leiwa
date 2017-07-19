	function uploadOneFile(inputId,w,h,iscallback){
		if(!w) w=screen.width-4;
		if(!h) h=screen.height-95;
		if(!iscallback)iscallback=0;
		var window_url = SITE_URL+'adminpanel//product/upload/';
		$.extDialogFrame(window_url+'1/image/'+inputId+'/'+iscallback,{model:true,width:w,height:h,title:'请上传...',buttons:null});
	}
	function getTeach_video(v,s,w,h){
		$("#teach_video").val(v);
		$("#teach_video_SRC").attr("src",SITE_URL+"video/"+v);
		$("#dialog" ).dialog();$("#dialog" ).dialog("close");
	}
	function getInfo_video(v,s,w,h){
		$("#info_video").val(v);
		$("#info_video_SRC").attr("src",SITE_URL+"video/"+v);
		$("#dialog" ).dialog();$("#dialog" ).dialog("close");
	}
	function getImage(v,s,w,h){
		$("#image").val(v);
		$("#image_SRC").attr("src",SITE_URL+"images/"+v);
		$("#dialog" ).dialog();$("#dialog" ).dialog("close");
	}


	function getQr_image(v,s,w,h){
		$("#qr_image").val(v);
		$("#qr_image_SRC").attr("src",SITE_URL+"images/"+v);
		$("#dialog" ).dialog();$("#dialog" ).dialog("close");
	}

	function getBig_image(v,s,w,h){
		$("#big_image").val(v);
		$("#big_image_SRC").attr("src",SITE_URL+"images/"+v);
		$("#dialog" ).dialog();$("#dialog" ).dialog("close");
	}


	function getInfo_image(v,s,w,h){
		$("#info_image").val(v);
		$("#info_image_SRC").attr("src",SITE_URL+"images/"+v);
		$("#dialog" ).dialog();$("#dialog" ).dialog("close");
	}


	function getTeach_image(v,s,w,h){
		$("#teach_image").val(v);
		$("#teach_image_SRC").attr("src",SITE_URL+"images/"+v);
		$("#dialog" ).dialog();$("#dialog" ).dialog("close");
	}


	define(function (require) {
	var $ = require('jquery');
	var aci = require('aci');
	require('bootstrap');
	require('bootstrapValidator');
	require('message');
	require('jquery-ui');
	require('jquery-ui-dialog-extend');
	require('datetimepicker');

		$(function () {


		$("#teach_video_a").click(function(){
			uploadOneFile('teach_video',550,350,1)
		});
		$("#teach_video_b").click(function(){
			uploadOneFile('teach_video',550,350,1)
		});
		$("#info_video_a").click(function(){
			uploadOneFile('info_video',550,350,1)
		});
		$("#info_video_b").click(function(){
			uploadOneFile('info_video',550,350,1)
		});
		$("#image_a").click(function(){
			uploadOneFile('image',550,350,1)
		});
		$("#image_b").click(function(){
			uploadOneFile('image',550,350,1)
		});
		$("#big_image_a").click(function(){
			uploadOneFile('big_image',550,350,1)
		});
		$("#big_image_b").click(function(){
			uploadOneFile('big_image',550,350,1)
		});
		$("#qr_image_a").click(function(){
			uploadOneFile('qr_image',550,350,1)
		});
		$("#qr_image_b").click(function(){
			uploadOneFile('qr_image',550,350,1)
		});
		$("#info_image_a").click(function(){
			uploadOneFile('info_image',550,350,1)
		});
		$("#info_image_b").click(function(){
			uploadOneFile('info_image',550,350,1)
		});
		$("#teach_image_a").click(function(){
			uploadOneFile('teach_image',550,350,1)
		});
		$("#teach_image_b").click(function(){
			uploadOneFile('teach_image',550,350,1)
		});
            $('#validateform').bootstrapValidator({
				message: '输入框不能为空',
				feedbackIcons: {
					valid: 'glyphicon glyphicon-ok',
					invalid: 'glyphicon glyphicon-remove',
					validating: 'glyphicon glyphicon-refresh'
				},
				fields: {
					 name: {
						 validators: {
							notEmpty: {
								message: '产品名称输入错误'
							}
						 }
					 },

					 type: {
						 validators: {
							notEmpty: {
								message: '类型输入错误'
							}
						 }
					 },

					 style: {
						 validators: {
							notEmpty: {
								message: '型号输入错误'
							}
						 }
					 },

					 info: {
						 validators: {
							notEmpty: {
								message: '介绍输入错误'
							}
						 }
					 },

					 memo: {
						 validators: {
							notEmpty: {
								message: '产品亮点输入错误'
							}
						 }
					 },

					 qudao: {
						 validators: {
							notEmpty: {
								message: '购买渠道输入错误'
							}
						 }
					 },

				}
			}).on('success.form.bv', function(e) {

				e.preventDefault();
				$("#dosubmit").attr("disabled","disabled");

				$.scojs_message("正在保存，请稍等...", $.scojs_message.TYPE_ERROR);
				$.ajax({
					type: "POST",
					url: is_edit?SITE_URL+"adminpanel/product/edit/"+id:SITE_URL+"adminpanel/product/add/",
					data:  $("#validateform").serialize(),
					success:function(response){
						var dataObj=jQuery.parseJSON(response);
						if(dataObj.status)
						{
							$.scojs_message('操作成功,3秒后将返回列表页...', $.scojs_message.TYPE_OK);
							aci.GoUrl(SITE_URL+'adminpanel/product/',1);
						}else
						{
							$.scojs_message(dataObj.tips, $.scojs_message.TYPE_ERROR);
							$("#dosubmit").removeAttr("disabled");
						}
					},
					error: function (request, status, error) {
						$.scojs_message(request.responseText, $.scojs_message.TYPE_ERROR);
						$("#dosubmit").removeAttr("disabled");
					}
				});

			}).on('error.form.bv',function(e){ $.scojs_message('带*号不能为空', $.scojs_message.TYPE_ERROR);$("#dosubmit").removeAttr("disabled");});

        });
});
