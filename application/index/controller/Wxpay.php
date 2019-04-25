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
use think\Db;
use think\Session;
use pay\wxpay\UnifiedOrder_pub as UnifiedOrder;
use pay\wxpay\JsApi_pub as JaApi;

class Wxpay extends Controller{
    protected $wx_config=[
        'wechat_appid'=>'wx35757b8dde0f2a78',//微信公众号身份的唯一标识。审核通过后，在微信发送的邮件中查看  ||wx35757b8dde0f2a78
        'wechat_mchid'=>'1533074101',//受理商ID，身份标识 商户号  ||1533074101
        'wechat_appkey'=>'yr0YOqr9sOJnK9Hpe9i7Gk2H7XOqlibd',//商户支付密钥Key。审核通过后，在微信发送的邮件中查看  就是刚才这个
        'wechat_appsecret'=>'fd2989c0e2b697ae1bf1abc864e9e4e0',//JSAPI接口中获取openid，审核后在公众平台开启开发模式后可查看 ||自己获取

        //证书路径,注意应该填写绝对路径  不用证书也是能支付的
        'sslcert_path'=>'pay/wxpay/cert/apiclient_cert.pem',              //你下载下下来存放你服务器的地址
        'sslkey_path'=> 'pay/wxpay/cert/apiclient_key.pem',              //你下载下下来存放你服务器的地址
    ];
//    protected $this->notify_url="";   //自己定义
    protected $order_table_param=[
        'table'=>'my_orders',      //订单表名称
        'no_field'=>'order_no',     //订单号 字段名字
        'state_field'=> 'is_pay',//订单支付状态值字段名
        'amount_field'=>'amount',//订单金额值字段名
        'pay_ok'=> '1', //订单已支付状态值
        'pay_no'=> '0',  // 订单未支付状态值
        'map' => [['status' => 1] ,[ 'order_state'=>0]],  //其他订单是否可以支付的参数值
    ];
    /**
     * #User: Mikkle
     * #Email:776329498@qq.com
     * #Date:
     */
    public function _initialize(){
        ini_set('date.timezone','Asia/Shanghai');
        config($this->wx_config);
        //已登陆的设置openid  本人微信登录是在控制器里完成
        if (Session::has('open_id','html5')) $this->open_id=Session::get('open_id','html5');
    }

    public function index(){

    }
    /**
     * 统一下单方法
     * #User: Mikkle
     * #Email:776329498@qq.com
     * #Date:
     * @param array $data
     * @return bool
     */
    protected function unifiedOrder($data=[]){
        $unifiedOrder = new UnifiedOrder();
        $unifiedOrder->setParameter("openid",$this->open_id); 			// 用户openid，自己通过接口获取，正常是在用户访问页面就获取的 openid
        $unifiedOrder->setParameter("body",'商品订单号'+$data['order_no']); 		// 商品描术  表单里面添加的
        $unifiedOrder->setParameter("out_trade_no",$data['order_no'].'_'.$unifiedOrder->createNoncestr(6));  // 商户订单号
        $unifiedOrder->setParameter("total_fee",$data['amount']*100);    // 总金额   表单里面添加的
        $unifiedOrder->setParameter("notify_url",$this->notify_url);  // 通知地址 $this->notify_url自己定义  回调地址，说白了 就是通知你是否支付或者是否支付成功
        $unifiedOrder->setParameter("trade_type","JSAPI");      // 交易类型 这个不会giant
        return $unifiedOrder->getPrepayId();
    }
    /**
     * 获取JsApi$getParameters参数
     * #User: Mikkle
     * #Email:776329498@qq.com
     * #Date:
     * @param string $unified_order
     * @return string
     */
    protected function getParameters($unified_order=''){
        $jsApi= new JaApi();
        $jsApi->setPrepayId($unified_order);
        $jsApiParameters = $jsApi->getParameters();
        return $jsApiParameters;
    }

}