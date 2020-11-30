<?php namespace Modules\User\Config;

use CodeIgniter\Config\BaseConfig;

class Config extends BaseConfig
{
    public $viewPath;

    public function __construct()
    {
        $this->viewPath = str_replace('\\Config', '', __NAMESPACE__).'\\Views\\';
    }
}