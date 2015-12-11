<?php

namespace PFphp\Http\Initialize\Loader;
use PFphp\Foundation\Initialize\Dependents\SystemDesignInterface;
use PFphp\Foundation\Initialize\Dependents\SystemInitModule;

use PFphp\FileManager\Compose\ManagerGenerateFile;      
use PFphp\FileManager\Compose\GenerateFolder;

class RouteConfig extends SystemInitModule implements SystemDesignInterface{
        private $designInterface;
        private $generate_folder;
    	private $generate_file;

        public function __construct(SystemDesignInterface $cls){
            $this->designInterface=$cls;
            parent::__construct();
            $this->generate_folder=new GenerateFolder();
            $this->generate_folder->setMode(0755);
            $this->generate_folder->setRecursive(true);

            $this->generate_file=new ManagerGenerateFile();
            $this->generate_file->isContentRewrite(false);
        }
	public function generate(){

	}
	
	public function run(){
             $this->designInterface->setVerify("RouteConfig");
            echo "RouteConfig:run \n";
             $this->bootstrap_init();
            $this->designInterface->run();
        
	}
    public function verify(){
            
            $this->designInterface->setVerify("RouteConfig");
            echo "RouteConfig:verify \n";
        //    $this->designInterface->verify();
           
        }

    private function bootstrap_init(){

    	$this->generate_folder->generateFolder("/config");
    	$this->generate_folder->generateFolder("/app/default/module/home");

       $this->generate_file->setContent($this->thetemplate_route_config());
       $this->generate_file->setFile("/config/route.php");
       $this->generate_file->generate();
    }    

    private function thetemplate_route_config(){
        $str="<?php \n";
        $str.="return array( \n";
        $str.="\r ";
         $str.="\t'default'=> array( \n";
        
        $str.="\t\t array( \n";
        $str.="\t\t\t'route'=>'/',\n ";
        $str.="\t\t\t'module'=>'home',\n";
        $str.="\t\t\t'controller'=>'home',\n";
        $str.="\t\t\t'action'=>'@any',\n";
        $str.="\t\t), \n";
        
        $str.="\t), \n";
        $str.="); \n";
        return $str;
    }  
}