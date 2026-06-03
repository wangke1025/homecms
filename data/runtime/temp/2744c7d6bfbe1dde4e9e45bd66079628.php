<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:41:"./template/default/mobile/view_ershou.htm";i:1586913228;s:68:"/www/wwwroot/ejucms.wingle.com.cn/template/default/mobile/header.htm";i:1573633356;}*/ ?>
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
    <?php  $tagStatic = new \think\template\taglib\eju\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/css/iconfont.css","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eju\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/css/amazeui.min.css","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eju\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/css/aflist.css","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eju\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/css/mobile2.css","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eju\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/jquery.min.js","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eju\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/amazeui.min.js","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eju\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/iscroll.js","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eju\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/swiper-3.4.2.jquery.min.js","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eju\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/amazeui.lazyload.min.js","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eju\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/layer/layer.min.js","",""); echo $__VALUE__; ?>
</head>
<style>
    .input-text{
        border: 1px #CCC solid;
        font-size: 1.45rem;
        float: left;
        width: 100%;
        margin-top: 1.2rem;
        margin-bottom: 1.2rem;
        border-radius: 5px;
        line-height: 3rem;
        height: 3rem;
        padding: 5px;
    }
</style>
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

<div data-am-widget="slider" class="detail-banner am-slider am-slider-a1" data-am-slider='{"directionNav":false,"controlNav":false}'
     style="margin-top: 0;">
    <ul class="am-slides">
        <?php if(is_array($eju['field']['photo_list']) || $eju['field']['photo_list'] instanceof \think\Collection || $eju['field']['photo_list'] instanceof \think\Paginator): $i = 0; $e = 1;$k=0; $__LIST__ = $eju['field']['photo_list'];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$vo): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
        <li class="newhouse-banner">
            <a href="javascript:;">
                <img src="<?php echo $vo['photo_pic']; ?>">
            </a>
            <div class="pet_slider_shadow"></div>
        </li>
        <?php ++$e;$k++; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $vo = []; ?>
    </ul>
</div>
<div class="lp-detail-intr">
    <h2><?php echo $eju['field']['title']; ?></h2>
    <ul>
        <li>
            <span class="intr-title-jg">
            <em> <?php echo $eju['field']['total_price']; ?><?php echo $eju['field']['total_price_unit']; ?></em>
            <a class="jj_callme" data-text="价格变动第一时间通知您。" href="#" data-am-modal="{target:'#af-user-yy'}">
                (<i class="iconfont icon-jiangjia"></i>降价通知)</a>
            </span>
        </li>
        <li><span>小区：</span> <?php if(!(empty($eju['field']['xiaoqu']['title']) || (($eju['field']['xiaoqu']['title'] instanceof \think\Collection || $eju['field']['xiaoqu']['title'] instanceof \think\Paginator ) && $eju['field']['xiaoqu']['title']->isEmpty()))): ?><?php echo $eju['field']['xiaoqu']['title']; else: ?>暂无数据<?php endif; ?> </li>
        <li><span>地址：</span><?php echo $eju['field']['address']; ?></li>

    </ul>
    <div class="agent_info">
        <?php if(!(empty($eju['field']['saleman']) || (($eju['field']['saleman'] instanceof \think\Collection || $eju['field']['saleman'] instanceof \think\Paginator ) && $eju['field']['saleman']->isEmpty()))): ?>
        <span><img src="<?php echo $eju['field']['saleman']['saleman_pic']; ?>" width="40" height="40" alt="<?php echo $eju['field']['saleman']['saleman_name']; ?>"></span>
        <?php else: ?>
        <span><img src="<?php  $tagGlobal = new \think\template\taglib\eju\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/images/bag-imgB.jpg" width="40" height="40" alt="头像"></span>
        <?php endif; ?>
        <?php echo $eju['field']['sale_name']; ?>
        <span><a href="tel:<?php echo $eju['field']['sale_phone']; ?>"><?php echo $eju['field']['sale_phone']; if(!(empty($eju['field']['phone_code']) || (($eju['field']['phone_code'] instanceof \think\Collection || $eju['field']['phone_code'] instanceof \think\Paginator ) && $eju['field']['phone_code']->isEmpty()))): ?>转<?php echo $eju['field']['phone_code']; endif; ?></a></span>
        <a class="tg_jj" data-text="24小时接送机，住宿安排，专车看房，全程免费" data-am-modal="{target:'#af-user-yy'}" href="#">预约看房</a>
    </div>
</div>
<div class="lp-detail-info">
    <h3> <a href="#" class="af-head"> <span class="left">房源概况</span>
        <div class="clear"></div>
    </a> </h3>
    <ul class="detail-info-list2 ">
        <li> <span>
						<lable>房屋户型：</lable><?php echo $eju['field']['room']; ?>室<?php echo $eju['field']['living_room']; ?>厅<?php echo $eju['field']['toilet']; ?>卫
					</span><span>
						<lable>产权年限：</lable><?php if(!(empty($eju['field']['property']) || (($eju['field']['property'] instanceof \think\Collection || $eju['field']['property'] instanceof \think\Paginator ) && $eju['field']['property']->isEmpty()))): ?><?php echo $eju['field']['property']; ?><?php echo $eju['field']['property_unit']; else: ?>暂无数据<?php endif; ?>
					</span></li>
        <li> <span>
						<lable>建筑面积：</lable><?php if(!(empty($eju['field']['area']) || (($eju['field']['area'] instanceof \think\Collection || $eju['field']['area'] instanceof \think\Paginator ) && $eju['field']['area']->isEmpty()))): ?><?php echo $eju['field']['area']; ?><?php echo $eju['field']['area_unit']; else: ?>暂无数据<?php endif; ?>
					</span><span>
						<lable>绿化率：</lable><?php if(!(empty($eju['field']['xiaoqu']['greening_rate']) || (($eju['field']['xiaoqu']['greening_rate'] instanceof \think\Collection || $eju['field']['xiaoqu']['greening_rate'] instanceof \think\Paginator ) && $eju['field']['xiaoqu']['greening_rate']->isEmpty()))): ?><?php echo $eju['field']['xiaoqu']['greening_rate']; ?><?php echo $eju['field']['xiaoqu']['greening_rate_unit']; else: ?>暂无数据<?php endif; ?>
					</span></li>
        <li> <span>
						<lable>容积率：</lable><?php if(!(empty($eju['field']['xiaoqu']['plot_ratio']) || (($eju['field']['xiaoqu']['plot_ratio'] instanceof \think\Collection || $eju['field']['xiaoqu']['plot_ratio'] instanceof \think\Paginator ) && $eju['field']['xiaoqu']['plot_ratio']->isEmpty()))): ?><?php echo $eju['field']['xiaoqu']['plot_ratio']; ?><?php echo $eju['field']['xiaoqu']['plot_ratio_unit']; else: ?>暂无数据<?php endif; ?>
					</span><span>
						<lable>停车位：</lable><?php if(!(empty($eju['field']['xiaoqu']['carport']) || (($eju['field']['xiaoqu']['carport'] instanceof \think\Collection || $eju['field']['xiaoqu']['carport'] instanceof \think\Paginator ) && $eju['field']['xiaoqu']['carport']->isEmpty()))): ?><?php echo $eju['field']['xiaoqu']['carport']; ?><?php echo $eju['field']['xiaoqu']['carport_unit']; else: ?>暂无数据<?php endif; ?>
					</span></li>
        <li> <span>
						<lable>小区户数：</lable><?php if(!(empty($eju['field']['xiaoqu']['households']) || (($eju['field']['xiaoqu']['households'] instanceof \think\Collection || $eju['field']['xiaoqu']['households'] instanceof \think\Paginator ) && $eju['field']['xiaoqu']['households']->isEmpty()))): ?><?php echo $eju['field']['xiaoqu']['households']; ?><?php echo $eju['field']['xiaoqu']['households_unit']; else: ?>暂无数据<?php endif; ?>
					</span><span>
						<lable>物业费：</lable><?php if(!(empty($eju['field']['xiaoqu']['property_fee']) || (($eju['field']['xiaoqu']['property_fee'] instanceof \think\Collection || $eju['field']['xiaoqu']['property_fee'] instanceof \think\Paginator ) && $eju['field']['xiaoqu']['property_fee']->isEmpty()))): ?><?php echo $eju['field']['xiaoqu']['property_fee']; ?><?php echo $eju['field']['xiaoqu']['property_fee_unit']; else: ?>暂无数据<?php endif; ?>
					</span></li>
        <li> <span>
						<lable>建造年代：</lable><?php if(!(empty($eju['field']['building_age']) || (($eju['field']['building_age'] instanceof \think\Collection || $eju['field']['building_age'] instanceof \think\Paginator ) && $eju['field']['building_age']->isEmpty()))): ?><?php echo $eju['field']['building_age']; ?><?php echo $eju['field']['building_age_unit']; else: ?>暂无数据<?php endif; ?>
					</span><span>
						<lable>物业类型：</lable><?php if(!(empty($eju['field']['manage_type']) || (($eju['field']['manage_type'] instanceof \think\Collection || $eju['field']['manage_type'] instanceof \think\Paginator ) && $eju['field']['manage_type']->isEmpty()))): ?><?php echo $eju['field']['manage_type']; ?><?php echo $eju['field']['manage_type_unit']; else: ?>暂无数据<?php endif; ?>
					</span> </li>
        <li>
            <lable>开发商：</lable><?php if(!(empty($eju['field']['xiaoqu']['developer']) || (($eju['field']['xiaoqu']['developer'] instanceof \think\Collection || $eju['field']['xiaoqu']['developer'] instanceof \think\Paginator ) && $eju['field']['xiaoqu']['developer']->isEmpty()))): ?><?php echo $eju['field']['xiaoqu']['developer']; else: ?>暂无数据<?php endif; ?>
        </li>
        <li>
            <lable>物业公司:</lable><?php if(!(empty($eju['field']['xiaoqu']['manage_company']) || (($eju['field']['xiaoqu']['manage_company'] instanceof \think\Collection || $eju['field']['xiaoqu']['manage_company'] instanceof \think\Paginator ) && $eju['field']['xiaoqu']['manage_company']->isEmpty()))): ?><?php echo $eju['field']['xiaoqu']['manage_company']; else: ?>暂无数据<?php endif; ?>
        </li>

    </ul>
</div>
<div class="lp-detail-info">
    <h3> <a href="javascript:;" class="af-head"> <span class="left">房屋配套</span>
        <div class="clear"></div>
    </a> </h3>
    <ul class="house-confi-point2">
        <?php if(is_array($eju['field']['supporting']) || $eju['field']['supporting'] instanceof \think\Collection || $eju['field']['supporting'] instanceof \think\Paginator): $i = 0; $e = 1;$k=0; $__LIST__ = $eju['field']['supporting'];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$vo): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
        <li >
            <div class="ico_img">
                <img src="<?php echo get_supporting_icon($vo); ?>" alt="">
            </div>
            <p><?php echo $vo; ?></p>
        </li>
        <?php ++$e;$k++; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $vo = []; ?>


    </ul>
</div>
<div class="lp-detail-info">
    <h3> <a href="#" class="af-head"> <span class="left">房源介绍</span>
        <div class="clear"></div>
    </a> </h3>
    <div class="detail-jieshao">
        <p><?php echo $eju['field']['content']; ?></p>
    </div>
</div>
<div class="lp-detail-huxing">
    <h3> <a href="" class="af-head"> <span class="left">房源相册</span>
        <div class="clear"></div>
    </a> </h3>
    <ul class="ershou-pic af-hixing-list">
        <?php  if(!isset($aid) || empty($aid)) : $aid = "0"; endif;if(is_array($eju['field']['photo_list']) || $eju['field']['photo_list'] instanceof \think\Collection || $eju['field']['photo_list'] instanceof \think\Paginator): $i = 0; $e = 1;$k = 0;$__LIST__ = is_array($eju['field']['photo_list']) ? array_slice($eju['field']['photo_list'],0,1000, true) : $eju['field']['photo_list']->slice(0,1000, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
        <li style="display: flex;">
            <a href="<?php echo nextarcurl($field['photo_id'],$eju['field'],'photo'); ?>">
                <img src="<?php echo $field['photo_pic']; ?>" class="huxinglist-img" alt="<?php echo $field['photo_title']; ?>">
                <span><?php echo $field['photo_title']; ?></span>
            </a>
        </li>
        <?php ++$e;$k++; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
    </ul>
    <div class="clear"></div>
    <a href="javascript:void(0)" class="hx_more_btn">查看更多图片</a>
</div>
<li class="list_gg lp-detail-dt">
    <a href="tel:<?php echo $eju['field']['saleman']['saleman_mobile']; ?>">
        <img src="<?php  $tagGlobal = new \think\template\taglib\eju\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_mobile"); echo $__VALUE__; ?>/skin/images/house-list_tjf.png">
    </a>

</li>
<div class="lp-detail-map">
    <h3 id="diyurl_off" style="display: none">
        <a href="javascript:;" class="af-head">
            <span class="left">周边配套</span>
            <div class="clear"></div>
        </a>
    </h3>
    <h3 id="diyurl_on"  style="display: none">
        <a href="<?php  $tagDiyurl = new \think\template\taglib\eju\TagDiyurl; $__VALUE__ = $tagDiyurl->getDiyurl("panorama","","0"); echo $__VALUE__; ?>" class="af-head">
            <span class="left">周边配套</span>
            <span class="right">全景地图</span>
            <div class="clear"></div>
        </a>
    </h3>

    <div class="detail-map-wrap">
        <div id="map_canvas" style="width:100%;height: 300px;"></div>
        <?php  $tagSurroundings = new \think\template\taglib\eju\TagSurroundings; $_result_tmp = $tagSurroundings->getSurroundings($eju['field'],"map_canvas","lp-map-s","lp-map-a","map_total","lp-map-tab","map_result");if(!empty($_result_tmp)): $field = $_result_tmp ;?>
        <?php echo $field['hidden'];  else: echo htmlspecialchars_decode("");endif; $field = []; ?>
    </div>
</div>
<div class="tjlp_list">
    <h3> <a href="#" class="af-head"> <span class="left">推荐房源</span>
        <div class="clear"></div>
    </a> </h3>
    <ul class="clearfloat">
        <?php  $typeid = ""; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $row = 4; $channelid = "12"; $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "",      "noflag"=> "",      "channel"=> $channelid,      "joinaid"=> "",      "province_id"=> "",      "city_id"=> "",      "area_id"=> "",      "screen"=> "1",      "users_id"=> "", ); $tag = array (
  'channelid' => '12',
  'c' => '1',
  'orderby' => 'new',
  'row' => '4',
  'id' => 'field',
); $tagArclist = new \think\template\taglib\eju\TagArclist; $_result = $tagArclist->getArclist($param, $row, "new", "","desc","",$tag,"0","on","",[],[]);if(is_array($_result["list"]) || $_result["list"] instanceof \think\Collection || $_result["list"] instanceof \think\Paginator): $i = 0; $e = 1;$k=0; $__LIST__ = is_array($_result["list"]) ? array_slice($_result["list"],0, $row, true) : $_result["list"]->slice(0, $row, true);  $__TAG__ = $_result["tag"];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$field["title"] = text_msubstr($field["title"], 0, 100, false);$field["seo_description"] = text_msubstr($field["seo_description"], 0, 160, true);$i= intval($key) + 1;$mod = ($i % 2 ); ?>
        <li>
            <a href="<?php echo $field['arcurl']; ?>">
                <div class="tjlp_list_img"> <img src="<?php echo $field['litpic']; ?>" alt="<?php echo $field['title']; ?>"> </div>
                <div class="tjlp_list_cont">
                    <p class="tjlp_list_head"><?php echo $field['title']; ?></p>
                    <p class="tjlp_list_area"><?php echo $field['room']; ?>室<?php echo $field['living_room']; ?>厅<?php echo $field['toilet']; ?>卫</p>
                    <p class="tjlp_list_jg"><em><?php echo $field['total_price']; ?>万</em></p>
                    <p class="tjlp_list_area">
                        <?php if(is_array($field['characteristic']) || $field['characteristic'] instanceof \think\Collection || $field['characteristic'] instanceof \think\Paginator): $i = 0; $e = 1;$k=0; $__LIST__ = $field['characteristic'];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$vo): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
                        <span class="tjlp_list_tag intr-title-ts"><?php echo $vo; ?></span>
                        <?php ++$e;$k++; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $vo = []; ?>
                    </p>
                </div>
            </a>
        </li>
        <?php ++$e;$k++; $aid = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
    </ul>
</div>
<div data-am-widget="navbar" class="am-navbar am-cf am-navbar-default " id="">
    <ul class="am-navbar-nav am-cf am-avg-sm-4">
        <li>
            <a class="tg_tel_phone" href="tel:<?php echo $eju['field']['saleman']['saleman_mobile']; ?>">电话咨询</a>
        </li>
        <li style="border-right: 1px solid #fff;border-left: 1px solid #fff;">
            <a href="#" data-am-modal="{target:'#af-user-yy'}"> <span class="am-icon-bus" style="display: inline-block"></span>
                <span class="am-navbar-label" data-text="24小时接送机，住宿安排，专车看房，全程免费" style="display: inline-block;font-size: 15px;">预约看房</span>
            </a>
        </li>
        <li>
            <a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $eju['field']['saleman']['saleman_qq']; ?>&site=qq&menu=yes"> <span class="am-icon-comment-o" style="display: inline-block"></span>
                <span class="am-navbar-label" style="display: inline-block;font-size: 15px;">在线咨询</span>
            </a>
        </li>
    </ul>
</div>
<div class="am-modal am-modal-prompt" tabindex="-1" id="af-user-yy">
    <div class="am-modal-dialog" style="width: 100%;height: 40%;">
        <?php  $tagForm = new \think\template\taglib\eju\TagForm; $_result = $tagForm->getForm("1", "closemodal", "","",""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$k=0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
        <form method="post" id="<?php echo $field['form_name']; ?>" action="<?php echo $field['action']; ?>" onsubmit="<?php echo $field['submit']; ?>">
            <div class="am-modal-hd">预约看房 </div>
            <a href="javascript: void(0)" class="am-close am-close-spin" data-am-modal-close="" style="top: 4px;right: 4px;position: absolute">×</a>
            <p class="am-modal-text">24小时接送机，住宿安排，专车看房，全程免费</p>
            <input type="text" class="input-text" id="<?php echo $field['attr_1']; ?>" name="<?php echo $field['attr_1']; ?>" placeholder="<?php echo $field['itemname_1']; ?>" >
            <button type="submit" id="yuyue_btn_sub" class="am-btn am-btn-warning af-yyzx">免费预约</button>
            <p class="am-modal-zy">*我们将严格保密您的个人信息，请您放心留下联系方式</p>
            <?php echo $field['hidden']; ?>
        </form>
        <script>
            function closemodal(){
                $(".layui-layer-loading1").hide();
                $(".am-modal,.am-dimmer").hide();
                $("body").removeClass("am-dimmer-active");
            }
        </script>
        <?php ++$e;$k++; endforeach;endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
    </div>
</div>
<script type="text/javascript" src="//api.map.baidu.com/api?v=2.0&ak=<?php echo config('global.baidu_map_ak'); ?>"></script>
<script>
    $(function() {
        var hxli = $(".lp-detail-huxing ul li");
        var hxul = $(".lp-detail-huxing ul");

        function hidehx() {
            hxli.hide();
            hxli.slice(0, 6).css("display", "flex");
        }
        if (hxli.length <= 6) {
            $(".hx_more_btn").hide();
            hxul.removeClass("af-hixing-list");
        } else {
            hidehx();
        }
        $(".hx_more_btn").click(function() {
            hxul.toggleClass("af-hixing-list");
            if (hxul.hasClass("af-hixing-list")) {
                $(this).text("查看更多");
                hidehx();
            } else {
                $(this).text("收回更多");
                hxli.css("display", "flex");
            }
        });
        $(".yhsq_m5 a").click(function() {
            $(".am-modal-hd,#yuyue_btn_sub").text($(".yhsq_m5 a").text());
            $(".am-modal-dialog #type").val(3);
            $(".am-modal-text").text($(this).attr("data-text"));
        });
        $(".am-navbar-label").click(function() {
            $(".am-modal-hd,#yuyue_btn_sub").text($(".am-navbar-label").eq(1).text());
            $(".am-modal-dialog #type").val(1);
            $(".am-modal-text").text($(this).attr("data-text"));
        });
        $(".tg_jj,.jj_callme").click(function() {
            $(".am-modal-hd,#yuyue_btn_sub").text($(this).text());
            $(".am-modal-text").text($(this).attr("data-text"));
            $(".am-modal-dialog #type").val(5);
        });

        function complate(result) {
            if (result.status == 1) {
                layer.msg(result.msg, {
                    icon: 1
                });
                setTimeout(function() {
                    //$(".layui-layer-loading1").hide();
                    //$(".am-modal,.am-dimmer").hide();
                    location.reload();
                }, 1500);
            } else {
                layer.msg(result.msg, {
                    icon: 2
                });
            }
        }
    });
    var lng = "<?php echo $eju['field']['lng']; ?>";
    var lat = "<?php echo $eju['field']['lat']; ?>";
    var panoramaService = new BMap.PanoramaService();
    panoramaService.getPanoramaByLocation(new BMap.Point(lng, lat), function(data){
        if (data == null) {
            console.log('no data');
            $("#diyurl_off").show();
            return;
        }else{
            $("#diyurl_on").show();
        }
    });
</script>
</body>
</html>
