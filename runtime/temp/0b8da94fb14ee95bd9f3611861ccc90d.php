<?php /*a:7:{s:36:"./template/default/ebook\create.html";i:1552897955;s:43:"./template/default/common\forum_public.html";i:1545268338;s:37:"./template/default/common\header.html";i:1552284354;s:24:"template/fullscreen.html";i:1545200233;s:42:"./template/default/common\topbar_user.html";i:1546413419;s:37:"./template/default/common\topbar.html";i:1551150421;s:37:"./template/default/common\footer.html";i:1552289231;}*/ ?>
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
        <a href="<?php echo url('index/index'); ?>" class="mdui-typo-title">Python</a>
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
</div> <?php else: ?> <!-- 站点导航部分 -->
<header class="mdui-appbar mdui-appbar-fixed">
    <div class="mdui-toolbar mdui-color-theme">
        <a href="javascript:;" class="mdui-btn mdui-btn-icon" mdui-drawer="{target:'#mobile-menu',overlay:true,swipe:true}">
            <i class="mdui-icon material-icons">menu</i>
        </a>
        <a href="<?php echo url('index/index'); ?>" class="mdui-typo-title">Python</a>
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
    <h2>发布书籍</h2>
    <div class="mdui-divider"></div>
    <form enctype='multipart/form-data'>
        <div class="mdui-row mdui-m-y-3">
            <div class="mdui-col-xs-12">
                <select lay-ignore name="fid" class="mdui-select" mdui-select="{position: 'bottom'}" required>
                    <?php if(is_array($forum) || $forum instanceof \think\Collection || $forum instanceof \think\Paginator): $i = 0; $__LIST__ = $forum;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <option value="<?php echo htmlentities($vo['fid']); ?>"><?php echo htmlentities($vo['name']); ?></option>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </select>
            </div>
        </div>

        <div class="mdui-row mdui-m-y-3">
            <label class="mdui-textfield-label">电子书名称</label>
            <input name="name" class="mdui-textfield-input" type="text" placeholder="title" max="60" required/>
        </div>
        <div class="mdui-row mdui-textfield mdui-m-y-3">
            <label class="mdui-textfield-label">描述</label>
            <textarea name="description" class="mdui-textfield-input"></textarea><?php echo token(); ?>
        </div>
        <input type="hidden" name="sign" value="<?php echo htmlentities($attaSign); ?>">
        <input id="eurl" type="hidden" name="ebook_url" value="">
        <input id="eimgurl" type="hidden" name="images" value="/public/static/images/ebook_default.jpg">
    </form>
    <div class="mdui-row">
        <div class="mdui-col-xs-12">
            <div class="layui-form-item">
                <label class="layui-form-label"></label>
                <button id="upebook" title="上传电子书" class="layui-btn layui-btn-primary">
                    <i class="layui-icon layui-icon-read" style="font-size: 30px; color: #1E9FFF;"></i>
                        点击上传电子书
                </button>
            </div>
            <div class="layui-form-item">
                <a id="upebookimg" class="mdui-hidden">
                    <img src="/public/static/images/ebook_default.jpg" alt="" id="preview" width="30%" height="auto" />
                </a>
                <p>电子书文件上传大小不得超过32M，如有需要请联系管理员QQ：3127176962</p>
            </div>
        </div>
    </div>
    <div>
        <button id="create" class="mdui-btn mdui-color-theme mdui-float-right">发布电子书</button>
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
<script src="/public/static/js/simplemde.min.js"></script>
<script>
    var option = {
        uid: "<?php echo session('uid'); ?>",
        url: '<?php echo url("index/ebook/create"); ?>',
        ebookUrl: "<?php echo url('index/ebook/upebook'); ?>",
        ebookImgUrl: "<?php echo url('index/ebook/upebookimg'); ?>",
    };

    layui.use(['upload', 'form','layer'], function() {
        var upload = layui.upload,
            form = layui.form,
            layer = layui.layer;
        var $$ = mdui.JQ;
        //图片上传
        var uploadInst = upload.render({
            elem: '#upebookimg'
            , accept: 'images'
            ,acceptMime: 'image/*'
            , field: 'ebookimg' //后台控制器中接受的参数，必须
            ,auto:true // 自动上传
            ,url: option.ebookImgUrl //上传接口
            ,before:function (obj) {
                  console.log(obj);
                  // 预览
                  obj.preview(function(index,file,result) {
                      $('#preview').attr('src',result); //图片链接 base64
                  });
              }
            ,done: function (res) {
                if (res.code == 0) {
                    layer.msg('上传成功！', {
                        icon: 1,
                        end: function () {
                            $$('#preview').attr('src', res.url);
                        }
                    });
                    $$('#eimgurl').val(res.ebookurl);
                }
            }
            ,error: function () {

            }
        });
        //电子书上传
        var uploadebook = upload.render({
            elem: '#upebook'
            , accept: 'file'
            , field: 'ebook' //后台控制器中接受的参数，必须
            ,auto:true // 自动上传
            ,url: option.ebookUrl //上传接口
            ,before: function(obj){
                layer.load();//上传loading
            }
            ,done: function (res,index,upload) {
                if (res.code == 0) {
                    layer.msg('上传成功！');
                    $$('#upebookimg').toggleClass('mdui-hidden');
                    $$('#eurl').val(res.ebookurl);
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
            var submitData = $$('form').serialize();
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
</script>  <?php echo $option['siteFooterJs']; ?>
</body>

</html>