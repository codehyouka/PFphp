<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ApplicationMvcReference
 *
 * @author pein
 */
namespace PFphp\MVC\Initialize\Component\Stub;
use PFphp\Foundation\Initialize\Dependents\SystemInitModule;
class ApplicationMvcReference extends SystemInitModule{
    //put your code here
    
    private function thetemplate_config($content=""){
        $str="<?php \n";
        $str.="return array( \n";
        $str.=$content;
        $str.="); \n";
        return $str;
    }
    protected function set_database(){
       $str="";
          $str.="\r ";
        $str.="\t'default'=> array( \n";
        
        $str.="\t\t array( \n";
        $str.="\t\t\t'host'=>'localhost',\n ";
        $str.="\t\t\t'username'=>'root',\n";
        $str.="\t\t\t'password'=>'',\n";
        $str.="\t\t\t'database'=>'',\n";
        $str.="\t\t\t'driver'=>'',\n";
        $str.="\t\t\t'active'=>false,\n";
        $str.="\t\t), \n";
        
        $str.="\t), \n";
        return $this->thetemplate_config($str);
    }
    protected function set_config(){
        
         $str="";
        return $this->thetemplate_config($str);
    }
    protected function set_middle(){
        $str="";
        return $this->thetemplate_config($str);
    }
}
