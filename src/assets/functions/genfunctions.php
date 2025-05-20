<?php
function getUserPage($userId)
{
    $fileName = "UserTypeMenu.txt";
    $myfile = fopen($fileName, "r+") or die("Unable to open file!");
    while (!feof($myfile)) {
        $line = fgets($myfile);
        $arr = explode("~", $line);
        if ($arr[0] == $userId) {
            fclose($myfile);
            return $arr[1];
        }
    }
    fclose($myfile);
    return false;
}

// do all file manipulations
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

function ListAll($fileName)
{
    return readfile($fileName);
}

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

        if (isset($ArrayLine[0]) && $ArrayLine[0] != "") {
            $LastId = $ArrayLine[0];
        }
    }
    fclose($myfile);
    return $LastId;
}

function UpdateRecord($fileName, $Newrecord, $OldRecord)
{
    $contents = file_get_contents($fileName);
    //replace record with null in content
    $contents = str_replace($OldRecord, $Newrecord, $contents);
    file_put_contents($fileName, $contents);
}

function DeleteRecord($fileName, $record)
{
    $contents = file_get_contents($fileName);
    //replace record with null in content
    $contents = str_replace($record . "\r\n", '', $contents);
    file_put_contents($fileName, $contents);
}

function StoreRecord($fileName, $record)
{
    $myfile = fopen($fileName, "a+");
    fwrite($myfile, $record . "\r\n");
    fclose($myfile);
}

function searchUser($fileName, $Search)
{
    if (!file_exists($fileName)) {
        return false;
    }

    $myfile = fopen($fileName, "r+") or die("Unable to open file!");
    while (!feof($myfile)) {
        $line = fgets($myfile);
        $i = strpos($line, $Search);

        if ($i !== false && $i >= 0) {
            fclose($myfile);
            return $line;
        }
    }
    fclose($myfile);
    return false;
}
?>