<?php

namespace App\Models;

use CodeIgniter\Model;

class ResepMakananModel extends Model
{
    protected $table = 'tb_resepmakanan';
    protected $primaryKey = 'b_id';
    protected $allowedFields = ['r_id', 'nama_bahan'];
    protected $takaran = 50;

    protected $returnType = 'object';
// Object class get data tabel tb_resepmakanan by id
    public function getResepMakanan($id)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table($this->table);
        $builder->where('r_id', $id);
        $query = $builder->get();

        return $query->getResult();
    }

    // Tambahkan metode lainnya sesuai kebutuhan
    public function printBahanMakanan(){
        echo "Telur";
    }

    public function hitungTakaran(){
        return 2 * $this->takaran * 5;
    }
}
