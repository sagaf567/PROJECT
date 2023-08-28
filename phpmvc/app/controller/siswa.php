<?php

class siswa extends Controller
{
    public function index(){
        $data = [
            "judul" => "Data Siswa",
            "siswa" => $this->model("Siswa_model")->getAllBlog()
        ];
        $this->view('template/header', $data);
        $this->view('siswa/index', $data);
        $this->view('template/footer');
        return $this->view("siswa/index", $data);
    }

    public function detail($id)
    {
        $data = [
            "judul" => "Detail Siswa",
            "siswa" => $this->model("Siswa_model")->getBlogById($id)         
        ];
        $this->view('template/header', $data);
        $this->view('siswa/detail', $data);
        $this->view('template/footer');
    }
    public function tambah()
    {
        if( $this->model('Siswa_model')->tambahData($_POST) > 0 ) {
            flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASE_URL . '/siswa');
            exit;
        } else {
            flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASE_URL . '/siswa');
        }
    }
    public function hapus($id)
    {
        if( $this->model('Siswa_model')->hapusDataSiswa($id) > 0 ) {
            flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASE_URL . '/siswa');
            exit;
        } else {
            flasher::setFlash('tidak_berhasil', 'dihapus', 'danger');
            header('Location: ' . BASE_URL . '/siswa');
        }
    }
    public function getubah()
    {
        if ($this->model('Siswa_model')->ubahDataSiswa($_POST) > 0) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASE_URL . '/siswa');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASE_URL . '/siswa');
            exit;
        }
    
}
}