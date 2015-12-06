<?php 

namespace PFphp\Foundation\Security\Initialize\Loader; 
use PFphp\Foundation\Initialize\Dependents\SystemDesignInterface;
use  PFphp\Foundation\Security\Initialize\Loader\Component\SecurityConfigExtend;

class SecurityConfig extends SecurityConfigExtend implements SystemDesignInterface{
      
        private $designInterface;
        public function __construct(SystemDesignInterface $cls){
            $this->designInterface=$cls;
            parent::__construct();
        }
	public function generate(){

	}
	
	public function run(){
            $this->designInterface->setVerify("RouteConfig");
            echo "SecurityConfig:run \n";
            $this->designInterface->run();
	}
        public function verify(){
        //    $this->designInterface->setVerify("SecurityConfig");
             echo "SecurityConfig:verify \n";
             $this->designInterface->verify();
        }
}
