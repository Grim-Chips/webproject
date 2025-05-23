<?php
function Encrypt($Word, $Key)
{
    $Result = "";
    for ($i = 0; $i < strlen($Word); $i++) {
        $c = chr(ord($Word[$i]) + $Key + $i);
        $Result .= $c;
    }
    return $Result;
}


function Decrypt($Word, $Key)
{
    $Result = "";
    for ($i = 0; $i < strlen($Word); $i++) {
        $c = chr(ord($Word[$i]) - $Key - $i);
        $Result .= $c;
    }
    return $Result;
}
function addUser($email, $password, $fullname, $dob, $usertype)
{
    $file = fopen("user.txt", "a");
    if ($file) {
        fwrite($file, "$email~$password~$fullname~$dob~$usertype");
        fclose($file);
        return true;
    } else {
        return false;
    }
}
?>