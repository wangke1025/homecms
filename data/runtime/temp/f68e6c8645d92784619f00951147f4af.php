<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:45:"./application/admin/template/system/water.htm";i:1580687630;s:78:"/www/wwwroot/ejucms.wingle.com.cn/application/admin/template/public/layout.htm";i:1580687630;s:78:"/www/wwwroot/ejucms.wingle.com.cn/application/admin/template/public/footer.htm";i:1580687630;}*/ ?>
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
  <style>
      .span_1 {
          float: left;
          margin-left: 0px;
          height: 130px;
          line-height: 130px;
      }

      .span_1 ul {
          list-style: none;
          padding: 0px;
      }

      .span_1 ul li {
          border: 1px solid #CCC;
          height: 40px;
          padding: 0px 10px;
          margin-left: -1px;
          margin-top: -1px;
          line-height: 40px;
      }
      #mark_txt_color {
          /*margin:0;*/
          /*padding:0;*/
          border:solid 1px #ccc;
          width:70px;
          border-right:40px solid green;
          /*line-height:20px;*/
          display: block;
          padding-left: 10px;
          height: 38px;
          line-height: 1.3;
          border-style: solid;
          background-color: #fff;
          border-radius: 2px;
      }
  </style>
  <script type="text/javascript" src="/public/plugins/colpick/js/colpick.js"></script>
  <link href="/public/plugins/colpick/css/colpick.css" rel="stylesheet" type="text/css"/>
  <div class="layui-fluid" id="LAY-component-layer-list">
    <div class="layui-row">
      <div class="layui-col-md12">
        <div class="layui-card">
          <div class="web-system">
            <div class="layui-tab layui-tab-card">
              <ul class="layui-tab-title">
                  <?php if(is_check_access('System@water') == '1'): ?>
                  <li class="layui-this"><a href="<?php echo url('System/water'); ?>">水印配置</a></li>
                  <?php endif; if(is_check_access('System@thumb') == '1'): ?>
                  <li><a href="<?php echo url('System/thumb'); ?>">缩略图配置</a></li>
                  <?php endif; ?>
              </ul>
              <div class="layui-tab-content" style="padding:10px 0">
                <div class="layui-tab-item layui-show">
                  <div class="layui-row layui-col-space15">
                    <div class="layui-col-md12">
                      <div class="layui-card">
                        <div class="layui-card-body" pad15>
                          <div class="layui-form" wid100 lay-filter="">
                            <div class="layui-form-item">
                              <label class="layui-form-label">水印功能</label>
                              <div class="layui-input-inline w70">
                                  <input type="checkbox" lay-filter="is_mark" lay-skin="switch" lay-text="开启|关闭" <?php if(isset($config['is_mark']) && $config['is_mark'] == 1): ?>checked<?php endif; ?>>
                                  <input type="hidden" name="is_mark" value="<?php echo (isset($config['is_mark']) && ($config['is_mark'] !== '')?$config['is_mark']:'0'); ?>" />
                              </div>
                              <div class="layui-input-inline layui-btn-container" style="width: auto;">
                                  <div class="layui-form-mid layui-word-aux ey_helptips"></div>
                                  <div class="layui-form-inline2 ey_helptips_txt">全站图片添加水印</div>
                              </div>
                            </div>
                            <div class="layui-form-item">
                              <label class="layui-form-label">缩略图水印</label>
                              <div class="layui-input-inline w70">
                                <input type="checkbox" lay-filter="is_thumb_mark" lay-skin="switch" lay-text="开启|关闭" <?php if(isset($config['is_thumb_mark']) && $config['is_thumb_mark'] == 1): ?>checked<?php endif; ?>>
                                <input type="hidden" name="is_thumb_mark" value="<?php echo (isset($config['is_thumb_mark']) && ($config['is_thumb_mark'] !== '')?$config['is_thumb_mark']:'0'); ?>" />
                              </div>
                              <div class="layui-input-inline layui-btn-container" style="width: auto;">
                                  <div class="layui-form-mid layui-word-aux ey_helptips"></div>
                                  <div class="layui-form-inline2 ey_helptips_txt">开启之后，满足水印条件的缩略图会自动打上水印</div>
                              </div>
                            </div>
                            <div class="layui-form-item">
                              <label class="layui-form-label">水印类型</label>
                              <div class="layui-input-inline">
                                 <input type="radio" name="mark_type" lay-filter="mark_type" value="text" title="文字" <?php if(isset($config['mark_type']) && $config['mark_type'] == 'text'): ?>checked<?php endif; ?>>
                                 <input type="radio" name="mark_type" lay-filter="mark_type" value="img" title="图片" <?php if(isset($config['mark_type']) && $config['mark_type'] == 'img'): ?>checked<?php endif; ?>>
                              </div>
                            </div>
                            <div class="layui-form-item">
                              <label class="layui-form-label">水印条件</label>
                              <div class="layui-input-inline w240">
                                  <input onKeyUp="this.value=this.value.replace(/[^\d]/g,'')" onpaste="this.value=this.value.replace(/[^\d]/g,'')" pattern="^\d{1,}$" style="width: 100px;float: left" type="text" name="mark_width" lay-verify="number" value="<?php echo (isset($config['mark_width']) && ($config['mark_width'] !== '')?$config['mark_width']:''); ?>" class="layui-input"> <span style="float: left;line-height: 38px;margin-left: 4px;">宽度 单位像素(px)</span>
                              </div>
                              <div class="layui-input-inline w240">
                                  <input onKeyUp="this.value=this.value.replace(/[^\d]/g,'')" onpaste="this.value=this.value.replace(/[^\d]/g,'')" pattern="^\d{1,}$" style="width: 100px;float: left" type="text" name="mark_height" lay-verify="number" value="<?php echo (isset($config['mark_height']) && ($config['mark_height'] !== '')?$config['mark_height']:''); ?>" class="layui-input"> <span style="float: left;line-height: 38px;margin-left: 4px;">高度 单位像素(px)</span>
                              </div>
                              <div class="layui-form-mid layui-word-aux ey_helptips"></div>
                              <div class="layui-form-inline2 ey_helptips_txt">提示：图片宽度和高度至少要达到以上像素才能添加水印</div>
                            </div>
                            <div class="layui-form-item texttr none">
                              <label class="layui-form-label">水印文字</label>
                              <div class="layui-input-inline">
                                <input type="text" name="mark_txt" value="<?php echo (isset($config['mark_txt']) && ($config['mark_txt'] !== '')?$config['mark_txt']:''); ?>" class="layui-input">
                              </div>
                            </div>
                            <div class="layui-form-item imgtr">
                              <label class="layui-form-label">水印图片</label>
                              <div class="layui-input-inline">
                                  <div class="upload-box">
                                    <div class="upload-img fl">
                                      <div class="icaction none">
                                        <span class="load_images">
                                           <a href="javascript:void(0);" onclick="BigImages($('#img_mark_img').attr('src'));">
                                           <i class="layui-icon layui-icon-search mr5"></i>查看
                                           </a>
                                        </span>
                                        <span class="load_images">
                                          <a href="javascript:void(0);" data-inputid="mark_img" onclick="DelImages(this);">
                                          <i class="layui-icon layui-icon-delete mr5"></i>删除
                                          </a>
                                        </span>
                                      </div>
                                      <div class="cover-bg none"></div>
                                      <img id="img_mark_img" src="<?php echo get_default_pic($config['mark_img']); ?>">
                                    </div>
                                    <div class="upload-right fl">
                                      <button class="layui-btn test-upload-demoMore layui-btn-primary layui-btn-sm fl mb10 mr5" lay-data="{number:1,ey_inputId:'mark_img',ey_savepath:'allimg'}"><i class="layui-icon">&#xe67c;</i>上传图片</button>
                                      <button class="layui-btn layui-btn-sm layui-btn-primary layui-btn-sm fl mb10" onClick="GetPictureFolder(1,'mark_img');"><i class="layui-icon">&#xe64a;</i>图库</button>
                                      <input name="mark_img" id="mark_img" placeholder="图片地址" value="<?php echo (isset($config['mark_img']) && ($config['mark_img'] !== '')?$config['mark_img']:''); ?>" class="layui-input">
                                    </div>
                                  </div>
                              </div>
                              <div class="layui-input-inline layui-btn-container" style="width: auto;">
                                <div class="layui-form-mid layui-word-aux ey_helptips"></div>
                                <div class="ey_helptips_txt">最佳显示尺寸为240*60像素</div>
                              </div>
                            </div>
                            <div class="layui-form-item texttr none">
                              <label class="layui-form-label">字体大小</label>
                              <div class="layui-input-inline">
                                <input type="text" name="mark_txt_size" value="<?php echo (isset($config['mark_txt_size']) && ($config['mark_txt_size'] !== '')?$config['mark_txt_size']:30); ?>" class="layui-input">
                              </div>
                            </div>
                            <div class="layui-form-item texttr none">
                              <label class="layui-form-label">文字颜色</label>
                              <div class="layui-input-inline">
                                <input type="text" name="mark_txt_color" value="<?php echo (isset($config['mark_txt_color']) && ($config['mark_txt_color'] !== '')?$config['mark_txt_color']:'#000000'); ?>" id="mark_txt_color" style="border-color: <?php echo (isset($config['mark_txt_color']) && ($config['mark_txt_color'] !== '')?$config['mark_txt_color']:'#000000'); ?>;">
                              </div>
                            </div>
                            <div class="layui-form-item">
                              <label class="layui-form-label">水印透明度</label>
                              <div class="layui-input-inline">
                                <div id="mark_degree2" class="test-slider-demo" style="padding-top: 18px;"></div>
                                <input type="hidden" name="mark_degree" value="<?php echo (isset($config['mark_degree']) && ($config['mark_degree'] !== '')?$config['mark_degree']:'0'); ?>" class="input-txt">
                              </div>
                              <div class="layui-input-inline layui-btn-container " style="width: auto;">
                                <div class="layui-form-mid layui-word-aux ey_helptips"></div>
                                <div class="layui-form-inline2 ey_helptips_txt">0代表完全透明，100代表不透明</div>
                              </div>
                            </div>
                            <div class="layui-form-item imgtr">
                              <label class="layui-form-label">JPEG 水印质量</label>
                              <div class="layui-input-inline">
                                <div id="mark_quality2" class="test-slider-demo" style="padding-top: 18px;"></div>
                                <input type="hidden" name="mark_quality" value="<?php echo (isset($config['mark_quality']) && ($config['mark_quality'] !== '')?$config['mark_quality']:'0'); ?>" class="input-txt">
                              </div>
                              <div class="layui-input-inline layui-btn-container " style="width: auto;">
                                <div class="layui-form-mid layui-word-aux ey_helptips"></div>
                                <div class="layui-form-inline2 ey_helptips_txt">水印质量请设置为0-100之间的数字，决定 jpg 格式图片的质量</div>
                              </div>
                            </div>
                            <div class="layui-form-item">
                              <label class="layui-form-label">水印位置</label>
                              <div class="layui-input-inline">
                                <input type="radio" name="mark_sel" value="1" title="顶部居左" <?php if(isset($config['mark_sel']) && $config['mark_sel'] == '1'): ?>checked<?php endif; ?>>
                                <input type="radio" name="mark_sel" value="2" title="顶部居中" <?php if(isset($config['mark_sel']) && $config['mark_sel'] == '2'): ?>checked<?php endif; ?>>
                                <input type="radio" name="mark_sel" value="3" title="顶部居右" <?php if(isset($config['mark_sel']) && $config['mark_sel'] == '3'): ?>checked<?php endif; ?>>
                                <input type="radio" name="mark_sel" value="4" title="中部居左" <?php if(isset($config['mark_sel']) && $config['mark_sel'] == '4'): ?>checked<?php endif; ?>>
                                <input type="radio" name="mark_sel" value="5" title="中部居中" <?php if(isset($config['mark_sel']) && $config['mark_sel'] == '5'): ?>checked<?php endif; ?>>
                                <input type="radio" name="mark_sel" value="6" title="中部居右" <?php if(isset($config['mark_sel']) && $config['mark_sel'] == '6'): ?>checked<?php endif; ?>>
                                <input type="radio" name="mark_sel" value="7" title="底部居左" <?php if(isset($config['mark_sel']) && $config['mark_sel'] == '7'): ?>checked<?php endif; ?>>
                                <input type="radio" name="mark_sel" value="8" title="底部居中" <?php if(isset($config['mark_sel']) && $config['mark_sel'] == '8'): ?>checked<?php endif; ?>>
                                <input type="radio" name="mark_sel" value="9" title="底部居右" <?php if(isset($config['mark_sel']) && $config['mark_sel'] == '9'): ?>checked<?php endif; ?>>
                              </div>
                            </div>
                            <div class="layui-form-item">
                              <div class="layui-input-block">
                                <input type="hidden" name="tabase" value="<?php echo \think\Request::instance()->param('tabase'); ?>">
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

  <script>

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
  }).use(['index', 'set', 'slider'], function(){
    var $ = layui.$
    // ,admin = layui.admin
    ,element = layui.element
    ,layer = layui.layer
    ,form = layui.form
    ,slider = layui.slider;
      
    element.render();

    var marktype = $('input[name=mark_type]:checked').val();
    setwarter(marktype);
    function setwarter(marktype){
        if(marktype == 'text'){
            $('.texttr').show();
            $('.imgtr').hide();
        }else{
            $('.texttr').hide();
            $('.imgtr').show();
        }
    }

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

    // 监听单选项
    form.on('radio(mark_type)', function(data){
      setwarter(data.value);
    });

    // 颜色选择
    $('#mark_txt_color').colpick({
        flat:false,
        layout:'rgbhex',
        submit:0,
        colorScheme:'light',
        color:$('#mark_txt_color').val(),
        onChange:function(hsb,hex,rgb,el,bySetColor) {
            $(el).css('border-color','#'+hex);
            // Fill the text box just if the color was set using the picker, and not the colpickSetColor function.
            if(!bySetColor) $(el).val('#'+hex);
        }
    }).keyup(function(){
        $(this).colpickSetColor('#'+this.value);
    });

    // 水印透明度
    slider.render({
        elem: '#mark_degree2'
        ,value: $('input[name=mark_degree]').val()
        ,theme: '#5FB878' //主题色
        ,change: function(value){
          $('input[name=mark_degree]').val(value)
        }
    });
    // JPEG 水印质量
    slider.render({
        elem: '#mark_quality2'
        ,value: $('input[name=mark_quality]').val()
        ,theme: '#5FB878' //主题色
        ,change: function(value){
          $('input[name=mark_quality]').val(value)
        }
    });

    //监听提交
    form.on('submit(formSubmit)', function(data){
        var load = layer_loading();
        data.field._ajax = 1;
        $.ajax({
            type : 'post',
            url : "<?php echo url('System/water'); ?>",
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