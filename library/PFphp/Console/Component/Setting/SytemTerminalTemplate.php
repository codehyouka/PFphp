<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SytemTerminalTemplate
 *
 * @author pein
 */
namespace PFphp\Console\Component\Setting;
class SytemTerminalTemplate {
    //put your code here
    protected function thecontent($ary=  array()){
        $str="";
        foreach($ary as $rk=>$rv){
            $str.="\t '".$rk."'=>'".$rv."', \n";
        }
        return $this->thetemplate($str);
    }
    
    protected function thetemplate($content=""){
        $str="<?php \n";
        $str.="return array( \n";
        $str.=$content;
        $str.="); \n";
        return $str;
    }
}
