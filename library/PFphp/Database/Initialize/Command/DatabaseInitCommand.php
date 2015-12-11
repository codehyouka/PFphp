<?php
namespace PFphp\Database\Initialize\Command;

use PFphp\Console\Interfaces\Initialize\FrameworkCommand;
use PFphp\Console\Initialize\System\Component\CommandSystemReview;


class DatabaseInitCommand extends CommandSystemReview implements FrameworkCommand{
	
	private $cls_frame;
	public function __construct(FrameworkCommand $fc){
		$this->cls_frame=$fc;
	}

	public function make(){
		
		echo "DatabaseInitCommand:make \n";
		$this->cls_frame->make();
	
	}
	public function generate(){

	}
	public function verify(){

	}
	public function help(){

	}
}
