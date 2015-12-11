<?php

namespace PFphp\Console;
use PFphp\Console\Component\InitLoader;
use PFphp\Utility\Observer;
use Symfony\Component\Yaml\Yaml;
use PFphp\Console\Command\TerminalExec;
use PFphp\FileManager\Filesystem;
use PFphp\Version\Version;
use PFphp\Console\Details;
use PFphp\LibraryLoader\Console\Colors;



class Terminal extends TerminalExec{
    private $extend_method=null;
    private $FileDirectory;
    private $Colors;
    public function __construct(){
      parent::__construct();
      

       $this->Colors=new Colors();
    }
    
    
    public function init(){
     
     $name=Version::Name;
     $version=Version::Number;
     $str_cmd="Welcome to ";
     $str_cmd.=$this->Colors->printColoredString($name,"blue")." PHP Framework";
  
      $str_cmd.= "\n"; 
      $str_cmd.= "Version".$this->Colors->printColoredString($version,"yellow"); 
      $str_cmd.= "\n"; 
      echo $str_cmd;
      $this->init_terminal();
 
      
    
    }
    
    
  
    
    
}

?>