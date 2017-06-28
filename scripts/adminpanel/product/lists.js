	define(function (require) {
	    var $ = require('jquery');
	    var aci = require('aci');
	    require('bootstrap');
	    require('bootstrapValidator');

		$(function () {
			$("#reverseBtn").click(function(){
				aci.ReverseChecked('pid[]')
			});

			$("#deleteBtn").click(function(){
				var _arr = aci.GetCheckboxValue("pid[]");
				if(_arr.length==0)
				{
					alert("请先勾选明细");
					return false;
				}
				if(confirm('确定要删除吗?'))
				{
					$("#form_list").submit();
				}
			});
        
			 $(".delete-btn").click(function(){
				var v = $(this).val();
				if(confirm('确定要删除吗?'))
				{
					window.location.href= SITE_URL+ "adminpanel/product/delete_one/"+v;
				}
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
					 tmall: {
						 validators: {
							notEmpty: {
								message: '天猫链接输入错误'
							}
						 }
					 },
					 jingdong: {
						 validators: {
							notEmpty: {
								message: '京东链接输入错误'
							}
						 }
					 },
					 1haodian: {
						 validators: {
							notEmpty: {
								message: '1号店链接输入错误'
							}
						 }
					 },
					 teach_video: {
						 validators: {
							notEmpty: {
								message: '视频教程输入错误'
							}
						 }
					 },
					 info_video: {
						 validators: {
							notEmpty: {
								message: '介绍视频输入错误'
							}
						 }
					 },
					 sort: {
						 validators: {
							notEmpty: {
								message: '排序(数字越大优先级越高)输入错误'
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
				}
			}).on('success.form.bv', function(e) {
				
				e.preventDefault();
				$("#dosubmit").attr("disabled","disabled");
				
				$.scojs_message("正在保存，请稍等...", $.scojs_message.TYPE_ERROR);
				$.ajax({
					type: "POST",
					url: edit?SITE_URL+"adminpanel/product/edit/"+id:SITE_URL+"adminpanel/product/add/",
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
