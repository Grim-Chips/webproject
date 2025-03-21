<?php
$fileName = "Ayman.txt";
if (!file_exists($fileName)) {
  echo ("FileNotFound");
}

$myfile = fopen($fileName, "r+") or die("Unable to open file!");
$LastId = 0;
while (!feof($myfile)) {
  $line = fgets($myfile);
  $ArrayLine = explode("~", $line);
  for ($i = 0; $i < count($ArrayLine); $i++) {
    if ($i == 0)
      echo "<a href=del.php?id=" . $ArrayLine[$i] . ">" . $ArrayLine[$i] . "</a>";
    else
      echo ($ArrayLine[$i]);
  }
  echo ("<br>");
}
?>
<a href="RegisterationForm.html">Add new</a>