<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:39:"./template/default/mobile/ask/index.htm";i:1586913384;s:76:"/www/wwwroot/ejucms.wingle.com.cn/template/default/mobile/ask/ask_header.htm";i:1576723406;s:75:"/www/wwwroot/ejucms.wingle.com.cn/template/default/mobile/ask/hotsearch.htm";i:1576478772;s:73:"/www/wwwroot/ejucms.wingle.com.cn/template/default/mobile/ask/hotpost.htm";i:1576478648;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <title>问答中心</title>
    <meta name="renderer" content="webkit" />
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=0,minimal-ui" />
    <link href="<?php  $tagGlobal = new \think\template\taglib\eju\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_cmspath"); echo $__VALUE__; ?>/favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <?php  $tagStatic = new \think\template\taglib\eju\TagStatic; $__VALUE__ = $tagStatic->getStatic("ask/skin/css/eyoucms.css","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eju\TagStatic; $__VALUE__ = $tagStatic->getStatic("ask/skin/css/ask.css","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eju\TagStatic; $__VALUE__ = $tagStatic->getStatic("/public/static/common/js/jquery.min.js","",""); echo $__VALUE__; ?>
</head>

<body class="askpn" style="">
<!-- 头部 -->
<nav class="navbar navbar-default met-nav navbar-fixed-top" role="navigation">
    <div class="ey-head">
        <div class="container">
            <div class="row">
                <div class="col-xs-6 col-sm-6 logo">
                    <ul class="list-none">
                        <li><a href="<?php  $tagGlobal = new \think\template\taglib\eju\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_cmsurl"); echo $__VALUE__; ?>" class="ey-logo"><img src="<?php  $tagGlobal = new \think\template\taglib\eju\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_logo"); echo $__VALUE__; ?>" style="max-height: 60px;" /></a></li>
                        <li><a href="<?php echo $eju['field']['NewDateUrl']; ?>">问答中心</a></li>
                    </ul>
                </div>
                <div class="col-xs-6 col-sm-6 user-info">
                    <ol class="breadcrumb pull-right">
                        <?php if($users['users_id'] == '0'): ?>
                        <li><a href="<?php echo url("user/Users/login","",true,false);?>" title="登录">登录</a></li>
                        <li><a href="<?php echo url("user/Users/reg","",true,false);?>" title="注册">注册</a></li>
                        <?php else: ?>
                        <li><a href="<?php echo url("user/Users/centre","",true,false);?>"><?php echo $users['nickname']; ?></a></li>
                        <li><a href="<?php echo url("user/Users/logout","",true,false);?>" title="退出登录">退出登录</a></li>
                        <?php endif; ?>
                    </ol>
                    <button type="button" class="hamburger animated fadeInLeft is-closed" data-toggle="offcanvas">
                    <span class="hamb-top"></span>
                    <span class="hamb-middle"></span>
                    <span class="hamb-bottom"></span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</nav>
<!-- END -->
<main class="mian-body container">
    <aside class="aside-left col-md-9">
        <!-- 栏目导航、搜索 -->
        <?php  $tagStatic = new \think\template\taglib\eju\TagStatic; $__VALUE__ = $tagStatic->getStatic("ask/skin/js/bootstrap-hover-dropdown.min.js","",""); echo $__VALUE__; ?>
<div class="sbox">
    <!-- 搜索 -->
    <div class="search">
        <form action="" method="get" name="search" id="search" onsubmit="return formSubmit();">
            <input type="hidden" name="ct" value="search">
            <input class="searchinput" name="q" placeholder="输入问题关键字" autocomplete="off" value="<?php echo $eju['field']['SearchName']; ?>">
            <span class="search-icon" id="search-bottom" onclick="formSubmit();"></span>
            <div class="search-result">
            </div>
            <div class="hot-list" style="display: none;" id="search_keywords_list">
            </div>
        </form>
    </div>
    <!-- END -->

    <!-- 栏目导航 -->
    <ul class="nav navbar-nav navbar-right navlist" id="asktypes">
        <li class="nav-item">
            <a href="<?php echo $eju['field']['NewDateUrl']; ?>" title="问答首页" class="link <?php if($eju['field']['IsTypeId'] == '0'): ?>active<?php endif; ?>">问答首页</a>
        </li>

        <?php if(is_array($eju['field']['TypeData']) || $eju['field']['TypeData'] instanceof \think\Collection || $eju['field']['TypeData'] instanceof \think\Paginator): $i = 0; $e = 1;$k=0; $__LIST__ = $eju['field']['TypeData'];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$vo): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
        <li class="margin-left-0 nav-item">
            <a class="link <?php if($eju['field']['IsTypeId'] == $vo['type_id']): ?>active<?php endif; ?>" href="<?php echo $vo['Url']; ?>" data-hover="dropdown" aria-expanded="false"><?php echo $vo['type_name']; if(!(empty($vo['SubType']) || (($vo['SubType'] instanceof \think\Collection || $vo['SubType'] instanceof \think\Paginator ) && $vo['SubType']->isEmpty()))): ?>
                    <span class="caret fa-angle-down"></span>
                <?php endif; ?>
            </a>
            <?php if(!(empty($vo['SubType']) || (($vo['SubType'] instanceof \think\Collection || $vo['SubType'] instanceof \think\Paginator ) && $vo['SubType']->isEmpty()))): ?>
                <ul class="dropdown-menu dropdown-menu-right bullet" role="menu">
                    <?php if(is_array($vo['SubType']) || $vo['SubType'] instanceof \think\Collection || $vo['SubType'] instanceof \think\Paginator): $i = 0; $e = 1;$k=0; $__LIST__ = $vo['SubType'];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$st): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
                        <li><a href="<?php echo $st['Url']; ?>"><?php echo $st['type_name']; ?></a></li>
                    <?php ++$e;$k++; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $st = []; ?>
                </ul>
            <?php endif; ?>
        </li>
        <?php ++$e;$k++; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $vo = []; ?>
    </ul>
    <!-- END -->
    <div class="clearfix"></div>
</div>
<div class=" blank10"></div>

<script type="text/javascript" charset="utf-8">
    $(function(){ 
        $('#search input[name=q]').click(function(){
            if ($('#search input[name=q]').val() == '') {
                $('#hot_keywords_list').show();
            }
        });
    }); 

    // 搜索提交
    function formSubmit()
    {
        var q = $('#search input[name=q]').val();
        var url = '<?php echo $eju['field']['NewDateUrl']; ?>';
        if (url.indexOf('?') > -1) {
            url += '&';
        } else {
            url += '?';
        }
        url += 'search_name=' + q;
        window.location.href = url;
        return false;
    }
</script>
        <!-- END -->

        <!-- 最新、推荐、待回答 -->
        <div class="article-nav">
            <?php if(empty($eju['field']['PendingAsk']) || (($eju['field']['PendingAsk'] instanceof \think\Collection || $eju['field']['PendingAsk'] instanceof \think\Paginator ) && $eju['field']['PendingAsk']->isEmpty())): if(empty($eju['field']['SearchName']) || (($eju['field']['SearchName'] instanceof \think\Collection || $eju['field']['SearchName'] instanceof \think\Paginator ) && $eju['field']['SearchName']->isEmpty())): if(empty($eju['field']['TypeId']) || (($eju['field']['TypeId'] instanceof \think\Collection || $eju['field']['TypeId'] instanceof \think\Paginator ) && $eju['field']['TypeId']->isEmpty())): ?>
                        <span <?php if($eju['field']['IsRecom'] == '0'): ?>class="act"<?php endif; ?> onclick="window.location.href='<?php echo $eju['field']['NewDateUrl']; ?>'">最新</span>
                        <span <?php if($eju['field']['IsRecom'] == '1'): ?>class="act"<?php endif; ?>onclick="window.location.href='<?php echo $eju['field']['RecomDateUrl']; ?>'">推荐</span>
                    <?php else: ?>
                        <span class="act 1"><?php echo $eju['field']['TypeName']; ?></span>
                    <?php endif; else: ?>
                    <span class="act 2"><?php echo $eju['field']['SearchNameRed']; ?></span>
                <?php endif; else: ?>
                <span onclick="window.location.href='<?php echo $eju['field']['NewDateUrl']; ?>'">最新</span>
                <span onclick="window.location.href='<?php echo $eju['field']['RecomDateUrl']; ?>'">推荐</span>
                <span class="act 3"><?php echo $eju['field']['PendingAsk']; ?></span>
            <?php endif; ?>
            <button onclick="window.location.href='<?php echo $eju['field']['PendingAnswerUrl']; ?>';">
                <i class="fa icon-TobeAnswered"></i>待回答
            </button>
        </div>
        <!-- END -->

        <!-- 问题列表数据 -->
        <div class="article-list" id="newDiv">
            <ul class="article-ul">
                <?php if(empty($eju['field']['AskData']) || (($eju['field']['AskData'] instanceof \think\Collection || $eju['field']['AskData'] instanceof \think\Paginator ) && $eju['field']['AskData']->isEmpty())): ?>
                    <div class="huifu-edit">
                        <div class="huifu-null" > <p style="margin-top: 10px;">没有符合条件的问题！</p> </div>
                    </div>
                <?php else: if(is_array($eju['field']['AskData']) || $eju['field']['AskData'] instanceof \think\Collection || $eju['field']['AskData'] instanceof \think\Paginator): $i = 0; $e = 1;$k=0; $__LIST__ = $eju['field']['AskData'];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$vo): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
                    <li class="article-list-item">
                        <a class="list-avter user_card avatar" href="javascript:void(0);">
                            <img src="<?php echo $vo['litpic']; ?>">
                            <i class="svip"></i>
                        </a>
                        <div>
                            <a href="<?php echo $vo['AskUrl']; ?>" class="went-head">
                                <?php if($eju['field']['IsRecom'] == '1'): if($vo['is_recom'] == '1'): ?>
                                        <span class="jxuan"><i class="fa icon-best"></i>推荐</span>
                                    <?php endif; endif; ?>
                                <span class="went-head-text"><?php echo $vo['ask_title']; ?></span>
                            </a>
                            <div class="tx-list">
                                <?php if(is_array($vo['HeadPic']) || $vo['HeadPic'] instanceof \think\Collection || $vo['HeadPic'] instanceof \think\Paginator): $i = 0; $e = 1;$k=0; $__LIST__ = $vo['HeadPic'];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$pic): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
                                <a href="javascript:void(0);">
                                    <img src="<?php echo $pic['litpic']; ?>">
                                </a>
                                <?php ++$e;$k++; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $pic = []; ?>
                                <i class="fa icon-people-more" style="font-size:20px;color:#e5e5e5;margin-right: 10px;"></i>
                                <div class="list-text">
                                    <?php echo $vo['UsersConut']; ?> | <?php echo MyDate("Y-m-d H:i",$vo['add_time']); ?> |
                                    <a href="<?php echo $vo['TypeUrl']; ?>" target="_blank"><?php echo $vo['type_name']; ?></a>
                                </div>
                                <div style=" flex-grow:1 "></div>
                                <div class="more-info">
                                    <span style="margin-right:5px">
                                        <i class="icon wb-eye"></i><?php echo $vo['click']; ?>
                                    </span> |
                                    <span style="margin-left:5px">
                                        <i class="fa fa-comments-o"></i><?php echo $vo['replies']; ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <?php ++$e;$k++; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $vo = []; endif; ?>
            </ul>
        </div>
        <?php echo $eju['field']['pageStr']; ?>
        <!-- END -->
    </aside>

    <!-- 右侧 -->
    <aside class="aside-right col-md-3">
        <!-- 个人信息 -->
        <div class="wt-opti">
            <?php if(!(empty($users['nickname']) || (($users['nickname'] instanceof \think\Collection || $users['nickname'] instanceof \think\Paginator ) && $users['nickname']->isEmpty()))): ?>
            <div class="people-info">
                <a class="user_card" href="<?php echo $eju['field']['UsersIndexUrl']; ?>" target="_blank">
                    <img src="<?php echo $users['litpic']; ?>" style="width:40px;height:40px;border-radius:100%;cursor: pointer">
                </a>
                <div class="people-info-a">
                    <h3><?php echo $users['nickname']; ?></h3>
                    <div></div>
                </div>
            </div>
            <?php endif; ?>
            <div class="people-btn">
                <button class="act tw" onclick="window.location.href='<?php echo $eju['field']['AddAskUrl']; ?>';">
                    <i class="fa fa-edit"></i>我要提问
                </button>
            </div>
        </div>
        <!-- END -->

        <!-- 热门帖子 -->
        <div class="hot-users" id="userRecommend">
    <!-- 显示热门帖子 -->
    <h3 class="block-head">
        <i class="fa fa-trophy" style="margin-right:10px;font-size: 18px"></i>热门帖子
        <div class="hot-sw">
            <span class="listType" style="margin-right:10px;cursor: pointer" data-type="week">周榜</span>
            <font style="color: #e5e5e5">|</font>
            <span class="act listType" style="margin-left:10px;cursor: pointer" data-type="total">总榜</span>
        </div>
    </h3>
    <!-- END -->

    <!-- 周榜 -->
    <ul id="weekList" style="display: none;">
        <?php if(is_array($eju['field']['WeekList']) || $eju['field']['WeekList'] instanceof \think\Collection || $eju['field']['WeekList'] instanceof \think\Paginator): $i = 0; $e = 1;$k=0; $__LIST__ = $eju['field']['WeekList'];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$week): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
        <a href="<?php echo $week['AskUrl']; ?>" target="_blank">
            <li>
                <div class="hot-user-avter"><?php echo $key+1; ?></div>
                <div class="hot-user-info">
                    <div class="hot-nice"><?php echo $week['ask_title']; ?></div>
                </div>
            </li>
        </a>
        <?php ++$e;$k++; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $week = []; ?>
    </ul>
    <!-- END -->

    <!-- 总榜 -->
    <ul id="totalList">
        <?php if(is_array($eju['field']['TotalList']) || $eju['field']['TotalList'] instanceof \think\Collection || $eju['field']['TotalList'] instanceof \think\Paginator): $i = 0; $e = 1;$k=0; $__LIST__ = $eju['field']['TotalList'];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$total): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
        <a href="<?php echo $total['AskUrl']; ?>" target="_blank">
            <li>
                <div class="hot-user-avter"><?php echo $key+1; ?></div>
                <div class="hot-user-info">
                    <div class="hot-nice"><?php echo $total['ask_title']; ?></div>
                </div>
            </li>
        </a>
        <?php ++$e;$k++; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $total = []; ?>
    </ul>
    <!-- END -->
</div>

<script type="text/javascript">
    $(function() {
        // 排行榜
        $('.listType').hover(function() {
            $('.hot-sw').find('span').removeClass('act');
            $(this).addClass('act');
            var type = $(this).data('type');
            if ('week' == type) {
                $('#weekList').show();
                $('#totalList').hide();
            } else {
                $('#weekList').hide();
                $('#totalList').show();
            }
        });
    });
</script>
        <!-- END -->
    </aside>
    <!-- END -->
</main>
</body>
</html>