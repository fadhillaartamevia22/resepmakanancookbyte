<?php

namespace App\Models;

use CodeIgniter\Model;
interface LangkahMakanInterface
{
    public function getLangkahMakanan($id);

    public function createLangkahMakanan($data);

    public function updateLangkahMakanan($id, $data);

    public function deleteLangkahMakanan($id);

}
class Bahanmakanan extends Models implements LangkahMakanInterface
{
    protected $table = 'tb_resepmakanan';
    protected $primaryKey = 'b_id';
    protected $allowedFields = ['r_id', 'nama_bahan'];

    protected $returnType = 'object';
    // Object class get data tabel tb_resepmakanan by id
    public function getBahanmakanan($id)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table($this->table);
        $builder->where('b_id', $id);
        $query = $builder->get();

        return $query->getResult();
    }

    // encapsulation property get set
    private $createdAt;
    private $updatedAt;

    public function printBahanMakanan(){
        echo "Nama Bahan Makanan";
        
    }

    abstract public function hitungTakaran();

    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }

    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
    }
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    public function createLangkahMakanan($data)
    {
        $data['created_at'] = $this->getCreatedAt();
        $data['updated_at'] = $this->getUpdatedAt();

        return $this->insert($data);
    }

    public function updateLangkahMakanan($id, $data)
    {
        $data['updated_at'] = $this->getUpdatedAt();

        return $this->update($id, $data);
    }
}

abstract class Shape {
    protected String color;

    public Shape(String color) {
        this.color = color;
    }

    public abstract double getArea();

    public abstract double getPerimeter();

    public String getColor() {
        return color;
    }
}