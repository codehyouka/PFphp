<?php

namespace PFphp\Foundation\Initialize\Dependents;
use PFphp\Console\Config\SystemSetting;
use PFphp\FileManager\Compose\ManagerGenerateFile;
use PFphp\FileManager\Filesystem;
use PFphp\Console\Component\Setting\SytemTerminalTemplate;
abstract class SystemInitModule extends SytemTerminalTemplate{
    
    protected $list_verify_class;
    private $system_config;
     private $generate_file;
    public function __construct() {
        
       // $this->list_verify_class=[];
        $this->system_config=new SystemSetting();
        $this->generate_file=new ManagerGenerateFile();
        $this->generate_file->isPath(false);
         $this->generate_file->setFile($this->system_config->getFileSetting());
    }
    
    protected function setVerify($arry_k,$arry_v="-"){
        print($arry_k.":setVerify \n");
        
      
        if(Filesystem::isFileExists($this->system_config->getFileSetting())){
            $content=Filesystem::requireFile($this->system_config->getFileSetting());
            $content[$arry_k]=$arry_v;
           }else{
               $content=[];
                 $content[$arry_k]=$arry_v;
           }
        $this->generate_file->setContent($this->thecontent($content));
        $this->generate_file->generate();
   //     array_push($this->list_verify_class,$arry);
        
    }
    
    protected function getVerify(){
        return $this->list_verify_class;
    }


}