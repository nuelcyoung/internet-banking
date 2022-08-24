<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Cards;
use App\Models\Crud;


class ClientController extends BaseController
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
        $dash = new Crud();
        $card=new Cards();
        $id = session()->get('id');
        $data['title']= 'Account Dashboard';
        $data['page_title']= 'My Account';
        $data['site_setting']=$dash->getOne('app_settings',1);
        $data['cards']= $dash->countRow('cards',['user_id'=>$id,'active'=>'true']);
        $data['details']= $dash->getOne('users',$id);
        $data['account']= $dash->getOneRow('accounts',['user_id'=>$id]);
        $data['pending']= $dash->getOneRow('tbl_transaction',['user_id'=>$id,'approved'=>'false']);
        $data['totalbal']= $dash->getSum('accounts',['user_id'=>$id],'balance');
        $data['allaccounts']= $dash->getAll('accounts',['user_id'=>$id]);
        $data['news']=$card->news();
        $data['trx_histories']=$dash->joinOne($id,'users','tbl_transaction');
        //var_dump($data['totalbal']); die();
        return view("client/index",$data);
    }
    public function details(){
        $dash = new Crud();
        $id = session()->get('id');
        $data['title']= 'Account Details';
        $data['page_title']= 'My Account';
        $data['site_setting']=$dash->getOne('app_settings',1);
        $data['detail']= $dash->getOneRow('users',['user_id'=>$id]);
        $data['account']= $dash->getOneRow('accounts',['user_id'=>$id]);
        // $data['totalbal']= $dash->getSum('accounts',['user_id'=>$id],'balance');
        $data['allaccounts']= $dash->getAll('accounts',['user_id'=>$id]);
        //var_dump($data['totalbal']); die();
        return view("client/profile",$data); 
    }
}
