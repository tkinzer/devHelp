<?php


$server = ""; //enter your server name
$serverLOC = ""; //enter your server ip

$userName = ""; //enter your username
$password = ""; //enter your password

$primaryID = "" //ENTER IDENTIFIER TO GRAB ROW
$tableName = ""; //ENTER YOUR TABLE
$othervalue = "" //enter any other info and create every field like this one
$othervalue2 = "" //second+ field (attribute)

if($connCREATE = mysql("CREATE " . $tableName . " WHERE primary=" + $primaryID)) {
  echo true; //outputs 1 as the response
} else {
  echo false; //outputs 0 as the response
}

$connINSERT = mysql("INSERT INTO " . $tableName . " (primaryid,othervalue,othervalue2) VALUES ('" . $primaryID . "','" . $othervalue . "','" . $othervalue2 . "'));

$connSELECT = mysql("SELECT * FROM " . $tableName . " WHERE primary=" + $primaryID); //* select all info
$connArray = mysql_fetch_array($connection);



exit;

?>
