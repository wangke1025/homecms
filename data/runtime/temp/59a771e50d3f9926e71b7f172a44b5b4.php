<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:54:"./application/admin/template/archives/index_manage.htm";i:1586742308;s:78:"/www/wwwroot/ejucms.wingle.com.cn/application/admin/template/public/layout.htm";i:1580687630;s:78:"/www/wwwroot/ejucms.wingle.com.cn/application/admin/template/public/footer.htm";i:1580687630;}*/ ?>
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
          <!-- <div class="layui-card-header">内容管理</div> -->
          <div class="layui-card-body">
            <div class="console-menu">
               <ul class="layui-row layui-col-space10 pt10 pb20">
                  <?php if(!empty($contentManage['xinfang'])): ?>
                  <li class="layui-col-xs6 layui-col-md2">
                    <div class="admin-ico-nav">
                      <i class="iconfont icon-haiwaixinfang "></i>
                      <cite>新房</cite>
                      <a lay-href="<?php echo url('Xinfang/index', ['channel'=>$contentManage['xinfang']['id']]); ?>">新房列表</a>
                      <?php if(!empty($contentManage['tuan'])): ?>
                      <a lay-href="<?php echo url('Tuan/index', ['channel'=>$contentManage['tuan']['id']]); ?>">团购列表</a>
                      <?php endif; ?>
                    </div>
                  </li>
                  <?php endif; if(!empty($contentManage['ershou'])): ?>
                  <li class="layui-col-xs6 layui-col-md2 ">
                     <div class="admin-ico-nav">
                       <i  class="iconfont icon-ershoufang"></i>
                       <cite>二手房</cite>
                       <a lay-href="<?php echo url('Ershou/index', ['channel'=>$contentManage['ershou']['id']]); ?>">二手房列表</a>
                         <a lay-href="<?php echo url('Ershou/index', ['channel'=>$contentManage['ershou']['id'],'openurl'=>url('Ershou/add')]); ?>">二手房新增</a>
                     </div>
                  </li>
                  <?php endif; if(!empty($contentManage['zufang'])): ?>
                  <li class="layui-col-xs6 layui-col-md2 ">
                     <div class="admin-ico-nav">
                       <i  class="iconfont icon-xiaoquchuzuanli"></i>
                       <cite>租房</cite>
                       <a lay-href="<?php echo url('Zufang/index', ['channel'=>$contentManage['zufang']['id']]); ?>">租房列表</a>
                         <a lay-href="<?php echo url('Zufang/index', ['channel'=>$contentManage['zufang']['id'],'openurl'=>url('Zufang/add')]); ?>">租房新增</a>
                     </div>
                  </li>
                  <?php endif; if(!empty($contentManage['qiuzu'])): ?>
                   <li class="layui-col-xs6 layui-col-md2 ">
                       <div class="admin-ico-nav">
                           <i  class="iconfont icon-xiaoquchuzuanli"></i>
                           <cite>求租</cite>
                           <a lay-href="<?php echo url('Qiuzu/index', ['channel'=>$contentManage['qiuzu']['id']]); ?>">求租列表</a>
                           <a lay-href="<?php echo url('Qiuzu/index', ['channel'=>$contentManage['qiuzu']['id'],'openurl'=>url('Qiuzu/add')]); ?>">求租新增</a>
                       </div>
                   </li>
                   <?php endif; if(!empty($contentManage['xiaoqu'])): ?>
                   <li class="layui-col-xs6 layui-col-md2 ">
                       <div class="admin-ico-nav">
                           <i  class="iconfont icon-xiaoquguanli"></i>
                           <cite>小区</cite>
                           <a lay-href="<?php echo url('Xiaoqu/index', ['channel'=>$contentManage['xiaoqu']['id']]); ?>">小区列表</a>
                           <a lay-href="<?php echo url('Xiaoqu/index', ['channel'=>$contentManage['xiaoqu']['id'],'openurl'=>url('Xiaoqu/add')]); ?>">小区新增</a>
                       </div>
                   </li>
                   <?php endif; if(!empty($contentManage['shopcs']) || !empty($contentManage['shopcz'])): ?>
                  <li class="layui-col-xs6 layui-col-md2 ">
                     <div class="admin-ico-nav">
                       <i  class="iconfont icon-daochuSVG-"></i>
                       <cite>商铺</cite>
                       <?php if(!empty($contentManage['shopcs'])): ?>
                       <a lay-href="<?php echo url('Shopcs/index', ['channel'=>$contentManage['shopcs']['id']]); ?>">商铺出售</a>
                       <?php endif; if(!empty($contentManage['shopcz'])): ?>
                       <a lay-href="<?php echo url('Shopcz/index', ['channel'=>$contentManage['shopcz']['id']]); ?>">商铺出租</a>
                       <?php endif; ?>
                     </div>
                  </li>
                  <?php endif; if(!empty($contentManage['officecs']) || !empty($contentManage['officecz'])): ?>
                  <li class="layui-col-xs6 layui-col-md2 ">
                     <div class="admin-ico-nav">
                       <i  class="iconfont icon-xiezilou"></i>
                       <cite>写字楼</cite>
                       <?php if(!empty($contentManage['officecs'])): ?>
                       <a lay-href="<?php echo url('Officecs/index', ['channel'=>$contentManage['officecs']['id']]); ?>">写字楼出售</a>
                       <?php endif; if(!empty($contentManage['officecz'])): ?>
                       <a lay-href="<?php echo url('Officecz/index', ['channel'=>$contentManage['officecz']['id']]); ?>">写字楼出租</a>
                       <?php endif; ?>
                     </div>
                  </li>
                  <?php endif; if(!empty($contentManage['article'])): ?>
                   <li class="layui-col-xs6 layui-col-md2 ">
                       <div class="admin-ico-nav">
                           <i  class="iconfont icon-xinwen"></i>
                           <cite>资讯</cite>
                           <a lay-href="<?php echo url('Article/index', ['channel'=>$contentManage['article']['id']]); ?>">资讯列表</a>
                           <a lay-href="<?php echo url('Article/index', ['channel'=>$contentManage['article']['id'],'openurl'=>url('Article/add')]); ?>">资讯新增</a>
                       </div>
                   </li>
                   <?php endif; if(!(empty($adPosition) || (($adPosition instanceof \think\Collection || $adPosition instanceof \think\Paginator ) && $adPosition->isEmpty()))): ?>
                   <li class="layui-col-xs6 layui-col-md2 ">
                       <div class="admin-ico-nav">
                           <i  class="iconfont icon-guanggao"></i>
                           <cite>广告</cite>
                           <a lay-href="<?php echo url('AdPosition/index'); ?>">广告列表</a>
                           <a lay-href="<?php echo url('AdPosition/index',['openurl'=>url('AdPosition/add')]); ?>">新增广告</a>
                       </div>
                   </li>
                   <?php endif; if(($ask_index == 1) or ($system_question == 1)): ?>
                   <li class="layui-col-xs6 layui-col-md2 ">
                       <div class="admin-ico-nav">
                           <i  class="iconfont icon-wenda1"></i>
                           <cite>问答</cite>
                           <?php if(!(empty($ask_index) || (($ask_index instanceof \think\Collection || $ask_index instanceof \think\Paginator ) && $ask_index->isEmpty()))): ?>
                           <a lay-href="<?php echo url('Ask/index'); ?>">问答列表</a>
                           <?php endif; if(!(empty($system_question) || (($system_question instanceof \think\Collection || $system_question instanceof \think\Paginator ) && $system_question->isEmpty()))): ?>
                           <a lay-href="<?php echo url('System/question'); ?>">问答配置</a>
                           <?php endif; ?>
                       </div>
                   </li>
                   <?php endif; if(($remark_index == 1) or ($system_remark == 1)): ?>
                   <li class="layui-col-xs6 layui-col-md2 ">
                       <div class="admin-ico-nav">
                           <i  class="iconfont icon-wenda1"></i>
                           <cite>点评</cite>
                           <?php if(!(empty($remark_index) || (($remark_index instanceof \think\Collection || $remark_index instanceof \think\Paginator ) && $remark_index->isEmpty()))): ?>
                           <a lay-href="<?php echo url('Remark/index'); ?>">点评列表</a>
                           <?php endif; if(!(empty($system_remark) || (($system_remark instanceof \think\Collection || $system_remark instanceof \think\Paginator ) && $system_remark->isEmpty()))): ?>
                           <a lay-href="<?php echo url('System/remark'); ?>">点评配置</a>
                           <?php endif; ?>
                       </div>
                   </li>
                   <?php endif; if(($tags == 1) or ($links == 1)): ?>
                   <li class="layui-col-xs6 layui-col-md2 ">
                       <div class="admin-ico-nav">
                           <i  class="iconfont icon-qitapeizhi"></i>
                           <cite>其他</cite>
                           <?php if(!(empty($tags) || (($tags instanceof \think\Collection || $tags instanceof \think\Paginator ) && $tags->isEmpty()))): ?>
                           <a lay-href="<?php echo url('Tags/index'); ?>">tags列表</a>
                           <?php endif; if(!(empty($links) || (($links instanceof \think\Collection || $links instanceof \think\Paginator ) && $links->isEmpty()))): ?>
                           <a lay-href="<?php echo url('Links/index'); ?>">友情链接</a>
                           <?php endif; ?>
                       </div>
                   </li>
                   <?php endif; if(is_array($contentManage) || $contentManage instanceof \think\Collection || $contentManage instanceof \think\Paginator): $i = 0; $__LIST__ = $contentManage;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if(empty($vo['ifsystem'])): ?>
                   <li class="layui-col-xs6 layui-col-md2 ">
                       <div class="admin-ico-nav">
                           <i  class="iconfont icon-xiaoquguanli"></i>
                           <cite><?php echo $vo['typename']; ?></cite>
                           <a lay-href="<?php echo url('Custom/index', ['channel'=>$vo['id']]); ?>"><?php echo $vo['typename']; ?>列表</a>
                           <a lay-href="<?php echo url('Custom/index', ['channel'=>$vo['id'],'openurl'=>url('Custom/add',['channel'=>$vo['id']])]); ?>"><?php echo $vo['typename']; ?>新增</a>
                       </div>
                   </li>
                   <?php endif; endforeach; endif; else: echo "" ;endif; ?>
                </ul>
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
    }).use(['index'], function(){

    });
  </script>

</body>
</html>

