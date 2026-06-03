<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:50:"./application/admin/template/filemanager/index.htm";i:1580687630;s:78:"/www/wwwroot/ejucms.wingle.com.cn/application/admin/template/public/layout.htm";i:1580687630;s:78:"/www/wwwroot/ejucms.wingle.com.cn/application/admin/template/public/footer.htm";i:1580687630;}*/ ?>
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
  <link rel="stylesheet" href="/public/static/admin/css/template.css?v=<?php echo $version; ?>" media="all">
  <div class="layui-fluid layadmin-maillist-fluid house_template">
    <div class="layui-card"  >
      <div class="head-oper">
        <div class="fl"></div>
        <div class="fr "></div>
        <div class="layui-card-body">
          <div class="layui-row layui-col-space15">
            <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <div class="layui-col-md2 layui-col-sm4">
              <div class="cmdlist-container"> 
                <a href="<?php echo url('Filemanager/lists', array('activepath'=>replace_path($vo['filepath']))); ?>">
                  <img width="242" height="200" src="<?php echo $vo['preview']; ?>?t=<?php echo time(); ?>">
                </a>
                <div class="cmdlist-text"> 
                  <span class="info"><a href="<?php echo url('Filemanager/lists', array('activepath'=>replace_path($vo['filepath']))); ?>"><?php echo $vo['title']; ?> <i style="color: #3366cc; font-size: 12px; font-weight: normal">[管理]</i></a></span> 
                  <span>
                  <div class="layui-form">
                    <label>状态：</label>
                    <input type="checkbox" lay-skin="switch" lay-filter="is_default" lay-text="开启|关闭" data-theme="<?php echo $vo['filename']; ?>" <?php if($vo['is_default'] == '1'): ?>checked<?php endif; ?>>
                  </div>
                  </span>
                  <span>风格名称：<?php echo $vo['config']['mbname']; ?></span> 
                  <span>系统版本：<?php echo $vo['config']['cmsversion']; ?></span>
                </div>
              </div>
            </div>
            <?php endforeach; endif; else: echo "" ;endif; ?>
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
      }).use(['index', 'table'], function(){
          var $ = layui.$
              ,form = layui.form
              ,table = layui.table;

          //开启关闭
          form.on('switch(is_default)', function(data){
              var theme = $(this).data('theme');
              if (data.elem.checked){
                  value = 1;
              }else{
                  value = 0;
              }
              var load = layer_loading();
              $.ajax({
                  type : 'post',
                  url : "<?php echo url('Filemanager/ajax_set_theme'); ?>",
                  data : {theme:theme,_ajax:1},
                  dataType : 'json',
                  success : function(res){
                      layer.close(load); //关闭loading
                      if(res.code == 1){
                          window.location.reload();
                      }else{
                          showErrorMsg(res.msg);
                      }
                  },
                  error: function(e){
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