<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:50:"./application/admin/template/users_level/index.htm";i:1580687630;s:78:"/www/wwwroot/ejucms.wingle.com.cn/application/admin/template/public/layout.htm";i:1580687630;s:78:"/www/wwwroot/ejucms.wingle.com.cn/application/admin/template/public/footer.htm";i:1580687630;}*/ ?>
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
<div class="layui-fluid" id="LAY-component-layer-list">
    <div class="layui-card">
        <div class="head-oper">
            <div class="fl">
                <?php if(is_check_access('UsersLevel@add') == '1'): ?>
                <a data-url="<?php echo url('UsersLevel/add'); ?>" data-type="UsersLevel_add" class="layui-btn mt5 ">新增经纪人等级</a>
                <?php endif; ?>
            </div>
            <div class="fr">
                <form action="<?php echo url('UsersLevel/index'); ?>" method="get" onsubmit="layer_loading();">
                    <div class="fl mt5" >
                        <div class="layui-input-inline w240">
                            <?php echo (isset($searchform['hidden']) && ($searchform['hidden'] !== '')?$searchform['hidden']:''); ?>
                            <input type="text" name="keywords" id="keywords" value="<?php echo \think\Request::instance()->param('keywords'); ?>" placeholder="搜索相关数据…" class="layui-input">
                        </div>
                    </div>
                    <div class="layui-input-inline w50 mt5">
                        <button class="layui-btn input-btn-search" type="submit"><i class="layui-icon layui-icon-search"></i></button>
                    </div>
                </form>
            </div>
        </div>
        <div class="layui-card-body">
            <div class="layui-form layui-border-box layui-table-view house-table" lay-id="admin-arctype" >
                <div class="layui-table-box">
                    <div class="layui-table-body " >
                        <table cellspacing="0" cellpadding="0" border="0" class="layui-table layui-form" style="width: 100%" lay-skin="line">
                            <thead >
                            <tr>
                                <th class="w40 tc">
                                    <div class="layui-table-cell w40 tc laytable-cell-checkbox">
                                        <input type="checkbox" lay-filter="checkAll" class="checkAll" lay-skin="primary">
                                        <div class="layui-unselect layui-form-checkbox" lay-skin="primary"> <i class="layui-icon layui-icon-ok"></i></div>
                                    </div>
                                </th>
                                <th class="w60 tc">
                                    <div class="layui-table-cell w60 tc" ><span>ID</span></div>
                                </th>
                                <th>
                                    <div class="layui-table-cell wauto"><span>级别名称</span></div>
                                </th>
                                <th class="w100 tc">
                                    <div class="layui-table-cell w120 tc"><span>每日免费发布</span></div>
                                </th>
                                <th class="w100 tc">
                                    <div class="layui-table-cell w120 tc"><span>共免费发布</span></div>
                                </th>
                                <th class="w100 tc">
                                    <div class="layui-table-cell w120 tc"><span>每日免费置顶</span></div>
                                </th>
                                <th class="w100 tc">
                                    <div class="layui-table-cell w120 tc"><span>共免费置顶</span></div>
                                </th>
                                <th class="w100 tc">
                                    <div class="layui-table-cell w100 tc"><span>二手房审核</span></div>
                                </th>
                                <th class="w100 tc">
                                    <div class="layui-table-cell w100 tc"><span>租房审核</span></div>
                                </th>
                                <th class="w100 tc">
                                    <div class="layui-table-cell w100 tc"><span>启用</span></div>
                                </th>
                                <th class="w220 tc">
                                    <div class="layui-table-cell w220 tc"><span>操作</span></div>
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php if(empty($list) || (($list instanceof \think\Collection || $list instanceof \think\Paginator ) && $list->isEmpty())): ?>
                            <tr>
                                <td colspan="8" class="no-data tc">
                                    没有符合条件的数据
                                </td>
                            </tr>
                            <?php else: if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): if( count($list)==0 ) : echo "" ;else: foreach($list as $k=>$vo): ?>
                            <tr>
                                <td>
                                    <div class="layui-table-cell w40 tc laytable-cell-checkbox">
                                        <input type="checkbox" name="ids[]" lay-filter="ids" lay-skin="primary" value="<?php echo $vo['id']; ?>">
                                    </div>
                                </td>
                                <td><div class="layui-table-cell w60 tc"> <?php echo $vo['id']; ?> </div></td>
                                <td>
                                    <div class="layui-table-cell wauto" title="<?php echo $vo['level_name']; ?>">
                                        <?php echo $vo['level_name']; ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="layui-table-cell w120 tc">
                                        <?php if(empty($vo['free_day_send']) || (($vo['free_day_send'] instanceof \think\Collection || $vo['free_day_send'] instanceof \think\Paginator ) && $vo['free_day_send']->isEmpty())): ?>不限<?php else: ?><?php echo $vo['free_day_send']; ?>条<?php endif; ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="layui-table-cell w120 tc">
                                        <?php if(empty($vo['free_all_send']) || (($vo['free_all_send'] instanceof \think\Collection || $vo['free_all_send'] instanceof \think\Paginator ) && $vo['free_all_send']->isEmpty())): ?>不限<?php else: ?><?php echo $vo['free_all_send']; ?>条<?php endif; ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="layui-table-cell w120 tc">
                                        <?php if(empty($vo['fee_day_top']) || (($vo['fee_day_top'] instanceof \think\Collection || $vo['fee_day_top'] instanceof \think\Paginator ) && $vo['fee_day_top']->isEmpty())): ?>不限<?php else: ?><?php echo $vo['fee_day_top']; ?>条<?php endif; ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="layui-table-cell w120 tc">
                                        <?php if(empty($vo['fee_all_top']) || (($vo['fee_all_top'] instanceof \think\Collection || $vo['fee_all_top'] instanceof \think\Paginator ) && $vo['fee_all_top']->isEmpty())): ?>不限<?php else: ?><?php echo $vo['fee_all_top']; ?>条<?php endif; ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="layui-table-cell w100 tc">
                                        <input type="checkbox" lay-skin="switch" lay-filter="check_ershou" data-id="<?php echo $vo['id']; ?>" <?php if($vo['check_ershou'] == '1'): ?>value="off" checked<?php else: ?>value="on"<?php endif; ?> lay-text="是|否">
                                    </div>
                                </td>
                                <td>
                                    <div class="layui-table-cell w100 tc">
                                        <input type="checkbox" lay-skin="switch" lay-filter="check_zufang" data-id="<?php echo $vo['id']; ?>" <?php if($vo['check_zufang'] == '1'): ?>value="off" checked<?php else: ?>value="on"<?php endif; ?> lay-text="是|否">
                                    </div>
                                </td>
                                <td>
                                    <div class="layui-table-cell w100 tc">
                                        <input type="checkbox" lay-skin="switch" lay-filter="status" data-id="<?php echo $vo['id']; ?>" <?php if($vo['status'] == '1'): ?>value="off" checked<?php else: ?>value="on"<?php endif; ?> lay-text="是|否">
                                    </div>
                                </td>
                                <td>
                                    <div class="layui-table-cell w220 tc right-oper">
                                        <?php if(is_check_access('UsersLevel@edit') == '1'): ?>
                                        <a class="layui-btn btn-edit customvar_edit" data-url="<?php echo url('UsersLevel/edit',array('id'=>$vo['id'])); ?>" data-type="UsersLevel_edit">编辑</a>
                                        <?php endif; if(is_check_access('UsersLevel@del') == '1'): ?>
                                        <a href="javascript:void(0);" class="layui-btn btn-primary" data-url="<?php echo url('UsersLevel/del'); ?>" data-id="<?php echo $vo['id']; ?>" onClick="delfun(this);">删除</a>
                                        <?php endif; ?>

                                    </div>
                                </td>
                            </tr>
                            <?php endforeach; endif; else: echo "" ;endif; endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="layui-table-page footer-oper">
                    <input type="checkbox" lay-filter="checkAll" class="checkAll" lay-skin="primary" >
                    <?php if(is_check_access('UsersLevel@del') == '1'): ?>
                    <a class="layui-btn layui-btn-primary" data-type="batch_del" data-url="<?php echo url('UsersLevel/del'); ?>" data-deltype="pseudo" style="line-height: 34px;">
                        批量删除
                    </a>
                    <?php endif; ?>
                </div>
                <!--分页-->
            </div>
            <?php echo $pageStr; ?>
        </div>
    </div>
</div>
<script>
    layui.config({
        base: '/public/static/admin/' //静态资源所在路径
        ,version: '<?php echo $version; ?>'
    }).extend({
        index: 'lib/index' //主入口模块
    }).use(['index', 'form'], function(){
        var $ = layui.$
            ,form = layui.form;

        form.on('switch(check_ershou)', function(data){
            changeTableVal('users_level','id',$(this).data('id'),'check_ershou',this);
            return false;
        });
        form.on('switch(check_zufang)', function(data){
            changeTableVal('users_level','id',$(this).data('id'),'check_zufang',this);
            return false;
        });
        form.on('switch(status)', function(data){
            changeTableVal('users_level','id',$(this).data('id'),'status',this);
            return false;
        });

        // 监听复选框全选
        form.on('checkbox(checkAll)', function(data){
            if (data.elem.checked) {
                $('.checkAll').attr('checked', true);
                $('input[name*=ids]').attr('checked', true);
            } else {
                $('.checkAll').attr('checked', false);
                $('input[name*=ids]').attr('checked', false);
            }
            form.render('checkbox');
        });

        // 监听每行复选框
        form.on('checkbox(ids)', function(data){
            if (data.elem.checked && $('input[name*=ids]:checked').length == $('input[name*=ids]').length) {
                $('.checkAll').attr('checked', true);
            } else {
                $('.checkAll').attr('checked', false);
            }
            form.render('checkbox');
        });

        /* 触发事件 */
        var active = {
            // 新增
            UsersLevel_add: function(){
                var iframes = layer.open({
                    type: 2,
                    title: '新增会员等级',
                    fixed: true, //不固定
                    shadeClose: false,
                    shade: 0.3,
                    content: $(this).data('url')
                });
                layer.full(iframes);
            }
            // 编辑
            ,UsersLevel_edit: function(){
                var iframes = layer.open({
                    type: 2,
                    title: '编辑会员等级',
                    fixed: true, //不固定
                    shadeClose: false,
                    shade: 0.3,
                    content: $(this).data('url')
                });
                layer.full(iframes);
            }
            // 批量删除
            ,batch_del: function(){
                batch_del(this,'ids');
            }
        };
        $('#LAY-component-layer-list .layui-btn').on('click', function(){
            var type = $(this).data('type');
            active[type] && active[type].call(this);
        });
    });
    //修改是否默认
    function changeSystem(id) {
        var url = "<?php echo url('UsersLevel/setSystem'); ?>";
        $.ajax({
            type: 'POST',
            url: url,
            data: {id:id,_ajax:1},
            dataType: 'json',
            success: function(res){
                if (res.code == 1) {
                    layer.msg(res.msg, {icon: 1});
                    window.location.reload();
                    if (1 == res.data.refresh) {
                        window.location.reload();
                    }
                } else {
                    layer.msg(res.msg, {icon: 5}, function(){
                        window.location.reload();
                    });
                }
            },
            error:function (res) {
                showErrorAlert();
            }
        });
    }
</script>

</body>
</html>