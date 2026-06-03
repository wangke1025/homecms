<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:62:"./template/default/mobile/view_xinfang_column_huxing_index.htm";i:1571020274;s:68:"/www/wwwroot/ejucms.wingle.com.cn/template/default/mobile/header.htm";i:1573633356;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo $eju['field']['seo_title']; ?></title>
    <meta name="renderer" content="webkit" />
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=0,minimal-ui" />
    <meta name="description" content="<?php echo $eju['field']['seo_description']; ?>" />
    <meta name="keywords" content="<?php echo $eju['field']['seo_keywords']; ?>" />
    <link href="<?php  $tagGlobal = new \think\template\taglib\eju\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_cmspath"); echo $__VALUE__; ?>/favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <?php  $tagStatic = new \think\template\taglib\eju\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/css/iconfont.css","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eju\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/css/amazeui.min.css","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eju\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/css/aflist.css","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eju\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/css/mobile2.css","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eju\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/css/swiper-3.4.2.min.css","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eju\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/jquery.min.js","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eju\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/amazeui.min.js","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eju\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/iscroll.js","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eju\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/swiper-3.4.2.jquery.min.js","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eju\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/amazeui.lazyload.min.js","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eju\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/swiper-3.4.2.jquery.min.js","",""); echo $__VALUE__; ?>
</head>
<body>
<div class="newsheader">
    <header data-am-widget="header" class="am-header am-header-blue">
        <div class="am-header-left am-header-nav">
            <a href="javascript:history.back(-1);" class="">
                <i class="icon-return iconfont"></i>
            </a>
        </div>
        <h1 class="am-header-title">
            <a href="<?php  $tagGlobal = new \think\template\taglib\eju\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_cmsurl"); echo $__VALUE__; ?>" class="">
                <img src="<?php  $tagGlobal = new \think\template\taglib\eju\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_1"); echo $__VALUE__; ?>" />
            </a>
        </h1>
        <div class="am-header-right am-header-nav">
            <a href="#" class="" data-am-offcanvas="{target: '#doc-oc-demo3'}"> <i class="icon-daohang iconfont"></i> </a>
        </div>
        <!-- 侧边栏内容 -->
        <div id="doc-oc-demo3" class="am-offcanvas">
            <div class="am-offcanvas-bar am-offcanvas-bar-flip">
                <div class="am-offcanvas-content">
                    <ul>
                        <li>
                            <a  href="<?php  $tagGlobal = new \think\template\taglib\eju\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_cmsurl"); echo $__VALUE__; ?>">网站首页</a>
                        </li>
                        <?php  $typeid = ""; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $row = 60; $tagChannel = new \think\template\taglib\eju\TagChannel; $_result = $tagChannel->getChannel($typeid, "top", "", "",""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$k=0;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $field["typename"] = text_msubstr($field["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $field;$i= intval($key) + 1;$mod = ($i % 2 ); ?>
                        <li>
                            <a href="<?php echo $field['typeurl']; ?>" >
                                <?php echo $field['typename']; ?>
                            </a>
                        </li>
                        <?php ++$e;$k++; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
                        <li>
                            <?php  $tagUser = new \think\template\taglib\eju\TagUser; $__LIST__ = $tagUser->getUser("open", "off", "", "", "");if(!empty($__LIST__) || (($__LIST__ instanceof \think\Collection || $__LIST__ instanceof \think\Paginator ) && $__LIST__->isEmpty())): $field = $__LIST__;  $tagUser = new \think\template\taglib\eju\TagUser; $__LIST__ = $tagUser->getUser("login", "off", "", "", "");if(!empty($__LIST__) || (($__LIST__ instanceof \think\Collection || $__LIST__ instanceof \think\Paginator ) && $__LIST__->isEmpty())): $field = $__LIST__; ?>
                            <a href="<?php echo $field['url']; ?>" id="<?php echo $field['id']; ?>">会员中心</a>　
                            <?php echo $field['hidden']; endif; $field = []; endif; $field = []; ?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
</div>


<div class="housepic-wrap" style="padding-top: 48px;">
    <div class="swiper-container swiper-container-horizontal" id="af-huxing">
        <div class="swiper-pagination swiper-pagination-fraction" id="swiper-pagination2">
            <span class="swiper-pagination-current"></span>
            <span class="swiper-pagination-total"></span>
        </div>
        <div class="swiper-wrapper" data-content="img01">
            <?php  $aid = $eju['field']['aid']; $tag = array (
  'aid' => '$eju.field.aid',
  'huxing' => 'on',
  'id' => 'view',
  'photo' => 'off',
  'price' => 'off',
); if(!isset($aid) || empty($aid)) : $aid = $eju['field']['aid']; endif; $tagArcview = new \think\template\taglib\eju\TagArcview; $_result = $tagArcview->getArcview($aid, "",$tag); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator):  $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: $view = $__LIST__;if(is_array($view['huxing_list']) || $view['huxing_list'] instanceof \think\Collection || $view['huxing_list'] instanceof \think\Paginator): $i = 0; $e = 1;$k=0; $__LIST__ = $view['huxing_list'];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$vo): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
                <div class="swiper-slide">
                    <div class="swiper-zoom-container"> <img src="<?php echo $vo['huxing_pic']; ?>" alt=""/> </div>
                    <div class="af-hx-info">
                        <div class="af-hx-name"> <em></em><span><?php echo $vo['huxing_room']; ?>室<?php echo $vo['huxing_living_room']; ?>厅<?php echo $vo['huxing_toilet']; ?>卫<?php echo $vo['huxing_kitchen']; ?>厨</span> </div>
                        <div class="af-hx-name"> <em>建筑面积：</em><span> <?php echo $vo['huxing_area']; ?>㎡ </span> </div>
                        <div class="af-hx-name"> <em>参考总价：</em><span> <?php echo $vo['huxing_price']; ?>万元</span> </div>
                    </div>
                </div>
                <?php ++$e;$k++; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $vo = []; endif; else: echo htmlspecialchars_decode("");endif; unset($aid); $view = []; ?>
        </div>
    </div>

    <script>
        var mySwiper = new Swiper('#af-huxing', {
            autoplay: 0,
            pagination: '#swiper-pagination2',
            paginationType: 'fraction',
            initialSlide:0,
            zoom : true,
            toggle:false
        });
    </script>
</body>
</html>
