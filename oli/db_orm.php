<?php
require_once("idiorm.php");
ORM::configure('mysql:host=localhost;dbname=stu_cab_user');
ORM::configure('username', 'root');
ORM::configure('password', '');

ORM::configure('error_mode', PDO::ERRMODE_EXCEPTION);
ORM::configure('return_result_sets', true);