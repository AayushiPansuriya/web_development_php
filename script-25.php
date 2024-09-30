
html>
<body>
<form method="get">
Enter number:<input type="text" name=num1>
Enter number:<input type="text" name=num2>
<input type="submit" value="submit">
</form>
</body>
</html>

<?php
$no1=$_GET['num1'];
$no1=$_GET['num2'];
$no1=$no1+$no2;
$no2=$no1-$no2;
$no1=$no1-$no2;
echo"the number is:".$no1.$no2;
?>
