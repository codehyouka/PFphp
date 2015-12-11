<?php
namespace PFphp\Console\Initialize\System\Base;
use PFphp\Console\Interfaces\Initialize\EstablishCoreStructure;
use PFphp\Console\Config\SystemSetting;    

use PFphp\Foundation\System\Bootstrap\SystemBootCreate;
use PFphp\Foundation\System\Bootstrap\SystemVisual;

class SystemInitializeCoreBase {
    private $system_config;
	public function __construct(){
             $this->system_config=new SystemSetting();
	}

        public function init_loader(){
           // $this->system_config->isVerifyEcosystem();
            if(!$this->system_config->isVerifyEcosystem()){
                return new SystemBootCreate();
            }else{
                return new SystemVisual();
            }
        }

}
