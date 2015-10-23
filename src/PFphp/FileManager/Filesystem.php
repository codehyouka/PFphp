<?php

namespace PFphp\FileManager;
use PFphp\FileManager\FileAdapter;

class Filesystem extends FileAdapter{
    #code
  private $file_content;
    public function __construct($dirname=__DIR__){
      $this->init($dirname);
  parent::__construct();
    }
    
      public function getDirectory(){
        $dir_direcotry=$this->getRootDirectory();
        return $dir_direcotry;
    }
    public function setFileContent($file=""){
        if(!file_exists($file)){
        throw new \Exception("The File (".$file.") doesn`t exists");
       }else{
        $this->file_content=$file;
       }
    }
    public function getFileContent($file=""){
      return file_get_contents($this->file_content);
    }
    public function getFileName($file=""){
       
       if(!file_exists($file)){
        throw new \Exception("The File (".$file.") doesn`t exists");
       }

        return $file;
    }
    public function requireFile($file=""){
      if(!file_exists($file)){
        throw new \Exception("The File (".$file.") doesn`t exists");
       }
    }
    public function includeFile($file=""){
       if(!file_exists($file)){
        throw new \Exception("The File (".$file.") doesn`t exists");
       }
    }
    public function requireOnceFile($file=""){
        if(!file_exists($file)){
        throw new \Exception("The File (".$file.") doesn`t exists");
       }
    }
    public function includeOnceFile($file=""){
        if(!file_exists($file)){
          throw new \Exception("The File (".$file.") doesn`t exists");
        }
    }
}
