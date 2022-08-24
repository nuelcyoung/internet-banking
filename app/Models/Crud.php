<?php

namespace App\Models;

use CodeIgniter\Model;

class Crud extends Model
{
  protected $DBGroup              = 'default';
  protected $table                = 'cruds';
  protected $primaryKey           = 'id';
  protected $useAutoIncrement     = true;
  protected $insertID             = 0;
  protected $returnType           = 'array';
  protected $useSoftDeletes       = false;
  protected $protectFields        = true;
  protected $allowedFields        = [];

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

  #fetch all records
  public function getAll($table, $where = array(), $groupBy = '')
  {
    // $builder = $this->db->table($table);
    // $result = $builder->get();
    // return $result->getResult();
    return $result = $this->db->table($table)
      ->where($where)
      ->groupBy($groupBy)
      ->get()
      ->getResult();
  }
  #delete item
  public function deleteData($table, $id)
  {
    $builder = $this->db->table($table);
    $builder->delete('id', $id);
    $result = $builder->get();
    return $result->getResult();
  }
  #update post
  public function updateData($table, $id, $data)
  {
    $builder = $this->db->table($table);
    $builder->where('id', $id);
    $builder->update($data);
    $result = $builder->get();
    return $result->getResult();
  }
  #fetch single table result
  public function countRow($table, $where = array(), $groupBy = '')
  {
    return $result = $this->db->table($table)
      ->where($where)
      ->groupBy($groupBy)
      ->countAllResults();
  }
  public function getOne($table, $id)
  {
    $builder = $this->db->table($table);
    $builder->where('id', $id);
    $result = $builder->get();
    return $result->getRow();
  }
  public function getOneRow($table, $id = array())
  {
    $builder = $this->db->table($table);
    $builder->where($id);
    $result = $builder->get();
    return $result->getRow();
  }
  public function getSum($table, $id = array(), $sum)
  {
    $builder = $this->db->table($table);
    $builder->selectSum($sum);
    $builder->where($id);
    $result = $builder->get();
    return $result->getRow();
  }
  #insert data
  public function insertData($table, $data)
  {
    $builder = $this->db->table($table);
    $builder->insert($data);
    $result = $builder->get();
    return $result->getRow();
  }
  public function insert_return_id($table, $data = [])
  {
    $builder = $this->db->table($table);
    $builder->insert($data);
    return $this->db->insertID();
  }

  public function joinOne($user_id, $mainTable, $joinTable)
  {
    $builder = $this->db->table($mainTable);
    $builder->select('*');
    $builder->join($joinTable, $joinTable . '.' . 'user_id=users.id');
    $builder->where($mainTable . '.' . 'id', $user_id);
    $result = $builder->get();
    return $result->getResult();
  }
  public function random_strings($length_of_string)
  {
    return substr(chunk_split(md5(time()), 4, '-'), 0, $length_of_string);
  }
}
