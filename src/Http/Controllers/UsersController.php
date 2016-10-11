<?php 
namespace Kaankilic\InstaPack\Http\Controllers;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Input;
use App\Models\Companies;
use App\Models\Users;
use Validator;
use Storage;
use Kaankilic\InstaPack\Helpers\DotEnvGen;
use Artisan;
use Hash;
class UsersController extends Controller{
		public function postUser(){
		$Company = Input::only("Title","Address1","Address2","ZipCode","City","Phone","Email","CountryID");
		$Inputs = Input::only("Username","Password");
		$Validator = Validator::make($Inputs,[
			"Username" => "required",
			"Password" => "required"
		]);
		$hasConnection = Storage::disk('local')->exists('instapack-connections.json');
		$hasEmailSettings = Storage::disk('local')->exists('instapack-emails.json');
		if ($Validator->fails() || $hasConnection==FALSE || $hasEmailSettings==FALSE) {
			return redirect()->route("instapack::user")->withInput()->withErrors($Validator)->with("Errormessage","test");
		}
		$Company["isOwn"] = 1;
		$Inputs["Password"] = Hash::make($Inputs["Password"]);
		$Data = array(
			"Status" => "Installed",
			"ResultCode"=>str_random(40)
		);
		$Connection = json_decode(Storage::disk('local')->get('instapack-connections.json'));
		$Emails = json_decode(Storage::disk('local')->get('instapack-emails.json'));
		$deg = new DotEnvGen();
		$deg->parseExample();
		$deg->setField("APP_ENV","production");
		$deg->setField("APP_DEBUG","false");
		$deg->setField("APP_KEY",$Data["ResultCode"]);
		$deg->setField("APP_URL",Request::root());
		$deg->setField("DB_HOST",$Connection->Hostname);
		$deg->setField("DB_PORT","3306");
		$deg->setField("DB_DATABASE",$Connection->Database);
		$deg->setField("DB_USERNAME",$Connection->Username);
		$deg->setField("DB_PASSWORD",$Connection->Password);
		$deg->setField("MAIL_DRIVER","smtp");
		$deg->setField("MAIL_HOST",$Emails->Hostname);
		$deg->setField("MAIL_PORT","587");
		$deg->setField("MAIL_USERNAME",$Emails->Hostname);
		$deg->setField("MAIL_PASSWORD",$Emails->Hostname);
		$deg->setField("MAIL_ENCRYPTION","null");
		$deg->createEnv(base_path()."/.env");
		/* Migration and Seeds */
		Artisan::call('migrate');
		Artisan::call('db:seed');
		Users::create($Inputs);
		Companies::create($Company);
		Storage::disk('local')->delete(['instapack-connections.json','instapack-emails.json']);
		Storage::disk('local')->put('instapack.json',$Data);
		return redirect("/");
	}
}
?>
