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
use PFphp\FileManager\Compose\ManagerGenerateFile;
class ApplicationSetup extends ApplicationMvcReference{
    private $generate_folder;
    private $generate_file;
    public function __construct(){
            $this->generate_folder=new GenerateFolder();
            $this->generate_folder->setMode(0755);
            $this->generate_folder->setRecursive(true);
            
            $this->generate_file=new ManagerGenerateFile();
            $this->generate_file->isContentRewrite(false);
            parent::__construct();
        }
    protected function CreateRootDirectory(){
        $this->generate_folder->generateFolder("/config");
        $this->generate_folder->generateFolder("/app");
        $this->generate_folder->generateFolder("/app/default");
        $this->generate_folder->generateFolder("/app/default/module");
        $this->generate_folder->generateFolder("/app/default/layout");
        $this->generate_folder->generateFolder("/app/distribution");
        
    }
    protected function CreateConfigFile(){
      
       $this->generate_file->setContent("test2");
       $this->generate_file->setFile("/config/application.php");
       $this->generate_file->generate();
       
       $this->generate_file->setContent($this->set_database());
       $this->generate_file->setFile("/config/database.php");
       $this->generate_file->generate();

       $this->generate_file->setContent("test3");
       $this->generate_file->setFile("/config/module.middle.php");
       $this->generate_file->generate();
        
    }
    protected function getStatus(){
        return $this->generate_folder->output();
    }
}