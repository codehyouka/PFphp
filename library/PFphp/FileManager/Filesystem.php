<?php

namespace PFphp\FileManager;
use PFphp\FileManager\FileAdapter;

class Filesystem extends FileAdapter{
    #code
  protected static $file_content=array(
                    "1"=>"s1"
                );
    public function __construct($dirname=__DIR__){
      
   }
    
    public function getDirectory(){
        $dir_direcotry=$this->getRootDirectory();
        return $dir_direcotry;
    }
    public static function isFileExists($file=""){
       
        return static::isFileFound($file);
    }
    

    public static function getFileContent($file=""){
      return static::inFileExecute("get_contents",$file);      
    }
    
    public static  function requireFile($file=""){
        return static::inFileExecute("require",$file);
    }
    public static function includeFile($file=""){
        return static::inFileExecute("include",$file);
    }
    public static function requireOnceFile($file=""){
        return static::inFileExecute("require_once",$file);
    }
    public static function includeOnceFile($file=""){
        return static::inFileExecute("include_once",$file);
    }
}
