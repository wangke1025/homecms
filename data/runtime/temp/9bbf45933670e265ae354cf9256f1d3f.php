<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:45:"./application/admin/template/system/basic.htm";i:1580687630;s:78:"/www/wwwroot/ejucms.wingle.com.cn/application/admin/template/public/layout.htm";i:1580687630;s:75:"/www/wwwroot/ejucms.wingle.com.cn/application/admin/template/system/bar.htm";i:1581495854;s:78:"/www/wwwroot/ejucms.wingle.com.cn/application/admin/template/public/footer.htm";i:1580687630;}*/ ?>
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
  <div class="layui-fluid" id="LAY-component-layer-list">
    <div class="layui-row">
      <div class="layui-col-md12">
        <div class="layui-card">
          <div class="web-system">
            <div class="layui-tab layui-tab-card">
              <?php if(\think\Request::instance()->param('tabase') != '-1'): ?>
    <ul class="layui-tab-title">
        <?php if(is_check_access('System@web') == '1'): ?>
        <li <?php if('web'==ACTION_NAME): ?>class="layui-this"<?php endif; ?>><a href="<?php echo url('System/web'); ?>">网站设置</a></li>
        <?php endif; if(is_check_access('System@web2') == '1'): ?>
        <li <?php if('web2'==ACTION_NAME): ?>class="layui-this"<?php endif; ?>><a href="<?php echo url('System/web2'); ?>">核心设置</a></li>
        <?php endif; if(is_check_access('System@basic') == '1'): ?>
        <li <?php if('basic'==ACTION_NAME): ?>class="layui-this"<?php endif; ?>><a href="<?php echo url('System/basic'); ?>">附件设置</a></li>
        <?php endif; if(is_check_access('System@smtp') == '1'): ?>
        <li <?php if(preg_match('/^smtp/i', ACTION_NAME)): ?>class="layui-this"<?php endif; ?>><a href="<?php echo url('System/smtp'); ?>">接口配置</a></li>
        <?php endif; if(is_check_access('UsersConfig@register') == '1'): ?>
        <li <?php if('register'==ACTION_NAME): ?>class="layui-this"<?php endif; ?>><a href="<?php echo url('UsersConfig/register'); ?>">会员设置</a></li>
        <?php endif; if(is_check_access('System@question') == '1'): ?>
        <!--<li <?php if(preg_match('/^question/i', ACTION_NAME)): ?>class="layui-this"<?php endif; ?>><a href="<?php echo url('System/question'); ?>">问答配置</a></li>-->
        <?php endif; ?>
    </ul>
<?php endif; ?>
              <div class="layui-tab-content" style="padding:10px 0">
                <div class="layui-tab-item layui-show">
                    <div class="layui-row layui-col-space15">
                      <div class="layui-col-md12">
                        <div class="layui-card">
                          <div class="layui-card-body" pad15>
                            <div class="layui-form" wid100 lay-filter="">
                              <div class="layui-form-item">
                                <label class="layui-form-label">主页链接名</label>
                                <div class="layui-input-inline">
                                  <input type="text" name="basic_indexname" value="<?php echo (isset($config['basic_indexname']) && ($config['basic_indexname'] !== '')?$config['basic_indexname']:'首页'); ?>" class="layui-input">
                                </div>
                              </div>
                              <div class="layui-form-item">
                                <label class="layui-form-label">栏目位置间隔符</label>
                                <div class="layui-input-inline">
                                  <input type="text" name="list_symbol" value="<?php echo (isset($config['list_symbol']) && ($config['list_symbol'] !== '')?$config['list_symbol']:' > '); ?>" class="layui-input">
                                </div>
                              </div>
                              <div class="layui-form-item">
                                <label class="layui-form-label">上传图片类型</label>
                                <div class="layui-input-inline">
                                   <textarea name="image_type" class="layui-textarea"><?php if(empty($config['image_type']) || (($config['image_type'] instanceof \think\Collection || $config['image_type'] instanceof \think\Paginator ) && $config['image_type']->isEmpty())): ?>jpg|gif|png|bmp|jpeg|ico<?php else: ?><?php echo $config['image_type']; endif; ?></textarea>
                                </div>
                                <div class="layui-form-mid layui-word-aux ey_helptips"></div>
                                <div class="layui-form-inline2 ey_helptips_txt">禁止非图片的扩展名，比如：php</div>
                              </div>
                              <div class="layui-form-item">
                                <label class="layui-form-label">上传软件类型</label>
                                <div class="layui-input-inline">
                                   <textarea name="file_type" class="layui-textarea"><?php if(empty($config['file_type']) || (($config['file_type'] instanceof \think\Collection || $config['file_type'] instanceof \think\Paginator ) && $config['file_type']->isEmpty())): ?>zip|gz|rar|iso|doc|xsl|ppt|wps<?php else: ?><?php echo $config['file_type']; endif; ?></textarea>
                                </div>
                                <div class="layui-form-mid layui-word-aux ey_helptips"></div>
                                <div class="layui-form-inline2 ey_helptips_txt">禁止非软件的扩展名，比如：php</div>
                              </div>
                              <div class="layui-form-item">
                                <label class="layui-form-label">多媒体文件类型</label>
                                <div class="layui-input-inline">
                                   <textarea name="media_type" class="layui-textarea"><?php if(empty($config['media_type']) || (($config['media_type'] instanceof \think\Collection || $config['media_type'] instanceof \think\Paginator ) && $config['media_type']->isEmpty())): ?>swf|mpg|mp3|rm|rmvb|wmv|wma|wav|mid|mov|mp4<?php else: ?><?php echo $config['media_type']; endif; ?></textarea>
                                </div>
                                <div class="layui-form-mid layui-word-aux ey_helptips"></div>
                                <div class="layui-form-inline2 ey_helptips_txt">禁止非媒体的扩展名，比如：php</div>
                              </div>
                              <div class="layui-form-item">
                                <label class="layui-form-label">附件上传大小</label>
                                <div class="layui-input-inline" style="width:150px">
                                   <input style="width: 100px;float: left" type="text" name="file_size" lay-verify="number|check_filesize" value="<?php echo (isset($config['file_size']) && ($config['file_size'] !== '')?$config['file_size']:$max_filesize); ?>" class="layui-input"> <span style="float: left;line-height: 38px;margin-left: 4px;"> <?php echo $max_sizeunit; ?></span>
                                </div>
                                <div class="layui-form-mid layui-word-aux ey_helptips"></div>
                                <div class="layui-form-inline2 ey_helptips_txt">附件上传大小限制，如果空间不支持，请与空间商联系修改php.ini部分参数</div>
                              </div>
                              <div class="layui-form-item">
                                <div class="layui-input-block">
                                    <input type="hidden" name="max_filesize" id="max_filesize" value="<?php echo $max_filesize; ?>">
                                    <input type="hidden" name="max_sizeunit" id="max_sizeunit" value="<?php echo $max_sizeunit; ?>">
                                    <button class="layui-btn" lay-submit lay-filter="formSubmit">确认提交</button>
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
     </div>
  </div>

<script type="text/javascript">
  layui.config({
    base: '/public/static/admin/' //静态资源所在路径
    ,version: '<?php echo $version; ?>'
  }).extend({
    index: 'lib/index' //主入口模块
  }).use(['index', 'form'], function(){
    var $ = layui.$
    ,layer = layui.layer
    ,form = layui.form;

    form.verify({
      check_filesize: function(value, item){ //value：表单的值、item：表单的DOM对象
        var file_size = value;
        var max_filesize = parseInt($('#max_filesize').val());
        var max_sizeunit = $('#max_sizeunit').val();
        if (0 < max_filesize && max_filesize < file_size) {
            return '附件上传大小超过空间的最大限制'+max_filesize+max_sizeunit;
        }
      }
    }); 

    //监听提交
    form.on('submit(formSubmit)', function(data){
        var load = layer_loading();
        data.field._ajax = 1;
        $.ajax({
            type : 'post',
            url : "<?php echo url('System/basic'); ?>",
            data : data.field,
            dataType : 'json',
            success : function(res){
                layer.close(load); //关闭loading
                if(res.code == 1){
                    layer.msg(res.msg, {icon: 1, time: 1000}, function(){
                        window.location.reload();
                    });
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
