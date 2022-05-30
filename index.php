<?php
//include class controller
include "controller/controller.php";

//variabel main merupakan objek baru yang dibuat dari class controller
$main = new controller();

//kondisi untuk menampilkan halaman web yang diminta
if (isset($_GET['editBarang'])) { //kondisi untuk mengakses halaman edit
    $main->viewEditBarang();
} else if (isset($_GET['viewBarang'])) { //kondisi untuk mengakses halaman edit
    $main->viewBarang();
} else if (isset($_GET['tambahBarang'])) { //kondisi untuk mengakses halaman edit
    $main->tambahBarang();
} else if (isset($_GET['hapusBarang'])) { //kondisi untuk mengakses halaman edit
    $main->deleteBarang();
} else {
    $main->index(); //kondisi awal (menampilkan seluruh data)
}
