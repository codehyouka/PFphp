<?php

namespace PFphp\Authenticate\Initialize\Command\Structure;
use PFphp\Console\Interfaces\Initialize\FrameworkCommand;
use PFphp\Console\Initialize\System\Component\CommandSystemReview;

class CommandApplication extends CommandSystemReview implements FrameworkCommand{
	

	

	public function make(){
		echo "CommandApplication:make";
	}	
	public function generate(){

	}
	public function verify(){

	}
	public function help(){

	}
}
