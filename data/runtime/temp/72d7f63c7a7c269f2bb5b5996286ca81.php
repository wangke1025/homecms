<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:50:"./application/admin/template/channeltype/index.htm";i:1580687630;s:78:"/www/wwwroot/ejucms.wingle.com.cn/application/admin/template/public/layout.htm";i:1580687630;s:78:"/www/wwwroot/ejucms.wingle.com.cn/application/admin/template/public/footer.htm";i:1580687630;}*/ ?>
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
   <div class="layui-fluid">
      <div class="layui-card">
        <div class="head-oper">
          <div class="fl">
            <?php if(is_check_access('Channeltype@add') == '1'): ?>
            <a data-url="<?php echo url('Channeltype/add'); ?>" data-type="Channeltype_add" class="layui-btn mt5 ">新增模型</a>
            <?php endif; ?>
          </div>
          <div class="fr">
           <!-- <?php if(is_check_access('Field@arctype_index') == '1'): ?>
            <a href="<?php echo url('Field/arctype_index'); ?>" class="layui-btn layui-btn-danger layui-btn-xs "><i class="layui-icon layui-icon-set-sm"></i>栏目字段管理</a>
            <?php endif; ?>-->
          </div>
        </div>
        <div class="layui-card-body">
          <div class="layui-form layui-border-box layui-table-view house-table" lay-filter="formTest" lay-id="admin-arctype" >
            <div class="layui-table-box">
              <div class="layui-table-body " >
                <table cellspacing="0" cellpadding="0" border="0" class="layui-table layui-form" style="width: 100%" lay-skin="line">
                  <thead >
                    <tr>
                      <th class="w60 tc"> 
                        <div class="layui-table-cell w60 tc" ><span>ID</span></div>
                      </th>
                      <th class="wauto"> 
                        <div class="layui-table-cell wauto" ><span>模型名称</span></div>
                      </th>
                      <th class="w140 tc"> 
                        <div class="layui-table-cell w140 tc"><span>模型标识</span></div>
                      </th>
                      <th class="w100 tc"> 
                        <div class="layui-table-cell w100 tc"><span>类型</span></div>
                      </th>
                      <th class="w80 tc"> 
                        <div class="layui-table-cell w80 tc"><span>启用</span></div>
                      </th>
                      <th class="w80 tc"> 
                        <div class="layui-table-cell w80 tc"><span>排序</span></div>
                      </th>
                      <th class="w180 tc"> 
                        <div class="layui-table-cell w180 tc"><span>操作</span></div>
                      </th>
                    </tr>
                 </thead>
                 <tbody>
                  <?php if(empty($list) || (($list instanceof \think\Collection || $list instanceof \think\Paginator ) && $list->isEmpty())): ?>
                    <tr>
                      <td colspan="7" class="no-data tc">
                         没有符合条件的数据
                      </td>
                    </tr>
                  <?php else: if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): if( count($list)==0 ) : echo "" ;else: foreach($list as $k=>$vo): ?>
                     <tr>
                        <td>
                           <div class="layui-table-cell w60 tc"> <?php echo $vo['id']; ?> </div>
                        </td>
                        <td>
                            <div class="layui-table-cell wauto">
                                <?php if(is_check_access('Channeltype@edit') == '1'): ?>
                                <a href="javascript:void(0);" class="eju-event" data-type="Channeltype_edit" data-url="<?php echo url('Channeltype/edit',array('id'=>$vo['id'])); ?>"><?php echo $vo['title']; ?></a>
                                <?php else: ?>
                                <?php echo $vo['title']; endif; ?>
                            </div>
                        </td>
                        <td>
                          <div class="layui-table-cell w140 tc" title="<?php echo $vo['title']; ?>"> 
                            <?php echo $vo['nid']; ?>
                          </div>
                        </td>
                        <td>
                          <div class="layui-table-cell w100 tc"> 
                            <?php if($vo['ifsystem'] == '1'): ?>
                              系统
                            <?php else: ?>
                              自定义
                            <?php endif; ?>
                          </div>
                        </td>
                        <td>
                           <div class="layui-table-cell w80 tc">
                              <?php if(is_check_access('Channeltype@edit') == '1'): ?>
                                <input type="checkbox" lay-skin="switch" lay-filter="status" data-id="<?php echo $vo['id']; ?>" data-title="<?php echo $vo['title']; ?>" value="<?php echo $vo['status']; ?>" <?php if($vo['status'] == '1'): ?>checked<?php endif; ?> lay-text="是|否">
                              <?php else: ?>
                                <input type="checkbox" lay-skin="switch" disabled <?php if($vo['status'] == '1'): ?>checked<?php endif; ?> lay-text="是|否">
                              <?php endif; ?>
                           </div>
                        </td>
                        <td>
                          <div class="layui-table-cell w80 tc">
                            <?php if(is_check_access('Channeltype@edit') == '1'): ?>
                            <input type="text" value="<?php echo $vo['sort_order']; ?>" onchange="changeTableVal('channeltype','id','<?php echo $vo['id']; ?>','sort_order',this);" class="layui-input" onkeyup="this.value=this.value.replace(/[^\d]/g,'');" onpaste="this.value=this.value.replace(/[^\d]/g,'');">
                            <?php else: ?>
                            <?php echo $vo['sort_order']; endif; ?>
                          </div>
                         </td>
                        <td>
                           <div class="layui-table-cell w250 tl right-oper"> 
                            <?php if(is_check_access('Channeltype@edit') == '1'): ?>
                                <a class="layui-btn btn-edit customvar_edit" data-url="<?php echo url('Channeltype/edit',array('id'=>$vo['id'])); ?>" data-type="Channeltype_edit">编辑</a>
                            <?php endif; if(is_check_access('Channeltype@edit') == '1'): ?>
                                <a class="layui-btn btn-primary" href="<?php echo url('Field/channel_index',array('channel_id'=>$vo['id'])); ?>">内容字段</a>
                            <?php endif; if(is_check_access('Channeltype@del') == '1'): if(empty($vo['ifsystem']) || (($vo['ifsystem'] instanceof \think\Collection || $vo['ifsystem'] instanceof \think\Paginator ) && $vo['ifsystem']->isEmpty())): ?>
                                <a href="javascript:void(0);" class="layui-btn btn-primary" data-url="<?php echo url('Channeltype/del'); ?>" data-id="<?php echo $vo['id']; ?>" data-type="Channeltype_del">删除</a>
                              <?php else: ?>
                                <a href="javascript:void(0);" class="layui-btn btn-primary" title='系统模型不能删除' style="color:#ccc; cursor:not-allowed">删除</a> 
                              <?php endif; endif; ?>
                           </div>
                        </td>
                      </tr>
                    <?php endforeach; endif; else: echo "" ;endif; endif; ?>
                  </tbody>
                </table>
        </div>
      </div>
      <!--分页-->
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
  }).use(['index', 'form'], function(){
    var $ = layui.$
    ,form = layui.form;

    form.on('switch(status)', function(data){
        var obj = data.elem;
        if (obj.checked) {
            data.value = 1;
        } else {
            data.value = 0;
        }
        var status = data.value;
        var title = $(obj).attr('data-title');
        var load = layer_loading();
        $.ajax({
            type : 'post',
            url : "<?php echo url('Channeltype/ajax_show'); ?>",
            data : {id:$(obj).attr('data-id'),status:status,_ajax:1},
            dataType : 'json',
            success : function(res){
                layer.close(load); //关闭loading
                if (res.code == 1) {
                    if (0 == res.data.confirm) {
                        layer.msg(res.msg, {icon: 1, time:500}, function(){
                            window.location.reload();
                        });
                    } else {
                        var confirm = layer.confirm(res.msg, {
                            title: false,
                            btn: ['启用','取消'] //按钮
                        }, function(index){
                            layer.close(index);
                            var load = layer_loading();
                            // 确定
                            $.ajax({
                                type : 'post',
                                url : "<?php echo url('Channeltype/ajax_check_tpl'); ?>",
                                data : {id:$(obj).attr('data-id'),status:status,tpltype:res.data.tpltype},
                                dataType : 'json',
                                success : function(res){
                                    layer.close(load); //关闭loading
                                    if(res.code == 1){
                                        layer.msg(res.msg, {icon: 1, time: 500}, function(){
                                            window.location.reload();
                                        });
                                    }else{
                                        showErrorAlert(res.msg);
                                    }
                                },
                                error:function(){
                                    layer.close(load); //关闭loading
                                    showErrorAlert();
                                }
                            })
                        });
                    }
                } else {
                    layer.alert(res.msg, {icon: 5, title: false, closeBtn:false}, function(){
                        window.location.reload();
                    });
                }
            },
            error:function(){
                layer.close(load); //关闭loading
                showErrorAlert();
            }
        });
    });

    /* 触发事件 */
    var active = {
      Channeltype_add: function(){
          var iframes = layer.open({
              type: 2,
              title: '新增模型',
              fixed: true, //不固定
              shadeClose: false,
              shade: 0.3,
              content: $(this).data('url')
          });
          layer.full(iframes);
      }
      ,Channeltype_edit: function(){
          var iframes = layer.open({
              type: 2,
              title: '编辑模型',
              fixed: true, //不固定
              shadeClose: false,
              shade: 0.3,
              content: $(this).data('url')
          });
          layer.full(iframes);
      }
      ,Channeltype_del: function(){
        var obj = this;
        var confirm = layer.confirm('<font color="#ff0000">此操作将会删除与该模型所有相关的数据且不可恢复，请谨慎操作！</font>是否确认删除？', {
            title: false,
            btn: ['确定','取消'] //按钮
        }, function(){
            layer.close(confirm);
            var load = layer_loading();
            // 确定
            $.ajax({
                type : 'post',
                url : $(obj).attr('data-url'),
                data : {del_id:$(obj).attr('data-id'),_ajax:1},
                dataType : 'json',
                success : function(res){
                    layer.close(load); //关闭loading
                    if(res.code == 1){
                        layer.msg(res.msg, {icon: 1, time: 500}, function(){
                            window.location.reload();
                        });
                    }else{
                        showErrorAlert(res.msg);
                    }
                },
                error:function(){
                    layer.close(load); //关闭loading
                    showErrorAlert();
                }
            })
        }, function(index){
          layer.close(index);
        });
        return false;
      }
    };

    $('.layui-btn,.eju-event').on('click', function(){
      var type = $(this).data('type');
      active[type] && active[type].call(this);
    });

  });

  </script>

</body>
</html>