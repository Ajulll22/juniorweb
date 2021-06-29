<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class SiswaModel extends Model
{
    protected $table = "siswa";

    public function insert_siswa($data)
    {
        return $this->db->table($this->table)->insert($data);
    } 

    public function getSiswa($id = false)
    {
        if($id === false){
            return $this->table('siswa')
                        ->get()
                        ->getResultArray();
        } else {
            return $this->table('siswa')
                        ->where('user_id', $id)
                        ->get()
                        ->getRowArray();
        }   
    }

    public function getData($id)
    {
        $builder = $this->db->table('siswa');
        $builder->select('*')
                ->where(['user_id'=> $id]);
        return $builder->get();
    } 

    public function update_siswa($data, $id)
    {
        return $this->db->table($this->table)->update($data, ['user_id' => $id]);
    } 


    public function delete_siswa($id)
    {
        return $this->db->table($this->table)->delete(['user_id' => $id]);
    } 

}