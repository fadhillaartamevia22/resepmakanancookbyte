<?php

namespace App\Models;

use CodeIgniter\Model;

class LangkahMakanModel extends Model
{
    protected $table = 'tb_resepmakanan';
    protected $primaryKey = 'l_id';
    protected $allowedFields = ['r_id', 'langkahmakanan'];
    protected $returnType = 'object';
    protected $takaran = 100;

    // Object class get data tabel tb_resepmakanan by id
    public function getLangkahMakan($id)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table($this->table);
        $builder->where('l_id', $id);
        $query = $builder->get();
 


        return $query->getResult();
    }

    public function printBahanMakanan(){
        echo "Terigu";
    }

    public function hitungTakaran(){
        return 10 * $this->takaran;
    }
}
