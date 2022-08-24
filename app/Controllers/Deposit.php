<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Crud;

class Deposit extends BaseController
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
        $crud = New Crud();
        $id = session()->get('id');
        $data['title']='Deposit - e-Banking';
        $data['site_setting']=$crud->getOne('app_settings',1);
        return view('client/deposit_index',$data);

    }

    public function paypal(){
        $crud = New Crud();
        $id = session()->get('id');
        $data['title']='paypal - e-Banking';
        $data['site_setting']=$crud->getOne('app_settings',1);
        return view('client/paypal',$data);
    }

    public function cardpayment(){
        $crud = New Crud();
        $id = session()->get('id');
        $data['title']='Card Deposit - e-Banking';
        $data['site_setting']=$crud->getOne('app_settings',1);
        return view('client/cardpayment',$data); 
    }

     public function bankpayment(){
        $crud = New Crud();
        $id = session()->get('id');
        $data['title']='Bank Deposit - e-Banking';
        $data['site_setting']=$crud->getOne('app_settings',1);
        return view('client/bankpayment',$data);
     }
     public function payment(){
        $crud = New Crud();
        $id = session()->get('id');
        $data['title']='Bank Deposit - e-Banking';
        $data['link']='https://widget.onramper.com/?color=266678&apiKey=pk_prod_Ng7kk0aR8AH0dHSFiSU02cY7smmrZx2fT035lPuMAo00&wallets=USDT:0x4775dAeD338f6b070db6A459a4Da3bb054d56D29&onlyGateways=Wyre,Moonpay,Mercuryo,Indacoin&onlyFiat=USD,EUR,GBP&onlyCryptos=USDT&defaultFiat=USD&defaultCrypto=BTC&isAddressEditable=false&country=de';
        $data['site_setting']=$crud->getOne('app_settings',1);
        return view('client/payment',$data);
     }
}
