<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:48:"./application/admin/template/minipro/setting.htm";i:1581982514;s:78:"/www/wwwroot/ejucms.wingle.com.cn/application/admin/template/public/layout.htm";i:1580687630;s:78:"/www/wwwroot/ejucms.wingle.com.cn/application/admin/template/public/footer.htm";i:1580687630;}*/ ?>
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
                <div class="">
                    <form class="layui-form" id="post_form" action="<?php echo url('Minipro/setting'); ?>" wid100
                          onsubmit="return false;">
                        <div class="layui-tab  layui-tab-card">
                            <ul class="layui-tab-title">
                                <!-- <li><a href="<?php echo url('Minipro/global_conf'); ?>"><span>1.常规配置</span></a></li> -->
                                <li><a href="<?php echo url('Minipro/home_conf'); ?>"><span>1.首页配置</span></a></li>
                                <!-- <li><a href="<?php echo url('Minipro/about_conf'); ?>"><span>2.联系我们</span></a></li> -->
                                <li class="layui-this">2.生成小程序</li>
                                <li><a href="<?php echo url('Minipro/lists'); ?>"><span>3.收客列表</span></a></li>
                            </ul>
                            <div class="layui-tab-content web-system " style="padding:10px 0">
                                <!--常规选项-->
                                <div class="layui-tab-item layui-show">
                                    <div class="layui-row layui-col-space15">
                                        <div class="layui-col-md12">
                                            <div class="layui-card">
                                                <div class="layui-card-body" pad15>
                                                    <!--折叠面板--stra-->
                                                    <!--模块一-->
                                                    <div class="layui-collapse mt20" lay-filter="component-panel">
                                                        <div class="layui-colla-item">
                                                            <h2 class="layui-colla-title" style="color: #777;font-weight: bold;">联系方式</h2>
                                                            <div class="layui-colla-content layui-show">
                                                                <div class="" wid100 lay-filter="">
                                                                    <div class="layui-form-item">
                                                                        <label class="layui-form-label"><b>*</b>姓名</label>
                                                                        <div class="layui-input-inline">
                                                                            <input type="text" name="username"
                                                                                   value="<?php echo (isset($row['username']) && ($row['username'] !== '')?$row['username']:''); ?>"
                                                                                   class="layui-input" />
                                                                        </div>
                                                                        <div class="layui-input-inline layadmin-layer-demo ">
                                                                            <div class="layui-form-mid layui-word-aux ey_helptips"></div>
                                                                            <div class="layui-form-inline2 ey_helptips_txt none"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="layui-form-item">
                                                                        <label class="layui-form-label"><b>*</b>E-mail邮箱</label>
                                                                        <div class="layui-input-inline">
                                                                            <input type="text" name="email" value="<?php echo (isset($row['email']) && ($row['email'] !== '')?$row['email']:''); ?>" class="layui-input" />
                                                                        </div>
                                                                        <div class="layui-input-inline layadmin-layer-demo ">
                                                                            <div class="layui-form-mid layui-word-aux ey_helptips"></div>
                                                                            <div class="layui-form-inline2 ey_helptips_txt none"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="layui-form-item">
                                                                        <label class="layui-form-label"><b>*</b>手机号</label>
                                                                        <div class="layui-input-inline">
                                                                            <input type="text" name="mobile" value="<?php echo (isset($row['mobile']) && ($row['mobile'] !== '')?$row['mobile']:''); ?>" class="layui-input" />
                                                                        </div>
                                                                        <div class="layui-input-inline layadmin-layer-demo ">
                                                                            <div class="layui-form-mid layui-word-aux ey_helptips"></div>
                                                                            <div class="layui-form-inline2 ey_helptips_txt none"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--参数配置-->
                                                    <div class="layui-collapse mt20" lay-filter="component-panel">
                                                        <div class="layui-colla-item">
                                                            <h2 class="layui-colla-title" style="color: #777;font-weight: bold;">参数配置</h2>
                                                            <div class="layui-colla-content layui-show">
                                                                <div class="layui-form-item">
                                                                    <label class="layui-form-label"><b>*</b>AppID(小程序ID)</label>
                                                                    <div class="layui-input-inline">
                                                                        <input type="text" name="appId" value="<?php echo (isset($row['appId']) && ($row['appId'] !== '')?$row['appId']:''); ?>" class="layui-input" />
                                                                    </div>
                                                                    <div class="layui-input-inline layadmin-layer-demo ">
                                                                        <div class="layui-form-mid layui-word-aux ey_helptips"></div>
                                                                        <div class="layui-form-inline2 ey_helptips_txt none">在 微信公众平台->设置->开发设置中查看</div>
                                                                    </div>
                                                                </div>
                                                                <div class="layui-form-item">
                                                                    <label class="layui-form-label"><b>*</b>AppSecret(小程序密钥)</label>
                                                                    <div class="layui-input-inline">
                                                                        <input type="text" name="appSecret" value="<?php echo (isset($row['appSecret']) && ($row['appSecret'] !== '')?$row['appSecret']:''); ?>" class="layui-input" />
                                                                    </div>
                                                                    <div class="layui-input-inline layadmin-layer-demo ">
                                                                        <div class="layui-form-mid layui-word-aux ey_helptips"></div>
                                                                        <div class="layui-form-inline2 ey_helptips_txt none">在 微信公众平台->设置->开发设置中查看</div>
                                                                    </div>
                                                                </div>
                                                                <!-- <div class="layui-form-item">
                                                                    <label class="layui-form-label"><b>*</b>小程序原始ID</label>
                                                                    <div class="layui-input-inline">
                                                                        <input type="text" name="originalId" value="<?php echo (isset($row['originalId']) && ($row['originalId'] !== '')?$row['originalId']:''); ?>" class="layui-input" />
                                                                    </div>
                                                                    <div class="layui-input-inline layadmin-layer-demo ">
                                                                        <div class="layui-form-mid layui-word-aux ey_helptips"></div>
                                                                        <div class="layui-form-inline2 ey_helptips_txt none">在 微信公众平台->设置->开发设置中查看</div>
                                                                    </div>
                                                                </div> -->
                                                                <div class="layui-form-item">
                                                                    <label class="layui-form-label"><b>*</b>体验者(微信号)</label>
                                                                    <div class="layui-input-inline">
                                                                        <input type="text" name="wechatId" value="<?php echo (isset($row['wechatId']) && ($row['wechatId'] !== '')?$row['wechatId']:''); ?>" class="layui-input" />
                                                                    </div>
                                                                    <div class="layui-input-inline layadmin-layer-demo ">
                                                                        <div class="layui-form-mid layui-word-aux ey_helptips"></div>
                                                                        <div class="layui-form-inline2 ey_helptips_txt none">小程序正式审核通过前，只能该账号可以提前体验</div>
                                                                    </div>
                                                                </div>
                                                                <div class="layui-form-item">
                                                                    <label class="layui-form-label"><b>*</b>内容来源域名</label>
                                                                    <div class="layui-input-inline" style="width: 340px;display: flex;justify-content: space-between;">
                                                                        <div style="width: 28%;">
                                                                            <select name="tcp" id="tcp" style="width: 100px;">
                                                                                <option value="http" <?php if(empty($row['tcp']) || 'http' == $row['tcp']): ?>selected<?php endif; ?>>http://</option>
                                                                                <option value="https" <?php if(!empty($row['tcp']) && 'https' == $row['tcp']): ?>selected<?php endif; ?>>https://</option>
                                                                            </select>
                                                                        </div>
                                                                        <input type="text" name="domain" value="<?php echo (isset($row['domain']) && ($row['domain'] !== '')?$row['domain']:\think\Request::instance()->host()); ?>" class="layui-input"  style="width: 70%;"/>

                                                                    </div>
                                                                    <div class="layui-input-inline layadmin-layer-demo ">
                                                                        <div class="layui-form-mid layui-word-aux ey_helptips"></div>
                                                                        <div class="layui-form-inline2 ey_helptips_txt none"></div>
                                                                    </div>
                                                                </div>
                                                                <!-- <div class="layui-form-item">
                                                                    <label class="layui-form-label"><b>*</b>导航标题</label>
                                                                    <div class="layui-input-inline">
                                                                        <input type="text" name="navTitle" value="<?php echo (isset($row['navTitle']) && ($row['navTitle'] !== '')?$row['navTitle']:''); ?>" class="layui-input" />
                                                                    </div>
                                                                    <div class="layui-input-inline layadmin-layer-demo ">
                                                                        <div class="layui-form-mid layui-word-aux ey_helptips"></div>
                                                                        <div class="layui-form-inline2 ey_helptips_txt none"></div>
                                                                    </div>
                                                                </div> -->
                                                                <div class="layui-form-item">
                                                                    <label class="layui-form-label"><b>*</b>小程序描述</label>
                                                                    <div class="layui-input-inline">
                                                                        <textarea id="intro" name="intro" style="height:80px;" placeholder="描述该小程序的简单介绍，有利于快速通过审核" class="layui-textarea"><?php echo (isset($row['intro']) && ($row['intro'] !== '')?$row['intro']:''); ?></textarea>
                                                                    </div>
                                                                    <div class="layui-input-inline layadmin-layer-demo ">
                                                                        <div class="layui-form-mid layui-word-aux ey_helptips"></div>
                                                                        <div class="layui-form-inline2 ey_helptips_txt none"></div>
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
                        <div class="button-container layadmin-layer-demo">
                            <input type="hidden" name="nid" value="<?php echo $nid; ?>">
                            <input type="hidden" name="version" value="<?php echo (isset($row['version']) && ($row['version'] !== '')?$row['version']:$version); ?>" />
                            <input type="hidden" name="type" value="<?php echo (isset($row['type']) && ($row['type'] !== '')?$row['type']:$type); ?>">
                            <input type="hidden" name="root_dir" value="">
                            <button class="layui-btn layui-btn-sm" lay-submit lay-filter="formSubmit">1、生成小程序</button> →
                            <a href="javascript:void(0);" <?php if(isset($row['miniproStatus']) && !in_array($row['miniproStatus'], [0,1,2,5])): ?> class="layui-btn layui-btn-sm" onclick="get_qrcode(this);" <?php else: ?> class="layui-btn layui-btn-sm layui-btn-primary" <?php endif; ?>
                            data-url="<?php echo url('Minipro/getQrcode'); ?>">2、体验二维码</a>&nbsp;→
                            <a href="javascript:void(0);" <?php if(isset($row['miniproStatus']) && in_array($row['miniproStatus'], [3])): ?> class="layui-btn layui-btn-sm" onclick="hideform_submit(this);" data-url="<?php echo url('Minipro/submitAudit'); ?>" <?php else: ?> class="layui-btn layui-btn-sm layui-btn-primary" <?php endif; ?>>3、提交审核</a>&nbsp;→
                            <a href="javascript:void(0);" <?php if(!empty($row['auditid']) && $row['auditstatus'] != 3): ?> class="layui-btn layui-btn-sm" onclick="get_auditstatus(this);" data-url="<?php echo url('Minipro/getAuditstatus'); ?>" data-estimatetime="<?php echo date('Y-m-d H:i:s',$row['estimateTime']); ?>" <?php else: ?> class="layui-btn layui-btn-sm layui-btn-primary" <?php endif; ?>>4、查看审核进度</a>&nbsp;→
                            <a href="javascript:void(0);" <?php if(empty($row['auditstatus']) && isset($row['miniproStatus']) && in_array($row['miniproStatus'], array(4))): ?> class="layui-btn layui-btn-sm" onclick="hideform_submit(this);" data-url="<?php echo url('Minipro/release'); ?>" <?php else: ?> class="layui-btn layui-btn-sm layui-btn-primary" <?php endif; ?>>5、发布小程序</a>&nbsp;→
                            <a <?php if(isset($row['miniproStatus']) && in_array($row['miniproStatus'], array(5)) || !empty($row['createminiproTime'])): ?> href="<?php echo url('Minipro/getWxaCodeunlimit'); ?>" class="layui-btn layui-btn-sm" <?php else: ?> href="javascript:void(0);" class="layui-btn layui-btn-sm layui-btn-primary" <?php endif; ?>>6、下载小程序码</a>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<form id="hideform" method="POST" action="" style="display: none;"></form>
<script type="text/javascript">
    function hideform_submit(obj)
    {
        var url = $(obj).data('url');
        $('#hideform').attr('action', url);
        var load = layer_loading();
        $('#hideform').submit();
    }
</script>
<script>
    $(document).ready(function () {
        // 鼠标事件，加载查看大图和删除图片
        $(".upload-img").live('mouseover', function () {
            $(this).find('div.icaction').show();
            $(this).find('div.cover-bg').show();
        }).live('mouseout', function () {
            $(this).find('div.icaction').hide();
            $(this).find('div.cover-bg').hide();
        });

    });

    layui.config({
        base: '/public/static/admin/' //静态资源所在路径
        , version: '<?php echo $version; ?>'
    }).extend({
        index: 'lib/index' //主入口模块
    }).use(['index', 'form'], function () {
        var $ = layui.$
            , element = layui.element
            , layer = layui.layer
            , form = layui.form;

        element.render();
        //监听提交
        form.on('submit(formSubmit)', function (data) {
            if(!$.trim($('input[name=username]').val())){
                showErrorMsg('姓名不能为空！');
                $('input[name=username]').focus();
                return false;
            }
            if(!$.trim($('input[name=email]').val())){
                showErrorMsg('E-mail邮箱不能为空！');
                $('input[name=email]').focus();
                return false;
            }
            if(!$.trim($('input[name=mobile]').val())){
                showErrorMsg('手机号码不能为空！');
                $('input[name=mobile]').focus();
                return false;
            }
            if(!$.trim($('input[name=appId]').val())){
                showErrorMsg('AppID不能为空！');
                $('input[name=appId]').focus();
                return false;
            }
            if(!$.trim($('input[name=appSecret]').val())){
                showErrorMsg('AppSecret不能为空！');
                $('input[name=appSecret]').focus();
                return false;
            }
            // if(!$.trim($('input[name=originalId]').val())){
            //     showErrorMsg('小程序原始ID不能为空！');
            //     $('input[name=originalId]').focus();
            //     return false;
            // }
            if(!$.trim($('input[name=wechatId]').val())){
                showErrorMsg('体验者微信号不能为空！');
                $('input[name=wechatId]').focus();
                return false;
            }
            if(!$.trim($('input[name=domain]').val())){
                showErrorMsg('内容来源域名不能为空！');
                $('input[name=domain]').focus();
                return false;
            }
            // if(!$.trim($('input[name=navTitle]').val())){
            //     showErrorMsg('导航标题不能为空！');
            //     $('input[name=navTitle]').focus();
            //     return false;
            // }
            if(!$.trim($('#intro').val())){
                showErrorMsg('小程序描述不能为空！');
                $('#intro').focus();
                return false;
            }
            var load = layer_loading();
            data.field._ajax = 1;

            $.ajax({
                type: 'post',
                url: "<?php echo url('Minipro/setting'); ?>",
                data: data.field,
                dataType: 'json',
                success: function (res) {
                    layer.close(load); //关闭loading
                    if (res.code == 1) {
                        window.location.href = res.url;
                    } else {
                        showErrorMsg(res.msg);
                    }
                },
                error: function (e) {
                    layer.close(load); //关闭loading
                    showErrorAlert();
                }
            });
            return false;
        });

    });

</script>
<script type="text/javascript">
    /**
     * 获取体验二维码
     */
    function get_qrcode(obj)
    {
        layer_loading('正在处理');
        $.ajax({
            url:  $(obj).data('url'),
            type: 'GET',
            dataType: 'JSON',
            data: {_ajax:1},
            success: function(res){
                layer.closeAll();
                if (res.code == 1) {
                    layer.open({
                        title: '小程序体验二维码',
                        type: 1,
                        skin: 'layui-layer-demo', //样式类名
                        closeBtn: 1, //不显示关闭按钮
                        anim: 2,
                        shadeClose: false, //开启遮罩关闭
                        content: "<img src='"+res.data.msg+"' width='230' height='230'/>"
                    });
                    return false;
                } else {
                    layer.alert(res.msg, {icon: 5, title:false});
                    return false;
                }
            },
            error: function(e){
                layer.closeAll();
                layer.alert(ey_unknown_error, {icon: 5, title:false});
                return false;
            }
        });
    }

    /**
     * 查看审核进度
     */
    function get_auditstatus(obj)
    {
        layer_loading('正在处理');
        $.ajax({
            url: $(obj).data('url'),
            type: 'GET',
            dataType: 'JSON',
            data: {_ajax:1},
            success: function(res){
                layer.closeAll();
                if (res.errcode == 0) {
                    icon = 5;
                    if (res.status == 1) {
                        res.errmsg = res.reason;
                    } else if (res.status == 0) {
                        icon = 6;
                        res.errmsg = '审核成功，可以发布小程序了';
                    } else if (res.status == 2) {
                        icon = 6;
                        var estimatetime = $(obj).data('estimatetime');
                        res.errmsg = "审核中，预计"+estimatetime+"之前完成";
                    }
                    layer.alert(res.errmsg, {
                        title: '查看审核进度',
                        icon: icon
                    });
                    return false;
                } else {
                    layer.alert(res.errmsg, {icon: 5});
                    return false;
                }
            },
            error: function(e){
                layer.closeAll();
                layer.alert(ey_unknown_error, {icon: 5});
                return false;
            }
        });
    }
</script>

</body>
</html>
