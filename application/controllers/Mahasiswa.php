<?php
class Mahasiswa extends CI_Controller{
    // membuat method index
    public function index(){
        //akses model mahasiswa 
        $this->load->model('mahasiswa_model');
        $mahasiswa = $this->mahasiswa_model->getAll();
        $data['mahasiswa'] = $mahasiswa;
        // render data dan kirim data ke dalam view
        $this->load->view('layouts/header');
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('layouts/footer');
    }
    public function detail($id){
        //akses model mahasiswa
        $this->load->model('mahasiswa_model');
        $siswa = $this->mahasiswa_model->getById($id);
        $data['siswa'] = $siswa;
        $this->load->view('layouts/header');
        $this->load->view('mahasiswa/detail', $data);
        $this->load->view('layouts/footer');
    }

    //method dosen
    public function dosen(){
        //akses model dosen
        $this->load->model('dosen_model');
        $dosen = $this->dosen_model->getAll();
        $data['dosen'] = $dosen;
        // render data dan kirim data ke dalam view
        $this->load->view('layouts/header');
        $this->load->view('mahasiswa/dosen', $data);
        $this->load->view('layouts/footer');
    }
    public function detail_dsn($id){
        //akses model dosen
        $this->load->model('dosen_model');
        $dosen = $this->dosen_model->getById($id);
        $data['dosen'] = $dosen;
        $this->load->view('layouts/header');
        $this->load->view('mahasiswa/detail_dsn', $data);
        $this->load->view('layouts/footer');
    }

    //method matakuliah
    public function matakuliah(){
        $this->load->model('matakuliah_model');
        $matkul = $this->matakuliah_model->getAll();
        $data['matakuliah'] = $matkul;
        // render data dan kirim data ke dalam view
        $this->load->view('layouts/header');
        $this->load->view('mahasiswa/matakuliah', $data);
        $this->load->view('layouts/footer');

    }
    public function matkuliah($id){
        //akses model dosen
        $this->load->model('matakuliah_model');
        $matkul = $this->matakuliah_model->getById($id);
        $data['matakuliah'] = $matkul;
        $this->load->view('layouts/header');
        $this->load->view('mahasiswa/matkuliah', $data);
        $this->load->view('layouts/footer');
    }
}
?>