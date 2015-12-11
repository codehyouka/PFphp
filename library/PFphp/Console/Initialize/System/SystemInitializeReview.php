<?php
namespace PFphp\Console\Initialize\System;
use PFphp\Console\Initialize\System\Base\SystemInitializeCoreBase;
use PFphp\Console\Config\TerminalSetting;

use PFphp\MVC\Initialize\Loader\ApplicationConfig;
class SystemInitializeReview extends SystemInitializeCoreBase{
    private $terminal;
	public function __construct(){
            $this->terminal=new TerminalSetting();
            parent::__construct();
	}

        protected function bootstrap(){
            $this->init_loader()
                 ->build();
        }
	
}