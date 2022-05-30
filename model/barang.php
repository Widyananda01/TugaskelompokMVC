<?php
	class model{
		//inisialisasi awal untuk class biasa disebut instansiasi
		public $connect;
		function __construct(){
			$connect = mysqli_connect("localhost", "root", "","uts_web");
			
			$this->connect=$connect;
		}
		
		function execute($query){
			return mysqli_query($this->connect,$query);
		}
		
		function selectAll(){
			$query = "select * from barang";
			return $this->execute($query);
		}
		
		function selectbarang($kode_barang){
			$query = "select * from mhs where kode_barang='$kode_barang'";
			return $this->execute($query);
		}
		
		function updatebarang($kode_barang, $nama, $harga, $gambar, $jml_barang){
			$query = "update barang set kode_barang='$kode_barang', nama='$nama',harga='$harga', gambar='$gambar', jml_barang='$jml_barang' where kode_barang='$kode_barang'";
			return $this->execute($query);
		}
		
		function deletebarang($kode_barang){
			$query = "delete from mhs where kode_barang='$kode_barang'";
			return $this->execute($query);
		}
		
		function insertbarang($kode_barang, $nama, $harga, $gambar, $jml_barang){
			$query = "insert into mhs values ('$kode_barang', '$nama', '$harga', '$gambar','$jml_barang')";
			return $this->execute($query);
		}
		
		function fetch($var){
			return mysqli_fetch_array($var);
		}
		
		//pasangan construct adalah destruct untuk menghapus inisialisasi class pada memori
		function __destruct(){
		}
	}
