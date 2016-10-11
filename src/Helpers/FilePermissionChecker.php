<?php 
namespace Kaankilic\InstaPack\Helpers;

class FilePermissionChecker{
	protected $Permissions=array();
	protected $Result = array();
	public function getFile(){
		return $this->File;
	}
	public function getPermissions(){
		return $this->Permissions;
	}

	public function setPermission($Permission=array()){
		if (!file_exists($File)) {
			throw new Exception("File is missed", 403);
		}
		$this->File = $File;
		$this->setPermission(fileperms($File));
		$this->Permission[] = $Permission;
	}
	public function setPermissions($Permissions=array()){
		$this->Permissions = $Permissions;
	}

	public function checkPermission($requiredPermission){
		foreach ($this->getPermissions() as $Permission) {
			$hasRequiredPermission = false;

			if($requiredPermission===$Permission){
				$hasRequiredPermission = true;
			}
			$this->Results[] = array(
				"File" => $Permission,
				"Installed" => $hasRequiredPermission
			);
		}
		return $this->Results;
	}
}
?>