<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{
    protected $table = 'login';
    protected $primaryKey ='username';
    protected $allowedFields =['username','password'];
    protected $useAutoIncrement = false;
    
    public function login($login){
     return $this->where(['username' => $login['username'], 'password' => $login['password']])->first();
    }
     
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




