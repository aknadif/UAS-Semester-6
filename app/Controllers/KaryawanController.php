<?php 

namespace App\Controllers;
use App\Models\KaryawanModel;

class KaryawanController extends BaseController{
    protected $karyawanModel;
    public function __construct()
    {
        $this->karyawanModel = new KaryawanModel();
    }
    public function index()
    {
        $session = session();
        $data =  [
            'nama_karyawan' => 'Daftar Karyawan',
            'karyawan' => $this->karyawanModel->getKaryawan(),
            'level' => $session->get('level')
        ];
        return view('karyawan/index', $data);
    }
    public function detail($id)
    {
        $data =  [
            'nama_karyawan' => 'Detail Karyawan',
            'karyawan' => $this->karyawanModel->getKaryawan($id)
        ];
        if(empty($data['karyawan'])){
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Nama Karyawan '.$id.' Tidak di Temukan');
        }
        return view('karyawan/detail', $data);
    }
    public function create()
    {
        session();
        $data=[
            'nama_karyawan' => 'Form Tambah Data Karyawan',
            'validation' => \Config\Services::validation()
        ];
        return view('karyawan/create', $data);
    }
    public function save()
    {
        // Validasi Input
        if(!$this->validate([
            'nama_karyawan' => 'required'
        ])){
            $validation = \Config\Services::validation();
            return redirect()->to('/karyawan/create')->with('validation', $validation);
        }

       $this->karyawanModel->save([
           'nama_karyawan' => $this->request->getVar('nama_karyawan'),
           'NIK' => $this->request->getVar('NIK'),
           'alamat_karyawan' => $this->request->getVar('alamat_karyawan'),
           'gender_karyawan' => $this->request->getVar('gender_karyawan'),
           'divisi_karyawan' => $this->request->getVar('divisi_karyawan'),
           'level_karyawan' => $this->request->getVar('level_karyawan'),
       ]);

       session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

       return redirect()->to(base_url('/karyawan')); 
    }
    public function ubah($id)
    {
        session();
        $data=[
            'nama_karyawan' => 'Form Ubah Data Karyawan',
            'validation' => \Config\Services::validation(),
            'karyawan' => $this->karyawanModel->getKaryawan($id)
        ];
        return view('karyawan/ubah', $data);
    }
    public function update($id)
    {
        $this->karyawanModel->save([
            'id_karyawan' => $id,
            'nama_karyawan' => $this->request->getVar('nama_karyawan'),
            'NIK' => $this->request->getVar('NIK'),
            'alamat_karyawan' => $this->request->getVar('alamat_karyawan'),
            'gender_karyawan' => $this->request->getVar('gender_karyawan'),
            'divisi_karyawan' => $this->request->getVar('divisi_karyawan'),
            'level_karyawan' => $this->request->getVar('level_karyawan'),
        ]);
 
        session()->setFlashdata('pesan', 'Data berhasil diubah.');
 
        return redirect()->to(base_url('/karyawan')); 
    }
    public function delete($id)
    {
        $this->karyawanModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus.');
        return redirect()->to(base_url('/karyawan')); 
    }
}