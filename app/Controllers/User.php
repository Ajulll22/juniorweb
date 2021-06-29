<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\SiswaModel;
use App\Models\UserModel;

class User extends Controller
{
	public function __construct() {
 
		// Mendeklarasikan class ProductModel menggunakan $this->product
		$this->siswa = new SiswaModel();
		$this->user = new UserModel();
		/* Catatan:
		Apa yang ada di dalam function construct ini nantinya bisa digunakan
		pada function di dalam class Product 
		*/
	}


	public function index()
	{
		$who = session();
		$data['user'] = $who->get();
		return view('User/dashboard', $data);
	}

	public function form()
	{
		$who = session();
		$data['user'] = $who->get();
		return view('User/form', $data);
	}

	public function sudah()
	{
		$who = session();
		$data['user'] = $who->get();
		return view('User/sudah', $data);
	}

	public function status($id)
	{
		$who = session();
		$data['siswa'] = $this->siswa->getSiswa($id);
		$data['user'] = $who->get();
		return view('User/status', $data);
	}

	public function daftar()
	{
		$siswa_nama = $this->request->getPost('siswa_nama');
		$siswa_nisn = $this->request->getPost('siswa_nisn');
		$siswa_tempat = $this->request->getPost('siswa_tempat');
		$tanggal_lahir = $this->request->getPost('tanggal_lahir');
		$siswa_jk = $this->request->getPost('siswa_jk');
		$siswa_agama = $this->request->getPost('siswa_agama');
		$siswa_sekolah = $this->request->getPost('siswa_sekolah');
		$nilai_mtk = $this->request->getPost('mtk');
		$nilai_inggris = $this->request->getPost('inggris');
		$user_id = $this->request->getPost('user_id');

		$data = [
			'siswa_nama' => $siswa_nama,
			'siswa_nisn' => $siswa_nisn,
			'siswa_tempat' => $siswa_tempat,
			'tanggal_lahir' => $tanggal_lahir,
			'siswa_jk' => $siswa_jk,
			'siswa_agama' => $siswa_agama,
			'siswa_sekolah' => $siswa_sekolah,
			'nilai_mtk' => $nilai_mtk,
			'nilai_inggris' => $nilai_inggris,
			'user_id' => $user_id
		];

		$simpan = $this->siswa->insert_siswa($data);

		if($simpan)
        {
			$ubah = 'sudah';
			$status = [
				'status' => $ubah
			];
			$session = session();
			$id = $session->get('user_id');

			$this->user->update_user($status, $id);
	
			$ses_data = [
				'user_id'       => $id,
				'user_name'     => $session->get('user_name'),
				'nama_lengkap'  => $session->get('nama_lengkap'),
				'status' 		=> $ubah,
				'logged_in'     => TRUE
			];
			$session->set($ses_data);
        // Deklarasikan session flashdata dengan tipe success
        session()->setFlashdata('success', 'Created successfully');
        // Redirect halaman ke product
        return redirect()->to(base_url('/User')); 
        }

	}
}
