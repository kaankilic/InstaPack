<?php
namespace Kaankilic\InstaPack\Helpers;
class DotEnvGen{
	const TargetFile = ".env"; 
	const ExampleFile = ".env.example";
	protected $Fields;
	protected $Response;
	public function __construct(){
	}
	public function parseExample(){
		if (file_exists(self::ExampleFile)) {
			$handle = fopen(self::ExampleFile, "r");
			if ($handle) {
			    while (($line = fgets($handle)) !== false) {
			    	if (strpos($line,"=")!==false) {
				    	$Split = explode("=",$line);
				        $this->setField(trim($Split[0]),trim($Split[1]));
			    	}
			    }
			    fclose($handle);
			}
		}
	}
	public function getFields(){
		return $this->Fields;
	}
	public function setFields($Fields){
		$this->Fields = $Fields;
	}
	public function getField($Key){
		return $this->Fields[$Key];
	}
	public function setField($Key,$Value){
		return $this->Fields[$Key] = $Value;
	}
	public function getResponse(){
		return $this->Response;
	}
	public function setResponse($Response){
		$this->Response .= $Response;
	}
	public function validateContent(){}
	public function createEnv($OtherFile=false){
		$i = 0;
		$FullFilePath = self::TargetFile;
		if ($OtherFile!=false) {
			$FullFilePath = $OtherFile;
		}
		$file = fopen($FullFilePath, 'w');
		foreach ($this->getFields() as $Key => $Field){
			$Line = $Key."=".$Field."\n";
		    fwrite($file, $Line);
		    $this->setResponse($Line);
		}
		fclose($file);
	}
}
?>