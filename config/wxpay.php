<?php
return array(
    //'配置项'=>'配置值'
    define('WEB_HOST', 'http://www.hcadmin123.com'),
    /*微信支付配置*/
    'WxPayConf_pub'=>array(
        'APPID' => 'wx35757b8dde0f2a78',
        'MCHID' => '1533074101',
        'KEY' => 'yr0YOqr9sOJnK9Hpe9i7Gk2H7XOqlibd',
        'APPSECRET' => 'fd2989c0e2b697ae1bf1abc864e9e4e0',
        'SSLCERT_PATH'=>'pay/wxpay/cert/apiclient_cert.pem',              //你下载下下来存放你服务器的地址
        'SSLKEY_PATH'=> 'pay/wxpay/cert/apiclient_key.pem',              //你下载下下来存放你服务器的地址
        'NOTIFY_URL' =>  WEB_HOST.'/extend/WXpay/example/notify',
        'CURL_TIMEOUT' => 30
    )
);