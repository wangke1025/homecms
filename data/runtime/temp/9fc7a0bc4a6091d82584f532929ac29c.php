<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:46:"./application/admin/template/minipro/lists.htm";i:1581303520;s:78:"/www/wwwroot/ejucms.wingle.com.cn/application/admin/template/public/layout.htm";i:1580687630;s:78:"/www/wwwroot/ejucms.wingle.com.cn/application/admin/template/public/footer.htm";i:1580687630;}*/ ?>
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
<link rel="stylesheet" href="/public/static/admin/css/page.css" media="all">
<script type="text/javascript" src="/public/plugins/Ueditor/ueditor.config.js?v=v2.4.0"></script>
<script type="text/javascript" src="/public/plugins/Ueditor/ueditor.all.min.js?v=v2.4.0"></script>
<script type="text/javascript" src="/public/plugins/Ueditor/lang/zh-cn/zh-cn.js?v=v2.4.0"></script>
<div class="layui-fluid" id="LAY-component-layer-list">
    <div class="layui-card">
        <div class="layui-tab  layui-tab-card">
            <ul class="layui-tab-title">
                <!-- <li><a href="<?php echo url('Minipro/global_conf'); ?>"><span>1.常规配置</span></a></li> -->
                <li><a href="<?php echo url('Minipro/home_conf'); ?>"><span>1.首页配置</span></a></li>
                <!-- <li><a href="<?php echo url('Minipro/about_conf'); ?>"><span>2.联系我们</span></a></li> -->
                <li><a href="<?php echo url('Minipro/setting'); ?>"><span>2.生成小程序</span></a></li>
                <li class="layui-this">3.收客列表</li>
            </ul>
        </div>
         <div class="layui-card-body">
                <div class="layui-form layui-border-box layui-table-view house-table">
                    <div class="layui-table-box">
                        <div class="layui-table-body " >
                            <table cellspacing="0" cellpadding="0" border="0" class="layui-table layui-form" style="width: 100%" lay-skin="line">
                                <thead >
                                <tr>
                                    <!--<th class="w40 tc">-->
                                        <!--<div class="layui-table-cell w40 tc laytable-cell-checkbox">-->
                                            <!--<input type="checkbox" lay-filter="checkAll" class="checkAll" lay-skin="primary" >-->
                                        <!--</div>-->
                                    <!--</th>-->
                                    <th class="w60 tc"> <div class="layui-table-cell w60 tc" ><span>ID</span></div></th>
                                    <th class="wauto tc"> <div class="layui-table-cell wauto tc"><span>标题</span></div></th>
                                    <th class="wauto tc"> <div class="layui-table-cell wauto tc"><span>频道</span></div></th>
                                    <th class="wauto tc"> <div class="layui-table-cell wauto tc"><span>类型</span></div></th>
                                    <th class="wauto tc"> <div class="layui-table-cell wauto tc"><span>手机号</span></div></th>
                                    <th class="wauto tc"> <div class="layui-table-cell wauto tc"><span>ip</span></div></th>
                                    <th class="wauto tc"> <div class="layui-table-cell wauto tc"><span>提交时间</span></div></th>
                                    <th class="wauto tc"> <div class="layui-table-cell wauto tc"><span>更新时间</span></div></th>
                                    <!--<th class="w150 tc"> <div class="layui-table-cell w150 tc"><span>操作</span></div></th>-->
                                </tr>
                                </thead>
                                <tbody>
                                <?php if(empty($list) || (($list instanceof \think\Collection || $list instanceof \think\Paginator ) && $list->isEmpty())): ?>
                                <tr>
                                    <td class="no-data" align="center" axis="col0" colspan="9">
                                        <i class="fa fa-exclamation-circle"></i>没有符合条件的数据
                                    </td>
                                </tr>
                                <?php else: if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): if( count($list)==0 ) : echo "" ;else: foreach($list as $k=>$vo): ?>
                                <tr>
                                    <!--<td>-->
                                        <!--<div class="layui-table-cell w40 tc laytable-cell-checkbox">-->
                                            <!--<input type="checkbox" name="ids[]" value="<?php echo $vo['list_id']; ?>" lay-filter="ids" lay-skin="primary">-->
                                        <!--</div>-->
                                    <!--</td>-->
                                    <td><div class="layui-table-cell w60 tc"> <?php echo $vo['id']; ?> </div></td>
                                    <td><div class="layui-table-cell wauto tc"><a href="<?php echo $vo['arcurl']; ?>" target="_blank"><?php echo $vo['title']; ?></a></div></td>
                                    <td><div class="layui-table-cell wauto tc"><?php echo $vo['channel_name']; ?></div></td>
                                    <td><div class="layui-table-cell wauto tc"><?php echo $vo['type_name']; ?></div></td>
                                    <td><div class="layui-table-cell wauto tc"><?php echo $vo['mobile']; ?></div></td>
                                    <td><div class="layui-table-cell wauto tc"><?php echo $vo['ip']; ?></div></td>
                                    <td><div class="layui-table-cell wauto tc"><?php echo MyDate("Y-m-d H:i:s",$vo['add_time']); ?></div></td>
                                    <td><div class="layui-table-cell wauto tc"><?php echo MyDate("Y-m-d H:i:s",$vo['update_time']); ?></div></td>
                                    <!--<td>-->
                                        <!--<div class="layui-table-cell w150 tc layadmin-layer-demo right-oper">-->
                                            <!--<a class="layui-btn btn-edit customvar_edit" data-type="Form_examine" data-formname="<?php echo $vo['form_name']; ?>" data-listid="<?php echo $vo['list_id']; ?>">查看</a>-->

                                            <!--<a class="layui-btn btn-primary"  data-url="<?php echo url('Form/del'); ?>" data-id="<?php echo $vo['list_id']; ?>" data-type="Form_del">删除</a>-->
                                        <!--</div>-->
                                    <!--</td>-->
                                </tr>
                                <?php endforeach; endif; else: echo "" ;endif; endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            <?php echo $page; ?>
        </div>
    </div>
</div>
<script>
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
            ,element = layui.element
            ,layer = layui.layer
            ,form = layui.form;

        element.render();

        //监听提交
        form.on('submit(formSubmit)', function(data){
            var load = layer_loading();
            data.field._ajax = 1;
            console.log(data.field);

            $.ajax({
                type : 'post',
                url : "<?php echo url('Minipro/about_conf'); ?>",
                data : data.field,
                dataType : 'json',
                success : function(res){
                    layer.close(load); //关闭loading
                    if(res.code == 1){
                        layer.msg(res.msg, {icon: 1, time: 1500}, function(){
                            window.location.reload();
                        });
                    }else{
                        showErrorMsg(res.msg);
                    }
                },
                error: function(e){
                    console.log('fail');
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
