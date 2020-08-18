<!DOCTYPE html>
<html>
<head>
<title>Confirmation of order</title>
<style>
body {background-color:purple;}
h2 { color:yellow;}

</style>
</head>
<body>
<h1 style="color:yellow; text-align:center;"> Your order is confirmed</h1>
<?php 
$name=$_POST['fname'];
$cost=0;
$coffeenum=$cupsize=$sugar=$creams="";

if(isset($_POST['sizes']))
{
$cupsize=$_POST['sizes'];
}
if(isset($_POST['num1']))
{
$coffeenum=$_POST['num1'];

if($cupsize=="small")  /* If the user selects small option, small image will be displayed*/
{
	for($i=0;$i<$coffeenum;$i++) /* loop used to repeat the images, as number of coffee's entered by the user*/
	{
	echo "<img src='cup.jpg' height=100 width=100>";
	$cost=$cost+2;
    }
}
else if($cupsize=="medium")  /* If the user selects medium option, medium-sized image will be displayed*/
{
	for($i=0;$i<$coffeenum;$i++)   /* loop used to repeat the images, as number of coffee's entered by the user*/
	{
	echo "<img src='cup.jpg' height=150 width=100>";
	$cost=$cost+2.5;
    }
}
else if($cupsize=="large")   /* If the user selects large option, large image will be displayed*/
{
	for($i=0;$i<$coffeenum;$i++) /* loop used to repeat the images, as number of coffee's entered by the user*/
	{
	echo "<img src='cup.jpg' height=200 width=100>";
	$cost=$cost+3;
    }
}
else  /* If the user selects extra large option, x-large image will be displayed*/
{
	for($i=0;$i<$coffeenum;$i++)  /* loop used to repeat the images, as number of coffee's entered by the user*/
	{
	echo "<img src='cup.jpg' height=250 width=100>";
	$cost=$cost+3.5;
    }
}
}
echo "<img src='plus.jpg' height=100 width=100>"; /* to display plus sign image*/

if(isset($_POST['num2']))
{
	$creams=$_POST['num2'];
	
	for($i=0;$i<$creams;$i++)
	{
	echo "<img src='cream.jpg' height=100 width=100>"; /* images of cream depends on the quantity entered by the user*/
	$cost=$cost+0.5;
    }
} 
	
echo "<img src='plus.jpg' height=100 width=100>";  /* to display plus sign image*/
if(isset($_POST['num3']))
{
	$sugar=$_POST['num3'];
	
		for($i=0;$i<$creams;$i++)
	{
	echo "<img src='sugar.jpg' height=100 width=100>"; /* images of sugar depends on the quantity entered by the user*/
	$cost=$cost+2;
    }
} 	
/*
To print all the details on the screen*/

echo "<pre>";
echo "<h2>Order is for :$name </h2>";
echo "<h2>Number of coffee's :$coffeenum</h2>";
echo "<h2>Coffee Size :$cupsize</h2>";
echo "<h2>Number of Sugars: $sugar</h2>";
echo "<h2>Number of creams : $creams</h2>";
echo "<h2>Cost : $$cost</h2>";
echo "</pre>";
?>
</body>
</html>