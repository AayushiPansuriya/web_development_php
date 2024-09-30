
<html>
<body>
<form method="get">
Enter number:<input type="text" name=num1>
<input type="submit" value="submit">
</form>
</body>
</html>

<?php
$radius=$_GET['num1'];
$pi=3.14;
$a=$pi*$radius*$radius;
echo "area of circle is",$a;
?>