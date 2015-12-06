<?php 


namespace PFphp\LibraryLoader\Console;

class Colors{

private $color=[];

	public function __construct(){
			$this->color['default']="39";
			$this->color['black']="30";
			$this->color['red']="31";
			$this->color['green']="32";
			$this->color['yellow']="33";
			$this->color['blue']="34";
			$this->color['magenta']="35";
			$this->color['cyan']="36";
			$this->color['light_gray']="37";
			$this->color['dark_gray']="90";
			$this->color['light_red']="91";
			$this->color['light_green']="92";
			$this->color['light_yellow']="93";
			$this->color['light_blue']="94";
			$this->color['light_magenta']="95";
			$this->color['light_cyan']="96";
			$this->color['white']="97";

	}
	public function printColoredString(&$str="",$color="white"){

		$default_color="\e[0m";
		if(isset($this->color[$color]))
			$default_color="\e[".$this->color[$color]."m ";
		

		$str=($default_color.$str);	
		$str.=" \e[0m";
		return $str;
	}


}