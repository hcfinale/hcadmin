<?php

namespace app\index\controller;
/**
 * 微信支付帮助库
 * ====================================================
 * 命名空间 com\wxpay\+类名+_pub
 * 接口分三种类型：
 * 【请求型接口】--Wxpay_client_
 * 		统一支付接口类--UnifiedOrder
 * 		订单查询接口--OrderQuery
 * 		退款申请接口--Refund
 * 		退款查询接口--RefundQuery
 * 		对账单接口--DownloadBill
 * 		短链接转换接口--ShortUrl
 * 【响应型接口】--Wxpay_server_
 * 		通用通知接口--Notify
 * 		Native支付——请求商家获取商品信息接口--NativeCall
 * 【其他】
 * 		静态链接二维码--NativeLink
 * 		JSAPI支付--JsApi
 * =====================================================
 * 【CommonUtil】常用工具：
 * 		trimString()，设置参数时需要用到的字符处理函数
 * 		createNoncestr()，产生随机字符串，不长于32位
 * 		formatBizQueryParaMap(),格式化参数，签名过程需要用到
 * 		getSign(),生成签名
 * 		arrayToXml(),array转xml
 * 		xmlToArray(),xml转 array
 * 		postXmlCurl(),以post方式提交xml到对应的接口url
 * 		postXmlSSLCurl(),使用证书，以post方式提交xml到对应的接口url
 */

use think\Controller;

class Wxpay extends Controller{
    /**
     * 用户可以看到的订单支付表单页面，目前只有一个二维码而已。
     * @return type
     */
    public function index() {
        ini_set('date.timezone', 'Asia/Shanghai');
        require_once('./extend/wxpay/Autoloader.php');
        $notify = new \NativePay();
        //模式二
        /**
         * 流程：
         * 1、调用统一下单，取得code_url，生成二维码
         * 2、用户扫描二维码，进行支付
         * 3、支付完成之后，微信服务器会通知支付成功
         * 4、在支付成功通知中需要查单确认是否真正支付成功（见：wxpayNotify方法）
         */
        $input  = new \WxPayUnifiedOrder();
        $input->SetBody("啊咿呀哟商城订单");
        $input->SetOut_trade_no(\WxPayConfig::$appid . mt_rand(1000, 9999));
        $input->SetTotal_fee("1");
        $input->SetTime_start(date("YmdHis"));
        $input->SetTime_expire(date("YmdHis", time() + 300));//有效期最少5分钟
        $input->SetGoods_tag("blog.kunx.org");

        $url    = \think\Url::build('wxpayNotify', '', true, true);
        $input->SetNotify_url($url);

        $input->SetTrade_type("NATIVE");
        $input->SetProduct_id("100");
        $result = $notify->GetPayUrl($input);
        $url2   = $result["code_url"];
        $url2   = base64_encode($url2);

        //渲染一个视图，参数用于获取验证码。
        return $this->fetch('', ['text' => $url2]);
    }

    /**
     * 二维码。
     * @param string $text
     * @return png
     */
    public function qrcode($text) {
        \think\Loader::import('qrcode.qrcode');
        $text = base64_decode($text);
        return \QRcode::png($text);
        exit;
    }

    /**
     * 微信通知页面。
     */
    public function wxpayNotify() {
        ini_set('date.timezone', 'Asia/Shanghai');
        \think\Loader::import('wxpay.Autoloader');
        error_reporting(E_ERROR);

        //初始化日志
        $logHandler = new \CLogFileHandler("../logs/" . date('Y-m-d') . '.log');
        \Log::Init($logHandler, 15);
        \Log::DEBUG("begin notify");

        //在PayNotifyCallBack中重写了NotifyProcess，会发起一个订单支付状态查询，其实也可以不去查询，因为从php://input中已经可以获取到订单状态。file_get_contents("php://input")
        //$notify = new \WxPayNotify();
        $notify = new \PayNotifyCallBack();
        $notify->Handle(false);
        $result = $notify->GetValues();
        if ($result['return_code'] == 'SUCCESS') {
            //订单支付完成，修改订单状态，发货。
        }
        \Log::DEBUG("end notify");
        \Log::INFO(str_repeat("=", 20));
    }
}