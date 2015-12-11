<?php
namespace PFphp\Console\Initialize\System;
use PFphp\Console\Component\TerminalExtension;
abstract class BaseSystemCommand extends TerminalExtension{

	private function initArg(){

		return $this->ManagerInit();
	}
	protected function getArgument(){
		return $this->initArg()['argument'];
	}
	protected function getActive(){
		return $this->initArg()['active'];
	}
	protected function getComand(){
		return $this->initArg()['comand'];
	}
}
