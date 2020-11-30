<?php namespace Modules\Admin\Controllers;

use App\Controllers\BaseController;
use Modules\Admin\Config as mConfig;

class Home extends BaseController
{
    public $config;

    public function __construct()
    {
        $this->config = new mConfig\Config();
    }

    public function index()
    {
        $conf = $this->config;
        return view($conf->viewPath.'admin');
    }

    public function test()
    {
        echo 'hi Admin!';
    }

    //--------------------------------------------------------------------

}