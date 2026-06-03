<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:39:"./template/default/pc/lists_xinfang.htm";i:1577318160;s:64:"/www/wwwroot/ejucms.wingle.com.cn/template/default/pc/header.htm";i:1574817774;s:64:"/www/wwwroot/ejucms.wingle.com.cn/template/default/pc/footer.htm";i:1570361118;}*/ ?>
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <title><?php echo $eju['field']['seo_title']; ?></title>
  <meta name="renderer" content="webkit" />
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=0,minimal-ui" />
  <meta name="description" content="<?php echo $eju['field']['seo_description']; ?>" />
  <meta name="keywords" content="<?php echo $eju['field']['seo_keywords']; ?>" />
  <link href="<?php  $tagGlobal = new \think\template\taglib\eju\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_cmspath"); echo $__VALUE__; ?>/favicon.ico" rel="shortcut icon" type="image/x-icon" />
  <?php  $tagStatic = new \think\template\taglib\eju\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/css/public.css","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eju\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/css/iconfont.css","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eju\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/css/lplist.css","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eju\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/css/sx.css","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eju\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/jquery.min.1.7.2.js","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eju\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/top_footer.js","",""); echo $__VALUE__; ?>
</head>
<style>
  .af-search input#search_but {
  	width: 175px;
  	height: 42px;
  	line-height: 42px;
  	text-align: center;
  	font-size: 22px;
  	display: block;
  	background: #00aeef;
  	float: left;
  	border-radius: 0 4px 4px 0;
  	color: #fff;
  }
  .active {
  	color: #ee4433;
  }
</style>
<body>
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

<div class="weizhi">
	<ul>
		<li><a href="javascript:;">你的位置</a>：</li> <li> <?php  $typeid = ""; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $tagPosition = new \think\template\taglib\eju\TagPosition; $__VALUE__ = $tagPosition->getPosition($typeid, "", "crumb"); echo $__VALUE__; ?></li>
		<div class="clear"></div>
	</ul>
</div>
<!--广告位-->
<div class="lpdaogou_lsx_wrap " id="ludedcddtop">
  <div class="daogou_pic_lsx">
    <ul>
      <?php  $tagAdv = new \think\template\taglib\eju\TagAdv; $_result = $tagAdv->getAdv(2, "", "","5"); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$k=0;$__LIST__ = is_array($_result) ? array_slice($_result,0, 5, true) : $_result->slice(0, 5, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field):  if ($i == 0) : $field["currentstyle"] = "on"; else:  $field["currentstyle"] = ""; endif;$i= intval($key) + 1;$mod = ($i % 2 ); ?>
      <li <?php if($mod == '0'): ?>class="mar_lr"<?php endif; ?>> 
        <a target="_blank" href="<?php echo $field['links']; ?>" title="<?php echo $field['title']; ?>"> <img src="<?php echo $field['litpic']; ?>" width="224" height="305" alt="<?php echo $field['title']; ?>"> </a> 
      </li>
      <?php ++$e;$k++; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
      <div class="clear"></div>
    </ul>
  </div>
</div>
<!--筛选-->

<ul class="select">
  <div class="select_search" >
    <span>
    <?php  $tagSearchform = new \think\template\taglib\eju\TagSearchform; $_result = $tagSearchform->getSearchform("","9","","","","off"); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$k = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
      <form method="get" action="<?php echo $field['action']; ?>">
        <input id="search_key" class="txt tschtext" type="text" name="keywords" value="<?php echo \think\Request::instance()->param('keywords'); ?>" placeholder="请输入楼盘名称开始找房..." class="search-inp" />
        <input type="submit"  id="search_but" class="tschbtn2" value="开始找房" id="submitss">
        <?php echo $field['hidden']; ?>
      </form>
    <?php ++$e;$k++; endforeach;endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?> 
    </span>
    <a target="_blank" href="<?php  $tagDiyurl = new \think\template\taglib\eju\TagDiyurl; $__VALUE__ = $tagDiyurl->getDiyurl("map","","0"); echo $__VALUE__; ?>" id="search_but2" class="but01">地图找房</a>
  </div>

  <?php  $tagScreening = new \think\template\taglib\eju\TagScreening; $_result = $tagScreening->getScreening("select-all selected", "", "", "不限","","","on","2","2","off","off");if(!empty($_result["list"]) || (($_result["list"] instanceof \think\Collection || $_result["list"] instanceof \think\Paginator ) && $_result["list"]->isEmpty())): $field = $_result; if(is_array($field['list']) || $field['list'] instanceof \think\Collection || $field['list'] instanceof \think\Paginator): $i = 0; $e = 1;$k=0; $__LIST__ = $field['list'];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$vo): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
    <li class="select-list">
      <dl id="">
        <dt><?php echo $vo['title']; ?> ：</dt>
        <?php if(is_array($vo['dfvalue']) || $vo['dfvalue'] instanceof \think\Collection || $vo['dfvalue'] instanceof \think\Paginator): $i = 0; $e = 1;$k=0; $__LIST__ = $vo['dfvalue'];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$vo2): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
        <dd class="<?php echo $vo2['currentstyle']; ?>"><a <?php echo $vo2['onClick']; ?>><?php echo $vo2['name']; ?></a></dd>
        <?php ++$e;$k++; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $vo2 = []; ?>
      </dl>
    </li>
    <?php ++$e;$k++; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $vo = []; ?>
    <li class="select-result">
      <dl>
        <dt>已选：</dt>
        <?php if(is_array($field['list']) || $field['list'] instanceof \think\Collection || $field['list'] instanceof \think\Paginator): $i = 0; $e = 1;$k=0; $__LIST__ = $field['list'];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$vo): $i= intval($key) + 1;$mod = ($i % 2 ); if(!(empty($vo['onName']) || (($vo['onName'] instanceof \think\Collection || $vo['onName'] instanceof \think\Paginator ) && $vo['onName']->isEmpty()))): ?>
          <dd class="select-no selected"><a <?php echo $vo['handle']; ?>><?php echo $vo['onName']; ?></a> </dd>
          <?php endif; ++$e;$k++; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $vo = []; ?>
        <dd><a style="display: none;" href="<?php echo $field['resetUrl']; ?>" id="emptySearch" class="emptySearch" title="清空全部">清空全部</a></dd>
      </dl>
    </li>
    <?php echo $field['hidden']; endif; $field = []; ?>
</ul>
<!--排序-->
<div class="af-px">
  <div class="af-px-left">
    <ul>
      <li class="js-tabtoggle tab" toggle="0"><i class="iconfont af-icon-sort"></i>全部楼盘(<i id="countlist"></i>个)</li>
      <li class="js-tabtoggle" toggle="1"><i class="iconfont af-icon-appstore"></i>户型图模式</li>
    </ul>
  </div>
  <div class="af-px-right"> 
    <?php  $TagOrderlist = new \think\template\taglib\eju\TagOrderlist; $_result = $TagOrderlist->getOrderList("active","","iconfont af-icon-tabshouqi","iconfont af-icon-tabxiala", "average_price", "", "默认排序","");if(!empty($_result["list"]) || (($_result["list"] instanceof \think\Collection || $_result["list"] instanceof \think\Paginator ) && $_result["list"]->isEmpty())): $field = $_result; if(is_array($field['list']) || $field['list'] instanceof \think\Collection || $field['list'] instanceof \think\Paginator): $i = 0; $e = 1;$k=0; $__LIST__ = $field['list'];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$vo): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
        <div class="rr a-moren"> <a href="javascript:;" <?php echo $vo['onClick']; ?> class="<?php echo $vo['currentstyle']; ?>"> <span class="item"><?php echo $vo['title']; if(!(empty($vo['classstyle']) || (($vo['classstyle'] instanceof \think\Collection || $vo['classstyle'] instanceof \think\Paginator ) && $vo['classstyle']->isEmpty()))): ?> <i class="<?php echo $vo['classstyle']; ?>"></i> <?php endif; ?> </span> </a> </div>
      <?php ++$e;$k++; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $vo = []; ?>
      <?php echo $field['hidden']; endif; $field = []; ?> 
  </div>
  <div class="clear"></div>
</div>

<!--列表-->
<div class="af-xf-list">
  <ul>
    <?php  $typeid = "";  if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "",      "noflag"=> "",      "channel"=> "",      "joinaid"=> "",      "users_id"=> "", ); $tagList = new \think\template\taglib\eju\TagList; $_result_tmp = $tagList->getList($param, 10, "new", "", "desc", "on");if(is_array($_result_tmp) || $_result_tmp instanceof \think\Collection || $_result_tmp instanceof \think\Paginator): $i = 0; $e = 1;$k = 0; $__LIST__ = $_result = $_result_tmp["list"]; $__PAGES__ = $_result_tmp["pages"]; $__COUNT__ = $_result_tmp["count"];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$field["title"] = text_msubstr($field["title"], 0, 30, false);$field["seo_description"] = text_msubstr($field["seo_description"], 0, 160, true);$i= intval($key) + 1;$mod = ($i % 2 ); ?>
    <li class="list-lp">
      <div class="af-xf-img"> 
        <a href="<?php echo $field['arcurl']; ?>" target="_blank" title="<?php echo $field['title']; ?>"><img src="<?php echo $field['litpic']; ?>" alt="<?php echo $field['title']; ?>" width="260" height="190" /></a> 
      </div>
      <div class="af-xf-wrap">
        <div class="af-xfname"> 
          <a href="<?php echo $field['arcurl']; ?>" target="_blank"><?php echo $field['title']; ?></a> 
          <span><?php echo $field['sale_status']; ?></span>
          <div class="clear"></div>
        </div>
        <p class="af-xf-dz"> 
          <span>[<?php echo get_province_name($field['province_id']); ?>-<?php echo get_city_name($field['city_id']); ?>]</span><?php echo $field['address']; ?> 
        </p>
        <p class="af-xf-dz"> 
          <span>户型：</span>
          <?php  $aid = $field['aid']; $tag = array (
  'aid' => '$field.aid',
  'huxing' => 'on',
  'id' => 'view',
  'photo' => 'off',
  'price' => 'off',
); if(!isset($aid) || empty($aid)) : $aid = $field['aid']; endif; $tagArcview = new \think\template\taglib\eju\TagArcview; $_result = $tagArcview->getArcview($aid, "",$tag); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator):  $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: $view = $__LIST__;if(is_array($view['huxing_list']) || $view['huxing_list'] instanceof \think\Collection || $view['huxing_list'] instanceof \think\Paginator): $i = 0; $e = 1;$k=0; $__LIST__ = $view['huxing_list'];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$vo): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
              <a target="_blank" title="<?php echo $vo['huxing_title']; ?>" href="<?php echo $field['arcurl']; ?>"><?php echo $vo['huxing_room']; ?>室(建面<?php echo $vo['huxing_area']; ?>㎡)</a>&nbsp;
            <?php ++$e;$k++; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $vo = []; endif; else: echo htmlspecialchars_decode("");endif; unset($aid); $view = []; ?>
        </p>
        <p class="af-xf-tese"> 
          <?php if(is_array($field['characteristic']) || $field['characteristic'] instanceof \think\Collection || $field['characteristic'] instanceof \think\Paginator): $i = 0; $e = 1;$k=0; $__LIST__ = $field['characteristic'];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$vo): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
            <span id="c_2"><?php echo $vo; ?></span> 
          <?php ++$e;$k++; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $vo = []; ?> </p>
        <p class="af-xf-dtell">
          <a target="_blank" href="<?php echo $field['mapurl']; ?>">
            <span> <i class="iconfont af-icon-locationfill"></i>查看地图 </span>
          </a>
          <span>
            <i class="iconfont af-icon-dianhuatianchong"></i>
            <?php echo $field['sale_phone']; if(!(empty($field['phone_code']) || (($field['phone_code'] instanceof \think\Collection || $field['phone_code'] instanceof \think\Paginator ) && $field['phone_code']->isEmpty()))): ?> 转 <?php echo $field['phone_code']; endif; ?>
          </span>
        </p>
      </div>
      <div class="af-xf-jg">
        <p class="xfjg"> <span class="xfjg-red"><em>均价</em><?php if(!(empty($field['average_price']) || (($field['average_price'] instanceof \think\Collection || $field['average_price'] instanceof \think\Paginator ) && $field['average_price']->isEmpty()))): ?><?php echo $field['average_price']; else: ?>暂无<?php endif; ?></span><?php if(!(empty($field['average_price']) || (($field['average_price'] instanceof \think\Collection || $field['average_price'] instanceof \think\Paginator ) && $field['average_price']->isEmpty()))): ?><?php echo $field['price_units']; endif; ?> </p>
      </div>
      <div class="clear"></div>
      <div class="af-xf-hx js-frames">
        <div id="pic_list_1" class="scroll_horizontal">
          <div class="box">
            <ul class="list">
              <?php  $aid = $field['aid']; $tag = array (
  'aid' => '$field.aid',
  'huxing' => 'on',
  'id' => 'view',
  'photo' => 'off',
  'price' => 'off',
); if(!isset($aid) || empty($aid)) : $aid = $field['aid']; endif; $tagArcview = new \think\template\taglib\eju\TagArcview; $_result = $tagArcview->getArcview($aid, "",$tag); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator):  $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: $view = $__LIST__;if(is_array($view['huxing_list']) || $view['huxing_list'] instanceof \think\Collection || $view['huxing_list'] instanceof \think\Paginator): $i = 0; $e = 1;$k=0; $__LIST__ = $view['huxing_list'];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$vo): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
                  <li> 
                    <a href="javascript:;"><img src="<?php echo $vo['huxing_pic']; ?>">
                    <div class="title"><?php echo $vo['huxing_title']; ?>：<?php echo $vo['huxing_room']; ?>室<?php echo $vo['huxing_living_room']; ?>厅<?php echo $vo['huxing_kitchen']; ?>厨<?php echo $vo['huxing_toilet']; ?>卫 (<?php echo $vo['huxing_area']; ?>㎡)</div>
                    <div class="xfhx-mask"></div>
                    </a> 
                  </li>
                <?php ++$e;$k++; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $vo = []; endif; else: echo htmlspecialchars_decode("");endif; unset($aid); $view = []; ?>
            </ul>
          </div>
        </div>
      </div>
    </li>
    <?php ++$e;$k++; $aid = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
  </ul>
</div>
<div style="display: none" id="countlist_none" data-count=" <?php  $__COUNT__ = isset($__COUNT__) ? $__COUNT__ : ""; echo $__COUNT__; ?>"></div>
<script  type="text/javascript">
  $(function(){
      var count = $("#countlist_none").data("count");
      $("#countlist").html(count);
  });
</script>
<!--页码-->
<div class="page-box">
  <ul class="pagination">
     <?php  $__PAGES__ = isset($__PAGES__) ? $__PAGES__ : ""; $tagPagelist = new \think\template\taglib\eju\TagPagelist; $__VALUE__ = $tagPagelist->getPagelist($__PAGES__, "index,end,pageno,pre,next", "10"); echo $__VALUE__; ?>
  </ul>
</div>
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
<?php  $tagStatic = new \think\template\taglib\eju\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/jquery.cxscroll.min.js","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eju\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/sx.js","",""); echo $__VALUE__; ?>
<script type="text/javascript">
    $(function(){
        if($(".select-no").length > 0) {
            $("#emptySearch").show();
        }
    });
    $(".scroll_horizontal").cxScroll({
        auto : false
    });
</script>
</body>
</html>