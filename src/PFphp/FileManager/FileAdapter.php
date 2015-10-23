<?php

namespace PFphp\FileManager;

abstract class FileAdapter {
    #code
    protected $dir;
    protected $default_dir;
    protected $module_dir;
    public function __construct(){
        $this->dir=__DIR__;
        $this->default_dir=__DIR__;
        $this->module_dir="";
    }
    
    protected function init(){
     //   $this->default_dir=$dir;
    }
    
    protected function getRootDirectory(){
        
        $rep_file=preg_replace("/((vendor\/hyoukageass\/PFphp\/src\/PFphp\/FileManager)|(vendor\\\hyoukageass\\\PFphp\\\src\\\PFphp\\\FileManager))/", "", $this->dir);
        return $rep_file;
    }
     protected function getVendorDirectory(){
        
        $rep_file=preg_replace("/((hyoukageass\/PFphp\/src\/PFphp\/FileManager)|(hyoukageass\\\PFphp\\\src\\\PFphp\\\FileManager))/", "", $this->dir);
        return $rep_file;
    }
}
