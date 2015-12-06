<?php

namespace PFphp\Http\Initialize\Loader;
use PFphp\Foundation\Initialize\Dependents\SystemDesignInterface;
use PFphp\Foundation\Initialize\Dependents\SystemInitModule;
class RouteConfig extends SystemInitModule implements SystemDesignInterface{
        private $designInterface;
        public function __construct(SystemDesignInterface $cls){
            $this->designInterface=$cls;
            parent::__construct();
        }
	public function generate(){

	}
	
	public function run(){
             $this->designInterface->setVerify("RouteConfig");
            echo "RouteConfig:run \n";
            $this->designInterface->run();
        
	}
        public function verify(){
            
       //     $this->designInterface->setVerify("RouteConfig");
            echo "RouteConfig:verify \n";
            $this->designInterface->verify();
        }
}