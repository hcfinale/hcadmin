<?php
namespace app\index\validate;

use think\Validate;

class Resource extends Validate
{
    protected $rule = [
        'id'   => 'require',
        'title' => 'require',
        'resource_url'	=> 'require',
    ];

    protected $scene = [
        'create' => ['id','title','resource_url'],
    ];
}