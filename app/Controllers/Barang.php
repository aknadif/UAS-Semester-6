<?php 

namespace App\Controllers;

use App\Models\BarangModel;

class Barang extends BaseController{
    protected $barangModel;
    public function __construct()
    {
        $this->barangModel = new BarangModel();
    }

    public function index()
    {
        $session = session();
        $data =  [
            'nama_barang' => 'Daftar Barang',
            'barang' => $this->barangModel->getBarang(),
            'level' => $session->get('level')
        ];
        return view('barang/index', $data);
    }


    public function detail($id)
    {
        $data =  [
            'nama_barang' => 'Detail Barang',
            'barang' => $this->barangModel->getBarang($id)
        ];
        if(empty($data['barang'])){
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Nama Barang '.$id.' Tidak di Temukan');
        }
        return view('barang/detail', $data);
    }

    public function create()
    {
        session();
        $data=[
            'nama_barang' => 'Form Tambah Data Barang',
            'validation' => \Config\Services::validation()
        ];
        return view('barang/create', $data);
    }

    public function save()
    {
        // Validasi Input
        if(!$this->validate([
            'nama_barang' => 'required'
        ])){
            $validation = \Config\Services::validation();
            return redirect()->to('/barang/create')->with('validation', $validation);
        }

       $this->barangModel->save([
           'nama_barang' => $this->request->getVar('nama_barang'),
           'harga_jual' => $this->request->getVar('harga_jual'),
           'jumlah' => $this->request->getVar('jumlah'),
       ]);

       session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

       return redirect()->to(base_url('/barang')); 
    }

    public function delete($id)
    {
        $this->barangModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus.');
        return redirect()->to(base_url('/barang')); 
    }

    public function ubah($id)
    {
        session();
        $data=[
            'nama_barang' => 'Form Ubah Data Barang',
            'validation' => \Config\Services::validation(),
            'barang' => $this->barangModel->getBarang($id)
        ];
        return view('barang/ubah', $data);
    }
    public function kurang($id)
    {
        session();
        $data=[
            'nama_barang' => 'Form Kurang Data Barang',
            'validation' => \Config\Services::validation(),
            'barang' => $this->barangModel->getBarang($id)
        ];
        return view('barang/kurang', $data); 
    }

    public function update($id)
    {
        $this->barangModel->save([
            'id' => $id,
            'nama_barang' => $this->request->getVar('nama_barang'),
            'harga_jual' => $this->request->getVar('harga_jual'),
            'jumlah' => $this->request->getVar('jumlah'),
        ]);
 
        session()->setFlashdata('pesan', 'Data berhasil diubah.');
 
        return redirect()->to(base_url('/barang')); 
    }
}