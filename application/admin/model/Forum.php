<?php
namespace app\admin\model;

use think\Model;
use think\Db;

class Forum extends Model
{
    protected $name = 'forum';
    protected $pk = 'fid';
    protected $autoWriteTimestamp = true;
    protected $updateTime = false;
    public function listTree(){
        $data = $this->where('status',1)
            ->select();
        return $this->sortTree($data);
    }
    public function sortTree($data,$pid = 0,$level = 0){
        static $arr = array();
        foreach ($data as $k => $v){
            if($v['pid']==$pid){
                $v['level'] = $level;
                $arr[] = $v;
                $this->sortTree($data,$v['fid'],$level+1);
            }
        }
        return $arr;
    }

    public function getListss($fid = 1){
        $datas = $this->where(['pid'=>$fid,'status'=>1])
            ->order('sort desc')
            ->select();
        foreach ($datas as $sk => $sv){
            $datas[$sk]['child'] = array();
            $datasan = $this->where(['pid'=>$sv['fid'],'status'=>1])
                ->order('sort desc')
                ->select();
            if ($datasan){
                $datas[$sk]['child'] = $datasan;
            }
        }
        return $datas;
    }
    // 获取子集栏目
    public function getColumn($fid = 1){
        $columnnow = $this->where(['fid'=>$fid,'status'=>1])
            ->field('fid,pid,name,introduce')
            ->find();
        return $columnnow;
    }

    // 首页遍历全部栏目,使用的是后面的那个，这个可能用不到了。
    public function getNormalCategoryByParentId($ids = 0){
        $data = [
            'pid'   =>  $ids,
            'status'=> 1,
        ];
        $order = [
            'sort'  => 'desc',
            'fid'    =>  'desc',
        ];
        $result = $this->where($data)
            ->order($order)
            ->select();
        return $result;
    }
    // 前台首页导航
    public function groupCategory($id = 0){
        $list=$this->where(['pid'=>$id,'status'=>'1'])->order('sort desc')->select();
        $arr = array();
        if (!empty($list)){
            foreach($list as $v){
                if($v['pid'] == $id){
                    $v['childs'] = self::groupCategory($v['fid']);
                    $arr[] = $v;
                }
            }
        }
        return $arr;
    }
}
