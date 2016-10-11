<?php 
namespace Kaankilic\InstaPack\Helpers;

class MysqlConnectionChecker{
	protected $Hostname;
	protected $Database;
	protected $Username;
	protected $Password;
	public function __construct($Hostname,$Database,$Username,$Password){
		$this->Hostname = $Hostname;
		$this->Database = $Database;
		$this->Username = $Username;
		$this->Password = $Password;
	}
	public function getHostname(){
		return $this->Hostname;
	}

	public function setHostname($Hostname){
		$this->Hostname = $Hostname;
	}

	public function getDatabase(){
		return $this->Database;
	}

	public function setDatabase($Database){
		$this->Database = $Database;
	}

	public function getUsername(){
		return $this->Username;
	}

	public function setUsername($Username){
		$this->Username = $Username;
	}

	public function getPassword(){
		return $this->Password;
	}

	public function setPassword($Password){
		$this->Password = $Password;
	}
	public function checkConnection(){
		$hasConnection = false;
		$dsn = "mysql:host=".$this->getHostname().";dbname=".$this->getDatabase().";charset=utf8";
		$opt = array(
			PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
			PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
			);
		try{
			$pdo = new PDO($dsn,$this->getUsername(),$this->getPassword(), $opt);
		} catch (PDOException $e) {
			$hasCOnnection = true;
		}
		return $hasConnection;
	}
}
$n = new MysqlConnectionChecker("localhost","admin_chef","admin_chef","l1rJJ3ko0T1");
print_r($n->checkConnection());
?>