<?php
namespace app\index\controller;

use app\index\controller\Base;
use app\index\model\Option;
use app\index\model\Topic;
use app\admin\model\Forum;
use app\common\model\Message;
use app\index\model\User;
use think\Request;

class Index extends Base
{
    public function initialize(){
        parent::initialize();
        $this->forum = new Forum();
        $this->topic = new Topic();
    }

    public function index(){
        $data = $firstCatIds = $sedcategorys = $threecategory = $secendCatIds = [];
        // 首先获取一级栏目的id
        $categorys = $this->forum->getNormalCategoryByParentId($pid=0);
        foreach($categorys as $key => $category) {
            $firstCatIds[] = $category->fid;
            $data[$key][] = $category->fid;
            $data[$key][] = $category->name;
        }
        $fid = input('fid', 0, 'intval');
        if(in_array($fid, $firstCatIds)) { // 一级分类
            $categoryParentId = $fid;
        }elseif($fid) {
            $category = $this->forum->get($fid);
            if(!$category) {
                $this->error('数据不合法');
            }
            if (in_array($category->pid,$firstCatIds)){
                $categoryParentId = $category->pid;
            }else{
                $categoryParentId = $fid;
            }
        }else{
            $categoryParentId = 0;
        }
        //获取父类下的所有 子分类
        if($categoryParentId) {
            $sedcategorys = $this->forum->getNormalCategoryByParentId($categoryParentId);
            foreach ($sedcategorys as $threecate){
                $secendCatIds[] = $threecate->fid;
            }
            $threecategory = $this->forum->getNormalCategoryByParentId($fid);
        }
        if ($sedcategorys == $threecategory){
            $threecategory = [];
        }
        $topsData = $this->topic->where('fid',$fid)->order('tid esc')->paginate();
        $tops = $this->topic->getTops();
        return view('index',[
            'categorys'  =>  $categorys,
            'sedcategorys'  =>  $sedcategorys,
            'threecategory'    =>  $threecategory,
            'tops'  =>  $tops,
            'topsData'  =>  $topsData,
        ]);
    }

    public function lists(){
        $request = request();
        print_r($request->param('fid'));

    }
    public function Search($keyword = '', $type='topic')
    {
        $this->assign('option', $this->siteOption('搜索 - '.$keyword));
        switch ($type) {
            case 'topic':
                $topic = new Topic();
                $data = $topic->Search($keyword);
                break;
            
            default:
                return ;
                break;
        }

        return view('search', [
            'data' => $data,
            'count' => count($data),
            'keyword' => $keyword,
        ]);
    }

    public function _error()
    {
        $data = [
                    'title' => '站点正在进行闭站维护……',
                    'content' => Option::getValue('closeContent'),
                ];
        $this->assign('information', $data);
        $this->assign('option', $this->siteOption('出现错误'));
        return view('error');
    }
}
