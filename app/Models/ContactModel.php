<?php 
namespace App\Models;

use CodeIgniter\Model;

class ContactModel extends Model{
    protected $table      = 'contact';
    // Uncomment below if you want add primary key
     protected $primaryKey = 'id';
     protected $useAutoIncrement = true;

    // protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['id', 'title', 'subtitle', 'address', 'phone', 'email'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    //protected $updatedField  = 'updated_at';
    //protected $deletedField  = 'deleted_at';
 
}