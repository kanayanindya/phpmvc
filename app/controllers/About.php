<?php

class About
{
    public function index($nama = "Puput", $pekerjaan = "Dosen")
    {
        echo "Halo, nama saya $nama, saya seorang $pekerjaan";
    }
    public function page()
    {
        echo 'About/page';
    }
}
