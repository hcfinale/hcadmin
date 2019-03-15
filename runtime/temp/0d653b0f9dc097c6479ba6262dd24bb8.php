<?php /*a:5:{s:52:"E:\www\hcadmin\application\admin\view\set\forum.html";i:1552531368;s:49:"./application/admin/view/public/admin_public.html";i:1546402501;s:43:"./application/admin/view/public/header.html";i:1547689121;s:43:"./application/admin/view/public/topbar.html";i:1546402672;s:43:"./application/admin/view/public/footer.html";i:1546402746;}*/ ?>
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
        
<div class="mdui-m-a-1 mdui-typo mdui-table-fluid">

    <h1 class="mdui-m-l-3">Forum 管理</h1>

    <div class="mdui-btn-group mdui-m-l-3">
        <button type="button" class="mdui-btn" mdui-dialog="{target: '#addForum'}">
            <i class="mdui-icon material-icons">add</i>
        </button>
    </div>

    <table class="mdui-table mdui-textfield mdui-table-hoverable">
        <thead>
            <tr>
                <th>#</th>
                <th>Fid</th>
                <th>板块名称</th>
                <th style="display: none;">板块描述</th>
                <th>权限用户祖</th>
                <th>板块管理</th>
            </tr>
        </thead>
        <tbody>
            <?php if(is_array($forumData) || $forumData instanceof \think\Collection || $forumData instanceof \think\Paginator): $i = 0; $__LIST__ = $forumData;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <tr id="<?php echo htmlentities($vo['fid']); ?>">
                <td><?php echo htmlentities($vo['sort']); ?></td>
                <td><?php echo htmlentities($vo['fid']); ?></td>
                <td>
                    <?php if($vo['pid'] != '0'): ?>|
                    <?php echo str_repeat("_",$vo['level']*4); ?>
                    <?php endif; ?>
                    <?php echo htmlentities($vo['name']); ?>
                </td>
                <td style="display: none;"><?php echo htmlentities($vo['introduce']); ?></td>
                <td><?php echo htmlentities($vo['cgroup']); ?></td>
                <td>
                    <div class="layui-btn-group">
                        <button class="layui-btn layui-btn-primary layui-btn-sm" onclick="editorForum('#<?php echo htmlentities($vo['fid']); ?>')">编辑</button>
                        <button class="layui-btn layui-btn-primary layui-btn-sm" onclick="del('<?php echo htmlentities($vo['fid']); ?>')">删除</button>
                    </div>
                </td>
            </tr>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
    </table>

    <div class="mdui-dialog mdui-typo" id="addForum">
        <div class="mdui-dialog-content">
            <div class="mdui-dialog-title">添加板块</div>
            <form id="addForm" class="layui-form layui-form-pane mdui-m-y-1">
                <div class="layui-form-item">
                    <label class="layui-form-label">选择框</label>
                    <div class="layui-input-block">
                        <select name="pid" lay-verify="required" style="display: block;min-height: 36px;border: 1px solid #dedede;">
                            <option value="0">顶级栏目</option>
                            <?php if(is_array($forumData) || $forumData instanceof \think\Collection || $forumData instanceof \think\Paginator): $i = 0; $__LIST__ = $forumData;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$forum): $mod = ($i % 2 );++$i;?>
                            <option value="<?php echo htmlentities($forum['fid']); ?>">
                                <?php if($forum['pid'] != '0'): ?>|
                                <?php echo str_repeat("——",$forum['level']); ?>
                                <?php endif; ?>
                                <?php echo htmlentities($forum['name']); ?>
                            </option>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </select>
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">板块名称</label>
                    <div class="layui-input-block">
                        <input type="text" name="name" required lay-verify="required" placeholder="请输入板块名称" autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">板块描述</label>
                    <div class="layui-input-block">
                        <textarea name="introduce" placeholder="请输入板块描述" class="layui-textarea"></textarea>
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">权限用户组</label>
                    <div class="layui-input-block">
                        <select name="cgroup" lay-verify="required" style="display: block;min-height: 36px;border: 1px solid #dedede;">
                            <?php if(is_array($group) || $group instanceof \think\Collection || $group instanceof \think\Paginator): $i = 0; $__LIST__ = $group;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$guser): $mod = ($i % 2 );++$i;?>
                            <option value="<?php echo htmlentities($guser['gid']); ?>">
                                <?php echo htmlentities($guser['groupName']); ?>
                            </option>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </select>
                    </div>
                    <div class="layui-form-mid layui-word-aux">默认为0(即全部用户组)，多个用户组请用,(英文逗号)隔开</div>
                </div>
                 <?php echo token(); ?>
            </form>
        </div>
        <div class="mdui-dialog-actions">
            <button class="mdui-btn mdui-ripple" id="submit">添加</button>
        </div>
    </div>

    <div class="mdui-dialog mdui-typo" id="editorForum">
        <div class="mdui-dialog-content">
            <div class="mdui-dialog-title">编辑板块</div>
            <form id="editForm" class="layui-form layui-form-pane mdui-m-y-1">
                <div class="layui-form-item">
                    <input type="hidden" name="fid" id="editfid">
                    <label class="layui-form-label">板块名称</label>
                    <div class="layui-input-block">
                        <input type="text" name="name" required lay-verify="required" placeholder="请修改" autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">板块描述</label>
                    <div class="layui-input-block">
                        <textarea name="introduce" placeholder="请输入板块描述" class="layui-textarea"></textarea>
                    </div>
                </div>
                 <?php echo token(); ?>
            </form>
        </div>
        <div class="mdui-dialog-actions">
            <button class="mdui-btn mdui-ripple" id="edit">保存</button>
        </div>
    </div>
</div>


    </div>
    <footer class="mdui-bottom-nav">
    <div>HC版权设置</div>
</footer> 
<script>
    var $$ = mdui.JQ,
        data = '',
        inst = new mdui.Dialog('#editorForum');//注册对话框

    $$('#forum').addClass('mdui-collapse-item-open');
    $$('#setForum').addClass('mdui-list-item-active');

    $$('#submit').on('click', function () {
        data = $$('#addForm').serialize();
        $$.ajax({
            method: 'post',
            url: '',
            data: data,
            dataType: 'json',
            success: function (res) {
                if (res.code == 0) {
                    mdui.snackbar(res.message, {
                        timeout: 2000,
                        position: 'top',
                        onClosed: function () {
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

        return false;
    })
    $$('#edit').on('click', function () {
        data = $$('#editForm').serialize();
        $$.ajax({
            method: 'post',
            url: '<?php echo url("admin/set/forum"); ?>',
            data: data,
            dataType: 'json',
            success: function (res) {
                if (res.code == 0) {
                    mdui.snackbar(res.message, {
                        timeout: 2000,
                        position: 'top',
                        onClose: function () {
                            inst.close();
                        },
                        onClosed: function () {
                            location.reload();
                        }
                    })
                } else {
                    mdui.snackbar(res.message, {
                        timeout: 2000,
                        position: 'top',
                        onClose: function () {
                            inst.close();
                        }
                    })
                }

            }
        })

        return false;
    })

    function editorForum(id) {
        var data = $$(id).find('td');
        console.log(data);
        $$('#editorForum [name="fid"]').val(data[1].innerText);
        // $$('#editorForum [name="name"]').val(data[2].innerText);
        $$('#editorForum textarea').val(data[3].innerText);
        inst.open();

    }

    function del(fid) {
        mdui.dialog({
            title: '你确定吗？',
            content: '此操作将删除此版块分区，同时将版块下的所有Topic移动到Fid=1的板块下',
            buttons: [
                {
                    text: '取消'
                },
                {
                    text: '确认',
                    onClick: function (inst) {
                        $$.ajax({
                            method: 'post',
                            url: '<?php echo url("admin/api/del"); ?>',
                            data: {
                                type: 'forum',
                                id: fid,
                            },
                            dataType: 'json',
                            success: function (res) {
                                if (res.code == 0) {
                                    mdui.snackbar(res.message, {
                                        timeout: 2000,
                                        position: 'top',
                                        onClosed: function () {
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
                }
            ]
        });

    }
</script> 
</body>

</html>