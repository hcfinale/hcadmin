<?php
namespace app\index\validate;

use think\Validate;

class Ebook extends Validate
{
    protected $rule = [
        'fid'   => 'require',
        'name' => 'require',
        'ebook_url'	=> 'require',
    ];

    protected $scene = [
        'create' => ['fid','name','ebook_url'],
    ];
}