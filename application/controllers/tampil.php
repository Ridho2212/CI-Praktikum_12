<?php
class tampil extends CI_Controller
{
    public function index()
    {
        // akses model mahasiswa
        $this->load->model('mahasiswa_models');
        $mahasiswa = $this->mahasiswa_models->getAll();
        $data['mahasiswa'] = $mahasiswa;
        // kirim data dan kirim ke dalam view  
        $this->load->view('layouts/header');
        $this->load->view('mahasiswa/tampil', $data);
        $this->load->view('layouts/footer');
    }

    public function dosen()
    {
        $this->load->model('dosen_models');
        $dosen = $this->dosen_models->getAll();
        $data['dosen'] = $dosen;
        // kirim data dan kirim ke dalam view  
        $this->load->view('layouts/header');
        $this->load->view('dosen/tampil', $data);
        $this->load->view('layouts/footer');
    }

    public function matkul()
    {
        $this->load->model('matakuliah_models');
        $matakuliah = $this->matakuliah_models->getAll();
        $data['matakuliah'] = $matakuliah;
        // kirim data dan kirim ke dalam view 
        $this->load->view('layouts/header');
        $this->load->view('matakuliah/tampil', $data);
        $this->load->view('layouts/footer');
    }
}