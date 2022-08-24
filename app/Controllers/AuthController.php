<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Models\Crud;

class AuthController extends BaseController
{
    public function index()
    {
        //
    }
    public function login()
    {
        $dash = new Crud();
        $data['title'] = 'Login | Ofusebank';
        $data['site_setting']=$dash->getOne('app_settings',1);
        $session = session();
        if ($this->request->getMethod() == 'post') {
            $rules = [
                'account_no' => 'required',
                'password' => 'required|min_length[6]|max_length[255]|validateUser[account_no,password]',
            ];

            $errors = [
                'password' => [
                    'validateUser' => "Account number or Password don't match",
                ],
            ];

            if (!$this->validate($rules, $errors)) {
                $session->setFlashdata('error', "Account number or Password don't match");
                return view('auth/login', $data);
            } else {
                $model = new UserModel();
                if(is_numeric($this->request->getVar('account_no'))){
                    $user = $model->where('account_no', $this->request->getVar('account_no'))->first();
                }else{
                    $user=$model->where('email', $this->request->getVar('account_no'))->first();
                }
                //var_dump($user['role']); die();
                // Stroing session values
                $this->setTempSession($user);

                // Redirecting to dashboard after login
                if ($user['role'] == "admin") {
                    $data = ['id','firstname','lastname','account_no','role'];
                    $session->remove($data);
                    $this->setUserSession($user);
                    return redirect()->to(base_url('admin'));
                } elseif ($user['role'] == "client") {
                    if($user['is_blocked'] == "true"){
                        $session->setFlashdata('error', "Your account is on hold kindly contact your account officer.");
                        return redirect()->to(base_url('login'));
                    }else{
                        return redirect()->to(base_url('otp'));
                    }
                    
                }
            }
        }
        return view('auth/login',$data);
    }
    public function otp(){
        if(!session()->get('otp')){
            return redirect()->to(base_url('login'));
        }
        $dash = new Crud();
        $data['title'] = 'Transaction PIN | Ofusebank';
        $data['site_setting']=$dash->getOne('app_settings',1);
        $session = session();
        if ($this->request->getMethod() == 'post') {
            $pin = $this->request->getVar('pin1').$this->request->getVar('pin2').$this->request->getVar('pin3').$this->request->getVar('pin4');
            //var_dump($); die();
            //session()->set($pin);
            $rules = [
                'pin1' => 'required|max_length[1]|numeric|validatePin[pin1]',
                'pin2' => 'required|max_length[1]|numeric|validatePin[pin2]',
                'pin3' => 'required|max_length[1]|numeric|validatePin[pin3]',
                'pin4' => 'required|max_length[1]|numeric|validatePin[pin4]',
            ];
            //var_dump($this->validate($rules)); die();
            if (!$this->validate($rules)) {
                $data = ['id','firstname','lastname','account_no','role'];
                $session->remove($data);
                $session->setFlashdata('error', "Invalid Transaction Pin");
                return redirect()->to(base_url('login'));
            } else {
                $model = new UserModel();
                $user = $model->where('account_no', $session->get('account_no'))
                    ->first();

                // Stroing session values
                $this->setUserSession($user);

                // Redirecting to dashboard after login
                
                    return redirect()->to(base_url('client'));
            }
        }
        return view('auth/otp',$data); 
    }
    private function setUserSession($user)
    {
        $data = [
            'id' => $user['id'],
            'firstname' => $user['firstname'],
            'lastname' => $user['lastname'],
            'dob' => $user['dob'],
            'gender' => $user['gender'],
            'account_no' => $user['account_no'],
            'phone_no' => $user['phone_no'],
            'email' => $user['email'],
            'isLoggedIn' => true,
            "role" => $user['role'],
            "picture" => $user['picture'],
        ];

        session()->set($data);
        return true;
    }
    private function setTempSession($user)
    {
        $data = [
            'id' => $user['id'],
            'firstname' => $user['firstname'],
            'lastname' => $user['lastname'],
            'account_no' => $user['account_no'],
            'role' => $user['role'],
            'email' => $user['email'],
            'picture' => $user['picture'],
            'otp'=>true,
        ];

        session()->set($data);
        return true;
    }

    public function logout()
    {
    
        session()->destroy();
        return redirect()->to('login');
    }
}
