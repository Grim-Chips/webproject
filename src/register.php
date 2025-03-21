<?php

function getLastId($fileName, $Separator)
{
    if (!file_exists($fileName)) {
        return 0;
    }

    $myfile = fopen($fileName, "r+") or die("Unable to open file!");
    $LastId = 0;
    while (!feof($myfile)) {
        $line = fgets($myfile);
        $ArrayLine = explode($Separator, $line);

        if ($ArrayLine[0] != "") {
            $LastId = $ArrayLine[0];
        }
    }
    fclose($myfile); // Close the file after reading
    return $LastId;
}

// Initialize variables
$FullName = "";
$Email = "";
$Password = "";

if (isset($_POST["FullName"]) && isset($_POST["Email"]) && isset($_POST["Password"])) {
    $FullName = $_REQUEST["FullName"];
    $Email = $_REQUEST["Email"];
    $Password = $_REQUEST["Password"];
    echo "The Email entered was : <font color=blue>" . $Email . "</font><br>";
}

$id = getLastId("users.txt", "~") + 1;

$record = $id . "~" . $Email . "~" . $Password . "~" . $FullName . "\r\n";
$myfile = fopen("Ayman.txt", "a+") or die("Unable to open file!");
fwrite($myfile, $record);
fclose($myfile);
?>