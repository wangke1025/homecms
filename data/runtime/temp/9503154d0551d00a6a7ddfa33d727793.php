<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:44:"./application/admin/template/system/web2.htm";i:1584929170;s:78:"/www/wwwroot/ejucms.wingle.com.cn/application/admin/template/public/layout.htm";i:1580687630;s:75:"/www/wwwroot/ejucms.wingle.com.cn/application/admin/template/system/bar.htm";i:1581495854;s:78:"/www/wwwroot/ejucms.wingle.com.cn/application/admin/template/public/footer.htm";i:1580687630;}*/ ?>
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
                            <div class="layui-form" wid100>
                              <div class="layui-form-item">
                                <label class="layui-form-label">系统模式</label>
                                <div class="layui-input-inline w100">
                                  <input type="checkbox" lay-filter="web_cmsmode" lay-skin="switch" lay-text="运营模式|开发模式" <?php if(isset($config['web_cmsmode']) && $config['web_cmsmode'] == 1): ?>checked<?php endif; ?>>
                                  <input type="hidden" name="web_cmsmode" value="<?php echo (isset($config['web_cmsmode']) && ($config['web_cmsmode'] !== '')?$config['web_cmsmode']:'2'); ?>" />
                                </div>
                                <div class="layui-form-inline2">
                                    开发模式：方便修改模板，及时预览前台效果，没缓存，一改便生效。
                                    <br/>
                                    运营模式：提高前台响应速度，利于收录；改模板及后台发布内容需执行【<a style="color:green" id="clear_cache" href="javascript:void(0);">更新缓存</a>】后才能在前台展示。
                                </div>
                              </div>
                            
                              <div class="layui-form-item">
                                <label class="layui-form-label">升级弹窗</label>
                                <div class="layui-input-inline w70">
                                   <input type="checkbox" lay-filter="web_show_popup_upgrade" lay-skin="switch" lay-text="开启|关闭" <?php if(!isset($config['web_show_popup_upgrade']) || $config['web_show_popup_upgrade'] == 1): ?>checked<?php endif; ?>>
                                   <input type="hidden" name="web_show_popup_upgrade" value="<?php echo (isset($config['web_show_popup_upgrade']) && ($config['web_show_popup_upgrade'] !== '')?$config['web_show_popup_upgrade']:'1'); ?>" />
                                </div>
                                <div class="layui-input-inline layui-btn-container" style="width: auto;">
                                  <div class="layui-form-mid layui-word-aux ey_helptips"></div>
                                  <div class="layui-form-inline2 ey_helptips_txt">系统有新版本升级时，后台有弹窗提示</div>
                                </div>
                              </div>
                              <div class="layui-form-item">
                                <label class="layui-form-label">移动端域名</label>
                                <div class="layui-input-inline">
                                   <input style="width: 80px;float: left" type="text" name="web_mobile_domain" value="<?php echo (isset($config['web_mobile_domain']) && ($config['web_mobile_domain'] !== '')?$config['web_mobile_domain']:'m'); ?>" class="layui-input" lay-verify="required" onKeyUp="this.value=this.value.replace(/[^0-9a-z]/g,'');" onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^0-9a-z]/g,''));" placeholder="手机域名">
                                   <span style="float: left;line-height: 38px;margin-left: 4px; margin-right: 5px;">.<?php echo \think\Request::instance()->rootDomain(); ?></span>
                                    <div class="layui-form-mid layui-word-aux ey_helptips"></div>
                                    <div class="layui-form-inline2 ey_helptips_txt">手机端访问自动跳转到手机域名下</div>
                                </div>
                                <div class="layui-form-inline2">请将二级域名 m 解析到站点根目录下</div>
                              </div>
                                <div class="layui-form-item">
                                    <label class="layui-form-label">PC端主域名</label>
                                    <div class="layui-input-inline">
                                        <input style="width: 80px;float: left" type="text" name="web_main_domain" value="<?php echo (isset($config['web_main_domain']) && ($config['web_main_domain'] !== '')?$config['web_main_domain']:''); ?>" class="layui-input" onKeyUp="this.value=this.value.replace(/[^0-9a-z]/g,'');" onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^0-9a-z]/g,''));" placeholder="主域名">
                                        <span style="float: left;line-height: 38px;margin-left: 4px; margin-right: 5px;">.<?php echo \think\Request::instance()->rootDomain(); ?></span>
                                        <div class="layui-form-mid layui-word-aux ey_helptips"></div>
                                        <div class="layui-form-inline2 ey_helptips_txt">pc端默认主页</div>
                                    </div>
                                    <div class="layui-form-inline2"></div>
                                </div>
                              <div class="layui-form-item">
                                <label class="layui-form-label">区域子站点</label>
                                <div class="layui-input-inline w70">
                                   <input type="checkbox" lay-filter="web_region_domain" lay-skin="switch" lay-text="开启|关闭" <?php if(isset($config['web_region_domain']) && $config['web_region_domain'] == 1): ?>checked<?php endif; ?>>
                                   <input type="hidden" name="web_region_domain" value="<?php echo (isset($config['web_region_domain']) && ($config['web_region_domain'] !== '')?$config['web_region_domain']:'0'); ?>" />
                                   <input type="hidden" name="web_region_show_data" value="<?php echo (isset($config['web_region_show_data']) && ($config['web_region_show_data'] !== '')?$config['web_region_show_data']:'0'); ?>" />
                                   <input type="hidden" id="old_web_region_domain" value="<?php echo (isset($config['web_region_domain']) && ($config['web_region_domain'] !== '')?$config['web_region_domain']:'0'); ?>" />
                                </div>
                                <div class="layui-input-inline layui-btn-container" style="width: auto;">
                                  <div class="layui-form-mid layui-word-aux ey_helptips"></div>
                                  <div class="layui-form-inline2 ey_helptips_txt">开启之后，每个地区需要设定子域名！</div>
                                </div>
                              </div>
                              <div class="layui-form-item">
                                <label class="layui-form-label">使用https</label>
                                <div class="layui-input-inline w70">
                                   <input type="checkbox" lay-filter="web_is_https" lay-skin="switch" lay-text="开启|关闭" <?php if(isset($config['web_is_https']) && $config['web_is_https'] == 1): ?> checked<?php endif; ?>>
                                   <input type="hidden" name="web_is_https" value="<?php echo (isset($config['web_is_https']) && ($config['web_is_https'] !== '')?$config['web_is_https']:'0'); ?>" />
                                </div>
                                <div class="layui-input-inline layui-btn-container" style="width: auto;">
                                  <div class="layui-form-mid layui-word-aux ey_helptips"></div>
                                  <div class="layui-form-inline2 ey_helptips_txt">开启之后，sitemap.xml地图以及全站URL将带有https头协议</div>
                                </div>
                                <div class="layui-form-inline2">开启前，请先在空间正确配置SSL证书。<br/>在能正常访问https://域名的情况下，才开启这个功能，使整站的URL都强制采用https协议访问。</div>
                              </div>
                               <div class="layui-form-item none">
                                <label class="layui-form-label">系统安装目录</label>
                                <div class="layui-input-inline">
                                  <input type="text" name="web_cmspath" value="<?php echo (isset($config['web_cmspath']) && ($config['web_cmspath'] !== '')?$config['web_cmspath']:''); ?>" class="layui-input">
                                </div>
                                <div class="layui-form-mid layui-word-aux ey_helptips"></div>
                                <div class="layui-form-inline2 ey_helptips_txt">目录后面不要带 / 反斜杆，一般适用于EjuCms安装在子目录</div>
                              </div>
                              <div class="layui-form-item">
                                <label class="layui-form-label">后台路径</label>
                                <div class="layui-input-inline">
                                   <input type="hidden" name="adminbasefile_old" value="<?php echo (isset($adminbasefile) && ($adminbasefile !== '')?$adminbasefile:'login'); ?>">
                                   <span style="float: left;line-height: 38px;margin-right: 4px;"><?php echo (isset($config['web_main_domain']) && ($config['web_main_domain'] !== '')?$config['web_main_domain']:''); if(!(empty($config['web_main_domain']) || (($config['web_main_domain'] instanceof \think\Collection || $config['web_main_domain'] instanceof \think\Paginator ) && $config['web_main_domain']->isEmpty()))): ?>.<?php endif; ?><?php echo \think\Request::instance()->rootDomain(); ?>/</span>
                                   <input style="width: 100px;float: left" type="text" name="adminbasefile" value="<?php echo (isset($adminbasefile) && ($adminbasefile !== '')?$adminbasefile:'login'); ?>" lay-verify="required|check_adminbasefile" class="layui-input" onKeyUp="this.value=this.value.replace(/[^0-9a-zA-Z_-]/g,'');" onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^0-9a-zA-Z_-]/g,''));">
                                   <span style="float: left;line-height: 38px;margin-left: 4px; margin-right: 5px;">.php</span>
                                    <div class="layui-form-mid layui-word-aux ey_helptips"></div>
                                    <div class="layui-form-inline2 ey_helptips_txt">为了提高后台的安全性，请及时更改后台入口文件。</div>
                                </div>
                              </div>
                              <div class="layui-form-item">
                                <label class="layui-form-label">后台LOGO</label>
                                <div class="layui-input-inline">
                                  <div class="upload-box">
                                    <div class="upload-img fl">
                                      <div class="icaction none">
                                        <span class="load_images">
                                           <a href="javascript:void(0);" onclick="BigImages($('#img_web_adminlogo').attr('src'));">
                                           <i class="layui-icon layui-icon-search mr5"></i>查看
                                           </a>
                                        </span>
                                        <span class="load_images">
                                          <a href="javascript:void(0);" data-inputid="web_adminlogo" onclick="DelImages(this);">
                                          <i class="layui-icon layui-icon-delete mr5"></i>删除
                                          </a>
                                        </span>
                                      </div>
                                      <div class="cover-bg none"></div>
                                      <img id="img_web_adminlogo" src="<?php echo get_default_pic($config['web_adminlogo']); ?>?v=<?php echo time(); ?>">
                                    </div>
                                    <div class="upload-right fl">
                                      <button class="layui-btn test-upload-demoMore layui-btn-primary layui-btn-sm fl mb10 mr5" lay-data="{number:1,ey_inputId:'web_adminlogo',ey_savepath:'allimg'}"><i class="layui-icon">&#xe67c;</i>上传图片</button>
                                      <button class="layui-btn layui-btn-sm layui-btn-primary layui-btn-sm fl mb10" onClick="GetPictureFolder(1,'web_adminlogo');"><i class="layui-icon">&#xe64a;</i>图库</button>
                                      <input name="web_adminlogo" id="web_adminlogo" placeholder="图片地址" value="<?php echo (isset($config['web_adminlogo']) && ($config['web_adminlogo'] !== '')?$config['web_adminlogo']:''); ?>" class="layui-input">
                                      <input type="hidden" name="old_web_adminlogo" value="<?php echo (isset($config['web_adminlogo']) && ($config['web_adminlogo'] !== '')?$config['web_adminlogo']:''); ?>" class="layui-input">
                                    </div>
                                  </div>
                                </div>
                                <div class="layui-input-inline layui-btn-container" style="width: auto;">
                                  <div class="layui-form-mid layui-word-aux ey_helptips"></div>
                                  <div class="ey_helptips_txt">默认网站LOGO，通用头部显示，显示尺寸以模板设计为主</div>
                                </div>
                              </div>
                               <div class="layui-form-item">
                                <label class="layui-form-label">数据库备份目录</label>
                                <div class="layui-input-inline">
                                  <?php $root_dir = 'ROOT_DIR'; if(empty($root_dir) || (($root_dir instanceof \think\Collection || $root_dir instanceof \think\Paginator ) && $root_dir->isEmpty())): ?>
                                    <input type="text" name="web_sqldatapath" value="<?php echo (isset($config['web_sqldatapath']) && ($config['web_sqldatapath'] !== '')?$config['web_sqldatapath']:$sqlbackuppath); ?>" class="layui-input">
                                  <?php else: ?>
                                    <span style="float: left;line-height: 38px;margin-right: 4px;"></span>
                                    <input style="width: 364px;float: left" type="text" name="web_sqldatapath" value="<?php echo (isset($config['web_sqldatapath']) && ($config['web_sqldatapath'] !== '')?$config['web_sqldatapath']:$sqlbackuppath); ?>" class="layui-input">
                                  <?php endif; ?>
                                </div>
                              </div>
                              <div class="layui-form-item">
                                <div class="layui-input-block">
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
    ,layer = layui.layer
    ,form = layui.form;

    form.verify({
      check_adminbasefile: function(value, item){ //value：表单的值、item：表单的DOM对象
        if(/[^0-9a-zA-Z_-]/.test(value)){
          return '只允许字母、数字、下划线和连接符等组合！';
        }
      }
    }); 

    /*清除缓存*/
    $('#clear_cache').click(function(){
        var load = layer_loading();
        $.ajax({
            type : 'post',
            url : "<?php echo url('System/clear_cache'); ?>",
            data : {_ajax:1},
            dataType : 'json',
            success : function(res){
                layer.close(load); //关闭loading
                if(res.code == 1){
                    layer.msg(res.msg, {icon: 1, time: 1000}, function(){
                        top.window.location.reload();
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
    });

    // 监听开关
    form.on('switch', function(data){
      var elemId = data.elem.attributes['lay-filter']['nodeValue'];
      if (data.elem.checked) {
        this.value = 1;
      } else {
        this.value = 0;
      }
      $("input[name='"+elemId+"']").val(this.value);

      if ('web_region_domain' == elemId) {
        var old_web_region_domain = $('#old_web_region_domain').val();
        if (1 == old_web_region_domain && 0 == this.value) {
          layer.confirm('所有资讯的区域划分将失效？', {
                  title: false,
                  btn: ['确定','取消'] //按钮
              }, function(index){
                  layer.close(index);
                  $('input[name=web_region_show_data]').val(1);
              }, function(index){
                  $('input[name=web_region_show_data]').val(0);
              }
          );
        } else {
          $('input[name=web_region_show_data]').val(0);
        }
      }
    });

    //监听提交
    form.on('submit(formSubmit)', function(data){

        if(data.field.adminbasefile_old != data.field.adminbasefile){
            var flag = false;
            layer.confirm('后台路径：<font color="red">'+'https://ejucms.wingle.com.cn'+'/'+data.field.adminbasefile+'.php</font>，确认更改？', {
                    title: false,
                    btn: ['继续更改','取消'] //按钮
                }, function(index){
                    layer.close(index);
                    formSubmit(data);
                }, function(index){
                    flag = false;
                }
            );
            return flag;
        }

        formSubmit(data);
      
        function formSubmit(data)
        {
            var load = layer_loading();
            data.field._ajax = 1;
            $.ajax({
                type : 'post',
                url : "<?php echo url('System/web2'); ?>",
                data : data.field,
                dataType : 'json',
                success : function(res){
                    layer.close(load); //关闭loading
                    if(res.code == 1){
                        layer.msg(res.msg, {icon: 1, time: 1000}, function(){
                            if ('_parent' == res.target) {
                                top.window.location.href = res.url;
                            } else {
                                window.location.reload();
                            }
                        });
                    }else{
                        if (res.data.icon && res.data.icon == 4) {
                            layer.alert(res.msg, {icon: res.data.icon, title: false, closeBtn: false}, function(){
                                window.location.reload();
                            });
                        } else {
                            showErrorMsg(res.msg);
                        }
                    }
                },
                error: function(e){
                    layer.close(load); //关闭loading
                    showErrorAlert();
                }
            });
            return false;
        }
    });
    
  });
  </script>


</body>
</html>
