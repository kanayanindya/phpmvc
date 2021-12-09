<?php

class About extends Controller
{
    public function index($nama = 'Puput', $pekerjaan = 'Dosen', $usia = 32)
    {

        // echo " saya $nama, seorang $pekerjaan, berusia $usia tahun";
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['usia'] = $usia;
        $data['judul'] = 'About';
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }
    public function page()
    {
        $data['judul'] = 'Pages';
        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
}
