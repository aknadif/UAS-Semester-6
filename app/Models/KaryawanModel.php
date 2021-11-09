<?php

namespace App\Models;

use CodeIgniter\Model;

class KaryawanModel extends Model
{
    protected $table      = 'karyawan';
    protected $primaryKey = 'id_karyawan';
    protected $useTimestamps = true;
    protected $allowedFields = ['NIK', 'nama_karyawan', 'divisi_karyawan', 'level_karyawan', 'alamat_karyawan', 'gender_karyawan'];

    public function getKaryawan($id = false)
    {
        if($id == false){
            return $this->findAll();
        }
        return $this->where(['id_karyawan' => $id])->first();
    }
}