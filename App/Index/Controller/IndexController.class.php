<?php

/**
 * --------------------------------------------------*
 *  LhinkPHP遵循Apache2开源协议发布  Link ALL Thing  *
 * --------------------------------------------------*
 *  @author LiuJun     Mail-To:liujun2199@vip.qq.com *
 * --------------------------------------------------*
 * Copyright (c) 2017 LinkPHP. All rights reserved.  *
 * --------------------------------------------------*
 *                 框架默认控制器                    *
 * --------------------------------------------------*
 */
namespace Index\Controller;
use Link\Controller;
class IndexController extends Controller{
    public function index(){
        $test = 'Linkphp.cn';
        $this->assign('linkphp',$test);
        $this->display();
        //$this->show();
    }
}

?>