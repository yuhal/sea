<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017-09-29
 * Time: 14:17
 */

namespace app\site\controller;


class Index extends Base
{
    public function index()
    {
    	return $this->fetch();
    }

    public function userdata()
    {
    	return $this->fetch();
    }

    public function setup()
    {
    	$setup_list = $this->SysSetup->getAllSetupName();
    	$this->assign('setup_list',$setup_list);
    	return $this->fetch();
    }
}