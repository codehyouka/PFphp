<?php

namespace pfphp\Utility;

class Observer{
    
    public static function extend(&$currect_class,$extend_class){
        
        foreach($extend_class as $cls_k=>$cls_v){
            $currect_class[$cls_k]=$cls_v;
        }
        return $currect_class;
    }
    
}