<?php
namespace app\index\controller;

use app\index\controller\Base;
use think\Db;
use think\Request;

class Forum extends Base
{
    public function index($fid = 1)
    {
        $forum = new \app\admin\model\Forum();
        $data = $forum->where('fid',$fid)->find();
        $column = $forum->getColumn($fid);
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
        $forum = new \app\admin\model\Forum();
        $listss = $forum->getListss($fid);
        if (count($listss)<1){
            $this->redirect('index/forum/index',array('fid'=>$fid));
        }
        $column = $forum->getColumn($fid);
        $data = $forum->where('fid',$fid)->find();
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
}
