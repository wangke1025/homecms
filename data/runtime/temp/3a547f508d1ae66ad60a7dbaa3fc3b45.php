<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:40:"./template/default/mobile/lists_tuan.htm";i:1571020242;s:68:"/www/wwwroot/ejucms.wingle.com.cn/template/default/mobile/header.htm";i:1573633356;}*/ ?>
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
            str_time = "<i class='iconfont icon-time kft-list-overicon'>距离报名结束还有<em class='data-day'>"+int_day + "</em>天<em class='data-hour'>" + int_hour + "</em>小时<em class='data-minute'>" + int_minute + "</em>分钟<em class='data-sec'>" + int_second + "</em>秒";
            timer.html(str_time);
            var self = this;
            setTimeout(function () { self.setTimeShow(); }, 1000); //D:正确
        } else {
            btn_baoming.html("报名结束");
            btn_baoming.prop("class","span-end");
            btn_baoming.attr("data-am-modal","");
            timer.text("结束");
            return;
        }
    }
</script>
<div id="wrapper" >
    <div class="af-kft-list">
        <ul class="am-list" id="lists" data-uri="" data-total="1">
            <?php  $typeid = "";  if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "",      "noflag"=> "",      "channel"=> "",      "joinaid"=> "",      "users_id"=> "", ); $tagList = new \think\template\taglib\eju\TagList; $_result_tmp = $tagList->getList($param, 10, "new", "apply_num,end_time", "desc", "on");if(is_array($_result_tmp) || $_result_tmp instanceof \think\Collection || $_result_tmp instanceof \think\Paginator): $i = 0; $e = 1;$k = 0; $__LIST__ = $_result = $_result_tmp["list"]; $__PAGES__ = $_result_tmp["pages"]; $__COUNT__ = $_result_tmp["count"];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$field["title"] = text_msubstr($field["title"], 0, 20, false);$field["seo_description"] = text_msubstr($field["seo_description"], 0, 160, true);$i= intval($key) + 1;$mod = ($i % 2 );  $aid = $field['joinaid']; $tag = array (
  'aid' => '$field.joinaid',
  'addfields' => 'discount',
  'id' => 'view',
  'huxing' => 'off',
  'photo' => 'off',
  'price' => 'off',
); if(!isset($aid) || empty($aid)) : $aid = $field['joinaid']; endif; $tagArcview = new \think\template\taglib\eju\TagArcview; $_result = $tagArcview->getArcview($aid, "discount",$tag); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator):  $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: $view = $__LIST__;?>
                <li class="am-g am-list-item-desced am-list-item-thumbed am-list-item-thumb-right pet_list_one_block">
                    <!--<div class="kft-list-dis">
                        <a href="<?php echo $field['arcurl']; ?>" >
                            <p class="am-u-sm-11"><?php if(!(empty($view['is_discount']) || (($view['is_discount'] instanceof \think\Collection || $view['is_discount'] instanceof \think\Paginator ) && $view['is_discount']->isEmpty()))): ?>[优惠] <?php echo $view['discount']; endif; ?></p>
                            <i class="am-u-sm-1 am-header-icon iconfont icon-goto"></i>
                            <div class="clear"></div>
                        </a>
                    </div>-->
                    <div class="kft-list-wrap">
                        <div class="kft-list-pic am-u-sm-4">
                            <a href="<?php echo $field['arcurl']; ?>">
                                <img data-original="<?php echo $field['litpic']; ?>"  class="kft-list-img lazy" />
                            </a>
                        </div>
                        <div class="kft-list-info am-u-sm-5">
                            <p class="list-info-head"><?php echo $field['title']; ?></p>
                            <p class="list-info-area">区域：<?php echo get_province_name($view['province_id']); ?>-<?php echo get_city_name($view['city_id']); ?></p>
                            <p class="list-info-price">均价：<em><?php echo $view['average_price']; ?></em><?php echo $view['price_units']; ?></p>
                        </div>
                        <div class="kft-list-btn am-u-sm-3">
                            <?php if($field['end_time'] > time()): ?>
                            <span id="btn_baoming_<?php echo $e; ?>" data-am-modal="{target:'#af-user-yy'}" data-house_id="8" data-condotour_id="9">立即报名</span>
                            <?php else: ?>
                            <span id="btn_baoming_<?php echo $e; ?>" data-am-modal="{target:'#af-user-yy'}" class="span-end" data-house_id="46" data-condotour_id="17">报名结束</span>
                            <?php endif; ?>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="kft-list-data">
                        <p class="list-data-time left" id="lefttime_<?php echo $e; ?>"></p>
                        <span class="list-data-bmnum right">已有<?php echo $field['apply_num']; ?>人报名</span>
                        <script type="text/javascript">
                            var st = new showTime("<?php echo $e; ?>","<?php echo $field['end_time']; ?>");
                            st.setTimeShow();
                        </script>
                        <div class="clear"></div>
                    </div>
                </li>
                <?php endif; else: echo htmlspecialchars_decode("");endif; unset($aid); $view = []; ++$e;$k++; $aid = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
        </ul>
        <div class="page-box">
      <ul class="pagination">
         <?php  $__PAGES__ = isset($__PAGES__) ? $__PAGES__ : ""; $tagPagelist = new \think\template\taglib\eju\TagPagelist; $__VALUE__ = $tagPagelist->getPagelist($__PAGES__, "index,pre,next,end", "2"); echo $__VALUE__; ?>
      </ul>
    </div>
    </div>
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
<?php  $tagStatic = new \think\template\taglib\eju\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/layer/layer.min.js","",""); echo $__VALUE__; ?>
<script>
    $(function() {
        $("img.lazy").lazyload();
    });
    $(document).ready(function(){
        $(".kft-list-btn span").click(function(){
            $("#house_id").val($(this).attr("data-house_id"));
            $("#condotour_id").val($(this).attr("data-condotour_id"));
        });
    });
</script>
<?php  $tagStatic = new \think\template\taglib\eju\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/laytpl.js","",""); echo $__VALUE__; ?>
<script>
    var page = 2,flag = true,params = {page: page};
    $(function() {
        $(window).scroll(function() {
        });
    });
</script>

</body>
</html>