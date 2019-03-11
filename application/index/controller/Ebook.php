<?php
namespace app\index\controller;

use think\Db;
use app\index\controller\Base;
use app\index\model\Ebook as ebookModel;
use app\index\model\User;
use app\index\model\Group;
use app\index\model\Comment;
use app\index\model\Option;
use Auth\Auth;
use app\common\model\Message;

class Ebook extends Base
{
    public function index($eid)
    {
        header("Content-type: application/pdf");
        if ($eid == 0) {
            return \redirect('index/index/idnex');
        }
        $ebook = ebookModel::get($eid);
        if (empty($ebook)) {
            return $this->error('暂未找到此内容！', 'index/index/index');
        }
        $ebook->views += 1;
        $ebook->isAutoWriteTimestamp(false)->save();
        $ebook->update_time = date('Y-m-d H:i:s', $ebook->update_time);
        
        $ebook_url = 'http://'.$_SERVER['HTTP_HOST'].$ebook->ebook_url;
        header('Location: '.$ebook_url);
        exit;
    }

    public function create()
    {
        if (!User::isLogin()) {
            return redirect('index\user\login');
        }
        if (!$this->userAuth(session('uid'))) {
            $this->error('你没有权限，请联系管理员开通。','index/index/index');
        }
        if (request()->isPost()) {
            $ebook = new EbookModel;
            $res = $ebook->found(session('uid'), input('post.'));
            if ($res[0]) {
                return json([
                    'code'=>'1',
                    'message'=>'发布成功，正在跳转……',
                    'url'=>url('index/ebook/index', ['eid'=>$res[1]]),
                ]);
            } else {
                return json(\outResult(-1, $res[1]));
            }
        }
        
        $forumData = Db::name('forum')->field('fid,name,cgroup')->select();
        
        return view('create', [
            'option' => $this->siteOption('发电子书'),
            'forum' => $forumData,
            'attaSign' => createStr(30),
        ]);
    }

    public function upebook(){
        $file = request()->file('ebook');
        if (empty($file)) {
            return json(array('code'=>1,'errmsg'=>'上传失败,文件为空.'));
        }
        $info = $file->validate(['ext'=>'html,hlp,chm,txt,pdf'])->move('./public/uploads');
        // $info = $file->move('.\public\uploads');
        if ($info) {
            $path = $info->getSaveName();
            $data['ebook_url'] = '\\public\\uploads\\'.$path;
            return json(array('code'=>0,'url'=>'/public/uploads/'.$path,'msg'=>'上传成功！','ebookurl'=>$data['ebook_url']));
        } else {
            return json(array('code'=>1,'errmsg'=>'上传失败'));
        }
    }

    public function upebookimg(){
        $file = request()->file('ebookimg');
        if (empty($file)) {
            return json(array('code'=>1,'errmsg'=>'上传失败,文件为空.'));
        }
        // $image = \think\Image::open(request()->file('ebookimg'));
        // $image->crop(317, 432)->save('http://www.hcadmin123.com/cart.jpg');
        $info = $file->move('./public/uploads');
        if ($info) {
            $path = $info->getSaveName();
            $data['images'] = '\\public\\uploads\\'.$path;
            return json(array('code'=>0,'url'=>'/public/uploads/'.$path,'msg'=>'上传成功！','ebookurl'=>$data['images']));
        } else {
            return json(array('code'=>1,'errmsg'=>'上传失败'));
        }
    }
    /**
    //暂时还没有用到
    public function update($uid = 0, $tid = 0)
    {
        if ($uid == 0) {
            $uid = session('uid');
        }
        if ($uid == 0 || $tid == 0) {
            return redirect('index\index\index');
        } elseif (!User::isLogin()) {
            return $this->error('请先登录。', 'index/user/login');
        }

        //查询帖子信息
        $topic = topicModel::get($tid);
        $forumData = \think\Db::name('forum')->field('fid,name')->select();
        //查询用户信息
        $user = user::get($uid);
        //判断是否拥有权限
        $auth = new auth;

        if ($auth->check('update', $uid) || $auth->check('admin', $uid)) {
            if (!empty(input('post.'))) {
                $res = $this->validate(input('post.'), 'app\index\validate\Topic.create');
                if ($res !== true) {
                    return ['code'=>'-1','message'=>$res];
                } else {
                    $topic = new topicModel;
                    $data = [
                    'subject' => input('post.subject', '', 'htmlspecialchars'),
                    'content' => input('post.content', '', 'htmlspecialchars'),
                ];
                    $topic->update($data, ['tid'=>$tid]);
                    return json(['code'=>'1','message'=>'发布成功，正在跳转……','url'=>url('index/topic/index', ['tid'=>$tid])]);
                }
            }
            return view('update', [
                'topicData'=> $topic,
                'forum' => $forumData,
                'option' => $this->siteOption('编辑 - '.$topic->subject),
            ]);
        } else {
            return $this->error('无权限');
        }
    }
    public function set($type, $eid)
    {
        $topic = ebookModel::get($eid);
        $msgObj = new Message;
        $msg = $msgObj->getMessageList(session('uid'), 0);
        
        $this->assign('msg', ['unread'=>count($msg['data'])]);
        if ($type == 'top') {
            if (!empty($topic)) {
                $topic->tops == 1 ? $topic->tops = 0 : $topic->tops = 1 ;
                $topic->isAutoWriteTimestamp(false)->save();
                if ($topic->tops == 1) {
                    $msg = new Message;
                    $msg->addTopMsg($tid);
                }
                return $this->success('设置为置顶成功');
            }
        } elseif ($type == 'essence') {
            if (!empty($topic)) {
                $topic->essence == 1 ? $topic->essence = 0 : $topic->essence = 1 ;
                $topic->isAutoWriteTimestamp(false)->save();
                if ($topic->essence == 1) {
                    $msg = new Message;
                    $msg->addEssenceMsg($tid);
                }
                return $this->success('设置为精华成功');
            }
        } elseif ($type == 'close') {
            if (!empty($topic)) {
                $topic->closed == 1 ? $topic->closed = 0 : $topic->closed = 1 ;
                $topic->isAutoWriteTimestamp(false)->save();
                return $this->success('设置为关闭成功');
            }
        }
    }
    **/
}
