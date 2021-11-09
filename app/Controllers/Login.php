<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\UsersModel;
 
class Login extends Controller
{
    public function __construct()
    {
        $this->usersModel = new UsersModel();
    }
    public function index()
    {
        echo view('login');
    } 
 
    public function process()
    {
        $users = new UsersModel();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $dataUser = $users->where([
            'username' => $username,
        ])->first();
        if ($dataUser) {
            if (password_verify($password, $dataUser->password)) {
                session()->set([
                    'username' => $dataUser->username,
                    'name' => $dataUser->name,
                    'level' => $dataUser->level,
                    'logged_in' => TRUE
                ]);
                return redirect()->to(base_url(''));
            } else {
                session()->setFlashdata('error', 'Username & Password Salah');
                return redirect()->back();
            }
        } else {
            session()->setFlashdata('error', 'Username & Password Salah');
            return redirect()->back();
        }
    }
 
    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
} 