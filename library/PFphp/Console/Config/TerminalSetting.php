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
class TerminalSetting {
    //put your code here
    
    private  function command(){
       return Filesystem::includeOnceFile(Path::join(__DIR__, "/Setting/TeminalCommand.php"));
    }
      public  function getSystemCommand(){
       return $this->command()['system_command'];
    }
    
}
