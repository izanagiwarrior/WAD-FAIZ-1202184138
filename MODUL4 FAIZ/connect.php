<?php class database{
	var $host = "localhost";
	var $username = "root";
	var $password = "";
	var $database = "wad_modul4";
	var $koneksi;
 
	function __construct(){
		$this->koneksi = mysqli_connect($this->host, $this->username, $this->password,$this->database);
	}

	function add($id,$barang,$harga){
		mysqli_query($this->koneksi, "INSERT INTO cart VALUES ('', '$id', '$barang','$harga')");
	}

	function delete($id){
		$query = "DELETE FROM cart WHERE id='$id'";
		mysqli_query($this->koneksi, $query);
	}

	function show(){
		$show = "SELECT * FROM cart";
		$query = mysqli_query($this->koneksi, $show);
		return $query;
	}

	function showProfile(){
		$show = "SELECT * FROM user WHERE id = '$id'";
		$query = mysqli_query($this->koneksi, $show);
		return $query;
	}

	function editProfile($nama,$email,$phone,$pass){
		$query = mysqli_query($this->koneksi,"UPDATE user SET nama='$nama',no_hp='$phone',password='$pass' WHERE email='$email'");
		session_start();
		$_SESSION['nama'] = $nama;
		return $query;
	}
 
 
     function register($nama,$email,$phone,$pass)
	{	
		$insert = mysqli_query($this->koneksi,"insert into user values ('','$nama','$email','$phone','$pass')");
		return $insert;
	}
 
	function login()
	{
		$query = mysqli_query($this->koneksi,"select * from user where email='$email'");
		$data_user = $query->fetch_array();
		$id = $data_user['id'];
		if(password_verify($pass,$data_user['password']))
		{
			
			if($remember)
			{
				
				setcookie('email', $email, time() + (60 * 60 * 24 * 5), '/');
				setcookie('nama', $data_user['nama'], time() + (60 * 60 * 24 * 5), '/');
				setcookie('id', $data_user['id'], time() + (60 * 60 * 24 * 5), '/');
			}
			$_POST['id'] = $id;
			$_POST['pass'] = $pass;
			$_POST['nama'] = $data_user['nama'];
			$_POST['is_login'] = TRUE;
			return TRUE;
		}
	}
 
	function relogin($username)
	{
		$query = mysqli_query($this->koneksi,"select * from user where email='$username'");
		$data_user = $query->fetch_array();
		$_SESSION['username'] = $username;
		$_SESSION['nama'] = $data_user['nama'];
		$_SESSION['id'] = $data_user['id'];
		$_SESSION['is_login'] = TRUE;
	}
} 
?>