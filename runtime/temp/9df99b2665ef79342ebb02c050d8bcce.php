<?php /*a:1:{s:35:"./template/default/wxpay\index.html";i:1556418880;}*/ ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Javascript 二维码生成库：QRCode</title>
    <script type="text/javascript" src="/public/static/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="/public/static/js/qrcode.min.js"></script>
</head>
<body>
<input id="text" type="hidden" value="<?php echo htmlentities($qrCode_url); ?>" style="width:80%" /><br />
<div id="qrcode" style="width:100px; height:100px; margin-top:15px;"></div>

<script type="text/javascript">
    var qrcode = new QRCode(document.getElementById("qrcode"), {
        width : 100,
        height : 100
    });

    function makeCode () {
        var elText = document.getElementById("text");
        if (!elText.value) {
            alert("Input a text");
            elText.focus();
            return;
        }
        qrcode.makeCode(elText.value);
    }
    makeCode();
</script>
</body>
</html>