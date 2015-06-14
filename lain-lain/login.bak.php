<?php
	class Login {
		private $db; //database conection link
		public function __construct($database){
			$this->db = $database;
		}
		public function loginUser($username, $password){
			$result = $this->db->prepare("SELECT * FROM admin WHERE username= ? AND password= ?");
			$result->bindParam(1, $username);
			$result->bindParam(2, $password);
			$result->execute();
			$rows = $result->fetch();
			return $rows;
		}
	}
	
	session_start();   
	if (isset ($_POST['login'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];

		if(empty($username) || empty($password)){
			echo 'data ada yang kosong';
		}
		else{
			$user = new Login($pdo);
			$login = $user->loginUser($username, $password);

			if($login == true){
				$_SESSION['username'] = $login['username'];
				header('Location: admin.php');
			}else{
				echo "error login";
			}     
		}
	}
?>