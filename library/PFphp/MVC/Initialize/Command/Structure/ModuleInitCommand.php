<?php
namespace PFphp\MVC\Initialize\Command\Structure;
use PFphp\Console\Interfaces\Initialize\FrameworkCommand;
use PFphp\Console\Initialize\System\Component\CommandSystemReview;

class ModuleInitCommand extends CommandSystemReview implements FrameworkCommand{
	

	private $cls_frame;
	public function __construct(FrameworkCommand $fc){
		$this->cls_frame=$fc;
	}

	public function make(){
		echo "ModuleInitCommand:make \n";
		$this->cls_frame->make();
	}
	public function generate(){

	}
	public function verify(){

	}
	public function help(){

	}
}