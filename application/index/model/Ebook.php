<?php
namespace app\index\model;

use think\Model;
use think\Db;
use app\index\model\User;
use app\index\validate\Ebook as EbookValidate;

class Ebook extends Model
{
    protected $pk = 'eid';
    protected $autoWriteTimestamp = true;
    
    public function getClosedAttr($val)
    {
        $data = [false,true];
        return $data[(int)$val];
    }

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
        $data = topic::where('subject|content', 'like', '%'.$keyword.'%')->select();
        foreach ($data as $key => $value) {
            $value['content'] = strip_tags(htmlspecialchars_decode($value['content']));

            $value['time_format'] = time_format($value['create_time']);
            $value['userData'] =Db::name('user')->where('uid', $value['uid'])->field('username,avatar')->find();
            $data[$key] = $value;
        }
        return $data;
    }

    /**
     * 获取指定类型的指定页码帖子列表
     * @param [int] $page
     * @param [string] $type [ebook]
     */
    public function EbookList($page, $type, $fid=0)
    {
        $max = Option::getValue('forumNum');
        switch ($type) {
            case 'ebook':
                if ($fid == 0) {
                    $ebookData = ebook::page('ebook')->where('status', 1)->page($page, $max)->order('create_Time DESC')->select();
                } else {
                    $ebookData = ebook::page('ebook')->where('status', 1)->where('fid', $fid)->page($page, $max)->order('create_Time DESC')->select();
                }
                $count = ebook::page('ebook')->where('status', 1)->count('eid');
                $pages = ceil($count / $max);
                break;

            default:
                if ($fid == 0) {
                    $ebookData = ebook::page($page, $max)->order('create_Time DESC')->select();
                } else {
                    $ebookData = ebook::page($page, $max)->where('fid', $fid)->order('create_Time DESC')->select();
                }
                $count = ebook::count('eid');
                $pages = ceil($count / $max);
                break;
        }
        //数据处理（content等去除标签)
        $user = new User;
        foreach ($ebookData as $key => $value) {
            // $value['content'] = strip_tags(htmlspecialchars_decode($value['content']));
            $value['time_format'] = time_format($value['create_time']);
            $value['userData'] = $user->where('uid', $value['uid'])->field('username,avatar')->find();
            $value['forumName'] = Db::name('forum')->where('fid', $value['fid'])->field('name')->find()['name'];
            $value['Badge'] = outBadge($value);
        }
        return [$ebookData,$pages];
    }

    /**
     * 创建Topic，返回创建后的eid
     * @param [int] $uid [创建者uid，一般传入session.uid]
     * @param [array] $data [Ebook数据，包含__token__等]
     * @return [array] [false|true,msg|tid] [返回数组包括是否创建成功，以及附加信息，成返回tid]
     */
    public function found($uid, $data)
    {
        if (!User::isLogin()) {
            return [false,'未登录'];
        }
        $user = new User;
        $userObj = $user->getInfor($uid);
        if (!$user->allowCreate($userObj['uid'], $data['fid'])) {
            return [false,'无权限'];
        }
        $validate = new EbookValidate();
        if (!$validate->scene('create')->check($data)) {
            return [false,$validate->getError()];
        }
        $Ebook = new Ebook;
        $data['uid'] = $uid;
        $data['userip'] = '';
        $Ebook->allowField(true)->save($data);
        $eid = $Ebook->eid;
        $user = User::get($uid);
        $user->ebooks += 1;
        $user->save();
        return [true,$eid];
    }

    /**
     * 设置指定Topic
     * @param [string] $type [可选值：move|top|essence|closed]
     * @param [int] $tid [指定操作TopicId]
     * @param [int] $fid [参数仅在move类型下有用，指定将要移动至的fid]
     * @return [array]
     */
    public function setTopic($type, $tid, $fid=0)
    {
        if (empty($tid)) {
            return [false,'Tid不能为空'];
        }
        switch ($type) {
            case 'move':
                if (empty($fid)) {
                    return [false,'Fid不能为空'];
                }
                $topic = Topic::get($tid);
                if (empty($topic)) {
                    return [false,'指定Tid不存在'];
                }
                $forum = Db::name('forum')->where('fid', $fid)->find();
                if (empty($forum)) {
                    return [false,'指定Fid不存在'];
                }
                $topic->fid = $fid;
                $topic->save();
                $forum = Db::name('forum')
                            ->where('fid', $fid)
                            ->setInc('topics');
                return [true];
                break;
            case 'top':
                $topic = Topic::get($tid);
                if (empty($topic)) {
                    return [false,'指定Tid不存在'];
                }
                $topic->tops == 1 ? $topic->tops = 0 : $topic->tops = 1;
                $topic->save();
                return [true];
            case 'essence':
                $topic = Topic::get($tid);
                if (empty($topic)) {
                    return [false,'指定Tid不存在'];
                }
                $topic->essence == 1 ? $topic->essence = 0 : $topic->essence = 1;
                $topic->save();
                return [true];
            case 'closed':
                $topic = Topic::get($tid);
                if (empty($topic)) {
                    return [false,'指定Tid不存在'];
                }
                $topic->closed == 1 ? $topic->closed = 0 : $topic->closed = 1;
                $topic->save();
                return [true];
            default:
                return [false,'Null'];
                break;
        }
    }
}
