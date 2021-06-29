<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class Login extends Controller
{
    public function index()
    {
        helper(['form']);
        echo view('login');
        
    } 
 
    public function auth()
    {
        $session = session();
        $model = new UserModel();
        $name = $this->request->getVar('name');
        $password = $this->request->getVar('password');
        $data = $model->where('user_name', $name)->first();
        $role = $data['role'] ;
        if($data){
            $pass = $data['user_password'];
            $verify_pass = password_verify($password, $pass);
            if($verify_pass){
                $ses_data = [
                    'user_id'       => $data['user_id'],
                    'user_name'     => $data['user_name'],
                    'nama_lengkap'  => $data['nama_lengkap'],
                    'status'        => $data['status'],
                    'logged_in'     => TRUE
                ];
                $session->set($ses_data);
                if( $role == 1){
                    return redirect()->to(base_url('/Admin')); 
                }
                else{
                    return redirect()->to(base_url('/User')); 
                }
            }
            else{
                $session->setFlashdata('msg', 'Wrong Password');
                return redirect()->to(base_url('/login')); 
            }
        }
        else{
            $session->setFlashdata('msg', 'Username not Found');
            return redirect()->to(base_url('/login'));
        }
    }
 
    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to(base_url('/Login'));
    }
}
