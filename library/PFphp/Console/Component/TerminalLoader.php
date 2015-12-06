<?php 
namespace PFphp\Console\Component;
use  PFphp\Console\Component\TerminalManager;
class TerminalLoader extends TerminalManager{
	private $load_variable;
  public function __construct(){
  	parent::__construct();
  
  //	$this->load_variable=$this->LoadConfigInit();    
  	
  }	

  public function load_library($str_class=""){

  	//	return $this->LoadConfigInit();
  }
  public function load_init_library(){
  	
  }



}