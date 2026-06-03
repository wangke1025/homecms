<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:43:"./application/admin/template/system/web.htm";i:1580687630;s:78:"/www/wwwroot/ejucms.wingle.com.cn/application/admin/template/public/layout.htm";i:1580687630;s:75:"/www/wwwroot/ejucms.wingle.com.cn/application/admin/template/system/bar.htm";i:1581495854;s:78:"/www/wwwroot/ejucms.wingle.com.cn/application/admin/template/public/footer.htm";i:1580687630;}*/ ?>
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
                              <label class="layui-form-label">网站状态</label>
                              <div class="layui-input-block">
                                <input type="checkbox" lay-filter="web_status" lay-skin="switch" lay-text="开启|关闭" <?php if(!isset($config['web_status']) OR $config['web_status'] == 1): ?>checked<?php endif; ?>>
                                <input type="hidden" name="web_status" value="<?php echo (isset($config['web_status']) && ($config['web_status'] !== '')?$config['web_status']:'0'); ?>" />
                              </div>
                            </div>
                            <div class="layui-form-item ey-text">
                              <label class="layui-form-label">网站简称</label>
                              <div class="layui-input-inline">
                                <input type="text" id="web_name" name="web_name" value="<?php echo (isset($config['web_name']) && ($config['web_name'] !== '')?$config['web_name']:''); ?>" class="layui-input ey-input" data-num="10">
                              </div>
                              <div class="layui-form-mid layui-word-aux ey_helptips"></div>
                              <div class="layui-form-inline2 ey_helptips_txt">一般不超过10个字符</div>
                              <div class="layui-form-inline2 ey-big-text none">一般不超过10个字符（<span class="ey-textTips">还可以输入10个字符</span>）</div>
                            </div>
                            <div class="layui-form-item">
                              <label class="layui-form-label">网站LOGO</label>
                              <div class="layui-input-inline">
                                <div class="upload-box">
                                  <div class="upload-img fl">
                                    <div class="icaction none">
                                      <span class="load_images">
                                         <a href="javascript:void(0);" onclick="BigImages($('#img_web_logo').attr('src'));">
                                         <i class="layui-icon layui-icon-search mr5"></i>查看
                                         </a>
                                      </span>
                                      <span class="load_images">
                                        <a href="javascript:void(0);" data-inputid="web_logo" onclick="DelImages(this);">
                                        <i class="layui-icon layui-icon-delete mr5"></i>删除
                                        </a>
                                      </span>
                                    </div>
                                    <div class="cover-bg none"></div>
                                    <img id="img_web_logo" src="<?php echo get_default_pic($config['web_logo']); ?>?v=<?php echo time(); ?>">
                                  </div>
                                  <div class="upload-right fl">
                                    <button class="layui-btn test-upload-demoMore layui-btn-primary layui-btn-sm fl mb10 mr5" lay-data="{number:1,ey_inputId:'web_logo',ey_savepath:'allimg'}"><i class="layui-icon">&#xe67c;</i>上传图片</button>
                                    <button class="layui-btn layui-btn-sm layui-btn-primary layui-btn-sm fl mb10" onClick="GetPictureFolder(1,'web_logo');"><i class="layui-icon">&#xe64a;</i>图库</button>
                                    <input name="web_logo" id="web_logo" placeholder="图片地址" value="<?php echo (isset($config['web_logo']) && ($config['web_logo'] !== '')?$config['web_logo']:''); ?>" class="layui-input">
                                    <input type="hidden" name="old_web_logo" value="<?php echo (isset($config['web_logo']) && ($config['web_logo'] !== '')?$config['web_logo']:''); ?>" class="layui-input">
                                  </div>
                                </div>
                              </div>
                              <div class="layui-input-inline layui-btn-container" style="width: auto;">
                                <div class="layui-form-mid layui-word-aux ey_helptips"></div>
                                <div class="ey_helptips_txt">默认网站LOGO，通用头部显示，显示尺寸以模板设计为主</div>
                              </div>
                            </div>
                            <div class="layui-form-item">
                              <label class="layui-form-label">地址栏图标</label>
                              <div class="layui-input-inline">
                                <div class="upload-box">
                                  <div class="fl mr20">
                                    <img id="img_web_ico" src="<?php echo $config['web_ico']; ?>?v=<?php echo time(); ?>" width="32" height="32">
                                  </div>
                                  <div class="upload-right fl">
                                    <button class="layui-btn test-upload-demoMore layui-btn-primary layui-btn-sm fl mb10 mr5" lay-data="{number:1,exts:'ico',ey_inputId:'web_ico',ey_savepath:'allimg'}"><i class="layui-icon">&#xe67c;</i>上传图片</button>
                                    <input type="hidden" name="web_ico" id="web_ico" placeholder="图片地址" value="<?php echo (isset($config['web_ico']) && ($config['web_ico'] !== '')?$config['web_ico']:''); ?>" class="layui-input">
                                  </div>
                                </div>
                              </div>
                              <div class="layui-input-inline layui-btn-container" style="width: auto;">
                                <div class="layui-form-mid layui-word-aux ey_helptips"></div>
                                <div class="ey_helptips_txt">建议尺寸 32 * 32 (像素) 的.ico文件。<br/>如果无法正常显示新上传图标，清空浏览器缓存后访问。</div>
                              </div>
                            </div>
                            <div class="layui-form-item">
                              <label class="layui-form-label">网站域名</label>
                              <div class="layui-input-inline">
                                <input type="text" name="web_basehost" value="<?php echo (isset($config['web_basehost']) && ($config['web_basehost'] !== '')?$config['web_basehost']:''); ?>" placeholder="<?php echo \think\Request::instance()->scheme(); ?>://" class="layui-input">
                              </div>
                            </div>
                            <div class="layui-form-item ey-text">
                              <label class="layui-form-label">首页标题</label>
                              <div class="layui-input-inline">
                                <input type="text" id="web_title" name="web_title" lay-verify="title" placeholder="一般不超过80个字符" value="<?php echo (isset($config['web_title']) && ($config['web_title'] !== '')?$config['web_title']:''); ?>" class="layui-input ey-input" data-num="80">
                              </div>
                              <div class="layui-input-inline layui-form-mid layui-word-aux ey_helptips"></div>
                              <div class="layui-form-inline2 ey_helptips_txt">一般不超过80个字符</div>
                              <div class="layui-form-inline2 ey-big-text none">一般不超过80个字符（<span class="ey-textTips">还可以输入80个字符</span>）</div>
                            </div>
                            <div class="layui-form-item ey-text">
                              <label class="layui-form-label">首页关键词</label>
                              <div class="layui-input-inline">
                                <input type="text" name="web_keywords" lay-verify="title" value="<?php echo (isset($config['web_keywords']) && ($config['web_keywords'] !== '')?$config['web_keywords']:''); ?>" placeholder="一般不超过100个字符" class="layui-input ey-input" data-num="100">
                              </div>
                              <div class="layui-input-inline layui-form-mid layui-word-aux ey_helptips"></div>
                              <div class="layui-form-inline2 ey_helptips_txt">一般不超过100个字符</div>
                              <div class="layui-form-inline2 ey-big-text none">一般不超过100个字符<span class="ey-textTips">还可以输入100个字符</span>）</div>
                            </div>
                            <div class="layui-form-item layui-form-text ey-text">
                              <label class="layui-form-label">首页描述</label>
                              <div class="layui-input-inline">
                                <textarea id="web_description" name="web_description" class="layui-textarea ey-input" placeholder="建议不超过200个字符" data-num="200"><?php echo (isset($config['web_description']) && ($config['web_description'] !== '')?$config['web_description']:''); ?></textarea>
                              </div>
                              <div class="layui-input-inline layui-form-mid layui-word-aux ey_helptips"></div>
                              <div class="layui-form-inline2 ey_helptips_txt">建议不超过200个字符</div>
                              <div class="layui-form-inline2 ey-big-text none">建议不超过200个字符<span class="ey-textTips">还可以输入200个字符</span>）</div>
                            </div>
                            <div class="layui-form-item layui-form-text">
                              <label class="layui-form-label">版权信息</label>
                              <div class="layui-input-inline">
                                <textarea name="web_copyright" class="layui-textarea"><?php echo (isset($config['web_copyright']) && ($config['web_copyright'] !== '')?$config['web_copyright']:''); ?></textarea>
                              </div>
                            </div>
                             <div class="layui-form-item">
                              <label class="layui-form-label">备案号</label>
                              <div class="layui-input-inline">
                                <input type="text" name="web_recordnum" lay-verify="title" value="<?php echo (isset($config['web_recordnum']) && ($config['web_recordnum'] !== '')?$config['web_recordnum']:''); ?>" class="layui-input">
                              </div>
                            </div>
                            <div class="layui-form-item ">
                              <label class="layui-form-label"><strong>自定义变量</strong></label>
                              <div class="layui-input-inline layadmin-layer-demo">
                                <button class="layui-btn layui-btn-sm" data-type="customvar_index">管理</button>
                              </div>
                            </div>
                            <?php if(is_array($eyou_row) || $eyou_row instanceof \think\Collection || $eyou_row instanceof \think\Paginator): $i = 0; $__LIST__ = $eyou_row;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                            <div class="layui-form-item" id="dl_<?php echo $vo['attr_var_name']; ?>">
                              <label class="layui-form-label"><?php echo $vo['attr_name']; ?></label>
                              <?php switch($vo['attr_input_type']): case "1": break; case "2": ?>
                                <div class="layui-input-inline">
                                  <textarea name="<?php echo $vo['attr_var_name']; ?>" id="<?php echo $vo['attr_var_name']; ?>" class="layui-textarea"><?php echo (isset($vo['value']) && ($vo['value'] !== '')?$vo['value']:''); ?></textarea>
                                </div>
                                <?php break; case "3": ?>
                                <div class="layui-input-inline">
                                  <div class="upload-box">
                                    <div class="upload-img fl">
                                      <div class="icaction none">
                                        <span class="load_images">
                                           <a href="javascript:void(0);" onclick="BigImages($('#img_<?php echo $vo['attr_var_name']; ?>').attr('src'));">
                                           <i class="layui-icon layui-icon-search mr5"></i>查看
                                           </a>
                                        </span>
                                        <span class="load_images">
                                          <a href="javascript:void(0);" data-inputid="<?php echo $vo['attr_var_name']; ?>" onclick="DelImages(this);">
                                          <i class="layui-icon layui-icon-delete mr5"></i>删除
                                          </a>
                                        </span>
                                      </div>
                                      <div class="cover-bg none"></div>
                                      <img id="img_<?php echo $vo['attr_var_name']; ?>" src="<?php echo get_default_pic($vo['value']); ?>">
                                    </div>
                                    <div class="upload-right fl">
                                      <button class="layui-btn test-upload-demoMore layui-btn-primary layui-btn-sm fl mb10 mr5" lay-data="{number:1,ey_inputId:'<?php echo $vo['attr_var_name']; ?>',ey_savepath:'allimg'}"><i class="layui-icon">&#xe67c;</i>上传图片</button>
                                      <button class="layui-btn layui-btn-sm layui-btn-primary layui-btn-sm fl mb10" onClick="GetPictureFolder(1,'<?php echo $vo['attr_var_name']; ?>');"><i class="layui-icon">&#xe64a;</i>图库</button>
                                      <input name="<?php echo $vo['attr_var_name']; ?>" id="<?php echo $vo['attr_var_name']; ?>" placeholder="图片地址" value="<?php echo (isset($vo['value']) && ($vo['value'] !== '')?$vo['value']:''); ?>" class="layui-input">
                                    </div>
                                  </div>
                                </div>
                                <?php break; default: ?>
                                <div class="layui-input-inline">
                                  <input type="text" id="<?php echo $vo['attr_var_name']; ?>" name="<?php echo $vo['attr_var_name']; ?>" value="<?php echo (isset($vo['value']) && ($vo['value'] !== '')?$vo['value']:''); ?>" lay-verify="title" class="layui-input">
                                </div>
                              <?php endswitch; ?>
                            </div>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                            <div class="layui-form-item">
                              <label class="layui-form-label"><strong>第三方代码</strong></label>
                              <div class="layui-input-inline"></div>
                            </div>
                            <div class="layui-form-item layui-form-text">
                              <label class="layui-form-label">电脑PC端</label>
                              <div class="layui-input-inline">
                                <textarea name="web_thirdcode_pc" id="web_thirdcode_pc" class="layui-textarea"><?php echo (isset($config['web_thirdcode_pc']) && ($config['web_thirdcode_pc'] !== '')?$config['web_thirdcode_pc']:''); ?></textarea>
                              </div>
                              <div class="layui-input-inline layui-form-mid layui-word-aux ey_helptips"></div>
                              <div class="layui-form-inline2 ey_helptips_txt">代码会放在 &lt;/body&gt; 标签以上（一般用于放置百度商桥代码、站长统计代码、谷歌翻译代码等）</div>
                            </div>
                            <div class="layui-form-item layui-form-text">
                              <label class="layui-form-label">手机移动端</label>
                              <div class="layui-input-inline">
                                <textarea name="web_thirdcode_wap" id="web_thirdcode_wap" class="layui-textarea"><?php echo (isset($config['web_thirdcode_wap']) && ($config['web_thirdcode_wap'] !== '')?$config['web_thirdcode_wap']:''); ?></textarea>
                              </div>
                              <div class="layui-input-inline layui-form-mid layui-word-aux ey_helptips"></div>
                              <div class="layui-form-inline2 ey_helptips_txt">代码会放在 &lt;/body&gt; 标签以上（一般用于放置百度商桥代码、站长统计代码、谷歌翻译代码等）</div>
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

    tipsText();

    /* 触发事件 */
    var active = {
      customvar_index: function(){
        //iframe窗
        var iframes = layer.open({
            type: 2,
            title: '自定义变量列表',
            fixed: true, //不固定
            shadeClose: false,
            shade: 0.3,
            content: "<?php echo url('System/customvar_index'); ?>",
            end: function(){
              layer_loading();
              window.location.reload();
            }
        });
        layer.full(iframes);
      }
    };

    $('#LAY-component-layer-list .layui-btn').on('click', function(){
      var type = $(this).data('type');
      active[type] && active[type].call(this);
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
    });

    //监听提交
    form.on('submit(formSubmit)', function(data){
        var load = layer_loading();
        data.field._ajax = 1;
        $.ajax({
            type : 'post',
            url : "<?php echo url('System/web'); ?>",
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
