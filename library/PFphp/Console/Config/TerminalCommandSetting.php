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
use PFphp\FileManager\Filesystem;
use PFphp\Console\Component\TerminalManager;
class TerminalCommandSetting extends TerminalManager{
    //put your code here
    
    private  function namepsace(){
       return Filesystem::includeOnceFile(Path::join(__DIR__, "/Setting/TeminalNamespace.php"));
    }
      public  function getSystemNamepsace(){
       return $this->namepsace()['system_default'];
    }
    
}
