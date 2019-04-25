<?php /*a:5:{s:54:"E:\www\hcadmin\application\admin\view\index\index.html";i:1555565903;s:49:"./application/admin/view/public/admin_public.html";i:1555565903;s:43:"./application/admin/view/public/header.html";i:1555565903;s:43:"./application/admin/view/public/topbar.html";i:1555566042;s:43:"./application/admin/view/public/footer.html";i:1555565903;}*/ ?>
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
                <a href="<?php echo url('set/resourceAll'); ?>">
                    <li class="mdui-list-item mdui-ripple" id="resourceAll">资源管理</li>
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
        
<div class="mdui-row">
    <div class="mdui-m-a-1 mdui-typo">
        <div class="mdui-col-xs-12 mdui-col-sm-6 mf-panel">
            <div class="mf-panel-hd">
                <h3><i class="mdui-icon material-icons">settings</i>系统信息</h3>
            </div>

            <div class="mf-panel-bd">
                <ul>
                    <?php if(is_array($serverinfo) || $serverinfo instanceof \think\Collection || $serverinfo instanceof \think\Paginator): $i = 0; $__LIST__ = $serverinfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <li><?php echo htmlentities($key); ?> : <?php echo htmlentities($vo); ?></li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
        </div>
        <!--
        <div class="mdui-col-xs-12 mdui-col-sm-6 mf-panel">
            <div class="mf-panel-hd">
                <h3><i class="mdui-icon material-icons">info</i>关于MlTree Forum</h3>
            </div>

            <div class="mf-panel-bd">
                <h2>MlTree Forum 1.0.1</h2>
                <ul>
                    <li>主页：
                        <a href="https://forum.mltree.top">https://forum.mltree.top</a>
                    </li>
                    <li>Git：
                        <a href="https://github.com/mltreegroup/MlTree-Fourm">https://github.com/mltreegroup/MlTree-Fourm</a>
                    </li>
                    <li>许可证：
                        <a href="https://www.apache.org/licenses/LICENSE-2.0.html">Apache License v2.0</a>
                    </li>
                    <li>其他：
                        <a href="https://t.me/joinchat/Hewif0uvElMgVnAK_WrFJw
">https://t.me/joinchat/Hewif0uvElMgVnAK_WrFJw
                        </a> OR
                        <a href="https://jq.qq.com/?_wv=1027&k=5Jtch2I">https://jq.qq.com/?_wv=1027&k=5Jtch2I</a>
                    </li>
                </ul>
            </div>
        </div>
    -->
    </div>
</div>
<!--
<div class="mdui-row mdui-typo">
    <div class="mdui-col-xs-12">
        <h3><i class="mdui-icon material-icons">fiber_new</i>订阅推送</h3>
        <table class="mdui-table" style="max-height: 300px;">
            <thead>
                <tr>
                    <td>#</td>
                    <td>标题</td>
                    <td>介绍</td>
                    <td>评级</td>
                    <td>推送日期</td>
                    <td>详细</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>【版本更新】推送MlTree Forumv1.0.1</td>
                    
                    <td>2018.06.23</td>
                    <td><a href=""><i class="mdui-icon material-icons">link</i></a></td>
                </tr> 

                <?php if(is_array($updateList) || $updateList instanceof \think\Collection || $updateList instanceof \think\Paginator): $i = 0; $__LIST__ = $updateList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <tr>
                    <td><?php echo htmlentities($i); ?></td>
                    <td>【版本更新】推送MlTree Forum Ver<?php echo htmlentities($vo->ver); ?></td>
                    <td><?php echo htmlentities($vo->illustrate); ?></td>
                    <td><?php echo htmlentities($vo->assess); ?></td>
                    <td><?php echo htmlentities($vo->time); ?></td>
                    <td>
                        <a href="<?php echo htmlentities($vo->url); ?>">
                            <i class="mdui-icon material-icons">link</i>
                        </a>
                    </td>
                </tr>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </tbody>
        </table>
    </div>
</div>
-->

    </div>
    <footer class="mdui-bottom-nav">
    <div>HC版权设置</div>
</footer> 
</body>

</html>