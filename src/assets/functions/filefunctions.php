<?php
include_once "genfunctions.php";
$fileName = "UsersFile.txt";
$typesFile = "UserType.txt";
$typesMenuFile = "UserTypeMenu.txt";

function Login($Email, $Password)
{
    global $fileName;
    $res = searchUser($fileName, $Email . "~" . $Password);
    return $res;
}

function addUser($Email, $Password, $FullName, $DOB, $userType)
{
    global $fileName;
    $id = getLastId($fileName, "~") + 1;
    $record = $id . "~" . $Email . "~" . $Password . "~" . $FullName . "~" . $DOB . "~" . $userType;
    if (searchUser($fileName, $Email) == false) {
        StoreRecord($fileName, $record);
        return true;
    } else {
        return false;
    }
}
?>