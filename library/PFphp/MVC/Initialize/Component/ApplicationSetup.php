<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace PFphp\MVC\Initialize\Component;

use PFphp\FileManager\DirectoryStructure;
use  PFphp\FileManager\Compose\GenerateFolder;
use PFphp\MVC\Initialize\Component\Stub\ApplicationMvcReference;
class ApplicationSetup extends ApplicationMvcReference{
    private $generate_folder;
    public function __construct(){
            $this->generate_folder=new GenerateFolder();
            $this->generate_folder->setMode(0755);
            $this->generate_folder->setRecursive(true);
            parent::__construct();
        }
    protected function CreateRootDirectory(){
      
        $this->generate_folder->generateFolder("/app");
        $this->generate_folder->generateFolder("/app/default");
        $this->generate_folder->generateFolder("/app/default/module");
        $this->generate_folder->generateFolder("/app/default/layout");
        $this->generate_folder->generateFolder("/app/distribution");
        
    }
    protected function getStatus(){
        return $this->generate_folder->output();
    }
}