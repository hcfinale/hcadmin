<?php /*a:5:{s:63:"/data/wwwroot/wh1993/tuwen/application/admin/view/set/Auth.html";i:1546402532;s:49:"./application/admin/view/public/admin_public.html";i:1546402500;s:43:"./application/admin/view/public/header.html";i:1552446126;s:43:"./application/admin/view/public/topbar.html";i:1546402672;s:43:"./application/admin/view/public/footer.html";i:1546402746;}*/ ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>万和学院 管理后台</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="万和学院后台" />
    <meta name="description" content="万和学院后台" />
    <meta name="author" content="北林">
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
        
<div class="mdui-m-a-1 mdui-typo mdui-table-fluid">

    <h1 class="mdui-m-l-3">权限管理</h1>

    <div class="mdui-btn-group mdui-m-l-3">
        <button type="button" class="mdui-btn" mdui-dialog="{target: '#addAuth'}">
            <i class="mdui-icon material-icons">add</i>
        </button>
    </div>

    <table class="mdui-table mdui-textfield mdui-table-hoverable">
        <thead>
            <tr>
                <th>#</th>
                <th>权限标志</th>
                <th>权限名称</th>
                <th>状态</th>
                <th>支持规则表达式</th>
                <th>操作</th>
            </tr>
        </thead>
        <tbody>
            <?php if(is_array($Auth) || $Auth instanceof \think\Collection || $Auth instanceof \think\Paginator): $i = 0; $__LIST__ = $Auth;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <tr id="<?php echo htmlentities($vo['id']); ?>">
                <td><?php echo htmlentities($vo['id']); ?></td>
                <td><?php echo htmlentities($vo['name']); ?></td>
                <td><?php echo htmlentities($vo['title']); ?></td>
                <td>
                    <label class="mdui-switch">
                        <input name="status" value="1" type="checkbox" <?php if($vo['status'] == '1'): ?>checked<?php endif; ?> onclick="setStatus('<?php echo htmlentities($vo['name']); ?>',$$(this).prop('checked'))"
                        />
                        <i class="mdui-switch-icon"></i>
                    </label>
                </td>
                <td>
                    <label class="mdui-switch">
                        <input name="type" value="1" type="checkbox" <?php if($vo['type'] == '1'): ?>checked<?php endif; ?> onclick="setType('<?php echo htmlentities($vo['name']); ?>',$$(this).prop('checked'))"
                        />
                        <i class="mdui-switch-icon"></i>
                    </label>
                </td>
                <td>
                    <div class="layui-btn-group">
                        <button class="layui-btn layui-btn-primary layui-btn-sm" onclick="del('<?php echo htmlentities($vo['id']); ?>')">删除</button>
                    </div>
                </td>
            </tr>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
    </table>

    <div class="mdui-dialog mdui-typo" id="addAuth">
        <div class="mdui-dialog-content">
            <div class="mdui-dialog-title">添加权限</div>
            <form id="add" class="layui-form layui-form-pane mdui-m-y-1">
                <div class="layui-form-item">
                    <label class="layui-form-label">权限名称</label>
                    <div class="layui-input-block">
                        <input type="text" name="title" required lay-verify="required" placeholder="请输入权限名称" autocomplete="off" class="layui-input">
                    </div>
                    <div class="layui-form-mid layui-word-aux">请确保其值唯一</div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">权限标志</label>
                    <div class="layui-input-block">
                        <input type="text" name="name" required lay-verify="required" placeholder="请输入权限标志" autocomplete="off" class="layui-input">
                    </div>
                    <div class="layui-form-mid layui-word-aux">请确保其值唯一</div>
                </div>
                <div class="layui-form-item" pane="">
                    <label class="layui-form-label">支持规则表达式</label>
                    <div class="layui-input-block">
                        <label class="mdui-switch">
                            <input name="type" value="1" type="checkbox" checked/>
                            <i class="mdui-switch-icon"></i>
                        </label>
                    </div>
                </div>
                <div class="layui-form-item" pane="">
                    <label class="layui-form-label">权限状态</label>
                    <div class="layui-input-block">
                        <label class="mdui-switch">
                            <input name="status" value="1" type="checkbox" checked/>
                            <i class="mdui-switch-icon"></i>
                        </label>
                    </div>
                </div>

            </form>
        </div>
        <div class="mdui-dialog-actions">
            <button class="mdui-btn mdui-ripple" id="submit">添加</button>
        </div>
    </div>

</div>


    </div>
    <footer class="mdui-bottom-nav">
    <div>HC版权设置</div>
</footer> 
<script>
    var $$ = mdui.JQ,
        data = '';;

    $$('#user').addClass('mdui-collapse-item-open');
    $$('#setAuth').addClass('mdui-list-item-active');

    $$('#submit').on('click', function() {
        data = $$('#add').serialize();

        $$.ajax({
            method: 'post',
            url: '',
            data: data,
            dataType: 'json',
            success: function(res) {
                if (res.code == 0) {
                    mdui.snackbar(res.message, {
                        timeout: 2000,
                        position: 'top',

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

    function del(aid) {
        mdui.dialog({
            title: '你确定吗？',
            content: '此操作将删除此权限，同时使用到此权限的地方将默认通过',
            buttons: [{
                text: '取消'
            }, {
                text: '确认',
                onClick: function(inst) {
                    $$.ajax({
                        method: 'post',
                        url: '<?php echo url("admin/api/del"); ?>',
                        data: {
                            type: 'auth',
                            id: aid,
                            __token__: '<?php echo htmlentities(app('request')->token()); ?>'
                        },
                        dataType: 'json',
                        success: function(res) {
                            if (res.code == 0) {
                                mdui.snackbar(res.message, {
                                    timeout: 2000,
                                    position: 'top',
                                    onClosed: function() {
                                        location.reload();
                                    }
                                })
                            } else {
                                mdui.snackbar(res.message, {
                                    timeout: 2000,
                                    position: 'top',
                                })
                            }
                        }
                    });
                }
            }]
        });

    }

    function setStatus(name, value) {
        $$.ajax({
            method: 'post',
            url: '',
            data: {
                name: name,
                type: 'set',
                sign: 'status',
                value: value,
            },
            dataType: 'json',
            success: function(res) {
                if (res.code == 0) {
                    mdui.snackbar(res.message, {
                        timeout: 2000,
                        position: 'top',
                        onClosed: function() {
                            location.reload();
                        }
                    })
                } else {
                    mdui.snackbar(res.message, {
                        timeout: 2000,
                        position: 'top'
                    })
                }

            }
        })
    }

    function setType(name, value) {
        $$.ajax({
            method: 'post',
            url: '',
            data: {
                name: name,
                type: 'set',
                sign: 'type',
                value: value,
            },
            dataType: 'json',
            success: function(res) {
                if (res.code == 0) {
                    mdui.snackbar(res.message, {
                        timeout: 2000,
                        position: 'top',
                        onClosed: function() {
                            location.reload();
                        }
                    })
                } else {
                    mdui.snackbar(res.message, {
                        timeout: 2000,
                        position: 'top'
                    })
                }

            }
        })
    }
</script> 
</body>

</html>