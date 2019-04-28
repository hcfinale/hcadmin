<?php /*a:1:{s:68:"/data/wwwroot/wh1993/tuwen/application/install/view/index/index.html";i:1545205432;}*/ ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>安装 - MlTree Forum - 安装引导程序</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="MlTree Forum PHP 开源 轻论坛 轻社区 Material Design Thinkphp" />
    <meta name="description" content="本站是 MlTree Forum 论坛社区产品的官方交流站点。MlTree Forum是一款由Thinkphp构建、Material Design风格的轻论坛。" />
    <meta name="author" content="北林">

    <link rel="stylesheet" href="/static/css/mdui.min.css">
    <link rel="stylesheet" href="/static/css/common.css">
    <link rel="shortcut icon" href="//at.alicdn.com/t/font_579119_hold5hi4m9o.css" type="image/x-icon">
    <script src="/static/js/jquery-3.3.1.min.js"></script>
    <script src="/static/js/mdui.min.js"></script>
</head>

<body class="mdui-theme-primary-indigo mdui-theme-accent-pink">

    <div class="mdui-typo mdui-container-fluid">
        <form action="" method="POST">
            <div class="mdui-card mdui-col-xs-12 mdui-col-sm-6 mdui-col-offset-sm-3">
                <div class="mdui-card-header">
                    <img class="mdui-card-header-avatar" src="/public/static/images/LOGO.png" />
                    <div class="mdui-card-header-title">安装引导程序</div>
                    <div class="mdui-card-header-subtitle">Install</div>
                </div>
                <div class="mdui-card-content">
                    <span>安装须知：数据库如果链接错误，则不会提示任何报错！请注意。</span>
                    <h4>数据库配置</h4>
                    <div class="mdui-textfield">
                        <label class="mdui-textfield-label">数据库地址</label>
                        <input class="mdui-textfield-input" name="hostname" type="text" />
                        <div class="mdui-textfield-helper">默认为localhost可不填</div>
                    </div>
                    <div class="mdui-textfield">
                        <label class="mdui-textfield-label">数据库端口</label>
                        <input class="mdui-textfield-input" name="hostport" type="text" />
                        <div class="mdui-textfield-helper">默认为3306可不填</div>
                    </div>
                    <div class="mdui-textfield">
                        <label class="mdui-textfield-label">数据表前缀</label>
                        <input class="mdui-textfield-input" name="prefix" type="text" value="mf_" />
                        <div class="mdui-textfield-helper">默认为 mf_</div>
                    </div>
                    <div class="mdui-textfield">
                        <label class="mdui-textfield-label">数据库名</label>
                        <input class="mdui-textfield-input" name="database" type="text" required/>
                    </div>
                    <div class="mdui-textfield">
                        <label class="mdui-textfield-label">数据库用户名</label>
                        <input class="mdui-textfield-input" name="datausername" type="text" required/>
                    </div>
                    <div class="mdui-textfield">
                        <label class="mdui-textfield-label">数据库密码</label>
                        <input class="mdui-textfield-input" name="datapassword" type="text" required />
                    </div>
                    <h4>管理员配置</h4>
                    <div class="mdui-textfield">
                        <label class="mdui-textfield-label">用户名</label>
                        <input class="mdui-textfield-input" name="username" type="text" required/>
                    </div>
                    <div class="mdui-textfield">
                        <label class="mdui-textfield-label">邮箱</label>
                        <input class="mdui-textfield-input" name="email" type="email" required/>
                    </div>
                    <div class="mdui-textfield">
                        <label class="mdui-textfield-label">密码</label>
                        <input class="mdui-textfield-input" name="password" type="text" required/>
                    </div>

                </div>
                <div class="mdui-card-actions">
                    <button class="mdui-btn mdui-ripple" type="reset">取消</button>
                    <button class="mdui-btn mdui-ripple" type="submit">确定</button>
                </div>
            </div>
        </form>
    </div>


    <footer class="mlt-footer">
        <p>Powered by
            <a href="https://forum.mltree.top" target="_blank"> MlTree Forum</a> | All Rights Reserved © MlTree Forum | 运行时间:0.9422s |
            <script type="text/javascript" src="https://api.kingsr.cc/api/hitokoto/hitencode"></script>
            <script>hitokoto()</script>
        </p>
        <a class="mdui-float-right link" href="http://www.miitbeian.gov.cn" target="_blank">桂ICP备16007573号 - 1</a>
    </footer>
    <script>
        mdui.mutation()
        var $$ = mdui.JQ;
        /**
        mdui.alert(`
        安装需知<br>此程序的版权所有归MlTree团队。开源版本的服务，不涉及任何售后服务。<br>程序的最终解释权归MlTree所有。
        `);
        **/
    </script>
</body>

</html>