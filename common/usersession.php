<?php 
class usersession{

	public function usersession(){
		session_start();
		
	}
	
	public function setsession($usename){
		$_SESSION['username'] = $username;
	}
	
	public function clesrsession(){
		session_destroy();
	}
	public function isUserLoggedin(){
		return isset($_SESSION["username"]);
	}

}

?>