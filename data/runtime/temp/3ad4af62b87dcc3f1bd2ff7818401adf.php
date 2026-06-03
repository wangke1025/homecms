<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:35:"./template/default/mobile/index.htm";i:1573632482;s:68:"/www/wwwroot/ejucms.wingle.com.cn/template/default/mobile/header.htm";i:1573633356;s:68:"/www/wwwroot/ejucms.wingle.com.cn/template/default/mobile/search.htm";i:1570838454;s:68:"/www/wwwroot/ejucms.wingle.com.cn/template/default/mobile/footer.htm";i:1569829372;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <title><?php  $tagGlobal = new \think\template\taglib\eju\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_title"); echo $__VALUE__; ?></title>
    <meta name="renderer" content="webkit" />
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=0,minimal-ui" />
    <meta name="description" content="<?php  $tagGlobal = new \think\template\taglib\eju\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_description"); echo $__VALUE__; ?>" />
    <meta name="keywords" content="<?php  $tagGlobal = new \think\template\taglib\eju\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_keywords"); echo $__VALUE__; ?>" />
    <link href="<?php  $tagGlobal = new \think\template\taglib\eju\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_cmspath"); echo $__VALUE__; ?>/favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <?php  $tagStatic = new \think\template\taglib\eju\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/css/iconfont.css","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eju\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/css/amazeui.min.css","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eju\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/css/aflist.css","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eju\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/css/mobile2.css","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eju\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/jquery.min.js","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eju\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/amazeui.min.js","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eju\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/iscroll.js","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eju\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/swiper-3.4.2.jquery.min.js","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eju\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/amazeui.lazyload.min.js","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eju\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/laytpl.js","",""); echo $__VALUE__; ?>

    <style>
        body {
            background: #fff;
        }
        .af-lp div.lp-all-btn {
            display: -webkit-flex;
            display: flex;
            -webkit-align-items: center;
            align-items: center;
            -webkit-justify-content: center;
            justify-content: center;
            background: #F6F4F5;
            border-radius: .125rem;
            height: 3.125rem;
            width: 100%;
            /* font-size: 1rem; */
            color: #999;
            margin-bottom: 1.25rem;
            font-weight: normal;
            margin-top: 1.375rem;
        }
    </style>
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

<header class="topbanner">
    <div class="toptext"> <img src="<?php  $tagGlobal = new \think\template\taglib\eju\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_mobile"); echo $__VALUE__; ?>/skin/images/toptext.png" width="100%"> </div>
    <div class="index-search-wrap" id="afsearch">
        <div class="search-text">
            <i class="icon-search iconfont"></i>
            <input class="text" type="text" name="keyword" value="" placeholder="输入楼盘名称开始找房">
        </div>
    </div>
</header>

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

<div class="af-main">
    <nav class="af-list">
        <ul class="af-list-wrap">
            <?php  $typeid = ""; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $row = 60; $tagChannel = new \think\template\taglib\eju\TagChannel; $_result = $tagChannel->getChannel($typeid, "top", "on", "",""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$k=0;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $field["typename"] = text_msubstr($field["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $field;$i= intval($key) + 1;$mod = ($i % 2 ); if($i == 1): ?>
                <li>
                    <a href="<?php echo $field['typeurl']; ?>" class="iconfont icon-jianyuede"> </a>
                    <span><?php echo $field['typename']; ?></span>
                </li>
                <?php elseif($i == 2): ?>
                <li>
                    <a href="<?php echo $field['typeurl']; ?>" class="iconfont icon-jingjide"> </a>
                    <span><?php echo $field['typename']; ?></span>
                </li>
                <?php elseif($i == 3): ?>
                <li>
                    <a href="<?php echo $field['typeurl']; ?>" class="iconfont icon-bus"> </a>
                    <span><?php echo $field['typename']; ?></span>
                </li>
                <?php else: ?>
                <li>
                    <a href="<?php echo $field['typeurl']; ?>" class="iconfont icon-kanguo"> </a>
                    <span><?php echo $field['typename']; ?></span>
                </li>
                <?php endif; ++$e;$k++; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
        </ul>
    </nav>
    <!--<section class="af-prov">
        <div class="prov-row">
        <?php  $tagSqlarclist = new \think\template\taglib\eju\TagSqlarclist; $_result = $tagSqlarclist->getSqlarclist("0",[], [], "region", "*", "", "0,2", "", "", "", "","","",[],"", "is_hot=1 and status = 1"); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$k=0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field):  if ($i == 0) : $field["currentstyle"] = ""; else:  $field["currentstyle"] = ""; endif;$i= intval($key) + 1;$mod = ($i % 2 ); ?>
            <a class="wfull" href='<?php echo $field['domainurl']; ?>' >
                <div class="prov-img"> <img src="<?php echo $field['litpic']; ?>" /> </div>
                <span class="prov-name"><?php echo $field['name']; ?></span>
            </a>
        <?php ++$e;$k++; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
        </div>
    </section>-->

    <section class="af-lp">
        <div class="af-tittle-line">
            <h3>精选品质楼盘</h3>
            <?php  $typeid = "1"; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $tagType = new \think\template\taglib\eju\TagType; $_result = $tagType->getType($typeid, "self", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator):  $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("栏目不存在时，显示这里的文案");else: $field = $__LIST__;?>
            <a href="<?php echo $field['typeurl']; ?>" title="<?php echo $field['typename']; ?>">查看更多</a>
            <?php endif; else: echo htmlspecialchars_decode("栏目不存在时，显示这里的文案");endif; $field = []; ?>
        </div>
        <div class="lp-list">
            <ul>
                <?php  $typeid = ""; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $row = 10; $channelid = "9"; $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "h",      "noflag"=> "",      "channel"=> $channelid,      "joinaid"=> "",      "province_id"=> "",      "city_id"=> "",      "area_id"=> "",      "screen"=> "1",      "users_id"=> "", ); $tag = array (
  'channelid' => '9',
  'flag' => 'h',
  'orderby' => 'new',
  'limit' => '0,10',
  'id' => 'field',
); $tagArclist = new \think\template\taglib\eju\TagArclist; $_result = $tagArclist->getArclist($param, $row, "new", "","desc","",$tag,"0","on","",[],[]);if(is_array($_result["list"]) || $_result["list"] instanceof \think\Collection || $_result["list"] instanceof \think\Paginator): $i = 0; $e = 1;$k=0; $__LIST__ = is_array($_result["list"]) ? array_slice($_result["list"],0, $row, true) : $_result["list"]->slice(0, $row, true);  $__TAG__ = $_result["tag"];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$field["title"] = text_msubstr($field["title"], 0, 100, false);$field["seo_description"] = text_msubstr($field["seo_description"], 0, 160, true);$i= intval($key) + 1;$mod = ($i % 2 ); ?>
                <li>
                    <a href="<?php echo $field['arcurl']; ?>">
                        <div class="lp-list-img"><img src="<?php echo $field['litpic']; ?>" /></div>
                        <div class="lp-name-line">
                            <span><?php echo $field['title']; ?></span>[<?php echo get_province_name($field['province_id']); ?>-<?php echo get_city_name($field['city_id']); ?>]
                            <span class="intr-title"><?php echo $field['sale_status']; ?></span>
                        </div>
                        <div class="lp-list-price">
                            <p class="newhouse-jg"><?php echo $field['average_price']; ?></span><?php echo $field['price_units']; ?> </p>
                        </div>
                        <div class="lp-list-tag">
                            <?php if(is_array($field['characteristic']) || $field['characteristic'] instanceof \think\Collection || $field['characteristic'] instanceof \think\Paginator): $i = 0; $e = 1;$k=0; $__LIST__ = $field['characteristic'];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$vo): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
                            <span class="lp-tag"><?php echo $vo; ?></span>
                            <?php ++$e;$k++; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $vo = []; ?>
                        </div>
                        <div class="lp-list-hx">
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
                            <p class="newhouse-hx">地址：<?php echo $field['address']; ?></p>
                        </div>
                    </a>
                </li>
                <?php ++$e;$k++; $aid = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>

            </ul>

            <div  class="lp-all-btn">
                <?php  $typeid = "1"; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $tagType = new \think\template\taglib\eju\TagType; $_result = $tagType->getType($typeid, "self", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator):  $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("栏目不存在时，显示这里的文案");else: $field = $__LIST__;?>
                <a href="<?php echo $field['typeurl']; ?>" title="<?php echo $field['typename']; ?>">查看全部楼盘</a>
                <?php endif; else: echo htmlspecialchars_decode("栏目不存在时，显示这里的文案");endif; $field = []; ?>
            </div>
        </div>
    </section>

    <script>
        // 搜索弹出
        $(document).ready(function(){
            $("input.text").focus(function(){
                $(".search_cont").css("display","block")
                $("html,body").addClass("noscroll");
            });
            $(".search_back").click(function(){
                $(".search_cont").css("display","none")
                $("html,body").removeClass("noscroll");
            });
        })
        function subDo() {
            $("#search_form").submit();
        }
    </script>
    <footer class="footer-wrap">
    <div class="footer-nav">
        <?php  $typeid = ""; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $row = 60; $tagChannel = new \think\template\taglib\eju\TagChannel; $_result = $tagChannel->getChannel($typeid, "top", "", "",""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$k=0;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $field["typename"] = text_msubstr($field["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $field;$i= intval($key) + 1;$mod = ($i % 2 ); ?>
        <a class="items js-dl-app" href="<?php echo $field['typeurl']; ?>">
            <?php echo $field['typename']; ?>
        </a>
        <?php ++$e;$k++; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
    </div>
    <p class="copyright"><?php  $tagGlobal = new \think\template\taglib\eju\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_copyright"); echo $__VALUE__; ?></p>
    <p class="copyright"><?php  $tagGlobal = new \think\template\taglib\eju\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_recordnum"); echo $__VALUE__; ?></p>
</footer>

<style>
    .copyright a{
        padding: 2px 20px;
        font-size: 12px;
        color: #ccc;
        line-height: 1.2;
        margin: 0;
    }
</style>
</body>
</html>
