<?php /*a:5:{s:71:"/data/wwwroot/wh1993/tuwen/application/admin/view/set/forumsetting.html";i:1546402598;s:49:"./application/admin/view/public/admin_public.html";i:1546402500;s:43:"./application/admin/view/public/header.html";i:1552446126;s:43:"./application/admin/view/public/topbar.html";i:1555385384;s:43:"./application/admin/view/public/footer.html";i:1546402746;}*/ ?>
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
        
<div class="mdui-m-a-1 mdui-typo mdui-table-fluid">

    <h1 class="mdui-m-l-3">Forum 拓展管理<small>友情链接Links</small></h1>

    <div class="mdui-btn-group mdui-m-l-3">
        <button type="button" class="mdui-btn" mdui-dialog="{target: '#addLink'}">
            <i class="mdui-icon material-icons">add</i>
        </button>
    </div>
    
    <table class="mdui-table mdui-textfield">
        <thead>
            <tr>
                <th>#</th>
                <th>排序</th>
                <th>链接名称</th>
                <th>URL</th>
                <th>链接图片</th>
                <th>操作</th>
            </tr>
        </thead>
        <tbody>
            <?php if(is_array($links) || $links instanceof \think\Collection || $links instanceof \think\Paginator): $i = 0; $__LIST__ = $links;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <tr id="<?php echo htmlentities($vo['Id']); ?>">
                <td><?php echo htmlentities($vo['Id']); ?></td>
                <td><?php echo htmlentities($vo['sold']); ?></td>
                <td><?php echo htmlentities($vo['title']); ?></td>
                <td>
                    <a href="<?php echo htmlentities($vo['url']); ?>" target="_blank"><?php echo htmlentities($vo['url']); ?></a>
                </td>
                <td>
                    <a href="<?php echo htmlentities((isset($vo['picurl']) && ($vo['picurl'] !== '')?$vo['picurl']:'/public/static/images/link.jpg')); ?>" target="_blank"><?php echo htmlentities((isset($vo['picurl']) && ($vo['picurl'] !== '')?$vo['picurl']:'/public/static/images/link.jpg')); ?></a>
                </td>
                <td>
                    <div class="layui-btn-group">
                        <button class="layui-btn layui-btn-primary layui-btn-sm" onclick="editorForum('#<?php echo htmlentities($vo['Id']); ?>')">编辑</button>
                        <button class="layui-btn layui-btn-primary layui-btn-sm" onclick="del('<?php echo htmlentities($vo['Id']); ?>')">删除</button>
                    </div>
                </td>
            </tr>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
    </table>

    <div class="mdui-dialog mdui-typo" id="addLink">
        <div class="mdui-dialog-content">
            <div class="mdui-dialog-title mdui-typo-title">添加Link</div>
            <form id="addForm" class="layui-form layui-form-pane mdui-m-y-1">
                <div class="layui-form-item">
                    <label class="layui-form-label">Link名称</label>
                    <div class="layui-input-block">
                        <input type="text" name="title" required lay-verify="required" placeholder="请输入Link名称" autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">Link地址</label>
                    <div class="layui-input-block">
                        <input type="url" name="url" required lay-verify="required" placeholder="请输入LinkURL" autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">图片地址</label>
                    <div class="layui-input-block">
                        <input type="url" name="picurl" placeholder="请输入Link图片地址" autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">排序</label>
                    <div class="layui-input-block">
                        <input type="text" name="sold" placeholder="请输入排序默认0" autocomplete="off" class="layui-input">
                    </div>
                </div>
                 <?php echo token(); ?>
            </form>
        </div>
        <div class="mdui-dialog-actions">
            <button class="mdui-btn mdui-ripple" id="submitadd">添加</button>
        </div>
    </div>

    <div class="mdui-dialog mdui-typo" id="editLink">
        <div class="mdui-dialog-content">
            <div class="mdui-dialog-title mdui-typo-title">修改Link</div>
            <form id="editForm" class="layui-form layui-form-pane mdui-m-y-1">
                <input type="hidden" name="Id">
                <div class="layui-form-item">
                    <label class="layui-form-label">Link名称</label>
                    <div class="layui-input-block">
                        <input type="text" name="title" required lay-verify="required" placeholder="请输入Link名称" autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">Link地址</label>
                    <div class="layui-input-block">
                        <input type="url" name="url" required lay-verify="required" placeholder="请输入LinkURL" autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">图片地址</label>
                    <div class="layui-input-block">
                        <input type="url" name="picurl" placeholder="请输入Link图片地址" autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">排序</label>
                    <div class="layui-input-block">
                        <input type="text" name="sold" placeholder="请输入排序默认0" autocomplete="off" class="layui-input">
                    </div>
                </div>
                 <?php echo token(); ?>
            </form>
        </div>
        <div class="mdui-dialog-actions">
            <button class="mdui-btn mdui-ripple" id="submitedit">保存</button>
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
        inst = new mdui.Dialog('#editLink');//注册对话框

    $$('#forum').addClass('mdui-collapse-item-open');
    $$('#forumSetting').addClass('mdui-list-item-active');

    $$('#submitadd').on('click', function () {
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
    
    $$('#submitedit').on('click', function () {
        data = $$('#editForm').serialize();

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

    function editorForum(id) {
        var data = $$(id).find('td');

        $$('#editForm [name="Id"]').val(data[0].innerText);
        $$('#editForm [name="title"]').val(data[2].innerText);
        $$('#editForm [name="url"]').val(data[3].innerText);
        $$('#editForm [name="picurl"]').val(data[4].innerText);
        $$('#editForm [name="sold"]').val(data[1].innerText);

        inst.open();
    }

    function del(lid) {
        $$.ajax({
            method: 'post',
            url: '<?php echo url("admin/api/del"); ?>',
            data: {
                type: 'link',
                id: lid,
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
</script> 
</body>

</html>