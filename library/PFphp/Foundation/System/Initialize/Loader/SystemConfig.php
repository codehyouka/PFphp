<?php 

namespace PFphp\Foundation\System\Initialize\Loader; 
use PFphp\Foundation\Initialize\Dependents\SystemDesignInterface;
use PFphp\Foundation\System\Initialize\Component\SystemConfigAssist; 

class SystemConfig extends SystemConfigAssist implements SystemDesignInterface{
        
        private $designInterface;
        public function __construct(SystemDesignInterface $cls){
            $this->designInterface=$cls;
            parent::__construct();
        }
	public function generate(){

	}
	
	public function run(){
             $this->designInterface->setVerify("SystemConfig");
            echo "SystemConfig:run \n";
            $this->designInterface->run();
	}
         public function verify(){
        //     $this->designInterface->setVerify("SystemConfig");
             echo "SystemConfig:verify \n";
             $this->designInterface->verify(); 
        }
}