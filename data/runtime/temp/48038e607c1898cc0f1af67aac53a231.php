<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:44:"./application/admin/template/system/smtp.htm";i:1580687630;s:78:"/www/wwwroot/ejucms.wingle.com.cn/application/admin/template/public/layout.htm";i:1580687630;s:75:"/www/wwwroot/ejucms.wingle.com.cn/application/admin/template/system/bar.htm";i:1581495854;s:78:"/www/wwwroot/ejucms.wingle.com.cn/application/admin/template/public/footer.htm";i:1580687630;}*/ ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="renderer" content="webkit">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <link rel="stylesheet" href="/public/plugins/layui/css/layui.css?v=<?php echo $version; ?>" media="all">
  <link rel="stylesheet" href="/public/static/admin/css/admin.css?v=<?php echo $version; ?>" media="all">
  <link rel="stylesheet" href="/public/static/admin/css/ey_layui.css?v=<?php echo $version; ?>" media="all">
  <link rel="stylesheet" href="/public/static/admin/font/ali-font/iconfont.css?v=<?php echo $version; ?>" media="all">
  <script type="text/javascript">
    var eyou_basefile = window.location.pathname;
    var module_name = "<?php echo MODULE_NAME; ?>";
    var __root_dir__ = "";
  </script>  
  <script type="text/javascript" src="/public/static/admin/js/jquery.js?v=<?php echo $version; ?>"></script>
  <script type="text/javascript" src="/public/static/admin/js/jquery-ui/jquery-ui.min.js?v=<?php echo $version; ?>"></script>
  <script type="text/javascript" src="/public/plugins/layer-v3.1.0/layer.js?v=<?php echo $version; ?>"></script>
  <script type="text/javascript" src="/public/static/admin/js/jquery.cookie.js?v=<?php echo $version; ?>"></script>
  <script type="text/javascript" src="/public/plugins/laydate/laydate.js?v=<?php echo $version; ?>"></script>
  <script src="/public/plugins/layui/layui.js?v=<?php echo $version; ?>"></script>
  <script src="/public/static/admin/js/global.js?v=<?php echo $version; ?>"></script>
</head>
<body>
	<div class="layui-fluid" id="LAY-component-layer-list">
		<div class="layui-row">
			<div class="layui-col-md12">
				<div class="layui-card">
					<div class="web-system">
						<div class="layui-tab layui-tab-card">
							<?php if(\think\Request::instance()->param('tabase') != '-1'): ?>
    <ul class="layui-tab-title">
        <?php if(is_check_access('System@web') == '1'): ?>
        <li <?php if('web'==ACTION_NAME): ?>class="layui-this"<?php endif; ?>><a href="<?php echo url('System/web'); ?>">网站设置</a></li>
        <?php endif; if(is_check_access('System@web2') == '1'): ?>
        <li <?php if('web2'==ACTION_NAME): ?>class="layui-this"<?php endif; ?>><a href="<?php echo url('System/web2'); ?>">核心设置</a></li>
        <?php endif; if(is_check_access('System@basic') == '1'): ?>
        <li <?php if('basic'==ACTION_NAME): ?>class="layui-this"<?php endif; ?>><a href="<?php echo url('System/basic'); ?>">附件设置</a></li>
        <?php endif; if(is_check_access('System@smtp') == '1'): ?>
        <li <?php if(preg_match('/^smtp/i', ACTION_NAME)): ?>class="layui-this"<?php endif; ?>><a href="<?php echo url('System/smtp'); ?>">接口配置</a></li>
        <?php endif; if(is_check_access('UsersConfig@register') == '1'): ?>
        <li <?php if('register'==ACTION_NAME): ?>class="layui-this"<?php endif; ?>><a href="<?php echo url('UsersConfig/register'); ?>">会员设置</a></li>
        <?php endif; if(is_check_access('System@question') == '1'): ?>
        <!--<li <?php if(preg_match('/^question/i', ACTION_NAME)): ?>class="layui-this"<?php endif; ?>><a href="<?php echo url('System/question'); ?>">问答配置</a></li>-->
        <?php endif; ?>
    </ul>
<?php endif; ?>
							<div class="layui-tab-content" style="padding:10px 0">
								<div class="layui-tab-item layui-show">
									<div class="layui-row layui-col-space15">
										<div class="layui-col-md12">
											<div class="layui-card">
												<div class="layui-card-body" pad15>
													<div class="layui-card-header">邮件配置</div>
													<div class="layui-form" wid100 lay-filter="">
														<div class="layui-form-item layadmin-layer-demo">
															<label class="layui-form-label">邮件模板</label>
															<div class="layui-input-inline">
																<a id="smtp_tpl_list" style="cursor:pointer;color:#3db9b2;line-height: 34px;">模板设置</a>
															</div>
														</div>
														<div class="layui-form-item">
															<label class="layui-form-label"><b>*</b>SMTP服务器</label>
															<div class="layui-input-inline">
																<input type="text" name="smtp_server" value="<?php echo (isset($config['smtp_server']) && ($config['smtp_server'] !== '')?$config['smtp_server']:''); ?>" lay-verify="required"
																 class="layui-input">
															</div>
															<div class="layui-form-inline2">发送邮箱的smtp地址，如: smtp.qq.com或smtp.gmail.com</div>
														</div>
														<div class="layui-form-item">
															<label class="layui-form-label"><b>*</b>SMTP端口号</label>
															<div class="layui-input-inline">
																<input type="text" name="smtp_port" lay-verify="required|number" value="<?php echo (isset($config['smtp_port']) && ($config['smtp_port'] !== '')?$config['smtp_port']:465); ?>"
																 class="layui-input">
															</div>
															<div class="layui-form-mid layui-word-aux ey_helptips"></div>
															<div class="layui-form-inline2 ey_helptips_txt">smtp的端口，默认为465，具体请参看各STMP服务商的设置说明。</div>
															<div class="layui-form-inline2"><span style="color: red;">注意：如果使用阿里云服务器或Gmail，请将端口设为465，其他的可以尝试端口设为25</span></div>
														</div>
														<div class="layui-form-item">
															<label class="layui-form-label"><b>*</b>邮箱账号</label>
															<div class="layui-input-inline">
																<input type="text" name="smtp_user" lay-verify="required|email" value="<?php echo (isset($config['smtp_user']) && ($config['smtp_user'] !== '')?$config['smtp_user']:''); ?>"
																 class="layui-input">
															</div>
														</div>
														<div class="layui-form-item">
															<label class="layui-form-label"><b>*</b>邮箱授权码</label>
															<div class="layui-input-inline">
																<input type="text" name="smtp_pwd" value="<?php echo (isset($config['smtp_pwd']) && ($config['smtp_pwd'] !== '')?$config['smtp_pwd']:''); ?>" lay-verify="required" class="layui-input">
															</div>
															<div class="layui-input-inline layui-btn-container">
																<a href="http://www.ejucms.com/index.php?m=plugins&c=Ask&a=details&ask_id=8" target="_blank" style="border-color:#eee"
																 class="layui-btn-sm fl">如何获取？</a>
															</div>
														</div>
														<div class="layui-form-item">
															<label class="layui-form-label"><b>*</b>测试邮箱</label>
															<div class="layui-input-inline">
																<input type="text" name="smtp_from_eamil" lay-verify="required|email" value="<?php echo (isset($config['smtp_from_eamil']) && ($config['smtp_from_eamil'] !== '')?$config['smtp_from_eamil']:''); ?>"
																 class="layui-input">
															</div>
															<div class="layui-input-inline">
																<button class="layui-btn layui-btn-sm" lay-submit lay-filter="sendEmail">发送</button>
															</div>
														</div>
														<div class="layui-form-item">
															<div class="layui-input-block">
																<button class="layui-btn" lay-submit lay-filter="formSubmit">确认提交</button>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="layui-col-md12">
										    <div class="layui-card">
										        <div class="layui-card-body" pad15>
										            <div class="layui-form" wid100 lay-filter="">
									                  <div class="layui-card-header">短信配置</div>
										                <div class="layui-form-item layadmin-layer-demo">
										                    <label class="layui-form-label">短信模板</label>
										                    <div class="layui-input-inline">
										                        <a id="sms_tpl_list" style="cursor:pointer;color:#3db9b2;line-height: 34px;">模板设置</a>
										                    </div>
										                </div>
										                <div class="layui-form-item">
										                    <label class="layui-form-label"><b>*</b>选择短信平台</label>
										                    <div class="layui-input-inline">
																<select name="sms_platform" id="sms_platform">
																	<option value="1" <?php if(isset($config['sms_platform']) && $config['sms_platform'] == 1): ?>selected="selected"<?php endif; ?>>阿里云短信</option>
																</select>
										                    </div>
										                </div>
										
										
										                <div class="layui-form-item">
										                    <label class="layui-form-label"><b>*</b>短信平台[appkey]</label>
										                    <div class="layui-input-inline">
										                        <input id="sms_appkey" name="sms_appkey"  lay-verify="required" value="<?php echo (isset($sms_config['sms_appkey']) && ($sms_config['sms_appkey'] !== '')?$sms_config['sms_appkey']:''); ?>" class="layui-input" type="text"/>
										                    </div>
										                    <div class="layui-form-mid layui-word-aux ey_helptips"></div>
										                    <div class="layui-form-inline2 ey_helptips_txt">短信平台配置appkey/keyid</div>
										                </div>
										
										                <div class="layui-form-item">
										                    <label class="layui-form-label"><b>*</b>短信平台[secretKey]</label>
										                    <div class="layui-input-inline">
										                        <input id="sms_secretkey" name="sms_secretkey"  lay-verify="required" value="<?php echo (isset($sms_config['sms_secretkey']) && ($sms_config['sms_secretkey'] !== '')?$sms_config['sms_secretkey']:''); ?>" class="layui-input" type="text"/>
										                    </div>
										                    <div class="layui-form-mid layui-word-aux ey_helptips"></div>
										                    <div class="layui-form-inline2 ey_helptips_txt">短信平台配置secretKey</div>
										                </div>
										                <div class="layui-form-item">
										                    <label class="layui-form-label">公司名/品牌名/产品名</label>
										                    <div class="layui-input-inline">
										                        <input id="sms_product" name="sms_product" value="<?php echo (isset($sms_config['sms_product']) && ($sms_config['sms_product'] !== '')?$sms_config['sms_product']:''); ?>" class="layui-input" type="text"/>
										                    </div>
										                    <div class="layui-form-mid layui-word-aux ey_helptips"></div>
										                    <div class="layui-form-inline2 ey_helptips_txt">公司名/品牌名/产品名</div>
										                </div>
										                <div class="layui-form-item">
										                    <label class="layui-form-label"><b>*</b>短信码超时时间</label>
										                    <div class="layui-input-inline">
										                        <select id="sms_time_out" name="sms_time_out">
										                            <option value="60" <?php if(isset($sms_config['sms_time_out']) && $sms_config['sms_time_out'] == 60): ?>selected="selected"<?php endif; ?>>1分钟</option>
										                            <option value="120"<?php if(isset($sms_config['sms_time_out']) && $sms_config['sms_time_out'] == 120): ?>selected="selected"<?php endif; ?>>2分钟</option>
										                            <option value="300"<?php if(isset($sms_config['sms_time_out']) && $sms_config['sms_time_out'] == 300): ?>selected="selected"<?php endif; ?>>5分钟</option>
										                            <option value="600"<?php if(isset($sms_config['sms_time_out']) && $sms_config['sms_time_out'] == 600): ?>selected="selected"<?php endif; ?>>10分钟</option>
										                            <option value="1200"<?php if(isset($sms_config['sms_time_out']) && $sms_config['sms_time_out'] == 1200): ?>selected="selected"<?php endif; ?>>20分钟</option>
										                            <option value="1800"<?php if(isset($sms_config['sms_time_out']) && $sms_config['sms_time_out'] == 1800): ?>selected="selected"<?php endif; ?>>30分钟</option>
										                        </select>
										                    </div>
										                    <div class="layui-form-mid layui-word-aux ey_helptips"></div>
										                    <div class="layui-form-inline2 ey_helptips_txt">发送短信验证码间隔时间</div>
										                </div>
										                <div class="layui-form-item">
										                    <label class="layui-form-label"><b>*</b>测试接收的手机号码</label>
										                    <div class="layui-input-inline">
										                        <input value="<?php echo (isset($sms_config['sms_test_mobile']) && ($sms_config['sms_test_mobile'] !== '')?$sms_config['sms_test_mobile']:''); ?>" name="sms_test_mobile" id="sms_test_mobile" class="layui-input" type="text">
										                    </div>
										                    <div class="layui-input-inline">
										                        <button class="layui-btn layui-btn-sm" lay-submit lay-filter="sendMobile">发送</button>
										                    </div>
										                </div>
										                <div class="layui-form-item">
										                    <div class="layui-input-block">
										                        <button class="layui-btn" lay-submit lay-filter="formSubmitSms">确认提交</button>
										                    </div>
										                </div>
										            </div>
										        </div>
										    </div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<script type="text/javascript">
			layui.config({
				base: '/public/static/admin/' //静态资源所在路径
					,
				version: '<?php echo $version; ?>'
			}).extend({
				index: 'lib/index' //主入口模块
			}).use(['index', 'form'], function() {
				var $ = layui.$,
					layer = layui.layer,
					form = layui.form;

				$('#smtp_tpl_list').click(function() {
					var iframes = layer.open({
						type: 2,
						title: '邮件模板',
						fixed: true, //不固定
						shadeClose: false,
						shade: 0.3,
						area: ['800px', '400px'],
						content: "<?php echo url('System/smtp_tpl'); ?>"
					});
				});
				
				$('#sms_tpl_list').click(function(){
				    var iframes = layer.open({
				        type: 2,
				        title: '短信模板',
				        fixed: true, //不固定
				        shadeClose: false,
				        shade: 0.3,
				        area: ['900px', '450px'],
				        content: "<?php echo url('System/sms_tpl'); ?>"
				    });
				});

				form.on('submit(sendEmail)', function(data) {
					if (data.field.smtp_from_eamil == '') {
						showErrorMsg('接收邮箱的地址不能为空！');
						$('input[name=smtp_from_eamil]').focus();
						return false;
					} else {
						var that = this;
						var load = layer_loading();
						var txt = $(that).html();
						$(that).html('发送中…');

						data.field._ajax = 1;
						$.ajax({
							type: "post",
							data: data.field,
							dataType: 'json',
							url: "<?php echo url('System/send_email'); ?>",
							success: function(res) {
								layer.close(load);
								$(that).html(txt);
								if (res.code == 1) {
									layer.msg(res.msg, {
										icon: 1,
										time: 1000
									});
								} else {
									if (res.data.icon && res.data.icon == 4) {
										layer.alert(res.msg, {
											icon: res.data.icon,
											title: false,
											closeBtn: false
										});
									} else {
										showErrorMsg(res.msg);
									}
								}
							},
							error: function() {
								layer.close(load);
								$(that).html(txt);
								showErrorAlert('发送超时！');
							}
						})
					}
					return false;
				});

				//监听提交
				form.on('submit(formSubmit)', function(data) {
					var load = layer_loading();
					data.field._ajax = 1;
					$.ajax({
						type: 'post',
						url: "<?php echo url('System/smtp'); ?>",
						data: data.field,
						dataType: 'json',
						success: function(res) {
							layer.close(load); //关闭loading
							if (res.code == 1) {
								layer.msg(res.msg, {
									icon: 1,
									time: 1000
								}, function() {
									window.location.reload();
								});
							} else {
								if (res.data.icon && res.data.icon == 4) {
									layer.alert(res.msg, {
										icon: res.data.icon,
										title: false,
										closeBtn: false
									}, function() {
										window.location.reload();
									});
								} else {
									showErrorMsg(res.msg);
								}
							}
						},
						error: function(e) {
							layer.close(load); //关闭loading
							showErrorAlert();
						}
					});
					return false;
				});
				//测试手机发送
                form.on('submit(sendMobile)', function(data){
                    if (data.field.sms_test_mobile == '') {
                        showErrorMsg('测试手机号码不能为空！');
                        $('input[name=sms_test_mobile]').focus();
                        return false;
                    } else {
                        var that = this;
                        var load = layer_loading();
                        var txt = $(that).html();
                        $(that).html('发送中…');
                        data.field._ajax = 1;
                        $.ajax({
                            type: "post",
                            data: data.field,
                            dataType: 'json',
                            url: "<?php echo url('System/send_mobile'); ?>",
                            success: function (res) {
                                layer.close(load);
                                $(that).html(txt);
                                if (res.code == 1) {
                                    layer.msg('发送成功', {icon: 1, time:1000});
                                } else {
                                    showErrorMsg(res.msg);
                                }
                            },
                            error: function(){
                                layer.close(load);
                                $(that).html(txt);
                                showErrorAlert('发送超时！');
                            }
                        })
                    }
                    return false;
                });
                //监听提交短信
                form.on('submit(formSubmitSms)', function(data) {
                    var load = layer_loading();
                    data.field._ajax = 1;
                    $.ajax({
                        type: 'post',
                        url: "<?php echo url('System/sms'); ?>",
                        data: data.field,
                        dataType: 'json',
                        success: function(res) {
                            layer.close(load); //关闭loading
                            if (res.code == 1) {
                                layer.msg(res.msg, {
                                    icon: 1,
                                    time: 1000
                                }, function() {
                                    window.location.reload();
                                });
                            } else {
                                if (res.data.icon && res.data.icon == 4) {
                                    layer.alert(res.msg, {
                                        icon: res.data.icon,
                                        title: false,
                                        closeBtn: false
                                    }, function() {
                                        window.location.reload();
                                    });
                                } else {
                                    showErrorMsg(res.msg);
                                }
                            }
                        },
                        error: function(e) {
                            layer.close(load); //关闭loading
                            showErrorAlert();
                        }
                    });
                    return false;
                });


			});
		</script>

		
</body>
</html>
