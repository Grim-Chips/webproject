<?
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
    return $LastId;
}


function deleteRecord($FileName, $Id)
{
    $myfile = fopen($FileName, "r+") or die("Unable to open file!");
    $LastId = 0;
    $LoadFileContent = "";
    while (!feof($myfile)) {
        $line = fgets($myfile);
        $ArrayLine = explode("~", $line);

        if ($ArrayLine[0] == $Id) {
            //Skip
        } else {
            $LoadFileContent .= $line;
        }
    }
    fclose($myfile);
    file_put_contents($FileName, trim($LoadFileContent));

}


?>