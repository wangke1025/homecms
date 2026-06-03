<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:59:"./application/admin/template/recycle_bin/archives_index.htm";i:1582016758;s:78:"/www/wwwroot/ejucms.wingle.com.cn/application/admin/template/public/layout.htm";i:1580687630;s:78:"/www/wwwroot/ejucms.wingle.com.cn/application/admin/template/public/footer.htm";i:1580687630;}*/ ?>
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
    <div class="layui-row">
      <div class="layui-col-md12">
        <div class="layui-card">
          <div class="web-system">
            <div class="layui-tab ">

              <div class="layui-tab-content" style="padding:10px 0">
                <div class="layui-tab-item layui-show">
                  <div class="layui-row layui-col-space15">
                    <div class="layui-col-md12">
                      <div class="layui-card">
                        <div class="head-oper" style="padding:0px 15px 15px 15px">
                           <div class="fl"><a href="javascript:void(0);" data-url="<?php echo url('RecycleBin/archives_clear'); ?>" data-type="archives_clear" class="layui-btn">清空回收站</a></div>
                            <div class="fr">
                                <form action="<?php echo url('RecycleBin/archives_index'); ?>" id="searchForm" method="get" onsubmit="layer_loading();">
                                    <?php echo (isset($searchform['hidden']) && ($searchform['hidden'] !== '')?$searchform['hidden']:''); ?>
                                    <div class="fl mt5" >
                                        <div class="layui-input-inline">
                                            <select name="typeid" id="searchTypeid">
                                                <option value="">--所有文档--</option>
                                                <?php echo $arctype_html; ?>
                                            </select>
                                        </div>
                                        <div class="layui-input-inline w240">
                                            <input type="text" name="keywords" id="keywords" value="<?php echo \think\Request::instance()->param('keywords'); ?>" placeholder="标题搜索" class="layui-input">
                                        </div>
                                    </div>
                                    <div class="layui-input-inline w50 mt5">
                                        <button class="layui-btn input-btn-search" type="submit"><i class="layui-icon layui-icon-search"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="layui-card-body" pad15>
                          <div class="layui-form layui-border-box layui-table-view house-table" lay-filter="formTest" lay-id="admin-arctype" >
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
                                      <th class="w100 tc"> 
                                        <div class="layui-table-cell w100 tc" ><span>ID</span></div>
                                      </th>
                                      <th> 
                                        <div class="layui-table-cell wauto"><span>标题</span></div>
                                      </th>
                                      <th class="w180 tc"> 
                                        <div class="layui-table-cell w180 tc"><span>所属栏目</span></div>
                                      </th>
                                      <th class="w110 tc"> 
                                        <div class="layui-table-cell w110 tc"><span>删除时间</span></div>
                                      </th>
                                      <th class="w180 tc"> 
                                        <div class="layui-table-cell w180 tc"><span>操作</span></div>
                                      </th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                  <?php if(empty($list) || (($list instanceof \think\Collection || $list instanceof \think\Paginator ) && $list->isEmpty())): ?>
                                    <tr>
                                      <td colspan="6" class="no-data tc">
                                         没有符合条件的数据
                                      </td>
                                    </tr>
                                  <?php else: if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): if( count($list)==0 ) : echo "" ;else: foreach($list as $k=>$vo): ?>
                                     <tr>
                                        <td>
                                           <div class="layui-table-cell w40 tc laytable-cell-checkbox">
                                              <input type="checkbox" name="ids[]" lay-filter="ids" lay-skin="primary" value="<?php echo $vo['aid']; ?>">
                                           </div>
                                        </td>
                                        <td>
                                            <div class="layui-table-cell w100 tc"> 
                                                <?php echo $vo['aid']; ?> 
                                            </div>
                                        </td>
                                        <td>
                                            <div class="layui-table-cell wauto">
                                                <?php echo $vo['title']; $showArcFlagData = showArchivesFlagStr($vo); if(is_array($showArcFlagData) || $showArcFlagData instanceof \think\Collection || $showArcFlagData instanceof \think\Paginator): $i = 0; $__LIST__ = $showArcFlagData;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($i % 2 );++$i;if($i == '1'): ?><span style="color: red;">[<?php endif; ?>
                                                    <b style="font-size: 12px;"><?php echo $vo1['small_name']; ?></b>
                                                    <?php if($i == count($showArcFlagData)): ?>]</span><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="layui-table-cell w180 tc">
                                                <a href="<?php echo url('RecycleBin/archives_index', array('typeid'=>$vo['typeid'])); ?>"><?php echo (isset($vo['typename']) && ($vo['typename'] !== '')?$vo['typename']:'<i class="red">数据出错！</i>'); ?></a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="layui-table-cell w110 tc">
                                                <?php echo date('Y-m-d',$vo['update_time']); ?>
                                            </div>
                                        </td>
                                        <td>
                                           <div class="layui-table-cell w180 tc right-oper"> 
                                            <?php if(is_check_access('RecycleBin@archives_recovery') == '1'): ?>
                                                <a class="layui-btn btn-edit customvar_edit" href="javascript:void(0);" data-url="<?php echo url('RecycleBin/archives_recovery'); ?>" data-id="<?php echo $vo['aid']; ?>" data-title="<?php echo $vo['title']; ?>" data-type="archives_recovery">还原</a>
                                            <?php endif; if(is_check_access('RecycleBin@archives_del') == '1'): ?>
                                                <a class="layui-btn btn-primary" href="javascript:void(0);" data-url="<?php echo url('RecycleBin/archives_del'); ?>" data-id="<?php echo $vo['aid']; ?>" data-title="<?php echo $vo['title']; ?>" data-type="archives_del">彻底删除</a>
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
                                <div class="nav-dropup">
                                    <button class="layui-btn layui-btn-primary dropdown-bt" >批量操作<i class="layui-icon layui-icon-up"></i></button>
                                    <div class="dropdown-menu">
                                        <?php if(is_check_access('RecycleBin@archives_recovery') == '1'): ?>
                                        <a class="eju-event" href="javascript:;" data-url="<?php echo url('RecycleBin/archives_recovery'); ?>" data-type="batch_recovery">还原文档</a>
                                        <?php endif; if(is_check_access('RecycleBin@archives_del') == '1'): ?>
                                        <a class="eju-event"  href="javascript:;" data-type="batch_del" data-url="<?php echo url('RecycleBin/archives_del'); ?>">删除文档</a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                          </div>
                           <!--分页-->
                            <?php echo $pageStr; ?>
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

  <script>

    $('#searchTypeid').change(function(){
        $('#searchForm').submit();
    });

  layui.config({
    base: '/public/static/admin/' //静态资源所在路径
    ,version: '<?php echo $version; ?>'
  }).extend({
    index: 'lib/index' //主入口模块
  }).use(['index', 'form'], function(){
    var $ = layui.$
    ,form = layui.form;

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
        archives_recovery: function(){
            var obj = this;
            layer.confirm('<font color="red">该文档与关联栏目一起还原</font>，确认还原？', {
                title: false,
                btn: ['确定','取消'] //按钮
            }, function(index){
                layer.close(index);
                var load = layer_loading();
                // 确定
                $.ajax({
                    type : 'post',
                    url : $(obj).attr('data-url'),
                    data : {del_id:$(obj).attr('data-id'),_ajax:1},
                    dataType : 'json',
                    success : function(res){
                        layer.close(load);
                        if(res.code == 1){
                            layer.msg(res.msg, {icon: 1});
                            window.location.reload();
                        }else{
                            showErrorMsg(res.msg);
                        }
                    }
                    ,error: function(e){
                        layer.close(load);
                        showErrorAlert();
                    }
                })
            }, function(index){
                layer.close(index);
            });
            return false;
        }
        ,batch_recovery: function(){
            var obj = this;
            var name = 'ids';
            var a = [];
            $('input[name^='+name+']').each(function(i,o){
                if($(o).is(':checked')){
                    a.push($(o).val());
                }
            })
            if(a.length == 0){
                showErrorAlert('请至少选择一项');
                return;
            }
            // 还原按钮
            layer.confirm('<font color="red">选定文档与关联栏目一起还原</font>，确认批量还原？', {
                title: false,
                btn: ['确定', '取消'] //按钮
            }, function (index) {
                layer.close(index);
                var load = layer_loading();
                $.ajax({
                    type: "POST",
                    url: $(obj).attr('data-url'),
                    data: {del_id:a,_ajax:1},
                    dataType: 'json',
                    success: function (res) {
                        layer.close(load);
                        if(res.code == 1){
                            layer.msg(res.msg, {icon: 1});
                            window.location.reload();
                        }else{
                            showErrorMsg(res.msg);
                        }
                    },
                    error:function(){
                        layer.close(load);
                        showErrorAlert();
                    }
                });
            }, function (index) {
                layer.close(index);
            });
            return false;
        }
        ,archives_del: function(){
            var obj = this;
            layer.confirm('此操作不可恢复，确认彻底删除？', {
                title: false,
                btn: ['确定','取消'] //按钮
            }, function(index){
                layer.close(index);
                var load = layer_loading();
                // 确定
                $.ajax({
                    type : 'post',
                    url : $(obj).attr('data-url'),
                    data : {del_id:$(obj).attr('data-id'),_ajax:1},
                    dataType : 'json',
                    success : function(res){
                        layer.close(load);
                        if(res.code == 1){
                            layer.msg(res.msg, {icon: 1});
                            window.location.reload();
                        }else{
                            showErrorMsg(res.msg);
                        }
                    }
                    ,error: function(e){
                        layer.close(load);
                        showErrorAlert();
                    }
                })
            }, function(index){
                layer.close(index);
            });
            return false;
        }
        ,batch_del: function(){
            var obj = this;
            var name = 'ids';
            var a = [];
            $('input[name^='+name+']').each(function(i,o){
                if($(o).is(':checked')){
                    a.push($(o).val());
                }
            })
            if(a.length == 0){
                showErrorAlert('请至少选择一项');
                return;
            }
            // 删除按钮
            layer.confirm('此操作不可恢复，确认批量彻底删除？', {
                title: false,
                btn: ['确定', '取消'] //按钮
            }, function (index) {
                layer.close(index);
                var load = layer_loading();
                $.ajax({
                    type: "POST",
                    url: $(obj).attr('data-url'),
                    data: {del_id:a,_ajax:1},
                    dataType: 'json',
                    success: function (res) {
                        layer.close(load);
                        if(res.code == 1){
                            layer.msg(res.msg, {icon: 1});
                            window.location.reload();
                        }else{
                            showErrorMsg(res.msg);
                        }
                    },
                    error:function(){
                        layer.close(load);
                        showErrorAlert();
                    }
                });
            }, function (index) {
                layer.close(index);
            });
            return false;
        }
        // 清空回收站
        ,archives_clear: function(){
            var load = layer_loading();
            $.ajax({
                type: "POST",
                url: $(this).attr('data-url'),
                data: {_ajax:1},
                dataType: 'json',
                success: function (res) {
                    layer.close(load);
                    if(res.code == 1){
                        layer.msg(res.msg, {icon: 1, time:1000}, function(){
                            window.location.href = res.url;
                        });
                    }else{
                        showErrorMsg(res.msg);
                    }
                },
                error:function(){
                    layer.close(load);
                    showErrorAlert();
                }
            });
        }
    };

    $('.layui-btn,.eju-event').on('click', function(){
      var type = $(this).data('type');
      active[type] && active[type].call(this);
    });

  });

    $(".dropdown-bt").click(function(){
        $(".dropdown-menu").slideToggle(200);
        event.stopPropagation();
    })
    $(document).click(function(){
        $(".dropdown-menu").slideUp(200);
        event.stopPropagation();
    })

  </script>

</body>
</html>