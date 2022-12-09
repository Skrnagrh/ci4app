<?php

namespace App\Models;

use CodeIgniter\Model;

class OrangModel extends Model
{
    protected $table = 'orang';
    protected $useTimetamps = true;
    protected $allowedFields = ['nama', 'alamat'];

    public function search($keyword)
    {
        // $builder = $this->table('orang');
        // $builder->like('nama', 'alamat');
        // return $builder;
        return $this->table('orang')->like('nama', $keyword)->orlike('alamat', $keyword);
    }
}
