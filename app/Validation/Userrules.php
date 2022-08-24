<?php

namespace App\Validation;
use App\Models\UserModel;

class Userrules
{
    public function validateUser(string $str, string $fields, array $data)
    {
        $model = new UserModel();
        if(is_numeric($data['account_no'])){
            $user = $model->where('account_no',$data['account_no'])
        ->first();
        }else{
            $user = $model->where('email',$data['account_no'])
        ->first();
        }
        
        
        if (!$user) {
            return false;
        }

        return password_verify($data['password'], $user['password']);
    }
    public function validatePin(string $str, string $fields, array $data)
    {
        $model = new UserModel();
        $session = session();
        $pin=$data['pin1'].$data['pin2'].$data['pin3'].$data['pin4'];
        $user = $model->where('account_no', $session->get('account_no'))
                        ->where('transaction_pin', $pin)
            ->first();
        if (!$user) {
            return false;
        }
        return true;
        
    }
}
