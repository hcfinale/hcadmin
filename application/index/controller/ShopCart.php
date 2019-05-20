<?php
namespace app\index\controller;

use app\index\model\ShopCart as shoppingCart;
use app\index\model\User;
use think\App;
use traits\controller\Jump;

class ShopCart extends Base
{
    public function initialize(){
        parent::initialize();
        $this->shopcart = new shoppingCart();
    }

    public function index(){
        if (!User::isLogin()) {
            return json(['code'=>'200','msg'=>'您还没登录，请先登录','url'=>'index/user/login']);
        }
        $shopCartAll = $this->shopcart->selectCart();
        return $this->fetch('',[
            'shopCartAll'   =>  $shopCartAll,
            'column'    =>  '购物车列表',
        ]);
    }
    // 加入购物车
    public function addCart(){
        if (!User::isLogin()) {
            return json(['code'=>'200','msg'=>'您还没登录，请先登录','url'=>'index/user/login']);
        }
        if (request()->isPost()){
            $fid = input('post.fid/d'); // 强制转换为整形
            $res = $this->shopcart->addShopCart($fid);
            if ($res){
                return json(['code'=>'200','msg'=>'加入购物车成功']);
            }else{
                return json(['code'=>'200','msg'=>'已经在购物车中啦！']);
            }

        }
        return json(['code'=>'200','msg'=>'非法操作']);
    }
    // 一处购物车
    public function delCart($id){

    }
}