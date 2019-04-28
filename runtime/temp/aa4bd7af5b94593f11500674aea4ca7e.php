<?php /*a:7:{s:34:"./template/default/user/index.html";i:1546497704;s:43:"./template/default/common/forum_public.html";i:1545268338;s:37:"./template/default/common/header.html";i:1545268308;s:24:"template/fullscreen.html";i:1545200232;s:42:"./template/default/common/topbar_user.html";i:1555491934;s:37:"./template/default/common/topbar.html";i:1555491919;s:37:"./template/default/common/footer.html";i:1545980648;}*/ ?>
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
            

<div class="mdui-col-xs-12 mdui-col-sm-8 mdui-col-offset-sm-2 mdui-m-y-1">
    <div class="mdui-card">
        <div class="mdui-card-media">
            <img src="/public/static/images/snake.jpg" width="100%" />
            <div class="mlt-user-info">
              <div class="mlt-avatar-box">
                <div class="mlt-avatar-upload">
                  <button id="avatar_new" title="上传新头像" class="mdui-btn mdui-btn-icon mdui-ripple"><i class="mdui-icon material-icons">photo_camera</i></button>
                </div>
                <img src="<?php echo htmlentities($userData['avatar']); ?>" alt="<?php echo htmlentities($userData['username']); ?>的头像" id="avatar_preview" />
              </div>
              <div class="mlt-user-username">
                <?php echo htmlentities($userData['username']); ?>
              </div>
              <div class="mlt-user-data">
                <a href><?php echo htmlentities((isset($userData['motto']) && ($userData['motto'] !== '')?$userData['motto']:"这家伙很懒，什么也没留下")); ?></a>
              </div>
            </div>
        </div>

        <div class="mdui-card-content">
            <div class="mdui-tab" mdui-tab>
                <a href="#topic" class="mdui-ripple">主题</a>
                <a href="#information" class="mdui-ripple">资料</a>
                <a href="#password" class="mdui-ripple">安全</a>
            </div>
            <div id="topic">
                <ul class="mdui-list">
                    <?php if(is_array($userTopic) || $userTopic instanceof \think\Collection || $userTopic instanceof \think\Paginator): $i = 0; $__LIST__ = $userTopic;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <li class="mdui-list-item mdui-ripple">
                        <div class="mdui-list-item-avatar">
                            <img src="<?php echo htmlentities($vo['userData']['avatar']); ?>" alt="<?php echo htmlentities($vo['userData']['username']); ?>" title="<?php echo htmlentities($vo['userData']['username']); ?>">
                        </div>
                        <div class="mdui-list-item-content">
                            <a class="mdui-list-item-title" href="<?php echo url('index/topic/index',['tid'=>$vo['tid']]); ?>"><?php echo htmlentities($vo['subject']); ?></a>
                            <div class="mdui-list-item-text mdui-list-item-one-line"><?php echo $vo['content']; ?></div>
                            <div class="mdui-list-item-text">
                                <a class="mdui-list-item-title" href="<?php echo url('index/user/inde',['uid'=>$vo['uid']]); ?>"><?php echo htmlentities($vo['userData']['username']); ?></a>
                                <span title="<?php echo htmlentities($vo['create_time']); ?>"> <?php echo htmlentities($vo['time_format']); ?></span>
                            </div>
                        </div>
                    </li>
                    <li class="mdui-divider-inset mdui-m-y-0"></li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
            <div id="information">
                <form action="" method="post" class="layui-form">
                    <div class="mdui-textfield mdui-textfield-floating-label">
                        <i class="mdui-icon material-icons">info</i>
                        <label class="mdui-textfield-label">签名</label>
                        <input name="motto" class="mdui-textfield-input" type="text" value="<?php echo htmlentities($userData['motto']); ?>"/>
                    </div>
                    <div class="mdui-textfield mdui-textfield-floating-label">
                        <button lay-submit lay-filter="info" type="submit" class="mdui-btn mdui-btn-block mdui-ripple mdui-color-theme layui-btn">发布签名</button>
                    </div>
                </form>

            </div>
            <div id="password">
                <form action="" class="layui-form" method="post">
                    <div class="mdui-textfield mdui-textfield-floating-label">
                        <i class="mdui-icon material-icons">https</i>
                        <label class="mdui-textfield-label">旧密码</label>
                        <input name="oldpassword" class="mdui-textfield-input" type="password" required/>
                        <div class="mdui-textfield-error">旧密码不能为空</div>
                    </div>
                    <div class="mdui-textfield mdui-textfield-floating-label">
                        <i class="mdui-icon material-icons">https</i>
                        <label class="mdui-textfield-label">新密码</label>
                        <input name="password" class="mdui-textfield-input" type="password" required/>
                        <div class="mdui-textfield-error">新密码不能为空</div>
                    </div>
                    <div class="mdui-textfield mdui-textfield-floating-label">
                        <i class="mdui-icon material-icons">https</i>
                        <label class="mdui-textfield-label">确认新密码</label>
                        <input name="repassword" class="mdui-textfield-input" type="password" required/> <?php echo token(); ?>
                        <div class="mdui-textfield-error">和新密码不同</div>
                    </div>
                    <div class="mdui-textfield mdui-textfield-floating-label">
                        <button lay-submit lay-filter="pass" type="submit" class="mdui-btn mdui-btn-block mdui-ripple mdui-color-theme layui-btn">确认修改</button>
                    </div>
                </form>

                <hr/>
                <div class="mdui-typo">
                    <h4>QQ互联状态:</h4>
                    <code><?php echo htmlentities($userData['qqconnectStatus']); ?></code>
                    <blockquote>Tips: 登录时选择QQ登录即可绑定</blockquote>
                </div>
            </div>
        </div>
    </div>
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
    layui.use(['upload', 'form'], function () {
        var upload = layui.upload,
            form = layui.form;
        var $$ = mdui.JQ;

        form.on('submit(pass)', function (data) {
            $$.ajax({
                method: 'post',
                url: '<?php echo url("ResetPas"); ?>',
                data: data.field,
                dataType: 'json',
                success: function (res) {
                    if (res.code == 0) {
                        mdui.snackbar({
                            message: res.message,
                            position: 'top',
                            onClosed: function () {
                               window.location.href = res.url;
                            },
                        })
                    } else {
                        layer.msg(res.message, { icon: 5 });
                    }
                },
            });
            return false;
        });

        form.on('submit(info)', function (data) {
            $$.ajax({
                method: 'post',
                url: '<?php echo url("set"); ?>',
                data: data.field,
                dataType: 'json',
                success: function (res) {
                    if (res.code == 0) {
                        mdui.snackbar({
                            message: res.message,
                            position: 'top',
                        })
                    } else {
                        layer.msg(res.message, { icon: 5 });
                    }
                },
            });
            return false;
        });

        var uploadInst = upload.render({
            elem: '#avatar_new'
            , accept: 'images'
            , field: 'avatar'
            , data: { uid: '<?php echo htmlentities($userData['uid']); ?>' }
            , url: '<?php echo url("index/expand/avatarUpload"); ?>'
            , done: function (res) {
                if (res.code == 0) {
                    layer.msg('上传成功！', {
                        icon: 1,
                        end: function () {
                            $$('#avatar_preview').attr('src', res.url);
                        }
                    });
                }
            }
            , error: function () {

            }
        });
    })
</script>  <?php echo $option['siteFooterJs']; ?>
</body>

</html>