<?php
class MdlPengguna extends CI_Model{

	function get_all_pengguna(){
		$hsl=$this->db->query("SELECT data_admin.*,IF(jk_admin='L','Laki-Laki','Perempuan') AS jenkel FROM data_admin");
		return $hsl;	
	}

	function simpan_pengguna($nama,$jenkel,$username,$password,$email,$nohp,$level,$gambar){
		$hsl=$this->db->query("INSERT INTO data_admin (nama_admin,jk_admin,username,password,email_admin,tlp_admin,level_admin,foto_admin) VALUES ('$nama','$jenkel','$username',md5('$password'),'$email','$nohp','$level','$gambar')");
		return $hsl;
	}

	function simpan_pengguna_tanpa_gambar($nama,$jenkel,$username,$password,$email,$nohp,$status,$level){
		$hsl=$this->db->query("INSERT INTO data_admin (nama_admin,jk_admin,username,password,email_admin,tlp_admin,status_admin,register_admin)) VALUES ('$nama','$jenkel','$username',md5('$password'),'$email','$nohp','$status','$level')");
		return $hsl;
	}

	//UPDATE PENGGUNA //
	function update_pengguna_tanpa_pass($kode,$nama,$jenkel,$username,$password,$email,$nohp,$status,$level,$register,$gambar){
		$hsl=$this->db->query("UPDATE data_admin set nama_admin='$nama',jk_admin='$jenkel',username='$username',email_admin='$email',tlp_admin='$nohp',status_admin='$level',level_admin='$gambar' where id_admin='$kode'");
		return $hsl;
	}
	function update_pengguna($kode,$nama,$jenkel,$username,$password,$email,$nohp,$level,$gambar){
		$hsl=$this->db->query("UPDATE data_admin set nama_admin='$nama',jk_admin='$jenkel',username='$username',password='$password',email_admin='$email',tlp_admin='$nohp',status_admin='$level',level_admin='$gambar' where id_admin='$kode'");
		return $hsl;
	}

	function update_pengguna_tanpa_pass_dan_gambar($kode,$nama,$jenkel,$username,$password,$email,$nohp,$level){
		$hsl=$this->db->query("UPDATE data_admin set nama_admin='$nama',jk_admin='$jenkel',username='$username',email_admin='$email',tlp_admin='$nohp',status_admin='$level' where id_admin='$kode'");
		return $hsl;
	}
	function update_pengguna_tanpa_gambar($kode,$nama,$jenkel,$username,$password,$email,$nohp,$level){
		$hsl=$this->db->query("UPDATE data_admin set nama_admin='$nama',jk_admin='$jenkel',username='$username',password='$password',email_admin='$email',tlp_admin='$nohp',status_admin='$level' where id_admin='$kode'");
		return $hsl;
	}
	//END UPDATE PENGGUNA//

	function hapus_pengguna($kode){
		$hsl=$this->db->query("DELETE FROM data_admin where id_admin='$kode'");
		return $hsl;
	}
	function getusername($id){
		$hsl=$this->db->query("SELECT * FROM data_admin where id_admin='$id'");
		return $hsl;
	}
	function resetpass($id,$pass){
		$hsl=$this->db->query("UPDATE data_admin set password=md5('$pass') where id_admin='$id'");
		return $hsl;
	}

	function get_pengguna_login($kode){
		$hsl=$this->db->query("SELECT * FROM data_admin where id_admin='$kode'");
		return $hsl;
	}


}