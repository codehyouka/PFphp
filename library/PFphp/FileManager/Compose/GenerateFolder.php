<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of GenerateFolder
 *
 * @author pein
 */
namespace PFphp\FileManager\Compose;
use PFphp\FileManager\DirectoryStructure;
use PFphp\FileManager\Asset\Path;
use PFphp\FileManager\Filesystem;

class GenerateFolder {
    //put your code here
    private $main_path;
  
  
    private $main_status;
    private $is_path;
    private $mode;
    private $recursive;
    
	public function __construct(){
		$this->main_path=DirectoryStructure::getRootDirectory();
		
		$this->main_status=array(
                            "generated"=>array(),
                            "existed"=>array(),
                            "fail"=>array()
                        
                        );
		$this->is_path=true;
                $this->mode=0666;
                $this->recursive=true;
		
	}

	public function isVendorDirectory($bool=false){
		if($bool==true){
		$this->main_path=DirectoryStructure::getVendorDirectory();
		}
	}
        public function isPath($bools=true){
		$this->is_path=$bools;
	}
	public function setPath($dir=""){
		$this->main_path=$dir;
	}
	public function setMode($mode=0775){
            $this->mode=$mode;
        }
        public function setRecursive($recursive=false){
            $this->recursive=$recursive;
        }
	public function generateFolder($folder="/"){
	    $main_dir="";
           
            if($this->is_path){
                $main_dir=Path::join($this->main_path, $folder);
            }else{
                $main_dir=$folder;
            }
            if(!Filesystem::isFileExists($main_dir)){
                if(@mkdir($main_dir, $this->mode, $this->recursive)){
                    array_push($this->main_status['generated'],$main_dir);
                }else{
                     $error = error_get_last();
                    //echo $error['message'];
                     array_push($this->main_status['fail'],array(
                         "file"=>$main_dir,
                         "meesage"=>$error['message']
                     ));
                }
                
            }else{
                array_push($this->main_status['existed'],$main_dir);
            }
        }
	
	public function output(){
		return $this->main_status;
	}
}
