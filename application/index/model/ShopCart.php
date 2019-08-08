<?php
namespace app\index\model;

use think\Model;
use think\Db;

class ShopCart extends Model
{
    protected $pk = 'sid';
    protected $name = 'ShopCart';
    // 加入到购物车
    public function addShopCart($fid){
        $shopres = $this->where(['uid'=>session('uid'),'fid'=>$fid])->field('sid,uid,fid')->find();
        if ($shopres){
            return ['false','msg'=>'这个栏目已经在购物城中了'];
        }else{
            /**
             *  启动事物的一种方法
             */
            // 启动事务
            Db::startTrans();
            try {
                $res = Db::name('forum')->where(['fid'=>$fid])->field('fid,money')->find();
                $res['uid'] = session('uid');
                $res['create_time'] = time();
                $this->allowField(true)->save($res);
                // 提交事务
                Db::commit();
                return [true,'msg'=>'插入购物车成功'];
            } catch (\Exception $e) {
                // 回滚事务
                Db::rollback();
                return [false,'msg'=>'数据插入失败，执行数据回滚程序。'];
            }
        }
    }
    // 查看购物车中的商品
    public function selectCart(){
        $uid = session('uid');
        $res = $this->alias('s')->where(['s.uid'=>$uid,'s.ispay'=>'0'])->join('forum fm','s.fid=fm.fid')->field('s.sid,s.uid,s.fid,s.money,fm.pid,fm.name')->select();
        return $res;
    }
    // 删除商品
    public function delectCart($sid){
        if (is_array($sid)) {
            $date = $this->all($sid);
        }else{
            $date = $this->get($sid);
        }
        if ($date) {
            $res = $this->destroy($sid);
            return [true,'code'=>'1001','msg'=>'删除商品成功'];
        }else{
            return [false,'code'=>'1004','msg'=>'此主建不存在，操作不合法。'];
        }
    }
}
