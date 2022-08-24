<?php
namespace App\Controllers;

use App\Models\RequestModel;
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
	#FrontPage Home
	public function index(){
		$session = session();
		$dash = new Crud();
		// $client = new Client($this->account_sid, $this->auth_token);
		$country = $this->country->getCountry();
		$data['site_setting']=$dash->getOne('app_settings',1);
		$data['title'] = 'Home - '.$data['site_setting']->site_name.' Bank';
		
		echo view('front/index', $data);
	}

	#contact
	public function contact(){
		$data['site_setting']=$this->dash->getOne('app_settings',1);
		$data['title'] = 'Contact | '.$data['site_setting']->site_name.' Bank';
		return view('front/contact', $data);
	}

	#about
	public function about(){
		$data['site_setting']=$this->dash->getOne('app_settings',1);
		$data['title'] = 'About | '.$data['site_setting']->site_name.' Bank';
		return view('front/about', $data);
	}
	
	#forgot password
	public function forgotpass(){
		$data['title'] = 'Forgot Password | ';
		return view('auth/forgot', $data);
	}

	

	
}
