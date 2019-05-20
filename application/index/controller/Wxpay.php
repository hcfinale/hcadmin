<?php

namespace app\index\controller;

use app\index\controller\Base;
use app\index\model\User;
use think\Db;
use think\Session;
use wxpay\database\WxPayResults;
use wxpay\database\WxPayUnifiedOrder;
use wxpay\database\WxPayOrderQuery;
use wxpay\NativePay;
use wxpay\WxPayApi;
use wxpay\WxPayConfig;
use Predis;

class Wxpay extends Base{

    public function index(){
        if (!User::isLogin()) {
            return redirect('index\user\login');
        }
        $product_id = (time()+1).createStr(22);
        $notify = new NativePay();
        $input = new WxPayUnifiedOrder();
        $input->setBody("微信支付的东西");
        $input->setAttach("xxx");
        //$input->setOutTradeNo(WxPayConfig::MCHID.date("YmdHis"));
        $input->setOutTradeNo($product_id);
        $input->setTotalFee("1");//以分为单位,一般是要乘100的。
        $input->setTimeStart(date("YmdHis"));
        $input->setTimeExpire(date("YmdHis", time() + 600));
        $input->setGoodsTag("test");
        $input->setNotifyUrl(wxPayConfig::NOTIFY_URL);
        $input->setTradeType("NATIVE");
        //$product_id 为商品自定义id 可用作订单ID
        $input->setProductId($product_id);

        $data = [
            'order_id'  =>  $input->getOutTradeNo(),
            'uid'   =>  session('uid'),
            'amount'    =>  $input->getTotalFee(),
        ];
        $res = db('order')->insert($data);
        $result = $notify->getPayUrl($input);
        if (empty($result['code_url'])){
            $qrCode_url = '';
        }else{
            $qrCode_url = $result["code_url"];
        }
        return $this->fetch('',[
            'qrCode_url' => $qrCode_url,
            'product_id'    =>  $product_id,
        ]);
    }

    /**
     * 查看订单的状态
     */
    public function orderstate(){
        error_reporting(E_ERROR);
        ini_set('date.timezone','Asia/Shanghai');

        if(request()->param('transaction_id') != null && request()->param('transaction_id') != ""){
            $transaction_id = request()->param('transaction_id');
            $input = new WxPayOrderQuery();
            $input->setTransactionId($transaction_id);
            db('order')->where('order_id',$transaction_id)->update(['ispay'=>'1']);
            return json(WxPayApi::orderQuery($input));
        }

        if(request()->param('out_trade_no') != null && request()->param('out_trade_no') != ""){
            $out_trade_no = request()->param('out_trade_no');
            $input = new WxPayOrderQuery();
            $input->setOutTradeNo($out_trade_no);
            db('order')->where('order_id',$out_trade_no)->update(['ispay'=>'1']);
            return json(WxPayApi::orderQuery($input));
        }
    }

    /**
     * 微信支付 回调逻辑处理
     * @return string
     */
    public function notify(){
        $wxData = file_get_contents("php://input");
        //file_put_contents('/tmp/2.txt',$wxData,FILE_APPEND);
        try{
            $resultObj = new WxPayResults();
            $wxData = $resultObj->Init($wxData);
        }catch (\Exception $e){
            $resultObj ->setData('return_code','FAIL');
            $resultObj ->setData('return_msg',$e->getMessage());
            return $resultObj->toXml();
        }

        if ($wxData['return_code']==='FAIL'||
            $wxData['return_code']!== 'SUCCESS'){
            $resultObj ->setData('return_code','FAIL');
            $resultObj ->setData('return_msg','error');
            return $resultObj->toXml();
        }
        //TODO 根据订单号 out_trade_no 来查询订单数据
        $out_trade_no = $wxData['out_trade_no'];
        //此处为举例
        $input = new WxPayUnifiedOrder();
        db('order')->where('order_id',$input->getOutTradeNo())->update(['ispay'=>'1']);
        db('order')->where('order_id',$out_trade_no)->update(['ispay'=>'2']);
        $order = db('order')->where(['order_id' => $out_trade_no])->find();

        if (!$order || $order->status == 1){
            $resultObj ->setData('return_code','SUCCESS');
            $resultObj ->setData('return_msg','OK');
            return $resultObj->toXml();
        }
        //TODO 数据更新 业务逻辑处理 $order
    }
    // redis 的操作
    public function myredis(){
        $client =  new Predis\Client([
            'scheme'    =>  'tcp',
            'host'  =>  config('redis.REDIS_HOST'),
            'port'  =>  config('redis.REDIS_PORT'),
            'password'  =>  config('redis.REDIS_AUTH'),
            'database'  =>  1,
        ]);
        $client->set('han','this is my name');
        $client->rpush('mylist',['one']);
        $client->rpush('mylist',['two']);
        $client->rpush('mylist',['three']);
        $client->rpush('mylist',['fore']);
        // 查看mylist中所有的数据
        $valueAll = $client->lrange('mylist','0','-1');
        // 查找第二个push进去的数据
        $value = $client->lindex('mylist','-2');
        dump($valueAll);
    }

}