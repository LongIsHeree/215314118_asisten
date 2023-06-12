<?php
namespace App\Models;

use CodeIgniter\Model;

class AsistenModel extends Model
{
protected $table = 'asisten';
protected $primaryKey ='nim';
protected $allowedFields = ['nim', 'nama', "praktikum", "ipk"];


 public function simpan($record)
{
    $this->save([
    'nim' => $record['nim'],
    'nama' => $record['nama'],
    'praktikum' => $record['praktikum'],
    'ipk' => $record['ipk'],
    ]);
    }
 public function ubah($data){
    $this->save([
        'nim' => $data['nim'],
        'nama' => $data['nama'],
        'praktikum' => $data['praktikum'],
        'ipk' => $data['ipk'],
        ]);
    }
    
public function hapus($record){
    $this->delete([
        'nim' => $record['nim'],
        ]);
    }

}

