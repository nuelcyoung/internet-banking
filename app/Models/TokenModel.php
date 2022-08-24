<?php 
namespace App\Models;

use CodeIgniter\Model;

class TokenModel extends Model{
    protected $table      = 'tokens';
    // Uncomment below if you want add primary key
     protected $primaryKey = 'id';
     protected $useAutoIncrement = true;

    // protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['id', 'token', 'user_id'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    //protected $updatedField  = 'updated_at';
    //protected $deletedField  = 'deleted_at';
 
    public function insertToken($user_id){
        $token = substr(sha1(rand()),0,30);
        $date = date('Y-m-d');
        $data = [
            'token'=>$token,
            'user_id'=>$user_id,
            'created_at'=>$date,
        ];
        $builder = $this->db->table('tokens');
        $builder->insert($data);
        return $token.$user_id;
    }
    public function isTokenValid($token){
        $istoken= substr($token,0,30);
        $uid=substr($token,30);

        $q = $this->db->table('tokens')->where(array('token'=>$istoken,'user_id'=>$uid));
        $row = $q->get()->getRow();
        //var_dump($row); die();
        if($row){
            $created = $row->created_at;
            $createdcnv = $created;
            $today = date('Y-m-d');
            if($createdcnv !=$today){
                return false;
            }
            return $row;
        }else{
            return false;
        }
    }
}