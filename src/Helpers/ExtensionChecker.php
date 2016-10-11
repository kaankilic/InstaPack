<?php 
namespace Kaankilic\InstaPack\Helpers;
class ExtensionChecker{
	protected static $Extensions = array();
	public static function checkExtensions($Extensions=array()){
		foreach ($Extensions as $Extension) {
			$hasExtensionLoaded = extension_loaded($Extension);
			array_push(self::$Extensions,array(
				"Name" => $Extension,
				"Installed" => $hasExtensionLoaded
			));
		}
		return ExtensionChecker::$Extensions;
	}
}
?>