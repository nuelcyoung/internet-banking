<?php
namespace App\Controllers;

use App\Models\RequestModel;
//use Twilio\Rest\Client;
use App\Models\Crud;
use App\Libraries\Country;
class Home extends BaseController
{	
	public function __construct()
	{
    	$this->country = new Country();
		$this->request = service('request');
		$this->dash=new Crud();
	}
	protected $account_sid = 'AC211dc1ba06af35c092bcbad3c7ed666b';
	protected $auth_token = 'e9fea3412d0922660d83748f5bba6083';
	protected $twilio_number = "GROWCAPITAL";
	#FrontPage Home
	public function index(){
		$session = session();
		$dash = new Crud();
		// $client = new Client($this->account_sid, $this->auth_token);
		$country = $this->country->getCountry();
		$data['title'] = 'Home - Ofuse Bank';
		$data['site_setting']=$dash->getOne('app_settings',1);
		// $phone ='2348134713948';
		// $c='hhhhhhhhhhh';
		// try {
		// 	$client->messages->create(
		// 		// Where to send a text message (your cell phone?)
		// 		'+'.$phone,
		// 		array(
		// 			'from' => $this->twilio_number,
		// 			'body' => $c
		// 		)
		// 	);
		// } catch (\Exception $e) {
		// 	$session->setFlashdata('error', $e->getMessage());
		// 	$error = $e->getMessage();
		// 	//return redirect()->to(base_url('home'));
			
		// }
		// foreach($country as $key){
		// 	echo $key['name']." ".$key['symbol'];
		// }
		
		echo view('front/index', $data);
	}

	#contact
	public function contact(){
		$data['site_setting']=$this->dash->getOne('app_settings',1);
		$data['title'] = 'Contact | Ofuse Bank';
		return view('front/contact', $data);
	}

	#about
	public function about(){
		$data['site_setting']=$this->dash->getOne('app_settings',1);
		$data['title'] = 'About | Ofuse Bank';
		return view('front/about', $data);
	}
	
	#forgot password
	public function forgotpass(){
		$data['title'] = 'Forgot Password | ';
		return view('auth/forgot', $data);
	}

	

	
}
