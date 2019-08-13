<?php
//在模型里单独设置数据库连接信息
namespace app\common\model;

use think\Model;
use think\Db;
class Order extends Model
{
    protected $pk = 'id';
    protected $name = 'Order';
    protected $autoWriteTimestamp = true;
    protected $updateTime = false;

    // 直接购买
    public function addPay($id,$orderId){
        // 启动事务，启动事务之后时间在模型中不会自动更新上去。
        Db::startTrans();
        try {
            if (is_array($id)) {
                $data = [];
                foreach ($id as $key => $value) {
                    $res = db('ShopCart')->field('sid,fid,money')->find($value);
                    $data[$key] = [
                        'sid'   =>  $res['sid'],
                        'fid'  =>  $res['fid'],
                        'amount' =>  $res['money'],
                        'uid'   =>  session('uid'),
                        'order_id'  =>  $orderId,
                        'create_time'   =>  time(),
                        'ispay' =>  0,
                    ];
                    db('ShopCart')->update(['ispay' => '1','sid'=>$value]);
                }
                $this->saveAll($data);
                $data = [];
            }else{  // 传过来的数据不合法
                return false;
            }
			// 提交事务
            Db::commit();
        } catch (\Exception $e) {
            // 回滚事务
            Db::rollback();
            return false;
        }
    }
    // 未付款再次购买页面数据查询
    public function selectAll(){
        return $this->alias('o')->leftJoin('__FORUM__ f','o.fid=f.fid')->where(['o.uid'=>session('uid'),'o.status'=>'1'])->field('f.name,o.id,o.order_id,o.sid,o.ispay,o.amount')->select();
    }
    // 未付款订单金额计算
    public function payOrder($oid,$orderId){
        if (is_array($oid)) {
            $memory = [];
            foreach ($oid as $key => $value) {
                $res = db('Order')->field('fid,ispay,amount')->find($value);
                if ($res){
                    $memory[$key] = $res['amount'];
                }
            }
            $memory = array_sum($memory);
            $oid = implode(',',$oid);
            // 启动事务，启动事务之后时间在模型中不会自动更新上去。
            Db::startTrans();
            try {
                $data = [
                    'sid'   =>  '',
                    'order_id'  =>  $orderId,
                    'oid'   =>  $oid,
                    'amount'    =>  $memory,
                    'uid'   =>  session('uid'),
                    'create_time'   =>  time(),
                    'ispay' =>  0,
                ];
                db('Order')->insert($data);
                // 提交事务
                Db::commit();
            } catch (\Exception $e) {
                // 回滚事务
                Db::rollback();
                return false;
            }
        }else{  // 传过来的数据不合法
            return false;
        }
    }
}