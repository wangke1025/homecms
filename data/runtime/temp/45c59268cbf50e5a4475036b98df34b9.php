<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:49:"./application/admin/template/channeltype/edit.htm";i:1586742752;s:78:"/www/wwwroot/ejucms.wingle.com.cn/application/admin/template/public/layout.htm";i:1580687630;s:78:"/www/wwwroot/ejucms.wingle.com.cn/application/admin/template/public/footer.htm";i:1580687630;}*/ ?>
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
  <div class="layui-fluid">
      <div class="layui-row layui-col-space15">
          <div class="layui-col-md12">
            <div class="layui-card">
              <div class="layui-card-body web-system" pad15>
                <div class="layui-form" wid100 lay-filter="">
                  <div class="layui-form-item">
                    <label class="layui-form-label"><b>*</b>模型名称</label>
                    <div class="layui-input-inline">
                      <input type="text" name="ntitle" value="<?php echo (isset($field['ntitle']) && ($field['ntitle'] !== '')?$field['ntitle']:''); ?>" id="ntitle" class="layui-input" lay-verify="required">
                    </div>
                  </div>
                  <div class="layui-form-item">
                    <label class="layui-form-label">模型标识</label>
                    <div class="layui-input-inline">
                        <div style="padding:6px 0px;"><?php echo $field['nid']; ?></div>
                        <input type="hidden" name="nid" value="<?php echo (isset($field['nid']) && ($field['nid'] !== '')?$field['nid']:''); ?>">
                    </div>
                    <div class="layui-form-inline2">
                        与文档的模板相关连，建议由小写字母、数字组成，因为部份Unix系统无法识别中文文件。<br/>
                        列表模板是：lists_模型标识.htm<br/>
                        文档模板是：view_模型标识.htm
                    </div>
                  </div>
                  <div class="layui-form-item">
                    <label class="layui-form-label">允许标题重复</label>
                    <div class="layui-input-inline w70">
                        <input type="checkbox" lay-filter="is_repeat_title" lay-skin="switch" lay-text="是|否" <?php if(!isset($field['is_repeat_title']) || $field['is_repeat_title'] == 1): ?>checked<?php endif; ?>>
                        <input type="hidden" name="is_repeat_title" value="<?php echo (isset($field['is_repeat_title']) && ($field['is_repeat_title'] !== '')?$field['is_repeat_title']:'1'); ?>" />
                    </div>
                  </div>
                    <?php if(!(empty($list) || (($list instanceof \think\Collection || $list instanceof \think\Paginator ) && $list->isEmpty()))): ?>
                    <div class="layui-form-item">
                        <label class="layui-form-label">关联<?php echo $list['ntitle']; ?></label>
                        <div class="layui-input-inline">
                            <select id="join_id" name="join_id"  lay-filter="join_id">
                                <option value="0" >不关联</option>
                                <option value="<?php echo $list['id']; ?>"  <?php if($field['join_id'] == $list['id']): ?> selected <?php endif; ?> >关联</option>
                            </select>
                        </div>
                        <div class="layui-input-inline layui-btn-container " style="width: auto;">
                            <div class="layui-form-mid layui-word-aux ey_helptips"></div>
                            <div class="layui-form-inline2 ey_helptips_txt">关联模型</div>
                        </div>
                    </div>
                    <?php endif; ?>
                    <div id="join_must_div" class="layui-form-item" <?php if(empty($field['join_id']) || (($field['join_id'] instanceof \think\Collection || $field['join_id'] instanceof \think\Paginator ) && $field['join_id']->isEmpty())): ?>style="display: none;"<?php endif; ?>>
                        <label class="layui-form-label">关联必选</label>
                        <div class="layui-input-inline w70">
                            <input type="checkbox" lay-filter="join_must" lay-skin="switch" lay-text="是|否" <?php if($field['join_must'] == 1): ?>checked<?php endif; ?>>
                            <input type="hidden" name="join_must" value="<?php echo (isset($field['join_must']) && ($field['join_must'] !== '')?$field['join_must']:'0'); ?>" />
                        </div>
                        <div class="layui-input-inline layui-btn-container " style="width: auto;">
                            <div class="layui-form-mid layui-word-aux ey_helptips"></div>
                            <div class="layui-form-inline2 ey_helptips_txt">添加、编辑内容时，是否必须选择<?php echo $list['ntitle']; ?></div>
                        </div>
                    </div>
                  <?php if(!(empty($field['ifsystem']) || (($field['ifsystem'] instanceof \think\Collection || $field['ifsystem'] instanceof \think\Paginator ) && $field['ifsystem']->isEmpty()))): ?>
                    <div class="layui-form-item">
                        <label class="layui-form-label">关联经纪人</label>
                        <div class="layui-input-inline w70">
                            <input type="checkbox" lay-filter="is_join_user" lay-skin="switch" lay-text="是|否" <?php if(!isset($field['is_join_user']) || $field['is_join_user'] == 1): ?>checked<?php endif; ?>>
                            <input type="hidden" name="is_join_user" value="<?php echo (isset($field['is_join_user']) && ($field['is_join_user'] !== '')?$field['is_join_user']:'0'); ?>" />
                        </div>
                    </div>
                  <?php endif; ?>

                    <div class="layui-form-item">
                    <div class="layui-input-block">
                        <input type="hidden" name="id" value="<?php echo $field['id']; ?>">
                        <button class="layui-btn" lay-submit lay-filter="formSubmit">确认提交</button>
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
    ,layer = layui.layer
    ,form = layui.form;

    var parentObj = parent.layer.getFrameIndex(window.name); //先得到当前iframe层的索引

    // 监听开关
    form.on('switch', function(data){
      var elemId = data.elem.attributes['lay-filter']['nodeValue'];
      if (data.elem.checked) {
        this.value = 1;
      } else {
        this.value = 0;
      }
      $("input[name='"+elemId+"']").val(this.value);
    });
    //选中选择关联
      form.on('select(join_id)', function(data){
          if (data.value == 0){ //隐藏
              $("#join_must_div").hide();
          }else{
              $("#join_must_div").show();
          }
          form.render();
      });
    //监听提交
    form.on('submit(formSubmit)', function(data){
        var load = layer_loading();
        data.field._ajax = 1;
        $.ajax({
            type : 'post',
            url : "<?php echo url('Channeltype/edit'); ?>",
            data : data.field,
            dataType : 'json',
            success : function(res){
                layer.close(load); //关闭loading
                if(res.code == 1){
                    layer.msg(res.msg, {icon: 1, time: 1000}, function(){
                        parent.gourl(res.url);
                    });
                }else{
                    parent.showErrorMsg(res.msg);
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