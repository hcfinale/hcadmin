<?php
namespace app\index\controller;

use app\index\model\User;
use think\Db;
use think\Request;

class Forum extends Base
{
    function initialize()
    {
        parent::initialize();
        $this->forum = new \app\admin\model\Forum();
    }

    public function index($fid = 1)
    {
        $data = $this->forum->where(['fid'=>$fid,'status'=>1])->find();
        $column = $this->forum->getColumn($fid);
        $option = [
            'siteDes' => $data['seoDes'],
            'siteKeywords' => $data['seoKeywords'],
        ];
        $option = $this->siteOption($data['name'],$option);
        !empty($data['notice']) ? $option['notice'] = $data['notice'] : $option['notice'];
        return view('index',[
            'fid'      => $fid,
            'option'   => $option,
            'column'   => $column,
        ]);
    }
    public function lists($fid = 1){
        $listss = $this->forum->getListss($fid);
        if (count($listss)<1){
            $this->redirect('index/forum/index',array('fid'=>$fid));
        }
        $column = $this->forum->getColumn($fid);
        $data = $this->forum->where(['fid'=>$fid,'status'=>1])->find();
        $option = [
            'siteDes' => $data['seoDes'],
            'siteKeywords' => $data['seoKeywords'],
        ];
        $option = $this->siteOption($data['name'],$option);
        !empty($data['notice']) ? $option['notice'] = $data['notice'] : $option['notice'];
        $this->assign('fid', $fid);
        $this->assign('option', $option);
        return view('lists',[
            'listss'   => $listss,
            'column'   => $column,
        ]);
    }
    // 收藏功能
    public function collect(){
        if (!User::isLogin()) {
            return json(['code'=>'200','msg'=>'收藏此栏目，请先登录','url'=>'index/user/login']);
        }
        if (request()->isPost()){
            $arr = [];
            $fid = request()->param('fid');
            $collect = new \app\index\model\User();
            $res = $collect->where('uid',session('uid'))->field('collect')->find();
            (string)$result = $res['collect'];
            $arr = explode(',',$result);
            if (in_array($fid,$arr)){
                foreach( $arr as $k=>$v) {
                    if($fid == $v){
                        unset($arr[$k]);
                    }
                }
                $arr = array_merge($arr);
                $result = implode(',',$arr);
            }else{
                $result = $fid.','.$result;
            }
            $collect->save(['collect'=>$result],['uid'=>session('uid')]);
            return json(['code'=>'200','msg'=>'操作成功']);
        }
        return json(['code'=>'200','msg'=>'非法操作']);
    }
}
