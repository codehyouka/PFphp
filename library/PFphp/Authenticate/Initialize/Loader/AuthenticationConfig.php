<?php
namespace PFphp\Authenticate\Initialize\Loader;
use PFphp\Foundation\Initialize\Dependents\SystemDesignInterface;
use PFphp\Authenticate\Component\AuthenticationExtend;

class AuthenticationConfig extends AuthenticationExtend implements SystemDesignInterface{
    
           private $designInterface;
        public function __construct(SystemDesignInterface $cls){
            $this->designInterface=$cls;
            parent::__construct();
        }
	public function generate(){

	}
	
	public function run(){
             $this->designInterface->setVerify("AuthenticationConfig");
            echo "AuthenticationConfig:run \n";
            $this->designInterface->run();
	}
        public function verify(){
        //      $this->designInterface->setVerify("AuthenticationConfig");
             echo "AuthenticationConfig:verify \n";
             $this->designInterface->verify();
        }

}

