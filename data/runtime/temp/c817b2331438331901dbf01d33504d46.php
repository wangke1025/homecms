<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:46:"./application/admin/template/xinfang/index.htm";i:1586332422;s:78:"/www/wwwroot/ejucms.wingle.com.cn/application/admin/template/public/layout.htm";i:1580687630;s:78:"/www/wwwroot/ejucms.wingle.com.cn/application/admin/template/public/footer.htm";i:1580687630;}*/ ?>
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

<body>
<link rel="stylesheet" href="/public/static/admin/css/page.css" media="all">

<div class="layui-fluid " id="LAY-component-layer-list">
    <div class="layui-card">
        <div class="head-oper">
            <div class="fl">
                <?php if(!(empty($gourl) || (($gourl instanceof \think\Collection || $gourl instanceof \think\Paginator ) && $gourl->isEmpty()))): ?>
                <a href="<?php echo $gourl; ?>" class="layui-btn layui-btn-primary  input-btn-back"><i class="layui-icon layui-icon-left"></i></a>
                <?php endif; if(is_check_access(CONTROLLER_NAME.'@add') == '1'): ?>
                <a id="customvar_add" data-url="<?php echo url('Xinfang/add', array('typeid'=>$typeid)); ?>" class="layui-btn ">
                    新增<?php echo $channeltype_info['ntitle']; ?>
                </a>
                <?php endif; ?>
            </div>

            <div class="fr ">
                <form id="xinfang_form" action="<?php echo url('Xinfang/index'); ?>" method="get" onsubmit="layer_loading();">
                    <?php echo (isset($searchform['hidden']) && ($searchform['hidden'] !== '')?$searchform['hidden']:''); ?>
                    <div class="fl" >
                        <div class="layui-input-inline mt5">
                            <?php if($typeidNum > '1'): ?>
                            <select name="typeid" id="searchTypeid">
                                <option value="">--所有文档--</option>
                                <?php echo $arctype_html; ?>
                            </select>
                            <?php endif; ?>
                        </div>
                        <div class="layui-input-inline mt5">
                            <select name="sale_status" id="sale_status">
                                <option value="">销售状态</option>
                                <?php if(is_array($sale_status_list) || $sale_status_list instanceof \think\Collection || $sale_status_list instanceof \think\Paginator): $i = 0; $__LIST__ = $sale_status_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                <option value="<?php echo $vo; ?>" <?php if(\think\Request::instance()->param('sale_status') == $vo): ?>selected<?php endif; ?>><?php echo $vo; ?></option>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </select>
                        </div>
                        <div class="layui-input-inline mt5" id="div_province"></div>
                        <div class="layui-input-inline mt5" id="div_city"></div>

                        <div class="layui-input-inline mt5 w240">
                            <input type="text" name="keywords" id="keywords" value="<?php echo \think\Request::instance()->param('keywords'); ?>" placeholder="<?php echo $channeltype_info['ntitle']; ?>名称搜索" class="layui-input">
                        </div>
                    </div>
                    <div class="layui-input-inline w50 mt5 fl">
                        <button class="layui-btn input-btn-search" type="submit"><i class="layui-icon layui-icon-search"></i></button>
                    </div>
                </form>
            </div>
        </div>
        <div class="layui-card-body">
            <div class="layui-form layui-border-box layui-table-view house-table">
                <div class="layui-table-box">
                    <div class="layui-table-body " >
                        <table cellspacing="0" cellpadding="0" border="0" class="layui-table layui-form" lay-skin="line" style="width: 100%">
                            <thead >
                            <tr>
                                <th class="w40 tc">
                                    <div class="layui-table-cell w40 tc laytable-cell-checkbox">
                                        <input type="checkbox" lay-filter="checkAll" class="checkAll"   lay-skin="primary" >
                                        <div class="layui-unselect layui-form-checkbox" lay-skin="primary"> <i class="layui-icon layui-icon-ok"></i></div>
                                    </div>
                                </th>
                                <th class="w100 tc"> <div class="layui-table-cell w100 tc" ><span>ID</span></div></th>
                                <th class="laytable-cell-1-0-2"> <div class="layui-table-cell laytable-cell-1-0-2"><span><?php echo $channeltype_info['ntitle']; ?>名称</span></div></th>
                                <th class="w100 tc"> <div class="layui-table-cell w100 tc"><span>所属区域</span></div></th>
                                <th class="w80 tc"> <div class="layui-table-cell w80 tc"><span>显示</span></div></th>
                                <th class="w110 tc"> <div class="layui-table-cell w110 tc"><span>更新时间</span></div></th>
                                <th class="w80 tc"> <div class="layui-table-cell w80 tc"><span>排序</span></div></th>
                                <th class="w220 tc"> <div class="layui-table-cell w220 tc"><span>操作</span></div></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php if(empty($list) || (($list instanceof \think\Collection || $list instanceof \think\Paginator ) && $list->isEmpty())): ?>
                            <tr>
                                <td class="no-data" align="center" axis="col0" colspan="8">
                                    <i class="fa fa-exclamation-circle"></i>没有符合条件的数据
                                </td>
                            </tr>
                            <?php else: if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): if( count($list)==0 ) : echo "" ;else: foreach($list as $k=>$vo): ?>
                            <tr>
                                <td>
                                    <div class="layui-table-cell w40 tc laytable-cell-checkbox">
                                        <input type="checkbox" name="ids[]" value="<?php echo $vo['aid']; ?>" lay-filter="ids" lay-skin="primary">
                                    </div>
                                </td>
                                <td><div class="layui-table-cell w100 tc">  <?php echo $vo['aid']; ?> </div></td>
                                <td>
                                    <div class="layui-table-cell laytable-cell-1-0-2" title="">
                                        <a class="media" href="javascript:;" >
                                            <span  class="customvar_edit"  data-url="<?php echo url($channelRow[$vo['channel']]['ctl_name'].'/edit',array('id'=>$vo['aid'],'typeid'=>$vo['typeid'])); ?>" >
                                                <img src="<?php echo $vo['litpic']; ?>">
                                            </span>
                                            <div class="media-body" >
                                                <?php if(is_check_access('Archives@edit') == '1'): ?>
                                                <span data-url="<?php echo url($channelRow[$vo['channel']]['ctl_name'].'/edit',array('id'=>$vo['aid'],'typeid'=>$vo['typeid'])); ?>" class="tit customvar_edit" >
                                                    <?php echo $vo['title']; ?>
                                                </span>
                                                <span <?php if($vo['sale_status'] == '在售'): ?>
                                                      class="state-color bt-orange"
                                                      <?php elseif($vo['sale_status'] == '预售'): ?>
                                                      class="state-color bt-blue"
                                                      <?php else: ?>
                                                        class="state-color bt-finish"
                                                      <?php endif; ?>
                                                ><?php echo $vo['sale_status']; ?></span>
                                                <?php else: ?>
                                                <span>
                                                    <?php echo $vo['title']; ?>
                                                </span>
                                                <?php endif; ?>
                                                <br>
                                                <span class="attr">
                                                    <?php $showArcFlagData = showArchivesFlagStr($vo); if(is_array($showArcFlagData) || $showArcFlagData instanceof \think\Collection || $showArcFlagData instanceof \think\Paginator): $i = 0; $__LIST__ = $showArcFlagData;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($i % 2 );++$i;if($i == '1'): ?><span><?php endif; ?>
                                                        <b><?php echo $vo1['small_name']; ?></b>
                                                        <?php if($i == count($showArcFlagData)): ?></span><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                                </span>
                                                <br>
                                                <span class="price-color-b">￥<?php echo $vo['average_price']; ?><?php echo $vo['price_units']; ?></span>
                                            </div>
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <div class="layui-table-cell w100 tc">
                                        <a  data-city="<?php echo $vo['city_id']; ?>" onclick="city_submit('<?php echo $vo['province_id']; ?>','<?php echo $vo['city_id']; ?>')" >
                                            <?php echo get_city_name($vo['city_id']); ?>
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <div class="layui-table-cell w80 tc">
                                        <input type="checkbox" name="status"  data-id="<?php echo $vo['aid']; ?>" value="<?php echo $vo['status']; ?>" lay-filter="status" lay-skin="switch" lay-text="是|否" <?php if($vo['status']): ?> class="yes" checked<?php else: ?>class="no"<?php endif; ?>>
                                    </div>
                                </td>

                                <td><div class="layui-table-cell w110 tc"><?php echo date('Y-m-d H:i:s',$vo['update_time']); ?> </div></td>
                                <td>
                                    <div class="layui-table-cell w80 tc">
                                        <?php if(is_check_access(CONTROLLER_NAME.'@edit') == '1'): ?>
                                        <input type="text" class="layui-input" onchange="changeTableVal('archives','aid','<?php echo $vo['aid']; ?>','sort_order',this);"  size="4"  value="<?php echo $vo['sort_order']; ?>" onkeyup="this.value=this.value.replace(/[^\d]/g,'');" onpaste="this.value=this.value.replace(/[^\d]/g,'')" onchange="changeTableVal('archives','aid','<?php echo $vo['aid']; ?>','sort_order',this);" />
                                        <?php else: ?>
                                        <?php echo $vo['sort_order']; endif; ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="layui-table-cell w220 tc right-oper">
                                        <?php if(is_check_access('Archives@edit') == '1'): ?>
                                        <a data-url="<?php echo url($channelRow[$vo['channel']]['ctl_name'].'/edit',array('id'=>$vo['aid'],'typeid'=>$vo['typeid'])); ?>" class="layui-btn btn-edit customvar_edit" >
                                            编辑
                                        </a>
                                        <?php endif; ?>
                                        <a href="<?php echo $vo['arcurl']; ?>" target="_blank" class="layui-btn btn-primary" >
                                           浏览
                                        </a>
                                        <?php if(is_check_access('Archives@del') == '1'): ?>
                                        <a onclick="delfun(this)" class="layui-btn btn-primary" data-url="<?php echo url('Archives/del'); ?>" data-id="<?php echo $vo['aid']; ?>" data-deltype="pseudo">
                                            删除
                                        </a>
                                        <?php endif; ?>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach; endif; else: echo "" ;endif; endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="layui-table-page footer-oper">
                    <input type="checkbox" lay-filter="checkAll" class="checkAll" lay-skin="primary" >
                    <div class="nav-dropup">
                        <button  href="" class="layui-btn layui-btn-primary dropdown-bt" >批量操作<i class="layui-icon layui-icon-up"></i></button>
                        <div class="dropdown-menu">
                            <?php if(is_check_access('Archives@batch_copy') == '1'): ?>
                            <a  href="javascript:;" data-url="<?php echo url('Archives/batch_copy', array('typeid'=>$vo['typeid'])); ?>" onclick="func_batch_copy(this, 'ids');" id="batch_copy">
                                复制文档
                            </a>
                            <?php endif; if(is_check_access('Archives@move') == '1'): ?>
                            <a  href="javascript:;" onclick="func_move(this,'ids')" id="batch_move_all" data-url="<?php echo url('Archives/move', array('typeid'=>$vo['typeid'])); ?>">
                                移动文档
                            </a>
                            <?php endif; if(is_check_access('Archives@del') == '1'): ?>
                            <a  href="javascript:;" onclick="batch_del(this,'ids');" id="batch_del_all" data-url="<?php echo url('Archives/del'); ?>" data-deltype="pseudo">
                                删除文档
                            </a>
                            <?php endif; ?>
                            <hr class="layui-bg-gray">
                            <?php if(is_check_access('Archives@add_attribute') == '1'): ?>
                            <a  href="javascript:;"  onclick="func_haddle_attribute(this, 'ids','添加');" data-url="<?php echo url('Archives/add_attribute',['channel'=>9]); ?>" id="add_attribute">
                                添加属性
                            </a>
                            <?php endif; if(is_check_access('Archives@del_attribute') == '1'): ?>
                            <a  href="javascript:;" onclick="func_haddle_attribute(this,'ids','删除')" data-url="<?php echo url('Archives/del_attribute',['channel'=>9]); ?>"  id="del_attribute">
                                删除属性
                            </a>
                            <?php endif; ?>

                        </div>
                    </div>
                    <?php if(is_check_access('RecycleBin@archives_index') == '1'): ?>
                    <a class="layui-btn layui-btn-primary" lay-href="<?php echo url('RecycleBin/archives_index'); ?>" title="回收站"><i class="layui-icon layui-icon-delete"></i>回收站</a>
                    <?php endif; ?>
                </div>
            </div>
            <?php echo $page; ?>
        </div>
    </div>
</div>
<script>
    $(function () {
        var aids = '';
        var formNew;
        var province_id = "<?php echo $province_id; ?>";
        set_province_list(province_id);
        var city_id = "<?php echo $city_id; ?>";
        set_city_list(city_id);
        var openurl = "<?php echo \think\Request::instance()->param('openurl'); ?>";
        var msg = "<?php echo \think\Request::instance()->param('msg'); ?>";
        if (openurl){
            var iframes = layer.open({
                type: 2,
                title: false, // msg+'文章',
                closeBtn: false,
                fixed: true, //不固定
                shadeClose: false,
                shade: 0.3,
                content: openurl
            });
            layer.full(iframes);
        }
    });

    layui.config({
        base: '/public/static/admin/' //静态资源所在路径
        ,version: '<?php echo $version; ?>'
    }).extend({
        index: 'lib/index' //主入口模块
    }).use(['index', 'table'], function(){
        var $ = layui.$
            ,form = formNew = layui.form
            ,table = layui.table;

        /* 触发事件 */
        var active = {

        };

        $('#LAY-component-layer-list .layui-btn').on('click', function(){
            var type = $(this).data('type');
            active[type] && active[type].call(this);
        });
        //开启关闭
        form.on('switch(status)', function(obj){
            var dataid = $(this).attr('data-id');
            if ($(this).val() == 1){
                $(this).val(0);
            }else{
                $(this).val(1);
            }
            changeTableVal('archives','aid',dataid,'status',this);
        });

        // 监听复选框全选
        form.on('checkbox(checkAll)', function(data){
            if (data.elem.checked) {
                $('.checkAll').attr('checked', true);
                $('input[name*=ids]').attr('checked', true);
            } else {
                $('.checkAll').attr('checked', false);
                $('input[name*=ids]').attr('checked', false);
            }
            form.render('checkbox');
        });

        // 监听每行复选框
        form.on('checkbox(ids)', function(data){
            if (data.elem.checked && $('input[name*=ids]:checked').length == $('input[name*=ids]').length) {
                $('.checkAll').attr('checked', true);
            } else {
                $('.checkAll').attr('checked', false);
            }
            form.render('checkbox');
        });
    });
    //新增
    $('#customvar_add').click(function (){
        var iframes = layer.open({
            type: 2,
            title: false,//"新增<?php echo $channeltype_info['ntitle']; ?>",
			closeBtn: false,
            fixed: true, //不固定
            shadeClose: false,
            shade: 0.3,
            area: ['100%', '100%'],
            content: $(this).attr('data-url')
        });
        layer.full(iframes);
    });
    //点击城市提交
    function city_submit(province,city){
        $("#province_id").val(province);
        set_city_list(city);
        $("#xinfang_form").submit();
    }
    //下拉省份获取城市数据
    $(document).on('change', '#province_id', function(){
        set_city_list(0);
    });
    //选择下拉城市框提交
    $(document).on('change', '#city_id', function(){
        $('#xinfang_form').submit();
    });
    //选中下拉状态
    $(document).on('change', '#sale_status', function(){

        $('#xinfang_form').submit();
    });

    //编辑
    $('.customvar_edit').click(function () {
        var iframes = layer.open({
            type: 2,
            title: false,
            closeBtn: false,
            fixed: true, //不固定
            shadeClose: false,
            shade: 0.3,
            area: ['100%', '100%'],
            // maxmin: false, //开启最大化最小化按钮
            // area: admin.screen() < 2 ? ['96%', '400px'] : ['700px', '348px'],
            content: $(this).attr('data-url')
        });
        layer.full(iframes);
    });
    //移动文档
    function func_move(obj, name)
    {
        var a = [];
        var k = 0;
        aids = '';
        $('input[name^='+name+']').each(function(i,o){
            if($(o).is(':checked')){
                a.push($(o).val());
                if (k > 0) {
                    aids += ',';
                }
                aids += $(o).val();
                k++;
            }
        })
        if(a.length == 0){
            showErrorAlert('请至少选择一项');
            return;
        }

        var url = $(obj).attr('data-url');
        //iframe窗
        layer.open({
            type: 2,
            title: "批量移动",
            fixed: true, //不固定
            shadeClose: false,
            shade: 0.3,
            maxmin: false, //开启最大化最小化按钮
            area: ['450px', '350px'],
            content: url
        });
    }
    //批量处理属性
    function func_haddle_attribute(obj, name,text){
        var a = [];
        var k = 0;
        aids = '';
        $('input[name^='+name+']').each(function(i,o){
            if($(o).is(':checked')){
                a.push($(o).val());
                if (k > 0) {
                    aids += ',';
                }
                aids += $(o).val();
                k++;
            }
        })
        if(a.length == 0){
            showErrorAlert('请至少选择一项');
            return;
        }
        var url = $(obj).attr('data-url');
        //iframe窗
        layer.open({
            type: 2,
            title: '批量'+text+'属性',
            fixed: true, //不固定
            shadeClose: false,
            shade: 0.3,
            maxmin: false, //开启最大化最小化按钮
            area: ['450px', '330px'],
            content: url
        });
    }
    //批量复制
    function func_batch_copy(obj, name)
    {
        var a = [];
        var k = 0;
        aids = '';
        $('input[name^='+name+']').each(function(i,o){
            if($(o).is(':checked')){
                a.push($(o).val());
                if (k > 0) {
                    aids += ',';
                }
                aids += $(o).val();
                k++;
            }
        })
        if(a.length == 0){
            showErrorAlert('请至少选择一项');
            return;
        }

        var url = $(obj).attr('data-url');
        //iframe窗
        layer.open({
            type: 2,
            title: '批量复制',
            fixed: true, //不固定
            shadeClose: false,
            shade: 0.3,
            maxmin: false, //开启最大化最小化按钮
            area: ['450px', '330px'],
            content: url
        });
    }
    //自动获取省份列表
    function set_province_list(provinceid){
        $.ajax({
            url: "<?php echo url('Region/ajax_get_region_arc'); ?>",
            type: 'POST',
            async: false,
            dataType: 'JSON',
            data: {pid:0,level:1,text:'区域选择',_ajax:1},
            success: function(res){
                if (res.code === 1){
                    $("#div_province").html(res.msg);
                    if (provinceid > 0){
                        $("#province_id").val(provinceid);
                    }
                }
            },
            error: function(e){
                showErrorMsg();
                return false;
            }
        });
    }
    //自动获取城市列表
    function set_city_list(cityid) {
        var pid =  $("#province_id").val();
        if (pid){
            $("#div_city").show();
            $.ajax({
                url: "<?php echo url('Region/ajax_get_region_arc'); ?>",
                type: 'POST',
                async: false,
                dataType: 'JSON',
                data: {pid:pid,level:2,text:'城市选择',_ajax:1},
                success: function(res){
                    if (res.code === 1){
                        $("#div_city").html(res.msg);
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
        }else{
            $("#city_id").val(0);
            $("#div_city").hide();
        }
    }
    /**
     * 获取修改之前的内容
     */
    function get_aids()
    {
        return aids;
    }
    $(".dropdown-bt").click(function(){
        $(".dropdown-menu").slideToggle(200);
        event.stopPropagation();
    })
    $(document).click(function(){
        $(".dropdown-menu").slideUp(200);
        event.stopPropagation();
    })
</script>

</body>
</html>
