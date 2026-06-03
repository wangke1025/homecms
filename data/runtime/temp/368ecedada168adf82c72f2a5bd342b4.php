<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:44:"./application/admin/template/admin/index.htm";i:1581471064;s:78:"/www/wwwroot/ejucms.wingle.com.cn/application/admin/template/public/layout.htm";i:1580687630;s:74:"/www/wwwroot/ejucms.wingle.com.cn/application/admin/template/admin/bar.htm";i:1581471412;s:78:"/www/wwwroot/ejucms.wingle.com.cn/application/admin/template/public/footer.htm";i:1580687630;}*/ ?>
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
       <ul class="layui-tab-title">
    <?php if(is_check_access('Admin@index') == '1'): ?>
    <li <?php if(('Admin'==CONTROLLER_NAME) and ('index'==ACTION_NAME)): ?>class="layui-this"<?php endif; ?>>
        <a href="<?php echo url('Admin/index'); ?>">管理员</a>
    </li>
    <?php endif; if(is_check_access('AuthRole@index') == '1'): ?>
    <li <?php if(('AuthRole'==CONTROLLER_NAME) and ('index'==ACTION_NAME)): ?>class="layui-this"<?php endif; ?>>
    <a href="<?php echo url('AuthRole/index'); ?>">权限组</a>
    </li>
    <?php endif; ?>
</ul>
<style>
    .layui-tab-title .layui-this {
        background-color:#fff;
    }
</style>
      <div class="layui-card">

        <div class="head-oper">
          <div class="fl">
            <?php if(is_check_access('Admin@admin_add') == '1'): ?>
            <a data-url="<?php echo url('Admin/admin_add'); ?>" data-type="admin_add" class="layui-btn mt5 ">新增管理员</a>
            <?php endif; ?>
          </div>
          <div class="fr">
            <form action="<?php echo url('Admin/index'); ?>" method="get" onsubmit="layer_loading();">
              <div class="fl mt5" >
                <?php echo (isset($searchform['hidden']) && ($searchform['hidden'] !== '')?$searchform['hidden']:''); ?>
                <div class="layui-input-inline w240">
                    <input type="text" name="keywords" value="<?php echo \think\Request::instance()->param('keywords'); ?>" class="layui-input" placeholder="搜索相关数据...">
                </div>
              </div>
              <div class="layui-input-inline w50 mt5">
                <button class="layui-btn input-btn-search" type="submit"><i class="layui-icon layui-icon-search"></i></button>
              </div>
            </form>
          </div>
<!--           <div class="fr ">
            <?php if(is_check_access('Admin@index') == '1'): ?>
            <a href="javascript:void(0);" class="layui-btn layui-btn-xs layui-disabled"><i class="layui-icon layui-icon-template-1"></i>管理员列表</a>
            <?php endif; if(is_check_access('AuthRole@index') == '1'): ?>
            <a lay-href="<?php echo url('AuthRole/index'); ?>" class="layui-btn layui-btn-xs"><i class="layui-icon layui-icon-template-1"></i>权限组列表</a>
            <?php endif; ?>
          </div> -->
        </div>
        <div class="layui-card-body">
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
                      <th class="w60 tc">
                        <div class="layui-table-cell w60 tc" ><span>ID</span></div>
                      </th>
                      <th>
                        <div class="layui-table-cell wauto"><span>用户名</span></div>
                      </th>
                      <th class="w150 tc">
                        <div class="layui-table-cell w150 tc"><span>角色</span></div>
                      </th>
                      <th class="w180 tc">
                        <div class="layui-table-cell w180 tc"><span>最后登录时间</span></div>
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
                            <?php if(\think\Session::get('admin_id') != $vo['admin_id'] AND !empty($vo['parent_id'])): ?>
                              <input type="checkbox" name="ids[]" lay-filter="ids" lay-skin="primary" value="<?php echo $vo['admin_id']; ?>">
                            <?php else: ?>
                              <input type="checkbox" disabled lay-skin="primary" value="<?php echo $vo['admin_id']; ?>">
                            <?php endif; ?>
                           </div>
                        </td>
                        <td>
                            <div class="layui-table-cell w60 tc">
                                <?php echo $vo['admin_id']; ?>
                            </div>
                        </td>
                        <td>
                            <div class="layui-table-cell wauto">
                                <?php if(is_check_access('Admin@admin_edit') == '1'): ?>
                                <a href="javascript:void(0);" class="eju-event" data-type="admin_edit" data-url="<?php echo url('Admin/admin_edit',array('id'=>$vo['admin_id'])); ?>"><?php echo $vo['user_name']; ?></a>
                                <?php else: ?>
                                <?php echo $vo['user_name']; endif; ?>
                            </div>
                        </td>
                        <td>
                            <div class="layui-table-cell w150 tc">
                                <?php echo (isset($vo['role_name']) && ($vo['role_name'] !== '')?$vo['role_name']:'<b>数据出错</b>'); ?>
                            </div>
                        </td>
                        <td>
                            <div class="layui-table-cell w180 tc">
                                <?php if(empty($vo['last_login']) || (($vo['last_login'] instanceof \think\Collection || $vo['last_login'] instanceof \think\Paginator ) && $vo['last_login']->isEmpty())): ?>
                                未登录
                                <?php else: ?>
                                <?php echo date('Y-m-d H:i:s',$vo['last_login']); endif; ?>
                            </div>
                        </td>
                        <td>
                           <div class="layui-table-cell w150 tl right-oper">
                            <?php if(is_check_access('Admin@admin_edit') == '1'): ?>
                                <a class="layui-btn btn-edit customvar_edit" data-url="<?php echo url('Admin/admin_edit',array('id'=>$vo['admin_id'])); ?>" data-type="admin_edit">编辑</a>
                            <?php endif; if(is_check_access('Admin@admin_del') == '1'): if(\think\Session::get('admin_id') != $vo['admin_id'] AND !empty($vo['parent_id'])): ?>
                                <a class="layui-btn btn-primary" href="javascript:void(0);" data-url="<?php echo url('Admin/admin_del'); ?>" data-id="<?php echo $vo['admin_id']; ?>" data-type="admin_del">删除</a>
                              <?php else: ?>
                                <a class="layui-btn btn-primary" href="javascript:void(0);" style="color:#ccc; cursor:not-allowed">删除</a>
                              <?php endif; endif; ?>
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
                <?php if(is_check_access('Admin@admin_del') == '1'): ?>
                <a class="layui-btn layui-btn-primary " data-type="batch_del" data-url="<?php echo url('Admin/admin_del'); ?>" style="line-height: 34px;">
                批量删除
                </a>
                <?php endif; ?>
            </div>
            <!--分页-->

          </div>
            <?php echo $page; ?>
        </div>
      </div>
 </div>
<input type="hidden" name="head_pic" id="head_pic" value="<?php echo \think\Session::get('admin_info.head_pic'); ?>">
  <script>
  layui.config({
    base: '/public/static/admin/' //静态资源所在路径
    ,version: '<?php echo $version; ?>'
  }).extend({
    index: 'lib/index' //主入口模块
  }).use(['index', 'form'], function(){
    var $ = layui.$
    ,form = layui.form;

    // 上传头像及时显示
    if ('' != $('#head_pic').val()) {
      $('#admin_head_pic', window.parent.document).attr('src', $('#head_pic').val());
    }

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
        admin_add: function(){
            var iframes = layer.open({
                type: 2,
                title: '新增管理员',
                fixed: true, //不固定
                shadeClose: false,
                shade: 0.3,
                content: $(this).data('url')
            });
            layer.full(iframes);
        }
        ,admin_edit: function(){
            var iframes = layer.open({
                type: 2,
                title: '编辑管理员',
                fixed: true, //不固定
                shadeClose: false,
                shade: 0.3,
                content: $(this).data('url')
            });
            layer.full(iframes);
        }
        ,admin_del: function(){
            delfun(this);
            return false;
        }
        ,batch_del: function(){
            batch_del(this, 'ids');
            return false;
        }
    };

    $('#LAY-component-layer-list .layui-btn,.eju-event').on('click', function(){
      var type = $(this).data('type');
      active[type] && active[type].call(this);
    });

  });

  </script>

</body>
</html>