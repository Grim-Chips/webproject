<?php
include "Functions.php";
$fileName = "UsersFile.txt";
$typesFile="UserType.txt";
$typesMenuFile="UserTypeMenu.txt";


function Login($Email, $Password)
{
    global $fileName;
    $res=searchUser($fileName, $Email . "~" . $Password);
    return $res;
}

//addUser function & $record

function addUser($Email, $Password, $FullName, $DOB)
{
    global $fileName;
    $id = getLastId($fileName, "~") + 1;
    $record = $id . "~" . $Email . "~" . $Password . "~" . $FullName . "~" . $DOB;
    if (searchUser($fileName, $Email) == false) {
        StoreRecord($fileName, $record);
        return true;
    } else {
        return false;
    }

}
