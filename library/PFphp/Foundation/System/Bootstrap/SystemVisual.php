<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SystemVisual
 *
 * @author pein
 */
namespace PFphp\Foundation\System\Bootstrap;
use PFphp\Console\Config\TerminalSetting;
use PFphp\Authenticate\Initialize\Command\Structure\CommandApplication;
use PFphp\Console\Interfaces\Initialize\FrameworkCommand;
use PFphp\Console\Initialize\System\Component\CommandSystemReview;
class SystemVisual extends CommandSystemReview{
	private $terminal;
	public function __construct(){
		$this->terminal=new TerminalSetting();

	}

    //put your code here
    public function build(){
        echo "SystemVisual \n";
       // print_r($this->terminal->getSystemCommand());
        $this->initBootstrap();
    }
    private function initBootstrap(){
    	$apps=new CommandApplication();
    //	$get_namespace=$this->terminal->getSystemCommand();
  	//	foreach($get_namespace as $name_k =>$name_v){
    //             $apps=$name_v($apps);                
    //            }
    //            $apps->make();
    }
}
