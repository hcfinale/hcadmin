<?php /*a:5:{s:53:"E:\www\hcadmin\application\admin\view\set\expand.html";i:1546402582;s:49:"./application/admin/view/public/admin_public.html";i:1546402501;s:43:"./application/admin/view/public/header.html";i:1547689121;s:43:"./application/admin/view/public/topbar.html";i:1546402672;s:43:"./application/admin/view/public/footer.html";i:1546402746;}*/ ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MlTreeForum 管理后台</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="MlTreeForum PHP 开源 轻论坛 轻社区 Material Design Thinkphp" />
    <meta name="description" content="本站是 MlTree Forum 论坛社区产品的官方交流站点。MlTree Forum是一款由Thinkphp构建、Material Design风格的轻论坛。" />
    <meta name="author" content="HC">
    <!-- 设置Theme -->
    <meta name="setPrimary" content="<?php echo htmlentities($theme['themePrimary']); ?>">
    <meta name="setAccent" content="<?php echo htmlentities($theme['themeAccent']); ?>">
    <meta name="setLayout" content="<?php echo htmlentities($theme['themeLayout']); ?>">
    
    <link rel="stylesheet" href="/public/static/layui/css/layui.css">
    <link rel="stylesheet" href="/public/static/css/mdui.min.css">
    <link rel="stylesheet" href="/public/static/css/admin_common.css">
    <link rel="shortcut icon" href="//at.alicdn.com/t/font_579119_2arllyqcj9p8ehfr.css" type="image/x-icon">
    <script src="/public/static/layui/layui.js"></script>
    <script src="/public/static/js/mdui.min.js"></script>
</head>

<body class="mdui-theme-primary-pink mdui-theme-accent-pink mdui-drawer-body-left mdui-appbar-with-toolbar">
    <script src="/public/static/js/theme.js"></script> <header class="mdui-appbar mdui-appbar-fixed">
    <div class="mdui-toolbar mdui-color-theme">
        <a href="javascript:;" class="mdui-btn mdui-btn-icon" mdui-drawer="{target: '#left-menu'}">
            <i class="mdui-icon material-icons">menu</i>
        </a>
        <a href="<?php echo url('admin/index/index'); ?>" class="mdui-typo-headline">HC后台</a>
        <div class="mdui-toolbar-spacer"></div>
        <a href="javascript:;" class="mdui-btn mdui-btn-icon" onclick="location.reload()">
            <i class="mdui-icon material-icons">refresh</i>
        </a>

        <a href="javascript:;" class="mdui-btn mdui-btn-icon" mdui-menu="{target: '#more'}">
            <i class="mdui-icon material-icons">more_vert</i>
        </a>
        <ul class="mdui-menu mdui-menu-cascade" id="more">
            <li class="mdui-menu-item">
                <a href="<?php echo url('index/index/index'); ?>" class="mdui-ripple">返回前台</a>
            </li>
        </ul>

    </div>
</header>



<div class="mdui-drawer" id="left-menu">
    <ul class="mdui-list mdui-collapse" id="collapse" mdui-collapse="{accordion:true}">

        <li class="mdui-list-item mdui-ripple">
            <i class="mdui-list-item-icon mdui-icon material-icons">home</i>
            <div class="mdui-list-item-content">
                <a href="<?php echo url('admin/index/index'); ?>">后台首页</a>
            </div>
        </li>

        <li class="mdui-collapse-item" id="sys">
            <div class="mdui-collapse-item-header mdui-list-item mdui-ripple">
                <i class="mdui-list-item-icon mdui-icon material-icons">settings</i>
                <div class="mdui-list-item-content">系统设置</div>
                <i class="mdui-collapse-item-arrow mdui-icon material-icons">keyboard_arrow_down</i>
            </div>
            <ul class="mdui-collapse-item-body mdui-list mdui-list-dense">
                <a href="<?php echo url('set/base'); ?>">
                    <li class="mdui-list-item mdui-ripple" id="base">基础设置</li>
                </a>
                <a href="<?php echo url('set/baseReg'); ?>">
                    <li class="mdui-list-item mdui-ripple" id="baseReg">注册访问</li>
                </a>
                <a href="<?php echo url('set/baseTheme'); ?>">
                    <li class="mdui-list-item mdui-ripple" id="baseTheme">模板设置</li>
                </a>
                <a href="<?php echo url('set/baseMail'); ?>">
                    <li class="mdui-list-item mdui-ripple" id="baseMail">邮件设置</li>
                </a>
            </ul>
        </li>

        <li class="mdui-collapse-item" id="forum">
            <div class="mdui-collapse-item-header mdui-list-item mdui-ripple">
                <i class="mdui-list-item-icon mdui-icon material-icons">forum</i>
                <div class="mdui-list-item-content">论坛管理</div>
                <i class="mdui-collapse-item-arrow mdui-icon material-icons">keyboard_arrow_down</i>
            </div>


            <ul class="mdui-collapse-item-body mdui-list mdui-list-dense">
                <a href="<?php echo url('set/forum'); ?>">
                    <li class="mdui-list-item mdui-ripple" id="setForum">板块管理</li>
                </a>
                <a href="<?php echo url('set/topic'); ?>">
                    <li class="mdui-list-item mdui-ripple" id="setTopic">主题管理</li>
                </a>
                <a href="<?php echo url('set/forumSetting'); ?>">
                    <li class="mdui-list-item mdui-ripple" id="forumSetting">论坛设置</li>
                </a>
            </ul>
        </li>

        <li class="mdui-collapse-item" id="user">
            <div class="mdui-collapse-item-header mdui-list-item mdui-ripple">
                <i class="mdui-list-item-icon mdui-icon material-icons">group</i>
                <div class="mdui-list-item-content">用户管理</div>
                <i class="mdui-collapse-item-arrow mdui-icon material-icons">keyboard_arrow_down</i>
            </div>


            <ul class="mdui-collapse-item-body mdui-list mdui-list-dense">
                <a href="<?php echo url('set/user'); ?>">
                    <li class="mdui-list-item mdui-ripple" id="setUser">用户管理</li>
                </a>
                <a href="<?php echo url('set/userGroup'); ?>">
                    <li class="mdui-list-item mdui-ripple" id="setUserGroup">用户组管理</li>
                </a>
                <a href="<?php echo url('set/Auth'); ?>">
                    <li class="mdui-list-item mdui-ripple" id="setAuth">权限管理</li>
                </a>
                <a href="<?php echo url('set/Expand'); ?>">
                    <li class="mdui-list-item mdui-ripple" id="setExpand">拓展管理</li>
                </a>
            </ul>
        </li>

    </ul>
</div>
    <div class="mdui-container-fluid">
        
<div class="mdui-m-a-1 mdui-typo">

    <h1 class="mdui-m-l-3">拓展管理
        <small>Message</small>
    </h1>

    <div class="mdui-col-xs-12 mdui-col-sm-3">

        <form action="">
            <div class="mdui-textfield mdui-textfield-floating-label">
                <i class="mdui-icon material-icons">account_circle</i>
                <label class="mdui-textfield-label">用户ID</label>
                <input class="mdui-textfield-input" name="uid" type="text" />
                <div class="mdui-textfield-helper">多个用户用英文逗号 (,) 隔开</div>
            </div>

            <div class="mdui-textfield mdui-textfield-floating-label">
                <i class="mdui-icon material-icons">title</i>
                <label class="mdui-textfield-label">Title</label>
                <input class="mdui-textfield-input" name="title" type="text" />
            </div>

            <div class="mdui-textfield mdui-textfield-floating-label">
                <i class="mdui-icon material-icons">textsms</i>
                <label class="mdui-textfield-label">Message</label>
                <textarea class="mdui-textfield-input" name="content"></textarea>
            </div>
            <?php echo token(); ?>
        </form>
        <button class="mdui-btn mdui-ripple mdui-btn-block mdui-color-theme-accent" id="send">
            <i class="mdui-icon material-icons">send</i>发送</button>
    </div>
</div>


    </div>
    <footer class="mdui-bottom-nav">
    <div>HC版权设置</div>
</footer> 

<script>
    mdui.mutation()
    layui.use('form', function() {
        var form = layui.form;
    });
    var $$ = mdui.JQ,
        data = '';

    $$('#user').addClass('mdui-collapse-item-open');
    $$('#setExpand').addClass('mdui-list-item-active');

    $$('#send').on('click', function() {
        data = $$('form').serialize();

        $$.ajax({
            method: 'post',
            url: '',
            data: data,
            dataType: 'json',
            success: function(res) {
                if (res.code == 0) {
                    mdui.snackbar(res.message, {
                        timeout: 2000,
                        position: 'top'
                    })
                } else {
                    mdui.snackbar(res.message, {
                        timeout: 2000,
                        position: 'top'
                    })
                }

            }
        })

        return false;
    })
</script> 
</body>

</html>