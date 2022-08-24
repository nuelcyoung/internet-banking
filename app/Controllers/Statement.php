<?php

namespace App\Controllers;
use App\Models\Crud;
use App\Controllers\BaseController;

class Statement extends BaseController
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
        $id = session()->get('id');
        $data['title']= 'Statement Account';
        $data['page_title']= 'My Account';
        $data['site_setting']=$dash->getOne('app_settings',1);
        // $data['detail']= $dash->getOneRow('users',['user_id'=>$id]);
        // $data['account']= $dash->getOneRow('accounts',['user_id'=>$id]);
        // $data['totalbal']= $dash->getSum('accounts',['user_id'=>$id],'balance');
        $data['allstatement']= $dash->getAll('tbl_transaction',['user_id'=>$id]);
        //var_dump($data['totalbal']); die();
        return view("client/statement",$data); 
    }
    public function view($detail){
        $dash = new Crud();
        $id = session()->get('id');
        $data['title']= 'Statement View';
        $data['page_title']= 'My Account';
        $data['site_setting']=$dash->getOne('app_settings',1);
        $data['user']= $dash->getOneRow('users',['id'=>$id]);
        // $data['account']= $dash->getOneRow('accounts',['user_id'=>$id]);
        // $data['totalbal']= $dash->getSum('accounts',['user_id'=>$id],'balance');
        $data['detail']= $dash->getOneRow('tbl_transaction',['id'=>$detail]);
        //var_dump($data['detail']); die();
        return view("client/statement_detail",$data); 
    }
    public function pdf($detail){
        $dash = new Crud();
        $id = session()->get('id');
        $data['title']= 'Statement View';
        $data['page_title']= 'My Account';
        $data['site_setting']=$dash->getOne('app_settings',1);
        $data['user']= $dash->getOneRow('users',['id'=>$id]);
        $data['detail']= $dash->getOneRow('tbl_transaction',['id'=>$detail]);
        $dompdf = new \Dompdf\Dompdf(); 
        $html = view('client/pdf', $data);
        $html .= '<style>
' . file_get_contents("./assets/css/bootstrap.min.css") . '
</style>';
        $html .= '<style>
' . file_get_contents("./assets/css/app.min.css") . '
</style>';

        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();
        $dompdf->stream();
    }
}