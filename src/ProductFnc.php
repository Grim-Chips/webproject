<?php
include "Functins.php";
$fileName="Products.txt";
function DeleteProducts($id)
{
	global $fileName;
	$r=getRowById($fileName,"~",$id);
	//echo $r;
	//exit();
	DeleteRecord($fileName,$r);
}
function UpdateProducts($id,$ProductName,$Price)
{
	global $fileName;
	$record=$id."~".$ProductName."~".$Price."\r\n";
	$r=getRowById($fileName,"~",$id);
	//echo $record ."NEW <br>";
	//echo $r ."NEW <br>";
	UpdateRecord($fileName,$record,$r);
	
}
function getProductsById($Id)
{
	global $fileName;
	$Record=getRowById($fileName,"~",$Id);
	
	$ArrayResult=explode("~",$Record);
	$Result['id']=$ArrayResult[0];
	$Result['ProductName']=$ArrayResult[1];
	$Result['Price']=$ArrayResult[2];
	
	return $Result;
}
		
function getAllProducts()
{
	global $fileName;
	$R=ListAll($fileName);
	return $R;
}

function getAllProductssByKeyWord($KeyWord)
{
	global $fileName;
	$R=SearhKeyword($fileName,$KeyWord);
	//echo $R[0] ."Ayman";
	return $R;
}

function addProducts($ProductName,$Price)
{
global $fileName;
$id=getLastId($fileName,"~")+1;
$record=$id."~".$ProductName."~".$Price;
//echo $record;
if (searchProducts($fileName,$ProductName)==FALSE)
{
StoreRecord( $fileName,$record);	
return true;
}
else
{
	return FALSE;
}


}

?>