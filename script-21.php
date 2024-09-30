
<html>
<body>
<form method="get">
Enter value:<input type="text" name=s1>
<input type="sumit" value="submit">
</form>
</body>
</html>

<?php
$string=$_GET['s1'];
echo"<br>input string".$string;
$revers=strrev($string);
echo"<br>output string".$revers;

if($string==$revers)
{
     echo"<br>".$string."is a palindrome";
}
else
{
     echo"<br>".$string." is not a palindrome";
}	 

?>