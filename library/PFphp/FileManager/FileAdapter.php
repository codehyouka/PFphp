<?php

namespace PFphp\FileManager;
use PFphp\FileManager\FileAdapter;
use PFphp\FileManager\DirectoryStructure;
use PFphp\FileManager\Component\DirectoryNotFoundException;

abstract class FileAdapter extends DirectoryStructure{
    #code
  private $file_content;
    public function __construct($dirname=__DIR__){
     
    }
   
  protected function isFileFound($directoryfile=""){
     if(!file_exists($directoryfile)){
  
        return false;
       }

      return true; 
    
  }
  protected function isFileFoundException($directoryfile=""){
     if(!file_exists($directoryfile)){
        throw new DirectoryNotFoundException("The File (".$directoryfile.") doesn`t exists",404);
        return false;
       }

      return true; 
    
  } 
  protected function inFileExecute($type="",$directoryfile=""){
      if(FileAdapter::isFileFoundException($directoryfile)){
        $content=$directoryfile;
        if($type=="get_contents")
          return file_get_contents($content);
        if($type=="require")
          return require($content);
        if($type=="require_once")
          return require_once($content);
        if($type=="include")
          return include($content);
        if($type=="include_once")
          return include_once($content);

      }

  } 
      
}
