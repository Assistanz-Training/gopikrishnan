<?php
require 'db_orm.php';
date_default_timezone_set("asia/kolkata");
/*  Session Key Management */
session_start();


function New_User($firstname, $lastname, $dob, $address, $nationality, $state, $city, $phone1, $phone2, $email, $gender, $username, $password, $cpassword, $drivinglicense, $licensedate, $drivingexp, $typeofveh, $regno, $rc, $vehpermit, $pcert, $pexpdate, $idproof, $addressproof, $passport, $tenth, $twelth, $tenthper, $twelthper, $degree, $additionalcourse)
{
    $row_array = array();
    $parents = ORM::for_table('cab_users')->where(array(
        'username' => $username
    ))->find_array();
    $no_of_rows = count($parents);
    if ($no_of_rows > 0) {
        $row_array['status'] = 2;
    } else {
        $users = ORM::for_table('cab_users')->create();
        $users->firstname = $firstname;
        $users->lastname = $lastname;
        $users->dob = $dob;
        $users->address = $address;
        $users->nationality = $nationality;
        $users->state = $state;
        $users->city = $city;
        $users->phone1 = $phone1;
        $users->phone2 = $phone2;
        $users->email = $email;
        $users->gender = $gender;
        $users->username = $username;
        $users->password = $password;
        $users->cpassword = $cpassword;
        $users->drivinglicense = $drivinglicense;
        $users->licensedate = $licensedate;
        $users->drivingexp = $drivingexp;
        $users->typeofveh = $typeofveh;
        $users->regno = $regno;
        $users->rc = $rc;
        $users->vehpermit = $vehpermit;
        $users->pcert = $pcert;
        $users->pexpdate = $pexpdate;
        $users->idproof = $idproof;
        $users->addressproof = $addressproof;
        $users->passport = $passport;
        $users->tenth = $tenth;
        $users->twelth = $twelth;
        $users->tenthper = $tenthper;
        $users->twelthper = $twelthper;
        $users->degree = $degree;
        $users->additionalcourse = $additionalcourse;
        if ($users->save()) {
            $row_array['status'] = 1;
        } else {
            $row_array['status'] = 0;
        }
    }
    return $row_array;
}


function Single_User($username)
{
    $parentsArray = array();
    $k = 0;
    $parents = ORM::for_table('cab_users')->where(array(
        'username' => $username
    ))->find_array();

    $row_array = array();

    if ($parents) {

        foreach ($parents as $parent) {
            $row_array = $parent;
        }
        $row_array['status'] = 1;
        $parentsArray = array_merge($parentsArray, $row_array);

    } else {
        $parentsArray['status'] = 0;
    }
    return $parentsArray;
}


function Users_List()
{
    $parentsArray = array();
    $k = 0;

    $parents = ORM::for_table('cab_users')->find_array();
    $no_of_rows = count($parents);
    $row_array = array();

    if ($parents) {
        foreach ($parents as $parent) {
            $row_array = array();
            foreach ($parent as $key => $value) {
                $row_array[$key] = $value;
            }
            $row_array['status'] = 1;
            array_push($parentsArray, $row_array);
        }
    } else {
        $row_array['status'] = 0;
        array_push($parentsArray, $row_array);
    }
    return $parentsArray;
}


function UserDelete($username)
{
    $row_array = array();
    $parents = ORM::for_table('cab_users')->where(array(
        'username' => $username
    ))->find_array();

    $row_array = array();
    if ($parents) {

        foreach ($parents as $parent) {
            foreach ($parent as $key => $value) {
                if($key == "id"){
                    $id = $value;
                }
            }
        }
    }
    $users = ORM::for_table('cab_users')->find_one($id);
    if ($users->delete()) {
        $row_array['status'] = 1;
    } else {
        $row_array['status'] = 0;
    }
    return $row_array;
}

function User_Update($firstname, $lastname, $dob, $address, $nationality, $state, $city, $phone1, $phone2, $email, $gender, $username, $password, $cpassword, $drivinglicense, $licensedate, $drivingexp, $typeofveh, $regno, $rc, $vehpermit, $pcert, $pexpdate, $idproof, $addressproof, $passport, $tenth, $twelth, $tenthper, $twelthper, $degree, $additionalcourse)
{
    $row_array = array();
    $parents = ORM::for_table('cab_users')->where(array(
        'username' => $username
    ))->find_array();

    $row_array = array();
    if ($parents) {

        foreach ($parents as $parent) {
            foreach ($parent as $key => $value) {
                if($key == "id"){
                    $id = $value;
                }
            }
        }
    }
    $users = ORM::for_table('cab_users')->find_one($id);
    $users->firstname = $firstname;
    $users->lastname = $lastname;
    $users->dob = $dob;
    $users->address = $address;
    $users->nationality = $nationality;
    $users->state = $state;
    $users->city = $city;
    $users->phone1 = $phone1;
    $users->phone2 = $phone2;
    $users->email = $email;
    $users->gender = $gender;
    $users->username = $username;
    $users->password = $password;
    $users->cpassword = $cpassword;
    $users->drivinglicense = $drivinglicense;
    $users->licensedate = $licensedate;
    $users->drivingexp = $drivingexp;
    $users->typeofveh = $typeofveh;
    $users->regno = $regno;
    $users->rc = $rc;
    $users->vehpermit = $vehpermit;
    $users->pcert = $pcert;
    $users->pexpdate = $pexpdate;
    $users->idproof = $idproof;
    $users->addressproof = $addressproof;
    $users->passport = $passport;
    $users->tenth = $tenth;
    $users->twelth = $twelth;
    $users->tenthper = $tenthper;
    $users->twelthper = $twelthper;
    $users->degree = $degree;
    $users->additionalcourse = $additionalcourse;
    if ($users->save()) {
        $row_array['status'] = 1;
    } else {
        $row_array['status'] = 0;
    }
    return $row_array;
}


?>