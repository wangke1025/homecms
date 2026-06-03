<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:38:"./template/default/pc/view_article.htm";i:1570838960;s:64:"/www/wwwroot/ejucms.wingle.com.cn/template/default/pc/header.htm";i:1574817774;s:71:"/www/wwwroot/ejucms.wingle.com.cn/template/default/pc/right_article.htm";i:1570838914;s:64:"/www/wwwroot/ejucms.wingle.com.cn/template/default/pc/footer.htm";i:1570361118;}*/ ?>
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
    <?php  $tagStatic = new \think\template\taglib\eju\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/css/public.css","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eju\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/css/iconfont.css","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eju\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/css/zixun_con.css","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eju\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/css/af_gd_right.css","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eju\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/css/af_head_select.css","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eju\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/css/page.css","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eju\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/jquery.min.1.7.2.js","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eju\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/top_footer.js","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eju\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/content-page.js","",""); echo $__VALUE__; ?>

</head>
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
<!-- 位置 -->
<div class="weizhi">
	<ul>
		<li><a href="javascript:;">你的位置</a>：</li> <li> <?php  $typeid = ""; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $tagPosition = new \think\template\taglib\eju\TagPosition; $__VALUE__ = $tagPosition->getPosition($typeid, "", "crumb"); echo $__VALUE__; ?></li>
		<div class="clear"></div>
	</ul>
</div>
<div class="af-zxcon">
    <div class="af-zxcon-fl left">
        <div class="af-zxcon-title">
            <h2><?php echo $eju['field']['title']; ?></h2>
            <p>来源：<?php echo $eju['field']['come_from']; ?>&nbsp;&nbsp;<?php echo MyDate('Y-m-d H:i:s',$eju['field']['add_time']); ?>&nbsp;&nbsp;作者：<?php echo $eju['field']['author']; ?>&nbsp;&nbsp;浏览：<?php  $tagArcclick = new \think\template\taglib\eju\TagArcclick; $__VALUE__ = $tagArcclick->getArcclick("", ""); echo $__VALUE__; ?></p>
        </div>
        <div class="af-zxcon-wrap">
            <?php echo $eju['field']['content']; ?>

        </div>
        <p class="guanzhu">关注<?php  $tagGlobal = new \think\template\taglib\eju\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_name"); echo $__VALUE__; ?>官方微信，了解各大楼盘最新动态。楼市政策，楼盘优惠信息，房产最新动向快速掌握。 </p>
        <p class="guanzhu"><img src="<?php  $tagGlobal = new \think\template\taglib\eju\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_4"); echo $__VALUE__; ?>" width="200" height="200" /></p>
        <div class="page-box">
            <ul id="page" class="pagination">
            </ul>
        </div>
        <div class="back_area">
            <a class="back_in1" target="_blank" href="/">
                <p><i class="iconfont af-icon-homepage_fill"></i>返回首页</p>
            </a>
            <?php  $typeid = "4"; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $tagType = new \think\template\taglib\eju\TagType; $_result = $tagType->getType($typeid, "self", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator):  $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("栏目不存在时，显示这里的文案");else: $field = $__LIST__;?>
            <a class="back_in2" target="_blank" href="<?php echo $field['typeurl']; ?>">
                <p><i class="iconfont af-icon-sousuo"></i>查看<?php echo $eju['region']['name']; ?>楼盘优惠信息</p>
            </a>
            <?php endif; else: echo htmlspecialchars_decode("栏目不存在时，显示这里的文案");endif; $field = []; ?>
        </div>
        <div class="xgzx">
            <h2>相关资讯</h2>
            <ul>
                <?php  $typeid = ""; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $row = 4; $channelid = ""; $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "",      "noflag"=> "",      "channel"=> $channelid,      "joinaid"=> "",      "province_id"=> "",      "city_id"=> "",      "area_id"=> "",      "screen"=> "1",      "users_id"=> "", ); $tag = array (
  'orderby' => 'click',
  'limit' => '0,4',
  'id' => 'field',
); $tagArclist = new \think\template\taglib\eju\TagArclist; $_result = $tagArclist->getArclist($param, $row, "click", "","desc","",$tag,"0","on","",[],[]);if(is_array($_result["list"]) || $_result["list"] instanceof \think\Collection || $_result["list"] instanceof \think\Paginator): $i = 0; $e = 1;$k=0; $__LIST__ = is_array($_result["list"]) ? array_slice($_result["list"],0, $row, true) : $_result["list"]->slice(0, $row, true);  $__TAG__ = $_result["tag"];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$field["title"] = text_msubstr($field["title"], 0, 100, false);$field["seo_description"] = text_msubstr($field["seo_description"], 0, 160, true);$i= intval($key) + 1;$mod = ($i % 2 ); ?>
                <li class="gdlist-tittle"> <a href="<?php echo $field['arcurl']; ?>">
                    <p><?php echo $field['title']; ?></p>
                    <span class="right">（<?php echo MyDate('m-d',$field['add_time']); ?>）</span></a>
                </li>
                <?php ++$e;$k++; $aid = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
            </ul>
        </div>
    </div>
    <!--right-->
    <?php  $tagStatic = new \think\template\taglib\eju\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/jquery.ajax.form.js","",""); echo $__VALUE__; ?>
    <div class="af-zxlist-fr right">
    <div class="af-zxlist-fr right">
       <!--<div class="right-cate">
       	 <ul>
       	 	<li class="current"><a href="">本地资讯</a></li>
       	 	<li><a href="">楼盘动态</a></li>
       	 	<li><a href="">楼盘导购</a></li>
       	 	<li><a href="">购房指南</a></li>
       	 </ul>
       	
       </div>-->
        <div class="lpagent_bmtel">
            <div class="lpagent_tel"> <span class="tel_num"> 报名参加购房联盟 </span> </div>
            <div class="lpagent_bm">
                <?php  $tagForm = new \think\template\taglib\eju\TagForm; $_result = $tagForm->getForm("1", "", "","",""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$k=0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
                <form method="post" id="<?php echo $field['form_name']; ?>" action="<?php echo $field['action']; ?>" onsubmit="<?php echo $field['submit']; ?>">
                    <div class="bm_wrap">
                        <input type="text" id="<?php echo $field['attr_1']; ?>" name="<?php echo $field['attr_1']; ?>" placeholder="<?php echo $field['itemname_1']; ?>" class="input-text">
                        <p class="bm_text">享受24小时接送机、住宿安排！免费专车看房、惊喜购房优惠！</p>
                    </div>
                    <input type="submit" class="bt_yhbm" value="报名看房" id="yuyue_btn_sub" style="width: 100%">
                    <div class="clear"></div>
                    <?php echo $field['hidden']; ?>
                </form>
                <?php ++$e;$k++; endforeach;endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>

            </div>
            <div class="qr-code"> <img src="<?php  $tagGlobal = new \think\template\taglib\eju\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_attr_4"); echo $__VALUE__; ?>">
                <p>动动手指，扫一扫<br>
                    手机获取楼盘实时动态信息</p>
            </div>
        </div>
        <?php  $typeid = "5"; $row = 10; $tagChannelartlist = new \think\template\taglib\eju\TagChannelartlist; $_result = $tagChannelartlist->getChannelartlist($typeid, "self"); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$k=0;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$channelartlist): $channelartlist["typename"] = text_msubstr($channelartlist["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $channelartlist;$i= intval($key) + 1;$mod = ($i % 2 ); ?>
        <div class="afgd" >
            <div  class="afgd-head">
                <h2><?php  $__VALUE__ = isset($channelartlist["typename"]) ? $channelartlist["typename"] : "变量名不存在"; echo $__VALUE__; ?></h2>
                <a href="<?php  $__VALUE__ = isset($channelartlist["typeurl"]) ? $channelartlist["typeurl"] : "变量名不存在"; echo $__VALUE__; ?>" title="<?php  $__VALUE__ = isset($channelartlist["typename"]) ? $channelartlist["typename"] : "变量名不存在"; echo $__VALUE__; ?>" target="_blank" class="afgd-head-more">更多&gt;&gt;</a>
                <div class="clear"></div>
            </div>

            <ul>
                <?php  $typeid = ""; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $row = 10; $channelid = ""; $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "",      "noflag"=> "",      "channel"=> $channelid,      "joinaid"=> "",      "province_id"=> "",      "city_id"=> "",      "area_id"=> "",      "screen"=> "1",      "users_id"=> "", ); $tag = array (
  'orderby' => 'click',
  'row' => '10',
  'id' => 'field',
); $tagArclist = new \think\template\taglib\eju\TagArclist; $_result = $tagArclist->getArclist($param, $row, "click", "","desc","",$tag,"0","on","",[],[]);if(is_array($_result["list"]) || $_result["list"] instanceof \think\Collection || $_result["list"] instanceof \think\Paginator): $i = 0; $e = 1;$k=0; $__LIST__ = is_array($_result["list"]) ? array_slice($_result["list"],0, $row, true) : $_result["list"]->slice(0, $row, true);  $__TAG__ = $_result["tag"];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$field["title"] = text_msubstr($field["title"], 0, 100, false);$field["seo_description"] = text_msubstr($field["seo_description"], 0, 160, true);$i= intval($key) + 1;$mod = ($i % 2 ); ?>
                <li>
                    <a target="_blank" href="<?php echo $field['arcurl']; ?>" title="<?php echo $field['title']; ?>"><span class="bk"><?php echo $i; ?></span><?php echo $field['title']; ?></a>
                </li>
                <?php ++$e;$k++; $aid = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
            </ul>
        </div>
        <?php ++$e;$k++; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $typeid = $row = ""; unset($channelartlist);  $typeid = "6"; $row = 10; $tagChannelartlist = new \think\template\taglib\eju\TagChannelartlist; $_result = $tagChannelartlist->getChannelartlist($typeid, "self"); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$k=0;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$channelartlist): $channelartlist["typename"] = text_msubstr($channelartlist["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $channelartlist;$i= intval($key) + 1;$mod = ($i % 2 ); ?>
        <div class="zxpm" >
            <div  class="zxpm-head">
                <h2><?php  $__VALUE__ = isset($channelartlist["typename"]) ? $channelartlist["typename"] : "变量名不存在"; echo $__VALUE__; ?></h2>
                <a href="<?php  $__VALUE__ = isset($channelartlist["typeurl"]) ? $channelartlist["typeurl"] : "变量名不存在"; echo $__VALUE__; ?>" title="<?php  $__VALUE__ = isset($channelartlist["typename"]) ? $channelartlist["typename"] : "变量名不存在"; echo $__VALUE__; ?>" target="_blank" class="zxpm-head-more">更多&gt;&gt;</a>
                <div class="clear"></div>
            </div>
            <ul>
                <?php  $typeid = ""; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $row = 10; $channelid = ""; $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "",      "noflag"=> "",      "channel"=> $channelid,      "joinaid"=> "",      "province_id"=> "",      "city_id"=> "",      "area_id"=> "",      "screen"=> "1",      "users_id"=> "", ); $tag = array (
  'orderby' => 'click',
  'row' => '10',
  'id' => 'field',
); $tagArclist = new \think\template\taglib\eju\TagArclist; $_result = $tagArclist->getArclist($param, $row, "click", "","desc","",$tag,"0","on","",[],[]);if(is_array($_result["list"]) || $_result["list"] instanceof \think\Collection || $_result["list"] instanceof \think\Paginator): $i = 0; $e = 1;$k=0; $__LIST__ = is_array($_result["list"]) ? array_slice($_result["list"],0, $row, true) : $_result["list"]->slice(0, $row, true);  $__TAG__ = $_result["tag"];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$field["title"] = text_msubstr($field["title"], 0, 100, false);$field["seo_description"] = text_msubstr($field["seo_description"], 0, 160, true);$i= intval($key) + 1;$mod = ($i % 2 ); if($i == '1'): ?>
                    <li> 
                        <a href="<?php echo $field['arcurl']; ?>" target="_blank">
                            <img src="<?php echo $field['litpic']; ?>" width="94" height="84" class="left" />
                            <div class="newscon right">
                                <p><?php echo $field['title']; ?></p>
                                <span><?php echo MyDate('Y-m-d H:i:s',$field['add_time']); ?></span> 
                            </div>
                        </a>
                        <div class="clear"></div>
                    </li>
                    <?php else: ?>
                    <li>
                        <a target="_blank" href="<?php echo $field['arcurl']; ?>" title="<?php echo $field['title']; ?>"><span class="bk"><?php echo $i; ?></span><?php echo $field['title']; ?></a>
                    </li>
                    <?php endif; ++$e;$k++; $aid = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
            </ul>
        </div>
        <?php ++$e;$k++; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $typeid = $row = ""; unset($channelartlist);  $typeid = "7"; $row = 10; $tagChannelartlist = new \think\template\taglib\eju\TagChannelartlist; $_result = $tagChannelartlist->getChannelartlist($typeid, "self"); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$k=0;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$channelartlist): $channelartlist["typename"] = text_msubstr($channelartlist["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $channelartlist;$i= intval($key) + 1;$mod = ($i % 2 ); ?>
        <div class="zxpm" >
            <div  class="zxpm-head">
                <h2><?php  $__VALUE__ = isset($channelartlist["typename"]) ? $channelartlist["typename"] : "变量名不存在"; echo $__VALUE__; ?></h2>
                <a href="<?php  $__VALUE__ = isset($channelartlist["typeurl"]) ? $channelartlist["typeurl"] : "变量名不存在"; echo $__VALUE__; ?>" title="<?php  $__VALUE__ = isset($channelartlist["typename"]) ? $channelartlist["typename"] : "变量名不存在"; echo $__VALUE__; ?>" target="_blank" class="zxpm-head-more">更多&gt;&gt;</a>
                <div class="clear"></div>
            </div>
            <ul>
                <?php  $typeid = ""; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $row = 10; $channelid = ""; $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "",      "noflag"=> "",      "channel"=> $channelid,      "joinaid"=> "",      "province_id"=> "",      "city_id"=> "",      "area_id"=> "",      "screen"=> "1",      "users_id"=> "", ); $tag = array (
  'orderby' => 'click',
  'row' => '10',
  'id' => 'field',
); $tagArclist = new \think\template\taglib\eju\TagArclist; $_result = $tagArclist->getArclist($param, $row, "click", "","desc","",$tag,"0","on","",[],[]);if(is_array($_result["list"]) || $_result["list"] instanceof \think\Collection || $_result["list"] instanceof \think\Paginator): $i = 0; $e = 1;$k=0; $__LIST__ = is_array($_result["list"]) ? array_slice($_result["list"],0, $row, true) : $_result["list"]->slice(0, $row, true);  $__TAG__ = $_result["tag"];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$field["title"] = text_msubstr($field["title"], 0, 100, false);$field["seo_description"] = text_msubstr($field["seo_description"], 0, 160, true);$i= intval($key) + 1;$mod = ($i % 2 ); if($i == '1'): ?>
                    <li> 
                        <a href="<?php echo $field['arcurl']; ?>" target="_blank">
                            <img src="<?php echo $field['litpic']; ?>" width="94" height="84" class="left" />
                            <div class="newscon right">
                                <p><?php echo $field['title']; ?></p>
                                <span><?php echo MyDate('Y-m-d H:i:s',$field['add_time']); ?></span> 
                            </div>
                        </a>
                        <div class="clear"></div>
                    </li>
                    <?php else: ?>
                    <li>
                        <a target="_blank" href="<?php echo $field['arcurl']; ?>" title="<?php echo $field['title']; ?>"><span class="bk"><?php echo $i; ?></span><?php echo $field['title']; ?></a>
                    </li>
                    <?php endif; ++$e;$k++; $aid = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
            </ul>
        </div>
        <?php ++$e;$k++; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $typeid = $row = ""; unset($channelartlist); ?>
        <div class="hotlp">
            <div  class="hotlp-head">
                <h2>热门楼盘</h2>
                <?php  $typeid = "1"; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $tagType = new \think\template\taglib\eju\TagType; $_result = $tagType->getType($typeid, "self", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator):  $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: $field = $__LIST__;?>
                <a href="<?php echo $field['typeurl']; ?>" title="<?php echo $field['typename']; ?>" target="_blank" class="zxpm-head-more">更多&gt;&gt;</a>
                <?php endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
                <div class="clear"></div>
            </div>

            <ul>
                <?php  $typeid = ""; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $row = 4; $channelid = "9"; $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "h",      "noflag"=> "",      "channel"=> $channelid,      "joinaid"=> "",      "province_id"=> "",      "city_id"=> "",      "area_id"=> "",      "screen"=> "1",      "users_id"=> "", ); $tag = array (
  'channelid' => '9',
  'flag' => 'h',
  'orderby' => 'new',
  'row' => '4',
  'id' => 'field',
); $tagArclist = new \think\template\taglib\eju\TagArclist; $_result = $tagArclist->getArclist($param, $row, "new", "","desc","",$tag,"0","on","",[],[]);if(is_array($_result["list"]) || $_result["list"] instanceof \think\Collection || $_result["list"] instanceof \think\Paginator): $i = 0; $e = 1;$k=0; $__LIST__ = is_array($_result["list"]) ? array_slice($_result["list"],0, $row, true) : $_result["list"]->slice(0, $row, true);  $__TAG__ = $_result["tag"];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$field["title"] = text_msubstr($field["title"], 0, 100, false);$field["seo_description"] = text_msubstr($field["seo_description"], 0, 160, true);$i= intval($key) + 1;$mod = ($i % 2 ); ?>
                <li>
                    <a href="<?php echo $field['arcurl']; ?>" target="_blank">
                        <em class="right">
                            <span class="jg"><?php echo $field['average_price']; ?></span><?php echo $field['price_units']; ?>
                        </em>
                        <span class="bk"><?php echo $i; ?></span><?php echo $field['title']; ?>
                    </a>
                </li>
                <?php ++$e;$k++; $aid = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
            </ul>
        </div>
    </div>
</div>
<style>
    .bm_wrap  .input-text {
        padding: 8px 10px;
        width: 264px;
        border-radius: 5px;
        border: 1px solid #ddd;
        font-size: 15px;
        background: #fff5e7;
        margin-bottom: 10px;
    }
</style>
    <div class="clear"></div>
</div>
<!--底部-->
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
<!--底部--end-->
</body>
</html>