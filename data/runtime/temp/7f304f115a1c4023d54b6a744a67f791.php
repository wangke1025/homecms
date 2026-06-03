<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:43:"./template/default/mobile/lists_xinfang.htm";i:1571020248;s:68:"/www/wwwroot/ejucms.wingle.com.cn/template/default/mobile/header.htm";i:1573633356;s:68:"/www/wwwroot/ejucms.wingle.com.cn/template/default/mobile/search.htm";i:1570838454;}*/ ?>
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
    <?php  $tagStatic = new \think\template\taglib\eju\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/css/iconfont.css","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eju\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/css/amazeui.min.css","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eju\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/css/aflist.css","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eju\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/css/mobile2.css","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eju\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/jquery.min.js","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eju\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/amazeui.min.js","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eju\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/iscroll.js","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eju\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/swiper-3.4.2.jquery.min.js","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eju\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/amazeui.lazyload.min.js","",""); echo $__VALUE__; ?>

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

<section class="af-sx">
    <div class="search-wrap" id="afsearch">
        <div class="search-text"> <i class="icon-search iconfont"></i>
            <input class="text" type="text" name="keyword" value="" placeholder="输入楼盘名称开始找房">
        </div>
    </div>
    <?php  $tagScreening = new \think\template\taglib\eju\TagScreening; $_result = $tagScreening->getScreening("on", "province_id,city_id,average_price,characteristic", "", "不限","1","","off","2","2","off","off");if(!empty($_result["list"]) || (($_result["list"] instanceof \think\Collection || $_result["list"] instanceof \think\Paginator ) && $_result["list"]->isEmpty())): $field = $_result; ?>
        <div class="af-sx-body">
            <?php if(is_array($field['list']) || $field['list'] instanceof \think\Collection || $field['list'] instanceof \think\Paginator): $i = 0; $e = 1;$k=0; $__LIST__ = $field['list'];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$vo): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
            <a class="act" name="af-tab<?php echo $e; ?>" href="#">
                <span class="ellips"><?php echo $vo['title']; ?></span>
                <i class="icon"></i>
            </a>
            <?php ++$e;$k++; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $vo = []; ?>
        </div>
        <?php if(is_array($field['list']) || $field['list'] instanceof \think\Collection || $field['list'] instanceof \think\Paginator): $i = 0; $e = 1;$k=0; $__LIST__ = $field['list'];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$vo): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
        <div class="af-sx-list af-tab<?php echo $e; ?>" style="display: none;">
            <div class="af-sx-content">
                <div class="slide-body sx-child">
                    <div class="slide-sct">
                        <?php if(is_array($vo['dfvalue']) || $vo['dfvalue'] instanceof \think\Collection || $vo['dfvalue'] instanceof \think\Paginator): $i = 0; $e = 1;$k=0; $__LIST__ = $vo['dfvalue'];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$vo2): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
                        <li><a <?php echo $vo2['onClick']; ?> class="act <?php echo $vo2['currentstyle']; ?>"><?php echo $vo2['name']; ?></a></li>
                        <?php ++$e;$k++; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $vo2 = []; ?>
                    </div>
                </div>
            </div>
        </div>
        <?php ++$e;$k++; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $vo = []; ?>
        <?php echo $field['hidden']; endif; $field = []; ?>
</section>
<!-- 搜索弹出 -->
<div class="search_cont">
    <div class="search_cont_wrap">
        <div class="search-text"> <a class="search_back"><i class="icon-return iconfont"></i></a>
            <?php  $tagSearchform = new \think\template\taglib\eju\TagSearchform; $_result = $tagSearchform->getSearchform("","9","","","","off"); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$k = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
            <form id="search_form" method="get" action="<?php echo $field['action']; ?>">
                <i onclick="subDo()" class="icon-search iconfont"></i>
                <input class="text" type="text" name="keywords" value="<?php echo \think\Request::instance()->param('keywords'); ?>" placeholder="输入楼盘名称开始找房">
                <?php echo $field['hidden']; ?>
            </form>
            <a class="search_btn" onclick="subDo()" >搜索</a>
            <?php ++$e;$k++; endforeach;endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
        </div>
        <div class="zf_findhouse">
            <h3>热门搜索</h3>
            <ul class="tags">
                <?php  $tagScreening = new \think\template\taglib\eju\TagScreening; $_result = $tagScreening->getScreening("act2", "characteristic", "", "off","1","","off","","0","off","off");if(!empty($_result["list"]) || (($_result["list"] instanceof \think\Collection || $_result["list"] instanceof \think\Paginator ) && $_result["list"]->isEmpty())): $field = $_result; if(is_array($field['list']) || $field['list'] instanceof \think\Collection || $field['list'] instanceof \think\Paginator): $i = 0; $e = 1;$k=0; $__LIST__ = $field['list'];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$vo): $i= intval($key) + 1;$mod = ($i % 2 ); if(is_array($vo['dfvalue']) || $vo['dfvalue'] instanceof \think\Collection || $vo['dfvalue'] instanceof \think\Paginator): $i = 0; $e = 1;$k=0; $__LIST__ = $vo['dfvalue'];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$vo2): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
                        <li class="tag-4"><a <?php echo $vo2['onClick']; ?> target="_blank"><?php echo $vo2['name']; ?></a></li>
                        <?php ++$e;$k++; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $vo2 = []; ++$e;$k++; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $vo = []; ?>
                    <?php echo $field['hidden']; endif; $field = []; ?>
            </ul>
        </div>
        <div class="zf_findhouse">
            <h3>快捷找房</h3>
            <?php  $tagScreening = new \think\template\taglib\eju\TagScreening; $_result = $tagScreening->getScreening("active", "", "", "不限","1","","off","","0","off","off");if(!empty($_result["list"]) || (($_result["list"] instanceof \think\Collection || $_result["list"] instanceof \think\Paginator ) && $_result["list"]->isEmpty())): $field = $_result; if(is_array($field['list']) || $field['list'] instanceof \think\Collection || $field['list'] instanceof \think\Paginator): $i = 0; $e = 1;$k=0; $__LIST__ = $field['list'];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$vo): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
                <div class="find-item">
                    <div class="type"><?php echo $vo['title']; ?>：</div>
                    <ul class="list find-zone">
                        <?php if(is_array($vo['dfvalue']) || $vo['dfvalue'] instanceof \think\Collection || $vo['dfvalue'] instanceof \think\Paginator): $i = 0; $e = 1;$k=0; $__LIST__ = $vo['dfvalue'];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$vo2): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
                        <li><a <?php echo $vo2['onClick']; ?> class="act"><?php echo $vo2['name']; ?></a></li>
                        <?php ++$e;$k++; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $vo2 = []; ?>
                    </ul>
                </div>
                <?php ++$e;$k++; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $vo = []; ?>
                <?php echo $field['hidden']; endif; $field = []; ?>
        </div>
    </div>
</div>
<div id="wrapper">
    <div class="af-lp-list">
        <ul class="am-list" id="lists0003" data-total="100">
        <?php  $typeid = ""; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $row = 10; $channelid = ""; $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "",      "noflag"=> "",      "channel"=> $channelid,      "joinaid"=> "",      "province_id"=> "",      "city_id"=> "",      "area_id"=> "",      "screen"=> "1",      "users_id"=> "", ); $tag = array (
  'tagid' => 'lists0003',
  'row' => '10',
  'key' => 'n',
  'titlelen' => '30',
  'infolen' => '160',
  'orderby' => 'new',
  'id' => 'field',
); $tagArclist = new \think\template\taglib\eju\TagArclist; $_result = $tagArclist->getArclist($param, $row, "new", "","desc","lists0003",$tag,"0","on","",[],[]);if(is_array($_result["list"]) || $_result["list"] instanceof \think\Collection || $_result["list"] instanceof \think\Paginator): $n = 0; $e = 1;$k=0; $__LIST__ = is_array($_result["list"]) ? array_slice($_result["list"],0, $row, true) : $_result["list"]->slice(0, $row, true);  $__TAG__ = $_result["tag"];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$field["title"] = text_msubstr($field["title"], 0, 30, false);$field["seo_description"] = text_msubstr($field["seo_description"], 0, 160, true);$n= intval($key) + 1;$mod = ($n % 2 ); ?>
            <li class="am-g am-list-item-desced am-list-item-thumbed am-list-item-thumb-right pet_list_one_block">
                <a href="<?php echo $field['arcurl']; ?>">
                    <div class="am-u-sm-4 newhouse-pic">
                        <img data-original="<?php echo $field['litpic']; ?>" src="<?php echo $field['litpic']; ?>" class="newhouse-img lazy">
                    </div>
                    <div class=" am-u-sm-8 am-list-main newhouse-info ">
                        <p class="newhouse-name"><?php echo $field['title']; ?></p>
                        <p class="newhouse-dz">[<?php echo get_province_name($field['province_id']); ?>-<?php echo get_city_name($field['city_id']); ?>] <?php echo $field['address']; ?></p>
                        <p class="newhouse-hx">户型：
                          <?php  $aid = $field['aid']; $tag = array (
  'aid' => '$field.aid',
  'huxing' => 'on',
  'id' => 'view',
  'photo' => 'off',
  'price' => 'off',
); if(!isset($aid) || empty($aid)) : $aid = $field['aid']; endif; $tagArcview = new \think\template\taglib\eju\TagArcview; $_result = $tagArcview->getArcview($aid, "",$tag); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator):  $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: $view = $__LIST__;if(is_array($view['huxing_list']) || $view['huxing_list'] instanceof \think\Collection || $view['huxing_list'] instanceof \think\Paginator): $i = 0; $e = 1;$k=0; $__LIST__ = $view['huxing_list'];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$vo): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
                              <?php echo $vo['huxing_room']; ?>室(建面<?php echo $vo['huxing_area']; ?>㎡)
                            <?php ++$e;$k++; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $vo = []; endif; else: echo htmlspecialchars_decode("");endif; unset($aid); $view = []; ?>
                        </p>
                        <p class="newhouse-jg"> <em>均价：</em><?php if(!(empty($field['average_price']) || (($field['average_price'] instanceof \think\Collection || $field['average_price'] instanceof \think\Paginator ) && $field['average_price']->isEmpty()))): ?><?php echo $field['average_price']; ?><?php echo $field['price_units']; else: ?>暂无<?php endif; ?>  </p>
                    </div>
                </a>
            </li>
            <?php if($n == '5'):  $tagAd = new \think\template\taglib\eju\TagAd; $_result = $tagAd->getAd("9"); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator):  $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "";else: $field = $__LIST__;?>
                <li class="list_gg">
                    <a href="<?php echo $field['links']; ?>">
                        <img src="<?php echo $field['litpic']; ?>">
                    </a>
                </li>
                <?php endif; else: echo "";endif; $field = []; endif; if($n == '11'):  $tagAd = new \think\template\taglib\eju\TagAd; $_result = $tagAd->getAd("10"); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator):  $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "";else: $field = $__LIST__;?>
                <li class="list_gg">
                    <a href="<?php echo $field['links']; ?>">
                        <img src="<?php echo $field['litpic']; ?>">
                    </a>
                </li>
                <?php endif; else: echo "";endif; $field = []; endif; if($n == '16'):  $tagAd = new \think\template\taglib\eju\TagAd; $_result = $tagAd->getAd("11"); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator):  $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "";else: $field = $__LIST__;?>
                <li class="list_gg">
                    <a href="<?php echo $field['links']; ?>">
                        <img src="<?php echo $field['litpic']; ?>">
                    </a>
                </li>
                <?php endif; else: echo "";endif; $field = []; endif; ++$e;$k++; $aid = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
        </ul>
         <?php  empty($__TAG__) && $__TAG__ = []; $tagArcpagelist = new \think\template\taglib\eju\TagArcpagelist; $_result = $tagArcpagelist->getArcpagelist("lists0003","0","数据加载完成","","", $__TAG__); if(!empty($_result) || (($_result instanceof \think\Collection || $_result instanceof \think\Paginator ) && $_result->isEmpty())): $field = $_result; ?>
        <p id="loading-alt"><a href="javascript:void(0);" <?php echo $field['onclick']; ?>>点击加载更多</a></p>
        <?php  endif; ?><?php echo $_result["js"]; $field = []; ?>
    </div>
</div>
<div class="mask"></div>
<div class="am-icon-btn am-icon-arrow-up" data-am-smooth-scroll="" style="position:fixed;bottom:2rem;right: 0px;"></div>

<script type="text/javascript" >
    $(function() {
        $("img.lazy").lazyload();
        // 搜索弹出
        $("input.text").focus(function(){
            $(".search_cont").css("display","block")
            $("html,body").addClass("noscroll");
        });
        $(".search_back").click(function(){
            $(".search_cont").css("display","none")
            $("html,body").removeClass("noscroll");
        });

        $(".af-sx-body a").click(function() {
            if( $(".af-sx-body a").eq($(this).index()).hasClass("cur")){
                $(".af-sx-body a").eq($(this).index()).removeClass('cur');
                $(".af-sx-list").eq($(this).index()).toggle().siblings(".af-sx-list").hide();
            }else{
                $(".af-sx-body a").eq($(this).index()).addClass("cur").siblings().removeClass('cur');
                $(".af-sx-list").eq($(this).index()).toggle().siblings(".af-sx-list").hide();
            }
            var display =$('.af-sx-list').eq($(this).index()).css('display');
            if(display == 'flex'){
                $(".mask").show();
                $("html,body").addClass("noscroll");
            }else{
                $(".mask").hide();
                $("html,body").removeClass("noscroll");
            }

        });
        $(".mask").click(function() {
            $(".af-sx-body a").removeClass('cur');
            $(".af-sx-list,.mask").hide();
            $("html,body").removeClass("noscroll");
        });
        $(".slide-sct a").click(function() {
            //$(this).addClass("on").siblings().removeClass('on');
            //$(".af-sx-list").hide();
            $(".slide-sct a").eq($(this).index()).addClass("on").siblings().removeClass('on');
            $(this).find("cur").text($(".slide-sct a").eq($(this).index()).text());
        });

    });
</script>

<!--列表数据加载-->
<?php  $tagStatic = new \think\template\taglib\eju\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/laytpl.js","",""); echo $__VALUE__; ?>
<script>
    $(function() {
        //屏幕滑动促发事件
        $(window).scroll(function() {

        });
    });
    function subDo(){
        $("#search_form").submit();
    }
</script>
</body>
</html>
