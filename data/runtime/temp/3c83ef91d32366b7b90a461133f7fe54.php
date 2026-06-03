<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:51:"./application/admin/template/users/saleman_list.htm";i:1583458992;s:78:"/www/wwwroot/ejucms.wingle.com.cn/application/admin/template/public/layout.htm";i:1580687630;s:78:"/www/wwwroot/ejucms.wingle.com.cn/application/admin/template/public/footer.htm";i:1580687630;}*/ ?>
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
                <?php if(is_check_access('Users@add') == '1'): ?>
                <a data-url="<?php echo url('Users/add',['back'=>'saleman_list']); ?>" data-type="Users_add" class="layui-btn mt5 ">新增经纪人</a>
                <?php endif; ?>
            </div>
            <div class="fr">
                <form action="<?php echo url('Users/index'); ?>" method="get" onsubmit="layer_loading();">
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
                                    <div class="layui-table-cell wauto"><span>会员级别</span></div>
                                </th>
                                <th class="w150 tc">
                                    <div class="layui-table-cell w150 tc"><span>用户名</span></div>
                                </th>
                                <th class="w150 tc">
                                    <div class="layui-table-cell w150 tc"><span>真实姓名</span></div>
                                </th>
                                <th class="w150 tc">
                                    <div class="layui-table-cell w150 tc"><span>手机号</span></div>
                                </th>
                                <th class="w200 tc">
                                    <div class="layui-table-cell w200 tc"><span>注册时间</span></div>
                                </th>
                                <th class="w100 tc">
                                    <div class="layui-table-cell w100 tc"><span>内部人员</span></div>
                                </th>
                                <th class="w100 tc">
                                    <div class="layui-table-cell w100 tc"><span>启用</span></div>
                                </th>
                                <th class="w150 tc">
                                    <div class="layui-table-cell w150 tc"><span>操作</span></div>
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
                                    <div class="layui-table-cell w150 tc">
                                        <?php echo $vo['username']; ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="layui-table-cell w150 tc">
                                        <?php echo $vo['true_name']; ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="layui-table-cell w150 tc">
                                        <?php echo $vo['mobile']; ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="layui-table-cell w200 tc">
                                        <?php echo MyDate("Y-m-d H:i:s",$vo['add_time']); ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="layui-table-cell w100 tc">
                                        <input type="checkbox" lay-skin="switch" lay-filter="is_saleman" data-id="<?php echo $vo['id']; ?>" <?php if($vo['is_saleman'] == '1'): ?>value="off" checked<?php else: ?>value="on"<?php endif; ?> lay-text="是|否">
                                    </div>
                                </td>
                                <td>
                                    <div class="layui-table-cell w100 tc">
                                        <input type="checkbox" lay-skin="switch" lay-filter="is_activation" data-id="<?php echo $vo['id']; ?>" <?php if($vo['is_activation'] == '1'): ?>value="off" checked<?php else: ?>value="on"<?php endif; ?> lay-text="是|否">
                                    </div>
                                </td>
                                <td>
                                    <div class="layui-table-cell w150 tc right-oper">
                                        <?php if(is_check_access('Users@edit') == '1'): ?>
                                        <a class="layui-btn btn-edit customvar_edit" data-url="<?php echo url('Users/edit',array('id'=>$vo['id'],'back'=>'saleman_list')); ?>" data-type="Users_edit">编辑</a>
                                        <?php endif; if(is_check_access('Users@del') == '1'): ?>
                                        <a href="javascript:void(0);" class="layui-btn btn-primary" data-url="<?php echo url('Users/del'); ?>" data-id="<?php echo $vo['id']; ?>" onClick="delfun(this);">删除</a>
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
                    <?php if(is_check_access('Users@del') == '1'): ?>
                    <a class="layui-btn layui-btn-primary" data-type="batch_del" data-url="<?php echo url('Users/del'); ?>" data-deltype="" style="line-height: 34px;">
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

        form.on('switch(is_saleman)', function(data){
            changeTableVal('users','id',$(this).data('id'),'is_saleman',this);
            return false;
        });
        form.on('switch(is_activation)', function(data){
            changeTableVal('users','id',$(this).data('id'),'is_activation',this);
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
            Users_add: function(){
                var iframes = layer.open({
                    type: 2,
                    title: '新增会员',
                    fixed: true, //不固定
                    shadeClose: false,
                    shade: 0.3,
                    content: $(this).data('url')
                });
                layer.full(iframes);
            }
            // 编辑
            ,Users_edit: function(){
                var iframes = layer.open({
                    type: 2,
                    title: '编辑会员',
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

</script>

</body>
</html>