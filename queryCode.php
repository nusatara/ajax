<?php

class Connection{

	/*
	Create connection into database
	Membuat koneksi dengan database
	*/
	private function dbConnection(){
		$db = new mysqli('localhost', 'root', '', 'herysapta');
		if($db->connect_errno > 0){
			echo("<script>alert(\"Unable to connect to database [".$db->connect_error."]\");</script>");
		}
		return $db;	
	}

	/*
	mysqli function to insert data into table
	fungsi mysqli untuk memasukan data ke dalam tabel
	*/
	public function insert($data){
		$value = 1;
		$db = $this->dbConnection();
		$sql = "INSERT INTO `data_client`(`id_client`, `nama_per`, `npwp`, `alamat`, `no_telp`, `email`, `nama_pic`, `nama_dir`, `pem_bis`) VALUES (\"".$data['id_client']."\", \"".$data['nama_per']."\", \"".$data['npwp']."\", \"".$data['alamat']."\", \"".$data['no_telp']."\", \"".$data['email']."\", \"".$data['nama_pic']."\", \"".$data['nama_dir']."\", \"".$data['pem_bis']."\")";	
		if(!$result = $db->query($sql)){
			echo("<script>alert(\"There was an error running the query [". $db->error ."]\");</script>");
			$value = 0;
		}
		$db->close();
		return $value;
	}

	/*
	mysqli function to update data on table
	fungsi mysqli untuk mengubah data pada tabel
	*/
	public function update($data){
		$value = 1;
		$db = $this->dbConnection();
		$sql = "UPDATE `data_client` SET `nama_per` = \"".$data['nama_per']."\", `npwp` = \"".$data['npwp']."\" , `alamat` = \"".$data['alamat']."\" , `no_telp` = \"".$data['no_telp']."\", `email` = \"".$data['email']."\" , `nama_pic` = \"".$data['nama_pic']."\", `nama_dir` = \"".$data['nama_dir']."\", `pem_bis` = \"".$data['pem_bis']."\" WHERE `id_client`= ".$data['id_client']." ";
		if(!$result = $db->query($sql)){
			echo("<script>alert(\"There was an error running the query [". $db->error ."]\");</script>");
			$value = 0;
		}
		$db->close();
		return $value;
	}

	/*
	mysqli function to delete data on table
	fungsi mysqli untuk menghapus data pada tabel
	*/	
	public function delete($id_client){
		$value = 1;
		$db = $this->dbConnection();
		$sql = "DELETE FROM `data_client` WHERE `id_client`= ".$id_client;
		if(!$result = $db->query($sql)){
			echo("<script>alert(\"There was an error running the query [". $db->error ."]\");</script>");
			$value = 0;
		}
		$db->close();
		return $value;
	}

	/*
	mysqli function to select all data on table
	fungsi mysqli untuk mengambil semua data pada tabel
	*/		
	public function select(){
		$value = NULL;
		$db = $this->dbConnection();
		$sql = "SELECT * FROM `data_client` ORDER BY `id_client` ASC";
		if(!$result = $db->query($sql)){
			echo("<script>alert(\"There was an error running the query [". $db->error ."]\");</script>");
		}else{
			$value = $result->fetch_all();
		}
		$db->close();
		return $value;
	}

	/*
	mysqli function to select data on table by id
	fungsi mysqli untuk mengambil data pada tabel berdasarkan id
	*/	
	public function select_where_id($id_client){
		$value = NULL;
		$db = $this->dbConnection();
		$sql = "SELECT * FROM `data_client` WHERE `id_client` = ".$id_client;
		if(!$result = $db->query($sql)){
			echo("<script>alert(\"There was an error running the query [". $db->error ."]\");</script>");
		}else{
			$value = $result->fetch_all();
		}
		$db->close();
		return $value;
	}	

	/*
	mysqli function to get last id and increment it once.
	fungsi mysqli untuk mengambil id terakhir dan menambahkan satu
	*/	
	public function select_last_id(){
		$value = 1;
		$db = $this->dbConnection();
		$sql = "SELECT `id_client` FROM `data_client` ORDER BY `id_client` DESC LIMIT 1";
		if(!$result = $db->query($sql)){
			echo("<script>alert(\"There was an error running the query [". $db->error ."]\");</script>");
		}else{
			$r = $result->fetch_array();
			$value = $r['id_client'];
			$nourut = (int) substr($value, 2, 3);
			$nourut++;
			$char = "01";
			$value = $char . sprintf("%03s", $nourut);
		}
		$db->close();
		return $value;
	}
}
	

?>