<?php

// +----------------------------------------------------------------------
// | LinkPHP [ Link All Thing ]
// +----------------------------------------------------------------------
// | Copyright (c) 2016-2017 http://linkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liugene <liujun2199@vip.qq.com>
// +----------------------------------------------------------------------
// |               映射文件
// +----------------------------------------------------------------------

return [
    //psr4命名空间注册
    'autoload_namespace_psr4'   =>  [
	    'app\\'         =>  [
            ROOT_PATH . 'src/application'
        ],
        'bin\\'         =>  [
            ROOT_PATH . 'bin'
        ],
        'linkphp\\'               =>  [
            ROOT_PATH . 'vendor/linkphp/framework/src/linkphp'
        ],
    ],
    //psr0命名空间
    'autoload_namespace_psr0' => [
        //'命名空间' => '映射路径地址'
    ],
    //指定自动加载机制排序
    'autoload_namespace_file' => [
        //'文件名' => '映射路径地址'
        'defined'                 => ROOT_PATH . 'vendor/linkphp/framework/src/define.php',
        'app_func'                => ROOT_PATH . 'conf/common.php',
        'framework_func'          => ROOT_PATH . 'vendor/linkphp/framework/src/helper.php'
    ],
    'class_autoload_map' => [
        //'类名' => '类文件地址'
        'Db'    =>   ROOT_PATH . 'vendor/linkphp/framework/src/linkphp/facade/Db.php',
        'Console'    =>   ROOT_PATH . 'vendor/linkphp/framework/src/linkphp/facade/Console.php',
        'Component'  =>   ROOT_PATH . 'vendor/linkphp/framework/src/linkphp/facade/Component.php',
        'Definition'  =>   ROOT_PATH . 'vendor/linkphp/framework/src/linkphp/facade/Definition.php',
        'Event'  =>   ROOT_PATH . 'vendor/linkphp/framework/src/linkphp/facade/Event.php',
        'HttpRequest'  =>   ROOT_PATH . 'vendor/linkphp/framework/src/linkphp/facade/HttpRequest.php',
        'Config'  =>   ROOT_PATH . 'vendor/linkphp/framework/src/linkphp/facade/Config.php',
        'Router'  =>   ROOT_PATH . 'vendor/linkphp/framework/src/linkphp/facade/Router.php',
        'Error'  =>   ROOT_PATH . 'vendor/linkphp/framework/src/linkphp/facade/Error.php',
    ],
];