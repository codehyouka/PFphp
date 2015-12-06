<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Path
 *
 * @author pein
 */
namespace PFphp\FileManager\Asset;
use PFphp\FileManager\Component\FilePatternException;
class Path {
    //put your code here
    public static function join($dir,$filepath){
        if (empty($dir) && empty($filepath))
            return new FilePatternException("Directory and File are empty please check again",404);
 
        $main_directory=$dir;
         $main_file=$filepath;
        if (!preg_match("/[\/]$/", $dir)) {
        $main_directory=$dir."/";
        }
        if (preg_match("/^[\/]/", $filepath) or preg_match("/[\/]$/", $filepath)) {
        $main_file=  preg_replace("/[\/]$/","",(preg_replace("/^[\/]/","", $filepath)));
        }
        //echo $dir;
        return $main_directory.$main_file;
        
    }
}
