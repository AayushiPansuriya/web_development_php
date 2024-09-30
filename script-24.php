
html>
<body>
<form method="get">
Enter number:<input type="text" name=num1>
<input type="submit" value="submit">
</form>
</body>
</html>

<?php
$square=$_GET['num1'];
$ans=sqrt($aquare);
echo"the squre root of".$ans;
?>