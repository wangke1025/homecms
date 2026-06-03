<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:47:"./template/default/mobile/users/users_login.htm";i:1580687630;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <title>会员登陆-<?php  $tagGlobal = new \think\template\taglib\eju\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_title"); echo $__VALUE__; ?></title>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="stylesheet" href="/public/plugins/layui/css/layui.css?v=<?php echo $version; ?>" media="all">
    <link rel="stylesheet" href="/public/static/user/css/admin.css?v=<?php echo $version; ?>" media="all">
    <link rel="stylesheet" href="/public/static/user/css/login.css?v=<?php echo $version; ?>" media="all">
    <link rel="stylesheet" href="/public/static/user/css/ey_layui.css?v=<?php echo $version; ?>" media="all">
    <link rel="stylesheet" href="/public/static/user/css/page.css?v=<?php echo $version; ?>" media="all">
    <link rel="stylesheet" href="/public/static/user/css/perfect-scrollbar.css?v=<?php echo $version; ?>" media="all">
	<link rel="stylesheet" type="text/css" href="<?php  $tagGlobal = new \think\template\taglib\eju\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_mobile"); echo $__VALUE__; ?>/skin/css/login.css">

    <script type="text/javascript">
        var eyou_basefile = window.location.pathname;
        var module_name = "<?php echo MODULE_NAME; ?>";
        var __root_dir__ = "";
    </script>

    <script type="text/javascript" src="/public/static/user/js/jquery.js?v=<?php echo $version; ?>"></script>
    <script type="text/javascript" src="/public/static/user/js/jquery-ui/jquery-ui.min.js?v=<?php echo $version; ?>"></script>
    <script type="text/javascript" src="/public/plugins/layer-v3.1.0/layer.js?v=<?php echo $version; ?>"></script>
    <script type="text/javascript" src="/public/static/user/js/jquery.cookie.js?v=<?php echo $version; ?>"></script>
    <script type="text/javascript" src="/public/plugins/laydate/laydate.js?v=<?php echo $version; ?>"></script>
    <script type="text/javascript" src="/public/plugins/layui/layui.js?v=<?php echo $version; ?>"></script>
    <script type="text/javascript" src="/public/static/user/js/global.js?v=<?php echo $version; ?>"></script>
    <script type="text/javascript" src="/public/static/user/js/add_js/perfect-scrollbar.js?v=<?php echo $version; ?>"></script>

</head>
<body>

<div class="layadmin-user-login layadmin-user-display-show" id="LAY-user-login" style="display: none;">

    <div class="layadmin-user-login-main">
        <div class="layadmin-user-login-box layadmin-user-login-header">
           <!-- <div style="margin-bottom: 10px;"><img height="34" src="/public/static/admin/images/logo_login.png" alt=""></div> -->
            <p>会员登陆</p>
        </div>
        <div class="layadmin-user-login-box layadmin-user-login-body layui-form">
            <div class="layui-form-item">
                <label class="layadmin-user-login-icon layui-icon layui-icon-username" for="mobile"></label>
                <input type="text" name="mobile" id="mobile" lay-verify="required" placeholder="登陆号码" class="layui-input">
            </div>
            <div class="layui-form-item">
                <label class="layadmin-user-login-icon layui-icon layui-icon-password" for="password"></label>
                <input type="password" name="password" id="password" lay-verify="required" placeholder="密码" class="layui-input">
            </div>
            <?php if($is_vertify == '1'): ?>
            <div class="layui-form-item">
                <div class="layui-row">
                    <div class="layui-col-xs7">
                        <label class="layadmin-user-login-icon layui-icon layui-icon-vercode" for="vertify"></label>
                        <input type="text" name="vertify" id="vertify" lay-verify="required" placeholder="图形验证码" class="layui-input">
                    </div>
                    <div class="layui-col-xs5">
                        <div style="margin-left: 10px;">
                            <img src="<?php echo url("api/Ajax/vertify","type=users_login",true,false);?>"  id="LAY-user-get-vercode"  class="layadmin-user-login-codeimg" >
                        </div>
                    </div>
                </div>
            </div>
            <?php endif; ?>

            <div class="layui-form-item" style="margin-bottom: 20px;">

            </div>
            <div class="layui-form-item">
                <input type="hidden" name="referurl" value="<?php echo $referurl; ?>"/>
                <input type="hidden" name="website" value="website"/>
                <button class="layui-btn layui-btn-fluid" lay-submit lay-filter="LAY-user-login-submit"  data-href="<?php echo url("user/Users/login","",true,false);?>">登 录</button>
            </div>
            <div class="layui-trans layui-form-item layadmin-user-login-other">
                <a  class="layadmin-link" href="<?php echo url("user/Users/reg","",true,false);?>" >注册帐号</a>
                <a  class="layadmin-user-jump-change layadmin-link" href="<?php echo url("user/Users/retrieve_password","",true,false);?>" >忘记密码？</a>
            </div>
        </div>
    </div>
</div>
<script>
    layui.config({
        base: '/public/static/user/' //静态资源所在路径
    }).extend({
        index: 'lib/index' //主入口模块
    }).use(['index', 'user'], function(){
        var $ = layui.$
            ,setter = layui.setter
            ,admin = layui.admin
            ,form = layui.form
            ,router = layui.router()
            ,search = router.search;
        form.render();

        $(document).on('click','#LAY-user-get-vercode', function(){
            var src = "<?php echo url("api/Ajax/vertify","type=users_login",true,false);?>";
            if (src.indexOf('?') > -1) {
                src += '&';
            } else {
                src += '?';
            }
            src += 'r='+Math.floor(Math.random()*100);
            $(this).attr('src', src);//重载验证码
        });

        $(document).keydown(function(event){
            if(event.keyCode ==13){
                $('div button[lay-filter=LAY-user-login-submit]').trigger('click');
            }
        });
        //提交
        form.on('submit(LAY-user-login-submit)', function(obj){
            var load = layer_loading();
            obj.field._ajax = 1;
            //请求登入接口
            $.ajax({
                type : 'post',
                url : obj.elem.attributes['data-href'].value,
                data : obj.field,
                dataType : 'json',
                success : function(res){
                    layer.close(load); //关闭loading
                    if (1 == res.code) {
                        window.location.href = res.url; //后台主页
                    } else {
                        $('#LAY-user-get-vercode').trigger('click');
                        layer.msg(res.msg, {icon: 5, title:false});
                        return false;
                    }
                },
                error: function(e){
                    layer.close(load); //关闭loading
                    showErrorAlert();
                }
            });
        });
    });
</script>
</body>
</html>