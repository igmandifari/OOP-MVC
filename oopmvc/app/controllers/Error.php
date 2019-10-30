<?php 

class Error extends Controller {
    public function index()
    {
        $data['judul'] = 'Halaman Tidak Ditemukan';
        $this->view('templates/header', $data);
        $this->view('error_pages/404');
        $this->view('templates/footer');
    }
}