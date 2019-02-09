<?php
require_once('../php_code/queryCode.php');

if (array_key_exists("action",$_GET)){
	$action = $_GET['action'];
	isset($id_client);
	isset($nama_per);
	isset($npwp);
	isset($alamat);
	isset($no_telp);
	isset($email);
	isset($nama_pic);
	isset($nama_dir);
	isset($pem_bis);
	if (array_key_exists("id_client",$_POST)) $id_client = $_POST['id_client'];
	if (array_key_exists("nama_per",$_POST)) $nama_per = $_POST['nama_per'];
	if (array_key_exists("npwp",$_POST)) $npwp = $_POST['npwp'];
	if (array_key_exists("alamat",$_POST)) $alamat = $_POST['alamat'];
	if (array_key_exists("no_telp",$_POST)) $no_telp = $_POST['no_telp'];
	if (array_key_exists("email",$_POST)) $email = $_POST['email'];
	if (array_key_exists("nama_pic",$_POST)) $nama_pic = $_POST['nama_pic'];
	if (array_key_exists("nama_dir",$_POST)) $nama_dir = $_POST['nama_dir'];
	if (array_key_exists("pem_bis",$_POST)) $pem_bis = $_POST['pem_bis'];
	$c = new Connection;
	switch ($action) {
		case 'update':
				/*
				action for updating data
				aksi untuk mengubah data
				*/
				$data = array(
					"id_client" => $id_client,
					"nama_per" => $nama_per,
					"npwp" => $npwp,
					"alamat" => $alamat,
					"no_telp" => $no_telp,
					"email" => $email,
					"nama_pic" => $nama_pic,
					"nama_dir" => $nama_dir,
					"pem_bis" => $pem_bis,
					);
				$c->update($data);
			break;
		case 'delete':
				/*
				action for deleting data
				aksi untuk menghapus data
				*/
				$c->delete($id_client);
			break;
		case 'add':
				/*
				action for adding data
				aksi untuk menambah data
				*/
				$data = array(
					"id_client" => $id_client,
					"nama_per" => $nama_per,
					"npwp" => $npwp,
					"alamat" => $alamat,
					"no_telp" => $no_telp,
					"email" => $email,
					"nama_pic" => $nama_pic,
					"nama_dir" => $nama_dir,
					"pem_bis" => $pem_bis,
					);		
				$c->insert($data);
			break;
		default:
			echo "Modul tidak diketahui";
			break;
	}
}
header("Location: ../index.php");
die();
?>