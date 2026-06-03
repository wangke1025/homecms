<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:48:"./template/default/mobile/lists_article_list.htm";i:1571020144;s:68:"/www/wwwroot/ejucms.wingle.com.cn/template/default/mobile/header.htm";i:1573633356;}*/ ?>
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
        <div class="search-text">
            <?php  $tagSearchform = new \think\template\taglib\eju\TagSearchform; $_result = $tagSearchform->getSearchform("","9","","","","off"); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$k = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
            <i onclick="subDo()" class="icon-search iconfont"></i>
            <form  id="search_form" method="get" action="<?php echo $field['action']; ?>">
                <input class="text" type="text" name="keywords" value="<?php echo \think\Request::instance()->param('keywords'); ?>" placeholder="输入楼盘名称开始找房">
                <?php echo $field['hidden']; ?>
            </form>
            <?php ++$e;$k++; endforeach;endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
        </div>
    </div>
    <div class="af-sx-body">
        <?php  $typeid = ""; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $row = 60; $tagChannel = new \think\template\taglib\eju\TagChannel; $_result = $tagChannel->getChannel($typeid, "sonself", "act", "",""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$k=0;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $field["typename"] = text_msubstr($field["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $field;$i= intval($key) + 1;$mod = ($i % 2 ); ?>
        <a class="act <?php echo $field['currentstyle']; ?>" href="<?php echo $field['typeurl']; ?>">
            <span class="ellips"><?php echo $field['typename']; ?></span>
            <!--<i class="icon"></i>-->
        </a>
        <?php ++$e;$k++; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
    </div>
</section>
<div id="wrapper">
    <div class="af-apoint-list">
        <ul class="am-list" id="lists0002" data-uri="" data-total="">
            <?php  $typeid = ""; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $row = 5; $channelid = ""; $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "",      "noflag"=> "",      "channel"=> $channelid,      "joinaid"=> "",      "province_id"=> "",      "city_id"=> "",      "area_id"=> "",      "screen"=> "1",      "users_id"=> "", ); $tag = array (
  'tagid' => 'lists0002',
  'row' => '5',
  'titlelen' => '30',
  'orderby' => 'new',
); $tagArclist = new \think\template\taglib\eju\TagArclist; $_result = $tagArclist->getArclist($param, $row, "new", "","desc","lists0002",$tag,"0","on","",[],[]);if(is_array($_result["list"]) || $_result["list"] instanceof \think\Collection || $_result["list"] instanceof \think\Paginator): $i = 0; $e = 1;$k=0; $__LIST__ = is_array($_result["list"]) ? array_slice($_result["list"],0, $row, true) : $_result["list"]->slice(0, $row, true);  $__TAG__ = $_result["tag"];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$field["title"] = text_msubstr($field["title"], 0, 30, false);$field["seo_description"] = text_msubstr($field["seo_description"], 0, 160, true);$i= intval($key) + 1;$mod = ($i % 2 ); ?>
            <li class="am-g am-list-item-desced am-list-item-thumbed am-list-item-thumb-right pet_list_one_block">
                <a href="<?php echo $field['arcurl']; ?>">
                    <div class="am-u-sm-4 newslist-pic">
                        <img data-original="<?php echo $field['litpic']; ?>" src="<?php echo $field['litpic']; ?>" class="oldhouse-img lazy">
                    </div>
                    <div class=" am-u-sm-8 am-list-main newhouse-info ">
                        <p class="newslist-name"><?php echo $field['title']; ?></p>
                        <p class="newslist-info"><?php echo html_msubstr($field['seo_description'],0,50,true); ?></p>
                        <p class="newslist-data"><?php echo myDate("Y-m-d H:i:s",$field['add_time']); ?></p>
                    </div>
                </a>
            </li>
            <?php ++$e;$k++; $aid = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
        </ul>
         <?php  empty($__TAG__) && $__TAG__ = []; $tagArcpagelist = new \think\template\taglib\eju\TagArcpagelist; $_result = $tagArcpagelist->getArcpagelist("lists0002","0","数据加载完成","","", $__TAG__); if(!empty($_result) || (($_result instanceof \think\Collection || $_result instanceof \think\Paginator ) && $_result->isEmpty())): $field = $_result; ?>
        <p id="loading-alt"><a href="javascript:void(0);" <?php echo $field['onclick']; ?>>点击加载更多</a></p>
        <?php  endif; ?><?php echo $_result["js"]; $field = []; ?>
    </div>
</div>
<div class="mask"></div>

<script>
    $(function() {
        $("img.lazy").lazyload();

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

<?php  $tagStatic = new \think\template\taglib\eju\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/laytpl.js","",""); echo $__VALUE__; ?>
<script>
    $(function() {
        $(window).scroll(function() {
        });
    });
    function subDo(){
        $("#search_form").submit();
    }
</script>
</body>
</html>
