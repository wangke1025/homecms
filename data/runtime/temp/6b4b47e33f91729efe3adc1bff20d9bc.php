<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:45:"./application/admin/template/region/index.htm";i:1580687630;s:78:"/www/wwwroot/ejucms.wingle.com.cn/application/admin/template/public/layout.htm";i:1580687630;s:78:"/www/wwwroot/ejucms.wingle.com.cn/application/admin/template/public/footer.htm";i:1580687630;}*/ ?>
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
                <?php if(\think\Request::instance()->param('pid') > 0): ?>
                <a href="<?php echo url('Region/index', array('pid'=>$parentInfo['parent_id'])); ?>" class="layui-btn layui-btn-primary  input-btn-back"><i class="layui-icon layui-icon-left"></i></a>
                <?php endif; if(is_check_access(CONTROLLER_NAME.'@add') == '1'): ?>
                <a data-url="<?php echo url('Region/add', array('pid'=>\think\Request::instance()->param('pid'))); ?>" class="layui-btn " data-type="Region_add">新增区域</a>
                <?php endif; ?>
            </div>
            <div class="fr ">
                <form action="<?php echo url('Region/index'); ?>" method="get" onsubmit="layer_loading();">
                    <div class="fl mt5" >
                        <div class="layui-input-inline w240">
                            <?php echo (isset($searchform['hidden']) && ($searchform['hidden'] !== '')?$searchform['hidden']:''); ?>
        					<input type="hidden" name="pid" id="pid" value="<?php echo (\think\Request::instance()->param('pid') ?: ''); ?>">
                       	    <input type="text" name="keywords" id="keywords" value="<?php echo \think\Request::instance()->param('keywords'); ?>" placeholder="区域搜索" class="layui-input">
                        </div>
    				</div>
    				<div class="layui-input-inline w50 mt5">
    					<button class="layui-btn input-btn-search" type="submit"><i class="layui-icon layui-icon-search"></i></button>
    				</div>
                </form>
            </div>
        </div>

        <div class="layui-card-body house-table">
            <div class="layui-form layui-border-box layui-table-view" lay-filter="demo" lay-id="admin-arctype" >
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
                                <th class="w60 tc"> <div class="layui-table-cell w60 tc" ><span>ID</span></div></th>
                                <th class="wauto"> <div class="layui-table-cell wauto"><span>区域</span></div></th>
                                <th class="w130 tc"> <div class="layui-table-cell w130 tc"><span>上级区域</span></div></th>
                                <th class="w80 tc"> <div class="layui-table-cell w80 tc"><span>启用</span></div></th>
                                <th class="w80 tc"> <div class="layui-table-cell w80 tc"><span>级别</span></div></th>
                                <th class="w80 tc"> <div class="layui-table-cell w80 tc"><span>排序</span></div></th>
                                <th class="w310 tc"> <div class="layui-table-cell w310 tc"><span>操作</span></div></th>
                                <?php if(!(empty($web_region_domain) || (($web_region_domain instanceof \think\Collection || $web_region_domain instanceof \think\Paginator ) && $web_region_domain->isEmpty()))): ?>
                                <!--<th class="w310 tc"> <div class="layui-table-cell w310 tc"><span>操作</span></div></th>-->
                                <?php else: ?>
                                <!--<th class="w230 tc"> <div class="layui-table-cell w230 tc"><span>操作</span></div></th>-->
                                <?php endif; ?>
                            </tr>
                            </thead>
                            <tbody>
                            <?php if(empty($list) || (($list instanceof \think\Collection || $list instanceof \think\Paginator ) && $list->isEmpty())): ?>
                            <tr>
                                <td class="no-data" align="center" axis="col0" colspan="8">
                                    <i class="fa fa-exclamation-circle"></i>没有符合条件的数据
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
                                    <div class="layui-table-cell wauto">
                                        <input type="text" onchange="changeTableVal('region','id','<?php echo $vo['id']; ?>','name',this);" value="<?php echo $vo['name']; ?>" class="layui-input"/>
                                    </div>
                                </td>
                                <td>
                                    <div class="layui-table-cell w130 tc">
                                        <a href="<?php echo url('Region/index',array('pid'=>$vo['parent_id'])); ?>"><?php if(empty($parentInfo['name']) || (($parentInfo['name'] instanceof \think\Collection || $parentInfo['name'] instanceof \think\Paginator ) && $parentInfo['name']->isEmpty())): ?>无<?php else: ?><?php echo $parentInfo['name']; endif; ?></a>
                                    </div>
                                </td>
                                <td>
                                    <div class="layui-table-cell w80 tc">
                                        <input type="checkbox" name="status"  data-id="<?php echo $vo['id']; ?>" value="<?php echo $vo['status']; ?>" lay-filter="status" lay-skin="switch" lay-text="是|否" <?php if($vo['status']): ?> class="yes" checked<?php else: ?>class="no"<?php endif; ?>>
                                    </div>
                                </td>
                                <td><div class="layui-table-cell w80 tc">  <?php echo $vo['level']; ?> </div></td>
                                <td>
                                    <div class="layui-table-cell w80 tc">
                                        <input type="text" onchange="changeTableVal('region','id','<?php echo $vo['id']; ?>','sort_order',this);" class="layui-input" value="<?php echo $vo['sort_order']; ?>" onkeyup="this.value=this.value.replace(/[^\d]/g,'');" onpaste="this.value=this.value.replace(/[^\d]/g,'');" />
                                    </div>
                                </td>
                                <td>
                                    <div class="layui-table-cell <?php if(!(empty($web_region_domain) || (($web_region_domain instanceof \think\Collection || $web_region_domain instanceof \think\Paginator ) && $web_region_domain->isEmpty()))): ?>w310<?php else: ?>w310<?php endif; ?> tl right-oper nav-more">
                                        <?php if(is_check_access(CONTROLLER_NAME.'@edit') == '1'): ?>
                                        <a data-url="<?php echo url('Region/edit',array('id'=>$vo['id'])); ?>" class="layui-btn btn-edit customvar_edit" data-type="Region_edit" >
                                            编辑
                                        </a>
                                        <?php endif; ?>
                                        <a  href="<?php echo url('Region/index',array('pid'=>$vo['id'])); ?>"  class="layui-btn btn-primary">查看下级</a>
                                        <?php if(($vo['is_default'] == 1)): ?>
                                        <a  class="layui-btn btn-del" href="javascript:;">默认区域</a>
                                        <?php else: ?>
                                        <a  class="layui-btn btn-primary" href="javascript:;"   onClick="changeSortOrder('<?php echo $vo['id']; ?>');">设为默认</a>
                                        <?php endif; if(!(empty($web_region_domain) || (($web_region_domain instanceof \think\Collection || $web_region_domain instanceof \think\Paginator ) && $web_region_domain->isEmpty()))): endif; if(is_check_access(CONTROLLER_NAME.'@del') == '1'): ?>
                                        <a href="javascript:void(0);" class="layui-btn btn-primary" data-url="<?php echo url('Region/del'); ?>" data-id="<?php echo $vo['id']; ?>" onClick="delfun(this);">删除</a> 
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
                    <?php if(is_check_access('Region@del') == '1'): ?>
                    <a class="layui-btn layui-btn-primary" data-type="batch_del" data-url="<?php echo url('Region/del'); ?>" style="line-height: 34px;">
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
    }).use(['index', 'table'], function(){
        var $ = layui.$
            ,form = layui.form
            ,table = layui.table;
        /* 触发事件 */
        var active = {
            Region_add:function () {
                var iframes = layer.open({
                    type: 2,
                    title: '新增区域',
                    fixed: true, //不固定
                    shadeClose: false,
                    shade: 0.3,
                    content: $(this).attr('data-url')
                });
                layer.full(iframes);
            }
            ,Region_edit: function(){
                var iframes = layer.open({
                    type: 2,
                    title: '编辑区域',
                    fixed: true, //不固定
                    shadeClose: false,
                    shade: 0.3,
                    content: $(this).attr('data-url')
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

        //开启关闭
        form.on('switch(status)', function(obj){
            var url = "<?php echo url('Region/setStatus'); ?>";
            var id = $(this).attr('data-id');
            var status = 1;
            var self = this;
            if ($(self).val() == 1){
                status = 0;
            }
            $.ajax({
                type: 'POST',
                url: url,
                data: {id:id,status:status,_ajax:1},
                dataType: 'json',
                success: function(res){
                    if (res.code == 1) {
                        layer.msg(res.msg, {icon: 1});
                        $(self).val(status);
                        window.location.reload();
                    } else {
                        layer.msg(res.msg, {icon: 5});
                        if(obj.elem.checked == true){
                            $(self).removeAttr("checked");
                        }else{
                            $(self).val(1);
                            $(self).attr("checked","checked");
                        }
                    }
                    form.render();
                },
                error:function (res) {
                    showErrorAlert();
                }
            });
        });

        //开启关闭
        form.on('switch(is_hot)', function(obj){
            var dataid = $(this).attr('data-id');
            if ($(this).val() == 1){
                $(this).val(0);
            }else{
                $(this).val(1);
            }
            changeTableVal('region','id',dataid,'is_hot',this);
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
        form.render();
    });
    //修改是否默认
    function changeSortOrder(id) {
        var url = "<?php echo url('Region/setSortOrder'); ?>";
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
