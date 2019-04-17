<?php /*a:8:{s:35:"./template/default/forum/lists.html";i:1555031922;s:43:"./template/default/common/forum_public.html";i:1545268338;s:37:"./template/default/common/header.html";i:1545268308;s:24:"template/fullscreen.html";i:1545200232;s:42:"./template/default/common/topbar_user.html";i:1552445826;s:37:"./template/default/common/topbar.html";i:1552445915;s:41:"./template/default/common/right_tool.html";i:1553237427;s:37:"./template/default/common/footer.html";i:1545980648;}*/ ?>
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
	<a href="http://www.wh1993.net/" class="mdui-typo-title">万和学院</a>
        <a href="<?php echo url('index/index'); ?>" class="mdui-typo-title">图文首页</a>
         <?php echo outTopbar(); ?>
        <div class="mdui-toolbar-spacer"></div>
        <a href="<?php echo url('index/topic/create'); ?>" class="mdui-btn mdui-btn-icon mdui-ripple mdui-hidden-sm-up">
            <i class="mdui-icon material-icons">create</i>
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
	<a href="http://www.wh1993.net/" class="mdui-typo-title">万和学院</a>
	<a href="<?php echo url('index/index'); ?>" class="mdui-typo-title">图文首页</a>
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
    <div class="mdui-typo">
        <h4 class="doc-article-title">当前位置：<?php echo htmlentities($column['name']); ?> <a class="doc-anchor" id="divider"></a></h4>
    </div>
    <style>
        .mdui-subheader a{font-size: 14px;border-right: 1px solid #dedede;padding: 0px 10px;}
        .mdui-subheader a:first-child{font-size: 16px;font-weight: bold;}
        .mdui-grid-tile-actions{cursor: pointer;}
        .mdui-ripple{font-weight: bold;}
    </style>

    <div class="mdui-container">
        <div class="mdui-tab mdui-tab-centered" mdui-tab>
            <?php if(is_array($listss) || $listss instanceof \think\Collection || $listss instanceof \think\Paginator): $i = 0; $__LIST__ = $listss;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <a href="#example2-tab<?php echo htmlentities($vo['fid']); ?>" class="mdui-ripple"><?php echo htmlentities($vo['name']); ?></a>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
    </div>
    <p class="mdui-m-t-3"></p>
    <?php if(is_array($listss) || $listss instanceof \think\Collection || $listss instanceof \think\Paginator): $i = 0; $__LIST__ = $listss;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
    <div class="mdui-row" id="example2-tab<?php echo htmlentities($vo['fid']); ?>">
        <?php if(is_array($vo['child']) || $vo['child'] instanceof \think\Collection || $vo['child'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo['child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$son): $mod = ($i % 2 );++$i;?>
        <div class="mdui-col-sm-4" style="height: 13rem;">
            <div class="mdui-grid-tile">
                <a href="<?php echo url('index/forum/index',array('fid'=>$son['fid'])); ?>">
                    <img src="<?php echo htmlentities($son['img']); ?>"/>
                    <div class="mdui-grid-tile-actions">
                        <div class="mdui-grid-tile-text">
                            <div class="mdui-grid-tile-title mdui-text-center"><?php echo htmlentities($son['name']); ?></div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
    <?php endforeach; endif; else: echo "" ;endif; ?>
    <!--
    <?php if(is_array($listss) || $listss instanceof \think\Collection || $listss instanceof \think\Paginator): $i = 0; $__LIST__ = $listss;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
    <div class="mdui-row mdui-m-t-2">
        <div class="mdui-col-sm-12 mdui-col-md-12">
            <div class="mdui-card">
                <div class="mdui-col-lg-6 mdui-float-left mdui-hidden-xs">
                    <div class="mdui-card-media">
                        <a href="<?php echo url('index/forum/index',array('fid'=>$vo['fid'])); ?>">
                            <img src="<?php echo htmlentities($vo['img']); ?>" style="margin: 1rem auto;height: 250px;"/>
                        </a>
                    </div>
                </div>
                <div class="mdui-col-xs-12 mdui-col-lg-6 mdui-float-right">
                    <div class="mdui-card-primary">
                        <div class="mdui-card-primary-title">
                            <a href="<?php echo url('index/forum/index',array('fid'=>$vo['fid'])); ?>"><?php echo htmlentities($vo['name']); ?></a>
                        </div>
                    </div>
                    <div class="mdui-card-content mdui-hidden-xs"><?php echo htmlentities($vo['introduce']); ?></div>
                    <div class="mdui-card-actions">
                        <?php if(is_array($vo['child']) || $vo['child'] instanceof \think\Collection || $vo['child'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo['child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$son): $mod = ($i % 2 );++$i;?>
                        <a href="<?php echo url('index/forum/index',array('fid'=>$son['fid'])); ?>" class="mdui-btn mdui-ripple"><?php echo htmlentities($son['name']); ?></a>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; endif; else: echo "" ;endif; ?>

    <ul class="mdui-list">
        <?php if(is_array($listss) || $listss instanceof \think\Collection || $listss instanceof \think\Paginator): $i = 0; $__LIST__ = $listss;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
        <li class="mdui-subheader">
            <a href="<?php echo url('index/forum/index',array('fid'=>$vo['fid'])); ?>">
                <?php echo htmlentities($vo['name']); if(count($vo['child']) > 0): ?>
                :
                <?php endif; ?>
            </a>
            <?php if(is_array($vo['child']) || $vo['child'] instanceof \think\Collection || $vo['child'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo['child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$son): $mod = ($i % 2 );++$i;?>
            <a href="<?php echo url('index/forum/index',array('fid'=>$son['fid'])); ?>"><?php echo htmlentities($son['name']); ?></a>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </li>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </ul>
    -->
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
 <?php echo $option['siteFooterJs']; ?>
</body>

</html>