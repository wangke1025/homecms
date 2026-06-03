<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:44:"./application/admin/template/region/edit.htm";i:1580687630;s:78:"/www/wwwroot/ejucms.wingle.com.cn/application/admin/template/public/layout.htm";i:1580687630;s:78:"/www/wwwroot/ejucms.wingle.com.cn/application/admin/template/public/footer.htm";i:1580687630;}*/ ?>
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
    <div class="layui-row layui-col-space15">
        <div class="layui-col-md12">
            <div class="layui-card">
                <div class="layui-card-body web-system" pad15>
                    <div class="layui-form" wid100 lay-filter="">
                        <div class="layui-form-item">
                            <label class="layui-form-label">上级区域</label>
                            <div class="layui-input-inline w120">
                                <select name="province_id" id="province_id"  lay-filter="province_id"  <?php if(!(empty($has_children) || (($has_children instanceof \think\Collection || $has_children instanceof \think\Paginator ) && $has_children->isEmpty()))): ?> disabled="disabled" <?php endif; ?>>
                                    <option value="0">请选择省份</option>
                                    <?php if(is_array($province_all) || $province_all instanceof \think\Collection || $province_all instanceof \think\Paginator): $i = 0; $__LIST__ = $province_all;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                    <option value="<?php echo $vo['id']; ?>" <?php if($province_id == $vo['id']): ?> selected <?php endif; ?>><?php echo $vo['name']; ?></option>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </select>
                            </div>
                            <div class="layui-input-inline w120">
                                <select name="city_id" id="city_id"  disabled="disabled">
                                    <option value="0">请选择城市</option>
                                </select>
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label"><b>*</b>区域</label>
                            <div class="layui-input-inline">
                                <input type="text" name="name" id="name" value="<?php echo $field['name']; ?>" lay-verify="required" class="layui-input">
                            </div>
                        </div>
                        <div class="layui-form-item" <?php if(empty($web_region_domain) || (($web_region_domain instanceof \think\Collection || $web_region_domain instanceof \think\Paginator ) && $web_region_domain->isEmpty())): ?>style="display:none;"<?php endif; ?>>
                        <label class="layui-form-label">二级域名</label>
                        <div class="layui-input-inline">
                            <input type="text" name="domain" id="domain" value="<?php echo $field['domain']; ?>" class="layui-input" onkeyup="this.value=this.value.replace(/[^0-9a-z]/g,'');" onpaste="this.value=this.value.replace(/[^0-9a-z]/g,'');">
                        </div>
                        <div class="layui-input-inline layui-input-company">
                            .<?php echo $rootDomain; ?>
                        </div>
                    </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label"><b>*</b>地图坐标</label>
                            <div class="layui-input-inline">
                                <input type="text" name="map" id="map" value="<?php echo $map; ?>" lay-verify="required" placeholder="115.345,22.1349" class="layui-input">
                            </div>
                            <div class="layui-input-inline layadmin-layer-demo">
                                <a class="layui-btn layui-btn-sm" data-type="map_mark">标注地图</a>
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">缩略图</label>
                            <div class="layui-input-inline">
                                <div class="upload-box">
                                  <div class="upload-img fl">
                                    <div class="icaction none">
                                      <span class="load_images">
                                         <a href="javascript:void(0);" onclick="BigImages($('#img_litpic').attr('src'));">
                                         <i class="layui-icon layui-icon-search mr5"></i>查看
                                         </a>
                                      </span>
                                      <span class="load_images">
                                        <a href="javascript:void(0);" data-inputid="litpic" onclick="DelImages(this);">
                                        <i class="layui-icon layui-icon-delete mr5"></i>删除
                                        </a>
                                      </span>
                                    </div>
                                    <div class="cover-bg none"></div>
                                    <img id="img_litpic" src="<?php echo get_default_pic($field['litpic']); ?>">
                                  </div>
                                  <div class="upload-right fl">
                                    <button class="layui-btn test-upload-demoMore layui-btn-primary layui-btn-sm fl mb10 mr5" lay-data="{number:1,ey_inputId:'litpic',ey_savepath:'allimg'}"><i class="layui-icon">&#xe67c;</i>上传图片</button>
                                    <button class="layui-btn layui-btn-sm layui-btn-primary layui-btn-sm fl mb10" onClick="GetPictureFolder(1,'litpic');"><i class="layui-icon">&#xe64a;</i>图库</button>
                                    <input name="litpic" id="litpic" placeholder="图片地址" value="<?php echo (isset($field['litpic']) && ($field['litpic'] !== '')?$field['litpic']:''); ?>" class="layui-input">
                                  </div>
                                </div>
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">热门</label>
                            <div class="layui-input-inline w70">
                                <input type="checkbox" lay-filter="is_hot" lay-skin="switch" lay-text="是|否" <?php if($field['is_hot'] == 1): ?>checked<?php endif; ?>>
                                <input type="hidden" name="is_hot" value="<?php echo (isset($field['is_hot']) && ($field['is_hot'] !== '')?$field['is_hot']:'0'); ?>" />
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">启用</label>
                            <div class="layui-input-inline w70">
                                <input type="checkbox" lay-filter="status" lay-skin="switch" lay-text="是|否" <?php if($field['status'] == 1): ?>checked<?php endif; ?>>
                                <input type="hidden" name="status" value="<?php echo (isset($field['status']) && ($field['status'] !== '')?$field['status']:'1'); ?>" />
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <div class="layui-input-block">
                                <input type="hidden" name="id" value="<?php echo $field['id']; ?>" >
                                <input type="hidden" name="parent_id" value="<?php echo $field['parent_id']; ?>" >
                                <button class="layui-btn"  lay-submit lay-filter="formSubmit">确认提交</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(function () {
        // 鼠标事件，加载查看大图和删除图片
        $(".upload-img").live('mouseover', function(){
            $(this).find('div.icaction').show();
            $(this).find('div.cover-bg').show();
        }).live('mouseout', function(){
            $(this).find('div.icaction').hide();
            $(this).find('div.cover-bg').hide();
        });
        
        var city_id = "<?php echo $city_id; ?>";
        set_city_list(city_id);
    });
    //光标离开区域编辑，自动获取坐标
    $("#name").on('blur',function(){
        var province_id = $("#province_id").val(),city_id = $("#city_id").val();
        var address = $(this).val();
        var url     = "<?php echo url('Map/getLocationByAddress'); ?>";
        var param = {
            province : province_id,
            city : city_id,
            address : address
        };
        $.get(url,param,function(res){
            if(res.code == 1)
            {
                $("#map").val(res.data.map);
            }
        });
    });
    layui.config({
        base: '/public/static/admin/' //静态资源所在路径
        ,version: '<?php echo $version; ?>'
    }).extend({
        index: 'lib/index' //主入口模块
    }).use(['index', 'set'],function () {
        var $ = layui.$
            ,element = layui.element
            ,layer = layui.layer
            ,form = layui.form;

        element.render();

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

        /* 触发事件 */
        var active = {
            map_mark:function () {     //标注管理
                set_map();
            }
        };
        $('#LAY-component-layer-list .layadmin-layer-demo .layui-btn').on('click', function(){
            var type = $(this).data('type');
            active[type] && active[type].call(this);
        });
        //选中省份模型
        form.on('select(province_id)', function(data){
            var result = set_city_list(0);
            form.render();
        });
        //监听提交
        form.on('submit(formSubmit)', function(data){
            var load = layer_loading();
            data.field._ajax = 1;
            $.ajax({
                type : 'post',
                url : "<?php echo url('Region/edit'); ?>",
                data : data.field,
                dataType : 'json',
                success : function(res){
                    layer.close(load); //关闭loading
                    if(res.code == 1){
                        layer.msg(res.msg, {icon: 1, time: 1000}, function(){
                            parent.gourl(res.url);
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
    //标注地图位置
    function set_map()
    {
        var province = $("#province_id").val();
        var city = $("#city_id").val();
        var keyword = $("#name").val();
        if (0 == province && 0 == city && '' == keyword) {
            keyword = '北京市';
        }
        var map = $("#map").val();
        var url = eyou_basefile+"?m=admin&c=Map&a=updateLocation&province="+province+"&city="+city+"&keyword="+keyword+"&map="+map;
        //iframe窗
        var iframes = layer.open({
            type: 2,
            title: '标注地图',
            fixed: true, //不固定
            shadeClose: false,
            shade: 0.3,
            area: ['95%', '95%'],
            content: url
        });
    }
    //自动获取城市列表
    function set_city_list(cityid) {
        var pid =  $("#province_id").val();
        $.ajax({
            url: "<?php echo url('Region/ajax_get_region'); ?>",
            type: 'POST',
            dataType: 'JSON',
            async: false,
            data: {pid:pid,_ajax:1},
            success: function(res){
                if (res.code === 1){
                    $("#city_id").empty();
                    $("#city_id").prepend(res.msg);
                    if (cityid > 0){
                        $("#city_id").val(cityid);
                    }
                } else {
                    showErrorAlert(res.msg);
                }
            },
            error: function(e){
                showErrorAlert();
                return false;
            }
        });
    }
</script>

</body>
</html>
