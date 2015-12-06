<?php
namespace PFphp\Console\Component;
use PFphp\FileManager\Filesystem;
use PFphp\FileManager\DirectoryStructure;
abstract class TerminalExtension{
    private $DirectoryClass;

    public function __construct(){
    //    $this->DirectoryStructure=new DirectoryStructure();
        // parent::__construct();
            
    }
    

    protected function commandLine(){
             global $argc, $argv;
             
             $arg=[];
             echo $argc."---";
             $arg['argument']=[];
             
             $arg['active']=false;
             $arg['comand']='help';
             $arg['namespace']='defaut';
             if($argc>1){
                $arg['comand']=$argv[1];
                $arg['active']=true;
            
                $cnt=0;
                foreach($argv as $ak=>$av){
                    if($ak>1){
                        array_push($arg['argument'],$av);
                    }
                }
             }
             
             return $arg;
    }
   


  
}