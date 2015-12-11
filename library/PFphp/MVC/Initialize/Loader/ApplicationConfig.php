<?php

namespace PFphp\MVC\Initialize\Loader;
use PFphp\MVC\Initialize\Component\ApplicationSetup;
use PFphp\Foundation\Initialize\Dependents\SystemDesignInterface;


class ApplicationConfig extends ApplicationSetup implements SystemDesignInterface{
    
    private $designInterface;
    public function __construct(){
        //    $this->designInterface=$cls;
            parent::__construct();
        }
        
        public function generate(){

	}
	
	public function run(){
            
            $this->CreateRootDirectory();
            $this->CreateConfigFile();
            $status=$this->getStatus();
            if(count($status['generated']))
                $this->setVerify("ApplicationConfig");
     //       print_r($this->getStatus());
            echo "RouteConfig:run \n";
         
	}
        public function verify(){
        //    $this->setVerify("ApplicationConfig");
            echo "ApplicationConfig:verify \n";
           
            print_r($this->getVerify());
        }
	
} 
