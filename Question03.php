<html>
<head>
</head>
<body>
<?php

$un=30;

if($un<=50)
{
$price=$un*3.50;
}

else if($un<=100)
{
$price=$un*4.00;
}

else if($un<=150)
{
$price=$un*5.20;
}

else($un>=151)
{
$price=$un*6.50
}

echo("Electricity bill= $price");
?>
</body>
</html>