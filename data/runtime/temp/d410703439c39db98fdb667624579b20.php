<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:54:"./application/admin/template/users_config/register.htm";i:1581464772;s:78:"/www/wwwroot/ejucms.wingle.com.cn/application/admin/template/public/layout.htm";i:1580687630;s:75:"/www/wwwroot/ejucms.wingle.com.cn/application/admin/template/system/bar.htm";i:1581495854;s:78:"/www/wwwroot/ejucms.wingle.com.cn/application/admin/template/public/footer.htm";i:1580687630;}*/ ?>
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
                        <!--<?php if(\think\Request::instance()->param('tabase') != '-1'): ?>-->
                        <!--<ul class="layui-tab-title">-->
                            <!--<?php if(is_check_access('UsersConfig@register') == '1'): ?>-->
                            <!--<li <?php if('register'==ACTION_NAME): ?>class="layui-this"<?php endif; ?>><a href="<?php echo url('UsersConfig/register'); ?>">注册设置</a></li>-->
                            <!--<?php endif; ?>-->
                        <!--</ul>-->
                        <!--<?php endif; ?>-->
                        <div class="layui-tab-content" style="padding:10px 0">
                            <div class="layui-tab-item layui-show">
                                <div class="layui-row layui-col-space15">
                                    <div class="layui-col-md12">
                                        <div class="layui-card">
                                            <div class="layui-card-body" pad15>
                                                <div class="layui-form" wid100>
                                                    <div class="layui-form-item">
                                                        <label class="layui-form-label">会员中心</label>
                                                        <div class="layui-input-block">
                                                            <input type="checkbox" lay-filter="users_open_register" lay-skin="switch" lay-text="开启|关闭" <?php if(!isset($info['users_open_register']) OR $info['users_open_register'] == 1): ?>checked<?php endif; ?>>
                                                            <input type="hidden" id="users_open_register" name="users[users_open_register]" value="<?php echo (isset($info['users_open_register']) && ($info['users_open_register'] !== '')?$info['users_open_register']:'0'); ?>" />
                                                        </div>
                                                    </div>
                                                    <div class="layui-form-item">
                                                        <label class="layui-form-label">注册验证</label>
                                                        <div class="layui-input-inline">
                                                            <select name="users[users_verification]" lay-ignore=""  class="layui-input">
                                                                <?php if(is_array($users_verification_list) || $users_verification_list instanceof \think\Collection || $users_verification_list instanceof \think\Paginator): $i = 0; $__LIST__ = $users_verification_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                                                <option value="<?php echo $key; ?>" <?php if($info['users_verification'] == $key): ?>selected="true"<?php endif; ?>><?php echo $vo; ?></option>
                                                                <?php endforeach; endif; else: echo "" ;endif; ?>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="layui-form-item layui-form-text ey-text">
                                                        <label class="layui-form-label">禁止注册用户名</label>
                                                        <div class="layui-input-inline">
                                                            <textarea id="users_reg_notallow" name="users[users_reg_notallow]" class="layui-textarea ey-input" placeholder="建议不超过200个字符" data-num="200"><?php echo (isset($info['users_reg_notallow']) && ($info['users_reg_notallow'] !== '')?$info['users_reg_notallow']:''); ?></textarea>
                                                        </div>
                                                        <div class="layui-input-inline layui-form-mid layui-word-aux ey_helptips"></div>
                                                        <div class="layui-form-inline2 ey_helptips_txt">前台注册时禁止注册的用户名列表，以逗号(,)分隔开</div>
                                                    </div>

                                                    <div class="layui-form-item layui-form-text ey-text">
                                                        <label class="layui-form-label">经纪人标签</label>
                                                        <div class="layui-input-inline">
                                                            <textarea id="users_label_value" name="users[users_label_value]" class="layui-textarea ey-input" placeholder="建议不超过200个字符" data-num="200"><?php echo (isset($info['users_label_value']) && ($info['users_label_value'] !== '')?$info['users_label_value']:''); ?></textarea>
                                                        </div>
                                                        <div class="layui-input-inline layui-form-mid layui-word-aux ey_helptips"></div>
                                                        <div class="layui-form-inline2 ey_helptips_txt">前台注册时禁止注册的用户名列表，以逗号(,)分隔开</div>
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">

        $(document).ready(function(){
            // 鼠标事件，加载查看大图和删除图片
            $(".upload-img").live('mouseover', function(){
                $(this).find('div.icaction').show();
                $(this).find('div.cover-bg').show();
            }).live('mouseout', function(){
                $(this).find('div.icaction').hide();
                $(this).find('div.cover-bg').hide();
            });
        });

        layui.config({
            base: '/public/static/admin/' //静态资源所在路径
            ,version: '<?php echo $version; ?>'
        }).extend({
            index: 'lib/index' //主入口模块
        }).use(['index', 'form'], function(){
            var $ = layui.$
                ,layer = layui.layer
                ,form = layui.form;

            tipsText();

            /* 触发事件 */
            var active = {
                customvar_index: function(){
                    //iframe窗
                    var iframes = layer.open({
                        type: 2,
                        title: '自定义变量列表',
                        fixed: true, //不固定
                        shadeClose: false,
                        shade: 0.3,
                        content: "<?php echo url('System/customvar_index'); ?>",
                        end: function(){
                            layer_loading();
                            window.location.reload();
                        }
                    });
                    layer.full(iframes);
                }
            };

            $('#LAY-component-layer-list .layui-btn').on('click', function(){
                var type = $(this).data('type');
                active[type] && active[type].call(this);
            });

            // 监听开关
            form.on('switch', function(data){
                var elemId = data.elem.attributes['lay-filter']['nodeValue'];
                if (data.elem.checked) {
                    this.value = 1;
                } else {
                    this.value = 0;
                }
                $("#"+elemId).val(this.value);
//                $("input[name='"+elemId+"']").val(this.value);
            });

            //监听提交
            form.on('submit(formSubmit)', function(data){
                var load = layer_loading();
                data.field._ajax = 1;
                $.ajax({
                    type : 'post',
                    url : "<?php echo url('UsersConfig/register'); ?>",
                    data : data.field,
                    dataType : 'json',
                    success : function(res){
                        layer.close(load); //关闭loading
                        if(res.code == 1){
                            layer.msg(res.msg, {icon: 1, time: 1000}, function(){
                                window.location.reload();
                            });
                        }else{
                            showErrorMsg(res.msg);
                        }
                    },
                    error: function(e){
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
