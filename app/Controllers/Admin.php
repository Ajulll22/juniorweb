<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\SiswaModel;
use App\Models\UserModel;

class Admin extends Controller
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
		$data['siswa'] = $this->siswa->getSiswa();
		$data['user'] = $who->get();
		return view('Admin/home', $data);
	}

	public function terima($id)
	{
		$status = 'Terima';
		$data = [
			'status' => $status
		];

		$update = $this->siswa->update_siswa($data, $id);
		if($update)
        {
			return redirect()->to(base_url('/Admin'));
		}
	}

	public function tolak($id)
	{
		$status = 'Tolak';
		$data = [
			'status' => $status
		];

		$update = $this->siswa->update_siswa($data, $id);
		if($update)
        {
			return redirect()->to(base_url('/Admin'));
		}
	}

	public function cadang($id)
	{
		$status = 'Cadang';
		$data = [
			'status' => $status
		];

		$update = $this->siswa->update_siswa($data, $id);
		if($update)
        {
			return redirect()->to(base_url('/Admin'));
		}
	}
}
