<?php
include_once("UserModal.php");

class UserService {
	
	public $userModal;
	
	function __construct() {
		$this->userModal = new UserModal();
	}
	
	function addUser($postValues) {
		if(isset($postValues["firstname"])) {
			if($postValues["firstname"] == "") {
				throw new Exception("Firstname is Required");
			}
		}

		if(isset($postValues["lastname"])) {
			if($postValues["lastname"] == "") {
				throw new Exception("lastname is Required");
			}
		}
		if(isset($postValues["email"])) {
			if($postValues["email"] == "") {
				throw new Exception("email is Required");
			}
		}
		if(isset($postValues["phone"])) {
			if($postValues["phone"] == "") {
				throw new Exception("phone no  is Required");
			}
		}
		if(isset($postValues["lic_no"])) {
			if($postValues["lic_no"] == "") {
				throw new Exception("license no is Required");
			}
		}
		if(isset($postValues["username"])) {
			if($postValues["username"] == "") {
				throw new Exception("username is Required");
			}
		}
		
		
		$this->userModal->addUser($postValues);
	}
}

?>