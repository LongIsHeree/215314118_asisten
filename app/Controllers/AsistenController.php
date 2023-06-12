<?php
namespace App\Controllers;
use App\Models\AsistenModel;
use App\Models\LoginModel;
class AsistenController extends BaseController{
        protected $asistenModel;
        protected $loginModel;
        public function __construct(){
            $this->asistenModel = new AsistenModel();
            $this->loginModel = new LoginModel();
    }
    public function home(){ 
        $asistenModel = new AsistenModel();
        $asisten = $asistenModel->findAll();
        $data = [
            'title'=> 'Daftar Asisten Praktikum',
            'asisten' => $asisten
        ];
        $session = session();
        if($session->has('pengguna')){
            $item = $session->get('pengguna');
            if($item == 'admin'){
                
                return view('HomeView',$data);
            }else{
                return view ('Login');
            }
        }
        else{
            return view('Login');
        }
    }
    public function logout(){
        $session = session();
        $session->remove('pengguna');
        return view('Login');
    }
    public function check(){
        $asistenModel = new AsistenModel();
        $asisten = $asistenModel->findAll();
        $getPost = $this->request->getPost(['username','password']);
        $loginModel = new LoginModel();
        $validasi = $this->loginModel->login($getPost);
        $data = [
            'title'=> 'Daftar Asisten Praktikum',
            'asisten' => $asisten
        ];
        $post = $this->request->getPost(['usr','pwd']);
        if($validasi>0){
            $session = session();
            $session->set('usr', $post['usr']);
            return view('HomeView',$data);
        }else{
            return view('Login/fail');
        }
    }
    public function login(){
        return view('Login');
    }
    public function index()
    {
        $asistenModel = new AsistenModel();
        $asisten = $asistenModel->findAll();
        $data = [
            'title'=> 'Daftar Asisten Praktikum',
            'asisten' => $asisten
        ];
        return view('AsistenView',$data);
    }
    public function simpan(){
helper('form');
// Memeriksa apakah melakukan submit data atau tidak.
if (!$this->request->is('post')) {
    return view('AsistenView');
    }
     // Mengambil data yang disubmit dari form
    $post = $this->request->getPost(['nim', 'nama', "praktikum", 
    "ipk"]);
     // Mengakses Model untuk menyimpan data
    $this->asistenModel->simpan($post);
    return view('Success');
    }
    public function ubah(){
// Memeriksa apakah melakukan submit data atau tidak.
        if (!$this->request->is('post')) {
        return view('Update');
        }
     // Mengambil data yang disubmit dari form
    $post = $this->request->getPost(['nim', 'nama', "praktikum", 
    "ipk"]);
     // Mengakses Model untuk menyimpan data
    $this->asistenModel->ubah($post);
    return view('Update');   
    }
public function hapus(){
// Memeriksa apakah melakukan submit data atau tidak.
if (!$this->request->is('post')) {
    return view('Delete');
    }
     // Mengambil data yang disubmit dari form
    $post = $this->request->getPost(['nim', 'nama', "praktikum", 
    "ipk"]);
     // Mengakses Model untuk menyimpan data
    $this->asistenModel->hapus($post);
    return view('Delete');
}
public function search(){
    $asistenModel = new AsistenModel();
    $asisten = $asistenModel->findAll();
    if(!$this -> request ->is('post')){
        return view('HomeView');
    }
        $nim = $this->request->getPost(['key']);

        $model = model(AsistenModel::class);
        $asistenM = $model->ambil($nim['key']);

        $data = ['hasil' => $asistenM,
                'asisten' => $asisten];
        return view('HomeView',$data);
    
}
}

