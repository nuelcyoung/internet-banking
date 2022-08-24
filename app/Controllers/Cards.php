<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Cards as Card;
use App\Models\Crud;

class Cards extends BaseController
{

    public function __construct()
    {
        if (session()->get('role') != "client") {
            header('Location: /login');
            die();
        }
    }
    public function index()
    {  
        $card = New Card();
        $crud = New Crud();
        $session = session();//->get('id'),
        $data['title']='Debit CArd';
        $data['site_name']=$crud->getOne('app_settings',1);
        $data['card_count']= $crud->countRow('cards');
        $data['cards']= $crud->getAll('cards');
        $data['user']= $crud->getOne('users',session()->get('id'));
        // var_dump($data['user']->card_balance); die();
        return view('client/card_index',$data); 
    }

    public function create(){
        $card = New Card();
        $crud = New Crud();
        $session=session();
        $data['title']='Create a Virtual Card';
        $data['site_setting']=$crud->getOne('app_settings',1);
        $data['user']= $crud->getOne('users',session()->get('id'));
        $card_balance =$data['user']->card_balance;
        
        $response = $card->generate($this->request->getVar('type'));
        $date = date('Y-m-d');
        if($this->request->getMethod()=='post'){
            $rules = [
                'amount' => 'required',
                'type' => 'required',
            ];
            if (!$this->validate($rules)) {
                $data['validation'] = $this->validator;
                return view('client/card_create',$data);
            } else {
            $data=[
            'cardnumber'=>$response->cardNumber,
            'cardpin'=>$response->pin,
            'cvv'=>$response->cvv,
            'type'=>$this->request->getVar('type'),
            'amount'=> $this->request->getVar('amount'),
            'user_id'=>session()->get('id'),
            'expire'=>date('m').'/'.date('Y', strtotime($date. ' + 3 years')),
            'active'=>true,
             ];
         $crud->insertData('cards',$data);
         //$crud->updateData('users',session()->get('id'),['card_balance'=>$card_balance + $this->request->getVar('amount')]);
         $session->setFlashdata('success', "Card Created and fund added");
         return redirect()->route("client/cards");
        }
        }
        return view('client/card_create',$data);
         
    }

    protected function generateId()
    {
        $len = 16; //16 bytes = 256 bits
        $bytes = '';
        if (function_exists('random_bytes')) {
            try {
                $bytes = random_bytes($len);
            } catch (\Exception $e) {
                //Do nothing
            }
        } elseif (function_exists('openssl_random_pseudo_bytes')) {
            /** @noinspection CryptographicallySecureRandomnessInspection */
            $bytes = openssl_random_pseudo_bytes($len);
        }
        if ($bytes === '') {
            //We failed to produce a proper random string, so make do.
            //Use a hash to force the length to the same as the other methods
            $bytes = hash('sha256', uniqid((string) mt_rand(), true), true);
        }

        //We don't care about messing up base64 format here, just want a random string
        return str_replace(['=', '+', '/'], '', base64_encode(hash('sha256', $bytes, true)));
    }
}
