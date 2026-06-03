<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:31:"./template/default/pc/index.htm";i:1595988660;s:64:"/www/wwwroot/ejucms.wingle.com.cn/template/default/pc/header.htm";i:1574817774;s:64:"/www/wwwroot/ejucms.wingle.com.cn/template/default/pc/footer.htm";i:1570361118;}*/ ?>
﻿<!DOCTYPE html>
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
    <?php  $tagStatic = new \think\template\taglib\eju\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/css/public.css","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eju\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/css/iconfont.css","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eju\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/css/home_always.css","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eju\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/css/swiper-3.4.2.min.css","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eju\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/jquery.min.1.7.2.js","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eju\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/scrollable.js","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eju\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/scrollable.autoscroll.js","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eju\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/top_footer.js","",""); echo $__VALUE__; ?>
<script>
$(function() {
    $(".scrollable").scrollable({circular: true});
   //自动滚动   $(".scrollable").scrollable({circular: true,}).autoscroll({autoplay: false, interval: 1000}); 
    
});
</script>

<script type="text/javascript">
    function showTime(tuanid, time_distance) {
        this.tuanid = tuanid;
        //PHP时间是秒，JS时间是微秒
        var timestamp = (new Date()).getTime();
        this.time_distance = time_distance * 1000 - timestamp;
    }
    showTime.prototype.setTimeShow = function () {
        var timer = $("#lefttime_" + this.tuanid);
        var btn_baoming = $("#btn_baoming_" + this.tuanid);
        var str_time;
        var int_day, int_hour, int_minute, int_second;
        time_distance = this.time_distance;
        this.time_distance = this.time_distance - 1000;
        if (time_distance > 0) {
            int_day = Math.floor(time_distance / 86400000);
            time_distance -= int_day * 86400000;
            int_hour = Math.floor(time_distance / 3600000);
            time_distance -= int_hour * 3600000;
            int_minute = Math.floor(time_distance / 60000);
            time_distance -= int_minute * 60000;
            int_second = Math.floor(time_distance / 1000);
            if (int_hour < 10)
                int_hour = "0" + int_hour;
            if (int_minute < 10)
                int_minute = "0" + int_minute;
            if (int_second < 10)
                int_second = "0" + int_second;
            str_time = "剩余时间:<em class='data-day'>"+int_day + "</em>天<em class='data-hour'>" + int_hour + "</em>小时<em class='data-minute'>" + int_minute + "</em>分钟<em class='data-sec'>" + int_second + "</em>秒";
            timer.html(str_time);
            var self = this;
            setTimeout(function () { self.setTimeShow(); }, 1000); //D:正确
        } else {
            btn_baoming.html("报名结束");
            btn_baoming.prop("class","btn gray dialog");
            timer.text("结束");
            return;
        }
    }
</script>

</head>
<body>
<!--头部-->
<div class="af_head clearfloat">
    <div class="centermar">
        <div class="left"> 
           <a class="left logo" href="<?php  $tagGlobal = new \think\template\taglib\eju\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_cmsurl"); echo $__VALUE__; ?>"><img src="<?php  $tagGlobal = new \think\template\taglib\eju\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_logo"); echo $__VALUE__; ?>" alt="<?php  $tagGlobal = new \think\template\taglib\eju\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_name"); echo $__VALUE__; ?>"></a>
           <div class="city left">
             <a class="left index-address" href="<?php echo $eju['region']['domainurl']; ?>"><?php echo $eju['region']['name']; ?><i class="down"></i></a>
             <div class="cont" >
                 <ul>
                    <i></i>
                    <?php  $row = 60; $tagRegion = new \think\template\taglib\eju\TagRegion; $_result = $tagRegion->getRegion("son", "", "", "", "", "desc", "","","",""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$k = 0;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $field["name"] = text_msubstr($field["name"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $field;$i= intval($key) + 1;$mod = ($i % 2 ); ?>
                     <li class="<?php echo $field['currentstyle']; ?>"><a href="<?php echo $field['domainurl']; ?>" title="<?php echo $field['name']; ?>"><?php echo $field['name']; ?></a></li>
                    <?php ++$e;$k++; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
                 </ul>
             </div>
           </div>
            <ul class="st_city_list clearfloat left">
                <li class="item">
                    <a class="item_a" href="<?php  $tagGlobal = new \think\template\taglib\eju\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_cmsurl"); echo $__VALUE__; ?>">首页</a>
                </li>
                <?php  $typeid = ""; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $row = 60; $tagChannel = new \think\template\taglib\eju\TagChannel; $_result = $tagChannel->getChannel($typeid, "top", "on", "",""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$k=0;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $field["typename"] = text_msubstr($field["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $field;$i= intval($key) + 1;$mod = ($i % 2 ); ?>
                <li class="item <?php echo $field['currentstyle']; ?>">
                    <a href="<?php echo $field['typeurl']; ?>" class="item_a " <?php if(!(empty($field['children']) || (($field['children'] instanceof \think\Collection || $field['children'] instanceof \think\Paginator ) && $field['children']->isEmpty()))): ?>data-toggle="dropdown"<?php endif; ?> data-hover="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php echo $field['typename']; ?>
                    </a>
                    <?php if(!(empty($field['children']) || (($field['children'] instanceof \think\Collection || $field['children'] instanceof \think\Paginator ) && $field['children']->isEmpty()))): ?>
                    <ul class="son">
                        <?php  $typeid = ""; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $row = 100;if(is_array($field['children']) || $field['children'] instanceof \think\Collection || $field['children'] instanceof \think\Paginator): $i = 0; $e = 1;$k=0;$__LIST__ = is_array($field['children']) ? array_slice($field['children'],0,100, true) : $field['children']->slice(0,100, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field2): $field2["typename"] = text_msubstr($field2["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $field2;$i= intval($key) + 1;$mod = ($i % 2 ); ?>
                        <li><a href="<?php echo $field2['typeurl']; ?>" ><?php echo $field2['typename']; ?> </a>
                            <?php if(!(empty($field2['children']) || (($field2['children'] instanceof \think\Collection || $field2['children'] instanceof \think\Paginator ) && $field2['children']->isEmpty()))): ?>
                            <ul class="son">
                                <?php  $typeid = ""; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $row = 100;if(is_array($field2['children']) || $field2['children'] instanceof \think\Collection || $field2['children'] instanceof \think\Paginator): $i = 0; $e = 1;$k=0;$__LIST__ = is_array($field2['children']) ? array_slice($field2['children'],0,100, true) : $field2['children']->slice(0,100, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field3): $field3["typename"] = text_msubstr($field3["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $field3;$i= intval($key) + 1;$mod = ($i % 2 ); ?>
                                <li><a href="<?php echo $field3['typeurl']; ?>"><?php echo $field3['typename']; ?></a></li>
                                <?php ++$e;$k++; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field3 = []; ?>
                            </ul>
                            <?php endif; ?>
                        </li>
                        <?php ++$e;$k++; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field2 = []; ?>
                    </ul>
                    <?php endif; ?>
                </li>
                <?php ++$e;$k++; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
            </ul>
        </div>
        <div class="nav_login right">
            <div class="login_wrap right clearfloat">
                <span class="tel left" href="javascript:;">服务热线：<?php  $tagGlobal = new \think\template\taglib\eju\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_2"); echo $__VALUE__; ?></span>
                <?php  $tagUser = new \think\template\taglib\eju\TagUser; $__LIST__ = $tagUser->getUser("open", "off", "", "", "");if(!empty($__LIST__) || (($__LIST__ instanceof \think\Collection || $__LIST__ instanceof \think\Paginator ) && $__LIST__->isEmpty())): $field = $__LIST__;  $tagUser = new \think\template\taglib\eju\TagUser; $__LIST__ = $tagUser->getUser("login", "off", "", "", "");if(!empty($__LIST__) || (($__LIST__ instanceof \think\Collection || $__LIST__ instanceof \think\Paginator ) && $__LIST__->isEmpty())): $field = $__LIST__; ?>
                <a href="<?php echo $field['url']; ?>" id="<?php echo $field['id']; ?>"  class="right">登录</a>　
                <?php echo $field['hidden']; endif; $field = [];  $tagUser = new \think\template\taglib\eju\TagUser; $__LIST__ = $tagUser->getUser("reg", "off", "", "", "");if(!empty($__LIST__) || (($__LIST__ instanceof \think\Collection || $__LIST__ instanceof \think\Paginator ) && $__LIST__->isEmpty())): $field = $__LIST__; ?>
                <a href="<?php echo $field['url']; ?>" id="<?php echo $field['id']; ?>" class="right">注册</a>
                <?php echo $field['hidden']; endif; $field = [];  $tagUser = new \think\template\taglib\eju\TagUser; $__LIST__ = $tagUser->getUser("logout", "off", "", "", "");if(!empty($__LIST__) || (($__LIST__ instanceof \think\Collection || $__LIST__ instanceof \think\Paginator ) && $__LIST__->isEmpty())): $field = $__LIST__; ?>
                <a href="<?php echo $field['url']; ?>" id="<?php echo $field['id']; ?>" class="right">退出</a>
                <?php echo $field['hidden']; endif; $field = []; endif; $field = []; ?>

            </div>
        </div>
    </div>
</div>
<!--banner-->
<div class="banner">
  <div class="swiper-container">
    <div class="af-banner-wrap">
      <div class="af-top-cont">
        <p class="af-top-cont-text1"> </p>
      </div>
      <div class="af-search">
          <?php  $tagSearchform = new \think\template\taglib\eju\TagSearchform; $_result = $tagSearchform->getSearchform("","9","","","","off"); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$k = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
          <form class="" style="height: 100%;" method="get" action="<?php echo $field['action']; ?>">
              <p>
                  <input type="text" class="s_inp01" name="keywords" value="" id="search_key" placeholder="请输入楼盘名称开始找房...">
                  <button  type="submit" id="search_but" class="but01" style="text-decoration:none;">开始找房</button>
                  <a href="<?php  $tagDiyurl = new \think\template\taglib\eju\TagDiyurl; $__VALUE__ = $tagDiyurl->getDiyurl("map","","0"); echo $__VALUE__; ?>" target="_blank" id="search_but2">地图找房</a>
              </p>
              <?php echo $field['hidden']; ?>
          </form>
          <?php ++$e;$k++; endforeach;endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
        <div class="proposal-box"> </div>
        <div class="clear"> </div>
      </div>
    </div>
    <div class="swiper-wrapper">
        <?php  $tagAdv = new \think\template\taglib\eju\TagAdv; $_result = $tagAdv->getAdv(1, "", "","3"); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$k=0;$__LIST__ = is_array($_result) ? array_slice($_result,0, 3, true) : $_result->slice(0, 3, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field):  if ($i == 0) : $field["currentstyle"] = ""; else:  $field["currentstyle"] = ""; endif;$i= intval($key) + 1;$mod = ($i % 2 ); ?>
        <div class="swiper-slide" style="background: url('<?php echo $field['litpic']; ?>') center center no-repeat"> </div>
        <?php ++$e;$k++; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
    </div>
  </div>
  <!--条件筛选-->
    <div class="filter-box">
        <?php  $tagScreening = new \think\template\taglib\eju\TagScreening; $_result = $tagScreening->getScreening("act2", "province_id,city_id,area_id,average_price,characteristic,manage_type", "", "不限","1","_blank","off","2","2","off","off");if(!empty($_result["list"]) || (($_result["list"] instanceof \think\Collection || $_result["list"] instanceof \think\Paginator ) && $_result["list"]->isEmpty())): $field = $_result; if(is_array($field['list']) || $field['list'] instanceof \think\Collection || $field['list'] instanceof \think\Paginator): $nl = 0; $e = 1;$k=0; $__LIST__ = $field['list'];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$vo): $nl= intval($key) + 1;$mod = ($nl % 2 ); ?>
            <div class="in-box x<?php echo $nl; ?> left">
                <h2><?php echo $vo['title']; ?></h2>
                <ul>
                    <?php if(is_array($vo['dfvalue']) || $vo['dfvalue'] instanceof \think\Collection || $vo['dfvalue'] instanceof \think\Paginator): $i = 0; $e = 1;$k=0; $__LIST__ = $vo['dfvalue'];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$vo2): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
                    <li><a style="cursor: pointer;" <?php echo $vo2['onClick']; ?>  title="<?php echo $vo2['name']; ?>"  class="<?php echo $vo2['currentstyle']; ?>"><?php echo $vo2['name']; ?></a></li>
                    <?php ++$e;$k++; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $vo2 = []; ?>
                </ul>
            </div>
            <?php ++$e;$k++; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $vo = []; ?>
            <?php echo $field['hidden']; endif; $field = []; ?>
    </div>
    <!--条件筛选--end-->
</div><!--banner--end-->
 <!--精选房源-->
<div class="fang-jx">
    <div class="index-tit">
        <p>搜罗优质楼盘</p>
        <?php  $typeid = "1"; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $tagType = new \think\template\taglib\eju\TagType; $_result = $tagType->getType($typeid, "self", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator):  $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("栏目不存在时，显示这里的文案");else: $field = $__LIST__;?>
        <a  class="more" target="_blank" href="<?php echo $field['typeurl']; ?>" title="<?php echo $field['typename']; ?>">查看更多</a>
        <?php endif; else: echo htmlspecialchars_decode("栏目不存在时，显示这里的文案");endif; $field = []; ?>
    </div>
     <a class="prev"></a>
     <a class="next"></a>
    <div class="scrollable">
        <ul class="items">
            <li>
            <?php  $typeid = ""; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $row = 4; $channelid = "9"; $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "h",      "noflag"=> "",      "channel"=> $channelid,      "joinaid"=> "",      "province_id"=> "",      "city_id"=> "",      "area_id"=> "",      "screen"=> "1",      "users_id"=> "", ); $tag = array (
  'channelid' => '9',
  'flag' => 'h',
  'orderby' => 'new',
  'limit' => '0,4',
  'id' => 'field',
); $tagArclist = new \think\template\taglib\eju\TagArclist; $_result = $tagArclist->getArclist($param, $row, "new", "","desc","",$tag,"0","on","",[],[]);if(is_array($_result["list"]) || $_result["list"] instanceof \think\Collection || $_result["list"] instanceof \think\Paginator): $i = 0; $e = 1;$k=0; $__LIST__ = is_array($_result["list"]) ? array_slice($_result["list"],0, $row, true) : $_result["list"]->slice(0, $row, true);  $__TAG__ = $_result["tag"];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$field["title"] = text_msubstr($field["title"], 0, 100, false);$field["seo_description"] = text_msubstr($field["seo_description"], 0, 160, true);$i= intval($key) + 1;$mod = ($i % 2 ); ?>
                <a href="<?php echo $field['arcurl']; ?>" target="_blank">
                    <img src="<?php echo $field['litpic']; ?>" alt="<?php echo $field['title']; ?>">
                    <div class="info-box">
                        <div class="info1">
                            <div class="info1-l left"><?php echo $field['title']; ?></div>
                            <div class="info1-r right"><?php echo get_city_name($field['city_id']); ?></div>
                        </div>
                        <div class="info2">
                            <div class="info2-con"><?php echo $field['title']; ?></div>
                            <p><?php echo $field['average_price']; ?><?php echo $field['price_units']; ?></p>
                        </div>
                    </div>
                </a>
            <?php ++$e;$k++; $aid = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
            </li>
            <li>
            <?php  $typeid = ""; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $row = 8; $channelid = "9"; $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "h",      "noflag"=> "",      "channel"=> $channelid,      "joinaid"=> "",      "province_id"=> "",      "city_id"=> "",      "area_id"=> "",      "screen"=> "1",      "users_id"=> "", ); $tag = array (
  'channelid' => '9',
  'flag' => 'h',
  'orderby' => 'new',
  'limit' => '4,8',
  'id' => 'field',
); $tagArclist = new \think\template\taglib\eju\TagArclist; $_result = $tagArclist->getArclist($param, $row, "new", "","desc","",$tag,"0","on","",[],[]);if(is_array($_result["list"]) || $_result["list"] instanceof \think\Collection || $_result["list"] instanceof \think\Paginator): $i = 0; $e = 1;$k=0; $__LIST__ = is_array($_result["list"]) ? array_slice($_result["list"],4, $row, true) : $_result["list"]->slice(4, $row, true);  $__TAG__ = $_result["tag"];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$field["title"] = text_msubstr($field["title"], 0, 100, false);$field["seo_description"] = text_msubstr($field["seo_description"], 0, 160, true);$i= intval($key) + 1;$mod = ($i % 2 ); ?>
                <a href="<?php echo $field['arcurl']; ?>" target="_blank">
                    <img src="<?php echo $field['litpic']; ?>" alt="<?php echo $field['title']; ?>">
                    <div class="info-box">
                        <div class="info1">
                            <div class="info1-l left"><?php echo $field['title']; ?></div>
                            <div class="info1-r right"><?php echo get_city_name($field['city_id']); ?></div>
                        </div>
                        <div class="info2">
                            <div class="info2-con"><?php echo $field['title']; ?></div>
                            <p><?php echo $field['average_price']; ?><?php echo $field['price_units']; ?></p>
                        </div>
                    </div>
                </a>
            <?php ++$e;$k++; $aid = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
            </li>
        </ul>
    </div>

</div> <!--精选房源--end-->
<!--热销新房-->
<div class="hot-house" style="background-color: #fff">
  <div class="w1200">
      <div  class="index-tit">
          <h2><?php echo $eju['region']['name']; ?>热销房源</h2>
          <p>优质好房 不容错过</p>
          <?php  $typeid = "1"; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $tagType = new \think\template\taglib\eju\TagType; $_result = $tagType->getType($typeid, "self", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator):  $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("栏目不存在时，显示这里的文案");else: $field = $__LIST__;?>
          <a  class="more" target="_blank" href="<?php echo $field['typeurl']; ?>" title="<?php echo $field['typename']; ?>">查看更多</a>
          <?php endif; else: echo htmlspecialchars_decode("栏目不存在时，显示这里的文案");endif; $field = []; ?>
      </div>
     <ul class="hot-list">
         <?php  $typeid = ""; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $row = 4; $channelid = "9"; $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "a",      "noflag"=> "",      "channel"=> $channelid,      "joinaid"=> "",      "province_id"=> "",      "city_id"=> "",      "area_id"=> "",      "screen"=> "1",      "users_id"=> "", ); $tag = array (
  'channelid' => '9',
  'flag' => 'a',
  'orderby' => 'new',
  'row' => '4',
  'id' => 'field',
); $tagArclist = new \think\template\taglib\eju\TagArclist; $_result = $tagArclist->getArclist($param, $row, "new", "","desc","",$tag,"0","on","",[],[]);if(is_array($_result["list"]) || $_result["list"] instanceof \think\Collection || $_result["list"] instanceof \think\Paginator): $i = 0; $e = 1;$k=0; $__LIST__ = is_array($_result["list"]) ? array_slice($_result["list"],0, $row, true) : $_result["list"]->slice(0, $row, true);  $__TAG__ = $_result["tag"];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$field["title"] = text_msubstr($field["title"], 0, 100, false);$field["seo_description"] = text_msubstr($field["seo_description"], 0, 160, true);$i= intval($key) + 1;$mod = ($i % 2 ); ?>
         <li>
             <a class="a1" href="<?php echo $field['arcurl']; ?>" target="_blank">
                 <div class="img">
                     <img src="<?php echo $field['litpic']; ?>" alt="<?php echo $field['title']; ?>">
                     <div class="info-box">
                         <div class="info1">
                             <div class="info1-r right"><?php echo get_city_name($field['city_id']); ?></div>
                         </div>
                         <div class="info2">
                             <div class="info2-con"><?php echo get_city_name($field['city_id']); ?></div>
                         </div>
                     </div>
                 </div>
             </a>
             <div class="txt">
                 <div class="txt-tit">
                     <a href="<?php echo $field['arcurl']; ?>"><?php echo $field['title']; ?></a>
                     <p><?php echo $field['average_price']; ?><?php echo $field['price_units']; ?></p>
                 </div>
                 <div class="add"><?php echo $field['address']; ?></div>
                 <div class="tag">
                     <?php if(is_array($field['characteristic']) || $field['characteristic'] instanceof \think\Collection || $field['characteristic'] instanceof \think\Paginator): $i = 0; $e = 1;$k=0; $__LIST__ = $field['characteristic'];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$vo): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
                     <a href="javascript:;"><?php echo $vo; ?></a>
                     <?php ++$e;$k++; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $vo = []; ?>
                 </div>
             </div>
         </li>
         <?php ++$e;$k++; $aid = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
     </ul>
  </div>
</div><!--热销新房--end-->
<div class="hot-house" style="background-color: #fff">
  <div class="w1200">
      <div  class="index-tit">
          <h2><?php echo $eju['region']['name']; ?>热门小区</h2>
          <p>优质好房 不容错过</p>
          <?php  $typeid = "10"; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $tagType = new \think\template\taglib\eju\TagType; $_result = $tagType->getType($typeid, "self", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator):  $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("栏目不存在时，显示这里的文案");else: $field = $__LIST__;?>
          <a  class="more" target="_blank" href="<?php echo $field['typeurl']; ?>" title="<?php echo $field['typename']; ?>">查看更多</a>
          <?php endif; else: echo htmlspecialchars_decode("栏目不存在时，显示这里的文案");endif; $field = []; ?>
      </div>
     <ul class="hot-list">
         <?php  $typeid = "10"; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $row = 4; $channelid = ""; $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "",      "noflag"=> "",      "channel"=> $channelid,      "joinaid"=> "",      "province_id"=> "",      "city_id"=> "",      "area_id"=> "",      "screen"=> "1",      "users_id"=> "", ); $tag = array (
  'typeid' => '10',
  'orderby' => 'new',
  'row' => '4',
  'id' => 'field',
); $tagArclist = new \think\template\taglib\eju\TagArclist; $_result = $tagArclist->getArclist($param, $row, "new", "","desc","",$tag,"0","on","",[],[]);if(is_array($_result["list"]) || $_result["list"] instanceof \think\Collection || $_result["list"] instanceof \think\Paginator): $i = 0; $e = 1;$k=0; $__LIST__ = is_array($_result["list"]) ? array_slice($_result["list"],0, $row, true) : $_result["list"]->slice(0, $row, true);  $__TAG__ = $_result["tag"];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$field["title"] = text_msubstr($field["title"], 0, 100, false);$field["seo_description"] = text_msubstr($field["seo_description"], 0, 160, true);$i= intval($key) + 1;$mod = ($i % 2 ); ?>
         <li>
             <a class="a1" href="<?php echo $field['arcurl']; ?>" target="_blank">
                 <div class="img">
                     <img src="<?php echo $field['litpic']; ?>" alt="<?php echo $field['title']; ?>">
                     <div class="info-box">
                         <div class="info1">
                             <div class="info1-r right"><?php echo get_city_name($field['city_id']); ?></div>
                         </div>
                         <div class="info2">
                             <div class="info2-con"><?php echo get_city_name($field['city_id']); ?></div>
                         </div>
                     </div>
                 </div>
             </a>
             <div class="txt">
                 <div class="txt-tit">
                     <a href="<?php echo $field['arcurl']; ?>"><?php echo $field['title']; ?></a>
                     <p><?php echo $field['average_price']; ?><?php echo $field['price_units']; ?></p>
                 </div>
                 <div class="add"><?php echo $field['address']; ?></div>
                 <div class="tag">
                     <?php if(is_array($field['characteristic']) || $field['characteristic'] instanceof \think\Collection || $field['characteristic'] instanceof \think\Paginator): $i = 0; $e = 1;$k=0; $__LIST__ = $field['characteristic'];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$vo): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
                     <a href="javascript:;"><?php echo $vo; ?></a>
                     <?php ++$e;$k++; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $vo = []; ?>
                 </div>
             </div>
         </li>
         <?php ++$e;$k++; $aid = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
     </ul>
  </div>
</div>
<div class="hot-house" style="background-color: #fff">
  <div class="w1200">
      <div  class="index-tit">
          <h2><?php echo $eju['region']['name']; ?>热门二手房</h2>
          <p>优质好房 不容错过</p>
          <?php  $typeid = "11"; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $tagType = new \think\template\taglib\eju\TagType; $_result = $tagType->getType($typeid, "self", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator):  $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("栏目不存在时，显示这里的文案");else: $field = $__LIST__;?>
          <a  class="more" target="_blank" href="<?php echo $field['typeurl']; ?>" title="<?php echo $field['typename']; ?>">查看更多</a>
          <?php endif; else: echo htmlspecialchars_decode("栏目不存在时，显示这里的文案");endif; $field = []; ?>
      </div>
     <ul class="hot-list">
         <?php  $typeid = "11"; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $row = 4; $channelid = ""; $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "",      "noflag"=> "",      "channel"=> $channelid,      "joinaid"=> "",      "province_id"=> "",      "city_id"=> "",      "area_id"=> "",      "screen"=> "1",      "users_id"=> "", ); $tag = array (
  'typeid' => '11',
  'orderby' => 'new',
  'row' => '4',
  'id' => 'field',
); $tagArclist = new \think\template\taglib\eju\TagArclist; $_result = $tagArclist->getArclist($param, $row, "new", "","desc","",$tag,"0","on","",[],[]);if(is_array($_result["list"]) || $_result["list"] instanceof \think\Collection || $_result["list"] instanceof \think\Paginator): $i = 0; $e = 1;$k=0; $__LIST__ = is_array($_result["list"]) ? array_slice($_result["list"],0, $row, true) : $_result["list"]->slice(0, $row, true);  $__TAG__ = $_result["tag"];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$field["title"] = text_msubstr($field["title"], 0, 100, false);$field["seo_description"] = text_msubstr($field["seo_description"], 0, 160, true);$i= intval($key) + 1;$mod = ($i % 2 ); ?>
         <li>
             <a class="a1" href="<?php echo $field['arcurl']; ?>" target="_blank">
                 <div class="img">
                     <img src="<?php echo $field['litpic']; ?>" alt="<?php echo $field['title']; ?>">
                     <div class="info-box">
                         <div class="info1">
                             <div class="info1-r right"><?php echo get_city_name($field['city_id']); ?></div>
                         </div>
                         <div class="info2">
                             <div class="info2-con"><?php echo get_city_name($field['city_id']); ?></div>
                         </div>
                     </div>
                 </div>
             </a>
             <div class="txt">
                 <div class="txt-tit">
                     <a href="<?php echo $field['arcurl']; ?>"><?php echo $field['title']; ?></a>
                     <p><?php echo $field['total_price']; ?>万</p>
                 </div>
                 <div class="add"><?php echo $field['address']; ?></div>
                 <div class="tag">
                     <?php if(is_array($field['characteristic']) || $field['characteristic'] instanceof \think\Collection || $field['characteristic'] instanceof \think\Paginator): $i = 0; $e = 1;$k=0; $__LIST__ = $field['characteristic'];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$vo): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
                     <a href="javascript:;"><?php echo $vo; ?></a>
                     <?php ++$e;$k++; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $vo = []; ?>
                 </div>
             </div>
         </li>
         <?php ++$e;$k++; $aid = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
     </ul>
  </div>
</div>
<div class="hot-house" style="background-color: #fff">
  <div class="w1200">
      <div  class="index-tit">
          <h2><?php echo $eju['region']['name']; ?>租房</h2>
          <p>优质好房 不容错过</p>
          <?php  $typeid = "12"; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $tagType = new \think\template\taglib\eju\TagType; $_result = $tagType->getType($typeid, "self", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator):  $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("栏目不存在时，显示这里的文案");else: $field = $__LIST__;?>
          <a  class="more" target="_blank" href="<?php echo $field['typeurl']; ?>" title="<?php echo $field['typename']; ?>">查看更多</a>
          <?php endif; else: echo htmlspecialchars_decode("栏目不存在时，显示这里的文案");endif; $field = []; ?>
      </div>
     <ul class="hot-list">
         <?php  $typeid = "12"; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $row = 4; $channelid = ""; $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "",      "noflag"=> "",      "channel"=> $channelid,      "joinaid"=> "",      "province_id"=> "",      "city_id"=> "",      "area_id"=> "",      "screen"=> "1",      "users_id"=> "", ); $tag = array (
  'typeid' => '12',
  'orderby' => 'new',
  'row' => '4',
  'id' => 'field',
); $tagArclist = new \think\template\taglib\eju\TagArclist; $_result = $tagArclist->getArclist($param, $row, "new", "","desc","",$tag,"0","on","",[],[]);if(is_array($_result["list"]) || $_result["list"] instanceof \think\Collection || $_result["list"] instanceof \think\Paginator): $i = 0; $e = 1;$k=0; $__LIST__ = is_array($_result["list"]) ? array_slice($_result["list"],0, $row, true) : $_result["list"]->slice(0, $row, true);  $__TAG__ = $_result["tag"];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$field["title"] = text_msubstr($field["title"], 0, 100, false);$field["seo_description"] = text_msubstr($field["seo_description"], 0, 160, true);$i= intval($key) + 1;$mod = ($i % 2 ); ?>
         <li>
             <a class="a1" href="<?php echo $field['arcurl']; ?>" target="_blank">
                 <div class="img">
                     <img src="<?php echo $field['litpic']; ?>" alt="<?php echo $field['title']; ?>">
                     <div class="info-box">
                         <div class="info1">
                             <div class="info1-r right"><?php echo get_city_name($field['city_id']); ?></div>
                         </div>
                         <div class="info2">
                             <div class="info2-con"><?php echo get_city_name($field['city_id']); ?></div>
                         </div>
                     </div>
                 </div>
             </a>
             <div class="txt">
                 <div class="txt-tit">
                     <a href="<?php echo $field['arcurl']; ?>"><?php echo $field['title']; ?></a>
                     <p><?php echo $field['total_price']; ?><?php echo $field['price_units']; ?></p>
                 </div>
                 <div class="add"><?php echo $field['address']; ?></div>
                 <div class="tag">
                     <?php if(is_array($field['characteristic']) || $field['characteristic'] instanceof \think\Collection || $field['characteristic'] instanceof \think\Paginator): $i = 0; $e = 1;$k=0; $__LIST__ = $field['characteristic'];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$vo): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
                     <a href="javascript:;"><?php echo $vo; ?></a>
                     <?php ++$e;$k++; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $vo = []; ?>
                 </div>
             </div>
         </li>
         <?php ++$e;$k++; $aid = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
     </ul>
  </div>
</div>
<!--团购热门新房-->
<div class="hot-group" >
  <div class="w1200">
  	<div class="index-tit">
		<h2><?php echo $eju['region']['name']; ?>团购热门新房</h2>
		<p>优质好房 不容错过</p>
        <?php  $typeid = "3"; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $tagType = new \think\template\taglib\eju\TagType; $_result = $tagType->getType($typeid, "self", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator):  $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("栏目不存在时，显示这里的文案");else: $field = $__LIST__;?>
        <a  class="more" target="_blank" href="<?php echo $field['typeurl']; ?>" title="<?php echo $field['typename']; ?>">查看更多</a>
        <?php endif; else: echo htmlspecialchars_decode("栏目不存在时，显示这里的文案");endif; $field = []; ?>
	</div>
 	 <ul class="hot-list">
         <?php  $typeid = "3"; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $row = 4; $channelid = ""; $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "",      "noflag"=> "",      "channel"=> $channelid,      "joinaid"=> "",      "province_id"=> "",      "city_id"=> "",      "area_id"=> "",      "screen"=> "1",      "users_id"=> "", ); $tag = array (
  'typeid' => '3',
  'addfields' => 'apply_num,end_time,description,price',
  'orderby' => 'new',
  'row' => '4',
  'id' => 'field',
); $tagArclist = new \think\template\taglib\eju\TagArclist; $_result = $tagArclist->getArclist($param, $row, "new", "apply_num,end_time,description,price","desc","",$tag,"0","on","",[],[]);if(is_array($_result["list"]) || $_result["list"] instanceof \think\Collection || $_result["list"] instanceof \think\Paginator): $i = 0; $e = 1;$k=0; $__LIST__ = is_array($_result["list"]) ? array_slice($_result["list"],0, $row, true) : $_result["list"]->slice(0, $row, true);  $__TAG__ = $_result["tag"];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$field["title"] = text_msubstr($field["title"], 0, 100, false);$field["seo_description"] = text_msubstr($field["seo_description"], 0, 160, true);$i= intval($key) + 1;$mod = ($i % 2 ); ?>
         <li>
             <a class="a1" href="<?php echo $field['arcurl']; ?>" target="_blank">
                 <div class="img">
                     <img src="<?php echo $field['litpic']; ?>" alt="<?php echo $field['title']; ?>">
                     <p><?php echo $field['description']; ?></p>
                 </div>
             </a>
             <?php  $aid = $field['joinaid']; $tag = array (
  'aid' => '$field.joinaid',
  'id' => 'field2',
  'huxing' => 'off',
  'photo' => 'off',
  'price' => 'off',
); if(!isset($aid) || empty($aid)) : $aid = $field['joinaid']; endif; $tagArcview = new \think\template\taglib\eju\TagArcview; $_result = $tagArcview->getArcview($aid, "",$tag); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator):  $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: $field2 = $__LIST__;?>
             <div class="txt">
                 <div class="title">
                     <a href=""><h3><?php echo $field['title']; ?></h3></a><span>已有<em><?php echo $field['apply_num']; ?></em>人报名</span>
                 </div>
                 <div class="price">
                     <span><?php echo $field['price']; ?><?php echo $field2['price_units']; ?></span>
                     <del>[ <?php echo $field2['average_price']; ?><?php echo $field2['price_units']; ?> ]</del>
                 </div>
                 <div class="time">
                     <span id="lefttime_<?php echo $e; ?>"></span>
                     <?php if($field['end_time'] > time()): ?>
                        <a id="btn_baoming_<?php echo $e; ?>" class="btn red dialog" href="javascript:;" data-url="<?php  $tagDiyurl = new \think\template\taglib\eju\TagDiyurl; $__VALUE__ = $tagDiyurl->getDiyurl("form","","0"); echo $__VALUE__; ?>">立即报名</a>
                     <?php else: ?>
                        <a id="btn_baoming_<?php echo $e; ?>" class="btn gray dialog" href="javascript:;" data-url="<?php  $tagDiyurl = new \think\template\taglib\eju\TagDiyurl; $__VALUE__ = $tagDiyurl->getDiyurl("form","","0"); echo $__VALUE__; ?>">报名结束</a>
                     <?php endif; ?>
                     <script type="text/javascript">
                         var st = new showTime("<?php echo $e; ?>","<?php echo $field['end_time']; ?>");
                         st.setTimeShow();
                     </script>
                 </div>
             </div>
             <?php endif; else: echo htmlspecialchars_decode("");endif; unset($aid); $field2 = []; ?>
         </li>
         <?php ++$e;$k++; $aid = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
 	 </ul>
  </div>
</div><!--团购热门新房--end-->
<!--楼盘资讯-->
<div class="index-news w1200">
    <div  class="index-tit">
        <h2><?php echo $eju['region']['name']; ?>楼盘资讯</h2>
        <p>及时获取有效房产信息</p>
        <?php  $typeid = "2"; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $tagType = new \think\template\taglib\eju\TagType; $_result = $tagType->getType($typeid, "self", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator):  $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("栏目不存在时，显示这里的文案");else: $field = $__LIST__;?>
        <a  class="more" target="_blank" href="<?php echo $field['typeurl']; ?>" title="<?php echo $field['typename']; ?>">查看更多</a>
        <?php endif; else: echo htmlspecialchars_decode("栏目不存在时，显示这里的文案");endif; $field = []; ?>
    </div>
    <div class="news-list">
        <div class="left">
            <ul>
                <?php  $typeid = "2"; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $row = 4; $channelid = ""; $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "",      "noflag"=> "",      "channel"=> $channelid,      "joinaid"=> "",      "province_id"=> "",      "city_id"=> "",      "area_id"=> "",      "screen"=> "1",      "users_id"=> "", ); $tag = array (
  'typeid' => '2',
  'orderby' => 'new',
  'row' => '4',
  'id' => 'field',
); $tagArclist = new \think\template\taglib\eju\TagArclist; $_result = $tagArclist->getArclist($param, $row, "new", "","desc","",$tag,"0","on","",[],[]);if(is_array($_result["list"]) || $_result["list"] instanceof \think\Collection || $_result["list"] instanceof \think\Paginator): $i = 0; $e = 1;$k=0; $__LIST__ = is_array($_result["list"]) ? array_slice($_result["list"],0, $row, true) : $_result["list"]->slice(0, $row, true);  $__TAG__ = $_result["tag"];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$field["title"] = text_msubstr($field["title"], 0, 100, false);$field["seo_description"] = text_msubstr($field["seo_description"], 0, 160, true);$i= intval($key) + 1;$mod = ($i % 2 ); ?>
                <li>
                    <div class="img"><a href="<?php echo $field['arcurl']; ?>" target="_blank">
                        <img src="<?php echo $field['litpic']; ?>" alt="<?php echo $field['title']; ?>"></a>
                    </div>
                    <div class="txt">
                        <h2><a href="<?php echo $field['arcurl']; ?>"><?php echo $field['title']; ?></a></h2>
                        <p><?php echo html_msubstr($field['seo_description'],0,90,true); ?></p>
                        <span><?php echo MyDate('Y-m-d H:i:s',$field['add_time']); ?></span>
                    </div>
                </li>
                <?php ++$e;$k++; $aid = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
            </ul>
        </div>
        <div class="right">
            <div class="tit">
                <a href="javascript:;"><?php echo $eju['region']['name']; ?>本地资讯</a>
            </div>
            <ul>
                <?php  $typeid = "6"; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $row = 6; $channelid = ""; $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "",      "noflag"=> "",      "channel"=> $channelid,      "joinaid"=> "",      "province_id"=> "",      "city_id"=> "",      "area_id"=> "",      "screen"=> "1",      "users_id"=> "", ); $tag = array (
  'typeid' => '6',
  'orderby' => 'new',
  'row' => '6',
  'id' => 'field',
); $tagArclist = new \think\template\taglib\eju\TagArclist; $_result = $tagArclist->getArclist($param, $row, "new", "","desc","",$tag,"0","on","",[],[]);if(is_array($_result["list"]) || $_result["list"] instanceof \think\Collection || $_result["list"] instanceof \think\Paginator): $i = 0; $e = 1;$k=0; $__LIST__ = is_array($_result["list"]) ? array_slice($_result["list"],0, $row, true) : $_result["list"]->slice(0, $row, true);  $__TAG__ = $_result["tag"];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$field["title"] = text_msubstr($field["title"], 0, 100, false);$field["seo_description"] = text_msubstr($field["seo_description"], 0, 160, true);$i= intval($key) + 1;$mod = ($i % 2 ); ?>
                <li>
                    <a href="<?php echo $field['arcurl']; ?>" target="_blank">
                        <img src="<?php echo $field['litpic']; ?>" alt="<?php echo $field['title']; ?>">
                    </a>
                    <div class="txt">
                        <a href="<?php echo $field['arcurl']; ?>" target="_blank"><?php echo $field['title']; ?></a>
                        <span><?php echo MyDate('Y-m-d H:i:s',$field['add_time']); ?></span>
                    </div>
                </li>
                <?php ++$e;$k++; $aid = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
            </ul>
        </div>
    </div>
</div><!--楼盘资讯--end-->
<!--服务特色-->
<div class="hot-house">
  <div class="w1200">
    <ul class="serve">
        <li>
            <img src="<?php  $tagGlobal = new \think\template\taglib\eju\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/images/ico-zhenshi.png" alt="">
            <h2>真实房源</h2>
            <p>100%开发商授权真房源</p>
        </li>
        <li>
            <img src="<?php  $tagGlobal = new \think\template\taglib\eju\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/images/ico-shenli.png" alt="">
            <h2>省力</h2>
            <p>免费接机专送看房</p>
        </li>
        <li>
            <img src="<?php  $tagGlobal = new \think\template\taglib\eju\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/images/ico-shenqian.png" alt="">
            <h2>省钱</h2>
            <p>团购享优惠特价折扣</p>
        </li>
        <li>
            <img src="<?php  $tagGlobal = new \think\template\taglib\eju\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/images/ico-shenshi.png" alt="">
            <h2>省事</h2>
            <p>星级酒店免费住</p>
        </li>
    </ul>
  </div>
</div><!--服务特色--end-->
<!--底部-->
<div class="footer">
    <div class="w1200">
        <!--<div class="f-t fl">-->
        <!--<div class="f-t-l">-->
        <!--<dl>-->
        <!--<dt>所有新房</dt>-->
        <!--<dd><a href="">精选海景</a></dd>-->
        <!--<dd><a href="">特价好房</a></dd>-->
        <!--<dd><a href="">旅游地产</a></dd>-->
        <!--<dd><a href="">精选别墅</a></dd>-->
        <!--</dl>-->
        <!--<dl>-->
        <!--<dt>新闻资讯</dt>-->
        <!--<dd><a href="">优惠信息</a></dd>-->
        <!--<dd><a href="">房产资讯</a></dd>-->
        <!--<dd><a href="">别墅资讯</a></dd>-->
        <!--<dd><a href="">楼盘政策</a></dd>-->
        <!--</dl>-->
        <!--<dl>-->
        <!--<dt>优选区域</dt>-->
        <!--<dd><a href="">三亚新房</a></dd>-->
        <!--<dd><a href="">海口新房</a></dd>-->
        <!--<dd><a href="">陵水新房</a></dd>-->
        <!--</dl>-->
        <!--<dl>-->
        <!--<dt>精选服务</dt>-->
        <!--<dd><a href="">精选服务</a></dd>-->
        <!--<dd><a href="">优选团购</a></dd>-->
        <!--</dl>-->
        <!--</div>-->
        <!--<div class="f-t-r">-->
        <!--<div class="img"><img src="<?php  $tagGlobal = new \think\template\taglib\eju\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/images/wx-code.png" alt=""></div>-->
        <!--<div class="txt">-->
        <!--<span>客服电话 ( 周一周六：9:00-19:00 )</span>-->
        <!--<p>0898-88888888</p>-->
        <!--</div>-->
        <!--</div>-->
        <!--</div>-->
        <div class="f-b fl">
            <div class="link-box clearfloat">
                <ul>
                    <li>友情链接：</li>
                    <?php  $tagFlink = new \think\template\taglib\eju\TagFlink; $_result = $tagFlink->getFlink("all", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$k = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $field["title"] = text_msubstr($field["title"], 0, 30, false); $__LIST__[$key] = $_result[$key] = $field;$i= intval($key) + 1;$mod = ($i % 2 ); ?>
                    <li><a href="<?php echo $field['url']; ?>" title="<?php echo $field['title']; ?>" <?php echo $field['target']; ?>><?php echo $field['title']; ?></a></li>
                    <?php ++$e;$k++; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
                </ul>
            </div>
            <div class="link-box clearfloat">
                <ul>
                    <?php  $typeid = ""; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $row = 60; $tagChannel = new \think\template\taglib\eju\TagChannel; $_result = $tagChannel->getChannel($typeid, "top", "on", "","on"); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$k=0;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $field["typename"] = text_msubstr($field["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $field;$i= intval($key) + 1;$mod = ($i % 2 ); ?>
                    <li class="item"><a href="<?php echo $field['typeurl']; ?>" target="_blank"><?php echo $field['typename']; ?></a></li>
                        <?php if(!(empty($field['children']) || (($field['children'] instanceof \think\Collection || $field['children'] instanceof \think\Paginator ) && $field['children']->isEmpty()))):  $typeid = ""; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $row = 100;if(is_array($field['children']) || $field['children'] instanceof \think\Collection || $field['children'] instanceof \think\Paginator): $i = 0; $e = 1;$k=0;$__LIST__ = is_array($field['children']) ? array_slice($field['children'],0,100, true) : $field['children']->slice(0,100, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field2): $field2["typename"] = text_msubstr($field2["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $field2;$i= intval($key) + 1;$mod = ($i % 2 ); ?>
                            <li><a href="<?php echo $field2['typeurl']; ?>" target="_blank"><?php echo $field2['typename']; ?> </a></li>
                                <?php if(!(empty($field2['children']) || (($field2['children'] instanceof \think\Collection || $field2['children'] instanceof \think\Paginator ) && $field2['children']->isEmpty()))):  $typeid = ""; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $row = 100;if(is_array($field2['children']) || $field2['children'] instanceof \think\Collection || $field2['children'] instanceof \think\Paginator): $i = 0; $e = 1;$k=0;$__LIST__ = is_array($field2['children']) ? array_slice($field2['children'],0,100, true) : $field2['children']->slice(0,100, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field3): $field3["typename"] = text_msubstr($field3["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $field3;$i= intval($key) + 1;$mod = ($i % 2 ); ?>
                                    <li><a href="<?php echo $field3['typeurl']; ?>" target="_blank"><?php echo $field3['typename']; ?></a></li>
                                    <?php ++$e;$k++; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field3 = []; endif; ++$e;$k++; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field2 = []; endif; ++$e;$k++; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
                    <li><a href="<?php  $tagDiyurl = new \think\template\taglib\eju\TagDiyurl; $__VALUE__ = $tagDiyurl->getDiyurl("map","","0"); echo $__VALUE__; ?>" target="_blank">地图看房</a></li>

                </ul>
            </div>
            <div class="link-box clearfloat">
                <ul>
                    <li><?php  $tagGlobal = new \think\template\taglib\eju\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_copyright"); echo $__VALUE__; ?></li>
                    <li><?php  $tagGlobal = new \think\template\taglib\eju\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_recordnum"); echo $__VALUE__; ?></li>
                    <li>服务热线：<?php  $tagGlobal = new \think\template\taglib\eju\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_2"); echo $__VALUE__; ?></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<script>
	/*城市更多*/
	$(function(){
            $(".city").mouseover(function(){
                $(".cont").show(); 
            })
            $(".city").mouseout(function(){
                $(".cont").hide(); 
            })
       })
</script> 
<!--底部--end-->

<?php  $tagStatic = new \think\template\taglib\eju\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/swiper-3.4.2.jquery.min.js","",""); echo $__VALUE__; ?>
<script>
    /*幻灯片*/
    var mySwiper = new Swiper('.swiper-container', {
        direction: 'horizontal',
        loop: true,
        autoplay : 5000
    })
</script>
<?php  $tagStatic = new \think\template\taglib\eju\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/carousel.min.js","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eju\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/layer/layer.min.js","",""); echo $__VALUE__; ?>

<script type="text/javascript">
$(function() {
    $(".detail_slide").thumbnailImg({
        large_elem : ".large_box",
        small_elem : ".small_list",
        left_btn : ".left_btn",
        right_btn : ".right_btn"
    });
    $('.dialog').bind('click',function(){
        var url = $(this).data('url');
        $.layer({
                type: 2,
                shadeClose: true,  
                title: false,  
                closeBtn: [1, true],  
                shade: [0.8, '#000'],  
                border: [0],  
                area: ['500px', '330px'],
                offset: ['165px',''],  
                iframe: {src: url}  
            }); 
    });
});
//shangqiao
function chat(url) {
    //获得窗口的垂直位置
    var iTop = (window.screen.height - 710) / 2;
    //获得窗口的水平位置
    var iLeft = (window.screen.width - 780) / 2;
    window.open(url,"_blank","left="+iLeft+",top="+iTop+",width=780,height=710,toolbar=no,menubar=no,scrollbars=no" );
}
</script>
<script>
    /*头部滚动-隐藏-显示导航*/
//    $(document).ready(function() {
//        $(window).on('scroll', function() {
//            var scrollTop = $(this).scrollTop();
//            if(scrollTop > 40) {
//                $(".af_head").addClass("af_head_sw");
//                $(".af_head a.logo").css("background", "url('<?php  $tagGlobal = new \think\template\taglib\eju\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/images/logo1.png') center 10px no-repeat");
//            } else {
//                $(".af_head").removeClass("af_head_sw");
//                $(".af_head a.logo").css("background", "url('<?php  $tagGlobal = new \think\template\taglib\eju\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/images/logo1.png') center 10px no-repeat");
//            }
//        });
//    });
</script>

</body>
</html>