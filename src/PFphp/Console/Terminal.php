<?php

namespace PFphp\Console;
use PFphp\Console\Component\InitLoader;
use PFphp\Utility\Observer;
use Symfony\Component\Yaml\Yaml;
use PFphp\Console\Command\TerminalManager;
use PFphp\FileManager\Filesystem;
class Terminal extends TerminalManager{
    private $extend_method=null;
    private $FileDirectory;
    public function __construct(){
       $this->ManagerInit();
       $this->FileDirectory=new Filesystem();
    }
    
    public function init(){
     // $this->getAction();
        echo "Terminal test :".$this->getCommand()." \n";
  //      echo $this->FileDirectory->getVendorFileName("Commandline.yml")."\n";
        //$files=$this->FileDirectory->getFileName("Commandline12.yml");
      
        $this->FileDirectory->setFileContent("Commandline1.yml");
       $yml = Yaml::parse($this->FileDirectory->getFileContent());
        print_r($yml);
//?   $res =       array();
 // $res =Observer::extend( $this ,new InitLoader());


    }
     private function tests (){
       global $argc, $argv;
        echo "Terminal test";
//?   $res =       array();
 // $res =Observer::extend( $this ,new InitLoader());
 
$init=new InitLoader();
 $data = array('lorem' => 'ipsum', 'dolor' => 'sit');
        $yml = Yaml::dump($data);
        $parsed = Yaml::parse($yml);
     //   $this->assertEquals($data, $parsed);
//?           print_r($parsed);
 //$this->create();
 
 print_r($argv);
 echo "== \n";
 print_r($argc);
   echo "Are you sure you want to do this?  Type 'yes' to continue: ";
$handle = fopen ("php://stdin","r");
$line = fgets($handle);
if(trim($line) != 'yes'){
    echo "ABORTING!\n";
    exit;
}
echo "\n"; 
echo "Thank you, continuing...\n";
    }
    
    public function extend($class=Object){
        
    }
    
    
}

?>