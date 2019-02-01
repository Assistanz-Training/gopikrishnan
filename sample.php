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
		
		
		$name["firstname"] = (isset($_POST["firstname"]) ? $_POST["firstname"] : "");
		echo json_encode($firstname);
		$name["lastname"] = (isset($_POST["lastname"]) ? $_POST["lastname"] : "");
		echo json_encode($lastname);
		$name["email"] = (isset($_POST["email"]) ? $_POST["email"] : "");
		echo json_encode($email);
		$name["phone"] = (isset($_POST["phone"]) ? $_POST["phone"] : "");
		echo json_encode($phone);
		$name["lic_no"] = (isset($_POST["lic_no"]) ? $_POST["lic_no"] : "");
		echo json_encode($lic_no);
		$name["username"] = (isset($_POST["username"]) ? $_POST["username"] : "");
		echo json_encode($username);
		
		} catch(Exception $e) {
			echo json_encode(array("status" => false, "message" => $e->getMessage()));
		}
	}
	
}

$user = new UserController();
$user->addUser();

?>