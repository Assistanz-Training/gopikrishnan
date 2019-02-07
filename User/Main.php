<?php
include_once "UserService.php";

class UserController {
	
	public $userService;
	
	function __construct() {
		$this->userService = new UserService();
	}
	
	function addUser() {
		try {
		$this->userService->addUser($_POST);
		
		
		$firstname = (isset($_POST["firstname"]) ? $_POST["firstname"] : "");
		echo json_encode($firstname);
		$lastname = (isset($_POST["lastname"]) ? $_POST["lastname"] : "");
		echo json_encode($lastname);
		$email = (isset($_POST["email"]) ? $_POST["email"] : "");
		echo json_encode($email);
		$phone = (isset($_POST["phone"]) ? $_POST["phone"] : "");
		echo json_encode($phone);
		$lic_no = (isset($_POST["lic_no"]) ? $_POST["lic_no"] : "");
		echo json_encode($lic_no);
		$username = (isset($_POST["username"]) ? $_POST["username"] : "");
		echo json_encode($username);
		$password = (isset($_POST["password"]) ? $_POST["password"] : "");
		echo json_encode($password);
		
		} catch(Exception $e) {
			echo json_encode(array("status" => false, "message" => $e->getMessage()));
		}
	}
	
	//function loginUser() {
		//try {
		//$this->userService->getuser($_GET);
		
		//$username = (isset($_POST["username"]) ? $_POST["username"] : "");
		//echo json_encode($username);
		//$password = (isset($_POST["password"]) ? $_POST["password"] : "");
		//echo json_encode($password);
		
		//} catch(Exception $e) {
			//echo json_encode(array("status" => false, "message" => $e->getMessage()));
		//}
	//}
	
	
}

$user = new UserController();
$user->addUser();

?>