<html>
<head></head>
<body>
<?php

$server="localhost";
$user="root";
$password=" ";
$db="university";

$c=new mysqli($server,$user,$password,$db);

$i=$_REQUEST["id"];
$n=$_REQUEST["nm"];
$e=$_REQUEST["em"];
$p=$_REQUEST["pswd"];

$j="insert into students values($i,$n,$e,$p)";

if($c->query($j)==TRUE)
{
echo "Record updated successfully";
}
else
{
echo "Error in updating the record: ".$c->error;
}

?>

<table border="1">
<tr>
<td>ID</td>
<td><?php echo "$i"; ?></td>
</tr>



</table>
</body>
</html>
