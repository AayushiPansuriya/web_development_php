
<html>
<body>
<form method="get">

 numder1<input type="text" name="fno"/><br>
 numder2<input type="text" name="fno"/><br>
 numder3<input type="text" name="fno"/><br>
 
 submit<input type="submit" value="submit">

</form>
</body>
</html> 

<?php

 $num1=$_GET['fno'];
 $num2=$_GET['sno'];
 $num3=$_GET['tno'];
 
 $maxNamber=max($num1,$num2,$num3);
 
 echo"<br>max no is" .$maxNumber;
 
?>