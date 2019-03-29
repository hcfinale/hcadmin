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
        $data  = $sedcategorys = $threecategory = $secendCatIds = [];
        $fid = input('fid', 0, 'intval');
        // 首先获取一级栏目的id
        $cateGorys = $this->forum->getNormalCategoryByParentId($pid=0);
        if ($fid != 0){
            $sedcategorys = [];
            foreach($cateGorys as $key => $cate) {
                $firstCatIds[$key][] = $cate->fid;
                $firstCatIds[$key][] = $cate->pid;
                $firstCatIds[$key][] = $cate->name;
                $firstCatIds[$key][] = $cate->img;
                if ($child = $this->forum->getNormalCategoryByParentId($fid)){
                    $sedcategorys = $child;
                    $firstCatIds[$key]['child'] = [];
                }
            }
        }else{
            $sedcategorys = [];
            foreach($cateGorys as $key => $cate) {
                $firstCatIds[$key][] = $cate->fid;
                $firstCatIds[$key][] = $cate->pid;
                $firstCatIds[$key][] = $cate->name;
                $firstCatIds[$key][] = $cate->img;
                if ($child = $this->forum->getNormalCategoryByParentId($cate->fid)){
                    $sedcategorys = $child;
                    $firstCatIds[$key]['child'] = $child;
                }
            }
        }
        $topsData = $this->topic->where('fid',$fid)->order('tid esc')->paginate();
        $tops = $this->topic->getTops();
        return view('index',[
            'categorys'  =>  $firstCatIds,
            'sedcategorys' =>  $sedcategorys,
            'threecategory'    =>  $threecategory,
            'tops'  =>  $tops,
            'topsData'  =>  $topsData,
        ]);
    }
    public function ajaxList(){
        $forumId=$this->request->param('forumId');
        $data = $this->forum->getNormalCategoryByParentId($forumId);
        $html = '';
        foreach ($data as $value){
            $html .= "<div class=\"mdui-col-sm-4\">
            <div class=\"mdui-grid-tile\">
                <a href=\"/forum/$value[fid]\">
                    <img src=\"$value[img]\"/>
                    <div class=\"mdui-grid-tile-actions\">
                        <div class=\"mdui-grid-tile-text\">
                            <div class=\"mdui-grid-tile-title mdui-text-center\">$value[name]</div>
                        </div>
                    </div>
                </a>
            </div>
        </div>";
        }
        return json($html);
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
