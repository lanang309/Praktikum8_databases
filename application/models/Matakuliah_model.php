<?php
class Matakuliah_model extends CI_Model{
    public $nama;
    public $sks;
    public $kode;

    public function getAll(){
        //menampilkan seluruh data yang ada di tabel dosen menggunakan query builder
        $query = $this->db->get('matakuliah');
        return $query->result();
    }
    public function getById($id){
        //menampilkan data berdasarkan id
        $query = $this->db->get_where('matakuliah',['id' => $id]);
        return $query->row();
    }
}
?>