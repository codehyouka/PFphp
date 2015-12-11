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

    

   
  
}
