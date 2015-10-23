<?php

namespace pfphp\Console\Component;

class InitLoader implements impload {
    
  
    public function create(){
        
        echo "InitLoader:create";
    }
}

interface impload{
    public function create();
}

?>

asd