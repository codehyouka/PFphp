<?php
namespace PFphp\Console\Command;

abstract class TerminalExtension{
    
    
    protected function commandLine(){
             global $argc, $argv;
             
             $arg=[];
             $arg['argument']=[];
             
             $arg['active']=false;
             $arg['comand']='help';
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