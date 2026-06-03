<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:40:"./application/admin/template/seo/seo.htm";i:1580687630;s:78:"/www/wwwroot/ejucms.wingle.com.cn/application/admin/template/public/layout.htm";i:1580687630;s:78:"/www/wwwroot/ejucms.wingle.com.cn/application/admin/template/public/footer.htm";i:1580687630;}*/ ?>
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
  <div class="layui-fluid " id="LAY-component-layer-list">
     <div class="layui-row layui-col-space15">
      <div class="layui-col-md12">
        <div class="layui-card">
          <div class="layui-card-body" pad15>
            <div class="layui-form house-form" wid100 lay-filter="">
              <div class="layui-form-item">
                <label class="layui-form-label">URL模式</label>
                <div class="layui-input-inline">
                    <?php if(is_array($seo_pseudo_list) || $seo_pseudo_list instanceof \think\Collection || $seo_pseudo_list instanceof \think\Paginator): $i = 0; $__LIST__ = $seo_pseudo_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <input type="radio" name="seo_pseudo" lay-filter="seo_pseudo" value="<?php echo $key; ?>" title="<?php echo $vo; ?>" <?php if(isset($config['seo_pseudo']) && $config['seo_pseudo'] == $key): ?> checked<?php endif; ?>/>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
              </div>
            <div class="row <?php if(isset($config['seo_pseudo']) && $config['seo_pseudo'] != 2): ?>none<?php endif; ?>" id="dl_seo_html_format">
              <div class="layui-form-item ">
                <label class="layui-form-label">静态页面</label>
                <div class="layui-input-inline layadmin-layer-demo">
                  <button class="layui-btn layui-btn-sm" lay-submit lay-filter="createHtml">生成静态页面</button>
                </div>
              </div>
              <div class="layui-form-item">
                <label class="layui-form-label">页面保存目录</label>
                <div class="layui-input-inline w200">
                    <input type="text" name="seo_html_arcdir" id="seo_html_arcdir" value="<?php echo (isset($config['seo_html_arcdir']) && ($config['seo_html_arcdir'] !== '')?$config['seo_html_arcdir']:''); ?>" lay-verify="check_seo_html_arcdir" placeholder="留空默认根目录" class="layui-input"> <span style="line-height: 38px;margin-left: 4px;">（如：html）</span>
                    <div class="layui-form-inline2 <?php if(empty($seo_html_arcdir_1) || (($seo_html_arcdir_1 instanceof \think\Collection || $seo_html_arcdir_1 instanceof \think\Paginator ) && $seo_html_arcdir_1->isEmpty())): ?>none<?php endif; ?>" style="color: red;" id="tips_seo_html_arcdir_1">
                        页面将保存在 https://ejucms.wingle.com.cn<span id="tips_seo_html_arcdir_2"><?php echo (isset($seo_html_arcdir_1) && ($seo_html_arcdir_1 !== '')?$seo_html_arcdir_1:''); ?></span>/
                    </div>
                </div>
                <div class="layui-input-inline layui-btn-container " style="width: auto;">
                  <div class="layui-form-mid layui-word-aux ey_helptips"></div>
                  <div class="layui-form-inline2 ey_helptips_txt">填写需要生成静态页面的文件夹名称，不能包含特殊字符，不能和根目录系统文件夹重名</div>
                </div>
              </div>
              <div class="layui-form-item">
                <label class="layui-form-label">列表页面名称</label>
                <div class="layui-input-inline">
                  <input type="radio" name="seo_html_listname" value="1" title="<?php if(!(empty($root_dir) || (($root_dir instanceof \think\Collection || $root_dir instanceof \think\Paginator ) && $root_dir->isEmpty()))): ?>子目录名称/<?php endif; ?>顶级目录名称/lists_ID.html" <?php if(isset($config['seo_html_listname']) && $config['seo_html_listname'] == 1): ?> checked<?php endif; ?>>
                  <p class="info-text">（<a href="javascript:void(0);" onclick="view_exp('view_2_1');">查看例子</a><span id="view_2_1" class="none">：https://ejucms.wingle.com.cn<span id="exp_seo_html_arcdir"><?php echo $seo_html_arcdir_1; ?></span>/news/lists_1.html</span>）</p>

                  <input type="radio" name="seo_html_listname" value="2" title="<?php if(!(empty($root_dir) || (($root_dir instanceof \think\Collection || $root_dir instanceof \think\Paginator ) && $root_dir->isEmpty()))): ?>子目录名称/<?php endif; ?>父级目录名称/子目录名称/" <?php if(!isset($config['seo_html_listname']) || $config['seo_html_listname'] != 1): ?> checked<?php endif; ?>>
                  <p class="info-text">（<a href="javascript:void(0);" onclick="view_exp('view_2_2');">查看例子</a><span id="view_2_2" class="none">：https://ejucms.wingle.com.cn<span id="exp_seo_html_arcdir"><?php echo $seo_html_arcdir_1; ?></span>/news/lol/</span>）</p>
                </div>
              </div>
              <div class="layui-form-item">
                <label class="layui-form-label">文档页面名称</label>
                <div class="layui-input-inline">
                  <input type="radio" name="seo_html_pagename" value="1" title="<?php if(!(empty($root_dir) || (($root_dir instanceof \think\Collection || $root_dir instanceof \think\Paginator ) && $root_dir->isEmpty()))): ?>子目录名称/<?php endif; ?>顶级目录名称/ID.html" <?php if(isset($config['seo_html_pagename']) && $config['seo_html_pagename'] == 1): ?> checked<?php endif; ?>>
                  <p class="info-text">（<a href="javascript:void(0);" onclick="view_exp('view_2_3');">查看例子</a><span id="view_2_3" class="none">：https://ejucms.wingle.com.cn<span id="exp_seo_html_arcdir"><?php echo $seo_html_arcdir_1; ?></span>/news/10.html</span>）</p>

                  <input type="radio" name="seo_html_pagename" value="2" title="<?php if(!(empty($root_dir) || (($root_dir instanceof \think\Collection || $root_dir instanceof \think\Paginator ) && $root_dir->isEmpty()))): ?>子目录名称/<?php endif; ?>父级目录名称/子目录名称/ID.html" <?php if(!isset($config['seo_html_pagename']) || $config['seo_html_pagename'] != 1): ?> checked<?php endif; ?>>
                  <p class="info-text">（<a href="javascript:void(0);" onclick="view_exp('view_2_4');">查看例子</a><span id="view_2_4" class="none">：https://ejucms.wingle.com.cn<span id="exp_seo_html_arcdir"><?php echo $seo_html_arcdir_1; ?></span>/news/lol/20.html</span>）</p>
                </div>
              </div>
            </div>
              <div class="layui-form-item <?php if(isset($config['seo_pseudo']) && $config['seo_pseudo'] != 3): ?>none<?php endif; ?>" id="dl_seo_rewrite_format">
                <label class="layui-form-label">伪静态格式</label>
                <div class="layui-input-inline">
                  <input type="radio" name="seo_rewrite_format" value="1" title="目录名称" <?php if(!isset($config['seo_rewrite_format']) OR $config['seo_rewrite_format'] == 1): ?> checked<?php endif; ?>>
                  <p class="info-text">（<a href="javascript:void(0);" onclick="view_exp('view_3_1');">查看例子</a><span id="view_3_1" class="none">：https://ejucms.wingle.com.cn/about/</span>）</p>

                  <input type="radio" name="seo_rewrite_format" value="2" title="模型标识" <?php if(isset($config['seo_rewrite_format']) AND $config['seo_rewrite_format'] == 2): ?> checked<?php endif; ?>>
                  <p class="info-text">（<a href="javascript:void(0);" onclick="view_exp('view_3_2');">查看例子</a><span id="view_3_2" class="none">：https://ejucms.wingle.com.cn/single/about.html</span>）</p>
                </div>
              </div>
              <div class="layui-form-item">
                <label class="layui-form-label">栏目页SEO标题</label>
                <div class="layui-input-inline">
                  <input type="radio" name="seo_liststitle_format" value="1" title="栏目名称_网站名称"  <?php if(isset($config['seo_liststitle_format']) AND $config['seo_liststitle_format'] == 1): ?> checked<?php endif; ?>><br>
                  <input type="radio" name="seo_liststitle_format" value="2" title="栏目名称_第N页_网站名称" <?php if(!isset($config['seo_liststitle_format']) OR $config['seo_liststitle_format'] == 2): ?> checked<?php endif; ?>>
                </div>
              </div>
              <div class="layui-form-item">
                <label class="layui-form-label">内容页SEO标题</label>
                <div class="layui-input-inline">
                  <input type="radio" name="seo_viewtitle_format" value="1" title="内容标题" <?php if(isset($config['seo_viewtitle_format']) AND $config['seo_viewtitle_format'] == 1): ?> checked<?php endif; ?>><br>
                  <input type="radio" name="seo_viewtitle_format" value="2" title="内容标题_网站名称" <?php if(!isset($config['seo_viewtitle_format']) OR $config['seo_viewtitle_format'] == 2): ?> checked<?php endif; ?>><br>
                  <input type="radio" name="seo_viewtitle_format" value="3" title="内容标题_栏目名称_网站名称" <?php if(isset($config['seo_viewtitle_format']) AND $config['seo_viewtitle_format'] == 3): ?> checked<?php endif; ?>>
                </div>
              </div>
              <div class="layui-form-item none" id="dl_seo_force_inlet">
                <label class="layui-form-label">强制去除index.php</label>
                <div class="layui-input-block">
                  <input type="checkbox" id="seo_force_inlet" lay-filter="seo_force_inlet" lay-skin="switch" lay-text="是|否" <?php if(isset($config['seo_force_inlet']) && $config['seo_force_inlet'] == 1): ?>checked<?php endif; ?>>
                  <input type="hidden" name="seo_force_inlet" value="<?php echo (isset($config['seo_force_inlet']) && ($config['seo_force_inlet'] !== '')?$config['seo_force_inlet']:'0'); ?>" />
                </div>
              </div>
              <div class="layui-form-item">
                <div class="layui-input-block">
                    <input type="hidden" id="seo_pseudo_old" value="<?php echo (isset($config['seo_pseudo']) && ($config['seo_pseudo'] !== '')?$config['seo_pseudo']:'1'); ?>"/>
                    <input type="hidden" name="seo_html_arcdir_limit" value="<?php echo $seo_html_arcdir_limit; ?>"/>
                    <input type="hidden" id="seo_inlet" value="<?php echo $config['seo_inlet']; ?>"/>
                    <input type="hidden" id="init_html" value="<?php echo (isset($init_html) && ($init_html !== '')?$init_html:'1'); ?>"/>
                    <input type="hidden" name="seo_dynamic_format" value="1"/>
                    <input type="hidden" name="inc_type" value="<?php echo $inc_type; ?>">
                    <button class="layui-btn" lay-submit lay-filter="formSubmit">确认提交</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
  layui.config({
    base: '/public/static/admin/' //静态资源所在路径
    ,version: '<?php echo $version; ?>'
  }).extend({
    index: 'lib/index' //主入口模块
  }).use(['index', 'set'], function(){
    var $ = layui.$
    ,admin = layui.admin
    ,element = layui.element
    ,form = layui.form
    ,layer = layui.layer;

    // element.render();

    checkInlet();

    // 自动检测隐藏index.php
    function checkInlet() {
        if (2 == $('input[name=seo_pseudo]:checked').val()) {
            $('#dl_seo_force_inlet').hide();
        }
        layer.open({
            type: 2,
            title: false,
            area: ['0px', '0px'],
            shade: 0.0,
            closeBtn: 0,
            shadeClose: true,
            content: '//<?php echo \think\Request::instance()->host(); ?>/api/Rewrite/setInlet.html',
            success: function(layero, index){
                layer.close(index);
                var body = layer.getChildFrame('body', index);
                var content = body.html();
                if (content.indexOf("Congratulations on passing") == -1)
                {
                    $('#seo_inlet').val(0);
                    $('#seo_force_inlet').removeAttr('checked');
                    $('input[name=seo_force_inlet]').val(0);
                    if (2 != $('input[name=seo_pseudo]:checked').val()) {
                        $('#dl_seo_force_inlet').show();
                    }
                    $.ajax({
                        type : "POST",
                        url  : "/index.php?m=api&c=Rewrite&a=setInlet",
                        data : {seo_inlet:0,_ajax:1},
                        dataType : "JSON",
                        success: function(res) {

                        }
                    });
                } else {
                    $('#seo_inlet').val(1);
                    $('#seo_force_inlet').attr('checked','checked');
                    $('input[name=seo_force_inlet]').val(1);
                    $('#dl_seo_force_inlet').hide();
                }
                form.render();
            }
        });
    }

    form.verify({
      check_seo_html_arcdir: function(value, item){ //value：表单的值、item：表单的DOM对象
        if($("input[name='seo_pseudo']:checked").val() == '2'){
            var seo_html_arcdir = $('input[name="seo_html_arcdir"]').val();
            if (seo_html_arcdir != '') {
                seo_html_arcdir = seo_html_arcdir_new = seo_html_arcdir.replace('\\', '/');
                var reg = /^([0-9a-zA-Z\_\-\/]+)$/;
                if (seo_html_arcdir != '/' && reg.test(seo_html_arcdir)) {
                    // 去掉最前面的斜杆
                    if (seo_html_arcdir_new.substr(0,1) == '/') seo_html_arcdir_new = seo_html_arcdir_new.substr(1);
                    var html_arcdir_arr = seo_html_arcdir_new.split("/");
                    var html_arcdir_one = html_arcdir_arr[0]; // 一级路径名
                    var seo_html_arcdir_limit = $('input[name="seo_html_arcdir_limit"]').val();
                    var seo_html_arcdir_limit_arr = seo_html_arcdir_limit.split(",");
                    if (seo_html_arcdir_limit_arr.indexOf(html_arcdir_one) >= 0){
                        return '页面保存路径的目录名 '+html_arcdir_one+' 与内置禁用的重复!';
                    }
                }else{
                    return '页面保存路径的格式错误！';
                }
            }
        }
      }
    }); 

    // 监听URL模式
    form.on('radio(seo_pseudo)', function(data){
        var _this = data.elem;
        $('#dl_seo_html_format').hide();
        $('#dl_seo_rewrite_format').hide();
        var seo_pseudo = $(_this).val();
        if (1 == seo_pseudo) {
            if (1 != $('#seo_inlet').val()) {
                $('#dl_seo_force_inlet').show();
            } else {
                $('#dl_seo_force_inlet').hide();
            }
        } else if (2 == seo_pseudo) {
            $('#dl_seo_force_inlet').hide();
            msg = "静态模式下注意几点：<br/>1、修改模板记得生成<br/>2、更新后台数据记得生成<br/>3、安装的插件需要更新至最新版本";
            layer.alert(msg, {icon: 6, closeBtn:false, title: false});
            $('#dl_seo_html_format').show();
        } else {
            $('#dl_seo_rewrite_format').show();
            if (1 != $('#seo_inlet').val()) {
                $('#dl_seo_force_inlet').show();
            } else {
                $('#dl_seo_force_inlet').hide();
            }
        }

        var seo_pseudo_old = $('#seo_pseudo_old').val();
        if (3 == seo_pseudo) {
            layer_loading('正在检测');
            $.ajax({
                url: "<?php echo url('Seo/ajax_checkHtmlDirpath'); ?>",
                type: "POST",
                dataType: "json",
                data: {seo_pseudo_new:seo_pseudo, _ajax:1},
                // async: true,
                success: function(res){
                    layer.closeAll();
                    if (res.code == 0) {
                        if (res.data.icon && res.data.icon == 4) {
                            layer.alert(res.msg, {icon: res.data.icon, title: false, closeBtn: false}, function(){
                                window.location.reload();
                            });
                        } else {
                            layer.msg(res.msg, {icon: 5, time: 1500});
                        }
                    } else {
                        if (res.data.msg != '') {
                            $('input[name=seo_pseudo]').each(function(i,o){
                                if($(o).val() == seo_pseudo_old){
                                    $(o).attr('checked',true);
                                } else {
                                    $(o).attr('checked',false);
                                }
                            })
                            $('#dl_seo_html_format').show();
                            // $('#tab_base_html').show();
                            var seo_pseudo = $(_this).val();
                            //询问框
                            var height = res.data.height + 116;
                            if (350 <= height) height = 350;
                            var confirm1 = layer.confirm(res.data.msg, {
                                    title: false
                                    ,area: ['320px', height+'px']
                                    ,btn: ['手工删除','自动删除'] //按钮

                                }, function(){
                                    layer.close(confirm1);

                                }, function(){
                                    layer_loading('正在处理');
                                    $.ajax({
                                        url: "<?php echo url('Seo/ajax_delHtmlDirpath'); ?>",
                                        type: "POST",
                                        dataType: "json",
                                        data: {_ajax:1},
                                        success: function(res){
                                            layer.closeAll();
                                            if (1 == res.code) {
                                                $('input[name=seo_pseudo]').each(function(i,o){
                                                    if($(o).val() == seo_pseudo){
                                                        $(o).attr('checked',true);
                                                    } else {
                                                        $(o).attr('checked',false);
                                                    }
                                                })
                                                $('#dl_seo_html_format').hide();
                                                // $('#tab_base_html').attr('style','display:none!important');
                                                layer.msg(res.msg, {icon: 1, time: 1500});
                                            } else {
                                                showErrorAlert(res.data.msg);
                                            }
                                        },
                                        error: function(e){
                                            layer.closeAll();
                                            showErrorAlert();
                                        }
                                    })
                                }
                            );
                        }
                    }
                },
                error: function(){
                    layer.closeAll();
                    showErrorAlert();
                }
            });
        }
    });

    $('#seo_html_arcdir').keyup(function(){
        var seo_html_arcdir = $(this).val();
        if (seo_html_arcdir != '') {
            if (seo_html_arcdir.substr(0,1) == '/') seo_html_arcdir = seo_html_arcdir.substr(1);
            seo_html_arcdir = '/' + seo_html_arcdir;
            $('#tips_seo_html_arcdir_1').show();
            $('#tips_seo_html_arcdir_2').html(seo_html_arcdir);
        } else {
            $('#tips_seo_html_arcdir_1').hide();
        }
        $('#exp_seo_html_arcdir').html(seo_html_arcdir);
    });

    // 监听强制去除index.php
    form.on('switch(seo_force_inlet)', function(data){
        if (data.elem.checked) {
            layer.open({
                type: 2,
                title: false,
                area: ['0px', '0px'],
                shade: 0.0,
                closeBtn: 0,
                shadeClose: true,
                content: '//<?php echo \think\Request::instance()->host(); ?>/api/Rewrite/testing.html',
                success: function(layero, index){
                    layer.close(index);
                    var body = layer.getChildFrame('body', index);
                    var content = body.html();
                    if (content.indexOf("Congratulations on passing") == -1)
                    {
                        $('#seo_force_inlet').removeAttr('checked');
                        $('input[name=seo_force_inlet]').val(0);
                        form.render();
                        layer.alert('不支持去除index.php，请<a href="http://www.ejucms.com/index.php?m=plugins&c=Ask&a=details&ask_id=13" target="_blank">点击查看教程</a>', {icon: 2, title:false});
                    }
                }
            });
        }
    });
    
    //生成静态页面
    form.on('submit(createHtml)', function(data){
        $.ajax({
            url: "<?php echo url('Seo/handle', ['_ajax'=>1]); ?>",
            type: 'POST',
            dataType: 'json',
            data: data.field,
            beforeSend:function(){
                layer_loading('保存配置');
            },
            success: function(res){
                layer.closeAll();
                if (0 == res.code) {
                    showErrorAlert('生成失败！');
                } else {
                    //iframe窗
                    var iframes = layer.open({
                        type: 2,
                        title: '生成静态页面',
                        fixed: true, //不固定
                        shadeClose: false,
                        shade: 0.3,
                        content: "<?php echo url('Seo/index',['inc_type'=>'html']); ?>"
                    });
                    layer.full(iframes);
                }
            },
            error: function(e){
                layer.closeAll();
                showErrorAlert('生成失败，请先提交保存配置！');
            }
        });
    })

    //监听提交
    form.on('submit(formSubmit)', function(data){
        var load = layer_loading();
        var init_html = $('#init_html').val();
        $.ajax({
            type : 'post',
            url : "<?php echo url('Seo/handle', ['_ajax'=>1]); ?>",
            data : data.field,
            dataType : 'json',
            success : function(res){
                if (1 == res.code) {
                    if (2 == init_html || 2 != $("input[name='seo_pseudo']:checked").val()) {
                        // layer.closeAll();
                        layer.msg(res.msg, {icon: 1, time: 1000}, function(){
                            window.location.href = res.url;
                        });
                    } else {
                        layer.closeAll();
                        var confirm1 = layer.confirm('配置成功，是否要生成整站页面？', {
                                title: false
                                ,closeBtn: false
                                ,btn: ['是','否'] //按钮

                            }, function(){
                                var url = eyou_basefile+"?m=admin&c=Seo&a=site";
                                var index = layer.open({
                                    type: 2,
                                    title: '开始生成',
                                    area: ['500px', '300px'],
                                    fix: false, 
                                    maxmin: false,
                                    content: url,
                                    end: function(layero, index){
                                        layer.msg(res.msg, {icon: 1, time: 1000}, function(){
                                            window.location.href = res.url;
                                        });
                                    }
                                });
                            }, function(){
                                layer.msg(res.msg, {icon: 1, time: 1000}, function(){
                                    window.location.href = res.url;
                                });
                            }
                        );
                    }
                } else {
                    layer.closeAll();
                    if (res.data.icon && res.data.icon == 4) {
                      layer.alert(res.msg, {icon: res.data.icon, title: false, closeBtn: false}, function(){
                        window.location.reload();
                      });
                    } else {
                      showErrorAlert(res.msg);
                    }
                }
            },
            error: function(e){
                layer.closeAll();
                showErrorAlert();
            }
        });
        return false;
    });

  });

    function view_exp(id)
    {
        $('#'+id).toggle();
    }

  </script>

</body>
</html>