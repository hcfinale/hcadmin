<?php
namespace app\admin\model;

use think\Model;
use think\Db;
use app\index\model\User;
use app\admin\validate\Res as ResValidate;

class Res extends Model
{
    protected $pk = 'id';
    protected $name = 'resource';
    protected $autoWriteTimestamp = true;

    /**
     * 帖子搜索，同时进行格式化
     * @param [string] $keyword [关键词]
     * @return [array] $data [返回的数组格式结果]
     */
    public function Search($keyword = '')
    {
        if (empty($keyword)) {
            return [];
        }
        $data = $this->where('title|description','like','%'.$keyword.'%')->select();
        foreach ($data as $key => $value) {
            $value['description'] = strip_tags(htmlspecialchars_decode($value['content']));

            $value['time_format'] = time_format($value['create_time']);
            $value['userData'] =Db::name('user')->where('uid', $value['uid'])->field('username,avatar')->find();
            $data[$key] = $value;
        }
        return $data;
    }

    /**
     * 创建Topic，返回创建后的eid
     * @param [int] $uid [创建者uid，一般传入session.uid]
     * @param [array] $data [Ebook数据，包含__token__等]
     * @return [array] [false|true,msg|tid] [返回数组包括是否创建成功，以及附加信息，成返回tid]
     */
    public function found($uid, $data)
    {
        $validate = new ResValidate();
        if (!$validate->scene('create')->check($data)) {
            return [false,$validate->getError()];
        }
        $data['uid'] = $uid;
        $this->allowField(true)->save($data);
        $resid = $this->id;
        return [true,$resid];
    }
    /**
     * @param int $id
     * @return array
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     * 获取工具资源。
     */
    public function getResTool($id = 0){
        $list = $this->where(['fid'=>$id,'pid'=>'1','status'=>'1'])->order('sort desc')->select();
        return $list;
    }

    /**
     * @param int $id
     * @return array|\PDOStatement|string|\think\Collection
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     * 获取源代码资源。
     */
    public function getRes($id = 0){
        $list = $this->where(['fid'=>$id,'pid'=>'2','status'=>'1'])->order('sort desc')->select();
        return $list;
    }
}
