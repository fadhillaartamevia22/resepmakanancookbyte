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