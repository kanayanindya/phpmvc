 <?php

// panggil semua file yg kit butuhkan
// teknik ini disebut bootstrapping
// kita panggil satu file ini, maka seluruh file MVC akan dipanggil
 require_once '../app/init.php';

 $app = new App;    // menjalankan class App