<?php

return array(
		"system_default"=>array(
                    "authentication"=>function(PFphp\Foundation\Initialize\Dependents\SystemDesignInterface $cls){
                                    return new PFphp\Authenticate\Initialize\Loader\AuthenticationConfig($cls);
                                },
 
                    "security"=> function(PFphp\Foundation\Initialize\Dependents\SystemDesignInterface $cls){
                                    return new PFphp\Foundation\Security\Initialize\Loader\SecurityConfig($cls);
                                },
                    "systemConfig" =>function(PFphp\Foundation\Initialize\Dependents\SystemDesignInterface $cls){ 
                                    return new PFphp\Foundation\System\Initialize\Loader\SystemConfig($cls);
                                },          
		    "RouteConfig"=> function(PFphp\Foundation\Initialize\Dependents\SystemDesignInterface $cls){
                                    return new PFphp\Http\Initialize\Loader\RouteConfig($cls);
                                }
                    ),
        
            );
                    
	