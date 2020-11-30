<?php
$pathsPath = realpath('../app/Config/Paths.php');
require_once SYSTEMPATH.'Helpers/filesystem_helper.php';

// psr4 add
$map = directory_map(__DIR__, 1);
foreach($map as $dir) {
    if(is_dir(__DIR__.DIRECTORY_SEPARATOR.$dir)) {
        $dir = substr($dir, 0, -1);
        $key = str_replace(ROOTPATH, '', $ModuleKey.'\\'.$dir);
        $this->psr4[$key] = $ModuleKey.'\\'.$dir;
    }
}