<?php 
namespace App\Models;

use CodeIgniter\Model;

class DashboardModel extends Model{
    // Uncomment below if you want add primary key
     protected $primaryKey = 'id';
     protected $useAutoIncrement = true;

    // protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    //protected $updatedField  = 'updated_at';
    //protected $deletedField  = 'deleted_at';


    #fetch all records
    public function getAll($table){
        $builder = $this->db->table($table);
        $result = $builder->get();
        return $result->getResult();
    }
    #delete item
    public function deletePost($table,$id){
        $builder=$this->db->table($table);
            $builder->delete('id',$id);
            $result = $builder->get();
            return $result->getResult();
    }
    #update post
    public function editPost($table,$id,$data){
        $builder=$this->db->table($table);
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
    public function getOne($table,$id){
        $builder = $this->db->table($table);
        $builder->where('id', $id);
        $result = $builder->get();
        return $result->getRow();
    }
    #insert data
    public function insertData($table,$data){
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
    //This function is used to Generate Key
	public function generator($lenth)
	{
		$number = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "N", "M", "O", "P", "Q", "R", "S", "U", "V", "T", "W", "X", "Y", "Z", "1", "2", "3", "4", "5", "6", "7", "8", "9", "0");

		for ($i = 0; $i < $lenth; $i++) {
			$rand_value = rand(0, 34);
			$rand_number = $number["$rand_value"];

			if (empty($con)) {
				$con = $rand_number;
			} else {
				$con = "$con" . "$rand_number";
			}
		}
		return $con;
	}
}