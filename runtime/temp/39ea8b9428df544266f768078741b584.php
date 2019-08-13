<?php /*a:8:{s:39:"./template/default/shop_cart\index.html";i:1565664854;s:43:"./template/default/common\forum_public.html";i:1545268338;s:37:"./template/default/common\header.html";i:1545268308;s:24:"template/fullscreen.html";i:1545200232;s:42:"./template/default/common\topbar_user.html";i:1565138280;s:37:"./template/default/common\topbar.html";i:1557450469;s:41:"./template/default/common\right_tool.html";i:1553237427;s:37:"./template/default/common\footer.html";i:1545980648;}*/ ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo htmlentities($option['siteTitle']); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="<?php echo htmlentities($option['siteKeywords']); ?>" />
    <meta name="description" content="<?php echo htmlentities($option['siteDes']); ?>" />
    <meta name="author" content="北林"> <?php if($option['full'] == '1'): ?> <meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no,minimal-ui">
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="screen-orientation" content="portrait">
<meta name="full-screen" content="yes">
<meta name="browsermode" content="application">
<meta name="x5-orientation" content="portrait">
<meta name="x5-fullscreen" content="true">
<meta name="x5-page-mode" content="app"> <?php endif; ?>
    <!-- 设置Theme -->
    <meta name="setPrimary" content="<?php echo htmlentities($theme['themePrimary']); ?>">
    <meta name="setAccent" content="<?php echo htmlentities($theme['themeAccent']); ?>">
    <meta name="setLayout" content="<?php echo htmlentities($theme['themeLayout']); ?>">

    <link rel="stylesheet" href="/public/static/css/simplemde.min.css">
    <link rel="stylesheet" href="/public/static/css/webui-popover.css">
    <link rel="stylesheet" href="/public/static/layui/css/layui.css">
    <link rel="stylesheet" href="/public/static/css/mdui.min.css">
    <link rel="stylesheet" href="/public/static/css/common.css">
    <link rel="shortcut icon" href="//at.alicdn.com/t/font_579119_hold5hi4m9o.css" type="image/x-icon">

    <script src="/public/static/js/jquery-3.3.1.min.js"></script>
    <script src="/public/static/layui/layui.js"></script>
    <script src="/public/static/js/mdui.min.js"></script>
    <script src="/public/static/js/webui-popover.js"></script>
</head>

<body class="mdui-theme-primary-pink mdui-theme-accent-pink mdui-appbar-with-toolbar">
    <script src="/public/static/js/theme.js"></script>
    <?php if(!empty(session('uid'))): ?> <!-- 站点导航部分 -->
<header class="mdui-appbar mdui-appbar-fixed">
    <div class="mdui-toolbar mdui-color-theme">
        <a href="javascript:;" class="mdui-btn mdui-btn-icon" mdui-drawer="{target:'#mobile-menu'}">
            <i class="mdui-icon material-icons">menu</i>
        </a>
	    <a href="http://www.wh1993.net/" class="mdui-typo-title mdui-hidden-xs">万和学院</a>
        <a href="<?php echo url('index/index'); ?>" class="mdui-typo-title mdui-hidden-xs">图文首页</a>
        <a href="<?php echo url('ebook/showres'); ?>" class="mdui-hidden-xs">资源下载</a>
         <?php echo outTopbar(); ?>
        <div class="mdui-toolbar-spacer"></div>
        <a href="<?php echo url('index/topic/create'); ?>" class="mdui-btn mdui-btn-icon mdui-ripple mdui-hidden-sm-up">
            <i class="mdui-icon material-icons">create</i>
        </a>
        <a href="<?php echo url('index/ShopCart/index'); ?>" class="mdui-btn mdui-btn-icon mdui-ripple">
            <i class="mdui-icon material-icons">&#xe8cc;</i>
        </a>
        <a href="javascript:;" id="mf-msg" class="mdui-btn mdui-btn-icon">
            <i class="layui-icon layui-icon-notice mdui-icon"></i><?php if($msg['unread'] > '0'): ?><span id="msg-hot" class="layui-badge-dot" style="margin:0 0 8px 24px"></span><?php endif; ?>
        </a>
        <a href="javascript:;" mdui-dialog="{target: '#color-panel'}" class="mdui-btn mdui-btn-icon color-input" style="display: <?php echo $theme['discolour']=='true' ? 'inline-block'  :  'none'; ?>">
            <i class="mdui-icon material-icons">color_lens</i>
        </a>
        <a href="<?php echo url('index/user/index'); ?>" class="mdui-ripple mdui-hidden-xs">
            <img src="<?php echo htmlentities($userData['avatar']); ?>" class="mdui-img-circle" width="32" alt="<?php echo htmlentities($userData['username']); ?>">
            <?php echo htmlentities($userData['username']); ?>
        </a>
        <a href="<?php echo url('index/user/logout'); ?>" class="mdui-btn mdui-ripple mdui-hidden-xs">退出</a>
    </div>

</header>
<!-- 论坛左侧手机版菜单 -->
<div class="mdui-drawer mdui-drawer-close" id="mobile-menu">
    <ul class="mdui-list" mdui-collapse="{accordion: true}">

        <li class="mdui-list-item mdui-ripple">
            <i class="mdui-list-item-icon mdui-icon material-icons">home</i>
            <a href="<?php echo url('index/index'); ?>" title="Home">
                <div class="mdui-list-item-content">Home</div>
            </a>
        </li>

        <li class="mdui-collapse-item">
            <div class="mdui-collapse-item-header mdui-list-item mdui-ripple">
                <i class="mdui-list-item-icon mdui-icon material-icons">people</i>
                <div class="mdui-list-item-content">站点导航</div>
                <i class="mdui-collapse-item-arrow mdui-icon material-icons">keyboard_arrow_down</i>
            </div>
            <ul class="mdui-collapse-item-body mdui-list mdui-list-dense">
		<a href="http://www.wh1993.net/" title="万和学院"><li class="mdui-list-item mdui-ripple">万和学院</li></a>
                <?php echo mOutTopabr(); ?>
            </ul>
        </li>

        <li class="mdui-list-item mdui-ripple">
            <i class="mdui-list-item-icon mdui-icon material-icons">person</i>
            <a href="<?php echo url('index/user/index'); ?>" title="UserCenter">
                <div class="mdui-list-item-content">用户中心</div>
            </a>
        </li>

        <li class="mdui-list-item mdui-ripple">
            <i class="mdui-list-item-icon mdui-icon material-icons">person_add</i>
            <a href="<?php echo url('index/user/logout'); ?>" title="Logout">
                <div class="mdui-list-item-content">退出</div>
            </a>
        </li>
    </ul>
</div>

<div class="mdui-dialog" id="color-panel">
    <div class="mdui-dialog-content">
        <div class="mdui-dialog-title">设定主题</div>
        <p class="mdui-typo-title">主题色</p>
        <div class="mdui-row-sm-2 mdui-row-md-3" id="layout-list"></div>
        <p class="mdui-typo-title">主色</p>
        <div class="mdui-row-sm-2 mdui-row-md-3" id="primary-list"></div>
        <p class="mdui-typo-title">强调色</p>
        <div class="mdui-row-sm-2 mdui-row-md-3" id="accent-list"></div>
        <div class="mdui-dialog-actions">
            <button class="mdui-btn mdui-ripple" onclick="theme.reset()">初始化</button>
        </div>
    </div>
</div>
 <?php else: ?> <!-- 站点导航部分 -->
<header class="mdui-appbar mdui-appbar-fixed">
    <div class="mdui-toolbar mdui-color-theme">
        <a href="javascript:;" class="mdui-btn mdui-btn-icon" mdui-drawer="{target:'#mobile-menu',overlay:true,swipe:true}">
            <i class="mdui-icon material-icons">menu</i>
        </a>
        <a href="http://www.wh1993.net/" class="mdui-typo-title mdui-hidden-xs">万和学院</a>
        <a href="<?php echo url('index/index'); ?>" class="mdui-typo-title mdui-hidden-xs">图文首页</a>
        <a href="<?php echo url('ebook/showres'); ?>" class="mdui-hidden-xs">资源下载</a>
         <?php echo outTopbar(); ?>
        <div class="mdui-toolbar-spacer"></div>
        <a href="javascript:;" mdui-dialog="{target: '#color-panel'}" class="mdui-btn mdui-btn-icon color-input" style="display: <?php echo $theme['discolour']=='true' ? 'inline-block'  :  'none'; ?>">
            <i class="mdui-icon material-icons">color_lens</i>
        </a>
        <a href="<?php echo url('user/login'); ?>" class="mdui-btn mdui-ripple mdui-hidden-xs">
            <i class="mdui-icon material-icons">person</i>登录</a>
        <a href="<?php echo url('user/reg'); ?>" class="mdui-btn mdui-ripple mdui-hidden-xs">
            <i class="mdui-icon material-icons">person_add</i>注册</a>
    </div>

</header>
<!-- 论坛左侧手机版菜单 -->
<div class="mdui-drawer mdui-drawer-close" id="mobile-menu">
    <ul class="mdui-list mdui-color-white" mdui-collapse="{accordion: true}">

        <li class="mdui-list-item mdui-ripple">
            <i class="mdui-list-item-icon mdui-icon material-icons">home</i>
            <a href="<?php echo url('index/index'); ?>" title="Home">
                <div class="mdui-list-item-content">首页</div>
            </a>
        </li>
        <li class="mdui-collapse-item mdui-ripple">
            <div class="mdui-collapse-item-header mdui-list-item mdui-ripple">
                <i class="mdui-list-item-icon mdui-icon material-icons">people</i>
                <div class="mdui-list-item-content">站点导航</div>
                <i class="mdui-collapse-item-arrow mdui-icon material-icons">keyboard_arrow_down</i>
            </div>
            <ul class="mdui-collapse-item-body mdui-list mdui-list-dense">
		<a href="http://www.wh1993.net/" title="万和学院"><li class="mdui-list-item mdui-ripple">万和学院</li></a>
                <?php echo mOutTopabr(); ?>
            </ul>
        </li>

        <li class="mdui-list-item mdui-ripple">
            <i class="mdui-list-item-icon mdui-icon material-icons">person</i>
            <a href="<?php echo url('index/user/login'); ?>" title="Login">
                <div class="mdui-list-item-content">登录</div>
            </a>
        </li>

        <li class="mdui-list-item mdui-ripple">
            <i class="mdui-list-item-icon mdui-icon material-icons">person_add</i>
            <a href="<?php echo url('index/user/reg'); ?>" title="Register">
                <div class="mdui-list-item-content">注册</div>
            </a>
        </li>
    </ul>
</div>

<div class="mdui-dialog" id="color-panel">
    <div class="mdui-dialog-content">
        <div class="mdui-dialog-title">设定主题</div>
        <p class="mdui-typo-title">主题色</p>
        <div class="mdui-row-sm-2 mdui-row-md-3" id="layout-list"></div>
        <p class="mdui-typo-title">主色</p>
        <div class="mdui-row-sm-2 mdui-row-md-3" id="primary-list"></div>
        <p class="mdui-typo-title">强调色</p>
        <div class="mdui-row-sm-2 mdui-row-md-3" id="accent-list"></div>
        <div class="mdui-dialog-actions">
            <button class="mdui-btn mdui-ripple" onclick="theme.reset()">初始化</button>
        </div>
    </div>
</div>
 <?php endif; ?>
    <div class="mdui-container">
        <div class="mdui-row">
            
<!-- 论坛最新内容列表页 -->
<div class="mdui-col-xs-12 mdui-col-sm-9 mdui-shadow-1">
    <!-- 最新内容 -->
    <p class="mdui-m-t-3"></p>
    <div class="mdui-typo">
        <h5 class="doc-article-title">当前位置：<?php echo htmlentities($column); ?> <a class="doc-anchor" id="divider"></a></h5>
    </div>
    <p class="mdui-m-t-3"></p>
    <div class="mdui-tab" mdui-tab>
        <a href="#example1-tab1" class="mdui-ripple">购物车</a>
        <a href="#example1-tab2" class="mdui-ripple">待付款</a>
        <a href="#example1-tab3" class="mdui-ripple">已购买栏目</a>
    </div>
    <div id="example1-tab1" class="mdui-p-a-2">
        <div class="mdui-table-fluid">
            <table class="mdui-table">
                <thead>
                <tr class=""><th width="15">#</th><th>id</th><th>栏目名称</th><th>价格</th><th>创建时间</th><th>操作</th></tr>
                </thead>
                <tbody id="hc-list-one">
                <?php if(is_array($shopCartAll) || $shopCartAll instanceof \think\Collection || $shopCartAll instanceof \think\Paginator): $i = 0; $__LIST__ = $shopCartAll;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <tr>
                    <td>
                        <label class="mdui-checkbox">
                            <input class="check" type="checkbox" name="test[]" value="<?php echo htmlentities($vo['sid']); ?>" />
                            <i class="mdui-checkbox-icon"></i>
                        </label>
                    </td>
                    <td><?php echo htmlentities($vo['sid']); ?></td>
                    <td><?php echo htmlentities($vo['name']); ?></td>
                    <td class="price"><?php echo htmlentities($vo['money']); ?></td>
                    <td><?php echo htmlentities(date('Y-m-d H:i:s',!is_numeric($vo['create_time'])? strtotime($vo['create_time']) : $vo['create_time'])); ?></td>
                    <td>
                        <a href="<?php echo url('ShopCart/delCart',['sid'=>$vo['sid']]); ?>" onclick="return confirm('确认要删除？');">删除</a>
                    </td>
                </tr>
                <?php endforeach; endif; else: echo "" ;endif; ?>
                </tbody>
            </table>
            <div class="mdui-row-xs-12">
                <div class="mdui-col-xs-2" style="margin-left: 3rem;">
                    <label class="mdui-checkbox">
                        <input class="all check" type="checkbox"/>
                        <i class="mdui-checkbox-icon"></i>
                        全选
                    </label>
                </div>
                <div class="mdui-col-xs-2">
                    <button class="mdui-btn mdui-color-theme-accent mdui-ripple hc-delect">批量删除</button>
                </div>
                <div class="mdui-col-xs-4 mdui-float-right">
                    <h3>
                        <span>总价格：</span><span class="total-price">0</span><span>元</span>
                        <button class="mdui-btn mdui-color-indigo mdui-float-right hc-pay">购买</button>
                    </h3>
                </div>
            </div>
        </div>
    </div>
    <div id="example1-tab2" class="mdui-p-a-2">
        <div class="mdui-table-fluid">
            <table class="mdui-table">
                <thead>
                <tr>
                    <th width="15">#</th>
                    <th>购物车ID</th>
                    <th>订单号</th>
                    <th>栏目名称</th>
                    <th>how much</th>
                </tr>
                </thead>
                <tbody id="hc-list-two">
                <?php if(is_array($orderDetail) || $orderDetail instanceof \think\Collection || $orderDetail instanceof \think\Paginator): $i = 0; $__LIST__ = $orderDetail;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($vo['ispay'] != '1' & $vo['name'] != ''): ?>
                <tr>
                    <td>
                        <label class="mdui-checkbox">
                            <input class="check" type="checkbox" name="oid[]" value="<?php echo htmlentities($vo['id']); ?>" />
                            <i class="mdui-checkbox-icon"></i>
                        </label>
                    </td>
                    <td><?php echo htmlentities($vo['id']); ?></td>
                    <td><?php echo htmlentities($vo['order_id']); ?></td>
                    <td><?php echo htmlentities($vo['name']); ?></td>
                    <td class="price"><?php echo htmlentities($vo['amount']); ?></td>
                </tr>
                <?php endif; ?>
                <?php endforeach; endif; else: echo "" ;endif; ?>
                </tbody>
            </table>
            <div class="mdui-row-xs-12">
                <div class="mdui-col-xs-2" style="margin-left: 3rem;">
                    <label class="mdui-checkbox">
                        <input class="all check" type="checkbox"/>
                        <i class="mdui-checkbox-icon"></i>
                        全选
                    </label>
                </div>
                <div class="mdui-col-xs-4 mdui-float-right">
                    <h3>
                        <span>总价格：</span><span class="total-price">0</span><span>元</span>
                        <button class="mdui-btn mdui-color-indigo mdui-float-right hc-pay">购买</button>
                    </h3>
                </div>
            </div>
        </div>
    </div>
    <div id="example1-tab3" class="mdui-p-a-2">
        <div class="mdui-table-fluid">
            <table class="mdui-table">
            <thead>
            <tr>
                <th width="15">订单ID</th>
                <th>购物车ID</th>
                <th>订单号</th>
                <th>栏目名称</th>
                <th>how much</th>
            </tr>
            </thead>
            <tbody>
            <?php if(is_array($orderDetail) || $orderDetail instanceof \think\Collection || $orderDetail instanceof \think\Paginator): $i = 0; $__LIST__ = $orderDetail;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($vo['ispay'] == '1'): ?>
            <tr>
                <td><?php echo htmlentities($vo['id']); ?></td>
                <td><?php echo htmlentities($vo['sid']); ?></td>
                <td><?php echo htmlentities($vo['order_id']); ?></td>
                <td><?php echo htmlentities($vo['name']); ?></td>
                <td><?php echo htmlentities($vo['amount']); ?></td>
            </tr>
            <?php endif; ?>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            </tbody>
            </table>
        </div>
    </div>
</div>
<!-- 论坛右侧各类信息展示 -->
<div class="mdui-hidden-xs mdui-col-sm-3 mdui-typo mdui-float-right">
    <!-- 搜索 -->
    <div class="mdui-m-b-1">
        <form action="<?php echo url('index/search'); ?>" method="GET">
            <div class="mdui-textfield mdui-textfield-floating-label">
                <i class="mdui-icon material-icons">search</i>
                <label class="mdui-textfield-label">Search</label>
                <input class="mdui-textfield-input" type="search" name="keyword" />
            </div>
        </form>
    </div>
    <!-- 公告栏 -->
    <div class="mdui-card mdui-m-b-1">
        <div class="mdui-card-header">
            <div class="mdui-card-header-title">公告</div>
            <div class="mdui-card-header-subtitle">Notice</div>
        </div>

        <div class="mdui-card-media">
            <img src="/public/static/images/card.png" />
        </div>

        <div class="mdui-card-content"><?php echo $option['notice']; ?></div>
    </div>

    <!-- 发帖 -->
    <!-- <select class="mdui-select" mdui-select="options">
        <option class="mdui-select" value="">发帖</option>
        <option class="mdui-select" value="">发视频</option>
        <option class="mdui-select" value="">发图片</option>
    </select> -->
	<div class="mdui-row">
		<div class="mdui-col-sm-6">
			<a href="<?php echo url('index/topic/create'); ?>" class="mdui-btn mdui-btn-block mdui-color-theme mdui-ripple mdui-m-r-1">发帖</a>
		</div>
		<div class="mdui-col-sm-6">
			<a href="<?php echo url('index/ebook/create'); ?>" class="mdui-btn mdui-btn-block mdui-color-theme mdui-ripple mdui-m-l-1">发电子书</a>
		</div>
	</div>

    <!-- 友情链接 -->
    <div class="mdui-m-b-1 ml-friend-panel">
        <header class="mf-panel-hd">
            <span class="mdui-typo-title">友情链接</span>
        </header>
        <div class="mf-panel-bd">
            <?php if(is_array($links) || $links instanceof \think\Collection || $links instanceof \think\Paginator): $i = 0; $__LIST__ = $links;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <div class="mdui-chip">
                <img class="mdui-chip-icon" src="<?php echo htmlentities((isset($vo['picurl']) && ($vo['picurl'] !== '')?$vo['picurl']:'/public/static/images/link.jpg')); ?>" />
                <a class="mdui-chip-title" href="<?php echo htmlentities($vo['url']); ?>" target="_blank"><?php echo htmlentities($vo['title']); ?></a>
            </div>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
    </div>
    
	<!--
    <div class="mdui-m-b-1 ml-friend-panel">
        <header class="mf-panel-hd">
            <span class="mdui-typo-title">捐助我</span>
        </header>
        <div class="mf-panel-bd">
            <img src="https://dn-coding-net-production-static.qbox.me/56d0ba7d-4881-4719-bc57-9cb50973e47c.jpg" alt="支付宝">
            <img src="https://dn-coding-net-production-static.qbox.me/70c51181-537a-4974-ba29-4b67119ebfc3.png" alt="微信">
        </div>
    </div>
	 -->
	 
</div>
 

        </div>
    </div>
    <!-- 右下角快捷方式 -->
    <div class="mdui-fab-wrapper" id="mf-fixbar" mdui-fab="{trigger: 'hover'}">
        
        <div class="mdui-fab-dial">
            <a href="<?php echo url('index/topic/create'); ?>" class="mdui-fab mdui-fab-mini mdui-ripple mdui-color-pink" title="发帖">
                <i class="mdui-icon material-icons">create</i>
            </a>
            <?php if(app('request')->controller() === 'Topic' && app('request')->action() === 'index'): if(authCheck('top,admin')): ?>
            <a href="<?php echo url('index/topic/set',['type'=>'top','tid'=>$topicData['tid']]); ?>" class="mdui-fab mdui-fab-mini mdui-ripple mdui-color-red" title="置顶">
                <i class="mdui-icon material-icons">vertical_align_top</i>
            </a>
            <?php endif; if(authCheck('close,admin')): ?>
            <a href="<?php echo url('index/topic/set',['type'=>'close','tid'=>$topicData['tid']]); ?>" class="mdui-fab mdui-fab-mini mdui-ripple mdui-color-purple" title="关闭">
                <i class="mdui-icon material-icons">close</i>
            </a>
            <?php endif; if(authCheck('essence,admin')): ?>
            <a href="<?php echo url('index/topic/set',['type'=>'essence','tid'=>$topicData['tid']]); ?>" class="mdui-fab mdui-fab-mini mdui-ripple mdui-color-purple" title="精华">
                <i class="mdui-icon material-icons">star</i>
            </a>
            <?php endif; if(authCheck('delete,admin')): ?>
            <a href="JavaScript:;" class="mdui-fab mdui-fab-mini mdui-ripple mdui-color-blue" title="删除" onclick="delTopic('<?php echo htmlentities($topicData['tid']); ?>')">
                <i class="mdui-icon material-icons">delete</i>
            </a>
            <?php endif; if(authCheck('update,admin')): ?>
            <a href="<?php echo url('index/topic/update',['tid'=>$topicData['tid']]); ?>" class="mdui-fab mdui-fab-mini mdui-ripple mdui-color-orange" title="修改">
                <i class="mdui-icon material-icons">update</i>
            </a>
            <?php endif; ?> <?php endif; ?>
        </div>
    </div>
    <footer class="mlt-footer">
    <p style="display:block;text-align: center;">
        HC版权所有，有事请联系管理员QQ：3127176962 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        运行时间:<?php echo get_runtime(); ?>s | <script type="text/javascript" src="https://api.kingsr.cc/api/hitokoto/hitencode"></script><script>hitokoto()</script>
    </p>
</footer>
<script src="/public/static/js/mltree-function.js"></script>
<script>
    //返回顶部
    mdui.mutation()
    $("#fixbar-top").click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 1000);
        return false;
    });
    var msgoption = {
        uid: '<?php echo session("uid"); ?>',
        url: '<?php echo url("api/api/MessageList",["uid"=>session("uid")]); ?>',
        get: '<?php echo url("api/api/getMessage",["uid"=>session("uid")]); ?>',
        addUrl: '<?php echo url("api/api/addMessage",["uid"=>session("uid")]); ?>',
        readUrl: '<?php echo url("api/api/readMessage",["uid"=>session("uid")]); ?>',
        delUrl: '<?php echo url("api/api/delMessage",["uid"=>session("uid")]); ?>',
    }
</script>
<script src="/public/static/js/mltree-message.js"></script> 
<script>
//type 中的类型并没有什么限制  tp默认的ajax传输类型是json类型，可以在controller中指定要传输的类型。
window.onload = function() {
    // 每一行
    var list_one = document.querySelectorAll('#example1-tab1 #hc-list-one tr');
    var list_two = document.querySelectorAll('#example1-tab2 #hc-list-two tr');
    // 勾选框
    var checkInputsOne = document.querySelectorAll('#example1-tab1 .check');
    var checkInputsTwo = document.querySelectorAll('#example1-tab2 .check');
    // 总价
    var piecesTotalOne = document.querySelector('#example1-tab1 .total-price');
    var piecesTotalTwo = document.querySelector('#example1-tab2 .total-price');
    // 选中所有
    var checkAllOne = document.querySelector('#example1-tab1 .all');
    var checkAllTwo = document.querySelector('#example1-tab2 .all');
    // 删除所有
    var delectsOne = document.querySelector('#example1-tab1 .hc-delect');
    // 付款
    var payOne = document.querySelector('#example1-tab1 .hc-pay');
    var payTwo = document.querySelector('#example1-tab2 .hc-pay');
    var list = [];
    // 计算总价格
    function getTotal(){
        price = 0;
        for(var i = 0; i < list_one.length;i++){
            if(list_one[i].getElementsByTagName('input')[0].checked){
                price += parseFloat(list_one[i].getElementsByClassName('price')[0].innerHTML);
            }
        }
        piecesTotalOne.innerHTML = '￥' + price.toFixed(2);
    }
    function getTotalTwo(){
        price = 0;
        for(var i = 0; i < list_two.length;i++){
            if(list_two[i].getElementsByTagName('input')[0].checked){
                price += parseFloat(list_two[i].getElementsByClassName('price')[0].innerHTML);
            }
        }
        piecesTotalTwo.innerHTML = '￥' + price.toFixed(2);
    }

    for(var i = 0;i < checkInputsOne.length;i++){
        checkInputsOne[i].onclick = function(){
            if(this.className === 'all check'){
                for(var j = 0;j < checkInputsOne.length; j++){
                    checkInputsOne[j].checked = this.checked;
                }
            }
            if(this.checked == false){
                for(var k = 0;k < checkAllOne.length;k++){
                    checkAllOne[k].checked = false;
                }
            }
            getTotal();
        }
    }
    for(var i = 0;i < checkInputsTwo.length;i++){
        checkInputsTwo[i].onclick = function(){
            if(this.className === 'all check'){
                for(var j = 0;j < checkInputsTwo.length; j++){
                    checkInputsTwo[j].checked = this.checked;
                }
            }
            if(this.checked == false){
                for(var k = 0;k < checkAllTwo.length;k++){
                    checkAllTwo[k].checked = false;
                }
            }
            getTotalTwo();
        }
    }
    // 单个商品选中跑出value
    function getSubTotal(ul){
        return ul.querySelector('.check').value;
    }
    for(var i = 0; i < list_one.length;i++){
        list_one[i].onclick = function(e){
            getSubTotal(this);
        }
        getTotal();
    }
    for(var i = 0; i < list_two.length;i++){
        list_two[i].onclick = function(e){
            getSubTotal(this);
        }
        getTotalTwo();
    }
    // 全部删除
    delectsOne.onclick = function(){
        for(var i = 0; i < list_one.length;i++){
            if(list_one[i].getElementsByTagName('input')[0].checked){
                list.push(list_one[i].getElementsByTagName('input')[0].value);
            }
        }
        var vals = list.join(',');
        console.log(vals);
        if(vals!="") {
            if(confirm("确定要是删除这些吗？")){
                $.ajax({
                    type:"GET",
                    url:"<?php echo url('ShopCart/delCart'); ?>",
                    data:{'sid':vals},
                    success:function(data){
                        alert('删除成功');
                        window.location.reload();
                    },
                    error:function(e){
                        alert('发生错误'+e);
                    }
                });
            }
            list = [];
        }else {
            alert ("请选择要删掉的栏目");
            list = [];
        }
    };

    layui.use(['layer'], function(){
        var layer = layui.layer;
        payOne.onclick = function(){
            for(var i = 0; i < list_one.length;i++){
                if(list_one[i].getElementsByTagName('input')[0].checked){
                    list.push(list_one[i].getElementsByTagName('input')[0].value);
                }
            }
            var sid = list.join(',');
            layer.open({
                type:2,
                area:['500px','400px'],
                fix: false, // 不固定
                shade:0.5,
                title:'微信支付',
                btn:['确定'],
                anim: 5,
                yes:function(index,layero){
                    layer.close(index);
                    list = [];
                    setTimeout(function () {
                        location.reload();
                    },2000);
                },
                cancel:function(){
                    list = [];
                    setTimeout(function () {
                        location.reload();
                    },2000);
                },
                content: "/index/wxpay/index.html"+'?sid='+sid,
            });
        };
        payTwo.onclick = function(){
            for(var i = 0; i < list_two.length;i++){
                if(list_two[i].getElementsByTagName('input')[0].checked){
                    list.push(list_two[i].getElementsByTagName('input')[0].value);
                }
            }
            var oid = list.join(',');
            layer.open({
                type:2,
                area:['500px','400px'],
                fix: false, // 不固定
                shade:0.5,
                title:'微信支付',
                btn:['确定'],
                anim: 5,
                yes:function(index,layero){
                    layer.close(index);
                    list = [];
                    setTimeout(function () {
                        location.reload();
                    },2000);
                },
                cancel:function(){
                    list = [];
                    setTimeout(function () {
                        location.reload();
                    },2000);
                },
                content: "/index/wxpay/order"+'?oid='+oid,
            });
        }
    });
};
</script>
 <?php echo $option['siteFooterJs']; ?>
</body>

</html>