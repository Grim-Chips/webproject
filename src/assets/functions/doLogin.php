<?php
include "src\assets\functions\UserFnc.php";

function doLogin($email, $password)
{
    $pass = Encrypt($password, 2);
    $line = Login($email, $pass);
    if ($line) {
        session_start();
        $arr = explode("~", $line);
        $res = getUserPage($arr[5]);
        // var_dump($res); // Uncomment for debugging
        $_SESSION["Email"] = $email;
        $lastChar = substr($res, -1);
        if ($lastChar == " ")
            $res = substr_replace($res, "", -1);
        header("Location: " . $res);
        exit;
    } else {
        echo "False Login";
    }
}

// Call the function with POST data
doLogin($_POST["Email"], $_REQUEST["Password"]);
?>