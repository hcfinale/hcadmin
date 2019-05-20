<?php
namespace app\index\model;

use think\Model;
use think\Db;

class ShopCart extends Model
{
    protected $pk = 'sid';
    // 加入到购物车
    public function addShopCart($fid){
        $shopres = $this->where(['uid'=>session('uid'),'fid'=>$fid,'ispay'=>'0'])->field('sid,uid,fid')->find();
        if ($shopres){
            return false;
        }else{
            /**
             *  启动事物的一种方法
             */
            /*
            Db::transaction(function () {
            Db::name('forum')->where(['fid'=>$fid])->field('fid,pid,money')->find();
            Db::table('think_user')->delete(1);
            });
            */
            // 启动事务
            Db::startTrans();
            try {
                $res = Db::name('forum')->where(['fid'=>$fid])->field('fid,money')->find();
                $res['uid'] = session('uid');
                $result = Db::name('shop_cart')->insert($res);
                // 提交事务
                Db::commit();
                return $result;
            } catch (\Exception $e) {
                // 回滚事务
                Db::rollback();
                return false;
            }
        }
    }
    // 查看购物车中的商品
    public function selectCart(){
        $uid = session('uid');
        $res = $this->alias('s')->where(['s.uid'=>$uid,'s.ispay'=>'0'])->join('forum fm','s.fid=fm.fid')->field('s.sid,s.uid,s.fid,s.money,fm.pid,fm.name')->select();
        return $res;
    }
}
