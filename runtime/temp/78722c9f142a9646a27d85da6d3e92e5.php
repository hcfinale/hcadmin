<?php /*a:5:{s:52:"E:\www\hcadmin\application\admin\view\set\topic.html";i:1553678821;s:49:"./application/admin/view/public/admin_public.html";i:1546402500;s:43:"./application/admin/view/public/header.html";i:1552446126;s:43:"./application/admin/view/public/topbar.html";i:1555385384;s:43:"./application/admin/view/public/footer.html";i:1546402746;}*/ ?>
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
        
<style type="text/css">
.pagination{margin: 1.5rem auto!important;}
.pagination li{display:inline-block;width: 2.5rem;height: 2.5rem;text-align: center;line-height: 2.5rem;}
.pagination li.active{background: #f610ad;color: #ffffff;}
</style>
<div class="mdui-m-a-1 mdui-typo mdui-table-fluid">
    <h1 class="mdui-m-l-3">Topic 管理</h1>
    <div class="mdui-textfield mdui-textfield-expandable mdui-m-l-3 mdui-col-xs-6">
        <form action="" method="post" id="columnForm">
            <select name="columnSearch" class="mdui-select" id="column">
                <?php if(is_array($column) || $column instanceof \think\Collection || $column instanceof \think\Paginator): $i = 0; $__LIST__ = $column;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$forum): $mod = ($i % 2 );++$i;?>
                <option value="<?php echo htmlentities($forum['fid']); ?>">
                    <?php if($forum['pid'] != '0'): ?>|<?php echo str_repeat("___",$forum['level']); ?><?php endif; ?><?php echo htmlentities($forum['name']); ?>
                </option>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </select>
            <input type="submit" class="mdui-btn mdui-color-theme mdui-ripple" name="type" value="submit" />
        </form>
    </div>
    <div class="mdui-textfield mdui-textfield-expandable mdui-m-l-5 mdui-col-xs-3">
        <button class="mdui-textfield-icon mdui-btn mdui-btn-icon">
            <i class="mdui-icon material-icons">search</i>
        </button>
        <form action="" method="post">
            <input class="mdui-textfield-input" type="text" name="keyword" placeholder="Search" />
            <input type="hidden" name="type" value="search">
        </form>
        <button class="mdui-textfield-close mdui-btn mdui-btn-icon">
            <i class="mdui-icon material-icons">close</i>
        </button>
    </div>
<!--
    <div class="mdui-textfield mdui-textfield-expandable mdui-m-l-3" style="max-width: 30%">
        <button class="mdui-textfield-icon mdui-btn mdui-btn-icon">
            <i class="mdui-icon material-icons">search</i>
        </button>
        <form action="" method="post">
            <input class="mdui-textfield-input" type="text" name="keyword" placeholder="Search" />
            <input type="hidden" name="type" value="search">
        </form>
        <button class="mdui-textfield-close mdui-btn mdui-btn-icon">
            <i class="mdui-icon material-icons">close</i>
        </button>
    </div>
-->
    <table class="mdui-table mdui-textfield">
        <thead>
            <tr>
                <th>#</th>
                <th>标题</th>
                <th>所属板块</th>
                <th>内容</th>
                <th class="mdui-table-col-numeric">浏览数</th>
                <th class="mdui-table-col-numeric">评论数</th>
                <th>操作</th>
            </tr>
        </thead>
        <tbody>
            <?php if(is_array($topicData) || $topicData instanceof \think\Collection || $topicData instanceof \think\Paginator): $i = 0; $__LIST__ = $topicData;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <tr id="<?php echo htmlentities($vo['tid']); ?>">
                <td><?php echo htmlentities($vo['tid']); ?></td>
                <td><?php echo htmlentities($vo['subject']); ?></td>
                <td><?php echo htmlentities($forumData[$vo['fid']-1]['name']); ?></td>
                <td class="mdui-text-truncate" style="max-height: 10%;max-width: 600px;"><?php echo strip_tags($vo['content']); ?></td>
                <td class="mdui-table-col-numeric"><?php echo htmlentities($vo['views']); ?></td>
                <td class="mdui-table-col-numeric"><?php echo htmlentities($vo['comment']); ?></td>
                <td>
                    <div class="layui-btn-group">
                        <button class="layui-btn layui-btn-primary layui-btn-sm" onclick="moveTopic('#<?php echo htmlentities($vo['tid']); ?>')">移动</button>
                        <a class="layui-btn layui-btn-primary layui-btn-sm" href="<?php echo url('index/topic/update',['tid'=>$vo['tid']]); ?>">编辑</a>
                        <button class="layui-btn layui-btn-primary layui-btn-sm" onclick="del('<?php echo htmlentities($vo['tid']); ?>')">删除</button>
                    </div>
                </td>
            </tr>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
        
    </table>
    <?php echo $page; ?>
    <div class="mdui-dialog mdui-typo" id="moveTopic">
        <div class="mdui-dialog-content">
            <div class="mdui-dialog-title">移动主题 - </div>
            <form id="moveForm" class="layui-form layui-form-pane mdui-m-y-1">
                <div class="layui-form-item">
                    <select name="fid" class="mdui-select" mdui-select>
                        <?php if(is_array($forumData) || $forumData instanceof \think\Collection || $forumData instanceof \think\Paginator): $i = 0; $__LIST__ = $forumData;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <option value="<?php echo htmlentities($vo['fid']); ?>"><?php echo htmlentities($vo['name']); ?></option>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                </div>
                <input type="hidden" name="tid">
                <input type="hidden" name="type" value="move">
            </form>
        </div>
        <div class="mdui-dialog-actions">
            <button class="mdui-btn mdui-ripple" id="move">修改</button>
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
        ins = new mdui.Dialog('#moveTopic');

    $$('#forum').addClass('mdui-collapse-item-open');
    $$('#setTopic').addClass('mdui-list-item-active');

    $$('#move').on('click', function () {
        data = $$('#moveForm').serialize();
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

    function moveTopic(id) {
        var data = $$(id).find('td');

        $$('#moveTopic .mdui-dialog-title').text('移动主题 - ' + data[1].innerText + ' TID[' + data[0].innerText + ']');
        $$('#moveTopic [name="tid"]').val(data[0].innerText);
        ins.open();
    }

    function del(tid) {
        mdui.dialog({
            title: '你确定吗？',
            content: '删除此Topic',
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
                                type: 'topic',
                                id: tid,
                                __token__: '<?php echo htmlentities(app('request')->token()); ?>',
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