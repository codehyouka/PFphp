<?php

namespace PFphp\FileManager;

 class DirectoryStructure {
    #code
    protected $dir;
    protected $default_dir;
    protected $module_dir;
    public function __construct(){
   //     self::dir=__DIR__;
        $this->default_dir=__DIR__;
        $this->module_dir="";
    }
    
  
    public static function getRootDirectory(){
       
        $rep_file=preg_replace("/((vendor\/hyoukageass\/PFphp\/library\/PFphp\/FileManager)|(vendor\\\hyoukageass\\\PFphp\\\library\\\PFphp\\\FileManager))/", "", dirname(__FILE__));
        return $rep_file;
    }
     public static function getVendorDirectory(){
        
        $rep_file=preg_replace("/((hyoukageass\/PFphp\/library\/PFphp\/FileManager)|(hyoukageass\\\PFphp\\\library\\\PFphp\\\FileManager))/", "", dirname(__FILE__));
        return $rep_file;
    }
}
