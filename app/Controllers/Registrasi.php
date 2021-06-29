<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\UserModel;
 
class Registrasi extends Controller
{
    public function index()
    {
        //include helper form
        helper(['form']);
        echo view('registrasi');
    }
 
    public function save()
    {
        //include helper form
        helper(['form']);
        //set rules validation form
        $rules = [
            'nama_lengkap'      => 'required|min_length[3]|max_length[20]',
            'username'          => 'required|min_length[3]|max_length[20]',
            'password'      => 'required|min_length[6]|max_length[200]',
            'confpassword'  => 'matches[password]'
        ];
         
        if($this->validate($rules)){
            $model = new UserModel();
            $data = [
                'nama_lengkap'  => $this->request->getVar('nama_lengkap'),
                'user_name'     => $this->request->getVar('username'),
                'user_password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
            ];
            $model->save($data);
            return redirect()->to(base_url('/Login'));
        }else{
            $data['validation'] = $this->validator;
            return redirect()->to(base_url('/Registrasi'));
        }
         
    }
 
}