<?php

namespace pfphp\Console;
use pfphp\Console\Component\InitLoader;
use pfphp\Utility\Observer;
class Terminal {
    public $extend_method=null;
    public function __construct(){
        
    }
    
    public function init(){
        
        echo "Terminal test";
//?   $res =       array();
 // $res =Observer::extend( $this ,new InitLoader());
  $res =array_merge($this,new InitLoader());
$init=new InitLoader();
print_r( $res ->create());

 //$this->create();
    }
    
    public function extend($class=Object){
        
    }
    
    
}

?>