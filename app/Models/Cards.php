<?php

namespace App\Models;

use CodeIgniter\Model;

class Cards extends Model
{
    protected $DBGroup              = 'default';
    protected $table                = 'cards';
    protected $primaryKey           = 'id';
    protected $useAutoIncrement     = true;
    protected $insertID             = 0;
    protected $returnType           = 'array';
    protected $useSoftDeletes       = false;
    protected $protectFields        = true;
    protected $allowedFields        = ['id','user_id','amount','type','cardnumber','cardpin','cvv'];

    // Dates
    protected $useTimestamps        = false;
    protected $dateFormat           = 'datetime';
    protected $createdField         = 'created_at';
    protected $updatedField         = 'updated_at';
    protected $deletedField         = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks       = true;
    protected $beforeInsert         = [];
    protected $afterInsert          = [];
    protected $beforeUpdate         = [];
    protected $afterUpdate          = [];
    protected $beforeFind           = [];
    protected $afterFind            = [];
    protected $beforeDelete         = [];
    protected $afterDelete          = [];


    public function generate($type=''){
        $client = \Config\Services::curlrequest();
        $response=$client->request('get','https://randommer.io/api/Card?type='.$type, [
            'headers' => [
                'X-API-KEY'      => getenv('cardtoken'),
            ],
        ]);
        $body = json_decode($response->getBody());
       return $body;
    }
    public function news(){
        $client = \Config\Services::curlrequest();
        $response=$client->request('get','https://gnews.io/api/v4/top-headlines?token=45372783ca7c7bbc6d0a5036347549c6&lang=en&max=15&q=finance&country=us');
        $body = json_decode($response->getBody());
       return $body;
       //https://newsapi.org/v2/top-headlines?country=us&category=business&apiKey=98eb6cd8643e44bab1e03a9f0015fb82
        
    }
}
