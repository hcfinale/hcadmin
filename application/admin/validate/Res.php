<?php
namespace app\admin\validate;

use think\Validate;

class Res extends Validate
{
    protected $rule = [
        'pid'   => 'require',
        'fid'   => 'require',
        'title' => 'require',
        'resource_url'	=> 'require',
    ];

    protected $scene = [
        'create' => ['pid','fid','title','resource_url'],
    ];
}