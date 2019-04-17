<?php /*a:5:{s:54:"E:\www\hcadmin\application\admin\view\set\baseReg.html";i:1546402566;s:49:"./application/admin/view/public/admin_public.html";i:1555311750;s:43:"./application/admin/view/public/header.html";i:1547689121;s:43:"./application/admin/view/public/topbar.html";i:1555312134;s:43:"./application/admin/view/public/footer.html";i:1546402746;}*/ ?>
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
                <a href="<?php echo url('set/resource'); ?>">
                    <li class="mdui-list-item mdui-ripple" id="resource">资源管理</li>
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
        
<div class="mdui-m-a-1 mdui-typo mdui-table-fluid">
    <form>
        <h1 class="mdui-m-l-3">注册 & 访问设置</h1>
        <table class="mdui-table mdui-textfield">
            <tbody>
                <tr>
                    <td>允许访问</td>
                    <td>
                        <label class="mdui-switch">
                            <input name="siteStatus" value="1" type="checkbox" <?php if($base['siteStatus'] == '1'): ?>checked<?php endif; ?>/>
                            <i class="mdui-switch-icon"></i>
                        </label>
                    </td>
                    <td>
                        设置论坛是否可以访问，关闭后仅『超级管理员』权限可以访问
                    </td>
                </tr>
                <tr>
                    <td>闭站提示</td>
                    <td>
                        <textarea name="closeContent" id="closeContent" cols="30" rows="3" class="mdui-textfield-input"><?php echo $base['closeContent']; ?></textarea>
                    </td>
                    <td>
                        设置论坛是否可以访问，关闭后仅『超级管理员』权限可以访问
                    </td>
                </tr>
                <tr>
                    <td>允许注册</td>
                    <td>
                        <label class="mdui-switch">
                            <input name="regStatus" type="checkbox" value="1" <?php if($reg['regStatus'] == '1'): ?>checked<?php endif; ?>/>
                            <i class="mdui-switch-icon"></i>
                        </label>
                    </td>
                    <td>
                        是否允许新用户注册
                    </td>
                </tr>
                <tr>
                    <td>允许QQ注册</td>
                    <td>
                        <label class="mdui-switch">
                            <input name="allowQQreg" type="checkbox" value="1" <?php if($reg['allowQQreg'] == '1'): ?>checked<?php endif; ?>/>
                            <i class="mdui-switch-icon"></i>
                        </label>
                    </td>
                    <td>
                        是否允许新用户直接使用QQ注册
                    </td>
                </tr>
                <tr>
                    <td>手机版默认全屏</td>
                    <td>
                        <label class="mdui-switch">
                            <input name="full" type="checkbox" value="1" <?php if($base['full'] == '1'): ?>checked<?php endif; ?>/>
                            <i class="mdui-switch-icon"></i>
                        </label>
                    </td>
                    <td>
                        QQ浏览器等手机浏览器访问时自动进入全屏
                    </td>
                </tr>
                <tr>
                    <td>默认用户组</td>
                    <td>
                        <select name="defaulegroup" class="mdui-select" mdui-select>
                            <?php if(is_array($userGroup) || $userGroup instanceof \think\Collection || $userGroup instanceof \think\Paginator): $i = 0; $__LIST__ = $userGroup;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($vo['gid'] == $reg['defaulegroup']): ?>
                            <option value="<?php echo htmlentities($vo['gid']); ?>" selected="selected"><?php echo htmlentities($vo['groupName']); ?></option>
                            <?php else: ?>
                            <option value="<?php echo htmlentities($vo['gid']); ?>"><?php echo htmlentities($vo['groupName']); ?></option>
                            <?php endif; ?> <?php endforeach; endif; else: echo "" ;endif; ?>
                        </select>
                    </td>
                    <td>
                        用户注册后默认属于的用户组
                    </td>
                </tr>
                <tr>
                    <td>验证邮件验证码</td>
                    <td>
                        <label class="mdui-checkbox">
                            <input name="regMail" type="checkbox" value="1" <?php if($reg['regMail'] == '1'): ?>checked<?php endif; ?>/>
                            <i class="mdui-checkbox-icon"></i>
                        </label>
                    </td>
                    <td>
                        启用后，新用户注册需要凭借邮件中的验证码才能注册。
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <button id="submit" type="submit" class="mdui-btn mdui-btn-raised mdui-ripple mdui-color-theme-accent">保存设置</button>
                    </td>
                    <td></td>
                </tr>
            </tbody>
        </table>
         <?php echo token(); ?>
    </form>
</div>


    </div>
    <footer class="mdui-bottom-nav">
    <div>HC版权设置</div>
</footer> 
<script>
    var $$ = mdui.JQ,
        data = '';;

    $$('#sys').addClass('mdui-collapse-item-open');
    $$('#baseReg').addClass('mdui-list-item-active');

    $$('#submit').on('click', function () {
        data = $$('form').serialize();
        console.log(data);
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