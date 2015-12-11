<?php
namespace PFphp\Console\Component;

abstract class TerminalExtension{


    public function __construct(){

            
    }
    

    private function commandLine(){
             global $argc, $argv;
             
             $arg=[];
          
             $arg['argument']=[];
             
             $arg['active']=false;
             $arg['comand']='help';
      //       $arg['namespace']='defaut';
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
   protected function ManagerInit(){
        $term_comand=$this->commandLine();
  	
  	return $term_comand;
    }
    
   


  
}
