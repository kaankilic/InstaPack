<?php 
namespace Kaankilic\InstaPack\Http\Controllers;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Input;
<<<<<<< HEAD
use Validator;
use Hash;
use Session;
use Request;
use Storage;
use Kaankilic\InstaPack\Helpers\ExtensionChecker;
use Kaankilic\InstaPack\Helpers\FilePermissionChecker;
=======
use Hash;
use Session;
use Request;
use Kaankilic\InstaPack\Helpers\ExtensionChecker;
use Kaankilic\InstaPack\Helpers\FilePermissionChecker;
use Kaankilic\InstaPack\Helpers\DotEnvGen;
>>>>>>> origin/master
class InstallerController extends Controller{
	public function getHome(){
		$Extensions = ExtensionChecker::checkExtensions(config('instapack.Extensions'));
		return view("instapack::installer.home",compact('Extensions'));
	}
	public function getConnections(){
		return view("instapack::installer.connections");
	}
	public function postConnections(){
		$Inputs = Input::only("Hostname","Username","Password","Database");
		$Validator = Validator::make($Inputs,[
			"Hostname" => "required",
			"Username" => "required",
			"Password" => "required",
			"Database" => "required"
		]);
		$hasConnection = @mysqli_connect($Inputs["Hostname"],$Inputs["Username"],$Inputs["Password"],$Inputs["Database"]);
		if ($Validator->fails() || $hasConnection==FALSE) {
			return redirect()->route("instapack::connections")->withInput()->withErrors($Validator)->with("Errormessage","test");
		}
		Storage::disk("local")->put('instapack-connections.json', json_encode($Inputs));
		return redirect()->route("instapack::mail");
	}
	public function getMail(){
		return view("instapack::installer.mail");
	}
	public function postMail(){
		$Inputs = Input::only("Hostname","Username","Password","Email");
		$Validator = Validator::make($Inputs,[
			"Hostname" => "required",
			"Username" => "required",
			"Email" => "required"
		]);
		if ($Validator->fails()) {
			return redirect()->route("instapack::mail")->withInput()->withErrors($Validator)->with("Errormessage","test");
		}
		/* Smtp Test et */
		Storage::disk("local")->put('instapack-emails.json', json_encode($Inputs));
		return redirect()->route("instapack::user");
	}
	public function getUser(){
		return view("instapack::installer.user");
	}
}
?>
