<?php

class Contact extends Controller
{
    public function index()
    {
        $data['judul'] = 'My Contacts';
        $this->view('templates/header', $data);
        $this->view('contact/index');
        $this->view('templates/footer');
    }
}
