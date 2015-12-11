<?php

return array(
		"system_command"=>array(
                    "module"=>function(PFphp\Console\Interfaces\Initialize\FrameworkCommand $cls){
                                    return new PFphp\MVC\Initialize\Command\Structure\ModuleInitCommand($cls);
                                },
 
                    "pmms"=> function(PFphp\Console\Interfaces\Initialize\FrameworkCommand $cls){
                                    return new PFmms\Foundation\Setup\Command\Initialize\Structure\Config\FrameMSInitCommand($cls);
                                },
                    "db" =>function(PFphp\Console\Interfaces\Initialize\FrameworkCommand $cls){ 
                                    return new PFphp\Database\Initialize\Command\DatabaseInitCommand($cls);
                                },          
		//?           "clean"=> function(PFphp\Console\Interfaces\Initialize\FrameworkCommand $cls){
        //?                            return new PFphp\Http\Initialize\Loader\RouteConfig($cls);
        //?                        }
                    ),
        
            );
                    
	
