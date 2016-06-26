<?php 
namespace Kaankilic\InstaPack\Http\Controllers;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Storage;
class InstallerController extends Controller{
	public function getHome(){
		return view("instapack::installer.home");
	}
	public function getConnections(){
		return view("instapack::installer.connections");
	}
	public function postConnections(){
		$Inputs = Input::only("Hostname","Username","Password","Database");
		$Validator = Validator::make($Inputs,[
			"Hostname" => "required",
			"Username" => "required",
			"Database" => "required"
		]);
		if ($Validator->fails()) {
			return redirect()->route("instapack::connections")->withInput()->withErros($Validator)->with("Errormessage","test");
		}
		return redirect()->route("instapack::mail");
		dd(true);
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
			return redirect()->route("instapack::mail")->withInput()->withErros($Validator)->with("Errormessage","test");
		}
		return redirect()->route("instapack::user");
	}
	public function getUser(){
		return view("instapack::installer.user");
	}
	public function postUser(){
		$Inputs = Input::only("Username","Password");
		$Validator = Validator::make($Inputs,[
			"Username" => "required",
			"Password" => "required"
		]);
		if ($Validator->fails()) {
			return redirect()->route("instapack::user")->withInput()->withErros($Validator)->with("Errormessage","test");
		}
		$Data = array("Result"=>str_random(40));
		Storage::disk("local")->put('install.json', $Data);
		return redirect("/");
	}
}
?>