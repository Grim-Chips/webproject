<?php
session_start();
?>
<form action="ListAllProductss.php" method="post" >
Search <input type="text" name="KeyWord" /> <input type="image" src="download.png" align="middle"/>
</form>
<table border="1">
<tr>
	<td colspan="4"><font color=red><?php echo @$_GET["Msg"]; ?></font></td>
</tr>
<tr>
<td>ProductName</td>
<td>Price</td>

<td>Delete</td>
</tr>


<?php

echo date("l jS \of F Y h:i:s A");
include "ProductFnc.php";



if (isset($_REQUEST["KeyWord"]))
{

$f=getAllProductssByKeyWord($_REQUEST["KeyWord"]);
}
else
{
$f=getAllProductss();	
}
for ($i=0;$i<count($f);$i++)
{
	$Row=explode("~",$f[$i]);
	if (count($Row)>2)
	{
		
		
		echo "<tr>";
		for ($j=1;$j<count($Row);$j++)
		{
			
			echo "<td>".$Row[$j]."</td>";
			
			
			
		}
		echo "<td><a href=deleteProducts.php?id=$Row[0]>DEl</a></td>";
		echo "</tr>";
		
	}
}

?>
<tr><td colspan="4" align="center"><a href="RegisterationForm.php">Add new Products</a></td></tr>
</table>
