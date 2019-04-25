<?php
namespace app\index\controller;

use app\index\controller\Base;
use app\index\model\Option;
use app\index\model\Topic;
use app\admin\model\Forum;
use app\common\model\Message;
use app\index\model\User;
use think\Config;
use think\Request;

class Index extends Base
{
    public function initialize(){
        parent::initialize();
        $this->forum = new Forum();
        $this->topic = new Topic();
    }

    public function index(){
        $res = $this->forum->groupCategory();
        $tops = $this->topic->getTops();
        return view('index',[
            'result'    =>  $res,
            'tops'  =>  $tops,
        ]);
    }
    // 首页一级栏目点击出现对应的所有子集栏目
    public function ajaxIndex(){
        $forumId=$this->request->param('forumId');
        $data = $this->forum->groupCategory($forumId);
        $html = '';
        foreach ($data as $v){
            foreach ($v['childs'] as $value){
                $html .= "<div class=\"mdui-col-sm-3\" style=\"height: 9.5rem\">
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
        }
        return json($html);
    }

    public function ajaxList(){
        $forumId=$this->request->param('forumId');
        $data = $this->forum->getNormalCategoryByParentId($forumId);
        $html = '';
        foreach ($data as $value){
            $html .= "<div class=\"mdui-col-sm-3\" style=\"height: 9.5rem\">
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
    // 支付接口实现
    public function wxpayindex(){
        $WXpayApi = PAY_PATH.'lib/WxPay.Api.php';
        require_once $WXpayApi;
        $input = new \WxPayUnifiedOrder();
        $input->SetBody('123');
        $input->SetAppid(Config::get("pay.wx_appid"));//appid
        $input->SetMch_id(Config::get("pay.wx_mch_id"));
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
