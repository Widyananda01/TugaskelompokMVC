<?php
//include class model
include "model/barang.php";

class controller
{
	//variabel public
	public $model;

	//inisialisasi awal untuk class
	function __construct()
	{
		$this->model = new model(); //variabel model merupakan objek baru yang dibuat dari class model
	}

	function index()
	{
		$data = $this->model->selectAll(); //pada class ini (controller), akses variabel model, akses fungsi selectAll (kalo bingung lihat di class model ada fungsi selectAll)
		include "login.php"; //memamnggil view.php pada folder view
	}

	function viewBarang()
	{
		include "view/home.php"; //memamnggil view.php pada folder view
	}

	function viewEditBarang()
	{
		include "view/editbarang.php"; //memamnggil view.php pada folder view
	}

	function tambahBarang()
	{
		include "view/tambahbarang.php"; //memamnggil view.php pada folder view
	}
	function deleteBarang()
	{
		include "view/delete_barang.php"; //memamnggil view.php pada folder view
	}

	function editBarang()
	{
		include "view/editbarang.php"; //memamnggil view.php pada folder view
	}
	function viewEdit($nim)
	{
		$data = $this->model->selectMhs($nim); //select data mahasiswa dengan nim ...
		$row = $this->model->fetch($data); //fetch hasil select
		include "view/view_edit.php"; //menampilkan halaman untuk mengedit data
	}

	function viewInsert()
	{
		include "view/view_add.php"; //menampilkan halaman add data
	}

	//fungsi update data
	function update()
	{
		$nim = $_POST['nim'];
		$nama = $_POST['nama'];
		$angkatan = $_POST['angkatan'];
		$fakultas = $_POST['fakultas'];
		$prodi = $_POST['prodi'];
		$update = $this->model->updateMhs($nim, $nama, $angkatan, $fakultas, $prodi);
		header("location:index.php");
	}

	function delete($nim)
	{
		$delete = $this->model->deleteMhs($nim);
		header("location:index.php");
	}

	function insert()
	{
		$nim = $_POST['nim'];
		$nama = $_POST['nama'];
		$angkatan = $_POST['angkatan'];
		$fakultas = $_POST['fakultas'];
		$prodi = $_POST['prodi'];
		$insert = $this->model->insertMhs($nim, $nama, $angkatan, $fakultas, $prodi);
		header("location:index.php");
	}

	function __destruct()
	{
	}
}
