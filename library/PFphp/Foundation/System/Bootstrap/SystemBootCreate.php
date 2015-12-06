<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SystemBootCreate
 *
 * @author pein
 */
namespace PFphp\Foundation\System\Bootstrap;
use PFphp\Console\Config\TerminalSetting;
use PFphp\MVC\Initialize\Loader\ApplicationConfig;

class SystemBootCreate {
    //put your code here
     private $terminal;
	public function __construct(){
            $this->terminal=new TerminalSetting();
           
	}
    public function build(){
        echo "As per checking, it seem this was a fresh copy of the framework \n ";
        echo "Do you want to start to your new project?  Type 'yes' or y to proceed: ";
        $handle = fopen ("php://stdin","r");
        $line = fgets($handle);
        if(in_array(strtolower(trim($line)),array("yes","y"))){
          echo "ABORTING!\n";
          $this->initBootstrap();
           exit;
        }
echo "\n"; 
echo "You Can Cancel the setup.\n";
echo "Thank you. . . \n";
    }
    
    
    private function initBootstrap(){
        $get_namespace=$this->terminal->getSystemNamepsace();
                
        $apps=new ApplicationConfig();
          foreach($get_namespace as $name_k =>$name_v){
                 $apps=$name_v($apps);                
                }
                $apps->run();
    }
}
