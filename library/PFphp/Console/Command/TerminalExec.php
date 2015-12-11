<?php
namespace PFphp\Console\Command;
use PFphp\Console\Initialize\System\SystemInitializeReview;

use PFphp\Console\Command\InitLoader;

// noted please add to bottloader  "InitLoader"
abstract class TerminalExec extends SystemInitializeReview{
  
      public function __construct(){
        parent::__construct();
    }
    
    protected function init_terminal(){
        //echo "init_terminal";
        $this->bootstrap();
    } 
}