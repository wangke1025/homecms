<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:44:"./application/admin/template/seo/sitemap.htm";i:1580687630;s:78:"/www/wwwroot/ejucms.wingle.com.cn/application/admin/template/public/layout.htm";i:1580687630;s:78:"/www/wwwroot/ejucms.wingle.com.cn/application/admin/template/public/footer.htm";i:1580687630;}*/ ?>
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
              <div class="layui-card-body" pad15>
                <div class="layui-form" wid100 lay-filter="">
                  <div class="layui-form-item">
                    <label class="layui-form-label">自动生成</label>
                    <div class="layui-input-inline w70">
                        <input type="checkbox" lay-filter="sitemap_auto" lay-skin="switch" lay-text="是|否" <?php if(isset($config['sitemap_auto']) && $config['sitemap_auto'] == 1): ?>checked<?php endif; ?>>
                        <input type="hidden" name="sitemap_auto" value="<?php echo (isset($config['sitemap_auto']) && ($config['sitemap_auto'] !== '')?$config['sitemap_auto']:'1'); ?>" />
                    </div>
                    <div class="layui-input-inline layui-btn-container " style="width: auto;">
                      <div class="layui-form-mid layui-word-aux ey_helptips"></div>
                      <div class="layui-form-inline2 ey_helptips_txt">更新内容时候自动更新网站地图</div>
                    </div>
                  </div>
                  <div class="layui-form-item">
                    <label class="layui-form-label">过滤栏目及内容</label>
                    <div class="layui-input-inline">
                        <input type="checkbox" lay-skin="primary" name="sitemap_not1" value="1" <?php if(isset($config['sitemap_not1']) && $config['sitemap_not1'] == 1): ?>checked="checked"<?php endif; ?> title="过滤隐藏栏目">
                        <input type="checkbox" lay-skin="primary" name="sitemap_not2" value="1" <?php if(isset($config['sitemap_not2']) && $config['sitemap_not2'] == 1): ?>checked="checked"<?php endif; ?> title="过滤外部模块">
                    </div>
                  </div>
                  <div class="layui-form-item">
                    <label class="layui-form-label">Sitemap类型</label>
                    <div class="layui-input-inline">
                        <input type="checkbox" lay-skin="primary" name="sitemap_xml" value="1" <?php if(isset($config['sitemap_xml']) && $config['sitemap_xml'] == 1): ?>checked="checked"<?php endif; ?> title="Xml网站地图">
                        <div class="layui-form-inline2">适合谷歌和百度，地图网址 <a href="https://ejucms.wingle.com.cn/sitemap.xml" target="_blank">https://ejucms.wingle.com.cn/sitemap.xml</a></div>
                    </div>
                  </div>
                  <div class="layui-form-item">
                    <label class="layui-form-label">更新频率</label>
                    <div class="layui-input-inline w480">
                     <div class="fl w140 mr10">
                     	 <div class="fl mr5" style="padding:6px 7px;">首页</div>
                      <div class="fl w90">
                      	<select name="sitemap_changefreq_index">
                            <option value="always" <?php if(empty($config['sitemap_changefreq_index']) || $config['sitemap_changefreq_index'] == 'always'): ?>selected="true"<?php endif; ?>>经常</option>
                            <option value="hourly" <?php if(!empty($config['sitemap_changefreq_index']) && $config['sitemap_changefreq_index'] == 'hourly'): ?>selected="true"<?php endif; ?>>每小时</option>
                            <option value="daily" <?php if(!empty($config['sitemap_changefreq_index']) && $config['sitemap_changefreq_index'] == 'daily'): ?>selected="true"<?php endif; ?>>每天</option>
                            <option value="weekly" <?php if(!empty($config['sitemap_changefreq_index']) && $config['sitemap_changefreq_index'] == 'weekly'): ?>selected="true"<?php endif; ?>>每周</option>
                            <option value="monthly" <?php if(!empty($config['sitemap_changefreq_index']) && $config['sitemap_changefreq_index'] == 'monthly'): ?>selected="true"<?php endif; ?>>每月</option>
                            <option value="yearly" <?php if(!empty($config['sitemap_changefreq_index']) && $config['sitemap_changefreq_index'] == 'yearly'): ?>selected="true"<?php endif; ?>>每年</option>
                            <option value="never" <?php if(!empty($config['sitemap_changefreq_index']) && $config['sitemap_changefreq_index'] == 'never'): ?>selected="true"<?php endif; ?>>从不</option>
                        </select>
                      </div>
                     </div>
                     <div class="fl w140 mr10">
                     	<div class="fl mr5" style="padding:6px 0px;">列表页</div>
                        <div class="fl w90">
                        <select name="sitemap_changefreq_list">
                            <option value="always" <?php if(!empty($config['sitemap_changefreq_list']) && $config['sitemap_changefreq_list'] == 'always'): ?>selected="true"<?php endif; ?>>经常</option>
                            <option value="hourly" <?php if(empty($config['sitemap_changefreq_list']) || $config['sitemap_changefreq_list'] == 'hourly'): ?>selected="true"<?php endif; ?>>每小时</option>
                            <option value="daily" <?php if(!empty($config['sitemap_changefreq_list']) && $config['sitemap_changefreq_list'] == 'daily'): ?>selected="true"<?php endif; ?>>每天</option>
                            <option value="weekly" <?php if(!empty($config['sitemap_changefreq_list']) && $config['sitemap_changefreq_list'] == 'weekly'): ?>selected="true"<?php endif; ?>>每周</option>
                            <option value="monthly" <?php if(!empty($config['sitemap_changefreq_list']) && $config['sitemap_changefreq_list'] == 'monthly'): ?>selected="true"<?php endif; ?>>每月</option>
                            <option value="yearly" <?php if(!empty($config['sitemap_changefreq_list']) && $config['sitemap_changefreq_list'] == 'yearly'): ?>selected="true"<?php endif; ?>>每年</option>
                            <option value="never" <?php if(!empty($config['sitemap_changefreq_list']) && $config['sitemap_changefreq_list'] == 'never'): ?>selected="true"<?php endif; ?>>从不</option>
                        </select>
                       </div>
                     </div>
                     <div class="fl w140 mr10">
                     	<div class="fl mr5" style="padding:6px 0px;">内容页</div>
                       <div class="fl w90">
                        <select name="sitemap_changefreq_view">
                            <option value="always" <?php if(!empty($config['sitemap_changefreq_view']) && $config['sitemap_changefreq_view'] == 'always'): ?>selected="true"<?php endif; ?>>经常</option>
                            <option value="hourly" <?php if(!empty($config['sitemap_changefreq_view']) && $config['sitemap_changefreq_view'] == 'hourly'): ?>selected="true"<?php endif; ?>>每小时</option>
                            <option value="daily" <?php if(empty($config['sitemap_changefreq_view']) || $config['sitemap_changefreq_view'] == 'daily'): ?>selected="true"<?php endif; ?>>每天</option>
                            <option value="weekly" <?php if(!empty($config['sitemap_changefreq_view']) && $config['sitemap_changefreq_view'] == 'weekly'): ?>selected="true"<?php endif; ?>>每周</option>
                            <option value="monthly" <?php if(!empty($config['sitemap_changefreq_view']) && $config['sitemap_changefreq_view'] == 'monthly'): ?>selected="true"<?php endif; ?>>每月</option>
                            <option value="yearly" <?php if(!empty($config['sitemap_changefreq_view']) && $config['sitemap_changefreq_view'] == 'yearly'): ?>selected="true"<?php endif; ?>>每年</option>
                            <option value="never" <?php if(!empty($config['sitemap_changefreq_view']) && $config['sitemap_changefreq_view'] == 'never'): ?>selected="true"<?php endif; ?>>从不</option>
                        </select>
                       </div>
                     </div>
                    </div>
                 
                    <div class="layui-input-inline layui-btn-container " style="width: auto;">
                      <div class="layui-form-mid layui-word-aux ey_helptips"></div>
                      <div class="layui-form-inline2 ey_helptips_txt">XML地图文件使用，你输入的网站的网页内容更新的频率。</div>
                    </div>
                  </div>
                  <div class="layui-form-item">
                    <label class="layui-form-label">优先级别</label>
                    <div class="layui-input-inline w480">
                        <div class="fl w140 mr10">
                     	 <div class="fl mr5" style="padding:6px 7px;">首页</div>
                         <div class="fl w90">
							  <select name="sitemap_priority_index">
								<option value="0.1" <?php if(!empty($config['sitemap_priority_index']) && $config['sitemap_priority_index'] == '0.1'): ?>selected="true"<?php endif; ?>>0.1</option>
								<option value="0.2" <?php if(!empty($config['sitemap_priority_index']) && $config['sitemap_priority_index'] == '0.2'): ?>selected="true"<?php endif; ?>>0.2</option>
								<option value="0.3" <?php if(!empty($config['sitemap_priority_index']) && $config['sitemap_priority_index'] == '0.3'): ?>selected="true"<?php endif; ?>>0.3</option>
								<option value="0.4" <?php if(!empty($config['sitemap_priority_index']) && $config['sitemap_priority_index'] == '0.4'): ?>selected="true"<?php endif; ?>>0.4</option>
								<option value="0.5" <?php if(!empty($config['sitemap_priority_index']) && $config['sitemap_priority_index'] == '0.5'): ?>selected="true"<?php endif; ?>>0.5</option>
								<option value="0.6" <?php if(!empty($config['sitemap_priority_index']) && $config['sitemap_priority_index'] == '0.6'): ?>selected="true"<?php endif; ?>>0.6</option>
								<option value="0.7" <?php if(!empty($config['sitemap_priority_index']) && $config['sitemap_priority_index'] == '0.7'): ?>selected="true"<?php endif; ?>>0.7</option>
								<option value="0.8" <?php if(!empty($config['sitemap_priority_index']) && $config['sitemap_priority_index'] == '0.8'): ?>selected="true"<?php endif; ?>>0.8</option>
								<option value="0.9" <?php if(!empty($config['sitemap_priority_index']) && $config['sitemap_priority_index'] == '0.9'): ?>selected="true"<?php endif; ?>>0.9</option>
								<option value="1.0" <?php if(empty($config['sitemap_priority_index']) || $config['sitemap_priority_index'] == '1.0'): ?>selected="true"<?php endif; ?>>1.0</option>
							 </select>
                         </div>
                       </div>
                        <div class="fl w140 mr10">
                     	 <div class="fl mr5" style="padding:6px 0px;">列表页</div>
                         <div class="fl w90">
							 <select name="sitemap_priority_list">
								<option value="0.1" <?php if(!empty($config['sitemap_priority_list']) && $config['sitemap_priority_list'] == '0.1'): ?>selected="true"<?php endif; ?>>0.1</option>
								<option value="0.2" <?php if(!empty($config['sitemap_priority_list']) && $config['sitemap_priority_list'] == '0.2'): ?>selected="true"<?php endif; ?>>0.2</option>
								<option value="0.3" <?php if(!empty($config['sitemap_priority_list']) && $config['sitemap_priority_list'] == '0.3'): ?>selected="true"<?php endif; ?>>0.3</option>
								<option value="0.4" <?php if(!empty($config['sitemap_priority_list']) && $config['sitemap_priority_list'] == '0.4'): ?>selected="true"<?php endif; ?>>0.4</option>
								<option value="0.5" <?php if(!empty($config['sitemap_priority_list']) && $config['sitemap_priority_list'] == '0.5'): ?>selected="true"<?php endif; ?>>0.5</option>
								<option value="0.6" <?php if(!empty($config['sitemap_priority_list']) && $config['sitemap_priority_list'] == '0.6'): ?>selected="true"<?php endif; ?>>0.6</option>
								<option value="0.7" <?php if(!empty($config['sitemap_priority_list']) && $config['sitemap_priority_list'] == '0.7'): ?>selected="true"<?php endif; ?>>0.7</option>
								<option value="0.8" <?php if(empty($config['sitemap_priority_list']) || $config['sitemap_priority_list'] == '0.8'): ?>selected="true"<?php endif; ?>>0.8</option>
								<option value="0.9" <?php if(!empty($config['sitemap_priority_list']) && $config['sitemap_priority_list'] == '0.9'): ?>selected="true"<?php endif; ?>>0.9</option>
								<option value="1.0" <?php if(!empty($config['sitemap_priority_list']) && $config['sitemap_priority_list'] == '1.0'): ?>selected="true"<?php endif; ?>>1.0</option>
							</select>
                         </div>
                       </div>
                        <div class="fl w140 mr10">
                     	 <div class="fl mr5" style="padding:6px 0px;">内容页</div>
                           <div class="fl w90">
                             <select name="sitemap_priority_view">
								<option value="0.1" <?php if(!empty($config['sitemap_priority_view']) && $config['sitemap_priority_view'] == '0.1'): ?>selected="true"<?php endif; ?>>0.1</option>
								<option value="0.2" <?php if(!empty($config['sitemap_priority_view']) && $config['sitemap_priority_view'] == '0.2'): ?>selected="true"<?php endif; ?>>0.2</option>
								<option value="0.3" <?php if(!empty($config['sitemap_priority_view']) && $config['sitemap_priority_view'] == '0.3'): ?>selected="true"<?php endif; ?>>0.3</option>
								<option value="0.4" <?php if(!empty($config['sitemap_priority_view']) && $config['sitemap_priority_view'] == '0.4'): ?>selected="true"<?php endif; ?>>0.4</option>
								<option value="0.5" <?php if(empty($config['sitemap_priority_view']) || $config['sitemap_priority_view'] == '0.5'): ?>selected="true"<?php endif; ?>>0.5</option>
								<option value="0.6" <?php if(!empty($config['sitemap_priority_view']) && $config['sitemap_priority_view'] == '0.6'): ?>selected="true"<?php endif; ?>>0.6</option>
								<option value="0.7" <?php if(!empty($config['sitemap_priority_view']) && $config['sitemap_priority_view'] == '0.7'): ?>selected="true"<?php endif; ?>>0.7</option>
								<option value="0.8" <?php if(!empty($config['sitemap_priority_view']) && $config['sitemap_priority_view'] == '0.8'): ?>selected="true"<?php endif; ?>>0.8</option>
								<option value="0.9" <?php if(!empty($config['sitemap_priority_view']) && $config['sitemap_priority_view'] == '0.9'): ?>selected="true"<?php endif; ?>>0.9</option>
								<option value="1.0" <?php if(!empty($config['sitemap_priority_view']) && $config['sitemap_priority_view'] == '1.0'): ?>selected="true"<?php endif; ?>>1.0</option>
							</select>
                           </div>
                       </div>
                    </div>
                    <div class="layui-input-inline layui-btn-container " style="width: auto;">
                      <div class="layui-form-mid layui-word-aux ey_helptips"></div>
                      <div class="layui-form-inline2 ey_helptips_txt">XML地图文件使用，所抓取页面在您网站的重要性，告诉搜索引擎抓取的优先级。数值越大，优先级越高。</div>
                    </div>
                  </div>
                  <div class="layui-form-item">
                    <label class="layui-form-label">生成文档数量</label>
                    <div class="layui-input-inline">
                      <input type="text" name="sitemap_archives_num" value="<?php echo (isset($config['sitemap_archives_num']) && ($config['sitemap_archives_num'] !== '')?$config['sitemap_archives_num']:'100'); ?>" class="layui-input">
                      <div class="layui-form-inline2 <?php if($config['sitemap_archives_num'] <= '100'): ?>none<?php endif; ?>" <?php if($config['sitemap_archives_num'] <= '100'): ?>style="color:red;"<?php endif; ?> id="p_sitemap_archives_num">推荐设置100篇，数量设置越多，会对文档发布/编辑的速度造成一定影响。</div>
                    </div>
                    <div class="layui-input-inline layui-btn-container " style="width: auto;">
                      <div class="layui-form-mid layui-word-aux ey_helptips"></div>
                      <div class="layui-form-inline2 ey_helptips_txt">发布/编辑文档时，会同步更新sitemap.xml，包含首页、栏目页、指定数量的最新发布文档。</div>
                    </div>
                  </div>
                  <div class="layui-form-item">
                    <label class="layui-form-label">实时推送Url的token</label>
                    <div class="layui-input-inline">
                      <input type="text" name="sitemap_zzbaidutoken" value="<?php echo (isset($config['sitemap_zzbaidutoken']) && ($config['sitemap_zzbaidutoken'] !== '')?$config['sitemap_zzbaidutoken']:''); ?>" class="layui-input">
                      <div class="layui-form-inline2">这里填入 <a href="https://ziyuan.baidu.com" target="_blank" style="color: red;">百度搜索资源平台</a> 的准入密钥，才能第一时间推送文章链接给百度蜘蛛。</div>
                    </div>
                  </div>
                  <div class="layui-form-item">
                    <div class="layui-input-block">
                        <input type="hidden" name="inc_type" value="<?php echo $inc_type; ?>">
                        <button class="layui-btn" lay-submit lay-filter="formSubmit">确认提交</button>
                    </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
  </div>

  <script>

    $(document).ready(function(){
        // 生成文档数量
        $('input[name=sitemap_archives_num]').keyup(function(){
            var sitemap_archives_num = parseInt($(this).val());
            if (sitemap_archives_num > 100) {
                $('#p_sitemap_archives_num').show();
            } else {
                $('#p_sitemap_archives_num').hide();
            }
        });
    });

  layui.config({
    base: '/public/static/admin/' //静态资源所在路径
    ,version: '<?php echo $version; ?>'
  }).extend({
    index: 'lib/index' //主入口模块
  }).use(['index', 'set'], function(){
    var $ = layui.$
    ,layer = layui.layer
    ,form = layui.form;

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
            url : "<?php echo url('Seo/handle'); ?>",
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