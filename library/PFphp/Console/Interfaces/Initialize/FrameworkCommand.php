<?php 
namespace PFphp\Console\Interfaces\Initialize;

interface FrameworkCommand{

public function make();
public function generate();
public function verify();
public function help();

}