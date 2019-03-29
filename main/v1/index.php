<?php

require 'Slim/Slim.php';
include 'gven_functions_library.php';

\Slim\Slim::registerAutoloader(); //Initialize the Slim Framework
$app = new \Slim\Slim();


$app->get('/', function () {
    echo "<center><h3><br><br><br>OLI TAXI !!!</h3></center><br><br>";
});

$app->post('/user/new', function () {
    $firstname = $_REQUEST['firstname'];
    $lastname = $_REQUEST['lastname'];
    $dob = $_REQUEST['dob'];
    $address = $_REQUEST['address'];
    $nationality = $_REQUEST['nationality'];
    $state = $_REQUEST['state'];
    $city = $_REQUEST['city'];
    $phone1 = $_REQUEST['phone1'];
    $phone2 = $_REQUEST['phone2'];
    $email = $_REQUEST['email'];
    $gender = $_REQUEST['gender'];
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    $cpassword = $_REQUEST['cpassword'];
    $drivinglicense = $_FILES['drivinglicense']['name'];
    $licensedate = $_REQUEST['licensedate'];
    $drivingexp = $_REQUEST['drivingexp'];
    $typeofveh = $_REQUEST['typeofveh'];
    $regno = $_REQUEST['regno'];
    $rc = $_FILES['rc']['name'];
    $vehpermit = $_FILES['vehpermit']['name'];
    $pcert = $_FILES['pcert']['name'];
    $pexpdate = $_REQUEST['pexpdate'];
    $idproof = $_FILES['idproof']['name'];
    $addressproof = $_FILES['addressproof']['name'];
    $passport = $_FILES['passport']['name'];
    $tenth = $_FILES['tenth']['name'];
    $twelth = $_FILES['twelth']['name'];
    $tenthper = $_REQUEST['tenthper'];
    $twelthper = $_REQUEST['twelthper'];
    $degree = $_FILES['degree']['name'];
    $additionalcourse = $_FILES['additionalcourse']['name'];


    $target_dir = "../images/";
    if ($_FILES["drivinglicense"]["name"] != "" || $_FILES["drivinglicense"]["name"] != null) {
        $target_file = $target_dir . basename($_FILES["drivinglicense"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        $check = getimagesize($_FILES["drivinglicense"]["tmp_name"]);
        if ($check !== false) {
            $uploadOk = 1;
        } else {
            $uploadOk = 0;
        }
        if (file_exists($target_file)) {
            $uploadOk = 0;
        }
        if ($_FILES["drivinglicense"]["size"] > 500000) {
            $uploadOk = 0;
        }
        if ($uploadOk == 0) {
        } else {
            if (move_uploaded_file($_FILES["drivinglicense"]["tmp_name"], $target_file)) {
            } else {
            }
        }
    }

    if ($_FILES["rc"]["name"] != "" || $_FILES["rc"]["name"] != null) {
        $target_file = $target_dir . basename($_FILES["rc"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        $check = getimagesize($_FILES["rc"]["tmp_name"]);
        if ($check !== false) {
            $uploadOk = 1;
        } else {
            $uploadOk = 0;
        }
        if (file_exists($target_file)) {
            $uploadOk = 0;
        }
        if ($_FILES["rc"]["size"] > 500000) {
            $uploadOk = 0;
        }
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif"
        ) {
            $uploadOk = 0;
        }
        if ($uploadOk == 0) {
        } else {
            if (move_uploaded_file($_FILES["rc"]["tmp_name"], $target_file)) {
            } else {
            }
        }
    }

    if ($_FILES["vehpermit"]["name"] != "" || $_FILES["vehpermit"]["name"] != null) {
        $target_file = $target_dir . basename($_FILES["vehpermit"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        $check = getimagesize($_FILES["vehpermit"]["tmp_name"]);
        if ($check !== false) {
            $uploadOk = 1;
        } else {
            $uploadOk = 0;
        }
        if (file_exists($target_file)) {
            $uploadOk = 0;
        }
        if ($_FILES["vehpermit"]["size"] > 500000) {
            $uploadOk = 0;
        }
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif"
        ) {
            $uploadOk = 0;
        }
        if ($uploadOk == 0) {
        } else {
            if (move_uploaded_file($_FILES["vehpermit"]["tmp_name"], $target_file)) {
            } else {
            }
        }
    }


    if ($_FILES["pcert"]["name"] != "" || $_FILES["pcert"]["name"] != null) {
        $target_file = $target_dir . basename($_FILES["pcert"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        $check = getimagesize($_FILES["pcert"]["tmp_name"]);
        if ($check !== false) {
            $uploadOk = 1;
        } else {
            $uploadOk = 0;
        }
        if (file_exists($target_file)) {
            $uploadOk = 0;
        }
        if ($_FILES["pcert"]["size"] > 500000) {
            $uploadOk = 0;
        }
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif"
        ) {
            $uploadOk = 0;
        }
        if ($uploadOk == 0) {
        } else {
            if (move_uploaded_file($_FILES["pcert"]["tmp_name"], $target_file)) {
            } else {
            }
        }
    }


    if ($_FILES["idproof"]["name"] != "" || $_FILES["idproof"]["name"] != null) {
        $target_file = $target_dir . basename($_FILES["idproof"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        $check = getimagesize($_FILES["idproof"]["tmp_name"]);
        if ($check !== false) {
            $uploadOk = 1;
        } else {
            $uploadOk = 0;
        }
        if (file_exists($target_file)) {
            $uploadOk = 0;
        }
        if ($_FILES["idproof"]["size"] > 500000) {
            $uploadOk = 0;
        }
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif"
        ) {
            $uploadOk = 0;
        }
        if ($uploadOk == 0) {
        } else {
            if (move_uploaded_file($_FILES["idproof"]["tmp_name"], $target_file)) {
            } else {
            }
        }
    }

    if ($_FILES["addressproof"]["name"] != "" || $_FILES["addressproof"]["name"] != null) {
        $target_file = $target_dir . basename($_FILES["addressproof"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        $check = getimagesize($_FILES["addressproof"]["tmp_name"]);
        if ($check !== false) {
            $uploadOk = 1;
        } else {
            $uploadOk = 0;
        }
        if (file_exists($target_file)) {
            $uploadOk = 0;
        }
        if ($_FILES["addressproof"]["size"] > 500000) {
            $uploadOk = 0;
        }
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif"
        ) {
            $uploadOk = 0;
        }
        if ($uploadOk == 0) {
        } else {
            if (move_uploaded_file($_FILES["addressproof"]["tmp_name"], $target_file)) {
            } else {
            }
        }
    }

    if ($_FILES["passport"]["name"] != "" || $_FILES["passport"]["name"] != null) {
        $target_file = $target_dir . basename($_FILES["passport"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        $check = getimagesize($_FILES["passport"]["tmp_name"]);
        if ($check !== false) {
            $uploadOk = 1;
        } else {
            $uploadOk = 0;
        }
        if (file_exists($target_file)) {
            $uploadOk = 0;
        }
        if ($_FILES["passport"]["size"] > 500000) {
            $uploadOk = 0;
        }
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif"
        ) {
            $uploadOk = 0;
        }
        if ($uploadOk == 0) {
        } else {
            if (move_uploaded_file($_FILES["passport"]["tmp_name"], $target_file)) {
            } else {
            }
        }
    }

    if ($_FILES["tenth"]["name"] != "" || $_FILES["tenth"]["name"] != null) {
        $target_file = $target_dir . basename($_FILES["tenth"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        $check = getimagesize($_FILES["tenth"]["tmp_name"]);
        if ($check !== false) {
            $uploadOk = 1;
        } else {
            $uploadOk = 0;
        }
        if (file_exists($target_file)) {
            $uploadOk = 0;
        }
        if ($_FILES["tenth"]["size"] > 500000) {
            $uploadOk = 0;
        }
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif"
        ) {
            $uploadOk = 0;
        }
        if ($uploadOk == 0) {
        } else {
            if (move_uploaded_file($_FILES["tenth"]["tmp_name"], $target_file)) {
            } else {
            }
        }
    }

    if ($_FILES["twelth"]["name"] != "" || $_FILES["twelth"]["name"] != null) {
        $target_file = $target_dir . basename($_FILES["twelth"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        $check = getimagesize($_FILES["twelth"]["tmp_name"]);
        if ($check !== false) {
            $uploadOk = 1;
        } else {
            $uploadOk = 0;
        }
        if (file_exists($target_file)) {
            $uploadOk = 0;
        }
        if ($_FILES["twelth"]["size"] > 500000) {
            $uploadOk = 0;
        }
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif"
        ) {
            $uploadOk = 0;
        }
        if ($uploadOk == 0) {
        } else {
            if (move_uploaded_file($_FILES["twelth"]["tmp_name"], $target_file)) {
            } else {
            }
        }
    }


    if ($_FILES["degree"]["name"] != "" || $_FILES["degree"]["name"] != null) {
        $target_file = $target_dir . basename($_FILES["degree"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        $check = getimagesize($_FILES["degree"]["tmp_name"]);
        if ($check !== false) {
            $uploadOk = 1;
        } else {
            $uploadOk = 0;
        }
        if (file_exists($target_file)) {
            $uploadOk = 0;
        }
        if ($_FILES["degree"]["size"] > 500000) {
            $uploadOk = 0;
        }
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif"
        ) {
            $uploadOk = 0;
        }
        if ($uploadOk == 0) {
        } else {
            if (move_uploaded_file($_FILES["degree"]["tmp_name"], $target_file)) {
            } else {
            }
        }
    }

    if ($_FILES["additionalcourse"]["name"] != "" || $_FILES["degree"]["name"] != null) {
        $target_file = $target_dir . basename($_FILES["additionalcourse"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        $check = getimagesize($_FILES["additionalcourse"]["tmp_name"]);
        if ($check !== false) {
            $uploadOk = 1;
        } else {
            $uploadOk = 0;
        }
        if (file_exists($target_file)) {
            $uploadOk = 0;
        }
        if ($_FILES["additionalcourse"]["size"] > 500000) {
            $uploadOk = 0;
        }
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif"
        ) {
            $uploadOk = 0;
        }
        if ($uploadOk == 0) {
        } else {
            if (move_uploaded_file($_FILES["additionalcourse"]["tmp_name"], $target_file)) {
            } else {
            }
        }
    }

    $user = New_User($firstname, $lastname, $dob, $address, $nationality, $state, $city, $phone1, $phone2, $email, $gender, $username, $password, $cpassword, $drivinglicense, $licensedate, $drivingexp, $typeofveh, $regno, $rc, $vehpermit, $pcert, $pexpdate, $idproof, $addressproof, $passport, $tenth, $twelth, $tenthper, $twelthper, $degree, $additionalcourse);
    echo json_encode($user, JSON_PRETTY_PRINT);
});

$app->get('/userslist', function () {
    $beni = Users_List();
    echo json_encode($beni, JSON_PRETTY_PRINT);
});

$app->get('/user/single/:username', function ($username) {
    $beni = Single_User($username);
    echo json_encode($beni, JSON_PRETTY_PRINT);
});

$app->get('/user/delete/:username', function ($username) {
    $beni = UserDelete($username);
    echo json_encode($beni, JSON_PRETTY_PRINT);
});

$app->post('/user/update', function () {
    $firstname = $_REQUEST['firstname'];
    $lastname = $_REQUEST['lastname'];
    $dob = $_REQUEST['dob'];
    $address = $_REQUEST['address'];
    $nationality = $_REQUEST['nationality'];
    $state = $_REQUEST['state'];
    $city = $_REQUEST['city'];
    $phone1 = $_REQUEST['phone1'];
    $phone2 = $_REQUEST['phone2'];
    $email = $_REQUEST['email'];
    $gender = $_REQUEST['gender'];
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    $cpassword = $_REQUEST['cpassword'];
    $drivinglicense = $_FILES['drivinglicense']['name'];
    $licensedate = $_REQUEST['licensedate'];
    $drivingexp = $_REQUEST['drivingexp'];
    $typeofveh = $_REQUEST['typeofveh'];
    $regno = $_REQUEST['regno'];
    $rc = $_FILES['rc']['name'];
    $vehpermit = $_FILES['vehpermit']['name'];
    $pcert = $_FILES['pcert']['name'];
    $pexpdate = $_REQUEST['pexpdate'];
    $idproof = $_FILES['idproof']['name'];
    $addressproof = $_FILES['addressproof']['name'];
    $passport = $_FILES['passport']['name'];
    $tenth = $_FILES['tenth']['name'];
    $twelth = $_FILES['twelth']['name'];
    $tenthper = $_REQUEST['tenthper'];
    $twelthper = $_REQUEST['twelthper'];
    $degree = $_FILES['degree']['name'];
    $additionalcourse = $_FILES['additionalcourse']['name'];


    $target_dir = "../images/";
    if ($_FILES["drivinglicense"]["name"] != "" || $_FILES["drivinglicense"]["name"] != null) {
        $target_file = $target_dir . basename($_FILES["drivinglicense"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        $check = getimagesize($_FILES["drivinglicense"]["tmp_name"]);
        if ($check !== false) {
            $uploadOk = 1;
        } else {
            $uploadOk = 0;
        }
        if (file_exists($target_file)) {
            $uploadOk = 0;
        }
        if ($_FILES["drivinglicense"]["size"] > 500000) {
            $uploadOk = 0;
        }
        if ($uploadOk == 0) {
        } else {
            if (move_uploaded_file($_FILES["drivinglicense"]["tmp_name"], $target_file)) {
            } else {
            }
        }
    }

    if ($_FILES["rc"]["name"] != "" || $_FILES["rc"]["name"] != null) {
        $target_file = $target_dir . basename($_FILES["rc"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        $check = getimagesize($_FILES["rc"]["tmp_name"]);
        if ($check !== false) {
            $uploadOk = 1;
        } else {
            $uploadOk = 0;
        }
        if (file_exists($target_file)) {
            $uploadOk = 0;
        }
        if ($_FILES["rc"]["size"] > 500000) {
            $uploadOk = 0;
        }
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif"
        ) {
            $uploadOk = 0;
        }
        if ($uploadOk == 0) {
        } else {
            if (move_uploaded_file($_FILES["rc"]["tmp_name"], $target_file)) {
            } else {
            }
        }
    }

    if ($_FILES["vehpermit"]["name"] != "" || $_FILES["vehpermit"]["name"] != null) {
        $target_file = $target_dir . basename($_FILES["vehpermit"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        $check = getimagesize($_FILES["vehpermit"]["tmp_name"]);
        if ($check !== false) {
            $uploadOk = 1;
        } else {
            $uploadOk = 0;
        }
        if (file_exists($target_file)) {
            $uploadOk = 0;
        }
        if ($_FILES["vehpermit"]["size"] > 500000) {
            $uploadOk = 0;
        }
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif"
        ) {
            $uploadOk = 0;
        }
        if ($uploadOk == 0) {
        } else {
            if (move_uploaded_file($_FILES["vehpermit"]["tmp_name"], $target_file)) {
            } else {
            }
        }
    }


    if ($_FILES["pcert"]["name"] != "" || $_FILES["pcert"]["name"] != null) {
        $target_file = $target_dir . basename($_FILES["pcert"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        $check = getimagesize($_FILES["pcert"]["tmp_name"]);
        if ($check !== false) {
            $uploadOk = 1;
        } else {
            $uploadOk = 0;
        }
        if (file_exists($target_file)) {
            $uploadOk = 0;
        }
        if ($_FILES["pcert"]["size"] > 500000) {
            $uploadOk = 0;
        }
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif"
        ) {
            $uploadOk = 0;
        }
        if ($uploadOk == 0) {
        } else {
            if (move_uploaded_file($_FILES["pcer"]["tmp_name"], $target_file)) {
            } else {
            }
        }
    }

    if ($_FILES["idproof"]["name"] != "" || $_FILES["idproof"]["name"] != null) {
        $target_file = $target_dir . basename($_FILES["idproof"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        $check = getimagesize($_FILES["idproof"]["tmp_name"]);
        if ($check !== false) {
            $uploadOk = 1;
        } else {
            $uploadOk = 0;
        }
        if (file_exists($target_file)) {
            $uploadOk = 0;
        }
        if ($_FILES["idproof"]["size"] > 500000) {
            $uploadOk = 0;
        }
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif"
        ) {
            $uploadOk = 0;
        }
        if ($uploadOk == 0) {
        } else {
            if (move_uploaded_file($_FILES["idproof"]["tmp_name"], $target_file)) {
            } else {
            }
        }
    }

    if ($_FILES["addressproof"]["name"] != "" || $_FILES["addressproof"]["name"] != null) {
        $target_file = $target_dir . basename($_FILES["addressproof"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        $check = getimagesize($_FILES["addressproof"]["tmp_name"]);
        if ($check !== false) {
            $uploadOk = 1;
        } else {
            $uploadOk = 0;
        }
        if (file_exists($target_file)) {
            $uploadOk = 0;
        }
        if ($_FILES["addressproof"]["size"] > 500000) {
            $uploadOk = 0;
        }
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif"
        ) {
            $uploadOk = 0;
        }
        if ($uploadOk == 0) {
        } else {
            if (move_uploaded_file($_FILES["addressproof"]["tmp_name"], $target_file)) {
            } else {
            }
        }
    }

    if ($_FILES["passport"]["name"] != "" || $_FILES["passport"]["name"] != null) {
        $target_file = $target_dir . basename($_FILES["passport"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        $check = getimagesize($_FILES["passport"]["tmp_name"]);
        if ($check !== false) {
            $uploadOk = 1;
        } else {
            $uploadOk = 0;
        }
        if (file_exists($target_file)) {
            $uploadOk = 0;
        }
        if ($_FILES["passport"]["size"] > 500000) {
            $uploadOk = 0;
        }
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif"
        ) {
            $uploadOk = 0;
        }
        if ($uploadOk == 0) {
        } else {
            if (move_uploaded_file($_FILES["passport"]["tmp_name"], $target_file)) {
            } else {
            }
        }
    }

    if ($_FILES["tenth"]["name"] != "" || $_FILES["tenth"]["name"] != null) {
        $target_file = $target_dir . basename($_FILES["tenth"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        $check = getimagesize($_FILES["tenth"]["tmp_name"]);
        if ($check !== false) {
            $uploadOk = 1;
        } else {
            $uploadOk = 0;
        }
        if (file_exists($target_file)) {
            $uploadOk = 0;
        }
        if ($_FILES["tenth"]["size"] > 500000) {
            $uploadOk = 0;
        }
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif"
        ) {
            $uploadOk = 0;
        }
        if ($uploadOk == 0) {
        } else {
            if (move_uploaded_file($_FILES["tenth"]["tmp_name"], $target_file)) {
            } else {
            }
        }
    }

    if ($_FILES["twelth"]["name"] != "" || $_FILES["twelth"]["name"] != null) {
        $target_file = $target_dir . basename($_FILES["twelth"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        $check = getimagesize($_FILES["twelth"]["tmp_name"]);
        if ($check !== false) {
            $uploadOk = 1;
        } else {
            $uploadOk = 0;
        }
        if (file_exists($target_file)) {
            $uploadOk = 0;
        }
        if ($_FILES["twelth"]["size"] > 500000) {
            $uploadOk = 0;
        }
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif"
        ) {
            $uploadOk = 0;
        }
        if ($uploadOk == 0) {
        } else {
            if (move_uploaded_file($_FILES["twelth"]["tmp_name"], $target_file)) {
            } else {
            }
        }
    }


    if ($_FILES["degree"]["name"] != "" || $_FILES["degree"]["name"] != null) {
        $target_file = $target_dir . basename($_FILES["degree"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        $check = getimagesize($_FILES["degree"]["tmp_name"]);
        if ($check !== false) {
            $uploadOk = 1;
        } else {
            $uploadOk = 0;
        }
        if (file_exists($target_file)) {
            $uploadOk = 0;
        }
        if ($_FILES["degree"]["size"] > 500000) {
            $uploadOk = 0;
        }
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif"
        ) {
            $uploadOk = 0;
        }
        if ($uploadOk == 0) {
        } else {
            if (move_uploaded_file($_FILES["degree"]["tmp_name"], $target_file)) {
            } else {
            }
        }
    }

    if ($_FILES["additionalcourse"]["name"] != "" || $_FILES["additionalcourse"]["name"] != null) {
        $target_file = $target_dir . basename($_FILES["additionalcourse"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        $check = getimagesize($_FILES["additionalcourse"]["tmp_name"]);
        if ($check !== false) {
            $uploadOk = 1;
        } else {
            $uploadOk = 0;
        }
        if (file_exists($target_file)) {
            $uploadOk = 0;
        }
        if ($_FILES["additionalcourse"]["size"] > 500000) {
            $uploadOk = 0;
        }
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif"
        ) {
            $uploadOk = 0;
        }
        if ($uploadOk == 0) {
        } else {
            if (move_uploaded_file($_FILES["additionalcourse"]["tmp_name"], $target_file)) {
            } else {
            }
        }
    }


    $user = User_Update($firstname, $lastname, $dob, $address, $nationality, $state, $city, $phone1, $phone2, $email, $gender, $username, $password, $cpassword, $drivinglicense, $licensedate, $drivingexp, $typeofveh, $regno, $rc, $vehpermit, $pcert, $pexpdate, $idproof, $addressproof, $passport, $tenth, $twelth, $tenthper, $twelthper, $degree, $additionalcourse);
    echo json_encode($user, JSON_PRETTY_PRINT);
});


$app->run();

?>