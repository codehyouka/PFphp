<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TerminalSetting
 *
 * @author pein
 */
namespace PFphp\Console\Config;
use PFphp\FileManager\Asset\Path;
use PFphp\Console\Component\Setting\SytemTerminalTemplate;
use PFphp\FileManager\Filesystem;
class SystemSetting {
    //put your code here
    private $config_file;

    public function __construct() {
        $this->config_file=Path::join(__DIR__, "/Setting/Default/modulemain.class.php");
    }
    
    public function isVerifyEcosystem(){
        
        return Filesystem::isFileExists($this->config_file);
    }

    public function getFileSetting(){
        return $this->config_file;
    }
    
}
