<?php /*a:1:{s:35:"./template/default/wxpay\index.html";i:1565663513;}*/ ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Javascript 二维码生成库：QRCode</title>
    <script type="text/javascript" src="/public/static/js/jquery-3.3.1.min.js"></script>
    <!-- <script type="text/javascript" src="/public/static/js/qrcode.min.js"></script> -->
    <style type="text/css">
        .center{text-align: center;}
    </style>
</head>
<body>
<h2 class="center">微信支付</h2>
<div class="center">
    <img id="img" src="/<?php echo htmlentities($qrCode_url); ?>" alt="" width="50%" />
    <br />
    <div class="onqr">
        <input type="hidden" id="out_trade_no" value="<?php echo htmlentities($product_id); ?>" >
    </div>
</div>
<script type="text/javascript">
    // 产看订单状态
    /**
    var time = setInterval("check()",3000);    //3秒查询一次是否支付成功
    function check() {
        var url = "<?php echo url('/index/Wxpay/orderstate'); ?>";
        var out_trade_no = $("#out_trade_no").val();
        var param = {'out_trade_no':out_trade_no};
        $.post(url,param,function(data){
            var obj = eval(data);
            if (obj.trade_state == 'SUCCESS') {
                time = window.clearInterval(time);
                $(".onqr").hide();
                // 支付成功把二维码替换成支付成功图标
                $("#img").attr('src','/public/wxpay/images/success.png');
            }else{
                // console.log(obj);
                console.log('你还没付款，请支付！');
            }
        });
    }
    **/
</script>
</body>
</html>