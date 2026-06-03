<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:43:"./application/admin/template/form/index.htm";i:1582165328;s:78:"/www/wwwroot/ejucms.wingle.com.cn/application/admin/template/public/layout.htm";i:1580687630;s:78:"/www/wwwroot/ejucms.wingle.com.cn/application/admin/template/public/footer.htm";i:1580687630;}*/ ?>
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
  <div class="layui-fluid" id="LAY-component-layer-list">
    <div class="layui-row">
      <div class="layui-col-md12">
        <div class="layui-card">
          <div class="web-system">
            <div class="layui-tab layui-tab-card">
              <?php if(\think\Request::instance()->param('tabase') != 1): ?>
              <ul class="layui-tab-title">
                  <li class="layui-this"><a href="<?php echo url('form/index'); ?>">报名信息管理</a></li>
                  <li><a href="<?php echo url('Form/attr_index'); ?>">报名表单管理</a></li>
                  <li><a href="<?php echo url('Form/config'); ?>">报名提醒管理</a></li>
              </ul>
              <?php endif; ?>
			  
			  <div class="baoming-cate pt20 pl15">
				  <ul>
                      <?php if(is_array($channel_list) || $channel_list instanceof \think\Collection || $channel_list instanceof \think\Paginator): $i = 0; $__LIST__ = $channel_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                      <li><a <?php if(\think\Request::instance()->param('channel_id') == $vo['id']): ?>class="cur"<?php endif; ?> href="<?php echo url('Form/index',['channel_id'=>$vo['id']]); ?>"><?php echo $vo['ntitle']; ?></a></li>
                      <?php endforeach; endif; else: echo "" ;endif; ?>
				  </ul>
			  </div>
			  
              <div class="layui-tab-content" style="padding:10px 0">
                <div class="layui-tab-item layui-show">
                  <div class="layui-row layui-col-space15">
                    <div class="layui-col-md12">
                      <div class="layui-card">
                        <div class="layui-card-body" pad15>
                            <div class="layui-form layui-border-box layui-table-view house-table">
                                <div class="layui-table-box">
                                    <div class="layui-table-body " >
                                        <table cellspacing="0" cellpadding="0" border="0" class="layui-table layui-form" style="width: 100%" lay-skin="line">
                                            <thead >
                                            <tr>
                                                <th class="w40 tc">
                                                    <div class="layui-table-cell w40 tc laytable-cell-checkbox">
                                                        <input type="checkbox" lay-filter="checkAll" class="checkAll" lay-skin="primary" >
                                                    </div>
                                                </th>
                                                <th class="w60 tc"> <div class="layui-table-cell w60 tc" ><span>ID</span></div></th>
                                                <?php if(is_array($form_attr_default_list) || $form_attr_default_list instanceof \think\Collection || $form_attr_default_list instanceof \think\Paginator): $i = 0; $__LIST__ = $form_attr_default_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$attr): $mod = ($i % 2 );++$i;?>
                                                <th class="w130 tc"> <div class="layui-table-cell w130 tc"><span><?php echo $attr['attr_name']; ?></span></div></th>
                                                <?php endforeach; endif; else: echo "" ;endif; ?>
                                                <th class="wauto"> <div class="layui-table-cell wauto"><span>提交来源</span></div></th>
                                                <th class="w170 tc"> <div class="layui-table-cell w170 tc"><span>提交时间</span></div></th>
                                                <th class="w200 tc"> <div class="layui-table-cell w200 tc"><span>报名表单</span></div></th>
                                                <th class="w80 tc"> <div class="layui-table-cell w80 tc"><span>未读</span></div></th>
                                                <th class="w150 tc"> <div class="layui-table-cell w150 tc"><span>操作</span></div></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php if(empty($list) || (($list instanceof \think\Collection || $list instanceof \think\Paginator ) && $list->isEmpty())): ?>
                                            <tr>
                                                <td class="no-data" align="center" axis="col0" colspan="9">
                                                    <i class="fa fa-exclamation-circle"></i>没有符合条件的数据
                                                </td>
                                            </tr>
                                            <?php else: if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): if( count($list)==0 ) : echo "" ;else: foreach($list as $k=>$vo): ?>
                                                <tr>
                                                    <td>
                                                        <div class="layui-table-cell w40 tc laytable-cell-checkbox">
                                                            <input type="checkbox" name="ids[]" value="<?php echo $vo['list_id']; ?>" lay-filter="ids" lay-skin="primary">
                                                        </div>
                                                    </td>
                                                    <td><div class="layui-table-cell w60 tc"> <?php echo $vo['list_id']; ?> </div></td>
                                                    <?php if(is_array($vo['attr_is_default_list']) || $vo['attr_is_default_list'] instanceof \think\Collection || $vo['attr_is_default_list'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo['attr_is_default_list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v2): $mod = ($i % 2 );++$i;?>
                                                    <td>
                                                        <div class="layui-table-cell w130 tc">
                                                            <a href="tel:<?php echo (isset($new_form_values[$vo['list_id'].'_'.$v2['attr_id']]['attr_value']) && ($new_form_values[$vo['list_id'].'_'.$v2['attr_id']]['attr_value'] !== '')?$new_form_values[$vo['list_id'].'_'.$v2['attr_id']]['attr_value']:'————'); ?>">
                                                                <?php echo (isset($new_form_values[$vo['list_id'].'_'.$v2['attr_id']]['attr_value']) && ($new_form_values[$vo['list_id'].'_'.$v2['attr_id']]['attr_value'] !== '')?$new_form_values[$vo['list_id'].'_'.$v2['attr_id']]['attr_value']:'————'); ?>
                                                            </a>

                                                        </div>
                                                    </td>
                                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                                    <td><div class="layui-table-cell wauto"><a href="<?php echo $vo['come_url']; ?>" target="_blank"><?php echo $vo['come_from']; ?></a></div></td>
                                                    <td>
                                                        <div class="layui-table-cell w170 tc"><?php echo MyDate("Y-m-d H:i:s",$vo['add_time']); ?></div>
                                                    </td>
                                                    <td><div class="layui-table-cell w200 tc">
                                                        <a class="blue "  href="<?php echo url('Form/index',['form_id'=>$vo['form_id'],'channel_id'=>\think\Request::instance()->param('channel_id')]); ?>"><?php echo $vo['form_name']; ?></a> </div></td>
                                                    <td>
                                                        <div class="layui-table-cell w80 tc">
                                                            <input type="checkbox" name="is_read" id="is_read_<?php echo $vo['list_id']; ?>"  data-id="<?php echo $vo['list_id']; ?>" value="<?php echo $vo['is_read']; ?>" lay-filter="is_read" lay-skin="switch" lay-text="是|否" <?php if(empty($vo['is_read']) || (($vo['is_read'] instanceof \think\Collection || $vo['is_read'] instanceof \think\Paginator ) && $vo['is_read']->isEmpty())): ?> class="yes" checked<?php else: ?> class="no"<?php endif; ?>>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="layui-table-cell w150 tc layadmin-layer-demo right-oper">
                                                            <a class="layui-btn btn-edit customvar_edit" data-type="Form_examine" data-formname="<?php echo $vo['form_name']; ?>" data-listid="<?php echo $vo['list_id']; ?>">查看</a>

                                                            <a class="layui-btn btn-primary"  data-url="<?php echo url('Form/del'); ?>" data-id="<?php echo $vo['list_id']; ?>" data-type="Form_del">删除</a>
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
                                        <div class="dropdown-menu" id="dropdown-menu">
                                            <a class="layui-btn " data-type="batch_readAll" data-url="<?php echo url('Form/readAll'); ?>">
                                                全部已读
                                            </a>
                                            <a class="layui-btn " data-type="batch_read" data-url="<?php echo url('Form/read'); ?>">
                                                设为已读
                                            </a>
                                            <hr class="layui-bg-gray">
                                            <?php if(is_check_access(CONTROLLER_NAME.'@del') == '1'): ?>
                                            <a class="layui-btn " data-type="batch_del" data-url="<?php echo url('Form/del'); ?>">
                                                批量删除
                                            </a>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="nav-dropup">
                                        <button  href="" class="layui-btn layui-btn-primary dropdown-form" >
                                            <?php if(is_array($form_list) || $form_list instanceof \think\Collection || $form_list instanceof \think\Paginator): $i = 0; $__LIST__ = $form_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if(\think\Request::instance()->param('form_id') == $vo['id']): ?>
                                                    <?php echo $vo['name']; endif; endforeach; endif; else: echo "" ;endif; ?>
                                            <i class="layui-icon layui-icon-up"></i>
                                        </button>
                                        <div class="dropdown-menu" id="dropdown-form-div">
                                            <?php if(is_array($form_list) || $form_list instanceof \think\Collection || $form_list instanceof \think\Paginator): $i = 0; $__LIST__ = $form_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                            <a  class="layui-btn" href="<?php echo url('Form/index',['form_id'=>$vo['id'],'channel_id'=>\think\Request::instance()->param('channel_id')]); ?>" data-type="to_index" data-id="<?php echo $vo['id']; ?>" data-url="<?php echo url('Form/index',['form_id'=>$vo['id']]); ?>">
                                                <?php echo $vo['name']; ?>
                                            </a>
                                            <?php endforeach; endif; else: echo "" ;endif; ?>
                                        </div>
                                    </div>

                                    <!--<div  style="display: inline-block !important;">-->
                                        <!--<form id="xinfang_form" action="<?php echo url('Form/index'); ?>" method="get" onsubmit="layer_loading();">-->
                                            <!--<?php echo (isset($searchform['hidden']) && ($searchform['hidden'] !== '')?$searchform['hidden']:''); ?>-->
                                        <!--<select name="form_id" id="form_id" lay-ignore="" style="height:35px;border: 1px solid #C9C9C9">-->
                                            <!--<option value="">报名表单</option>-->
                                            <!--<?php if(is_array($form_list) || $form_list instanceof \think\Collection || $form_list instanceof \think\Paginator): $i = 0; $__LIST__ = $form_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>-->
                                            <!--<option value="<?php echo $vo['id']; ?>" <?php if(\think\Request::instance()->param('form_id') == $vo['id']): ?>selected<?php endif; ?>><?php echo $vo['name']; ?></option>-->
                                            <!--<?php endforeach; endif; else: echo "" ;endif; ?>-->

                                        <!--</select>-->
                                        <!--</form>-->
                                    <!--</div>-->

                                </div>
                                <!--分页-->

                            </div>
                            <?php echo $pageStr; ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

    <script>
        layui.config({
        base: '/public/static/admin/' //静态资源所在路径
        ,version: '<?php echo $version; ?>'
        }).extend({
            index: 'lib/index' //主入口模块
        }).use(['index', 'form'], function(){
            var $ = layui.$
                ,element = layui.element
                ,layer = layui.layer
                ,form = layui.form;

            element.render();

            /* 触发事件 */
            var active = {
                Form_del: function(){
                    delfun(this);
                }
                // 批量删除
                ,batch_del: function(){
                    batch_del(this,'ids');
                }
                //批量标志
                ,batch_read:function () {
                    batch_read(this,'ids');
                }
                //全部标志
                ,batch_readAll:function () {
                    batch_readAll(this);
                }
                // 查看详情
                ,Form_examine: function(){
                    var listid = $(this).data('listid');
                    $('#is_read_'+listid).removeAttr('checked');
                    form.render('checkbox');

                    layer.open({
                        title: $(this).data('formname')
                        , type: 2
                        , shadeClose: true
                        , area: ['90%', '90%']
                        , content: eyou_basefile+"?m=admin&c=Form&a=examine&list_id="+listid
                    });
                }
            };
            $('#LAY-component-layer-list .layui-btn').on('click', function(){
                var type = $(this).data('type');
                active[type] && active[type].call(this);
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

            //开启以读
            form.on('switch(is_read)', function(obj){
                var dataid = $(this).attr('data-id');
                if ($(this).val() == 1){
                    $(this).val(0);
                }else{
                    $(this).val(1);
                }
                changeTableVal('form_list','list_id',dataid,'is_read',this);
            });
        });
        function batch_read(obj, name) {
            var a = [];
            $('input[name^='+name+']').each(function(i,o){
                if($(o).is(':checked')){
                    a.push($(o).val());
                }
            })
            if(a.length == 0){
                showErrorAlert('请至少选择一项');
                return;
            }
            layer.msg(false, {
                btnAlign: 'c'
                ,time: 0
                ,btn: ['确定执行', '取消']
                ,yes: function(index, layero){
                    var url = $(obj).attr('data-url');
                    layer_loading();
                    $.ajax({
                        type: "POST",
                        url: url,
                        data: {list_id:a, _ajax:1},
                        dataType: 'json',
                        success: function (res) {
                            layer.closeAll();
                            if(res.code == 1){
                                layer.msg(res.msg, {icon: 1});
                                window.location.reload();
                            }else{
                                showErrorAlert(res.msg);
                            }
                        },
                        error:function(){
                            layer.closeAll();
                            showErrorAlert();
                        }
                    });
                    return false;
                }
                ,btn2: function(index, layero){
                    layer.close(index);
                }
            });

        }
        function batch_readAll(obj) {
            layer.msg(false, {
                btnAlign: 'c'
                ,time: 0
                ,btn: ['确定执行', '取消']
                ,yes: function(index, layero){
                    var url = $(obj).attr('data-url');
                    layer_loading();
                    $.ajax({
                        type: "POST",
                        url: url,
                        data: { _ajax:1},
                        dataType: 'json',
                        success: function (res) {
                            layer.closeAll();
                            if(res.code == 1){
                                layer.msg(res.msg, {icon: 1});
                                window.location.reload();
                            }else{
                                showErrorAlert(res.msg);
                            }
                        },
                        error:function(){
                            layer.closeAll();
                            showErrorAlert();
                        }
                    });
                    return false;
                }
                ,btn2: function(index, layero){
                    layer.close(index);
                }
            });
        }
        //选择下拉城市框提交
        $(document).on('change', '#form_id', function(){
            $('#xinfang_form').submit();
        });
        $(".dropdown-bt").click(function(){
            $("#dropdown-menu").slideToggle(200);
            $("#dropdown-form-div").slideUp(200);
            event.stopPropagation();
        })
        $(document).click(function(){
            $("#dropdown-menu").slideUp(200);
            event.stopPropagation();
        })

        $(".dropdown-form").click(function(){
            $("#dropdown-form-div").slideToggle(200);
            $("#dropdown-menu").slideUp(200);
            event.stopPropagation();
        })
        $(document).click(function(){
            $("#dropdown-form-div").slideUp(200);
            event.stopPropagation();
        })
    </script>

    
</body>
</html>