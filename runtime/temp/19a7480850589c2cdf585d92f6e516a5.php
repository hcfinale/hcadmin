<?php /*a:5:{s:55:"E:\www\hcadmin\application\admin\view\set\baseMail.html";i:1546402552;s:49:"./application/admin/view/public/admin_public.html";i:1546402501;s:43:"./application/admin/view/public/header.html";i:1547689121;s:43:"./application/admin/view/public/topbar.html";i:1546402672;s:43:"./application/admin/view/public/footer.html";i:1546402746;}*/ ?>
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
        
<div class="mdui-m-a-1">
    <h1 class="mdui-m-l-3">邮件设置</h1>
    <div class="mdui-tab" mdui-tab>
        <a href="#mail-base" class="mdui-ripple">基本设置</a>
        <a href="#mail-sendTest" class="mdui-ripple">发信测试</a>
        <a href="#mail-Template" class="mdui-ripple">邮件模板</a>
    </div>
    <!-- 基本设置 -->
    <div id="mail-base" class="mdui-p-a-2 mdui-table-fluid mdui-typo">
        <form id="1">
            <input type="hidden" name="type" value="mailBase">
             <?php echo token(); ?>
            <table class="mdui-table mdui-textfield mdui-m-t-1">
                <tbody>
                    <tr>
                        <td witdh="10%">发件人姓名</td>
                        <td>
                            <input class="mdui-textfield-input" type="text" name="fromName" value="<?php echo htmlentities($mail['fromName']); ?>" />
                        </td>
                    </tr>
                    <tr>
                        <td>发信邮箱</td>
                        <td>
                            <input class="mdui-textfield-input" type="text" name="fromAdress" value="<?php echo htmlentities($mail['fromAdress']); ?>" />
                        </td>
                    </tr>
                    <tr>
                        <td>SMTP服务器</td>
                        <td>
                            <input class="mdui-textfield-input" type="text" name="smtpHost" value="<?php echo htmlentities($mail['smtpHost']); ?>" />
                        </td>
                    </tr>
                    <tr>
                        <td>端口</td>
                        <td>
                            <input class="mdui-textfield-input" type="text" name="smtpPort" value="<?php echo htmlentities($mail['smtpPort']); ?>" />
                        </td>
                    </tr>
                    <tr>
                        <td>加密方式</td>
                        <td>
                            <select name="encriptionType" class="mdui-select" mdui-select>
                                <?php if($mail['encriptionType'] == 'SSL'): ?>
                                <option value="no">不启用</option>
                                <option value="TLS">TLS</option>
                                <option value="SSL" selected="selected">SSL</option>
                                <?php elseif($mail['encriptionType'] == 'TLS'): ?>
                                <option value="no">不启用</option>
                                <option value="TLS" selected="selected">TLS</option>
                                <option value="SSL">SSL</option>
                                <?php else: ?>
                                <option value="no" selected="selected">不启用</option>
                                <option value="TLS">TLS</option>
                                <option value="SSL">SSL</option>
                                <?php endif; ?> {/volist}
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>用户名</td>
                        <td>
                            <input class="mdui-textfield-input" type="text" name="smtpUser" value="<?php echo htmlentities($mail['smtpUser']); ?>" />
                        </td>
                    </tr>
                    <tr>
                        <td>密码</td>
                        <td>
                            <input class="mdui-textfield-input" type="text" name="smtpPass" value="<?php echo htmlentities($mail['smtpPass']); ?>" />
                        </td>
                    </tr>
                    <tr>
                        <td>回信地址</td>
                        <td>
                            <input class="mdui-textfield-input" type="text" name="replyTo" value="<?php echo htmlentities($mail['replyTo']); ?>" />
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <button id="submit" type="submit" class="mdui-btn mdui-btn-raised mdui-ripple mdui-color-theme-accent">保存设置</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>
    <!-- 发送测试 -->
    <div id="mail-sendTest" class="mdui-p-a-2 mdui-table-fluid mdui-typo">
        <form id="2">
            <input type="hidden" name="type" value="sendTest">
            <table class="mdui-table mdui-textfield mdui-m-t-1">
                <tbody>
                    <tr>
                        <td witdh="10%">收件人邮箱</td>
                        <td>
                            <input class="mdui-textfield-input" type="text" name="sendTo" />
                        </td>
                    </tr>
                    <tr>
                        <td>标题</td>
                        <td>
                            <input class="mdui-textfield-input" type="text" name="title" value="这是一封来自MlTree Forum的测试邮件" />
                        </td>
                    </tr>
                    <tr>
                        <td>内容</td>
                        <td>
                            <textarea name="content" icols="10" class="mdui-textfield-input">这是一封由MlTree Forum发出的测试邮件，用于测试邮件设置是否正常工作。</textarea>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <button id="sendTest" type="submit" class="mdui-btn mdui-btn-raised mdui-ripple mdui-color-theme-accent">发 送</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>
    <!-- 邮件模板 -->
    <div id="mail-Template" class="mdui-p-a-2 mdui-table-fluid">
        <form id="3">
            <input type="hidden" name="type" value="Template">
             <?php echo token(); ?>
            <table class="mdui-table mdui-textfield mdui-m-t-1">
                <tbody>
                    <tr>
                        <td witdh="10%">账户激活</td>
                        <td>
                            <div id="stats"><?php echo $template['reg_mail_content']; ?></div>
                        </td>
                    </tr>
                    <tr>
                        <td>找回密码</td>
                        <td>
                            <div id="pass"><?php echo $template['reset_mail_content']; ?></div>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <button id="Template" type="submit" class="mdui-btn mdui-btn-raised mdui-ripple mdui-color-theme-accent">保存设置</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>

    </form>
</div>


    </div>
    <footer class="mdui-bottom-nav">
    <div>HC版权设置</div>
</footer> 
<script src="/public/static/js/wangEditor.js"></script>
<script>
    var $$ = mdui.JQ,
        data = '',
        E = window.wangEditor;

    var editor1 = new E('#stats'),
        editor2 = new E('#pass');
    editor1.create();
    editor2.create();


    $$('#sys').addClass('mdui-collapse-item-open');
    $$('#baseMail').addClass('mdui-list-item-active');

    $$('#submit').on('click', function () {
        data = $$('#1').serialize();

        $$.ajax({
            method: 'post',
            url: '',
            data: data,
            dataType: 'json',
            success: function (res) {
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

    $$('#sendTest').on('click', function () {
        data = $$('#2').serialize();

        $$.ajax({
            method: 'post',
            url: '',
            data: data,
            dataType: 'json',
            success: function (res) {
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

    $$('#Template').on('click', function () {
        data = $$('#3').serialize();

        $$.ajax({
            method: 'post',
            url: '',
            data: data,
            dataType: 'json',
            success: function (res) {
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