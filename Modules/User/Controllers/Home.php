<?php namespace Modules\User\Controllers;

use App\Controllers\BaseController;
use Modules\User\Config as mConfig;

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
        return view($conf->viewPath.'home');
    }

    public function test()
    {
        echo 'hi User!';
    }

    //--------------------------------------------------------------------

}