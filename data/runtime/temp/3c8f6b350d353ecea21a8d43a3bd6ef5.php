<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:42:"./template/default/mobile/view_xinfang.htm";i:1586913148;s:68:"/www/wwwroot/ejucms.wingle.com.cn/template/default/mobile/header.htm";i:1573633356;}*/ ?>
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



<div data-am-widget="slider" class="detail-banner am-slider am-slider-a1" data-am-slider='{"directionNav":false,"controlNav":false}' style="margin-top: 0;">
    <ul class="am-slides">
        <?php if(is_array($eju['field']['photo_list']) || $eju['field']['photo_list'] instanceof \think\Collection || $eju['field']['photo_list'] instanceof \think\Paginator): $i = 0; $e = 1;$k=0; $__LIST__ = $eju['field']['photo_list'];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$vo): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
        <li class="newhouse-banner">
            <a href="#">
                <img src="<?php echo $vo['photo_pic']; ?>">
            </a>
            <div class="pet_slider_shadow"></div>
        </li>
        <?php ++$e;$k++; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $vo = []; ?>
    </ul>
</div>
<div class="lp-detail-intr">
    <h2><?php echo $eju['field']['title']; ?><span class="intr-title"><?php echo $eju['field']['sale_status']; ?></span></h2>
    <ul>
        <li><span>参考均价：</span><span class="intr-title-jg"><em> <?php if(!(empty($eju['field']['average_price']) || (($eju['field']['average_price'] instanceof \think\Collection || $eju['field']['average_price'] instanceof \think\Paginator ) && $eju['field']['average_price']->isEmpty()))): ?><?php echo $eju['field']['average_price']; else: ?>暂无<?php endif; ?></em><?php if(!(empty($eju['field']['average_price']) || (($eju['field']['average_price'] instanceof \think\Collection || $eju['field']['average_price'] instanceof \think\Paginator ) && $eju['field']['average_price']->isEmpty()))): ?><?php echo $eju['field']['price_units']; endif; ?>
            <a class="jj_callme" data-text="价格变动第一时间通知您。" href="#" data-am-modal="{target:'#af-user-yy'}">
                (<i class="iconfont icon-jiangjia"></i>降价通知)
            </a>
        </span>
        </li>
        <li> 价格有效期至：<?php echo myDate('Y-m-d',$eju['field']['price_time']); ?> </li>
        <li><span>地址：</span><?php echo $eju['field']['address']; ?></li>
        <li><span>户型：</span>
            <?php if(is_array($eju['field']['huxing_list']) || $eju['field']['huxing_list'] instanceof \think\Collection || $eju['field']['huxing_list'] instanceof \think\Paginator): $i = 0; $e = 1;$k=0; $__LIST__ = $eju['field']['huxing_list'];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$vo): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
                <?php echo $vo['huxing_room']; ?>室(建面<?php echo $vo['huxing_area']; ?>㎡)
            <?php ++$e;$k++; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $vo = []; ?>
        </li>
        <li><span>特色：</span>
            <?php if(is_array($eju['field']['characteristic']) || $eju['field']['characteristic'] instanceof \think\Collection || $eju['field']['characteristic'] instanceof \think\Paginator): $i = 0; $e = 1;$k=0; $__LIST__ = $eju['field']['characteristic'];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$vo): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
            <span class="intr-title-ts"><?php echo $vo; ?></span>
            <?php ++$e;$k++; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $vo = []; ?>
        </li>
    </ul>
    <div class="tg_tel">
        <span><i class="iconfont icon-dianhua"></i><?php echo $eju['field']['sale_phone']; if(!(empty($eju['field']['phone_code']) || (($eju['field']['phone_code'] instanceof \think\Collection || $eju['field']['phone_code'] instanceof \think\Paginator ) && $eju['field']['phone_code']->isEmpty()))): ?> 转 <?php echo $eju['field']['phone_code']; endif; ?></span>
        <a class="tg_tel_phone" href="tel:<?php echo $eju['field']['sale_phone']; ?>">电话咨询</a>
    </div>
    <div class="tg_tel">
        <span><i class="iconfont icon-feiji"></i>24小时为您免费接送机</span>
        <a class="tg_jj" data-text="24小时接送机，住宿安排，专车看房，全程免费" data-am-modal="{target:'#af-user-yy'}" href="#">预约接机</a>
    </div>
</div>
<?php if(!(empty($eju['field']['is_discount']) || (($eju['field']['is_discount'] instanceof \think\Collection || $eju['field']['is_discount'] instanceof \think\Paginator ) && $eju['field']['is_discount']->isEmpty()))): ?>
<div class="yhsq_m_wrap">
    <div class="yhsq_m1"><span><a href="javascript:;" style="color:#fa5741;"><?php echo $eju['field']['title']; ?></a></span>优惠折扣</div>
    <ul>
        <li class="yhsq_m2"> <?php echo $eju['field']['discount']; ?></li>
        <li class="yhsq_m5"> <a href="#" data-text="楼盘动态，优惠折扣免费获取" data-am-modal="{target:'#af-user-yy'}">申请优惠</a> </li>
    </ul>
</div>
<?php endif; ?>

<div class="lp-detail-info">
    <h3> <a href="#" class="af-head"> <span class="left">楼盘详情</span>
        <div class="clear"></div>
    </a> </h3>
    <ul class="detail-info-list">
        <li> <span class="info-li-name">物业类型：</span>
            <span class="info-li-text"><?php echo implode(",",$eju['field']['characteristic']); ?></span>
        </li>
        <li> <span class="info-li-name">建筑类别：</span> <span class="info-li-text"><?php echo implode(",",$eju['field']['building_type']); ?></span> </li>
        <li> <span class="info-li-name">建筑状况：</span> <span class="info-li-text"><?php echo implode(",",$eju['field']['fitment']); ?></span> </li>
        <li> <span class="info-li-name">建筑面积：</span> <span class="info-li-text"><?php echo $eju['field']['building_area']; ?><?php echo $eju['field']['building_area_unit']; ?></span> </li>
        <li> <span class="info-li-name">占地面积：</span> <span class="info-li-text"><?php echo $eju['field']['floor_area']; ?><?php echo $eju['field']['floor_area_unit']; ?></span> </li>
        <li> <span class="info-li-name">物业公司：</span> <span class="info-li-text"><?php echo $eju['field']['address']; ?></span> </li>
        <li> <span class="info-li-name">物&nbsp;业&nbsp; 费：</span> <span class="info-li-text"><?php echo $eju['field']['property_fee']; ?><?php echo $eju['field']['property_fee_unit']; ?></span> </li>
        <li> <span class="info-li-name">开&nbsp;发&nbsp; 商：</span> <span class="info-li-text"><?php echo $eju['field']['developer']; ?></span> </li>
    </ul>
</div>
<div class="lp-detail-huxing">
    <h3> <a href="" class="af-head"> <span class="left">在售户型</span>
        <div class="clear"></div>
    </a> </h3>
    <ul class="af-hixing-list">
        <?php if(is_array($eju['field']['huxing_list']) || $eju['field']['huxing_list'] instanceof \think\Collection || $eju['field']['huxing_list'] instanceof \think\Paginator): $i = 0; $e = 1;$k=0; $__LIST__ = $eju['field']['huxing_list'];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$vo): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
        <li class="am-g am-list-item-desced am-list-item-thumbed am-list-item-thumb-right pet_list_one_block" <?php if($i > '3'): ?>style="display: none;"<?php else: ?>style="display: flex;"<?php endif; ?> >
            <a href="<?php echo nextarcurl($vo['huxing_id'],$eju['field'],'huxing'); ?>">
                <div class="am-u-sm-4 huxing-pic"> <img src="<?php echo $vo['huxing_pic']; ?>" class="huxinglist-img" alt="<?php echo $vo['huxing_title']; ?>"> </div>
                <div class=" am-u-sm-8 am-list-main huxing-info ">
                    <p class="huxinglist-name"><?php echo $vo['huxing_room']; ?>室<?php echo $vo['huxing_living_room']; ?>厅<?php echo $vo['huxing_toilet']; ?>卫<?php echo $vo['huxing_kitchen']; ?>厨 </p>
                    <p class="huxinglist-name">建筑面积<?php echo $vo['huxing_area']; ?>㎡</p>
                    <p class="huxinglist-dz">参考总价：<em><?php echo $vo['huxing_price']; ?>万元</em></p>
                </div>
            </a>
        </li>
        <?php ++$e;$k++; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $vo = []; ?>
    </ul>
    <div class="clear"></div>
    <a href="javascript:void(0)" class="hx_more_btn">查看更多户型</a>
</div>
<div class="lp-detail-dt">
    <h3>
        <a href="javascript:;" class="af-head">
            <span class="left">楼盘动态</span>
            <div class="clear"></div>
        </a>
    </h3>
    <?php  $typeid = "4"; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $row = 2; $channelid = ""; $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "",      "noflag"=> "",      "channel"=> $channelid,      "joinaid"=> "",      "province_id"=> "",      "city_id"=> "",      "area_id"=> "",      "screen"=> "1",      "users_id"=> "", ); $tag = array (
  'typeid' => '4',
  'orderby' => 'new',
  'limit' => '0,2',
  'id' => 'field',
); $tagArclist = new \think\template\taglib\eju\TagArclist; $_result = $tagArclist->getArclist($param, $row, "new", "","desc","",$tag,"0","on","",[],[]);if(is_array($_result["list"]) || $_result["list"] instanceof \think\Collection || $_result["list"] instanceof \think\Paginator): $i = 0; $e = 1;$k=0; $__LIST__ = is_array($_result["list"]) ? array_slice($_result["list"],0, $row, true) : $_result["list"]->slice(0, $row, true);  $__TAG__ = $_result["tag"];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$field["title"] = text_msubstr($field["title"], 0, 100, false);$field["seo_description"] = text_msubstr($field["seo_description"], 0, 160, true);$i= intval($key) + 1;$mod = ($i % 2 ); ?>
    <div class="detail-dt-cont">
        <a href="<?php echo $field['arcurl']; ?>">
            <div class="dt-cont-til"><?php echo $field['title']; ?></div>
        </a>
        <p class="dt-cont-data">
            <span class="cont-bq">最新动态</span>
            <span class="cont-data">发表于<?php echo MyDate('Y-m-d',$field['update_time']); ?></span>
        </p>
        <a href="<?php echo $field['arcurl']; ?>">
            <p class="dt-cont-info"> <?php echo html_msubstr($field['seo_description'],0,50); ?>...</p>
        </a>
    </div>
    <?php ++$e;$k++; $aid = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
</div>
<li class="list_gg lp-detail-dt">
    <a href="tel:<?php echo $eju['field']['sale_phone']; ?>">
        <img src="<?php  $tagGlobal = new \think\template\taglib\eju\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_mobile"); echo $__VALUE__; ?>/skin/images/house-list_tjf.png">
    </a>
</li>
<!-- 楼盘问答 -->
<?php  $param = array(      "is_recom"=> "",      "status"=> "",      "click"=> "",      "replies"=> "" ); $tagAsk = new \think\template\taglib\eju\TagAsk; $_result_tmp = $tagAsk->getAsk($param,"","on","off","1","10","ask_id","desc");if(!empty($_result_tmp)):  $__PAGES__ = $_result_tmp["pages"]; $__COUNT__ = $_result_tmp["count"];$field = $_result_tmp ;?>
<?php echo $field['hidden']; ?>
<div class="nh_zbpt lpwd" id="lpwd">
    <div class="head">
        <h2 class="nh_head">楼盘问答</h2>
        <a href="<?php echo $field['AddAskUrl']; ?>">
            我要提问
        </a>
    </div>
    <div class="con_box">
        <ul class="list">
            <?php if(is_array($field['AskData']) || $field['AskData'] instanceof \think\Collection || $field['AskData'] instanceof \think\Paginator): $i = 0; $e = 1;$k=0; $__LIST__ = $field['AskData'];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$vo): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
            <li>
                <div class="asking">
                    <div class="aico">问</div>
                    <div class="acon">
                        <a class="asking-tit" href="<?php echo $vo['AskUrl']; ?>"><?php echo $vo['ask_title']; ?></a>
                        <p><?php echo $vo['content']; ?></p>
                    </div>
                </div>
                <?php if(is_array($vo['AnswerData']) || $vo['AnswerData'] instanceof \think\Collection || $vo['AnswerData'] instanceof \think\Paginator): $i = 0; $e = 1;$k=0; $__LIST__ = $vo['AnswerData'];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$vo2): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
                <div class="answer">
                    <div class="aico">答</div>
                    <div class="acon">
                        <p><?php echo $vo2['content']; ?></p>
                    </div>
                </div>
                <?php ++$e;$k++; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $vo2 = []; ?>
            </li>
            <?php ++$e;$k++; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $vo = []; ?>
        </ul>
    </div>
</div>
<?php  else: echo htmlspecialchars_decode("");endif; $field = []; ?>


<div class="lp-detail-map">
    <h3> <a href="javascript:;" class="af-head"> <span class="left">周边配套</span>
        <div class="clear"></div>
    </a> </h3>
    <div class="detail-map-wrap">
        <div id="map_canvas" style="width:100%;height: 300px;"></div>
        <?php  $tagSurroundings = new \think\template\taglib\eju\TagSurroundings; $_result_tmp = $tagSurroundings->getSurroundings($eju['field'],"map_canvas","lp-map-s","lp-map-a","map_total","lp-map-tab","map_result");if(!empty($_result_tmp)): $field = $_result_tmp ;?>
        <?php echo $field['hidden'];  else: echo htmlspecialchars_decode("");endif; $field = []; ?>
    </div>
</div>
<div class="bmkf_wrap">
    <h3> <a href="#" class="af-head"> <span class="left">报名看房</span>
        <div class="clear"></div>
    </a> </h3>
    <div class="bmkf_form">
        <p class="lp_answer_form_p"><em>24小时接送机、住宿安排、看房全程免费</em></p>
        <?php  $tagForm = new \think\template\taglib\eju\TagForm; $_result = $tagForm->getForm("1", "", "","",""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$k=0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
        <form method="post" id="<?php echo $field['form_name']; ?>" action="<?php echo $field['action']; ?>" onsubmit="<?php echo $field['submit']; ?>">
            <input type="text" class="input-text" id="<?php echo $field['attr_1']; ?>" name="<?php echo $field['attr_1']; ?>" placeholder="<?php echo $field['itemname_1']; ?>" >
            <input type="submit" class="lp_answer_form_btn" value="马上报名" id="yuyue_btn_sub2" >
            <div class="clear"></div>
            <?php echo $field['hidden']; ?>
        </form>
        <?php ++$e;$k++; endforeach;endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
    </div>
</div>
<div class="tjlp_list">
    <h3> <a href="javascript:;" class="af-head"> <span class="left">推荐楼盘</span>
        <div class="clear"></div>
    </a> </h3>
    <ul class="clearfloat">
        <?php  $typeid = ""; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $row = 4; $channelid = "9"; $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "h",      "noflag"=> "",      "channel"=> $channelid,      "joinaid"=> "",      "province_id"=> "",      "city_id"=> "",      "area_id"=> "",      "screen"=> "1",      "users_id"=> "", ); $tag = array (
  'channelid' => '9',
  'flag' => 'h',
  'orderby' => 'new',
  'row' => '4',
  'id' => 'field',
); $tagArclist = new \think\template\taglib\eju\TagArclist; $_result = $tagArclist->getArclist($param, $row, "new", "","desc","",$tag,"0","on","",[],[]);if(is_array($_result["list"]) || $_result["list"] instanceof \think\Collection || $_result["list"] instanceof \think\Paginator): $i = 0; $e = 1;$k=0; $__LIST__ = is_array($_result["list"]) ? array_slice($_result["list"],0, $row, true) : $_result["list"]->slice(0, $row, true);  $__TAG__ = $_result["tag"];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$field["title"] = text_msubstr($field["title"], 0, 100, false);$field["seo_description"] = text_msubstr($field["seo_description"], 0, 160, true);$i= intval($key) + 1;$mod = ($i % 2 ); ?>
        <li>
            <a href="<?php echo $field['arcurl']; ?>">
                <div class="tjlp_list_img">
                    <img src="<?php echo $field['litpic']; ?>" alt="<?php echo $field['title']; ?>">
                </div>
                <div class="tjlp_list_cont">
                    <p class="tjlp_list_head"><?php echo $field['title']; ?><span class="intr-title"><?php echo $field['sale_status']; ?></span></p>
                    <p class="tjlp_list_jg"><em><?php echo $field['average_price']; ?></em><?php echo $field['price_units']; ?></p>
                    <p class="tjlp_list_area"><?php echo $field['address']; ?></p>
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
            <a class="tg_tel_phone" href="tel:<?php echo $eju['field']['sale_phone']; ?>">电话咨询</a>
        </li>
        <li style="border-right: 1px solid #fff;border-left: 1px solid #fff;">
            <a href="#" data-am-modal="{target:'#af-user-yy'}">
                <span class="am-icon-bus"   style="display: inline-block"></span>
                <span class="am-navbar-label" data-text="24小时接送机，住宿安排，专车看房，全程免费" style="display: inline-block;font-size: 15px;">预约看房</span>
            </a>
        </li>
        <li>
            <a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $eju['field']['saleman']['saleman_qq']; ?>&site=qq&menu=yes">
                <span class="am-icon-comment-o" style="display: inline-block"></span>
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
<script>
    $(function() {
        var hxli = $(".lp-detail-huxing ul li");
        var hxul = $(".lp-detail-huxing ul");
        function hidehx(){
            hxli.hide();
            hxli.slice(0,3).css("display","flex");
        }
        if(hxli.length<=3){
            $(".hx_more_btn").hide();
            hxul.removeClass("af-hixing-list");
        }else{
            hidehx();
        }
        $(".hx_more_btn").click(function(){
            hxul.toggleClass("af-hixing-list");
            if(hxul.hasClass("af-hixing-list")){
                $(this).text("查看更多户型");
                hidehx();
            }else{
                $(this).text("收回更多户型");
                hxli.css("display","flex");
            }
        });
        $(".yhsq_m5 a").click(function(){
            $(".am-modal-hd,#yuyue_btn_sub").text($(".yhsq_m5 a").text());
            $(".am-modal-dialog #type").val(3);
            $(".am-modal-text").text($(this).attr("data-text"));
        });
        $(".am-navbar-label").click(function(){
            $(".am-modal-hd,#yuyue_btn_sub").text($(".am-navbar-label").eq(1).text());
            $(".am-modal-dialog #type").val(1);
            $(".am-modal-text").text($(this).attr("data-text"));
        });
        $(".tg_jj,.jj_callme").click(function(){
            $(".am-modal-hd,#yuyue_btn_sub").text($(this).text());
            $(".am-modal-text").text($(this).attr("data-text"));
            $(".am-modal-dialog #type").val(5);
        });
        function complate(result) {
            if (result.status == 1) {
                layer.msg(result.msg, {icon : 1});
                setTimeout(function() {
                    location.reload();
                }, 1500);
            } else {
                layer.msg(result.msg, {icon : 2});
            }
        }
    });
</script>


</body>
</html>
