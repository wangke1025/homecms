<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:38:"./template/default/pc/view_xinfang.htm";i:1586912120;s:64:"/www/wwwroot/ejucms.wingle.com.cn/template/default/pc/header.htm";i:1574817774;s:70:"/www/wwwroot/ejucms.wingle.com.cn/template/default/pc/main_xinfang.htm";i:1586912042;s:72:"/www/wwwroot/ejucms.wingle.com.cn/template/default/pc/follow_xinfang.htm";i:1570693844;s:64:"/www/wwwroot/ejucms.wingle.com.cn/template/default/pc/footer.htm";i:1570361118;}*/ ?>
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
    <?php  $tagStatic = new \think\template\taglib\eju\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/css/public.css","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eju\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/css/iconfont.css","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eju\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/css/nhouse_index.css","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eju\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/css/nhouse_dt.css","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eju\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/css/nhouse_info.css","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eju\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/jquery.min.1.7.2.js","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eju\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/top_footer.js","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eju\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/house-map.js","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eju\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/nav.js","",""); echo $__VALUE__; ?>
</head>
<style>

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
<!-- 导航 -->
<!-- 面包屑导航（位置） -->
<div class="conview">
  <div class="weizhi">
    <ul>
      <li><a href="javascript:;">你的位置</a>：</li>
      <li> <?php  $typeid = ""; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $tagPosition = new \think\template\taglib\eju\TagPosition; $__VALUE__ = $tagPosition->getPosition($typeid, "", "crumb"); echo $__VALUE__; ?> > <?php echo $eju['field']['title']; ?></li>
      <div class="clear"></div>
    </ul>
  </div>
  <div class="clear"></div>
  <div class="af-title">
    <h1><?php echo $eju['field']['title']; ?></h1>
        <span class="house_status"><?php echo $eju['field']['sale_status']; ?></span>
        <?php if(is_array($eju['field']['characteristic']) || $eju['field']['characteristic'] instanceof \think\Collection || $eju['field']['characteristic'] instanceof \think\Paginator): $i = 0; $e = 1;$k=0; $__LIST__ = $eju['field']['characteristic'];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$vo): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
        <span id="c_3"><?php echo $vo; ?></span>
        <?php ++$e;$k++; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $vo = []; ?>
    <div class="clear"></div>
     
  </div>
</div>
<!-- 面包屑导航（位置）end -->

<!-- 楼盘基本信息 -->
<div class="nhouse_head">
  <div class="detail_slide left">
    <div class="large_box">
      <ul>
        <?php if(is_array($eju['field']['photo_list']) || $eju['field']['photo_list'] instanceof \think\Collection || $eju['field']['photo_list'] instanceof \think\Paginator): $i = 0; $e = 1;$k=0; $__LIST__ = $eju['field']['photo_list'];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$vo): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
        <li  <?php if($i > '1'): ?>style="display: none;"<?php endif; ?>> <img src="<?php echo $vo['photo_pic']; ?>" width="730" height="380"> </li>
        <?php ++$e;$k++; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $vo = []; ?>
      </ul>
    </div>
    <div class="small_box"> <span class="btn left_btn"></span>
      <div class="small_list">
        <ul style="width: 8840px; margin-left: 0px;">
          <?php if(is_array($eju['field']['photo_list']) || $eju['field']['photo_list'] instanceof \think\Collection || $eju['field']['photo_list'] instanceof \think\Paginator): $i = 0; $e = 1;$k=0; $__LIST__ = $eju['field']['photo_list'];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$vo): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
          <li <?php if($i == '1'): ?>class="on"<?php endif; ?>> <img src="<?php echo $vo['photo_pic']; ?>" width="126" height="73">
            <div class="bun_bg">
              <div class="img_style"> <a ><?php echo $vo['photo_type']; ?><?php echo $vo['photo_title']; ?></a> </div>
            </div>
          </li>
          <?php ++$e;$k++; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $vo = []; ?>
        </ul>
      </div>
      <span class="btn right_btn"></span> </div>
  </div>
  <!-- 右侧info -->
  <div class="nh_content right">
    <div class="topfix">
      <div class="hd_jiage">
        <p>
            <span class="hd_jiage_tag">参考均价</span> <span class="hd_jiage_big"><?php if(!(empty($eju['field']['average_price']) || (($eju['field']['average_price'] instanceof \think\Collection || $eju['field']['average_price'] instanceof \think\Paginator ) && $eju['field']['average_price']->isEmpty()))): ?><?php echo $eju['field']['average_price']; else: ?>暂无<?php endif; ?></span><?php if(!(empty($eju['field']['average_price']) || (($eju['field']['average_price'] instanceof \think\Collection || $eju['field']['average_price'] instanceof \think\Paginator ) && $eju['field']['average_price']->isEmpty()))): ?><?php echo $eju['field']['price_units']; endif; ?>
            <span class="hd_jiage_rose"><em class="lptb">价格有效期至：</em><?php echo myDate('Y-m-d',$eju['field']['price_time']); ?></span>
        </p>
      </div>
      <div class="hd_info">
        <ul>
          <li><span class="lptb">装修情况:</span>
            <p class="lptb02"><?php if(is_array($eju['field']['fitment']) || $eju['field']['fitment'] instanceof \think\Collection || $eju['field']['fitment'] instanceof \think\Paginator): $i = 0; $e = 1;$k=0; $__LIST__ = $eju['field']['fitment'];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$vo): $i= intval($key) + 1;$mod = ($i % 2 ); ?><?php echo $vo; ++$e;$k++; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $vo = []; ?></p>
          </li>
          <li><span class="lptb">开盘时间:</span>
            <p class="lptb02"><?php echo myDate('Y年m月d日',$eju['field']['opening_time']); ?></p>
          </li>
          <li><span class="lptb">物业类型:</span>
            <p class="lptb02"><?php if(is_array($eju['field']['manage_type']) || $eju['field']['manage_type'] instanceof \think\Collection || $eju['field']['manage_type'] instanceof \think\Paginator): $i = 0; $e = 1;$k=0; $__LIST__ = $eju['field']['manage_type'];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$vo): $i= intval($key) + 1;$mod = ($i % 2 ); ?><?php echo $vo; ++$e;$k++; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $vo = []; ?></p>
          </li>
          <li><span class="lptb">交房时间:</span>
            <p class="lptb02"><?php echo myDate('Y年m月d日',$eju['field']['complate_time']); ?></p>
          </li>
          <li><span class="lptb">产权年限:</span>
            <p class="lptb02"><?php echo $eju['field']['property']; ?><?php echo $eju['field']['property_unit']; ?> </p>
          </li>
          <li><span class="lptb">所在区域:</span>
            <p class="lptb02">[<?php echo get_province_name($eju['field']['province_id']); ?>-<?php echo get_city_name($eju['field']['city_id']); ?>]</p>
          </li>
          <li><span class="lptb">项目地址:</span>
            <p class="lptb02"><?php echo $eju['field']['address']; ?></p>
          </li>
        </ul>
      </div>
      <div class="lpagent">
        <div class="lpagent_bmtel">
            <div class="lpagent_tel clearfloat"> 
                <span class="tel_num left"> <i>售楼热线</i> <b><?php echo $eju['field']['sale_phone']; if(!(empty($eju['field']['phone_code']) || (($eju['field']['phone_code'] instanceof \think\Collection || $eju['field']['phone_code'] instanceof \think\Paginator ) && $eju['field']['phone_code']->isEmpty()))): ?> 转 <?php echo $eju['field']['phone_code']; endif; ?></b> </span>
                    <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $eju['field']['saleman']['saleman_qq']; ?>&site=qq&menu=yes" data-uri="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $vo['saleman_qq']; ?>&site=qq&menu=yes" class="lpagent_tel_btn right"> 在线咨询 </a>
            </div>
            <div class="lpagent_bm clearfloat">
              <?php  $tagForm = new \think\template\taglib\eju\TagForm; $_result = $tagForm->getForm("1", "", "","",""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$k=0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
              <form method="post" id="<?php echo $field['form_name']; ?>" action="<?php echo $field['action']; ?>" onsubmit="<?php echo $field['submit']; ?>">
                <div class="bm_wrap left">
                  <input type="text"  id="bm_ins" id="<?php echo $field['attr_1']; ?>" name="<?php echo $field['attr_1']; ?>" placeholder="<?php echo $field['itemname_1']; ?>" >
                  <p class="bm_text">报名看房享受优惠，免费接机，住宿安排</p>
                </div>
                <input type="submit" class="bt_yhbm right" value="报名看房" id="yuyue_btn_sub" style="font-size: 14px;">
                <div class="clear"></div>
                <?php echo $field['hidden']; ?>
              </form>
              <?php ++$e;$k++; endforeach;endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
            </div>
        </div>
      </div>
    </div>
  </div>
  <div class="clear"></div>
</div>

<!-- 楼盘基本信息 end -->
<?php  $tagStatic = new \think\template\taglib\eju\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/carousel.min.js","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eju\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/layer/layer.min.js","",""); echo $__VALUE__; ?>
<script>
    //询问低价
    $(function() {
        $(".detail_slide").thumbnailImg({
            large_elem : ".large_box",
            small_elem : ".small_list",
            left_btn : ".left_btn",
            right_btn : ".right_btn"
        });
        $('.dialog').bind('click',function(){
            var url = $(this).data('uri');
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
<div class="anchor_layer" id="navHeight">
    <div class="nav_wrap" id="nav_wrap">
        <ul class="wrap_layer">
            <li class="wrap_tab"> <a  class="tab active" href="#hx">户型图</a> </li>
            <li class="wrap_tab"> <a class="tab"  href="#lpdt">楼盘动态</a> </li>
            <li class="wrap_tab"> <a class="tab" href="#lpxq">楼盘详情</a> </li>
            <li class="wrap_tab"> <a class="tab" href="#pic">楼盘相册</a> </li>
            <li class="wrap_tab"> <a class="tab" href="#zbpt">周边配套</a> </li>
            <li class="wrap_tab"> <a class="tab" href="#tj">推荐楼盘</a> </li>
        </ul>
    </div>
</div>

<div class="bar_nav">
    <p class="lpagent_yh_text">
        <?php  $tagMinmax = new \think\template\taglib\eju\TagMinmax; $_result = $tagMinmax->getMinmax("0","huxing"); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$k=0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$vo):  if ($i == 0) : $vo["currentstyle"] = ""; else:  $vo["currentstyle"] = ""; endif;$i= intval($key) + 1;$mod = ($i % 2 ); ?>
        <?php echo $eju['field']['title']; ?><?php echo $eju['field']['sale_status']; ?>，建面为<?php echo $vo['min_area']; ?>-<?php echo $vo['max_area']; ?>平米<?php echo $vo['min_room']; ?>至<?php echo $vo['max_room']; ?>房户型
        ，总价<?php echo $vo['min_price']; ?>-<?php echo $vo['max_price']; ?>万/套。具体详情请致电咨询。
        <?php ++$e;$k++; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $vo = []; ?>
    </p>
</div>
<div class="nh_main" id="hx">
    <!-- 右侧 -->
    <div class="nh_l" >
        <div class="lcon_hx">
            <h2 class="nh_head">户型图</h2>
            <ul class="tabs">
                <li> <a href="javascript:;" name=".tab_0">全部(<span><?php echo count($eju['field']['huxing_list']); ?></span>)</a> </li>
                <?php  if(!isset($aid) || empty($aid)) : $aid = "0"; endif; $tagFanglist = new \think\template\taglib\eju\TagFanglist; $_result = $tagFanglist->getFanglist("huxing", $aid, "0,1000", "", "desc", "huxing_room","xinfang");if(is_array($_result["list"]) || $_result["list"] instanceof \think\Collection || $_result["list"] instanceof \think\Paginator): $i = 0; $e = 1;$k = 0; $__LIST__ = is_array($_result["list"]) ? array_slice($_result["list"],0, 1000, true) : $_result["list"]->slice(0, 1000, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
                <li>
                    <a href="javascript:;" name=".tab_<?php echo $field['huxing_room']; ?>"><?php echo $field['huxing_room']; ?>居室(<span><?php echo $field['count']; ?></span>)</a>
                </li>
                <?php ++$e;$k++; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
                <div class="clear"></div>
            </ul>
            <div class="content">
                <ul class="nh_hxcon tab_0" id="hx_0">
                <?php  if(!isset($aid) || empty($aid)) : $aid = "0"; endif;if(is_array($eju['field']['huxing_list']) || $eju['field']['huxing_list'] instanceof \think\Collection || $eju['field']['huxing_list'] instanceof \think\Paginator): $i = 0; $e = 1;$k = 0;$__LIST__ = is_array($eju['field']['huxing_list']) ? array_slice($eju['field']['huxing_list'],0,1000, true) : $eju['field']['huxing_list']->slice(0,1000, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
                    <li>
                        <div class="hx-list-img left">
                            <a href="javascript:;">
                                <img layer-pname="<?php echo $field['huxing_title']; ?>" layer-js="<?php echo $field['huxing_room']; ?>室<?php echo $field['huxing_living_room']; ?>厅<?php echo $field['huxing_toilet']; ?>卫<?php echo $field['huxing_kitchen']; ?>厨" layer-jm="<?php echo $field['huxing_area']; ?>㎡"  layer-jg="<?php echo $field['huxing_price']; ?>万元" layer-jj="<?php echo $field['huxing_average_price']; ?>元/平米"  layer-ts="<?php echo $field['huxing_characteristic']; ?>" src="<?php echo $field['huxing_pic']; ?>" width="180" height="138" />
                            </a>
                        </div>
                        <div class="hx-list-wrap left">
                            <div class="hx-list-head">
                                <h2><?php echo $field['huxing_room']; ?>室<?php echo $field['huxing_living_room']; ?>厅<?php echo $field['huxing_toilet']; ?>卫<?php echo $field['huxing_kitchen']; ?>厨 <?php echo $field['huxing_area']; ?>㎡</h2>
                            </div>
                            <p>建筑面积：<span><?php echo $field['huxing_area']; ?>平米</span></p>
                            <a class="selec-hx" href="javascript:;"><span>查看户型原图</span></a> </div>
                        <div class="hx-list-jg right">
                            <p><span><?php echo $field['huxing_price']; ?></span>万元</p>
                        </div>
                        <div class="clear"></div>
                    </li>
                <?php ++$e;$k++; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
                </ul>

                <?php  if(!isset($aid) || empty($aid)) : $aid = "0"; endif; $tagFanglist = new \think\template\taglib\eju\TagFanglist; $_result = $tagFanglist->getFanglist("huxing", $aid, "0,1000", "", "desc", "huxing_room","xinfang");if(is_array($_result["list"]) || $_result["list"] instanceof \think\Collection || $_result["list"] instanceof \think\Paginator): $i = 0; $e = 1;$k = 0; $__LIST__ = is_array($_result["list"]) ? array_slice($_result["list"],0, 1000, true) : $_result["list"]->slice(0, 1000, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
                <ul class="nh_hxcon tab_<?php echo $field['huxing_room']; ?>" id="hx_<?php echo $field['huxing_room']; ?>">
                    <?php  if(!isset($aid) || empty($aid)) : $aid = "0"; endif;if(is_array($field['children']) || $field['children'] instanceof \think\Collection || $field['children'] instanceof \think\Paginator): $i = 0; $e = 1;$k = 0;$__LIST__ = is_array($field['children']) ? array_slice($field['children'],0,1000, true) : $field['children']->slice(0,1000, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field2): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
                    <li>
                        <div class="hx-list-img left">
                            <a href="javascript:;">
                                <img layer-pname="<?php echo $field2['huxing_title']; ?>" layer-js="<?php echo $field2['huxing_room']; ?>室<?php echo $field2['huxing_living_room']; ?>厅<?php echo $field2['huxing_toilet']; ?>卫<?php echo $field2['huxing_kitchen']; ?>厨" layer-jm="<?php echo $field2['huxing_area']; ?>㎡"  layer-jg="<?php echo $field2['huxing_price']; ?>万元" layer-jj="<?php echo $field2['huxing_average_price']; ?>元/平米"  layer-ts="<?php echo $field2['huxing_characteristic']; ?>" src="<?php echo $field2['huxing_pic']; ?>" width="180" height="138" />
                            </a>
                        </div>
                        <div class="hx-list-wrap left">
                            <div class="hx-list-head">
                                <h2><?php echo $field2['huxing_room']; ?>室<?php echo $field2['huxing_living_room']; ?>厅<?php echo $field2['huxing_toilet']; ?>卫<?php echo $field2['huxing_kitchen']; ?>厨 <?php echo $field2['huxing_area']; ?>㎡</h2>
                            </div>
                            <p>建筑面积：<span><?php echo $field2['huxing_area']; ?>平米</span></p>
                            <a class="selec-hx" href="javascript:;"><span>查看户型原图</span></a> </div>
                        <div class="hx-list-jg right">
                            <p><span><?php echo $field2['huxing_price']; ?></span>万元</p>
                        </div>
                        <div class="clear"></div>
                    </li>
                    <?php ++$e;$k++; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field2 = []; ?>
                </ul>
                <?php ++$e;$k++; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
            </div>
        </div>
    </div>
    <!-- 左侧 -->
    <div class="nh_r">
        <div class="jjr-box">
            <div class="lpagent">
                <div class="lpagent_bmtel">
                    <div class="lpagent_tel clearfloat">
                        <span class="tel_num left">
                        <i>售楼热线</i>
                        <b>
                            <?php echo $eju['field']['sale_phone']; if(!(empty($eju['field']['phone_code']) || (($eju['field']['phone_code'] instanceof \think\Collection || $eju['field']['phone_code'] instanceof \think\Paginator ) && $eju['field']['phone_code']->isEmpty()))): ?> 转 <?php echo $eju['field']['phone_code']; endif; ?>
                        </b>
                        </span>
                        <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $eju['field']['saleman']['saleman_qq']; ?>&site=qq&menu=yes" data-uri="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $eju['field']['saleman']['saleman_qq']; ?>&site=qq&menu=yes" class="lpagent_tel_btn right">
                            在线咨询
                        </a>
                    </div>
                    <div class="lpagent_bm clearfloat">
                        <?php  $tagForm = new \think\template\taglib\eju\TagForm; $_result = $tagForm->getForm("1", "", "","",""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$k=0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
                        <form method="post" id="<?php echo $field['form_name']; ?>" action="<?php echo $field['action']; ?>" onsubmit="<?php echo $field['submit']; ?>">
                            <div class="bm_wrap left">
                                <input type="text" id="<?php echo $field['attr_1']; ?>" name="<?php echo $field['attr_1']; ?>" placeholder="<?php echo $field['itemname_1']; ?>" class="input-text">
                                <p class="bm_text">报名看房享受优惠，免费接机，住宿安排</p>
                            </div>
                            <input type="submit" class="bt_yhbm right" value="报名看房" id="yuyue_btn_sub" style="font-size: 14px;">
                            <div class="clear"></div>
                            <?php echo $field['hidden']; ?>
                        </form>
                        <?php ++$e;$k++; endforeach;endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clear"></div>
</div>
<!-- 楼盘动态 -->
<div class="nh_dt"  id="lpdt">
     <h2 class="nh_head">楼盘动态</h2>
    <div class="nh_tree">
        <ul>
            <?php  $typeid = "4"; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $row = 4; $channelid = ""; $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "",      "noflag"=> "",      "channel"=> $channelid,      "joinaid"=> $eju['field']['aid'],      "province_id"=> "",      "city_id"=> "",      "area_id"=> "",      "screen"=> "1",      "users_id"=> "", ); $tag = array (
  'typeid' => '4',
  'joinaid' => '$eju.field.aid',
  'orderby' => 'new',
  'limit' => '0,4',
  'id' => 'field',
); $tagArclist = new \think\template\taglib\eju\TagArclist; $_result = $tagArclist->getArclist($param, $row, "new", "","desc","",$tag,"0","on","",[],[]);if(is_array($_result["list"]) || $_result["list"] instanceof \think\Collection || $_result["list"] instanceof \think\Paginator): $i = 0; $e = 1;$k=0; $__LIST__ = is_array($_result["list"]) ? array_slice($_result["list"],0, $row, true) : $_result["list"]->slice(0, $row, true);  $__TAG__ = $_result["tag"];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$field["title"] = text_msubstr($field["title"], 0, 100, false);$field["seo_description"] = text_msubstr($field["seo_description"], 0, 160, true);$i= intval($key) + 1;$mod = ($i % 2 ); ?>
            <li class="nh_tree_list clearfix">
                <p class="nh_data"> <span><?php echo MyDate('m月d日',$field['add_time']); ?></span><em><?php echo MyDate('Y年',$field['add_time']); ?></em> </p>
                <div class="nh_list_con">
                    <p class="node-circle"> <i class="iconfont af-icon-time"></i> </p>
                    <div class="nh-tree-con"> <i class="icons_saledetails arrow"></i>
                        <!-- text -->
                        <div class="nh-tree-text">
                            <a target="_blank" href="<?php echo $field['arcurl']; ?>">
                                <?php echo html_msubstr($field['seo_description'],0,135); ?>...
                            </a>
                            <a  target="_blank" href="<?php echo $field['arcurl']; ?>">【阅读全文】</a>
                        </div>
                        <!-- end text -->
                    </div>
                </div>
                <div class="clear"></div>
            </li>
            <?php ++$e;$k++; $aid = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
        </ul>
    </div>
</div>
<!---楼盘详情 -->
<div class="nh_info_main" id="lpxq">
    <div class="info_main_lpinfo">
        <h2 class="nh_info_head">楼盘详情</h2>
        <ul>
            <li><span>楼盘名称：</span><?php echo $eju['field']['title']; ?></li>
            <li><span>所属区域：</span><?php echo get_province_name($eju['field']['province_id']); ?> - <?php echo get_city_name($eju['field']['city_id']); ?></li>
            <li><span>占地面积：</span><?php echo $eju['field']['floor_area']; ?><?php echo $eju['field']['floor_area_unit']; ?></li>
            <li><span>建筑面积：</span><?php echo $eju['field']['building_area']; ?><?php echo $eju['field']['building_area_unit']; ?></li>
            <li><span>装修状况：</span><?php echo implode(",",$eju['field']['fitment']); ?></li>
            <li><span>建筑类别：</span><?php echo implode(",",$eju['field']['building_type']); ?></li>
            <li><span>产权年限：</span><?php echo $eju['field']['property']; ?><?php echo $eju['field']['property_unit']; ?></li>
            <li><span>开 发 商：</span><?php echo $eju['field']['developer']; ?></li>
            <li><span>销售状态：</span><?php echo $eju['field']['sale_status']; ?></li>
            <li><span>楼盘均价：</span><?php echo $eju['field']['average_price']; ?><?php echo $eju['field']['price_units']; ?></li>
            <li><span>开盘日期：</span><?php echo myDate("Y年m月d日",$eju['field']['opening_time']); ?></li>
            <li><span>开盘备注：</span><?php echo $eju['field']['opening_time_memo']; ?></li>
            <li><span>交房时间：</span><?php echo myDate("Y年m月d日",$eju['field']['complate_time']); ?></li>
            <li><span>售楼地址：</span><?php echo $eju['field']['sales_address']; ?></li>

            <li> <span>主力户型：</span>
                <a href="#hx"><?php echo $eju['field']['main_unit']; ?></a>
            </li>
            <li><span>预售许可证：</span><?php echo $eju['field']['licence']; ?></li>
            <div class="clear"></div>
        </ul>
    </div>
    <div class="info_main_lpinfo">
        <h2 class="nh_info_head">小区规划</h2>
        <ul>
            <li><span>规划户数：</span><?php echo $eju['field']['households']; ?><?php echo $eju['field']['households_unit']; ?></li>
            <li><span>停 车 位：</span><?php echo $eju['field']['carport']; ?><?php echo $eju['field']['carport_unit']; ?></li>
            <li><span>物业类型：</span><?php echo implode(",",$eju['field']['manage_type']); ?></li>
            <li><span>容 积 率：</span><?php echo $eju['field']['plot_ratio']; ?><?php echo $eju['field']['plot_ratio_unit']; ?></li>
            <li><span>绿 化 率：</span><?php echo $eju['field']['greening_rate']; ?><?php echo $eju['field']['greening_rate_unit']; ?></li>
            <li><span>物 业 费：</span><?php echo $eju['field']['property_fee']; ?><?php echo $eju['field']['property_fee_unit']; ?></li>
            <li><span>物业公司：</span><?php echo $eju['field']['manage_company']; ?></li>
            <li><span>楼层状况：</span><?php echo $eju['field']['floor_case']; ?><?php echo $eju['field']['floor_case_unit']; ?></li>
            <div class="clear"></div>
        </ul>
    </div>
    <div class="info_main_jtinfo">
        <h2 class="nh_info_head">项目简介</h2>
        <p><?php echo $eju['field']['content']; ?></p>
    </div>
</div>

<!-- 楼盘相册 -->
<div class="nh_pic" id="pic">
    <h2 class="nh_head">楼盘相册</h2>
    <ul class="tabs">
        <li> <a href="javascript::void(0);" name=".total">全部(<span><?php echo count($eju['field']['photo_list']); ?></span>)</a> </li>
        <?php  if(!isset($aid) || empty($aid)) : $aid = "0"; endif; $tagFanglist = new \think\template\taglib\eju\TagFanglist; $_result = $tagFanglist->getFanglist("photo", $aid, "0,1000", "", "desc", "photo_type","xinfang");if(is_array($_result["list"]) || $_result["list"] instanceof \think\Collection || $_result["list"] instanceof \think\Paginator): $i = 0; $e = 1;$k = 0; $__LIST__ = is_array($_result["list"]) ? array_slice($_result["list"],0, 1000, true) : $_result["list"]->slice(0, 1000, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
        <li> <a href="javascript:;" name=".cate_<?php echo $field['photo_type']; ?>"><?php echo $field['photo_type']; ?>(<span><?php echo $field['count']; ?></span>)</a> </li>
        <?php ++$e;$k++; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
        <div class="clear"></div>
    </ul>
    <div class="content" style="height: 600px">
        <ul class="total" id="imgs">
            <?php  if(!isset($aid) || empty($aid)) : $aid = "0"; endif;if(is_array($eju['field']['photo_list']) || $eju['field']['photo_list'] instanceof \think\Collection || $eju['field']['photo_list'] instanceof \think\Paginator): $i = 0; $e = 1;$k = 0;$__LIST__ = is_array($eju['field']['photo_list']) ? array_slice($eju['field']['photo_list'],0,1000, true) : $eju['field']['photo_list']->slice(0,1000, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
            <li>
                <img layer-pname="<?php echo $field['photo_title']; ?>" src="<?php echo $field['photo_pic']; ?>" width="394" height="295" />
                <span class="nh_pic_text"><?php echo $field['photo_type']; ?></span>
            </li>
            <?php ++$e;$k++; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
        </ul>

        <?php  if(!isset($aid) || empty($aid)) : $aid = "0"; endif; $tagFanglist = new \think\template\taglib\eju\TagFanglist; $_result = $tagFanglist->getFanglist("photo", $aid, "0,1000", "", "desc", "photo_type","xinfang");if(is_array($_result["list"]) || $_result["list"] instanceof \think\Collection || $_result["list"] instanceof \think\Paginator): $i = 0; $e = 1;$k = 0; $__LIST__ = is_array($_result["list"]) ? array_slice($_result["list"],0, 1000, true) : $_result["list"]->slice(0, 1000, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
        <ul class="cate_<?php echo $field['photo_type']; ?>" id="imgs_<?php echo $field['photo_type']; ?>">
            <?php  if(!isset($aid) || empty($aid)) : $aid = "0"; endif;if(is_array($field['children']) || $field['children'] instanceof \think\Collection || $field['children'] instanceof \think\Paginator): $i = 0; $e = 1;$k = 0;$__LIST__ = is_array($field['children']) ? array_slice($field['children'],0,1000, true) : $field['children']->slice(0,1000, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field2): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
            <li>
                <img layer-pname="<?php echo $field2['photo_title']; ?>" src="<?php echo $field2['photo_pic']; ?>" width="394" height="295" />
                <span class="nh_pic_text"><?php echo $field2['photo_type']; ?></span>
            </li>
            <?php ++$e;$k++; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field2 = []; ?>
        </ul>
        <?php ++$e;$k++; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
        </ul>
    </div>
    <div class="xc_bt">显示更多图片</div>
</div>
<!-- 楼盘问答 -->
<?php  $param = array(      "is_recom"=> "",      "status"=> "",      "click"=> "",      "replies"=> "" ); $tagAsk = new \think\template\taglib\eju\TagAsk; $_result_tmp = $tagAsk->getAsk($param,"","on","off","1","10","ask_id","desc");if(!empty($_result_tmp)):  $__PAGES__ = $_result_tmp["pages"]; $__COUNT__ = $_result_tmp["count"];$field = $_result_tmp ;?>
<?php echo $field['hidden']; ?>
<div class="nh_zbpt lpwd" id="lpwd">
    <div class="head">
        <h2 class="nh_head">楼盘问答</h2>
        <a target="_blank" href="<?php echo $field['AddAskUrl']; ?>">
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
                        <a class="asking-tit" target="_blank" href="<?php echo $vo['AskUrl']; ?>"><?php echo $vo['ask_title']; ?></a>
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


<!-- 周边配套 -->
<div class="nh_zbpt" id="zbpt">
    <h2 class="nh_head">周边配套</h2>
    <div style="width: 1160px;margin: 0 auto">
        <div class="lp-map-s11 fl mt10" id="map_canvas" style="width: 830px;"></div>
        <?php  $tagSurroundings = new \think\template\taglib\eju\TagSurroundings; $_result_tmp = $tagSurroundings->getSurroundings($eju['field'],"map_canvas","lp-map-s","lp-map-a","map_total","lp-map-tab","map_result");if(!empty($_result_tmp)): $field = $_result_tmp ;?>
        <div class="lp-map-s12 fl mt10">
            <div class="clearfix map-tag">
                <?php if(is_array($field['list']) || $field['list'] instanceof \think\Collection || $field['list'] instanceof \think\Paginator): $i = 0; $e = 1;$k=0; $__LIST__ = $field['list'];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$vo): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
                <a href="javascript:;" class="lp-map-<?php echo $i; ?> lp-map-s fl icons" onclick="select_around(<?php echo $key; ?>);"><?php echo $vo; ?></a>
                <?php ++$e;$k++; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $vo = []; ?>
            </div>
            <p class="lpm-map-recond mt20"> 搜索到<span id="map_total"></span>条记录 </p>
            <div class="lp-map-tab" id="lp-map-tab">
                <ul class="lp-map-s19" id="map_result">
                </ul>
            </div>
        </div>
        <?php echo $field['hidden'];  else: echo htmlspecialchars_decode("");endif; $field = []; ?>
        <div class="clear">
        </div>
        <div class="h20">
        </div>
    </div>
</div>
<!--推荐楼盘-->
<div class="nh_tj" id="tj">
    <h2 class="nh_head">推荐楼盘</h2>
    <ul>
        <?php  $typeid = ""; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $row = 4; $channelid = "9"; $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "h",      "noflag"=> "",      "channel"=> $channelid,      "joinaid"=> "",      "province_id"=> "",      "city_id"=> "",      "area_id"=> "",      "screen"=> "1",      "users_id"=> "", ); $tag = array (
  'channelid' => '9',
  'flag' => 'h',
  'orderby' => 'new',
  'row' => '4',
  'id' => 'field',
); $tagArclist = new \think\template\taglib\eju\TagArclist; $_result = $tagArclist->getArclist($param, $row, "new", "","desc","",$tag,"0","on","",[],[]);if(is_array($_result["list"]) || $_result["list"] instanceof \think\Collection || $_result["list"] instanceof \think\Paginator): $i = 0; $e = 1;$k=0; $__LIST__ = is_array($_result["list"]) ? array_slice($_result["list"],0, $row, true) : $_result["list"]->slice(0, $row, true);  $__TAG__ = $_result["tag"];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$field["title"] = text_msubstr($field["title"], 0, 100, false);$field["seo_description"] = text_msubstr($field["seo_description"], 0, 160, true);$i= intval($key) + 1;$mod = ($i % 2 ); ?>
        <li>
            <a href="<?php echo $field['arcurl']; ?>">
                <img src="<?php echo $field['litpic']; ?>" width="286" height="230" />
            </a>
            <p> <a href="<?php echo $field['arcurl']; ?>"> [<?php echo get_city_name($field['city_id']); ?>]
                <?php echo $field['title']; ?></a><span class="right"><em><?php echo $field['average_price']; ?></em><?php echo $field['price_units']; ?></span> </p>
        </li>
        <?php ++$e;$k++; $aid = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
        <div class="clear"></div>
    </ul>
</div>
<script>
    function resetTabs(obj) {
        $(obj).parent().parent().next("div").find("ul").hide();
        $(obj).parent().parent().find("a").removeClass("current");
    }
    function xc_bt_show(){
        var SpanTag = $(".current span")[1].innerHTML;
        if( SpanTag < 7){
            $(".xc_bt").hide();
        }else{
            $(".nh_pic .content").css("height","600px");
            $(".xc_bt").text("显示更多户型");
            $(".xc_bt").show();
        }
    }
    function loadTab() {
        $(".content > ul").hide();
        $(".tabs").each(function() {
            $(this).find("li:first a").addClass("current");
        });
        $(".content").each(function() {
            $(this).find("ul:first").fadeIn();
        });
        $(".tabs a").on("click", function(e) {
            e.preventDefault();
            if ($(this).attr("class") == "current") {
                return;
            }else {
                resetTabs(this);
                $(this).addClass("current");
                console.log($(this).attr("name"));
                $($(this).attr("name")).fadeIn();
            }
        });
        xc_bt_show();
    }
    $(document).ready(function() {
        loadTab();
        $(".tabs a").click(function(){
            xc_bt_show();
        });
        $(".nh_hxcon li").eq(2).nextAll(".nh_hxcon li").hide();

        $(".hx_bt").click(function(){
            $(".nh_hxcon li").eq(2).nextAll(".nh_hxcon li").slideToggle(function(){
                if ($(".nh_hxcon li").eq(3).css("display")=='none') {
                    $(".hx_bt").text("显示更多户型");
                }else{
                    $(".hx_bt").text("收起更多户型");
                }
            });
        });

        $(".xc_bt").click(function(){
            if ($(".nh_pic .content").height() == 600) {
                $(".nh_pic .content").css("height","auto");
                $(".xc_bt").text("收起更多图片");
            }else{
                $(".nh_pic .content").css("height","600px");
                $(".xc_bt").text("显示更多图片");
            }
        });
        var navHeight = $("#navHeight").offset().top;
        var navFix = $("#nav_wrap");
        $(window).scroll(function() {
            if ($(this).scrollTop() > navHeight) {
                navFix.addClass("navFix");
            } else {
                navFix.removeClass("navFix");
            }
        });
    });
    //内容信息导航锚点
    $('.nav_wrap').navScroll({
        mobileDropdown : true,
        mobileBreakpoint : 828,
        scrollSpy : true
    });
</script>
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
<?php  $tagStatic = new \think\template\taglib\eju\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/jqmodal.js","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eju\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/laytpl.js","",""); echo $__VALUE__; ?>

<script type="text/html" id="template_room_detail">
    <dl class="mttitle">
        <dt>{{d.title}}</dt>
        <dd><a onclick="closeDetail();"></a></dd>
    </dl>
    <div class="mtalone">
        <ul>
            <li class="mtaico kpsj"></li>
            <li>开盘时间：<span id="open_time">2017年12月01日</span></li>
        </ul>
        <ul>
            <li class="mtaico jfsj"></li>
            <li style="width:150px;">入住时间：<span id="check_in_time">2018年12月31日</span></li>
        </ul>
    </div>
    <div class="mtalone">
        <ul>
            <li class="mtaico dy"></li>
            <li><span class="mtmr24">单</span>元：<span id="unit">{{d.danyuan}}</span></li>
        </ul>
        <ul>
            <li class="mtaico cs"></li>
            <li><span class="mtmr24">层</span>数：<span id="floor">{{d.floor_num}}</span>层</li>
        </ul>
    </div>
    <div class="mtalone">
        <ul>
            <li class="mtaico hs"></li>
            <li><span class="mtmr24">户</span>数：共<span id="households">{{d.room_num}}</span>户</li>
        </ul>
        <ul>
            <li class="mtaico thpb"></li>
            <li>梯户配比：<span id="stairs">{{d.floor_rate}}</span></li>
        </ul>
    </div>
    <dl class="mthx">
        <dt>
        <div class="wtafl mtaico hx"></div>
        <div class="wtafl"><span class="mtmr24">户</span>型：</div>
        </dt>
        <dd>
            <ul id="house_type_show">
                {{# for(var i = 0, len = d.list.length; i < len; i++){ }}
                <li>
                    <a target="_blank" href="#hx">
                        <span title="{{ d.list[i].title }}" style="width:120px;">{{ d.list[i].title }}</span>
                        <span style="width:150px;">{{ d.list[i].room }}室{{ d.list[i].ting }}厅{{ d.list[i].wei }}卫{{ d.list[i].yang }}阳台{{ d.list[i].chu }}厨</span>
                        <span style="width:75px;">{{ d.list[i].jianzhu_area }}㎡</span>
                    </a>
                </li>
                {{# } }}

            </ul>
        </dd>
    </dl>
</script>
<input type="hidden" id="saleman_qq" value="<?php echo $eju['field']['saleman']['saleman_qq']; ?>">
<input type="hidden" id="saleman_pic" value="<?php echo $eju['field']['saleman']['saleman_pic']; ?>">
<input type="hidden" id="saleman_name" value="<?php echo $eju['field']['saleman']['saleman_name']; ?>">
<input type="hidden" id="saleman_mobile" value="<?php echo $eju['field']['saleman']['saleman_mobile']; ?>">
<script>
    ;!function(){
        layer.use('extend/layer.ext.js', function(){
            //初始加载即调用，所以需放在ext回调里
            var _url = "";
            var saleman_qq = $("#saleman_qq").val();
            var saleman_pic = $("#saleman_pic").val();
            var saleman_name = $("#saleman_name").val();
            var saleman_mobile = $("#saleman_mobile").val();
            var chatUrl = 'http://wpa.qq.com/msgrd?v=3&uin='+saleman_qq+'&site=qq&menu=yes';
            var sale_phone = "<?php echo $eju['field']['sale_phone']; ?>";
            var phone_code = "<?php echo $eju['field']['phone_code']; ?>";
            if (phone_code){
                sale_phone = sale_phone+'转'+phone_code;
            }
            if (saleman_mobile == ''){
                saleman_mobile = sale_phone;
            }
            var srcUrl = saleman_pic;
            var piccon = '<div class="lpagent2">' +
                '<span class="lpagent_tel2">' +
                '<i class="iconfont af-icon-dianhuatianchong"></i>' +
                '<b>'+saleman_mobile+'</b></span>' +
                '<div class="lpagent_serv2">' +
                '<p class="lpagent_serv_img2 left">' +
                '<img src="'+srcUrl+'" width="80" height="84" /></p>' +
            '<div class="lpagent_serv_bt2 left"><p>置业经纪人：'+saleman_name+'</p>' +
            '<a target="_blank" href="'+chatUrl+'" style="cursor:pointer;"><span>在线咨询</span></a>' +
            '</div>' +
            '<div class="clear"></div></div></div>';

            $(".nh_pic .content ul li").click(function(){
                $(".hxbox_head,.hxbox_jg,.hxtest").remove();
                $(".xubox_layer").css({"top":"50%","margin-top":"-300px"})
            });
            $(".hx-list-img a").click(function(){
                $(".xubox_layer").css({"top":"50%","margin-top":"-300px"})
            });

            $(".selec-hx").click(function(){
                $(this).parents("li").find(".hx-list-img a img").click();
            });
            layer.ext = function(){
                layer.photosPage({
                    html:piccon,
                    title:'全部',
                    id: 100, //相册id，可选
                    parent:'#hx_0',
                    area:['1040px', '600px']
                });
                layer.photosPage({
                    html:piccon,
                    title:'1居室',
                    id: 100, //相册id，可选
                    parent:'#hx_1',
                    area:['1040px', '600px']
                });layer.photosPage({
                    html:piccon,
                    title:'2居室',
                    id: 100, //相册id，可选
                    parent:'#hx_2',
                    area:['1040px', '600px']
                });
                layer.photosPage({
                    html:piccon,
                    title:'3居室',
                    id: 100, //相册id，可选
                    parent:'#hx_3',
                    area:['1040px', '600px']
                });
                layer.photosPage({
                    html:piccon,
                    title:'4居室',
                    id: 100, //相册id，可选
                    parent:'#hx_4',
                    area:['1040px', '600px']
                });
                layer.photosPage({
                    html:piccon,
                    title:'5居室',
                    id: 100, //相册id，可选
                    parent:'#hx_5',
                    area:['1040px', '600px']
                });
                layer.photosPage({
                    html:piccon,
                    title:'全部图片',
                    id: 100, //相册id，可选
                    parent:'#imgs',
                    area:['1040px', '600px']
                });
                layer.photosPage({
                    html:piccon,
                    title:'样板间',
                    id: 100, //相册id，可选
                    parent:'#imgs_样板间',
                    area:['1040px', '600px']
                });
                layer.photosPage({
                    html:piccon,
                    title:'配套图',
                    id: 100, //相册id，可选
                    parent:'#imgs_配套图',
                    area:['1040px', '600px']
                });
                layer.photosPage({
                    html:piccon,
                    title:'实景图',
                    id: 100, //相册id，可选
                    parent:'#imgs_实景图',
                    area:['1040px', '600px']
                });
                layer.photosPage({
                    html:piccon,
                    title:'交通图',
                    id: 100, //相册id，可选
                    parent:'#imgs_交通图',
                    area:['1040px', '600px']
                });
                layer.photosPage({
                    html:piccon,
                    title:'效果图',
                    id: 100, //相册id，可选
                    parent:'#imgs_效果图',
                    area:['1040px', '600px']
                });

            };
        });
    }();
</script>

<script>
    $(function() {
        $('#shapan-i').jqDrag({
            attachment : '#shapan'
        });
        $('#room_title li').bind('click', function() {
            var index = $(this).index();
            $(this).addClass('selected').siblings().removeClass('selected');
            $('#room_list').children().eq(index).show().siblings().hide();
        });
        $('#shapan-i a').bind('click', function() {
            var id = $(this).data('bid'), url = "";
            $.get(url, {id : id}, function(result) {
                if (result.status == 1) {
                    if (result.data) {
                        $('#room_detail').show();
                        var gettpl = document.getElementById('template_room_detail').innerHTML;
                        laytpl(gettpl).render(result.data, function(html) {
                            document.getElementById('room_detail').innerHTML = html;
                        });
                    } else {
                        layer.msg('未找到相关数据');
                    }
                } else {
                    layer.msg('数据获取失败');
                }
            });
        });
    });
    function closeDetail() {
        $('#room_detail').hide();
    }

</script>

</body>
</html>
