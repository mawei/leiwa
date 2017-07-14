	function uploadOneFile(inputId,w,h,iscallback){
		if(!w) w=screen.width-4;
		if(!h) h=screen.height-95;
		if(!iscallback)iscallback=0;
		var window_url = SITE_URL+'adminpanel//news/upload/';
		$.extDialogFrame(window_url+'1/image/'+inputId+'/'+iscallback,{model:true,width:w,height:h,title:'请上传...',buttons:null});
	}
	function getImage(v,s,w,h){
		$("#image").val(v);
		$("#image_SRC").attr("src",SITE_URL+"images/"+v);
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


		$("#image_a").click(function(){
			uploadOneFile('image',550,350,1)
		});
		$("#image_b").click(function(){
			uploadOneFile('image',550,350,1)
		});

            $('#validateform').bootstrapValidator({
				message: '输入框不能为空',
				feedbackIcons: {
					valid: 'glyphicon glyphicon-ok',
					invalid: 'glyphicon glyphicon-remove',
					validating: 'glyphicon glyphicon-refresh'
				},
				fields: {
					 title: {
						 validators: {
							notEmpty: {
								message: '标题输入错误'
							}
						 }
					 },

					 memo: {
						 validators: {
							notEmpty: {
								message: '新闻简介输入错误'
							}
						 }
					 },

					 image: {
						 validators: {
							notEmpty: {
								message: '配图输入错误'
							}
						 }
					 },

					 type: {
						 validators: {
							notEmpty: {
								message: '新闻类型输入错误'
							}
						 }
					 },

					 years: {
						 validators: {
							notEmpty: {
								message: '所属年份输入错误'
							}
						 }
					 },

					 content: {
						 validators: {
							notEmpty: {
								message: '内容输入错误'
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
					url: is_edit?SITE_URL+"adminpanel/news/edit/"+id:SITE_URL+"adminpanel/news/add/",
					data:  $("#validateform").serialize(),
					success:function(response){

						var dataObj=jQuery.parseJSON(response);
						if(dataObj.status)
						{
							$.scojs_message('操作成功,3秒后将返回列表页...', $.scojs_message.TYPE_OK);
							aci.GoUrl(SITE_URL+'adminpanel/news/',1);
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
