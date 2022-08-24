<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Crud;
use phpDocumentor\Reflection\Location;
use App\Libraries\Country;
use Dompdf\Dompdf;
use Dompdf\Options;

class Transfer extends BaseController
{
    public function __construct()
    {
        if (session()->get('role') != "client") {
            header('Location: /login');
            die();
        }
        $this->country = new Country();
    }
    public function index()
    {
        $crud = new Crud();
        $id = session()->get('id');
        $data['title'] = 'Transfer | Ofusebank';
        $data['site_setting'] = $crud->getOne('app_settings', 1);
        $data['transactions'] = $crud->getAll('tbl_transaction', ['user_id' => $id]);
        $data['user'] = $crud->getOne('users', session()->get('id'));
        //var_dump($data['cards']); die();
        return view('client/transfer_index', $data);
    }

    public function standingorder()
    {
        $crud = new Crud();
        $id = session()->get('id');
        $data['country'] = $this->country->getCountry();
        $data['title'] = 'Standing Order | Ofusebank';
        $data['site_setting'] = $crud->getOne('app_settings', 1);
        return view('client/transfer_standingorder', $data);
    }
    public function pin()
    {
        $crud = new Crud();
        $session = session();
        $id = session()->get('id');
        $data['title'] = 'Verify Transaction PIN | Ofusebank';
        $data['site_setting'] = $crud->getOne('app_settings', 1);
        if ($this->request->getMethod() == 'post') {

            $pin = $this->request->getVar('pin1') . $this->request->getVar('pin2') . $this->request->getVar('pin3') . $this->request->getVar('pin4');
            //var_dump($); die();
            //session()->set($pin);
            $rules = [
                'pin1' => 'required|max_length[1]|numeric',
                'pin2' => 'required|max_length[1]|numeric',
                'pin3' => 'required|max_length[1]|numeric',
                'pin4' => 'required|max_length[1]|numeric',
            ];
            //var_dump($rules); die();
            if (!$this->validate($rules)) {

                $session->setFlashdata('error', "Invalid Transaction Pin");
                return redirect()->to(base_url('transfer/pin'));
            } else {
                $trx_no = $crud->random_strings(14);
                $data = [
                    'bname' => session()->inttransfer['ben_name'],
                    'to_accno' => session()->inttransfer['to_accno'],
                    'to_bank' => session()->inttransfer['to_bank'],
                    'swiftcode' => session()->inttransfer['swiftcode'],
                    'reference' => session()->inttransfer['reference'],
                    'country' => session()->inttransfer['country'],
                    'amount' => session()->inttransfer['amount'],
                    'tx_type' => 'debit',
                    'tx_no' => $trx_no,
                    'user_id' => $id,
                    'status' => 'otp',
                ];
                //var_dump($data); die();
                $otp = rand(100000, 999999);
                $lastid = $crud->insert_return_id('tbl_transaction', $data);

                $new = [
                    'code' => $otp,
                    'trx_id' => $lastid,
                    'user_id' => $id,
                    'status' => 'unused'
                ];
                $crud->insertData('otp', $new);

                $session->remove($data);
                $session->setFlashdata('success', "International transfer successful");
                return redirect()->to(base_url('transfer/otp'));
            }
        }
        return view('client/otp', $data);
    }
    public function manager()
    {
        $crud = new Crud();
        $id = session()->get('id');
        $data['title'] = 'Manager Approval | Ofusebank';
        $data['site_setting'] = $crud->getOne('app_settings', 1);
        return view('client/manager', $data);
    }
    public function audit()
    {
        $crud = new Crud();
        $id = session()->get('id');
        $session = session();
        $data['title'] = 'Audit Department | Ofusebank';
        $data['site_setting'] = $crud->getOne('app_settings', 1);

        //var_dump($rules); die();
        if ($this->request->getMethod() == 'post') {
            $rules = [
                'otp' => 'required|numeric',
            ];
            if (!$this->validate($rules)) {

                $session->setFlashdata('error', "Invalid Audit Code");
                return redirect()->to(base_url('transfer/audit'));
            } else {
                $otp = $crud->getOneRow('otp', ['code' => $this->request->getVar('otp'), 'user_id' => $id]);
                //var_dump($otp); die();

                if ($otp) {
                    $data = [
                        'status' => 'used',
                    ];
                    $update = $crud->updateData('otp', $otp->id, $data);
                    if ($update) {
                        $rand = rand(100000, 999999);
                        $lastid = $otp->trx_id;
                        // $new = [
                        //     'code' => $rand,
                        //     'trx_id' => $lastid,
                        //     'user_id' => $id,
                        //     'status' => 'unused',
                        //     'type'=>'audit',
                        // ];
                        $data = ['status' => 'audit'];
                        // $crud->insertData('otp',$new);
                        $crud->updateData('tbl_transaction', $lastid, $data);
                        $session->setFlashdata('success', "International transfer submitted and awaiting Audit approval");
                        return redirect()->to(base_url('transfer/manager'));
                    }
                } else {
                    session()->setFlashdata('error', "You have provided an invalid transfer code");
                    return redirect()->to(base_url('transfer/otp'));
                    exit;
                }
            }
        }
        return view('client/bank_code', $data);
    }
    public function fraud()
    {
        $crud = new Crud();
        $id = session()->get('id');
        $data['title'] = 'Fraud department | Ofusebank';
        $data['site_setting'] = $crud->getOne('app_settings', 1);
        return view('client/manager', $data);
    }
    public function approved()
    {
        $crud = new Crud();
        $id = session()->get('id');
        $data['title'] = 'Transaction Approved | Ofusebank';
        $data['site_setting'] = $crud->getOne('app_settings', 1);
        return view('client/manager', $data);
    }
    public function otp()
    {
        $crud = new Crud();
        $id = session()->get('id');
        $session = session();
        $data['title'] = 'Bank Generated Code | Ofusebank';
        $data['site_setting'] = $crud->getOne('app_settings', 1);

        //var_dump($rules); die();
        if ($this->request->getMethod() == 'post') {
            $rules = [
                'otp' => 'required|numeric',
            ];
            if (!$this->validate($rules)) {

                $session->setFlashdata('error', "Invalid Transfer Code");
                return redirect()->to(base_url('transfer/otp'));
            } else {
                $otp = $crud->getOneRow('otp', ['code' => $this->request->getVar('otp'), 'user_id' => $id]);
                //var_dump($otp); die();

                if ($otp) {
                    $data = [
                        'status' => 'used',
                    ];
                    $update = $crud->updateData('otp', $otp->id, $data);
                    if ($update) {
                        $rand = rand(100000, 999999);
                        $lastid = $otp->trx_id;
                        $new = [
                            'code' => $rand,
                            'trx_id' => $lastid,
                            'user_id' => $id,
                            'status' => 'unused',
                            'type' => 'audit',
                        ];
                        $data = ['status' => 'manager'];
                        $crud->insertData('otp', $new);
                        $crud->updateData('tbl_transaction', $lastid, $data);
                        $session->setFlashdata('success', "International transfer submitted and awaiting manager approval");
                        return redirect()->to(base_url('transfer/manager'));
                    }
                } else {
                    session()->setFlashdata('error', "You have provided an invalid transfer code");
                    return redirect()->to(base_url('transfer/otp'));
                    exit;
                }
            }
        }
        return view('client/bank_code', $data);
    }
    public function local()
    {
        $crud = new Crud();
        $id = session()->get('id');
        $data['title'] = 'Transfer | Local';
        $data['site_setting'] = $crud->getOne('app_settings', 1);
        if ($this->request->getMethod() == 'post') {
            $check = $crud->countRow('tbl_transaction', ['user_id' => $id, 'approved' => 'false']);
            if ($check > 0) {
                session()->setFlashdata('error', "You have a Pending Transfer kindly wait.");
                return redirect()->to(base_url('client'));
                exit;
            }
        }
        return view('client/transfer_local', $data);
    }
    public function international()
    {

        $crud = new Crud();
        $id = session()->get('id');
        $data['country'] = $this->country->getCountry();
        $data['title'] = 'Transfer International | Ofusebank';
        $data['site_setting'] = $crud->getOne('app_settings', 1);
        if ($this->request->getMethod() == 'post') {
            $check = $crud->countRow('tbl_transaction', ['approved' => 'false']);
            if ($check > 0) {
                session()->setFlashdata('error', "You have a Pending Transfer kindly wait.");
                return redirect()->to(base_url('client'));
                exit;
            }
            $data = [
                'ben_name' => $this->request->getVar('ben_name'),
                'to_accno' => $this->request->getVar('to_accno'),
                'to_bank' => $this->request->getVar('ben_bank'),
                'swiftcode' => $this->request->getVar('swift'),
                'reference' => $this->request->getVar('reference'),
                'country' => $this->request->getVar('country'),
                'amount' => $this->request->getVar('amount'),
                'tx_type' => 'debit',
                'user_id' => $id,
                'status' => 'otp',
            ];
            //$lastid=$crud->insert_return_id('tbl_transaction',$data);

            session()->set('inttransfer', $data);
            return redirect()->to(base_url('transfer/pin'));
        }
        //var_dump($data['country']); die();
        return view('client/transfer_international', $data);
    }
    public function pdf($detail)
    {
        $crud = new Crud();
        $id = session()->get('id');
        $data['country'] = $this->country->getCountry();
        $data['title'] = 'Transfer International | Ofusebank';
        $data['site_setting'] = $crud->getOne('app_settings', 1);
        $data['detail'] = $crud->getOneRow('tbl_transaction', ['id' => $detail]);
        $data['user'] = $crud->getOneRow('users', ['id' => $id]);
        $options = new Options();
        $options->set('isRemoteEnabled', TRUE);
        $dompdf = new Dompdf($options);
        $html = view('client/pdf', $data);
        $html .= '<style>
        ' . file_get_contents("./assets/css/bootstrap.min.css") . '
        </style>';
        $html .= '<style>
        ' . file_get_contents("./assets/css/app.min.css") . '
        </style>';

        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
        $dompdf->stream(); //
    }
}
