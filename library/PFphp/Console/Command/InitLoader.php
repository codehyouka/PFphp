<?php

namespace pfphp\Console\Command;
use PFphp\Console\Component\TerminalLoader;

abstract class InitLoader  {
     public function __construct(){
        parent::__construct();
    }
  
    protected function create(){
        
   
    	$this->load_init_library();

    }
}



?>

