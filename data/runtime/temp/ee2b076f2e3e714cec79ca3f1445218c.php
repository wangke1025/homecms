<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:45:"./application/admin/template/xinfang/edit.htm";i:1585121662;s:78:"/www/wwwroot/ejucms.wingle.com.cn/application/admin/template/public/layout.htm";i:1580687630;s:83:"/www/wwwroot/ejucms.wingle.com.cn/application/admin/template/field/addonextitem.htm";i:1584523246;s:78:"/www/wwwroot/ejucms.wingle.com.cn/application/admin/template/public/footer.htm";i:1580687630;}*/ ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="renderer" content="webkit">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <link rel="stylesheet" href="/public/plugins/layui/css/layui.css?v=<?php echo $version; ?>" media="all">
  <link rel="stylesheet" href="/public/static/admin/css/admin.css?v=<?php echo $version; ?>" media="all">
  <link rel="stylesheet" href="/public/static/admin/css/ey_layui.css?v=<?php echo $version; ?>" media="all">
  <link rel="stylesheet" href="/public/static/admin/font/ali-font/iconfont.css?v=<?php echo $version; ?>" media="all">
  <script type="text/javascript">
    var eyou_basefile = window.location.pathname;
    var module_name = "<?php echo MODULE_NAME; ?>";
    var __root_dir__ = "";
  </script>  
  <script type="text/javascript" src="/public/static/admin/js/jquery.js?v=<?php echo $version; ?>"></script>
  <script type="text/javascript" src="/public/static/admin/js/jquery-ui/jquery-ui.min.js?v=<?php echo $version; ?>"></script>
  <script type="text/javascript" src="/public/plugins/layer-v3.1.0/layer.js?v=<?php echo $version; ?>"></script>
  <script type="text/javascript" src="/public/static/admin/js/jquery.cookie.js?v=<?php echo $version; ?>"></script>
  <script type="text/javascript" src="/public/plugins/laydate/laydate.js?v=<?php echo $version; ?>"></script>
  <script src="/public/plugins/layui/layui.js?v=<?php echo $version; ?>"></script>
  <script src="/public/static/admin/js/global.js?v=<?php echo $version; ?>"></script>
</head>
<link rel="stylesheet" href="/public/static/admin/css/shapan.css?v=<?php echo $version; ?>" media="all">
<style>
    .images-upload .size{
        width: 100%;
        margin-top: 5px;
        font-size: 14px;
        float: left;
    }
    .images-upload .size input{
        width:12%;
		text-align: center;
    }
    .images-upload .pricearea{
        width: 100%;
        margin-top: 5px;
        font-size: 14px;
        float: left;
    }
    .images-upload .pricearea input{
        width:16%;
    }
    .images-upload .selectdiv{
        width: 100%;
        margin-top: 5px;
        font-size: 14px;
        float: left;
    }
    .images-upload .selectdiv select{
        width:48%;
    }
    .images-upload .characteristic{
        width: 100%;
        margin-top: 5px;
        font-size: 14px;
        float: left;
    }
    .operation_6 a{
        float: right;
    }


</style>
<body>
<script type="text/javascript" src="/public/plugins/Ueditor/ueditor.config.js?v=v2.4.0"></script>
<script type="text/javascript" src="/public/plugins/Ueditor/ueditor.all.min.js?v=v2.4.0"></script>
<script type="text/javascript" src="/public/plugins/Ueditor/lang/zh-cn/zh-cn.js?v=v2.4.0"></script>
<script type="text/javascript" src="/public/static/admin/js/jquery-ui/jquery-ui.min.js?v=<?php echo $version; ?>"></script>
<div class="layui-fluid" id="LAY-component-layer-list">
    <div class="layui-row">
        <div class="layui-col-md12">
            <div class="layui-card">
                <div class="">
                    <form class="layui-form" id="post_form"  action="<?php echo url('Xinfang/edit'); ?>" onsubmit="return false;">
                    <div class="bt-close">
                        <span class="layui-layer-setwin" ><a onclick="close_this();" class="layui-layer-ico layui-layer-close layui-layer-close1"></a></span>
                    </div>
                    <div class="layui-tab layui-tab-card">
                        <ul class="layui-tab-title">
                            <li class="layui-this">基本信息</li>
                            <li>配套信息</li>
                            <li>相册选项</li>
                            <li>户型选项</li>
							<li>沙盘选项</li>
                        </ul>
                        <div class="layui-tab-content web-system " style="padding:0 0 40px 0">
                            <!--常规选项-->
                            <div class="layui-tab-item layui-show">
                                <div class="layui-row layui-col-space15">

                                  <div class="layui-row w-max" style="padding-top: 20px;">
                                      <div class="layui-card">
                                         <div class="layui-card-body" pad15>
                                            <div class="layui-form" wid100 lay-filter="">
												<?php if(!(empty($channelJoin) || (($channelJoin instanceof \think\Collection || $channelJoin instanceof \think\Paginator ) && $channelJoin->isEmpty()))): ?>
												<div class="layui-form-item">
													<label class="layui-form-label"><?php if(!(empty($channelOrigin['join_must']) || (($channelOrigin['join_must'] instanceof \think\Collection || $channelOrigin['join_must'] instanceof \think\Paginator ) && $channelOrigin['join_must']->isEmpty()))): ?><b>*</b><?php endif; ?>关联<?php echo $channelJoin['ntitle']; ?></label>
													<div class="layui-input-inline layadmin-layer-demo">
														<input type="hidden" name="joinaid" id="joinaid" lay-verify="required" value="0">
														<button class="layui-btn layui-ton" data-name="<?php echo $channelJoin['ntitle']; ?>" data-url="<?php echo $ajaxSelectHouseUrl; ?>" data-type="select_house">选择<?php echo $channelJoin['ntitle']; ?></button>
														<span style="display: none;" class="tower-add" id="join_title"></span>
													</div>
												</div>
												<?php endif; if(!(empty($channelOrigin['is_join_user']) || (($channelOrigin['is_join_user'] instanceof \think\Collection || $channelOrigin['is_join_user'] instanceof \think\Paginator ) && $channelOrigin['is_join_user']->isEmpty()))): ?>
												<div class="layui-form-item">
													<label class="layui-form-label">关联经纪人</label>
													<div class="layui-input-inline layadmin-layer-demo" id="relate">
														<button class="layui-btn layui-ton" data-type="select_relate">选择经纪人</button>
														<?php if(is_array($relate_list) || $relate_list instanceof \think\Collection || $relate_list instanceof \think\Paginator): $i = 0; $e = 1;$k=0; $__LIST__ = $relate_list;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$vo): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
														<span class="tower-add relate"  id="relate_<?php echo $vo['id']; ?>" data-id="<?php echo $vo['id']; ?>">
															<input type="hidden" name="relate[]" value="<?php echo $vo['id']; ?>">
															<?php echo $vo['true_name']; ?><i class="layui-icon layui-icon-close"></i>
														</span>
														<?php ++$e;$k++; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $vo = []; ?>
													</div>
												</div>
												<?php endif; ?>
												<div class="layui-form-item">
													<label class="layui-form-label"><?php if(!(empty($addonFieldExtList['province_id']['ifrequire']) || (($addonFieldExtList['province_id']['ifrequire'] instanceof \think\Collection || $addonFieldExtList['province_id']['ifrequire'] instanceof \think\Paginator ) && $addonFieldExtList['province_id']['ifrequire']->isEmpty()))): ?><b>*</b><?php endif; ?>所属区域</label>
													<div class="layui-input-inline w120">
														<select name="province_id" id="province_id"  lay-filter="province_id" >
															<option value="0">请选择省</option>
															<?php $_result=get_province_list();if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$k=0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$vo): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
															<option value="<?php echo $vo['id']; ?>" <?php if($field['province_id'] == $vo['id']): ?> selected <?php endif; ?> ><?php echo $vo['name']; ?></option>
															<?php ++$e;$k++; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $vo = []; ?>
														</select>
													</div>
													<div class="layui-input-inline w120">
														<select name="city_id" id="city_id"   lay-filter="city_id"  lay-verify="check_cityid">
															<option value="">请选择城市</option>
														</select>
													</div>
													<div class="layui-input-inline none w120" id="area_div">
														<select name="area_id" id="area_id">
															<option value="">请选择区域</option>
														</select>
													</div>
													<div class="layui-form-mid layui-word-aux ey_helptips"></div>
													<div class="layui-form-inline2 ey_helptips_txt none">后台菜单>系统配置>区域管理</div>
												</div>
										      <div class="w-out fl mt15">
												   <label class="layui-form-label"><?php if(!(empty($addonFieldExtList['title']['ifrequire']) || (($addonFieldExtList['title']['ifrequire'] instanceof \think\Collection || $addonFieldExtList['title']['ifrequire'] instanceof \think\Paginator ) && $addonFieldExtList['title']['ifrequire']->isEmpty()))): ?><b>*</b><?php endif; ?><?php echo $channeltype_info['ntitle']; ?>名称</label>
													<div class="layui-input-inline w-in">
														<input type="text" name="title" id="title"  lay-verify="check_title" value="<?php echo $field['title']; ?>" class="layui-input">
													</div>
												</div>
												 <div class="w-out fl mt15">
												   <label class="layui-form-label"><?php if(!(empty($addonFieldExtList['average_price']['ifrequire']) || (($addonFieldExtList['average_price']['ifrequire'] instanceof \think\Collection || $addonFieldExtList['average_price']['ifrequire'] instanceof \think\Paginator ) && $addonFieldExtList['average_price']['ifrequire']->isEmpty()))): ?><b>*</b><?php endif; ?><?php echo $addonFieldExtList['average_price']['title']; ?></label>
												   <div class="layui-input-inline w-in" >
											          <div class="layui-input-inline w135" >
												         <input type="text" name="addonFieldSys[average_price]" id="average_price"  lay-verify="check_price" value="<?php echo $addonFieldExtList['average_price']['dfvalue']; ?>" class="layui-input" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');" onpaste="this.value=this.value.replace(/[^0-9]/g,'');">
													   </div>
												       <div class="layui-input-inline w120" >
												         <select name="addonFieldSys[price_units]" id="price_units" >
															 <?php if(is_array($addonFieldExtList['price_units']['dfvalue']) || $addonFieldExtList['price_units']['dfvalue'] instanceof \think\Collection || $addonFieldExtList['price_units']['dfvalue'] instanceof \think\Paginator): $i = 0; $__LIST__ = $addonFieldExtList['price_units']['dfvalue'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v2): $mod = ($i % 2 );++$i;?>
															 <option value="<?php echo $v2; ?>" <?php if(isset($addonFieldExtList['price_units']['trueValue']) AND in_array($v2, $addonFieldExtList['price_units']['trueValue'])): ?>selected<?php endif; ?>><?php echo $v2; ?></option>
															 <?php endforeach; endif; else: echo "" ;endif; ?>
														</select>
													   </div>
													</div>
												</div>
											    <div class="w-out fl mt15 <?php if(empty($arctype_html_show) || (($arctype_html_show instanceof \think\Collection || $arctype_html_show instanceof \think\Paginator ) && $arctype_html_show->isEmpty())): ?>none<?php endif; ?>">
												   <label class="layui-form-label"><b>*</b>所属栏目</label>
												   <div class="layui-input-inline w-in" >
														<select name="typeid" id="typeid" lay-verify="check_typeid">
															<option value="0">请选择栏目…</option>
															<?php echo $arctype_html; ?>
														</select>
													</div>
												</div>
												 <!--<div class="w-out fl mt15">-->
												   <!--<label class="layui-form-label">经纪人</label>-->
													 <!--<div class="layui-input-inline w-in">-->
														 <!--<select name="users_id" id="users_id"  lay-filter="users_id">-->
															 <!--<option value="0">请选择经纪人</option>-->
															 <!--<?php if(is_array($users_list) || $users_list instanceof \think\Collection || $users_list instanceof \think\Paginator): $i = 0; $e = 1;$k=0; $__LIST__ = $users_list;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$vo): $i= intval($key) + 1;$mod = ($i % 2 ); ?>-->
															 <!--<option data-name="<?php echo $vo['true_name']; ?>"  data-mobile="<?php echo $vo['mobile']; ?>" value="<?php echo $vo['id']; ?>" <?php if($field['users_id'] == $vo['id']): ?> selected="true" <?php endif; ?>><?php echo $vo['true_name']; ?></option>-->
															 <!--<?php ++$e;$k++; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $vo = []; ?>-->
														 <!--</select>-->
                                                        <!--</div>-->
                                                        <!--<div class="fr"></div>-->
                                                        <!--<div class="layui-form-inline2 ey_helptips_txt none"></div>-->
												<!--</div>-->
								                <div class="w-out fl mt15 <?php if(empty($addonFieldExtList['address']['ifeditable']) || (($addonFieldExtList['address']['ifeditable'] instanceof \think\Collection || $addonFieldExtList['address']['ifeditable'] instanceof \think\Paginator ) && $addonFieldExtList['address']['ifeditable']->isEmpty())): ?>none<?php endif; ?>">
												   <label class="layui-form-label"><?php if(!(empty($addonFieldExtList['address']['ifrequire']) || (($addonFieldExtList['address']['ifrequire'] instanceof \think\Collection || $addonFieldExtList['address']['ifrequire'] instanceof \think\Paginator ) && $addonFieldExtList['address']['ifrequire']->isEmpty()))): ?><b>*</b><?php endif; ?><?php echo $addonFieldExtList['address']['title']; ?></label>
													<div class="layui-input-inline w-in">
														<input type="text" name="addonFieldSys[address]" id="address"  lay-verify="check_address"  placeholder="<?php echo $addonFieldExtList['address']['remark']; ?>" value="<?php echo $addonFieldExtList['address']['dfvalue']; ?>" class="layui-input">
													</div>
												</div>
								                <div class="w-out fl mt15 <?php if(empty($addonFieldExtList['sales_address']['ifeditable']) || (($addonFieldExtList['sales_address']['ifeditable'] instanceof \think\Collection || $addonFieldExtList['sales_address']['ifeditable'] instanceof \think\Paginator ) && $addonFieldExtList['sales_address']['ifeditable']->isEmpty())): ?>none<?php endif; ?>">
												   <label class="layui-form-label"><?php if(!(empty($addonFieldExtList['sales_address']['ifrequire']) || (($addonFieldExtList['sales_address']['ifrequire'] instanceof \think\Collection || $addonFieldExtList['sales_address']['ifrequire'] instanceof \think\Paginator ) && $addonFieldExtList['sales_address']['ifrequire']->isEmpty()))): ?><b>*</b><?php endif; ?><?php echo $addonFieldExtList['sales_address']['title']; ?></label>
													<div class="layui-input-inline w-in">
														<input type="text" name="addonFieldExt[sales_address]" id="sales_address"   placeholder="<?php echo $addonFieldExtList['sales_address']['remark']; ?>" value="<?php echo $addonFieldExtList['sales_address']['dfvalue']; ?>" class="layui-input">
													</div>
												</div>
								                <div class="w-out fl mt15 <?php if(empty($addonFieldExtList['opening_time']['ifeditable']) || (($addonFieldExtList['opening_time']['ifeditable'] instanceof \think\Collection || $addonFieldExtList['opening_time']['ifeditable'] instanceof \think\Paginator ) && $addonFieldExtList['opening_time']['ifeditable']->isEmpty())): ?>none<?php endif; ?>">
												   <label class="layui-form-label"><?php if(!(empty($addonFieldExtList['opening_time']['ifrequire']) || (($addonFieldExtList['opening_time']['ifrequire'] instanceof \think\Collection || $addonFieldExtList['opening_time']['ifrequire'] instanceof \think\Paginator ) && $addonFieldExtList['opening_time']['ifrequire']->isEmpty()))): ?><b>*</b><?php endif; ?><?php echo $addonFieldExtList['opening_time']['title']; ?></label>
													<div class="layui-input-inline w-in">
													  <div class="layui-input-inline w155">
													  	<input type="text" name="addonFieldSys[opening_time]" id="opening_time"  placeholder="<?php echo date('Y-m-d H:i:s') ?>" autocomplete="off"  value="<?php echo $addonFieldExtList['opening_time']['dfvalue']; ?>" class="layui-input">
													  </div>
													  <div class="layui-input-inline w100 <?php if(empty($addonFieldExtList['opening_time_memo']['ifeditable']) || (($addonFieldExtList['opening_time_memo']['ifeditable'] instanceof \think\Collection || $addonFieldExtList['opening_time_memo']['ifeditable'] instanceof \think\Paginator ) && $addonFieldExtList['opening_time_memo']['ifeditable']->isEmpty())): ?>none<?php endif; ?>">
													  	<input type="text" name="addonFieldExt[opening_time_memo]" id="opening_time_memo"  placeholder="<?php echo $addonFieldExtList['opening_time_memo']['remark']; ?>" value="<?php echo $addonFieldExtList['opening_time_memo']['dfvalue']; ?>" class="layui-input">
													  </div>
													</div>
													<div class="fr"></div>
												    <div class="layui-form-inline2 ey_helptips_txt none"><?php echo $addonFieldExtList['opening_time']['remark']; ?></div>
												</div>
								                <div class="w-out fl mt15 <?php if(empty($addonFieldExtList['complate_time']['ifeditable']) || (($addonFieldExtList['complate_time']['ifeditable'] instanceof \think\Collection || $addonFieldExtList['complate_time']['ifeditable'] instanceof \think\Paginator ) && $addonFieldExtList['complate_time']['ifeditable']->isEmpty())): ?>none<?php endif; ?>">
												   <label class="layui-form-label"><?php if(!(empty($addonFieldExtList['complate_time']['ifrequire']) || (($addonFieldExtList['complate_time']['ifrequire'] instanceof \think\Collection || $addonFieldExtList['complate_time']['ifrequire'] instanceof \think\Paginator ) && $addonFieldExtList['complate_time']['ifrequire']->isEmpty()))): ?><b>*</b><?php endif; ?><?php echo $addonFieldExtList['complate_time']['title']; ?></label>
													<div class="layui-input-inline w-in">
													  <div class="layui-input-inline w155">
													  	<input type="text" name="addonFieldSys[complate_time]" id="complate_time"  placeholder="<?php echo date('Y-m-d H:i:s') ?>" autocomplete="off" value="<?php echo $addonFieldExtList['complate_time']['dfvalue']; ?>" class="layui-input">
													  </div>
													  <div class="layui-input-inline w100 <?php if(empty($addonFieldExtList['complate_time_memo']['ifeditable']) || (($addonFieldExtList['complate_time_memo']['ifeditable'] instanceof \think\Collection || $addonFieldExtList['complate_time_memo']['ifeditable'] instanceof \think\Paginator ) && $addonFieldExtList['complate_time_memo']['ifeditable']->isEmpty())): ?>none<?php endif; ?>">
													  	<input type="text" name="addonFieldExt[complate_time_memo]" id="complate_time_memo"  placeholder="<?php echo $addonFieldExtList['complate_time_memo']['remark']; ?>" value="<?php echo $addonFieldExtList['opening_time']['dfvalue']; ?>" class="layui-input">
													  </div>
													</div>
													<div class="fr"></div>
												    <div class="layui-form-inline2 ey_helptips_txt none"><?php echo $addonFieldExtList['complate_time']['remark']; ?></div>
												</div>
								                <div class="w-out fl mt15 <?php if(empty($addonFieldExtList['sale_phone']['ifeditable']) || (($addonFieldExtList['sale_phone']['ifeditable'] instanceof \think\Collection || $addonFieldExtList['sale_phone']['ifeditable'] instanceof \think\Paginator ) && $addonFieldExtList['sale_phone']['ifeditable']->isEmpty())): ?>none<?php endif; ?>">
												   <label class="layui-form-label"><?php if(!(empty($addonFieldExtList['sale_phone']['ifrequire']) || (($addonFieldExtList['sale_phone']['ifrequire'] instanceof \think\Collection || $addonFieldExtList['sale_phone']['ifrequire'] instanceof \think\Paginator ) && $addonFieldExtList['sale_phone']['ifrequire']->isEmpty()))): ?><b>*</b><?php endif; ?><?php echo $addonFieldExtList['sale_phone']['title']; ?></label>
													<div class="layui-input-inline w-in">
													  <div class="layui-input-inline w150">
													  	<input type="text" name="addonFieldSys[sale_phone]" id="sale_phone"  lay-verify="check_tellphone" placeholder="<?php echo $addonFieldExtList['sale_phone']['remark']; ?>" value="<?php echo $addonFieldExtList['sale_phone']['dfvalue']; ?>" class="layui-input" onkeyup="this.value=this.value.replace(/[^0-9-]/g,'');" onpaste="this.value=this.value.replace(/[^0-9-]/g,'');">
													  </div>
													  <div class="layui-input-inline w20">
													    转
													  </div>
													  <div class="layui-input-inline w80 <?php if(empty($addonFieldExtList['phone_code']['ifeditable']) || (($addonFieldExtList['phone_code']['ifeditable'] instanceof \think\Collection || $addonFieldExtList['phone_code']['ifeditable'] instanceof \think\Paginator ) && $addonFieldExtList['phone_code']['ifeditable']->isEmpty())): ?>none<?php endif; ?>">
													  	<input type="text" name="addonFieldSys[phone_code]" id="phone_code"  placeholder="<?php echo $addonFieldExtList['phone_code']['remark']; ?>" value="<?php echo $addonFieldExtList['phone_code']['dfvalue']; ?>" class="layui-input">
													  </div>
													</div>
												</div>
								                <div class="w-out fl mt15 <?php if(empty($addonFieldExtList['licence']['ifeditable']) || (($addonFieldExtList['licence']['ifeditable'] instanceof \think\Collection || $addonFieldExtList['licence']['ifeditable'] instanceof \think\Paginator ) && $addonFieldExtList['licence']['ifeditable']->isEmpty())): ?>none<?php endif; ?>">
												   <label class="layui-form-label"><?php if(!(empty($addonFieldExtList['licence']['ifrequire']) || (($addonFieldExtList['licence']['ifrequire'] instanceof \think\Collection || $addonFieldExtList['licence']['ifrequire'] instanceof \think\Paginator ) && $addonFieldExtList['licence']['ifrequire']->isEmpty()))): ?><b>*</b><?php endif; ?><?php echo $addonFieldExtList['licence']['title']; ?></label>
													<div class="layui-input-inline w-in">
														<input type="text" name="addonFieldExt[licence]" id="licence" placeholder="<?php echo $addonFieldExtList['licence']['remark']; ?>" value="<?php echo $addonFieldExtList['licence']['dfvalue']; ?>" class="layui-input">
													</div>
												</div>
								                <div class="w-out fl mt15 <?php if(empty($addonFieldExtList['developer']['ifeditable']) || (($addonFieldExtList['developer']['ifeditable'] instanceof \think\Collection || $addonFieldExtList['developer']['ifeditable'] instanceof \think\Paginator ) && $addonFieldExtList['developer']['ifeditable']->isEmpty())): ?>none<?php endif; ?>">
												   <label class="layui-form-label"><?php if(!(empty($addonFieldExtList['developer']['ifrequire']) || (($addonFieldExtList['developer']['ifrequire'] instanceof \think\Collection || $addonFieldExtList['developer']['ifrequire'] instanceof \think\Paginator ) && $addonFieldExtList['developer']['ifrequire']->isEmpty()))): ?><b>*</b><?php endif; ?><?php echo $addonFieldExtList['developer']['title']; ?></label>
													<div class="layui-input-inline w-in">
														<input type="text" name="addonFieldExt[developer]" id="developer" placeholder="<?php echo $addonFieldExtList['developer']['remark']; ?>" value="<?php echo $addonFieldExtList['developer']['dfvalue']; ?>" class="layui-input">
													</div>
												</div>
								                <div class="w-out fl mt15">
												   <label class="layui-form-label"><?php if(!(empty($addonFieldExtList['lng']['ifrequire']) || (($addonFieldExtList['lng']['ifrequire'] instanceof \think\Collection || $addonFieldExtList['lng']['ifrequire'] instanceof \think\Paginator ) && $addonFieldExtList['lng']['ifrequire']->isEmpty()))): ?><b>*</b><?php endif; ?>地图坐标</label>
													<div class="layui-input-inline w-in">
														<input type="text" name="map" id="map" lay-verify="check_map" placeholder="115.345,22.1349" value="<?php echo $map; ?>" class="layui-input">
													</div>
													<div class="layui-form-mid layui-word-aux layadmin-layer-demo fr" style="padding: 0!important">
                                                            <a class="layui-btn layui-btn-primary bt-address fl" data-type="map_mark" title="点击标注楼盘坐标"><i class="layui-icon layui-icon-location"></i></a>
                                                    </div>
												</div>

										     </div>
										 </div>
									  </div>
								   </div>

                                    <div class="layui-col-md12" style="padding-top:0;">
                                        <div class="layui-card">
                                            <div class="layui-card-body" pad15 style="padding-top: 0">
                                                <div class="layui-form" wid100 lay-filter="">
                                                  <div class="layui-form-item <?php if(empty($addonFieldExtList['sale_status']['ifeditable']) || (($addonFieldExtList['sale_status']['ifeditable'] instanceof \think\Collection || $addonFieldExtList['sale_status']['ifeditable'] instanceof \think\Paginator ) && $addonFieldExtList['sale_status']['ifeditable']->isEmpty())): ?>none<?php endif; ?>">
												   <label class="layui-form-label"><?php if(!(empty($addonFieldExtList['sale_status']['ifrequire']) || (($addonFieldExtList['sale_status']['ifrequire'] instanceof \think\Collection || $addonFieldExtList['sale_status']['ifrequire'] instanceof \think\Paginator ) && $addonFieldExtList['sale_status']['ifrequire']->isEmpty()))): ?><b>*</b><?php endif; ?><?php echo $addonFieldExtList['sale_status']['title']; ?></label>
													<div class="layui-input-inline w-max2">
														<?php if(is_array($addonFieldExtList['sale_status']['dfvalue']) || $addonFieldExtList['sale_status']['dfvalue'] instanceof \think\Collection || $addonFieldExtList['sale_status']['dfvalue'] instanceof \think\Paginator): $i = 0; $__LIST__ = $addonFieldExtList['sale_status']['dfvalue'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v2): $mod = ($i % 2 );++$i;?>
														<input type="radio" id="sale_status" name="addonFieldSys[sale_status]" <?php if(isset($addonFieldExtList['sale_status']['trueValue']) AND in_array($v2, $addonFieldExtList['sale_status']['trueValue'])): ?>checked="checked"<?php endif; ?> value="<?php echo $v2; ?>"  title="<?php echo $v2; ?>">
														<?php endforeach; endif; else: echo "" ;endif; ?>
													</div>
												   </div>
                                                   <div class="layui-form-item <?php if(empty($addonFieldExtList['characteristic']['ifeditable']) || (($addonFieldExtList['characteristic']['ifeditable'] instanceof \think\Collection || $addonFieldExtList['characteristic']['ifeditable'] instanceof \think\Paginator ) && $addonFieldExtList['characteristic']['ifeditable']->isEmpty())): ?>none<?php endif; ?>">
                                                        <label class="layui-form-label"><?php if(!(empty($addonFieldExtList['characteristic']['ifrequire']) || (($addonFieldExtList['characteristic']['ifrequire'] instanceof \think\Collection || $addonFieldExtList['characteristic']['ifrequire'] instanceof \think\Paginator ) && $addonFieldExtList['characteristic']['ifrequire']->isEmpty()))): ?><b>*</b><?php endif; ?><?php echo $addonFieldExtList['characteristic']['title']; ?></label>
                                                        <div class="layui-input-inline w-max2">
															<?php if(is_array($addonFieldExtList['characteristic']['dfvalue']) || $addonFieldExtList['characteristic']['dfvalue'] instanceof \think\Collection || $addonFieldExtList['characteristic']['dfvalue'] instanceof \think\Paginator): $i = 0; $__LIST__ = $addonFieldExtList['characteristic']['dfvalue'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v2): $mod = ($i % 2 );++$i;?>
															<input type="checkbox" lay-skin="primary" name="addonFieldSys[characteristic][]" <?php if(isset($addonFieldExtList['characteristic']['trueValue']) AND in_array($v2, $addonFieldExtList['characteristic']['trueValue'])): ?>checked="checked"<?php endif; ?> value="<?php echo $v2; ?>"  title="<?php echo $v2; ?>">
															<?php endforeach; endif; else: echo "" ;endif; ?>

                                                        </div>
                                                    </div>
                                                    <div class="layui-form-item <?php if(empty($addonFieldExtList['fitment']['ifeditable']) || (($addonFieldExtList['fitment']['ifeditable'] instanceof \think\Collection || $addonFieldExtList['fitment']['ifeditable'] instanceof \think\Paginator ) && $addonFieldExtList['fitment']['ifeditable']->isEmpty())): ?>none<?php endif; ?>">
                                                        <label class="layui-form-label"><?php if(!(empty($addonFieldExtList['fitment']['ifrequire']) || (($addonFieldExtList['fitment']['ifrequire'] instanceof \think\Collection || $addonFieldExtList['fitment']['ifrequire'] instanceof \think\Paginator ) && $addonFieldExtList['fitment']['ifrequire']->isEmpty()))): ?><b>*</b><?php endif; ?><?php echo $addonFieldExtList['fitment']['title']; ?></label>
                                                        <div class="layui-input-inline w-max2">
															<?php if(is_array($addonFieldExtList['fitment']['dfvalue']) || $addonFieldExtList['fitment']['dfvalue'] instanceof \think\Collection || $addonFieldExtList['fitment']['dfvalue'] instanceof \think\Paginator): $i = 0; $__LIST__ = $addonFieldExtList['fitment']['dfvalue'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v2): $mod = ($i % 2 );++$i;?>
															<input type="checkbox" lay-skin="primary" name="addonFieldSys[fitment][]" <?php if(isset($addonFieldExtList['fitment']['trueValue']) AND in_array($v2, $addonFieldExtList['fitment']['trueValue'])): ?>checked="checked"<?php endif; ?> value="<?php echo $v2; ?>"  title="<?php echo $v2; ?>">
															<?php endforeach; endif; else: echo "" ;endif; ?>

                                                        </div>
                                                    </div>
                                                    <div class="layui-form-item <?php if(empty($addonFieldExtList['building_type']['ifeditable']) || (($addonFieldExtList['building_type']['ifeditable'] instanceof \think\Collection || $addonFieldExtList['building_type']['ifeditable'] instanceof \think\Paginator ) && $addonFieldExtList['building_type']['ifeditable']->isEmpty())): ?>none<?php endif; ?>">
                                                        <label class="layui-form-label"><?php if(!(empty($addonFieldExtList['building_type']['ifrequire']) || (($addonFieldExtList['building_type']['ifrequire'] instanceof \think\Collection || $addonFieldExtList['building_type']['ifrequire'] instanceof \think\Paginator ) && $addonFieldExtList['building_type']['ifrequire']->isEmpty()))): ?><b>*</b><?php endif; ?><?php echo $addonFieldExtList['building_type']['title']; ?></label>
                                                        <div class="layui-input-inline w-max2">
															<?php if(is_array($addonFieldExtList['building_type']['dfvalue']) || $addonFieldExtList['building_type']['dfvalue'] instanceof \think\Collection || $addonFieldExtList['building_type']['dfvalue'] instanceof \think\Paginator): $i = 0; $__LIST__ = $addonFieldExtList['building_type']['dfvalue'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v2): $mod = ($i % 2 );++$i;?>
															<input type="checkbox" lay-skin="primary" name="addonFieldSys[building_type][]" <?php if(isset($addonFieldExtList['building_type']['trueValue']) AND in_array($v2, $addonFieldExtList['building_type']['trueValue'])): ?>checked="checked"<?php endif; ?> value="<?php echo $v2; ?>"  title="<?php echo $v2; ?>">
															<?php endforeach; endif; else: echo "" ;endif; ?>
                                                        </div>
                                                    </div>
                                                    <div class="layui-form-item <?php if(empty($addonFieldExtList['manage_type']['ifeditable']) || (($addonFieldExtList['manage_type']['ifeditable'] instanceof \think\Collection || $addonFieldExtList['manage_type']['ifeditable'] instanceof \think\Paginator ) && $addonFieldExtList['manage_type']['ifeditable']->isEmpty())): ?>none<?php endif; ?>">
                                                        <label class="layui-form-label"><?php if(!(empty($addonFieldExtList['manage_type']['ifrequire']) || (($addonFieldExtList['manage_type']['ifrequire'] instanceof \think\Collection || $addonFieldExtList['manage_type']['ifrequire'] instanceof \think\Paginator ) && $addonFieldExtList['manage_type']['ifrequire']->isEmpty()))): ?><b>*</b><?php endif; ?><?php echo $addonFieldExtList['manage_type']['title']; ?></label>
                                                        <div class="layui-input-inline w-max2">
															<?php if(is_array($addonFieldExtList['manage_type']['dfvalue']) || $addonFieldExtList['manage_type']['dfvalue'] instanceof \think\Collection || $addonFieldExtList['manage_type']['dfvalue'] instanceof \think\Paginator): $i = 0; $__LIST__ = $addonFieldExtList['manage_type']['dfvalue'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v2): $mod = ($i % 2 );++$i;?>
															<input type="checkbox" lay-skin="primary" name="addonFieldSys[manage_type][]" <?php if(isset($addonFieldExtList['manage_type']['trueValue']) AND in_array($v2, $addonFieldExtList['manage_type']['trueValue'])): ?>checked="checked"<?php endif; ?> value="<?php echo $v2; ?>"  title="<?php echo $v2; ?>">
															<?php endforeach; endif; else: echo "" ;endif; ?>
                                                        </div>
                                                    </div>
                                                    <div class="layui-form-item">
                                                        <label class="layui-form-label">文档属性</label>
                                                        <div class="layui-input-inline w-max2">
                                                            <input type="checkbox" lay-filter="is_head" id="is_head" lay-skin="primary" title="刚需[h]" value="1" <?php if($field['is_head'] == 1): ?>checked<?php endif; ?>>
                                                            <input type="checkbox" lay-filter="is_recom" id="is_recom" lay-skin="primary" title="推荐[c]" value="1" <?php if($field['is_recom'] == 1): ?>checked<?php endif; ?>>
                                                            <input type="checkbox" lay-filter="is_special" id="is_special" lay-skin="primary" title="特推[a]" value="1" <?php if($field['is_special'] == 1): ?>checked<?php endif; ?> >
                                                            <input type="checkbox" lay-filter="is_b" id="is_b" lay-skin="primary" title="热销[b]" value="1" <?php if($field['is_b'] == 1): ?>checked<?php endif; ?> >
                                                            <input type="checkbox" lay-filter="is_litpic" id="is_litpic" lay-skin="primary" title="图片[p]" value="1" <?php if($field['is_litpic'] == 1): ?>checked<?php endif; ?>>

															<input type="checkbox" lay-filter="is_sale" id="is_sale" lay-skin="primary" title="特价[s]" value="1" <?php if($field['is_sale'] == 1): ?>checked<?php endif; ?>>
															<input type="checkbox" lay-filter="is_moods" id="is_moods" lay-skin="primary" title="人气[m]" value="1" <?php if($field['is_moods'] == 1): ?>checked<?php endif; ?>>
                                                            <input type="checkbox" lay-filter="is_jump" id="is_jump"  lay-skin="primary" lay-filter="is_jump" title="跳转[j]" value="1" <?php if($field['is_jump'] == 1): ?>checked<?php endif; ?> >

                                                            <input type="hidden" name="is_head" value="<?php echo $field['is_head']; ?>">
                                                            <input type="hidden" name="is_recom" value="<?php echo $field['is_recom']; ?>">
                                                            <input type="hidden" name="is_special" value="<?php echo $field['is_special']; ?>">
                                                            <input type="hidden" name="is_b" value="<?php echo $field['is_b']; ?>">
                                                            <input type="hidden" name="is_litpic" value="<?php echo $field['is_litpic']; ?>">

															<input type="hidden" name="is_sale" value="<?php echo $field['is_sale']; ?>">
															<input type="hidden" name="is_moods" value="<?php echo $field['is_moods']; ?>">
                                                            <input type="hidden" name="is_jump" value="<?php echo $field['is_jump']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="layui-form-item <?php if($field['is_jump'] !=1): ?>none<?php endif; ?>" id="jump_div">
                                                        <label class="layui-form-label">跳转网址</label>
                                                        <div class="layui-input-inline">
                                                            <input type="text" name="jumplinks" id="jumplinks" value="<?php echo $field['jumplinks']; ?>" class="layui-input"  placeholder="http://">
                                                            <p>请输入完整的URL网址（包含http或https），设置后访问该条信息将直接跳转到设置的网址</p>
                                                        </div>
                                                    </div>
                                                    <div class="layui-form-item">
                                                        <label class="layui-form-label"><?php if(!(empty($addonFieldExtList['litpic']['ifrequire']) || (($addonFieldExtList['litpic']['ifrequire'] instanceof \think\Collection || $addonFieldExtList['litpic']['ifrequire'] instanceof \think\Paginator ) && $addonFieldExtList['litpic']['ifrequire']->isEmpty()))): ?><b>*</b><?php endif; ?>缩略图</label>
                                                        <div class="layui-input-inline">
                                                            <div class="upload-box">
                                                              <div class="upload-img fl">
                                                                <div class="icaction none">
                                                                  <span class="load_images">
                                                                     <a href="javascript:void(0);" onclick="BigImages($('#img_litpic').attr('src'));">
                                                                     <i class="layui-icon layui-icon-search mr5"></i>查看
                                                                     </a>
                                                                  </span>
                                                                  <span class="load_images">
                                                                    <a href="javascript:void(0);" data-inputid="litpic" onclick="DelImages(this);">
                                                                    <i class="layui-icon layui-icon-delete mr5"></i>删除
                                                                    </a>
                                                                  </span>
                                                                </div>
                                                                <div class="cover-bg none"></div>
                                                                <img id="img_litpic" src="<?php echo get_default_pic($field['litpic']); ?>">
                                                              </div>
                                                              <div class="upload-right fl">
                                                                <button class="layui-btn test-upload-demoMore layui-btn-primary layui-btn-sm fl mb10 mr5" lay-data="{number:1,ey_inputId:'litpic',ey_savepath:'allimg'}"><i class="layui-icon">&#xe67c;</i>上传图片</button>
                                                                <button class="layui-btn layui-btn-sm layui-btn-primary layui-btn-sm fl mb10" onClick="GetPictureFolder(1,'litpic');"><i class="layui-icon">&#xe64a;</i>图库</button>
                                                                <input name="litpic" id="litpic" placeholder="图片地址" value="<?php echo (isset($field['litpic']) && ($field['litpic'] !== '')?$field['litpic']:''); ?>" class="layui-input">
                                                              </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!--折叠面板--stra-->
                                                    <div class="layui-collapse mt20" lay-filter="component-panel">
                                                        <div class="layui-colla-item">
                                                            <h2 class="layui-colla-title">SEO选项</h2>
                                                            <div class="layui-colla-content">
                                                                <div class="" wid100 lay-filter="">
                                                                    <div class="layui-form-item">
                                                                        <label class="layui-form-label">TAG标签</label>
                                                                        <div class="layui-input-inline">
                                                                            <input type="text" value="<?php echo $field['tags']; ?>" name="tags" id="tags" class="layui-input">
                                                                        </div>
                                                                        <div class="layui-input-inline layadmin-layer-demo">
                                                                            <a class="layui-btn layui-btn-sm" data-type="tags_mark">管理</a>
                                                                            <div class="layui-form-mid layui-word-aux ey_helptips"></div>
                                                                            <div class="layui-form-inline2 ey_helptips_txt none">多个标签用英文逗号（,）分开，单个标签小于12字节</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="layui-form-item">
                                                                        <label class="layui-form-label">SEO标题</label>
                                                                        <div class="layui-input-inline">
                                                                            <input type="text" name="seo_title" id="seo_title" value="<?php echo $field['seo_title']; ?>" class="layui-input">
                                                                        </div>
                                                                        <div class="layui-input-inline layui-form-mid layui-word-aux ey_helptips"></div>
                                                                        <div class="layui-form-inline2 ey_helptips_txt none">一般不超过80个字符，为空时系统自动构成，可以到 <a href="<?php echo url('Seo/index', array('inc_type'=>'seo')); ?>">SEO设置 - SEO基础</a> 中设置构成规则。</div>
                                                                    </div>
                                                                    <div class="layui-form-item">
                                                                        <label class="layui-form-label">SEO关键词</label>
                                                                        <div class="layui-input-inline">
                                                                            <input type="text" name="seo_keywords" id="seo_keywords" value="<?php echo $field['seo_keywords']; ?>" class="layui-input">
                                                                        </div>
                                                                        <div class="layui-input-inline layui-form-mid layui-word-aux ey_helptips"></div>
                                                                        <div class="layui-form-inline2 ey_helptips_txt none">一般不超过100个字符，多个关键词请用英文逗号（,）隔开，建议3到5个关键词。</div>
                                                                    </div>
                                                                    <div class="layui-form-item">
                                                                        <label class="layui-form-label">SEO描述</label>
                                                                        <div class="layui-input-inline">
                                                                            <textarea name="seo_description" class="layui-textarea"><?php echo $field['seo_description']; ?></textarea>
                                                                        </div>
                                                                        <div class="layui-input-inline layui-form-mid layui-word-aux ey_helptips"></div>
                                                                        <div class="layui-form-inline2 ey_helptips_txt none">一般不超过200个字符，不填写时系统自动提取正文的前200个字符</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="layui-colla-item">
                                                            <h2 class="layui-colla-title">其他选项</h2>
                                                            <div class="layui-colla-content">
                                                                <div class="" wid100 lay-filter="">
                                                                    <div class="layui-form-item">
                                                                        <label class="layui-form-label">作者</label>
                                                                        <div class="layui-input-inline">
                                                                            <input type="text" value="<?php echo $field['author']; ?>" name="author" id="author" class="layui-input">
                                                                        </div>
                                                                        <div class="layui-input-inline layadmin-layer-demo">
                                                                            <a class="layui-btn layui-btn-sm" data-type="author_mark">设置</a>
                                                                            <div class="layui-form-mid layui-word-aux ey_helptips"></div>
                                                                            <div class="layui-form-inline2 ey_helptips_txt none">设置作者默认名称（将同步至管理员笔名）</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="layui-form-item">
                                                                        <label class="layui-form-label">浏览量</label>
                                                                        <div class="layui-input-inline">
                                                                            <input type="text" value="<?php echo $field['click']; ?>" name="click" id="click" value="465" class="layui-input">
                                                                        </div>
                                                                    </div>
                                                                    <div class="layui-form-item">
                                                                        <label class="layui-form-label">阅读权限</label>
                                                                        <div class="layui-input-inline">
                                                                            <select name="arcrank" id="arcrank">
                                                                                <?php if(is_array($arcrank_list) || $arcrank_list instanceof \think\Collection || $arcrank_list instanceof \think\Paginator): $i = 0; $__LIST__ = $arcrank_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                                                                <option value="<?php echo $vo['rank']; ?>" <?php if($vo['rank'] == $field['arcrank']): ?>selected<?php endif; ?>><?php echo $vo['name']; ?></option>
                                                                                <?php endforeach; endif; else: echo "" ;endif; ?>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="layui-form-item">
                                                                        <label class="layui-form-label">发布时间</label>
                                                                        <div class="layui-input-inline">
                                                                            <input type="text" class="layui-input" id="add_time" name="add_time" value="<?php echo date('Y-m-d H:i:s',$field['add_time']); ?>"  autocomplete="off"  placeholder="yyyy-MM-dd HH:mm:ss">
                                                                        </div>
                                                                    </div>
                                                                    <div class="layui-form-item">
                                                                        <label class="layui-form-label">文档模板</label>
                                                                        <div class="layui-input-inline">
                                                                            <select name="tempview" id="tempview">
                                                                                <?php if(is_array($templateList) || $templateList instanceof \think\Collection || $templateList instanceof \think\Paginator): $i = 0; $__LIST__ = $templateList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                                                                <option value="<?php echo $vo; ?>" <?php if($vo == $tempview): ?>selected<?php endif; ?>><?php echo $vo; ?></option>
                                                                                <?php endforeach; endif; else: echo "" ;endif; ?>
                                                                            </select>
                                                                            <input type="hidden" name="type_tempview" value="<?php echo $tempview; ?>" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--折叠面板--end-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--项目选项-->
                            <div class="layui-tab-item ">
                                <div class="layui-row layui-col-space15">
                                   <div class="layui-row w-max" style="padding-top: 20px;">
                                      <div class="layui-card">
                                         <div class="layui-card-body" pad15>
                                            <div class="layui-form" wid100 lay-filter="">

                                           	  <div class="layui-form-item <?php if(empty($addonFieldExtList['is_discount']['ifeditable']) || (($addonFieldExtList['is_discount']['ifeditable'] instanceof \think\Collection || $addonFieldExtList['is_discount']['ifeditable'] instanceof \think\Paginator ) && $addonFieldExtList['is_discount']['ifeditable']->isEmpty())): ?>none<?php endif; ?>">
												  <label class="layui-form-label"><?php if(!(empty($addonFieldExtList['is_discount']['ifrequire']) || (($addonFieldExtList['is_discount']['ifrequire'] instanceof \think\Collection || $addonFieldExtList['is_discount']['ifrequire'] instanceof \think\Paginator ) && $addonFieldExtList['is_discount']['ifrequire']->isEmpty()))): ?><b>*</b><?php endif; ?><?php echo $addonFieldExtList['is_discount']['title']; ?></label>
												  <div class="layui-input-inline ">
													  <input type="checkbox" lay-skin="switch" lay-filter="addonFieldSys[is_discount]" id="addonFieldSys[is_discount]"  lay-text="是|否" <?php if($addonFieldExtList['is_discount']['dfvalue'] == 1): ?>checked<?php endif; ?> >
													  <input type="hidden" name="addonFieldSys[is_discount]" value="<?php echo $addonFieldExtList['is_discount']['dfvalue']; ?>">
													</div>
											  </div>
											  <div <?php if($addonFieldExtList['is_discount']['dfvalue'] == 1): ?>class="layui-form-item"<?php else: ?>class="layui-form-item none"<?php endif; ?>  id="discount_div">
												  <label class="layui-form-label"><?php if(!(empty($addonFieldExtList['is_discount']['ifrequire']) || (($addonFieldExtList['is_discount']['ifrequire'] instanceof \think\Collection || $addonFieldExtList['is_discount']['ifrequire'] instanceof \think\Paginator ) && $addonFieldExtList['is_discount']['ifrequire']->isEmpty()))): ?><b>*</b><?php endif; ?><?php echo $addonFieldExtList['is_discount']['title']; ?></label>
												   <div class="layui-input-inline ">
													  	<textarea name="addonFieldExt[discount]" id="discount" class="layui-textarea" placeholder="<?php echo $addonFieldExtList['discount']['remark']; ?>"><?php echo $addonFieldExtList['discount']['dfvalue']; ?></textarea>
													</div>
											  </div>
                                           	  <div class="w-out fl mt15 <?php if(empty($addonFieldExtList['price_time']['ifeditable']) || (($addonFieldExtList['price_time']['ifeditable'] instanceof \think\Collection || $addonFieldExtList['price_time']['ifeditable'] instanceof \think\Paginator ) && $addonFieldExtList['price_time']['ifeditable']->isEmpty())): ?>none<?php endif; ?>">
												  <label class="layui-form-label"><?php if(!(empty($addonFieldExtList['price_time']['ifrequire']) || (($addonFieldExtList['price_time']['ifrequire'] instanceof \think\Collection || $addonFieldExtList['price_time']['ifrequire'] instanceof \think\Paginator ) && $addonFieldExtList['price_time']['ifrequire']->isEmpty()))): ?><b>*</b><?php endif; ?><?php echo $addonFieldExtList['price_time']['title']; ?></label>
												  <div class="layui-input-inline w-in">
													 <input type="text" name="addonFieldExt[price_time]" id="price_time" placeholder="<?php echo date('Y-m-d H:i:s') ?>" autocomplete="off" value="<?php echo $addonFieldExtList['price_time']['dfvalue']; ?>" class="layui-input">
												  </div>
												  <div class="layui-input-inline layui-input-company">
													  <?php echo $addonFieldExtList['price_time']['dfvalue_unit']; ?>
												  </div>
											  </div>
                                           	  <div class="w-out fl mt15 <?php if(empty($addonFieldExtList['total_price']['ifeditable']) || (($addonFieldExtList['total_price']['ifeditable'] instanceof \think\Collection || $addonFieldExtList['total_price']['ifeditable'] instanceof \think\Paginator ) && $addonFieldExtList['total_price']['ifeditable']->isEmpty())): ?>none<?php endif; ?>">
												  <label class="layui-form-label"><?php if(!(empty($addonFieldExtList['total_price']['ifrequire']) || (($addonFieldExtList['total_price']['ifrequire'] instanceof \think\Collection || $addonFieldExtList['total_price']['ifrequire'] instanceof \think\Paginator ) && $addonFieldExtList['total_price']['ifrequire']->isEmpty()))): ?><b>*</b><?php endif; ?><?php echo $addonFieldExtList['total_price']['title']; ?></label>
												  <div class="layui-input-inline w-in">
													 <input type="text" name="addonFieldSys[total_price]" id="total_price"  placeholder="<?php echo $addonFieldExtList['total_price']['remark']; ?>" value="<?php echo $addonFieldExtList['total_price']['dfvalue']; ?>"  onkeyup="this.value=this.value.replace(/[^0-9.]/g,'');" onpaste="this.value=this.value.replace(/[^0-9.]/g,'');" class="layui-input">
												  </div>
												   <div class="layui-input-inline layui-input-company">
													   <?php echo $addonFieldExtList['total_price']['dfvalue_unit']; ?>
												   </div>
											  </div>
                                           	  <div class="w-out fl mt15 <?php if(empty($addonFieldExtList['property_fee']['ifeditable']) || (($addonFieldExtList['property_fee']['ifeditable'] instanceof \think\Collection || $addonFieldExtList['property_fee']['ifeditable'] instanceof \think\Paginator ) && $addonFieldExtList['property_fee']['ifeditable']->isEmpty())): ?>none<?php endif; ?>">
												  <label class="layui-form-label"><?php if(!(empty($addonFieldExtList['property_fee']['ifrequire']) || (($addonFieldExtList['property_fee']['ifrequire'] instanceof \think\Collection || $addonFieldExtList['property_fee']['ifrequire'] instanceof \think\Paginator ) && $addonFieldExtList['property_fee']['ifrequire']->isEmpty()))): ?><b>*</b><?php endif; ?><?php echo $addonFieldExtList['property_fee']['title']; ?></label>
												  <div class="layui-input-inline w-in">
													 <input type="text" name="addonFieldExt[property_fee]" id="property_fee"  placeholder="<?php echo $addonFieldExtList['property_fee']['remark']; ?>"  value="<?php echo $addonFieldExtList['property_fee']['dfvalue']; ?>" class="layui-input">
												  </div>
													<div class="layui-input-inline layui-input-company">
														<?php echo $addonFieldExtList['property_fee']['dfvalue_unit']; ?>
													</div>
											  </div>
                                           	  <div class="w-out fl mt15 <?php if(empty($addonFieldExtList['manage_company']['ifeditable']) || (($addonFieldExtList['manage_company']['ifeditable'] instanceof \think\Collection || $addonFieldExtList['manage_company']['ifeditable'] instanceof \think\Paginator ) && $addonFieldExtList['manage_company']['ifeditable']->isEmpty())): ?>none<?php endif; ?>">
												  <label class="layui-form-label"><?php if(!(empty($addonFieldExtList['manage_company']['ifrequire']) || (($addonFieldExtList['manage_company']['ifrequire'] instanceof \think\Collection || $addonFieldExtList['manage_company']['ifrequire'] instanceof \think\Paginator ) && $addonFieldExtList['manage_company']['ifrequire']->isEmpty()))): ?><b>*</b><?php endif; ?><?php echo $addonFieldExtList['manage_company']['title']; ?></label>
												  <div class="layui-input-inline w-in">
													 <input type="text" name="addonFieldExt[manage_company]" id="manage_company" placeholder="<?php echo $addonFieldExtList['manage_company']['remark']; ?>" value="<?php echo $addonFieldExtList['manage_company']['dfvalue']; ?>" class="layui-input">
												  </div>
													<div class="layui-input-inline layui-input-company">
														<?php echo $addonFieldExtList['manage_company']['dfvalue_unit']; ?>
													</div>
											  </div>
                                              <div class="w-out fl mt15 <?php if(empty($addonFieldExtList['building_num']['ifeditable']) || (($addonFieldExtList['building_num']['ifeditable'] instanceof \think\Collection || $addonFieldExtList['building_num']['ifeditable'] instanceof \think\Paginator ) && $addonFieldExtList['building_num']['ifeditable']->isEmpty())): ?>none<?php endif; ?>">
												  <label class="layui-form-label"><?php if(!(empty($addonFieldExtList['building_num']['ifrequire']) || (($addonFieldExtList['building_num']['ifrequire'] instanceof \think\Collection || $addonFieldExtList['building_num']['ifrequire'] instanceof \think\Paginator ) && $addonFieldExtList['building_num']['ifrequire']->isEmpty()))): ?><b>*</b><?php endif; ?><?php echo $addonFieldExtList['building_num']['title']; ?></label>
												  <div class="layui-input-inline w-in">
													 <input type="text" name="addonFieldExt[building_num]" id="building_num" placeholder="<?php echo $addonFieldExtList['building_num']['remark']; ?>" value="<?php echo $addonFieldExtList['building_num']['dfvalue']; ?>" class="layui-input">
												  </div>
													<div class="layui-input-inline layui-input-company">
														<?php echo $addonFieldExtList['building_num']['dfvalue_unit']; ?>
													</div>
											  </div>
                                           	  <div class="w-out fl mt15 <?php if(empty($addonFieldExtList['floor_case']['ifeditable']) || (($addonFieldExtList['floor_case']['ifeditable'] instanceof \think\Collection || $addonFieldExtList['floor_case']['ifeditable'] instanceof \think\Paginator ) && $addonFieldExtList['floor_case']['ifeditable']->isEmpty())): ?>none<?php endif; ?>">
												  <label class="layui-form-label"><?php if(!(empty($addonFieldExtList['floor_case']['ifrequire']) || (($addonFieldExtList['floor_case']['ifrequire'] instanceof \think\Collection || $addonFieldExtList['floor_case']['ifrequire'] instanceof \think\Paginator ) && $addonFieldExtList['floor_case']['ifrequire']->isEmpty()))): ?><b>*</b><?php endif; ?><?php echo $addonFieldExtList['floor_case']['title']; ?></label>
												  <div class="layui-input-inline w-in">
													 <input type="text" name="addonFieldExt[floor_case]" id="floor_case"  placeholder="<?php echo $addonFieldExtList['floor_case']['remark']; ?>" value="<?php echo $addonFieldExtList['floor_case']['dfvalue']; ?>" class="layui-input">
												  </div>
													<div class="layui-input-inline layui-input-company">
														<?php echo $addonFieldExtList['floor_case']['dfvalue_unit']; ?>
													</div>
											  </div>
                                           	  <div class="w-out fl mt15 <?php if(empty($addonFieldExtList['carport']['ifeditable']) || (($addonFieldExtList['carport']['ifeditable'] instanceof \think\Collection || $addonFieldExtList['carport']['ifeditable'] instanceof \think\Paginator ) && $addonFieldExtList['carport']['ifeditable']->isEmpty())): ?>none<?php endif; ?>">
												  <label class="layui-form-label"><?php if(!(empty($addonFieldExtList['carport']['ifrequire']) || (($addonFieldExtList['carport']['ifrequire'] instanceof \think\Collection || $addonFieldExtList['carport']['ifrequire'] instanceof \think\Paginator ) && $addonFieldExtList['carport']['ifrequire']->isEmpty()))): ?><b>*</b><?php endif; ?><?php echo $addonFieldExtList['carport']['title']; ?></label>
												  <div class="layui-input-inline w-in">
													 <input type="text" name="addonFieldExt[carport]" id="carport" placeholder="<?php echo $addonFieldExtList['carport']['remark']; ?>" value="<?php echo $addonFieldExtList['carport']['dfvalue']; ?>" class="layui-input">
												  </div>
													<div class="layui-input-inline layui-input-company">
														<?php echo $addonFieldExtList['carport']['dfvalue_unit']; ?>
													</div>
											  </div>
                                           	  <div class="w-out fl mt15 <?php if(empty($addonFieldExtList['households']['ifeditable']) || (($addonFieldExtList['households']['ifeditable'] instanceof \think\Collection || $addonFieldExtList['households']['ifeditable'] instanceof \think\Paginator ) && $addonFieldExtList['households']['ifeditable']->isEmpty())): ?>none<?php endif; ?>">
												  <label class="layui-form-label"><?php if(!(empty($addonFieldExtList['households']['ifrequire']) || (($addonFieldExtList['households']['ifrequire'] instanceof \think\Collection || $addonFieldExtList['households']['ifrequire'] instanceof \think\Paginator ) && $addonFieldExtList['households']['ifrequire']->isEmpty()))): ?><b>*</b><?php endif; ?><?php echo $addonFieldExtList['households']['title']; ?></label>
												  <div class="layui-input-inline w-in">
													 <input type="text" name="addonFieldExt[households]" id="households" placeholder="<?php echo $addonFieldExtList['households']['remark']; ?>" value="<?php echo $addonFieldExtList['households']['dfvalue']; ?>" class="layui-input">
												  </div>
												<div class="layui-input-inline layui-input-company">
													<?php echo $addonFieldExtList['households']['dfvalue_unit']; ?>
												</div>
											  </div>
                                           	  <div class="w-out fl mt15 <?php if(empty($addonFieldExtList['greening_rate']['ifeditable']) || (($addonFieldExtList['greening_rate']['ifeditable'] instanceof \think\Collection || $addonFieldExtList['greening_rate']['ifeditable'] instanceof \think\Paginator ) && $addonFieldExtList['greening_rate']['ifeditable']->isEmpty())): ?>none<?php endif; ?>">
												  <label class="layui-form-label"><?php if(!(empty($addonFieldExtList['greening_rate']['ifrequire']) || (($addonFieldExtList['greening_rate']['ifrequire'] instanceof \think\Collection || $addonFieldExtList['greening_rate']['ifrequire'] instanceof \think\Paginator ) && $addonFieldExtList['greening_rate']['ifrequire']->isEmpty()))): ?><b>*</b><?php endif; ?><?php echo $addonFieldExtList['greening_rate']['title']; ?></label>
												  <div class="layui-input-inline w-in">
													 <input type="text"  name="addonFieldExt[greening_rate]"   id="greening_rate"  placeholder="<?php echo $addonFieldExtList['greening_rate']['remark']; ?>" onkeyup="this.value=this.value.replace(/[^0-9.%]/g,'');" onpaste="this.value=this.value.replace(/[^0-9.%]/g,'');" value="<?php echo $addonFieldExtList['greening_rate']['dfvalue']; ?>" class="layui-input">
												  </div>
													<div class="layui-input-inline layui-input-company">
														<?php echo $addonFieldExtList['greening_rate']['dfvalue_unit']; ?>
													</div>
											  </div>
                                           	  <div class="w-out fl mt15 <?php if(empty($addonFieldExtList['plot_ratio']['ifeditable']) || (($addonFieldExtList['plot_ratio']['ifeditable'] instanceof \think\Collection || $addonFieldExtList['plot_ratio']['ifeditable'] instanceof \think\Paginator ) && $addonFieldExtList['plot_ratio']['ifeditable']->isEmpty())): ?>none<?php endif; ?>">
												  <label class="layui-form-label"><?php if(!(empty($addonFieldExtList['plot_ratio']['ifrequire']) || (($addonFieldExtList['plot_ratio']['ifrequire'] instanceof \think\Collection || $addonFieldExtList['plot_ratio']['ifrequire'] instanceof \think\Paginator ) && $addonFieldExtList['plot_ratio']['ifrequire']->isEmpty()))): ?><b>*</b><?php endif; ?><?php echo $addonFieldExtList['plot_ratio']['title']; ?></label>
												  <div class="layui-input-inline w-in">
													 <input type="text" name="addonFieldExt[plot_ratio]"  id="plot_ratio" placeholder="<?php echo $addonFieldExtList['plot_ratio']['remark']; ?>" onkeyup="this.value=this.value.replace(/[^0-9.%]/g,'');" onpaste="this.value=this.value.replace(/[^0-9.%]/g,'');" value="<?php echo $addonFieldExtList['plot_ratio']['dfvalue']; ?>" class="layui-input">
												  </div>
													<div class="layui-input-inline layui-input-company">
														<?php echo $addonFieldExtList['plot_ratio']['dfvalue_unit']; ?>
													</div>
											  </div>
                                           	  <div class="w-out fl mt15 <?php if(empty($addonFieldExtList['property']['ifeditable']) || (($addonFieldExtList['property']['ifeditable'] instanceof \think\Collection || $addonFieldExtList['property']['ifeditable'] instanceof \think\Paginator ) && $addonFieldExtList['property']['ifeditable']->isEmpty())): ?>none<?php endif; ?>">
												  <label class="layui-form-label"><?php if(!(empty($addonFieldExtList['property']['ifrequire']) || (($addonFieldExtList['property']['ifrequire'] instanceof \think\Collection || $addonFieldExtList['property']['ifrequire'] instanceof \think\Paginator ) && $addonFieldExtList['property']['ifrequire']->isEmpty()))): ?><b>*</b><?php endif; ?><?php echo $addonFieldExtList['property']['title']; ?></label>
												  <div class="layui-input-inline w-in">
													 <input type="text"  name="addonFieldExt[property]" id="property" placeholder="<?php echo $addonFieldExtList['property']['remark']; ?>"  value="<?php echo $addonFieldExtList['property']['dfvalue']; ?>" class="layui-input">
												  </div>
													<div class="layui-input-inline layui-input-company">
														<?php echo $addonFieldExtList['property']['dfvalue_unit']; ?>
													</div>
											  </div>
                                              <div class="w-out fl mt15 <?php if(empty($addonFieldExtList['main_unit']['ifeditable']) || (($addonFieldExtList['main_unit']['ifeditable'] instanceof \think\Collection || $addonFieldExtList['main_unit']['ifeditable'] instanceof \think\Paginator ) && $addonFieldExtList['main_unit']['ifeditable']->isEmpty())): ?>none<?php endif; ?>">
												  <label class="layui-form-label"><?php if(!(empty($addonFieldExtList['main_unit']['ifrequire']) || (($addonFieldExtList['main_unit']['ifrequire'] instanceof \think\Collection || $addonFieldExtList['main_unit']['ifrequire'] instanceof \think\Paginator ) && $addonFieldExtList['main_unit']['ifrequire']->isEmpty()))): ?><b>*</b><?php endif; ?><?php echo $addonFieldExtList['main_unit']['title']; ?></label>
												  <div class="layui-input-inline w-in">
													 <input type="text" name="addonFieldSys[main_unit]" id="main_unit" placeholder="<?php echo $addonFieldExtList['main_unit']['remark']; ?>" value="<?php echo $addonFieldExtList['main_unit']['dfvalue']; ?>" class="layui-input">
												  </div>
													<div class="layui-input-inline layui-input-company">
														<?php echo $addonFieldExtList['main_unit']['dfvalue_unit']; ?>
													</div>
											  </div>
                                           	  <div class="w-out fl mt15 <?php if(empty($addonFieldExtList['building_area']['ifeditable']) || (($addonFieldExtList['building_area']['ifeditable'] instanceof \think\Collection || $addonFieldExtList['building_area']['ifeditable'] instanceof \think\Paginator ) && $addonFieldExtList['building_area']['ifeditable']->isEmpty())): ?>none<?php endif; ?>">
												  <label class="layui-form-label"><?php if(!(empty($addonFieldExtList['building_area']['ifrequire']) || (($addonFieldExtList['building_area']['ifrequire'] instanceof \think\Collection || $addonFieldExtList['building_area']['ifrequire'] instanceof \think\Paginator ) && $addonFieldExtList['building_area']['ifrequire']->isEmpty()))): ?><b>*</b><?php endif; ?><?php echo $addonFieldExtList['building_area']['title']; ?></label>
												  <div class="layui-input-inline w-in">
													 <input type="text" name="addonFieldExt[building_area]"  id="building_area" placeholder="<?php echo $addonFieldExtList['building_area']['remark']; ?>" onkeyup="this.value=this.value.replace(/[^0-9.]/g,'');" onpaste="this.value=this.value.replace(/[^0-9.]/g,'');" value="<?php echo $addonFieldExtList['building_area']['dfvalue']; ?>" class="layui-input">
												  </div>
												  <div class="layui-input-inline layui-input-company">
													  <?php echo $addonFieldExtList['building_area']['dfvalue_unit']; ?></div>
											  </div>
                                           	  <div class="w-out fl mt15 <?php if(empty($addonFieldExtList['floor_area']['ifeditable']) || (($addonFieldExtList['floor_area']['ifeditable'] instanceof \think\Collection || $addonFieldExtList['floor_area']['ifeditable'] instanceof \think\Paginator ) && $addonFieldExtList['floor_area']['ifeditable']->isEmpty())): ?>none<?php endif; ?>">
												  <label class="layui-form-label"><?php if(!(empty($addonFieldExtList['floor_area']['ifrequire']) || (($addonFieldExtList['floor_area']['ifrequire'] instanceof \think\Collection || $addonFieldExtList['floor_area']['ifrequire'] instanceof \think\Paginator ) && $addonFieldExtList['floor_area']['ifrequire']->isEmpty()))): ?><b>*</b><?php endif; ?><?php echo $addonFieldExtList['floor_area']['title']; ?></label>
												  <div class="layui-input-inline w-in">
													 <input type="text" name="addonFieldExt[floor_area]" id="floor_area" placeholder="<?php echo $addonFieldExtList['floor_area']['remark']; ?>"  onkeyup="this.value=this.value.replace(/[^0-9.]/g,'');" onpaste="this.value=this.value.replace(/[^0-9.]/g,'');" value="<?php echo $addonFieldExtList['floor_area']['dfvalue']; ?>" class="layui-input">
												  </div>
												  <div class="layui-input-inline layui-input-company">
													  <?php echo $addonFieldExtList['floor_area']['dfvalue_unit']; ?></div>
											  </div>


                                            </div>
                                         </div>
                                       </div>
                                   </div>

                                    <div class="layui-col-md12" style="padding-top:0;">
                                        <div class="layui-card">
                                            <div class="layui-card-body" pad15 style="padding-top:0;">
                                                <div class="layui-form" wid100 lay-filter="">

													<div class="layui-form-item <?php if(empty($addonFieldExtList['panoram']['ifeditable']) || (($addonFieldExtList['panoram']['ifeditable'] instanceof \think\Collection || $addonFieldExtList['panoram']['ifeditable'] instanceof \think\Paginator ) && $addonFieldExtList['panoram']['ifeditable']->isEmpty())): ?>none<?php endif; ?>"">
														<label class="layui-form-label"><?php if(!(empty($addonFieldExtList['panoram']['ifrequire']) || (($addonFieldExtList['panoram']['ifrequire'] instanceof \think\Collection || $addonFieldExtList['panoram']['ifrequire'] instanceof \think\Paginator ) && $addonFieldExtList['panoram']['ifrequire']->isEmpty()))): ?><b>*</b><?php endif; ?><?php echo $addonFieldExtList['panoram']['title']; ?></label>
														<div class="layui-input-inline">
															<input type="text" class="layui-input" id="panoram" name="addonFieldExt[panoram]"  placeholder="<?php echo $addonFieldExtList['panoram']['remark']; ?>"  value="<?php echo $addonFieldExtList['panoram']['dfvalue']; ?>">
														</div>
														<div class="layui-input-inline layui-input-company">
															<?php echo $addonFieldExtList['panoram']['dfvalue_unit']; ?>
														</div>
														<div class="layui-input-inline layui-btn-container " style="width: auto;">
															<div class="layui-form-mid layui-word-aux ey_helptips"></div>
															<div class="layui-form-inline2 ey_helptips_txt"><?php echo $addonFieldExtList['panoram']['remark']; ?></div>
														</div>
													</div>

													<div class="layui-form-item <?php if(empty($addonFieldExtList['video']['ifeditable']) || (($addonFieldExtList['video']['ifeditable'] instanceof \think\Collection || $addonFieldExtList['video']['ifeditable'] instanceof \think\Paginator ) && $addonFieldExtList['video']['ifeditable']->isEmpty())): ?>none<?php endif; ?>"">
														<label class="layui-form-label"><?php if(!(empty($addonFieldExtList['video']['ifrequire']) || (($addonFieldExtList['video']['ifrequire'] instanceof \think\Collection || $addonFieldExtList['video']['ifrequire'] instanceof \think\Paginator ) && $addonFieldExtList['video']['ifrequire']->isEmpty()))): ?><b>*</b><?php endif; ?><?php echo $addonFieldExtList['video']['title']; ?></label>
														<div class="layui-input-inline">
															<input type="text" class="layui-input" id="video" name="addonFieldExt[video]"  placeholder="<?php echo $addonFieldExtList['video']['remark']; ?>"  value="<?php echo $addonFieldExtList['video']['dfvalue']; ?>">
														</div>
														<div class="layui-input-inline layui-input-company">
															<?php echo $addonFieldExtList['video']['dfvalue_unit']; ?>
														</div>
														<div class="layui-input-inline layui-btn-container " style="width: auto;">
															<button class="layui-btn test-upload-video layui-btn-primary layui-btn-sm fl mb10 mr5" lay-data="{number:1,ey_inputId:'video',ey_savepath:'allvideo'}"><i class="layui-icon">&#xe67c;</i>上传视频</button>
															<div class="layui-form-mid layui-word-aux ey_helptips"></div>
															<div class="layui-form-inline2 ey_helptips_txt"><?php echo $addonFieldExtList['video']['remark']; ?></div>
														</div>
													</div>

													<div class="layui-form-item <?php if(empty($addonFieldExtList['voice']['ifeditable']) || (($addonFieldExtList['voice']['ifeditable'] instanceof \think\Collection || $addonFieldExtList['voice']['ifeditable'] instanceof \think\Paginator ) && $addonFieldExtList['voice']['ifeditable']->isEmpty())): ?>none<?php endif; ?>"">
														<label class="layui-form-label"><?php if(!(empty($addonFieldExtList['voice']['ifrequire']) || (($addonFieldExtList['voice']['ifrequire'] instanceof \think\Collection || $addonFieldExtList['voice']['ifrequire'] instanceof \think\Paginator ) && $addonFieldExtList['voice']['ifrequire']->isEmpty()))): ?><b>*</b><?php endif; ?><?php echo $addonFieldExtList['voice']['title']; ?></label>
														<div class="layui-input-inline">
															<input type="text" class="layui-input" id="voice" name="addonFieldExt[voice]"  placeholder="<?php echo $addonFieldExtList['voice']['remark']; ?>"  value="<?php echo $addonFieldExtList['voice']['dfvalue']; ?>">
														</div>
														<div class="layui-input-inline layui-input-company">
															<?php echo $addonFieldExtList['voice']['dfvalue_unit']; ?>
														</div>
														<div class="layui-input-inline layui-btn-container " style="width: auto;">
															<button class="layui-btn test-upload-voice layui-btn-primary layui-btn-sm fl mb10 mr5" lay-data="{number:1,ey_inputId:'voice',ey_savepath:'allvoice'}"><i class="layui-icon">&#xe67c;</i>上传语音播报</button>
															<div class="layui-form-mid layui-word-aux ey_helptips"></div>
															<div class="layui-form-inline2 ey_helptips_txt"><?php echo $addonFieldExtList['voice']['remark']; ?></div>
														</div>
													</div>

                                                    
<?php if(is_array($addonFieldExtList) || $addonFieldExtList instanceof \think\Collection || $addonFieldExtList instanceof \think\Paginator): $i = 0; $__LIST__ = $addonFieldExtList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if((!isset($vo['ifeditable']) || $vo['ifeditable']) && ($vo['ifsystem'] == 0)): switch($vo['dtype']): case "hidden": ?>
                <!-- 隐藏域 start -->
                <div class="layui-form-item none">
                    <label class="layui-form-label"><?php if(isset($vo['ifrequire']) AND !empty($vo['ifrequire'])): ?><b>*</b><?php endif; ?><?php echo (isset($vo['title']) && ($vo['title'] !== '')?$vo['title']:''); ?></label>
                    <div class="layui-input-inline">
                        <input type="hidden" class="layui-input" id="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>" name="<?php echo $vo['fieldArr']; ?>[<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>]" value="<?php echo (isset($vo['dfvalue']) && ($vo['dfvalue'] !== '')?$vo['dfvalue']:''); ?>">
                    </div>
                    <div class="layui-input-inline layui-btn-container " style="width: auto;">
                        <div class="layui-form-mid layui-word-aux ey_helptips"></div>
                        <div class="layui-form-inline2 ey_helptips_txt"><?php echo (isset($vo['remark']) && ($vo['remark'] !== '')?$vo['remark']:''); ?></div>
                    </div>
                </div>
                <!-- 隐藏域 start -->
            <?php break; case "region": ?>
                <!-- 区域选项 start -->
                <div class="layui-form-item">
                    <label class="layui-form-label"><?php if(isset($vo['ifrequire']) AND !empty($vo['ifrequire'])): ?><b>*</b><?php endif; ?><?php echo (isset($vo['title']) && ($vo['title'] !== '')?$vo['title']:''); ?></label>
                    <div class="layui-input-inline">
                        <?php if(is_array($vo['dfvalue']) || $vo['dfvalue'] instanceof \think\Collection || $vo['dfvalue'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo['dfvalue'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v2): $mod = ($i % 2 );++$i;?>
                        <input type="radio" id="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>" name="<?php echo $vo['fieldArr']; ?>[<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>]" value="<?php echo $v2; ?>" <?php if(isset($vo['trueValue']) AND in_array($v2, $vo['trueValue'])): ?>checked="checked"<?php endif; ?> title="<?php echo $v2; ?>">
                        <input type="radio" id="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>" name="<?php echo $vo['fieldArr']; ?>[<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>]" value="<?php echo $v2['id']; ?>" <?php if(isset($vo['trueValue']) AND in_array($v2['id'], $vo['trueValue'])): ?> checked <?php endif; ?> title="<?php echo $v2['name']; ?>">
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                    <div class="layui-input-inline layui-btn-container " style="width: auto;">
                        <div class="layui-form-mid layui-word-aux ey_helptips"></div>
                        <div class="layui-form-inline2 ey_helptips_txt"><?php echo (isset($vo['remark']) && ($vo['remark'] !== '')?$vo['remark']:''); ?></div>
                    </div>
                </div>
                <!-- 区域选项 end -->
            <?php break; case "text": ?>
                <!-- 单行文本框 start -->
                <div class="layui-form-item">
                    <label class="layui-form-label"><?php if(isset($vo['ifrequire']) AND !empty($vo['ifrequire'])): ?><b>*</b><?php endif; ?><?php echo (isset($vo['title']) && ($vo['title'] !== '')?$vo['title']:''); ?></label>
                    <div class="layui-input-inline">
                        <input type="text" class="layui-input" id="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>" name="<?php echo $vo['fieldArr']; ?>[<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>]" value="<?php echo (isset($vo['dfvalue']) && ($vo['dfvalue'] !== '')?$vo['dfvalue']:''); ?>">
                    </div>
                    <div class="layui-input-inline layui-input-company">
                        <?php echo (isset($vo['dfvalue_unit']) && ($vo['dfvalue_unit'] !== '')?$vo['dfvalue_unit']:''); ?>
                    </div>
                    <div class="layui-input-inline layui-btn-container " style="width: auto;">
                        <div class="layui-form-mid layui-word-aux ey_helptips"></div>
                        <div class="layui-form-inline2 ey_helptips_txt"><?php echo (isset($vo['remark']) && ($vo['remark'] !== '')?$vo['remark']:''); ?></div>
                    </div>
                </div>
                <!-- 单行文本框 end -->
            <?php break; case "multitext": ?>
                <!-- 多行文本框 start -->
                <div class="layui-form-item layui-form-text">
                    <label class="layui-form-label"><?php if(isset($vo['ifrequire']) AND !empty($vo['ifrequire'])): ?><b>*</b><?php endif; ?><?php echo (isset($vo['title']) && ($vo['title'] !== '')?$vo['title']:''); ?></label>
                    <div class="layui-input-inline">
                        <textarea id="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>" name="<?php echo $vo['fieldArr']; ?>[<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>]" class="layui-textarea"><?php echo (isset($vo['dfvalue']) && ($vo['dfvalue'] !== '')?$vo['dfvalue']:''); ?></textarea>
                    </div>
                    <div class="layui-input-inline layui-btn-container " style="width: auto;">
                        <div class="layui-form-mid layui-word-aux ey_helptips"></div>
                        <div class="layui-form-inline2 ey_helptips_txt"><?php echo (isset($vo['remark']) && ($vo['remark'] !== '')?$vo['remark']:''); ?></div>
                    </div>
                </div>
                <!-- 多行文本框 end -->
            <?php break; case "checkbox": ?>
                <!-- 复选框 start -->
                <div class="layui-form-item">
                    <label class="layui-form-label"><?php if(isset($vo['ifrequire']) AND !empty($vo['ifrequire'])): ?><b>*</b><?php endif; ?><?php echo (isset($vo['title']) && ($vo['title'] !== '')?$vo['title']:''); ?></label>
                    <div class="layui-input-inline w500">
                        <?php if(is_array($vo['dfvalue']) || $vo['dfvalue'] instanceof \think\Collection || $vo['dfvalue'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo['dfvalue'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v2): $mod = ($i % 2 );++$i;?>
                        <input type="checkbox" lay-skin="primary" lay-filter="addonFieldExt" name="<?php echo $vo['fieldArr']; ?>[<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>][]" data-callback="func_<?php echo $vo['name']; ?>_eyempty" value="<?php echo $v2; ?>" <?php if(isset($vo['trueValue']) AND in_array($v2, $vo['trueValue'])): ?>checked="checked"<?php endif; ?> title="<?php echo $v2; ?>">
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                        <input type="hidden" name="<?php echo $vo['fieldArr']; ?>[<?php echo $vo['name']; ?>_eyempty]" value="<?php if(!empty($vo['trueValue'])): ?>1<?php else: ?>0<?php endif; ?>">
                    </div>
                    <div class="layui-input-inline layui-btn-container " style="width: auto;">
                        <div class="layui-form-mid layui-word-aux ey_helptips"></div>
                        <div class="layui-form-inline2 ey_helptips_txt"><?php echo (isset($vo['remark']) && ($vo['remark'] !== '')?$vo['remark']:''); ?></div>
                    </div>
                </div>
                <script type="text/javascript">
                    function func_<?php echo $vo['name']; ?>_eyempty()
                    {
                        var len = $("input[name='<?php echo $vo['fieldArr']; ?>[<?php echo $vo['name']; ?>][]']:checked").length;
                        $("input[name='<?php echo $vo['fieldArr']; ?>[<?php echo $vo['name']; ?>_eyempty]']").val(len);
                    }
                </script>
                <!-- 复选框 end -->
            <?php break; case "radio": ?>
                <!-- 单选项 start -->
                <div class="layui-form-item">
                    <label class="layui-form-label"><?php if(isset($vo['ifrequire']) AND !empty($vo['ifrequire'])): ?><b>*</b><?php endif; ?><?php echo (isset($vo['title']) && ($vo['title'] !== '')?$vo['title']:''); ?></label>
                    <div class="layui-input-inline">
                        <?php if(is_array($vo['dfvalue']) || $vo['dfvalue'] instanceof \think\Collection || $vo['dfvalue'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo['dfvalue'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v2): $mod = ($i % 2 );++$i;?>
                        <input type="radio" id="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>" name="<?php echo $vo['fieldArr']; ?>[<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>]" value="<?php echo $v2; ?>" <?php if(isset($vo['trueValue']) AND in_array($v2, $vo['trueValue'])): ?>checked="checked"<?php endif; ?> title="<?php echo $v2; ?>">
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                    <div class="layui-input-inline layui-btn-container " style="width: auto;">
                        <div class="layui-form-mid layui-word-aux ey_helptips"></div>
                        <div class="layui-form-inline2 ey_helptips_txt"><?php echo (isset($vo['remark']) && ($vo['remark'] !== '')?$vo['remark']:''); ?></div>
                    </div>
                </div>
                <!-- 单选项 end -->
            <?php break; case "switch": ?>
                <!-- 开关 start -->
                <div class="layui-form-item">
                    <label class="layui-form-label"><?php if(isset($vo['ifrequire']) AND !empty($vo['ifrequire'])): ?><b>*</b><?php endif; ?><?php echo (isset($vo['title']) && ($vo['title'] !== '')?$vo['title']:''); ?></label>
                    <div class="layui-input-block">
                        <input type="checkbox" id="<?php echo $vo['fieldArr']; ?>[<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>]" lay-filter="<?php echo $vo['fieldArr']; ?>[<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>]" lay-skin="switch" lay-text="是|否" <?php if(0 != $vo['dfvalue']): ?>value="1" checked <?php endif; ?>>
                        <input type="hidden" name="<?php echo $vo['fieldArr']; ?>[<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>]" value="<?php echo (isset($vo['dfvalue']) && ($vo['dfvalue'] !== '')?$vo['dfvalue']:'0'); ?>" />
                    </div>
                    <div class="layui-input-inline layui-btn-container " style="width: auto;">
                        <div class="layui-form-mid layui-word-aux ey_helptips"></div>
                        <div class="layui-form-inline2 ey_helptips_txt"><?php echo (isset($vo['remark']) && ($vo['remark'] !== '')?$vo['remark']:''); ?></div>
                    </div>
                </div>
                <!-- 开关 end -->
            <?php break; case "select": ?>
                <!-- 下拉框 start -->
                <div class="layui-form-item">
                    <label class="layui-form-label"><?php if(isset($vo['ifrequire']) AND !empty($vo['ifrequire'])): ?><b>*</b><?php endif; ?><?php echo (isset($vo['title']) && ($vo['title'] !== '')?$vo['title']:''); ?></label>
                    <div class="layui-input-inline">
                        <select name="<?php echo $vo['fieldArr']; ?>[<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>]" id="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>">
                            <?php if(is_array($vo['dfvalue']) || $vo['dfvalue'] instanceof \think\Collection || $vo['dfvalue'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo['dfvalue'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v2): $mod = ($i % 2 );++$i;?>
                            <option value="<?php echo $v2; ?>" <?php if(isset($vo['trueValue']) AND in_array($v2, $vo['trueValue'])): ?>selected<?php endif; ?>><?php echo $v2; ?></option>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </select>
                    </div>
                    <div class="layui-input-inline layui-btn-container " style="width: auto;">
                        <div class="layui-form-mid layui-word-aux ey_helptips"></div>
                        <div class="layui-form-inline2 ey_helptips_txt"><?php echo (isset($vo['remark']) && ($vo['remark'] !== '')?$vo['remark']:''); ?></div>
                    </div>
                </div>
                <!-- 下拉框 end -->
            <?php break; case "img": ?>
                <!-- 单张图 start -->
                <div class="layui-form-item">
                    <label class="layui-form-label"><?php if(isset($vo['ifrequire']) AND !empty($vo['ifrequire'])): ?><b>*</b><?php endif; ?><?php echo (isset($vo['title']) && ($vo['title'] !== '')?$vo['title']:''); ?></label>
                    <div class="layui-input-inline">
                        <div class="upload-box">
                          <div class="upload-img fl">
                            <div class="icaction none">
                              <span class="load_images">
                                 <a href="javascript:void(0);" onclick="BigImages($('#img_<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_eyou_local').attr('src'));">
                                 <i class="layui-icon layui-icon-search mr5"></i>查看
                                 </a>
                              </span>
                              <span class="load_images">
                                <a href="javascript:void(0);" data-inputid="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_eyou_local" onclick="DelImages(this);">
                                <i class="layui-icon layui-icon-delete mr5"></i>删除
                                </a>
                              </span>
                            </div>
                            <div class="cover-bg none"></div>
                            <img id="img_<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_eyou_local" src="<?php echo get_default_pic($vo[$vo['name'].'_eyou_local']); ?>">
                          </div>
                          <div class="upload-right fl">
                            <button class="layui-btn test-upload-demoMore layui-btn-primary layui-btn-sm fl mb10 mr5" lay-data="{number:1,ey_inputId:'<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_eyou_local',ey_savepath:'allimg'}"><i class="layui-icon">&#xe67c;</i>上传图片</button>
                            <button class="layui-btn layui-btn-sm layui-btn-primary layui-btn-sm fl mb10" onClick="GetPictureFolder(1,'<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_eyou_local');"><i class="layui-icon">&#xe64a;</i>图库</button>
                            <input name="<?php echo $vo['fieldArr']; ?>[<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_eyou_local]" id="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_eyou_local" placeholder="图片地址" value="<?php echo (isset($vo[$vo['name'].'_eyou_local']) && ($vo[$vo['name'].'_eyou_local'] !== '')?$vo[$vo['name'].'_eyou_local']:''); ?>" class="layui-input">
                          </div>
                        </div>
                    </div>
                    <div class="layui-input-inline layui-btn-container" style="width: auto;">
                        <div class="layui-form-mid layui-word-aux ey_helptips"></div>
                        <div class="ey_helptips_txt"><?php echo (isset($vo['remark']) && ($vo['remark'] !== '')?$vo['remark']:''); ?></div>
                    </div>
                </div>
                <!-- 单张图 end -->
            <?php break; case "imgs": ?>
                <!-- 多张图 start -->
                <div class="layui-form-item ">
                    <label class="layui-form-label"><?php if(isset($vo['ifrequire']) AND !empty($vo['ifrequire'])): ?><b>*</b><?php endif; ?><?php echo (isset($vo['title']) && ($vo['title'] !== '')?$vo['title']:''); ?></label>
                    <div class="layui-input-inline layadmin-layer-demo">
                        <button class="layui-btn multi-upload-demoMore layui-btn-sm fl" lay-data="{number:100,ey_savepath:'allimg',ey_callback:'<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_call_back'}"><i class="layui-icon">&#xe67c;</i>上传图片</button>
                        <button class="layui-btn layui-btn-sm fl" onClick="GetPictureFolder(100,'<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>','<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_call_back');"><i class="layui-icon">&#xe64a;</i>图库</button>
                    </div>
                </div>
                <div class="layui-form-item " id="dl_<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>">
                    <label class="layui-form-label"></label>
                    <div class="edit-box-con2 fl sort-list-<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>">
                        <?php if(is_array($vo[$vo['name'].'_eyou_imgupload_list']) || $vo[$vo['name'].'_eyou_imgupload_list'] instanceof \think\Collection || $vo[$vo['name'].'_eyou_imgupload_list'] instanceof \think\Paginator): $k2 = 0; $__LIST__ = $vo[$vo['name'].'_eyou_imgupload_list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v2): $mod = ($k2 % 2 );++$k2;?>
                        <div class="images-upload">
                            <div class="upimg">
                                <input type="hidden" name="<?php echo $vo['fieldArr']; ?>[<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>][]" value="<?php echo $v2; ?>">
                                <a class="del-bt" href="javascript:void(0);" style="color:white;" onclick="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_ClearPicArr2(this,'<?php echo $v2; ?>');">删除</a>
                                <div class="cover-bg2" style="display: block"></div>              
                                <img src="<?php echo $v2; ?>">   
                            </div>
                        </div>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                </div>
                <!-- 上传图片显示的样板 start -->
                <div class="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_upload_tpl none">
                    <div class="images-upload">
                        <div class="upimg">
                            <input type="hidden" name="<?php echo $vo['fieldArr']; ?>[<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>][]" value="">
                            <a class="del-bt" href="javascript:void(0);" style="color:white;">&nbsp;&nbsp;</a>
                            <div class="cover-bg2" style="display: block"></div>              
                            <img src="">   
                        </div>
                    </div>
                </div>
                <!-- 上传图片显示的样板 end -->
                <script type="text/javascript">
                    // 上传多图回调函数
                    function <?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_call_back(pathObj){
                        if (Array.isArray(pathObj)){
                            var paths = pathObj;
                        }else{
                            var paths = [pathObj.url];
                        }
                        var  last_div = $(".<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_upload_tpl").html();
                        for (var i=0;i<paths.length ;i++ )
                        {
                            $("#dl_<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>").find(".images-upload:eq(0)").before(last_div);  // 插入一个 新图片
                            $("#dl_<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>").find(".images-upload:eq(0)").find('img').attr('src',paths[i]);// 修改他的图片路径
                            $("#dl_<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>").find(".images-upload:eq(0)").find('a:eq(0)').attr('onclick',"<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_ClearPicArr2(this,'"+paths[i]+"')").text('删除');
                            $("#dl_<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>").find(".images-upload:eq(0)").find('input').val(paths[i]); // 设置隐藏域 要提交的值
                        }             
                    }

                    /*
                     * 上传之后删除组图input     
                     * @access   public
                     * @val      string  删除的图片input
                     */
                    function <?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>_ClearPicArr2(obj,path)
                    {
                        // 删除数据库记录
                        $.ajax({
                            type:'GET',
                            url:"<?php echo url('Field/del_channelimgs'); ?>",
                            data:{filename:path,channel:"<?php echo (isset($channeltype) && ($channeltype !== '')?$channeltype:'0'); ?>",fieldname:"<?php echo $vo['name']; ?>",aid:"<?php echo (isset($aid) && ($aid !== '')?$aid:'0'); ?>",_ajax:1},
                            success:function(){
                                $(obj).parent().parent().remove(); // 删除完服务器的, 再删除 html上的图片
                                $.ajax({
                                    type:'GET',
                                    url:"<?php echo url('Uploadify/delupload'); ?>",
                                    data:{action:"del", filename:path,_ajax:1},
                                    success:function(){}
                                });      
                            }
                        });    
                    }

                    /** 以下 产品相册的拖动排序相关 js*/
                    $( ".sort-list-<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>" ).sortable({
                        start: function( event, ui) {
                        
                        }
                        ,stop: function( event, ui ) {

                        }
                    });
                    $( ".sort-list-<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>" ).disableSelection();
                </script>
                <!-- 多张图 end -->
            <?php break; case "int": ?>
                <!-- 整数类型 start -->
                <div class="layui-form-item">
                    <label class="layui-form-label"><?php if(isset($vo['ifrequire']) AND !empty($vo['ifrequire'])): ?><b>*</b><?php endif; ?><?php echo (isset($vo['title']) && ($vo['title'] !== '')?$vo['title']:''); ?></label>
                    <div class="layui-input-inline">
                        <input type="text" value="<?php echo (isset($vo['dfvalue']) && ($vo['dfvalue'] !== '')?$vo['dfvalue']:'0'); ?>" name="<?php echo $vo['fieldArr']; ?>[<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>]" id="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>" placeholder="只允许纯数字" class="layui-input" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');" onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^0-9]/g,''));">
                    </div>
                    <div class="layui-input-inline layui-input-company">
                        <?php echo (isset($vo['dfvalue_unit']) && ($vo['dfvalue_unit'] !== '')?$vo['dfvalue_unit']:''); ?>
                    </div>
                    <div class="layui-input-inline layui-btn-container " style="width: auto;">
                        <div class="layui-form-mid layui-word-aux ey_helptips"></div>
                        <div class="layui-form-inline2 ey_helptips_txt"><?php echo (isset($vo['remark']) && ($vo['remark'] !== '')?$vo['remark']:''); ?></div>
                    </div>
                </div>
                <!-- 整数类型 end -->
            <?php break; case "float": ?>
                <!-- 小数类型 start -->
                <div class="layui-form-item">
                    <label class="layui-form-label"><?php if(isset($vo['ifrequire']) AND !empty($vo['ifrequire'])): ?><b>*</b><?php endif; ?><?php echo (isset($vo['title']) && ($vo['title'] !== '')?$vo['title']:''); ?></label>
                    <div class="layui-input-inline">
                        <input type="text" value="<?php echo (isset($vo['dfvalue']) && ($vo['dfvalue'] !== '')?$vo['dfvalue']:'0'); ?>" name="<?php echo $vo['fieldArr']; ?>[<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>]" id="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>" placeholder="允许带有小数点的数值" class="layui-input" onkeyup="this.value=this.value.replace(/[^0-9\.]/g,'');" onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^0-9\.]/g,''));">
                    </div>
                    <div class="layui-input-inline layui-input-company">
                        <?php echo (isset($vo['dfvalue_unit']) && ($vo['dfvalue_unit'] !== '')?$vo['dfvalue_unit']:''); ?>
                    </div>
                    <div class="layui-input-inline layui-btn-container " style="width: auto;">
                        <div class="layui-form-mid layui-word-aux ey_helptips"></div>
                        <div class="layui-form-inline2 ey_helptips_txt"><?php echo (isset($vo['remark']) && ($vo['remark'] !== '')?$vo['remark']:''); ?></div>
                    </div>
                </div>
                <!-- 小数类型 end -->
            <?php break; case "decimal": ?>
                <!-- 金额类型 start -->
                <div class="layui-form-item">
                    <label class="layui-form-label"><?php if(isset($vo['ifrequire']) AND !empty($vo['ifrequire'])): ?><b>*</b><?php endif; ?><?php echo (isset($vo['title']) && ($vo['title'] !== '')?$vo['title']:''); ?></label>
                    <div class="layui-input-inline">
                        <input type="text" value="<?php echo (isset($vo['dfvalue']) && ($vo['dfvalue'] !== '')?$vo['dfvalue']:'0.00'); ?>" name="<?php echo $vo['fieldArr']; ?>[<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>]" id="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>" placeholder="允许带有小数点的数值" class="layui-input" onkeyup="this.value=this.value.replace(/[^0-9\.]/g,'');" onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^0-9\.]/g,''));">
                    </div>
                    <div class="layui-input-inline layui-input-company">
                        <?php echo (isset($vo['dfvalue_unit']) && ($vo['dfvalue_unit'] !== '')?$vo['dfvalue_unit']:''); ?>
                    </div>
                    <div class="layui-input-inline layui-btn-container " style="width: auto;">
                        <div class="layui-form-mid layui-word-aux ey_helptips"></div>
                        <div class="layui-form-inline2 ey_helptips_txt"><?php echo (isset($vo['remark']) && ($vo['remark'] !== '')?$vo['remark']:''); ?></div>
                    </div>
                </div>
                <!-- 金额类型 end -->
            <?php break; case "datetime": ?>
                <!-- 日期和时间 start -->
                <div class="layui-form-item">
                    <label class="layui-form-label"><?php if(isset($vo['ifrequire']) AND !empty($vo['ifrequire'])): ?><b>*</b><?php endif; ?><?php echo (isset($vo['title']) && ($vo['title'] !== '')?$vo['title']:''); ?></label>
                    <div class="layui-input-inline">
                        <input type="text" class="layui-input" name="<?php echo $vo['fieldArr']; ?>[<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>]" id="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>" value="<?php echo $vo['dfvalue']; ?>">
                    </div>
                    <div class="layui-input-inline layui-btn-container " style="width: auto;">
                        <div class="layui-form-mid layui-word-aux ey_helptips"></div>
                        <div class="layui-form-inline2 ey_helptips_txt"><?php echo (isset($vo['remark']) && ($vo['remark'] !== '')?$vo['remark']:''); ?></div>
                    </div>
                </div>
                <script type="text/javascript">
                    $(function () {
                        $('#<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>').layDate();   
                    });
                </script>
                <!-- 日期和时间 end -->
            <?php break; case "htmltext": ?>
                <!-- HTML文本 start -->
                <div class="layui-form-item">
                    <span class="edit-box-tit"><?php if(isset($vo['ifrequire']) AND !empty($vo['ifrequire'])): ?><b>*</b><?php endif; ?><?php echo (isset($vo['title']) && ($vo['title'] !== '')?$vo['title']:''); ?></span>
                    <div class="edit-box-con ">
                        <div class="edit-box-textarea2">
                            <textarea  class="ckeditor" id="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>" data-func="<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>" name="<?php echo $vo['fieldArr']; ?>[<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>]"><?php echo (isset($vo['dfvalue']) && ($vo['dfvalue'] !== '')?$vo['dfvalue']:''); ?></textarea>
                        </div>
                    </div>
                    <div class="layui-input-inline layui-btn-container " style="width: auto;">
                        <div class="layui-form-mid layui-word-aux ey_helptips"></div>
                        <div class="layui-form-inline2 ey_helptips_txt"><?php echo (isset($vo['remark']) && ($vo['remark'] !== '')?$vo['remark']:''); ?></div>
                    </div>
                </div>
                <script type="text/javascript">
                    UE.getEditor('<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>',{
                        serverUrl :"<?php echo url('Ueditor/index',array('savepath'=>'ueditor')); ?>",
                        zIndex: 999,
                        initialFrameWidth: "100%", //初化宽度
                        initialFrameHeight: 450, //初化高度            
                        focus: false, //初始化时，是否让编辑器获得焦点true或false
                        maximumWords: 99999,
                        removeFormatAttributes: 'class,style,lang,width,height,align,hspace,valign',//允许的最大字符数 'fullscreen',
                        pasteplain:false, //是否默认为纯文本粘贴。false为不使用纯文本粘贴，true为使用纯文本粘贴
                        autoHeightEnabled: false,
                        toolbars: ueditor_toolbars
                    });

                    //必须在提交前渲染编辑器；
                    function <?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>() {
                        //判断编辑模式状态:0表示【源代码】HTML视图；1是【设计】视图,即可见即所得；-1表示不可用
                        if(UE.getEditor("<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>").queryCommandState('source') != 0) {
                            UE.getEditor("<?php echo $vo['fieldArr']; ?>_<?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?>").execCommand('source'); //切换到【设计】视图
                        }
                    }
                </script>
                <!-- HTML文本 end -->
            <?php break; endswitch; endif; endforeach; endif; else: echo "" ;endif; ?>
													<div class="layui-form-item layui-form-text <?php if(empty($addonFieldExtList['location_introduce']['ifeditable']) || (($addonFieldExtList['location_introduce']['ifeditable'] instanceof \think\Collection || $addonFieldExtList['location_introduce']['ifeditable'] instanceof \think\Paginator ) && $addonFieldExtList['location_introduce']['ifeditable']->isEmpty())): ?>none<?php endif; ?>">
														<label class="layui-form-label"><?php if(!(empty($addonFieldExtList['location_introduce']['ifrequire']) || (($addonFieldExtList['location_introduce']['ifrequire'] instanceof \think\Collection || $addonFieldExtList['location_introduce']['ifrequire'] instanceof \think\Paginator ) && $addonFieldExtList['location_introduce']['ifrequire']->isEmpty()))): ?><b>*</b><?php endif; ?><?php echo $addonFieldExtList['location_introduce']['title']; ?></label>
														<div class="layui-input-inline">
															<textarea id="location_introduce" name="addonFieldExt[location_introduce]" class="layui-textarea"  placeholder="<?php echo $addonFieldExtList['location_introduce']['remark']; ?>"><?php echo $addonFieldExtList['location_introduce']['dfvalue']; ?></textarea>
														</div>
														<div class="layui-input-inline layui-btn-container " style="width: auto;">
															<div class="layui-form-mid layui-word-aux ey_helptips"></div>
															<div class="layui-form-inline2 ey_helptips_txt"><?php echo $addonFieldExtList['location_introduce']['remark']; ?></div>
														</div>
													</div>

													<div class="layui-form-item <?php if(empty($addonFieldExtList['content']['ifeditable']) || (($addonFieldExtList['content']['ifeditable'] instanceof \think\Collection || $addonFieldExtList['content']['ifeditable'] instanceof \think\Paginator ) && $addonFieldExtList['content']['ifeditable']->isEmpty())): ?>none<?php endif; ?>">
														<span class="edit-box-tit"><?php if(!(empty($addonFieldExtList['content']['ifrequire']) || (($addonFieldExtList['content']['ifrequire'] instanceof \think\Collection || $addonFieldExtList['content']['ifrequire'] instanceof \think\Paginator ) && $addonFieldExtList['content']['ifrequire']->isEmpty()))): ?><b>*</b><?php endif; ?><?php echo $addonFieldExtList['content']['title']; ?></span>
														<div class="edit-box-con ">
															<div class="edit-box-textarea2">
																<textarea class="ckeditor" lay-ignore id="addonFieldExt_content" data-func="addonFieldExt_content" name="addonFieldExt[content]"><?php echo $addonFieldExtList['content']['dfvalue']; ?></textarea>
															</div>
														</div>
														<div class="layui-input-inline layui-btn-container " style="width: auto;">
															<div class="layui-form-mid layui-word-aux ey_helptips"></div>
															<div class="layui-form-inline2 ey_helptips_txt"><?php echo $addonFieldExtList['content']['remark']; ?></div>
														</div>
													</div>
													<script type="text/javascript">
                                                        UE.getEditor('addonFieldExt_content',{
                                                            serverUrl :"<?php echo url('Ueditor/index',array('savepath'=>'ueditor')); ?>",
                                                            zIndex: 999,
                                                            initialFrameWidth: "100%", //初化宽度
                                                            initialFrameHeight: 450, //初化高度
                                                            focus: false, //初始化时，是否让编辑器获得焦点true或false
                                                            maximumWords: 99999,
                                                            removeFormatAttributes: 'class,style,lang,width,height,align,hspace,valign',//允许的最大字符数 'fullscreen',
                                                            pasteplain:false, //是否默认为纯文本粘贴。false为不使用纯文本粘贴，true为使用纯文本粘贴
                                                            autoHeightEnabled: false,
                                                            toolbars: ueditor_toolbars
                                                        });

                                                        //必须在提交前渲染编辑器；
														function addonFieldExt_content() {
															//判断编辑模式状态:0表示【源代码】HTML视图；1是【设计】视图,即可见即所得；-1表示不可用
															if(UE.getEditor("addonFieldExt_content").queryCommandState('source') != 0) {
																UE.getEditor("addonFieldExt_content").execCommand('source'); //切换到【设计】视图
															}
														}
													</script>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!--相册选项-->
                            <div class="layui-tab-item ">
                                <div class="layui-row layui-col-space15">
                                    <div class="layui-col-md12">
                                        <div class="layui-card">
                                            <div class="layui-card-body" pad15>
                                                <div class="layui-form" wid100 lay-filter="">
                                                    <div class="layui-form-item">
                                                        <label class="layui-form-label"><b>*</b>相册分类</label>
                                                        <div class="layui-input-inline">
                                                            <select name="photo_type_select" id="photo_type_select">
                                                                <option value="0">-请选择-</option>
                                                                <?php $_result=get_photo_type_list(2);if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                                                <option value="<?php echo $vo; ?>"><?php echo $vo; ?></option>
                                                                <?php endforeach; endif; else: echo "" ;endif; ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="layui-form-item">
                                                        <label class="layui-form-label">上传相册</label>
                                                        <div class="layui-input-inline">
                                                            <div class="upload-box">
                                                              <div class="upload-right fl">
                                                                <button class="layui-btn multi-upload-demoMore layui-btn-primary layui-btn-sm fl mb10 mr5" lay-data="{number:100,ey_savepath:'allimg',ey_callbefore:'xinfang_photo_upload()',ey_callback:'xinfang_photo_upload_call_back'}"><i class="layui-icon">&#xe67c;</i>上传图片</button>
                                                                <button class="layui-btn layui-btn-sm layui-btn-primary layui-btn-sm fl mb10" onClick="GetBeforePictureFolder(100,'hehe','xinfang_photo_upload_call_back','xinfang_photo_upload()');"><i class="layui-icon">&#xe64a;</i>图库</button>
                                                              </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="layui-form-item ">
                                                        <label class="layui-form-label"></label>
                                                        <div class="edit-box-con2 fl sort-list">

                                                            <?php if(is_array($photo_list) || $photo_list instanceof \think\Collection || $photo_list instanceof \think\Paginator): $k = 0; $__LIST__ = $photo_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>
                                                            <div class="images-upload ic">
                                                                <div class="upimg" title="拖动修改排序">
                                                                    <div class="icaction" style="display: none;">
                                                                        <span class="load_images" onclick="Images('<?php echo $vo['photo_pic']; ?>');">
                                                                            <a href="javascript:void(0);" style="color: white">
                                                                                <i class="fa fa-search-plus"></i>查看大图
                                                                            </a>
                                                                        </span>
                                                                    </div>
                                                                    <div class="cover-bg" style="display: none;"></div>
                                                                    <img src="<?php echo $vo['photo_pic']; ?>">
                                                                </div>
                                                                <input type="hidden" name="photo_id[]" value="<?php echo $vo['photo_id']; ?>">
                                                                <span class="span_input">
                                                                    <input type="hidden" name="photo_pic[]" value="<?php echo $vo['photo_pic']; ?>">
                                                                </span>
                                                                <span class="select_input">
                                                                    <input type="hidden" name="photo_type[]" value="<?php echo $vo['photo_type']; ?>">
                                                                </span>
                                                                <textarea placeholder="请输入标题..." name="photo_title[]" value="<?php echo $vo['photo_title']; ?>"><?php echo $vo['photo_title']; ?></textarea>
                                                                <div class="operation">
                                                                    <a href="javascript:void(0)"><label>分类：<?php echo $vo['photo_type']; ?></label></a>
                                                                    <a href="javascript:void(0)" onclick="ClearPicArr(this,'<?php echo $vo['photo_pic']; ?>')" style="float: right"><i class="layui-icon layui-icon-close mr5"></i>删除</a>
                                                                </div>
                                                            </div>
                                                            <?php endforeach; endif; else: echo "" ;endif; ?>

                                                            <div class="images-upload" style="display: none;"></div>
                                                            <!-- 上传图片显示的样板 start -->
                                                            <div class="images_upload_tpl" style="display: none;">
                                                                <div class="images-upload">
                                                                    <div class="upimg">
                                                                        <div class="icaction" style="display: none;">
                                                                            <span class="load_images">
                                                                                <a href="javascript:void(0);" style="color:white">
                                                                                    <i class="layui-icon layui-icon-search mr5"></i>查看大图
                                                                                </a>
                                                                            </span>
                                                                        </div>
                                                                        <div class="cover-bg" style="display: none"></div>
                                                                        <img src="/public/static/admin/images/add-button.jpg">
                                                                    </div>
                                                                    <input type="hidden"/>
                                                                    <span class="span_input">
                                                                        <input type="hidden"/>
                                                                    </span>
                                                                    <textarea placeholder="请输入标题..." style="height: 28px;"></textarea>
                                                                    <div class="operation">
                                                                        <a href="javascript:void(0);"></a>
                                                                        <a href="javascript:void(0);" style="float: right"></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- 上传图片显示的样板 end -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!--户型选项-->
                            <div class="layui-tab-item " >
                                <div class="layui-row layui-col-space15">
                                    <div class="layui-col-md12">
                                        <div class="layui-card">
                                            <div class="layui-card-body" pad15>
                                                <div class="layui-form" wid100 lay-filter="">
                                                    <div class="layui-form-item">
                                                        <label class="layui-form-label">上传户型</label>
                                                        <div class="layui-input-inline">
                                                            <div class="upload-box">
                                                              <div class="upload-right fl">
                                                                <button class="layui-btn multi-upload-demoMore layui-btn-primary layui-btn-sm fl mb10 mr5" lay-data="{number:100,ey_savepath:'allimg',ey_callback:'xinfang_huxing_upload_call_back'}"><i class="layui-icon">&#xe67c;</i>上传图片</button>
                                                                <button class="layui-btn layui-btn-sm layui-btn-primary layui-btn-sm fl mb10" onClick="GetBeforePictureFolder(100,'hehe','xinfang_huxing_upload_call_back');"><i class="layui-icon">&#xe64a;</i>图库</button>
                                                              </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="layui-form-item " >
                                                        <label class="layui-form-label"></label>
                                                        <div class="edit-box-con2 fl sort-list huxing">

                                                            <?php if(is_array($huxing_list) || $huxing_list instanceof \think\Collection || $huxing_list instanceof \think\Paginator): $k = 0; $__LIST__ = $huxing_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($k % 2 );++$k;?>
                                                            <div class="images-upload ic">
                                                                <div class="upimg" title="拖动修改排序">
                                                                    <div class="icaction" style="display: none;">
                                                                        <span class="load_images" onclick="Images('<?php echo $val['huxing_pic']; ?>');">
                                                                            <a href="javascript:void(0);" style="color: white">
                                                                                <i class="fa fa-search-plus"></i>查看大图
                                                                            </a>
                                                                        </span>
                                                                    </div>
                                                                    <div class="cover-bg" style="display: none;"></div>
                                                                    <img src="<?php echo $val['huxing_pic']; ?>">
                                                                </div>
                                                                <input type="hidden" name="huxing_id[]" value="<?php echo $val['huxing_id']; ?>">
                                                                <span class="span_input">
                                                                    <input type="hidden" name="huxing_pic[]" value="<?php echo $val['huxing_pic']; ?>">
                                                                </span>
                                                                <textarea placeholder="请输入标题..." name="huxing_title[]" value="<?php echo $val['huxing_title']; ?>"><?php echo $val['huxing_title']; ?></textarea>
                                                                <div class="size">
                                                                    <input type="text" name="huxing_room[]" value="<?php echo $val['huxing_room']; ?>"><span>室</span>
                                                                    <input type="text" name="huxing_living_room[]" value="<?php echo $val['huxing_living_room']; ?>"><span>厅</span>
                                                                    <input type="text" name="huxing_toilet[]" value="<?php echo $val['huxing_toilet']; ?>"><span>卫</span>
                                                                    <input type="text" name="huxing_kitchen[]" value="<?php echo $val['huxing_kitchen']; ?>"><span>厨</span>
                                                                </div>
                                                                <div class="pricearea">
                                                                    <span>价格：</span><input type="text" name="huxing_price[]"  value="<?php echo $val['huxing_price']; ?>"><em>万元/套</em>
                                                                    <span>面积：</span><input type="text" name="huxing_area[]"  value="<?php echo $val['huxing_area']; ?>"><em>㎡</em>
                                                                </div>
                                                                <div class="selectdiv">
                                                                    <select name="sale_status[]"  lay-ignore>
                                                                        <option value="0">销售状态</option>
                                                                        <?php $_result=get_sale_status_list();if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                                                        <option value="<?php echo $vo; ?>" <?php if($val['sale_status'] == $vo): ?> selected="true" <?php endif; ?>><?php echo $vo; ?></option>
                                                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                                                    </select>
                                                                    <select name="huxing_aspect[]" lay-ignore>
                                                                        <option value="0">户型朝向</option>
                                                                        <?php $_result=get_huxing_aspect_list();if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                                                        <option value="<?php echo $vo; ?>" <?php if($val['huxing_aspect'] == $vo): ?> selected="true" <?php endif; ?>><?php echo $vo; ?></option>
                                                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                                                    </select>
                                                                    <!--<select  style="display: none;" name="huxing_fitment[]" lay-ignore>-->
                                                                        <!--<option value="0">装修程度</option>-->
                                                                        <!--<?php $_result=get_huxing_fitment_list();if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>-->
                                                                        <!--<option value="<?php echo $vo; ?>" <?php if($val['huxing_fitment'] == $vo): ?> selected="true" <?php endif; ?>><?php echo $vo; ?></option>-->
                                                                        <!--<?php endforeach; endif; else: echo "" ;endif; ?>-->
                                                                    <!--</select>-->
                                                                    <!--<select  style="display: none;" name="huxing_manage_type[]" lay-ignore>-->
                                                                        <!--<option value="0">使用类型</option>-->
                                                                        <!--<?php $_result=get_huxing_manage_type_list();if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>-->
                                                                        <!--<option value="<?php echo $vo; ?>" <?php if($val['huxing_manage_type'] == $vo): ?> selected="true" <?php endif; ?>><?php echo $vo; ?></option>-->
                                                                        <!--<?php endforeach; endif; else: echo "" ;endif; ?>-->
                                                                    <!--</select>-->
                                                                </div>
                                                                <div class="characteristic">
                                                                    <?php $_result=get_huxing_characteristic_list();if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                                                    <label><input lay-ignore type="checkbox"  name="huxing_characteristic[<?php echo $k; ?>][]" value="<?php echo $vo; ?>" <?php if(in_array(($vo), is_array($val['huxing_characteristic'])?$val['huxing_characteristic']:explode(',',$val['huxing_characteristic']))): ?>checked="true"<?php endif; ?> ><?php echo $vo; ?></label>&nbsp;
                                                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                                                </div>
                                                                <textarea placeholder="请输入户型说明..." name="huxing_remark[]"  value="<?php echo $val['huxing_remark']; ?>"><?php echo $val['huxing_remark']; ?></textarea>
                                                                <div class="operation_6">
                                                                    <input lay-ignore type="checkbox" name="is_hot[]" value="1"  <?php if($val['is_hot'] == '1'): ?> checked="checked" <?php endif; ?> style="margin-right: 3px; vertical-align: middle; margin-top: -3px;">是否热门
                                                                    <a href="javascript:void(0)" onclick="ClearPicArr(this,'<?php echo $val['huxing_pic']; ?>')"><i class="layui-icon layui-icon-close mr5"></i>删除</a>
                                                                </div>
                                                            </div>
                                                            <?php endforeach; endif; else: echo "" ;endif; ?>

                                                            <div class="images-upload ic" style="display: none;"></div>
                                                            <!-- 上传图片显示的样板 start -->
                                                            <div class="huxing_images_upload_tpl none">
                                                                <div class="images-upload ic">
                                                                    <div class='upimg' title="拖动修改排序" >
                                                                        <div class='icaction' style="display: none">
                                                                        <span class="load_images" onclick="">
                                                                            <a href="javascript:void(0);" style="color: white">
                                                                                <i class='fa fa-search-plus'></i>查看大图
                                                                            </a>
                                                                        </span>
                                                                        </div>
                                                                        <div class='cover-bg' style="display: none"></div>
                                                                        <img src="/public/static/admin/images/add-button.jpg"/>
                                                                    </div>
                                                                    <input type="hidden"/>
                                                                    <span class="span_input">
                                                                        <input type="hidden"/>
                                                                    </span>
                                                                    <textarea placeholder="请输入标题..."></textarea>
                                                                    <div class="size">
                                                                        <input  type="text" name=""/><span>室</span>
                                                                        <input  type="text" name=""/><span>厅</span>
                                                                        <input  type="text" name=""/><span>卫</span>
                                                                        <input  type="text" name=""/><span>厨</span>
                                                                    </div>
                                                                    <div class="pricearea">
                                                                        <span>价格：</span><input  type="text" name=""/><em>万元/套</em>
                                                                        <span>面积：</span><input  type="text" name=""/><em>㎡</em>
                                                                    </div>
                                                                    <div class="selectdiv">
                                                                        <select lay-ignore>
                                                                            <option value="0">销售状态</option>
                                                                            <?php $_result=get_sale_status_list();if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                                                            <option value="<?php echo $vo; ?>"><?php echo $vo; ?></option>
                                                                            <?php endforeach; endif; else: echo "" ;endif; ?>
                                                                        </select>
                                                                        <select lay-ignore>
                                                                            <option value="0">户型朝向</option>
                                                                            <?php $_result=get_huxing_aspect_list();if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                                                            <option value="<?php echo $vo; ?>"><?php echo $vo; ?></option>
                                                                            <?php endforeach; endif; else: echo "" ;endif; ?>
                                                                        </select>
                                                                        <!--<select  style="display: none;" lay-ignore>-->
                                                                            <!--<option value="0">装修程度</option>-->
                                                                            <!--<?php $_result=get_huxing_fitment_list();if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>-->
                                                                            <!--<option value="<?php echo $vo; ?>"><?php echo $vo; ?></option>-->
                                                                            <!--<?php endforeach; endif; else: echo "" ;endif; ?>-->
                                                                        <!--</select>-->
                                                                        <!--<select  style="display: none;" lay-ignore>-->
                                                                            <!--<option value="0">使用类型</option>-->
                                                                            <!--<?php $_result=get_huxing_manage_type_list();if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>-->
                                                                            <!--<option value="<?php echo $vo; ?>"><?php echo $vo; ?></option>-->
                                                                            <!--<?php endforeach; endif; else: echo "" ;endif; ?>-->
                                                                        <!--</select>-->
                                                                    </div>
                                                                    <div class="characteristic ">
                                                                        <?php $_result=get_huxing_characteristic_list();if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                                                        <label><input lay-ignore type="checkbox" value="<?php echo $vo; ?>"><?php echo $vo; ?></label>&nbsp;
                                                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                                                    </div>
                                                                    <textarea placeholder="请输入户型说明..."></textarea>
                                                                    <div class="operation_6">
                                                                        <input  lay-ignore type="checkbox" value="1" style="margin-right: 3px; vertical-align: middle; margin-top: -3px;">是否热门
                                                                        <a class="layui-icon layui-icon-close mr5" href="javascript:void(0)">删除</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- 上传图片显示的样板 end -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
							<!--沙盘选项-->
							<style>
								#shapan{height:400px;position:relative;width:100%;overflow:scroll;z-index:10;}
								#shapan_div *,*:before,*:after {
									-moz-box-sizing: border-box;
									-webkit-box-sizing: border-box;
									box-sizing: border-box;
								}
								.container{width:100%;}
								.col-50{width:49%;overflow-y: auto;}
								.layui-fl{float:left;}
								.layui-fr{float:right;}
							</style>
							<div id="shapan_div" class="layui-tab-item" style="padding-top: 10px;width: 100%;margin: 0px 10px;">
								<div class="col-50 layui-fl">
									<div class="layui-form layui-border-box layui-table-view"  style="margin:0;">
										<table id="tree-table" class="layui-table list-table" cellspacing="0" cellpadding="0" border="0" data-uri="<?php echo url('HouseSand/ajaxEdit'); ?>">
											<colgroup>
												<col width="40%">
												<col width="10%">
												<col width="10%">
												<col width="40%">
											</colgroup>
											<thead>
											<tr>
												<th>
													<div class="layui-table-cell"><span>楼栋名称</span></div>
												</th>
												<th>
													<div class="layui-table-cell"><span>楼层数</span></div>
												</th>
												<th>
													<div class="layui-table-cell"><span>销售状态</span></div>
												</th>

												<th>
													<div class="layui-table-cell" align="center"><span>操作</span></div>
												</th>

											</tr>
											</thead>
											<tbody  id="tr_begin">
											<tr></tr>
											<?php if(is_array($sand_list) || $sand_list instanceof \think\Collection || $sand_list instanceof \think\Paginator): $i = 0; $__LIST__ = $sand_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?>
											<tr id="sand_<?php echo $val['sand_id']; ?>">
												<td>
													<div class="layui-table-cell" id="title_<?php echo $val['sand_id']; ?>">
														<?php echo $val['title']; ?>
													</div>
												</td>
												<td data-field="title">
													<div class="layui-table-cell"  id="floor_num_<?php echo $val['sand_id']; ?>">
														<?php echo $val['floor_num']; ?>
													</div>
												</td>

												<td>
													<div class="layui-table-cell"  id="sale_status_<?php echo $val['sand_id']; ?>">
														<?php echo $val['sale_status']; ?>
													</div>
												</td>

												<td class="point">
													<?php 
													$selected = 0;
													$text_str = '添加';
													$point_pos = '0,0';
													if(in_array($val['sand_id'],$select_points)){
														$selected = 1;
														$text_str = '移除';
														$point_pos = $init_points[$val['sand_id']];
													}
													$sale_status = $val['sale_status'];
													 ?>
													<a data-select="<?php echo $selected; ?>" data-value="<?php echo $val['sand_id']; ?>" id="shapan_<?php echo $val['sand_id']; ?>" data-pos="<?php echo $point_pos; ?>" data-sale="<?php echo $val['sale_status']; ?>" data-title="<?php echo $val['title']; ?>(<?php echo $sale_status; ?>)" onclick="addPosition('<?php echo $val['sand_id']; ?>','<?php echo $val['title']; ?>(<?php echo $sale_status; ?>)',this)" class="layui-btn">
														<?php echo $text_str; ?>
													</a>
													<a data-url="<?php echo url('Xinfang/sand_edit',array('aid'=>$val['aid'],'sand_id'=>$val['sand_id'])); ?>" class="layui-btn btn-edit sand_edit" >
														编辑
													</a>
													<a data-url="<?php echo url('Xinfang/sand_del'); ?>"  data-id="<?php echo $val['sand_id']; ?>" onclick="delsand(this)" class="layui-btn btn-edit">
														删除
													</a>
												</td>
											</tr>
											<?php endforeach; endif; else: echo "" ;endif; ?>
											</tbody>
										</table>
									</div>

								</div>
								<div class="col-50 layui-fr" style="padding-right: 20px;overflow-y:hidden; ">
									<div class="layui-form-item layadmin-layer-demo" style="margin-top: 0px;">
										<div class="layui-block" style="padding-bottom: 10px;">
											<a class="layui-btn layui-btn-tc"  data-type="sand_add" >添加楼栋</a>
											<button class="layui-btn layui-btn-tc test-upload-demoMore" lay-data="{number:1,ey_savepath:'allimg',ey_callback:'sand_upload_call_back'}">上传沙盘图片</button>
											<button class="layui-btn layui-btn-tc layui-btn-normal" id="save" data-house_id="<?php echo $field['aid']; ?>" data-id="<?php echo $points['id']; ?>" data-uri="<?php echo $uri; ?>">保存沙盘</button>
											<button class="layui-btn layui-btn-tc layui-btn-danger" id="delete" data-house_id="<?php echo $field['aid']; ?>" data-id="<?php echo $points['id']; ?>" data-uri="<?php echo url('Xinfang/sand_pic_del'); ?>">删除沙盘</button>

										</div>
									</div>
									<div class="layui-border-box layui-table-view" style="height:400px;">
										<div id="shapan">
											<div id="shapan-i">
												<img id="MapImages" src="<?php echo $points['litpic']; ?>" />
											</div>
										</div>
										
									</div>
								</div>
                              <div style="clear: both;"></div>
							</div>
                        </div>
                    </div>
                    <div class="button-container layadmin-layer-demo">
                        <input type="hidden" id="aid" name="aid" value="<?php echo $aid; ?>">
                        <button class="layui-btn layui-btn-sm" lay-submit lay-filter="formSubmit">确认提交</button>
                        <button class="layui-btn layui-btn-sm layui-btn-primary"  data-type="return_parent">返回</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<script type="text/javascript" src="/public/static/admin/js/jqmodal.js?v=<?php echo $version; ?>"></script>
    <script>
        var temp = 0;
        var all_form = 0;
        $(document).ready(function(){
            // 鼠标事件，加载查看大图和删除图片
            $(".upload-img").live('mouseover', function(){
                $(this).find('div.icaction').show();
                $(this).find('div.cover-bg').show();
            }).live('mouseout', function(){
                $(this).find('div.icaction').hide();
                $(this).find('div.cover-bg').hide();
            });
            $('#add_time').layDate();
            $('#opening_time').layDate();
            $('#complate_time').layDate();
            $('#price_time').layDate();

            var city_id = "<?php echo $field['city_id']; ?>";
            set_city_list(city_id);
            var area_id = "<?php echo $field['area_id']; ?>";
            set_area_list(area_id);

            //初始化所有点
            var init_point = '<?php echo $points['data']; ?>';
            console.log(init_point);
            if(init_point){
                init_point = eval('('+init_point+')');
                for(var i in init_point){
                    var d = init_point[i],p= d['point'].split(','),left_point=parseInt(p[0]),top_point=parseInt(p[1]);
                    sha_idot(d.sand_id, d.title, d.sale,left_point,top_point);
                }
            }
        });
        //光标离开楼盘地址编辑，自动获取坐标
        $("#address").on('blur',function(){
            var province_id = $("#province_id").val(),city_id = $("#city_id").val();area_id = $("#area_id").val();
            var address = $(this).val();
            var url     = "<?php echo url('Map/getLocationByAddress'); ?>";
            var param = {
                province : province_id,
                city : city_id,
                area : area_id,
                address : address
            };
            $.get(url,param,function(res){
                if(res.code == 1)
                {
                    $("#map").val(res.data.map);
                }
            });
        });

        var layui_index = layui.config({
            base: '/public/static/admin/' //静态资源所在路径
            ,version: '<?php echo $version; ?>'
        }).extend({
            index: 'lib/index' //主入口模块
        }).use(['index', 'form'], function(){
            var $ = layui.$
                ,element = layui.element
                ,layer = layui.layer
				,form = layui.form
                ,all_form = layui.form;

            element.render();

            //监听自定义开关
            form.on('switch', function(data){
                var elemId = data.elem.attributes['lay-filter']['nodeValue'];
                if (data.elem.checked) {
                    this.value = 1;
                } else {
                    this.value = 0;
                }
                $("input[name='"+elemId+"']").val(this.value);
            });

            /*自定义字段的复选框*/
            form.on('checkbox(addonFieldExt)', function(data){
                try{
                    var callback = data.elem.attributes['data-callback']['nodeValue'];
                    eval(callback+"()");
                }catch(e){}
            });
            /*end*/

            form.on('checkbox', function(data){
                try{
                    var elemId = data.elem.attributes['id']['nodeValue'];
                    if (data.elem.checked) {
                        this.value = 1;
                    } else {
                        this.value = 0;
                    }
                    $("input[name='"+elemId+"']").val(this.value);
                }catch(e){}
            });
			//选中经纪人模型
            form.on('select(users_id)', function(data){
                $("#sale_name").val($("#users_id").find("option:selected").data('name'));
                $("#sale_phone").val($("#users_id").find("option:selected").data('mobile'));
                $("#phone_code").val('');
                form.render();
            });
            /* 触发事件 */
            var active = {
                area:function () {     //区域管理
                    set_region();
                }
                ,saleman:function () {      //经纪人管理
                    set_saleman();
                }
                ,map_mark:function () {     //标注管理
                    set_map();
                }
                ,tags_mark:function () {    //设置标签
                    tags_list(this);
                }
                ,author_mark:function () {  //设置作者
                    set_author();
                }
                , return_parent:function () {     //返回上级
                    var index=parent.layer.getFrameIndex(window.name); //获取当前窗口的name
                    parent.layer.close(index);		//关闭窗口
                }
                ,sand_add:function () {	//添加楼栋
					sand_add();
                }
                ,select_relate:function () {    //选择关联经纪人
                    var xinfang = layer.open({
                        type : 2,
                        title : '选择联经纪人',
                        area : ['700px','500px'],
                        shade : 0.2,
                        iframeAuto:true,
                        content : "<?php echo url('Users/ajaxSelectRelate'); ?>"+'&func=set_relate_back',
                        end : function(){

                        }
                    });
                }
                ,select_house:function () {     //模型关联管理
                    var url = $(this).data('url');
                    var name = $(this).data('name');
                    var xinfang = layer.open({
                        type : 2,
                        title : '选择'+name,
                        area : ['500px','500px'],
                        shade : 0.2,
                        iframeAuto:true,
                        content : url,
                        end : function(){
                        }
                    });
                    layer.full(xinfang);
                }

            };
            $('#LAY-component-layer-list .layadmin-layer-demo .layui-btn').on('click', function(){
                var type = $(this).data('type');
                active[type] && active[type].call(this);
            });
            form.verify({
                check_typeid: function(value, item){ //value：表单的值、item：表单的DOM对象
                    if(0 == value){
                        tabchange(0);
                        return '请选择所属栏目！';
                    }
                }
                ,check_title:function (value, item) {
                    if(value == '' || undefined == value){
                        tabchange(0);
                        return '必填项不能为空';
                    }
                }
                ,check_price:function (value, item) {
                    var number = /^[0-9]\d*$/;
                    if(value != '' && !number.test(value)){
                        tabchange(0);
                        return '价格只能输入数字';
                    }
                }
                ,check_address:function (value, item) {
                    if(value == '' || undefined == value){
                        tabchange(0)
                        return '地址项不能为空';
                    }
                }
                ,check_cityid:function (value, item) {
                    if(0 == value){
                        tabchange(0);
                        return '请选择城市！';
                    }
                }
                ,check_tellphone: function(value){
                    var phone = /^[0-9-]+$/;
                    var flag = phone.test(value);
                    if(value != '' && !flag){
                        tabchange(0);
                        return '请输入正确座机号码或手机号';
                    }
                }
                ,check_map:function (value, item) {
                    if(value == '' || undefined == value){
                        tabchange(0)
                        return '请选择楼盘坐标';
                    }
                }
            });
            function tabchange(tabIndex)
            {
                var tabObj = $('div.layui-tab ul.layui-tab-title');
                tabObj.find('li').each(function(){
                    $(this).removeClass('layui-this');
                });
                $(tabObj.find('li').get(tabIndex)).addClass('layui-this');
                $('.layui-tab-item').removeClass('layui-show');
                $($('.layui-tab-item').get(tabIndex)).addClass('layui-show');
            }
            //选中跳转链接
            form.on('checkbox(is_jump)',function (obj) {
                if ($(this).is(':checked')) {
                    $('#jump_div').show();
                } else {
                    $('#jump_div').hide();
                }
            });
            //选中显示优惠内容
            form.on('switch(addonFieldSys[is_discount])',function (obj) {
                if ($(this).is(':checked')) {
                    $('#discount_div').show();
                } else {
                    $('#discount_div').hide();
                }
            });
            //选中省份模型
            form.on('select(province_id)', function(data){
                 set_city_list(0);
                set_area_list(0);
                form.render();
            });
            //选中城市
            form.on('select(city_id)', function(data){
                set_area_list(0);
                form.render();
            });
            //监听提交
            form.on('submit(formSubmit)', function(data){
                data.field._ajax = 1;
                $('textarea[class*="ckeditor"]').each(function(index, item){
                    data.field[item.name] = item.value;
                });
                form_submit(data);
            });
        });
        //检测是否存在同名楼盘，并提交
		function form_submit(data) {
		    console.log(data);
            var load = layer_loading();
            $.ajax({
                type : 'post',
                url : "<?php echo url('Xinfang/edit'); ?>",
                data : data.field,
                dataType : 'json',
                success : function(res){
                    layer.close(load); //关闭loading
                    if(res.code == 1){
                        parent.window.location.href = res.url;
                    }else if(res.data.permission == 1){
                        layer.confirm('已经存在同名楼盘,依然提交吗？', {
                                title: false,
                                btn: ['确定','取消'] //按钮
                            }, function(index){
                            data.field.permission = 1;
                            form_submit(data);
                            }, function(index){
                            }
                        );
                    }else{
                        layer.msg(res.msg, {icon: 2,time: 2000});
                    }
                },
                error: function(e){
                    layer.close(load); //关闭loading
                    showErrorAlert();
                }
            });
            return false;
        }
        //区域管理
        function set_region() {
            var url = "<?php echo url('Region/index'); ?>";
            var region_iframes = layer.open({
                type: 2,
                title: '区域管理',
                fixed: true, //不固定
                shadeClose: false,
                shade: 0.3,
                content: url
            });
            layer.full(region_iframes);
        }
        //经纪人管理
        function set_saleman() {
            var url = "<?php echo url('Saleman/index'); ?>";
            var saleman_iframes = layer.open({
                type: 2,
                title: '经纪人管理',
                fixed: true, //不固定
                shadeClose: false,
                shade: 0.3,
                content: url
            });
            layer.full(saleman_iframes);
        }
        //标注地图位置
        function set_map()
        {
            var province = $("#province_id").val();
            var city = $("#city_id").val();
            var area = $("#area_id").val();
            if(city==='0' || city === '' || city === null)
            {
                layer.msg('请选择城市',{icon:2});
                return false;
            }
            var map = $("#map").val();
            var url = "<?php echo url('Map/updateLocation'); ?>&province="+province+"&city="+city+"&area="+area+"&map="+map;
            //iframe窗
            var iframes = layer.open({
                type: 2,
                title: '标注地图',
                fixed: true, //不固定
                shadeClose: false,
                shade: 0.3,
                content: url
            });
            layer.full(iframes);
        }

        //自动获取城市列表
        function set_city_list(cityid) {
            var pid =  $("#province_id").val();
            $.ajax({
                url: "<?php echo url('Region/ajax_get_region'); ?>",
                type: 'POST',
                dataType: 'JSON',
                async: false,
                data: {pid:pid,_ajax:1},
                success: function(res){
                    if (res.code === 1){
                        $("#city_id").empty();
                        $("#city_id").prepend(res.msg);
                        if (cityid > 0){
                            $("#city_id").val(cityid);
                        }
                    }
                },
                error: function(e){
                    showErrorMsg();
                    return false;
                }
            });
        }
        //自动获取区域
        function set_area_list(areaid) {
            var pid =  $("#city_id").val();
            $.ajax({
                url: "<?php echo url('Region/ajax_get_region'); ?>",
                type: 'POST',
                dataType: 'JSON',
                async: false,
                data: {pid:pid,level:3,_ajax:1},
                success: function(res){
                    if (res.code === 1){
                        $("#area_id").empty();
                        $("#area_id").prepend(res.msg);
                        if (areaid > 0){
                            $("#area_id").val(areaid);
                        }
                        if (res.data.isempty == 1){
                            $("#area_div").hide();
						}else{
                            $("#area_div").show();
						}
                    }
                },
                error: function(e){
                    showErrorMsg();
                    return false;
                }
            });
        }
        //上传相册前判断
        function xinfang_photo_upload(){
            if($('#photo_type_select').val() == 0)
            {
                layer.msg('请选择相册类型',{icon:2});
                return false;
            }
            return true;
        }
        // 上传之后删除组图input
        function ClearPicArr(obj,path)
        {
            $(obj).parent().parent().remove(); // 删除完服务器的, 再删除 html上的图片
            $.ajax({
                type:'POST',
                url:"<?php echo url('Uploadify/delupload'); ?>",
                data:{action:"del", filename:path},
                success:function(){}
            });
        }
        // 鼠标事件，加载查看大图和更新图片
        $(document).ready(function(){
            $(".upimg").live('mouseover', function(){
                $(this).find('div.icaction').show();
                $(this).find('div.cover-bg').show();
            }).live('mouseout', function(){
                $(this).find('div.icaction').hide();
                $(this).find('div.cover-bg').hide();
            });
        });

        // 查看大图
        function Images(links){
            var max_width = 650;
            var max_height = 350;
            var img = "<img src='"+links+"'/>";
            $(img).load(function() {
                width  = this.width;
                height = this.height;
                if (width > height) {
                    if (width > max_width) {
                        width = max_width;
                    }
                    width += 'px';
                } else {
                    width = 'auto';
                }
                if (width < height) {
                    if (height > max_height) {
                        height = max_height;
                    }
                    height += 'px';
                } else {
                    height = 'auto';
                }

                var links_img = "<img style='width:"+width+";height:"+height+";' src="+links+">";

                layer.open({
                    type: 1,
                    title: false,
                    closeBtn: true,
                    shadeClose:true,
                    area: [width, height],
                    skin: 'layui-layer-nobg', //没有背景色
                    content: links_img
                });
            });
        }

        // 图集相册的拖动排序相关 js
        $( ".sort-list" ).sortable({
            start: function( event, ui) {

            }
            ,stop: function( event, ui ) {

            }
        });
        $( ".sort-list" ).disableSelection();


        // 上传图集相册回调函数
        function xinfang_photo_upload_call_back(pathObj){
            if (Array.isArray(pathObj)){
                var paths = pathObj;
            }else{
                var paths = [pathObj.url];
            }
            var last_div = $(".images_upload_tpl").html();
            var inputs   = $('.span_input input');
            var photo_type = $("#photo_type_select").val();
            var photo_type_name = $("#photo_type_select").find("option:selected").text();

            for (var i=0;i<paths.length ;i++){
                $(".images-upload:eq(0)").before(last_div);  // 插入一个 新图片
                // 修改他的链接地址
                $(".images-upload:eq(0)").find('span:eq(0)').attr('onclick',"Images('"+paths[i]+"');");
                // 修改他的图片路径
                $(".images-upload:eq(0)").find('img').attr('src',paths[i]);
                // 处理图片路径及隐藏域
                if (inputs.length > '0') {
                    // 修改隐藏域，提交ID隐藏域
                    $(".images-upload:eq(0)").find('input:eq(0)').attr('name','photo_id[]').attr('value','');
                    // 修改隐藏域，提交图片隐藏域
                    $(".span_input:eq(0)").find('input:eq(0)').attr('name','photo_pic[]').attr('value',paths[i]);
                    //修改隐藏域，提交图片类型 select_input
                    $(".images-upload:eq(0)").find('input:eq(0)').attr('name','photo_type[]').attr('value',photo_type);
                    // 提交标题
                    $(".images-upload:eq(0)").find('textarea:eq(0)').attr('name','photo_title[]');
                    // 提交图片类型名称
                    $(".images-upload:eq(0)").find('div.operation a:eq(0)').html("<label>分类："+photo_type_name+"</label>");
                    // 删除按钮
                    $(".images-upload:eq(0)").find('div.operation a:eq(1)').attr('onclick',"ClearPicArr(this,'"+paths[i]+"')").html("<i class='layui-icon layui-icon-close mr5'></i>删除");
                }
            }
        }
        // 上传户型图片回调函数
        function xinfang_huxing_upload_call_back(pathObj){
            if (Array.isArray(pathObj)){
                var paths = pathObj;
            }else{
                var paths = [pathObj.url];
            }
            var last_div = $(".huxing_images_upload_tpl").html();
            var inputs   = $('.characteristic label');
            for (var i=0;i<paths.length ;i++){
                $(".huxing .images-upload:eq(0)").before(last_div);  // 插入一个 新图片
                // 修改他的链接地址
                $(".huxing .images-upload:eq(0)").find('span:eq(0)').attr('onclick',"Images('"+paths[i]+"');");
                // 修改他的图片路径
                $(".huxing .images-upload:eq(0)").find('img').attr('src',paths[i]);
                // 修改隐藏域，提交ID隐藏域
                $(".huxing .images-upload:eq(0)").find('input:eq(0)').attr('name','huxing_id[]').attr('value','');
                // 修改隐藏域，提交图片隐藏域
                $(".huxing .span_input:eq(0)").find('input:eq(0)').attr('name','huxing_pic[]').attr('value',paths[i]);
                // 提交标题
                $(".huxing .images-upload:eq(0)").find('textarea:eq(0)').attr('name','huxing_title[]');
                //提交大小，室-厅-卫-厨
                $(".huxing .images-upload:eq(0)").find('div.size input:eq(0)').attr('name','huxing_room[]');
                $(".huxing .images-upload:eq(0)").find('div.size input:eq(1)').attr('name','huxing_living_room[]');
                $(".huxing .images-upload:eq(0)").find('div.size input:eq(2)').attr('name','huxing_toilet[]');
                $(".huxing .images-upload:eq(0)").find('div.size input:eq(3)').attr('name','huxing_kitchen[]');
                //提交价格，面积
                $(".huxing .images-upload:eq(0)").find('div.pricearea input:eq(0)').attr('name','huxing_price[]');
                $(".huxing .images-upload:eq(0)").find('div.pricearea input:eq(1)').attr('name','huxing_area[]');
                //提交select
                $(".huxing .images-upload:eq(0)").find('div.selectdiv select:eq(0)').attr('name','sale_status[]');
                $(".huxing .images-upload:eq(0)").find('div.selectdiv select:eq(1)').attr('name','huxing_aspect[]');
//                $(".huxing .images-upload:eq(0)").find('div.selectdiv select:eq(2)').attr('name','huxing_fitment[]');
//                $(".huxing .images-upload:eq(0)").find('div.selectdiv select:eq(3)').attr('name','huxing_manage_type[]');
                //提交特色
                for (var j=0;j<inputs.length ;j++){
                    $(".huxing .images-upload:eq(0)").find('div.characteristic input:eq('+j+')').attr('name','huxing_characteristic['+temp+'][]');
                }
                temp++;
                // 提交户型说明
                $(".huxing .images-upload:eq(0)").find('textarea:eq(1)').attr('name','huxing_remark[]');
                //是否热门
                $(".huxing .images-upload:eq(0)").find('div.operation_6 input:eq(0)').attr('name','is_hot[]');
                // 删除按钮
                $(".huxing .images-upload:eq(0)").find('div.operation_6 a:eq(0)').attr('onclick',"ClearPicArr(this,'"+paths[i]+"')").html("<i class='fa fa-remove'></i>删除");
            }
        }
        //上传沙盘图片回调
		function sand_upload_call_back(pathObj) {
            if (Array.isArray(pathObj)){
                var paths = pathObj;
            }else{
                var paths = [pathObj.url];
            }
            for (var i=0;i<paths.length ;i++){
                $("#MapImages").attr('src',paths[i]);

			}
        }
        //选择关联经纪人回调
        function set_relate_back(recall) {
            if ($("#relate_"+recall.id).length == 0){
                var html = '<span class="tower-add relate" id="relate_'+ recall.id +'" data-id="'+ recall.id +'">' +
                    '<input type="hidden" name="relate[]" value="'+ recall.id +'">' +
                    recall.true_name +
                    '<i class="layui-icon layui-icon-close"></i>' +
                    '</span>';
                $("#relate").append(html);
            }
            if ($("#sale_phone").val() == ''){
                $("#sale_phone").val(recall.mobile);
            }
        }
        $("#relate").on('click','i',function(){
            $(this).parent().remove();
        });
        //选择楼盘回调
        function set_house_back(recall){
            $("#province_id").val(recall['province_id']);
            $("#city_id").val(recall['city_id']);
            $("#area_id").val(recall['area_id']);
            $("#joinaid").val(recall['aid']);
            $("#title").val(recall['title']);
            $("#average_price").val(recall['original_price']);
            $('#join_title').html(recall['title']+ ' <i class="layui-icon layui-icon-close"></i>');
            $('#join_title').show();
            set_city_list(recall['city_id']);
            set_area_list(recall['area_id']);
            layui_index.form.render();
        }
        $("#join_title").on('click','i',function(){
            $("#join_title").html('');
            $('#join_title').hide();
            $("#joinaid").val(0);
        });
        //设置作者
        function set_author()
        {
            layer.prompt({
                    title:'<font color="red">设置作者默认名称</font>'
                },
                function(val, index){
                    var admin_id = '<?php echo \think\Session::get('admin_info.admin_id'); ?>';
                    $.ajax({
                        url: "<?php echo url('Admin/ajax_setfield'); ?>",
                        type: 'POST',
                        dataType: 'JSON',
                        data: {id_name:'admin_id',id_value:admin_id,field:'pen_name',value:val},
                        success: function(res){
                            if (res.code == 1) {
                                $('#author').val(val);
                                layer.msg(res.msg, {icon: 1, time:1000});
                            } else {
                                showErrorMsg(res.msg);
                                return false;
                            }
                        },
                        error: function(e){
                            showErrorMsg();
                            return false;
                        }
                    });
                    layer.close(index);
                }
            );
        }
        //设置标签
        function tags_list(obj)
        {
            var url = "<?php echo url('Tags/index'); ?>";
            //iframe窗
            layer.open({
                type: 2,
                title: 'TAG标签管理',
                fixed: true, //不固定
                shadeClose: false,
                shade: 0.3,
                maxmin: true, //开启最大化最小化按钮
                area: ['80%', '80%'],
                content: url
            });
        }
        //添加楼栋
        function sand_add() {
            var aid = $("#aid").val();
            var url = "<?php echo url('Xinfang/sand_add'); ?>&aid="+aid;
            //iframe窗
            layer.open({
                type: 2,
                title: '添加楼栋',
                fixed: true, //不固定
                shadeClose: false,
                shade: 0.3,
                area: ['80%', '80%'],
                content: url
            });
        }
        //编辑楼栋
        $('.sand_edit').click(function () {
            var iframes = layer.open({
                type: 2,
                title: '编辑楼栋',
                fixed: true, //不固定
                shadeClose: false,
                shade: 0.3,
                area: ['80%', '80%'],
                content: $(this).attr('data-url')
            });
        });
        /*
        *添加完楼栋回调
        * data
        * type 		1:添加，2：编辑，3：删除，0：操作不成功
         */
        function sand_call_back(data,type) {
			if(type == 1){
				var html = '<tr id="sand_'+data.sand_id+'">' +
						'<td>' +
                    '<div class="layui-table-cell" id="title_'+data.sand_id+'">' +
                		data.title +
                '</div>' +
                '</td>' +
                '<td data-field="title">' +
                '   <div class="layui-table-cell" id="floor_num_'+data.sand_id+'">' +
                   data.floor_num +
                '</div>' +
                '</td>' +
                '<td>' +
                '<div class="layui-table-cell" id="sale_status_'+data.sand_id+'">' +
                    data.sale_status +
                '</div>' +
                '</td>' +
                '                <td class="point">' +
                '   <a data-select="0" data-value="'+data.sand_id+'" id="shapan_'+data.sand_id+'" data-pos="<?php echo $point_pos; ?>" data-sale="'+data.sale_status+'" data-title="'+data.title+'('+data.sale_status+')" onclick="addPosition(\''+data.sand_id+'\',\''+data.title+'('+data.sale_status+')\',this)" class="layui-btn btn-edit sand_add">' +
                '   添加' +
                '   </a>' +
                '   <a data-url="<?php echo url('Xinfang/sand_edit'); ?>&aid='+data.aid+'&sand_id='+data.sand_id+'" class="layui-btn btn-edit sand_edit" >' +
                '   编辑' +
                '   </a>' +
                '   <a data-url="<?php echo url('Xinfang/sand_del'); ?>&aid='+data.aid+'&sand_id='+data.sand_id+'" class="layui-btn btn-edit sand_del">' +
                '   删除' +
                '   </a>' +
                '   </td>' +
                '   </tr>'
				;
				$("#tr_begin").append(html);
			}else if(type == 2){
				$("#title_"+data.sand_id).html(data.title);
                $("#floor_num_"+data.sand_id).html(data.floor_num);
                $("#sale_status_"+data.sand_id).html(data.sale_status);
			}else if(type == 3){
                for(keys in data){
                    $("#sand_"+data[keys]).remove();
                }
			}
			console.log(all_form);
//            all_form.render();
        }
        //删除楼栋
        function delsand(obj) {
            layer.msg(false, {
                btnAlign: 'c'
                ,time: 0
                ,btn: ['直接删除', '取消']
                ,yes: function(index, layero){
                    delsand_pseudo(obj, 2);
                    return false;
                }
                ,btn2: function(index, layero){
                    layer.close(index);
                }
            });
        }
        //删除楼栋
        function delsand_pseudo(obj, del_type){
            var url = $(obj).attr('data-url');
			// 直接删除
			layer_loading();
			$.ajax({
				type : 'POST',
				url : url,
				data : {del_id:$(obj).attr('data-id'), thorough:1, _ajax:1},
				dataType : 'json',
				success : function(res){
					layer.closeAll();
					if(res.code == 1){
                        sand_call_back(res.data,3);
					}else{
						showErrorAlert(res.msg);
					}
				},
				error:function(){
					layer.closeAll();
					showErrorAlert();
				}
			});
		}
        // 增加一个点
        function addPosition(id,msg,o){
            var a = $(o),status= a.data('sale');
            if(a.attr('data-select') == 0){
                sha_idot(id,msg,status,10,10);
                a.attr('data-select',1);
                a.text('移除');
            }else{
                a.attr('data-select',0);
                pointDel(id);
                a.text('添加');
            }
        }
        // 删除一个点
        function pointDel(id){
            $('#dot_'+id).remove();
            $('#shapan_'+id).attr('data-select',0).text('添加');
            //清理表单项目
        }

        // 显示一个点
        //id:楼栋ID
        //ldmc:楼栋名称
        function sha_idot(id,title,status,left,top){
            if(status == '预售'){
                status = 31;
			}else if(status == '售罄'){
                status = 32;
			}
            $('<a>',{
                id: 'dot_'+id,
                'class': 'sha-dot sha-dot-'+status,
				'data-id':id,
                html: title+'<i></i><b title="close"></b>'
            }).css({
                left: left,
                top: top
            }).jqDrag({
                attachment:'#shapan-i'
            })
                .on('dragEnd', function (el, l, t) {
                    $('#' + this.id.replace('dot','shapan')).attr('data-pos',l+','+t);
                })
                .appendTo('#shapan-i')
                .find('b').click(function(){ pointDel(id); })
        }
        $("#save").on('click',function(){
            var param = [];
            var aid = $(this).data('house_id');
            var img      = $('#MapImages').attr('src'),url=$(this).data('uri'),
                obj = $(".point").find("a[data-select=1]"),id=$(this).data('id');
            if(obj.length==0){
                layer.msg('请先添加楼栋再保存',{icon:2});
                return false;
            }else if(!img){
                layer.msg('请先上传沙盘图片再保存',{icon:2});
                return false;
            }else{
                layer.load(1);
                obj.each(function(i,o){
                    var tmp = {};
                    tmp.sand_id = $(o).data('value');
                    tmp.point = $(o).data('pos');
                    tmp.title = $(o).data('title');
                    tmp.sale  = $(o).data('sale');
                    param.push(tmp);
                });
            }
            var data = {
                aid : aid,
                litpic      : img,
                data     : param
            };
            if(id){
                data.id = id;
            }
            $.post(url,data,function(result){
                layer.closeAll();
                if(result.code == 1){
                    layer.msg('沙盘保存成功',{icon:1},function(){
//                        window.location.reload();
                    });
                }else{
                    layer.msg('沙盘保存失败', {icon:2});
                }
            });
        });
        $("#delete").on('click',function(){
            var id = $(this).data('id'),url=$(this).data('uri');
            layer.confirm('确定要删除沙盘么?',{icon:3,title:'提示信息'},function(index){
                layer.close(index);
                if(id)
                {
                    $.post(url,{id:id},function(res){
                        if(res.code == 1)
                        {
                            layer.msg('删除沙盘成功',{icon:1},function(){
                            });
                        }else{
                            layer.msg('删除沙盘失败', {icon:2});
                        }
                    });
                }
                $('#MapImages').attr('src','');
                $('#MapImages').siblings().each(function () {
                    pointDel($(this).data("id"));
                });
            });
        });
    </script>


    
</body>
</html>

