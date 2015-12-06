<?php
namespace PFphp\Console\Component;
use PFphp\Console\Component\TerminalExtension;

abstract class TerminalManager extends TerminalExtension{
    /**
     * To get the command argument for the commandline
     **/
    protected $argument=[];
    
    public function __construct(){
        parent::__construct();
    }

    protected function ManagerInit(){
        $term_comand=$this->commandLine();
  
   $this->argument['command']=$term_comand['comand'];
    $this->argument['active']=$term_comand['active'];
    $this->argument['argument']=$term_comand['argument'];
    }
    
    protected function getArgument(){
        return $this->argument['argument'];
    }
    protected function getCommand(){
        return $this->argument['command'];
    }

   
  
}