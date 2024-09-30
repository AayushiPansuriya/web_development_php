
<html>
<body>
<form method="get">
Enter Number:<input type="text" name=num>
<input type="submit" value="submit">
</form>
</body>
</html>

<?php
$number=$_GET['num'];
//$num1=primecheck($number);
if($number==1)
{
	echo"number is prime";
}
else
{
   echo"number is not prime";
}   
?>