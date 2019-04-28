<?php /*a:5:{s:67:"/data/wwwroot/wh1993/tuwen/application/admin/view/set/resource.html";i:1555407226;s:49:"./application/admin/view/public/admin_public.html";i:1546402500;s:43:"./application/admin/view/public/header.html";i:1552446126;s:43:"./application/admin/view/public/topbar.html";i:1555385384;s:43:"./application/admin/view/public/footer.html";i:1546402746;}*/ ?>
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
        
<div class="mdui-container-fluid">
    <h1 class="mdui-m-l-3">资源 管理</h1>
    <div class="mdui-tab" mdui-tab>
        <a href="#mail-showResource" class="mdui-btn mdui-ripple">所有资源</a>
        <a href="#mail-addResource" class="mdui-btn mdui-ripple">添加资源</a>
    </div>
    <div id="mail-showResource" class="mdui-p-a-2 mdui-table-fluid mdui-typo">
        <div class="mdui-container-fluid">
            <?php if(is_array($toolRes) || $toolRes instanceof \think\Collection || $toolRes instanceof \think\Paginator): $i = 0; $__LIST__ = $toolRes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$res): $mod = ($i % 2 );++$i;if($res['pid'] != '0'): ?>
            <div class="mdui-col-xs-3" style="min-height: 13rem;">
                <div class="mdui-card">
                    <div class="mdui-card-media">
                        <img src="<?php echo htmlentities($res['img']); ?>"/>
                        <div class="mdui-card-media-covered">
                            <div class="mdui-card-primary">
                                <div class="mdui-card-primary-title"><?php echo htmlentities($res['title']); ?></div>
                                <!--<div class="mdui-card-primary-subtitle">Subtitle</div>-->
                            </div>
                        </div>
                    </div>
                    <div class="mdui-card-actions">
                        <a class="mdui-btn mdui-ripple" href="<?php echo htmlentities($res['resource_url']); ?>">下载</a>
                        <a class="mdui-btn mdui-ripple" href="javascript:;"  onclick="editorForum('#<?php echo htmlentities($res['id']); ?>')">编辑</a>
                        <a class="mdui-btn mdui-ripple" href="javascript:;" onclick="del('<?php echo htmlentities($res['id']); ?>')">删除</a>
                    </div>
                </div>
            </div>
            <?php endif; ?>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
    </div>
    <div id="mail-addResource" class="mdui-p-a-2 mdui-table-fluid mdui-typo">
        <div class="mdui-col-xs-8 mdui-col-offset-xs-2">
            <h2><?php echo htmlentities($option['siteTitle']); ?></h2>
            <div class="mdui-divider"></div>
            <form enctype='multipart/form-data' id="addresource">
                <div class="mdui-row mdui-m-y-3">
                    <div class="mdui-col-xs-6">
                        <label class="mdui-textfield-label">所属分类</label>
                        <select lay-ignore name="pid" class="mdui-select" mdui-select="{position: 'bottom'}" required>
                            <?php if(is_array($toolRes) || $toolRes instanceof \think\Collection || $toolRes instanceof \think\Paginator): $i = 0; $__LIST__ = $toolRes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($vo['pid'] == '0'): ?>
                            <option value="<?php echo htmlentities($vo['id']); ?>"><?php echo htmlentities($vo['title']); ?></option>
                            <?php endif; ?>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </select>
                    </div>
                    <div class="mdui-col-xs-6">
                        <label class="mdui-textfield-label">具体分类</label>
                        <select lay-ignore name="fid" class="mdui-select" mdui-select="{position: 'bottom'}" required>
                            <?php if(is_array($forum) || $forum instanceof \think\Collection || $forum instanceof \think\Paginator): $i = 0; $__LIST__ = $forum;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                            <option value="<?php echo htmlentities($vo['fid']); ?>"><?php echo htmlentities($vo['name']); ?></option>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </select>
                    </div>
                </div>

                <div class="mdui-row mdui-m-y-3">
                    <label class="mdui-textfield-label">资源名称</label>
                    <input name="title" class="mdui-textfield-input" type="text" placeholder="title" max="60" required/>
                </div>
                <div class="mdui-row mdui-textfield mdui-m-y-3">
                    <label class="mdui-textfield-label">描述</label>
                    <textarea name="description" class="mdui-textfield-input"></textarea><?php echo token(); ?>
                </div>
                <input id="resurl" type="hidden" name="resource_url" value="">
                <input id="resimgurl" type="hidden" name="img" value="/public/static/images/ebook_default.jpg">
            </form>
            <div class="mdui-row">
                <div class="mdui-col-xs-12">
                    <div class="layui-form-item">
                        <label class="layui-form-label"></label>
                        <button id="upres" title="上传资源" class="layui-btn layui-btn-primary">
                            <i class="layui-icon layui-icon-read" style="font-size: 30px; color: #1E9FFF;"></i>
                            点击上传上传资源
                        </button>
                    </div>
                    <div class="layui-form-item">
                        <a id="upresimg" class="mdui-hidden">
                            <img src="/public/static/images/ebook_default.jpg" alt="" id="preview" width="30%" height="auto" />
                        </a>
                        <p>文件上传大小不得超过32M，如有需要请联系管理员QQ：3127176962</p>
                    </div>
                </div>
            </div>
            <div>
                <button id="create" class="mdui-btn mdui-color-theme mdui-float-right">发布资料</button>
            </div>
        </div>
    </div>
    <div class="mdui-dialog mdui-typo" id="editorForum">
        <div class="mdui-dialog-content">
            <div class="mdui-dialog-title">编辑板块</div>
            <form id="editForm" class="layui-form layui-form-pane mdui-m-y-1">
                <input type="hidden" name="fid" id="editfid">
                <div class="layui-form-item">
                    <label class="layui-form-label">选择框</label>
                    <div class="layui-input-block">
                        <select name="pid" lay-verify="required">
                            <option value="0">顶级栏目</option>

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
                        <textarea name="introduce" required lay-verify="required"  placeholder="请输入板块描述" class="layui-textarea"></textarea>
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">权限用户组</label>
                    <div class="layui-input-block">
                        <select name="cgroup" lay-verify="required">

                        </select>
                    </div>
                    <div class="layui-form-mid layui-word-aux">默认为0(即全部用户组)，多个用户组请用,(英文逗号)隔开</div>
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
        inst = new mdui.Dialog('#editorForum');//注册对话

    var option = {
        uid: "<?php echo session('uid'); ?>",
        url: '<?php echo url("admin/set/addResource"); ?>',
        resUrl: "<?php echo url('admin/set/upRes'); ?>",
        upResImg: "<?php echo url('admin/set/upResImg'); ?>",
    };
    $$('#forum').addClass('mdui-collapse-item-open');
    $$('#resourceAll').addClass('mdui-list-item-active');
    layui.use(['upload', 'form','layer'], function() {
        var upload = layui.upload,
            form = layui.form,
            layer = layui.layer;
        //图片上传
        var uploadInst = upload.render({
            elem: '#upresimg'
            , accept: 'images'
            ,acceptMime: 'image/*'
            , field: 'resimg' //后台控制器中接受的参数，必须
            ,auto:true // 自动上传
            ,url: option.upResImg //上传接口
            ,before:function (obj) {
                console.log(obj);
                // 预览
                obj.preview(function(index,file,result) {
                    $$('#preview').attr('src',result); //图片链接 base64
                });
            }
            ,done: function (res) {
                if (res.code == 0) {
                    layer.msg('上传成功！', {
                        icon: 1,
                        end: function () {
                            $$('#preview').attr('src', res.resurl);
                        }
                    });
                    $$('#resimgurl').val(res.resurl);
                }
            }
            ,error: function (e) {
                layer.msg('上传失败！');
            }
        });
        //电子书上传
        var uploadebook = upload.render({
            elem: '#upres'
            , accept: 'file'
            , field: 'resource' //后台控制器中接受的参数，必须
            ,auto:true // 自动上传
            ,url: option.resUrl //上传接口
            ,before: function(obj){
                layer.load();//上传loading
            }
            ,done: function (res,index,upload) {
                if (res.code == 0) {
                    layer.msg('上传成功！');
                    $$('#upresimg').toggleClass('mdui-hidden');
                    $$('#resurl').val(res.resourceUrl);
                    layer.closeAll('loading');
                }
            }
            ,error: function (index, upload) {
                layer.msg('上传文件太大');
                layer.closeAll('loading');
            }
        });
        //绑定上传更新事件
        $$('#create').on('click', function() {
            //获取表单内容
            var submitData = $$('#addresource').serialize();
            console.log(submitData);
            $$.ajax({
                method: 'post',
                url: option.url,
                data: submitData,
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
                            onClosed: function() {
                                location.reload();
                            }
                        })
                    }
                }
            });
            return false;
        });

        layer.photos({
            photos: '#mf-content,#mf-comments',
            anim: 5
        });
    });

    // 栏目排序 fid
    $$("input[name='sort']").each(function () {
        $$(this).on('change',function () {
            var fid = $$(this).parents('td').siblings("input[name='fid']").val();
            var sort = $$(this).val();
            $$.ajax({
                method: 'post',
                url: '<?php echo url("admin/set/sort"); ?>',
                data: {
                    fid: fid,
                    sort: sort,
                },
                dataType: 'json',
                success: function (res) {
                    if (res.code == 200) {
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


        });
    });


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
        });

        return false;
    });

    function editorForum(id) {

        inst.open();
    }
    function del(id) {
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
                                type: 'resource',
                                id: id,
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