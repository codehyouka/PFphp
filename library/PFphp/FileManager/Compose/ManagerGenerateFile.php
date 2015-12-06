<?php 
namespace PFphp\FileManager\Compose;
use PFphp\FileManager\DirectoryStructure;
use PFphp\FileManager\Filesystem;

class ManagerGenerateFile{

    private $main_path;
    private $main_root_path;
    private $main_file;
    private $main_file_content;
    private $main_status;
    private $is_path;
    private $content;
   
	public function __construct(){
		$this->main_path=DirectoryStructure::getRootDirectory();
		$this->main_file="help.html";
		$this->main_file_content="Hi";
		$this->main_status=array(
					"file_status"=>"No File generated",
					"generate_status"=>"No File generated",
					"file"=>$this->main_file,
					"path"=>$this->main_path
					);
		$this->is_path=true;
                $this->content="<?php";

		
	}

	public function isVendorDirectory($bool=false){
		if($bool==true){
			$this->main_path=DirectoryStructure::getVendorDirectory();
		}
	}
        public function isPath($bools=true){
		$this->is_path=$bools;
	}
	public function setPath($dir=""){
		$this->main_path=$this->main_path;
	}
	public function setFile($file="test.txt"){
		$this->main_file=$file;	
	}
        public function setContent($contents=""){
            $this->content=$contents;
        }
	public function generate(){
		$this->main_status=array(
					"file_status"=>"No File generated",
					"generate_status"=>"No File generated",
					"file"=>$this->main_file,
					"path"=>$this->main_path
                        			);
		if($this->is_path)
		$file_path=$this->main_status['path']."".$this->main_status['file'];
                else
                    $file_path=$this->main_status['file'];
		if(Filesystem::isFileExists($file_path)){
                        $files=fopen($file_path,"w");
			fwrite($files,$this->content);
			fclose($files);
                          $this->main_status["file_status"]="File Update";
			  $this->main_status["generate_status"]="File Update";

		}else{

			$files=fopen($file_path,"w");
			fwrite($files,$this->content);
			fclose($files);
                            if(Filesystem::isFileExists($file_path)){
                                $this->main_status["file_status"]="File Created";
				$this->main_status["generate_status"]="File generated";

                            }else{
                                $this->main_status["file_status"]="Failed File Created";
				$this->main_status["generate_status"]="Failed File generated";
                            }
				
			}
		}
	
	public function output(){
		return $this->main_status;
	}
}