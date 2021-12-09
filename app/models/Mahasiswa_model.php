<?php

class Mahasiswa_model
{
    // private $mhs =
    // [
    //     [
    //         "nama"  => "Puput Budi Wintoro",
    //         "npm"   => "0231108402",
    //         "email" => "wintorogaulz@gmail.com",
    //         "jurusan"   => "Teknik Informatika"
    //     ],
    //     [
    //         "nama"  => "Norma Maylinda",
    //         "npm"   => "1234567890",
    //         "email" => "norma@gmail.com",
    //         "jurusan"   => "Pendidikn Matematika"
    //     ],
    //     [
    //         "nama"  => "Kanaya Anindya",
    //         "npm"   => "0987654321",
    //         "email" => "kanaya@gmail.com",
    //         "jurusan"   => "Teknik Arsitektur"
    //     ]
    // ];

    private $dbh;
    private $stmt;

    public function __construct()
    {
        // data source name
        $dsn = 'mysql:host=localhost;dbname=phpmvc';

        try {
            $this->dbh = new PDO($dsn, 'root', 'Abcd!1234');
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }


    public function getAllMahasiswa()
    {
        $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
