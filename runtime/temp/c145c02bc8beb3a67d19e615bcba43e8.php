<?php /*a:7:{s:35:"./template/default/topic\index.html";i:1554792026;s:43:"./template/default/common\forum_public.html";i:1545268338;s:37:"./template/default/common\header.html";i:1545268308;s:24:"template/fullscreen.html";i:1545200232;s:42:"./template/default/common\topbar_user.html";i:1555491934;s:37:"./template/default/common\topbar.html";i:1555491919;s:37:"./template/default/common\footer.html";i:1545980648;}*/ ?>
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
        <a href="<?php echo url('ebook/showres'); ?>" class="mdui-hidden-xs">资源下载</a>
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
            
<style>
    #mycode {background: #2d2d2d;color: #ffffff;}
</style>
<div class="mdui-col-xs-12 mdui-col-sm-9 mdui-m-y-1 mdui-typo">
    <div class="mf-panel mdui-shadow-2">
        <header class="mf-panel-hd">
            <h3 style="text-align: center"><?php echo htmlentities($topicData['subject']); ?>
                <br/> <?php echo outBadge($topicData); ?>
            </h3>
            <a class="mdui-text-color-grey-400" href="<?php echo url('index/user/index',['uid'=>$topicData['uid']]); ?>">
                <strong><?php echo htmlentities($topicUser['username']); ?></strong>
            </a>
            <span title="<?php echo htmlentities($topicData['create_time']); ?>"> <?php echo htmlentities(time_format($topicData['create_time'])); ?> </span>
            <span>
                <i class="mdui-icon material-icons">looks</i><?php echo htmlentities($topicData['views']); ?></span>
        </header>
        <div class="mf-panel-bd">
            <!-- <div class="content" id="mf-content"><?php echo markdownEncode($topicData['content']); ?></div> -->
            <div class="content" id="mf-content"><?php echo $topicData['content']; ?></div>

            <?php if(!empty($attaList)): ?>
            <div class="attaList">
                <header>
                    <p>附件列表：</p>
                </header>
                <div>
                    <?php if(is_array($attaList) || $attaList instanceof \think\Collection || $attaList instanceof \think\Paginator): $i = 0; $__LIST__ = $attaList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <ul>
                        <li>
                            <a href="<?php echo htmlentities($vo['url']); ?>" download="<?php echo htmlentities($vo['fileName']); ?>">
                                <div class="mdui-chip">
                                    <img class="mdui-chip-icon" src="/public/static/images/File.png" />
                                    <span class="mdui-chip-title"><?php echo htmlentities($vo['fileName']); ?></span>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
            </div>
            <?php endif; ?>
        </div>
        <div class="mf-panel-footer">
            <div class="mdui-float-right mdui-valign mdui-m-y-1">
                <span>最后更新于：
                    <span><?php echo htmlentities($topicData['update_time']); ?></span>
                </span>
            </div>
        </div>
    </div>

    <div class="mdui-card mf-comment">
        <h3 class="mdui-m-f-2 mdui-text-color-theme-accent">回帖
            <button class="mdui-btn mdui-float-right mdui-ripple mdui-color-theme-accent mdui-btn-raised" id="reply">评论</button>
        </h3>
    </div>
    <div id="mf-comments">

    </div>
</div>
<div class="mdui-col-xs-0 mdui-col-md-3 mdui-m-y-1 mdui-hidden-xs">
    <div class="mf-panel mdui-text-center">
        <header class="mf-panel-hd mdui-color-theme">
            <img src="<?php echo htmlentities($topicUser['avatar']); ?>" alt="<?php echo htmlentities($topicUser['username']); ?>" class="mdui-img-circle" width="64">
            <br/>
            <a href="<?php echo url('index/user/index',['uid'=>$topicData['uid']]); ?>" class="mdui-text-color-white-text">
                <h2><?php echo htmlentities($topicUser['username']); ?></h2>
            </a>
        </header>
        <div class="mf-panel-bd">
            <table class="mdui-table">
                <thead>
                    <tr>
                        <th width="33.3333%">主题数</th>
                        <th width="33.3333%">回帖数</th>
                        <th>精华数</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo htmlentities($topicUser['topics']); ?></td>
                        <td><?php echo htmlentities($topicUser['comments']); ?></td>
                        <td><?php echo htmlentities($topicUser['essence']); ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</div>

<!-- 回复区域 -->
<form class="mdui-hidden" id="replyPanel">
    <textarea id="editor" class="mdui-hidden" name="content" placeholder="回复信息" style="display:block;width:95%; height:300px;margin: 0 auto;"></textarea>
    <input type="hidden" id="recid" name="recid" value="">
</form>



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
<script src="/public/static/js/simplemde.min.js"></script>
<script src="/public/static/js/mltree-flow.js"></script>
<!-- 代码高亮引入下面三条 -->
<link rel="stylesheet" type="text/css" href="/public/static/highlight/styles/tomorrow-night-eighties.css">
<script type="text/javascript" src="/public/static/highlight/highlight.pack.js"></script>
<script>
    hljs.initHighlightingOnLoad();
    var allpre = document.getElementsByTagName("pre");
    for(i = 0; i < allpre.length; i++) {
        var onepre = document.getElementsByTagName("pre")[i];
        var mycode = document.getElementsByTagName("pre")[i].innerHTML;
        onepre.innerHTML = '<code id="mycode">'+mycode+'</code>';
    }
</script>
<script>
    var option = {
            commentUrl: "<?php echo url('index/topic/comment',['tid'=>$topicData['tid']]); ?>",
            uid: "<?php echo session('uid'); ?>",
            subject: "<?php echo htmlentities($topicData['subject']); ?>",
        }
        //调用flow加载
    var flow = new mfFlow('comment');
    flow.flow('<?php echo htmlentities($topicData['tid']); ?>');

    layui.use(['layer'], function() {
        var layer = layui.layer;

        $$('#reply').on('click', function() {
            $$('#editor').val();
            $$('#replyPanel').toggleClass('mdui-hidden');
            $$('#editor').toggleClass('mdui-hidden');

            var device = layui.device(),
                k = '824px';
            if (device.weixin || device.android || device.ios) {
                k = '100%';
            }
            layer.open({
                type: 1,
                anim: 2,
                title: '回复『' + option.subject + '』',
                area: [k, '55%'],
                offset: 'auto',
                btn: '发布',
                content: $('#replyPanel'),
                cancel: function(index, layero) {
                    $$('#replyPanel').toggleClass('mdui-hidden');
                    $$('#editor').toggleClass('mdui-hidden');
                },
                yes: function(index, layero) {
                    //获取表单内容。
                    var data = $$('#replyPanel').serialize();
                    $$('#editor').toggleClass('mdui-hidden');
                    $$('#replyPanel').toggleClass('mdui-hidden');
                    $$('#editor').val();
                    layer.close(index);
                    $$.ajax({
                        method: 'post',
                        url: option.commentUrl,
                        data: data,
                        dataType: 'json',
                        success: function(res) {
                            if (res.code == 1) {
                                mdui.snackbar({
                                    message: res.message,
                                    position: 'top',
                                    onClosed: function() {
                                        location.reload();
                                    }
                                })
                            } else {
                                mdui.snackbar({
                                    message: res.message,
                                    position: 'top',
                                })
                            }
                        }
                    });
                }
            });
        });
    })
</script> <?php echo $option['siteFooterJs']; ?>
</body>

</html>