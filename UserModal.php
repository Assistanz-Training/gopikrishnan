<?php

class UserModal {
	
		function addUser($postValue) {
			$servername = "localhost";
	        $username = "root";
	        $password = "";
	        $dbname = "oli";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
	throw new Exception($conn->connect_error);
}
 
//$sql_1 = "SELECT username from user_1 WHERE username=$username";
//if (mysql_num_rows($sql_1) != 0)
//{
  //  echo "Username already exists";
//}
//else{
	
	
$sql = "INSERT INTO  user_1(firstname,lastname,email,phone,lic_no,username)
VALUES ('".$postValue['firstname']."','".$postValue['lastname']."','".$postValue['email']."','".$postValue['phone']."','".$postValue['lic_no']."','".$postValue['username']."')";

if ($conn->query($sql) === TRUE) {
    //echo "New record created successfully";
} else {
	throw new Exception($conn->error);
}


	
//}
$conn->close();


	}
	
}