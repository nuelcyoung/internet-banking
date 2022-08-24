<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Crud;

class AdminController extends BaseController
{
    public function __construct()
    {
        if (session()->get('role') != "admin") {
            header('Location: /login');
            exit;
        }
        $this->dash = new Crud();
    }
    public function index()
    {
        $data['title'] = 'Administrator | Ofusebank';
        $data['site_setting'] = $this->dash->getOne('app_settings', 1);
        $data['totalusers'] = $this->dash->countRow('users', ['role' => 'client']);
        $data['totaltransfer'] = $this->dash->countRow('debits');
        $data['pendingtransfer'] = $this->dash->countRow('debits', ['status' => 'pending']);
        $data['totalwithdraw'] = $this->dash->countRow('credits');
        //var_dump($data['totalusers']);die();
        return view("admin/index", $data);
    }
    public function register()
    {
        $crud = new Crud();
        $id = session()->get('id');
        $session = session();
        $data['title'] = 'Open Account | Ofusebank';
        $data['site_setting'] = $crud->getOne('app_settings', 1);
        $data['country'] = $crud->getAll('dbt_country');

        //var_dump($rules); die();
        if ($this->request->getMethod() == 'post') {
            // var_dump($this->request->getPost('dob', FILTER_SANITIZE_STRING),);
            // die();
            $rules = [
                'firstname' => 'required|string',
                'lastname' => 'required|string',
                'email'    => [
                    'rules'  => 'required|valid_email|trim|is_unique[users.email]',
                    'errors' => [
                        'is_unique' => '{value} already exist!'
                    ]
                ],
                'country' => 'required|trim',
                'transaction_pin' => 'required|trim',
                'phone' => 'required|trim',
                'password' => 'required|min_length[5]',
                //'picture' => 'uploaded[picture]|max_size[picture,4096]|ext_in[picture,png,jpeg,jpg,gif,svg]',
                'currency_symbol' => 'trim',
                'country' => 'trim',
                'gender' => 'trim',

            ];

            if (!$this->validate($rules)) {
                $data['validation'] = $this->validator;
            } else {
                // $file = $this->request->getFile('picture');
                // // var_dump($file); die;
                // if($file){
                // 	if ($file->isValid() && !$file->hasMoved()){
                // 		$randomName = $file->getRandomName();
                // 		//provide random name for file to avoid clash
                // 		if($file->move(FCPATH.'asset/picture/', $randomName)){
                // 			$path = 'asset/picture/'.$file->getName();
                // 			// insert into db
                // 			// split plan

                // 			$uuid = md5(str_shuffle('dhabsuhiqooc273vdhab291sncsbajboednvbapwweuowxmmc;ada'));
                    $account ='29176573827673930057000463891234567890';
                    $account = str_shuffle($account);
                    $account = substr($account,0, 10);
                $password = password_hash($this->request->getPost('password'), PASSWORD_DEFAULT);
                // var_dump($password); die;
                $data = [
                    'firstname' => $this->request->getPost('firstname', FILTER_SANITIZE_STRING),
                    'lastname' => $this->request->getPost('lastname', FILTER_SANITIZE_STRING),
                    'email' => $this->request->getPost('email', FILTER_SANITIZE_STRING),
                    'country' => $this->request->getPost('country', FILTER_SANITIZE_STRING),
                    'phone_no' => $this->request->getPost('phone', FILTER_SANITIZE_STRING),
                    'address' => $this->request->getPost('address', FILTER_SANITIZE_STRING),
                    'gender' => $this->request->getPost('gender', FILTER_SANITIZE_STRING),
                    'currency_symbol' => $this->request->getPost('currency', FILTER_SANITIZE_STRING),
                    'transaction_pin' => $this->request->getPost('transaction_pin', FILTER_SANITIZE_STRING),
                    'role' => 'client',
                    'dob' => '',
                    'account_no' => $account,
                    'password' => $password,
                    'status' => 'active',

                ];
                // echo "<pre>"; print_r($data); die;
                $lastid = $crud->insert_return_id('users',$data);
                $datanew=[
                    'user_id'=>$lastid,
                    'account_no'=>$account,
                    'account_name'=>$this->request->getPost('lastname', FILTER_SANITIZE_STRING).' '.$this->request->getPost('firstname', FILTER_SANITIZE_STRING),
                    'account_type'=>$this->request->getPost('account_type', FILTER_SANITIZE_STRING),
                    'balance'=>'0.0',
                ];
                
                if ($crud->insertData('accounts',$datanew)) {
                    $session->setFlashdata('success', 'Account created successfully.');
                    return redirect()->to(site_url('admin'));
                } else {
                    $session->setFlashdata('error', 'Oops an Error Occured');
                    return redirect()->to(base_url('admin'));
                }
                // }
                //}
                //}


            }
        }

        echo view('admin/register', $data);
    }
}
