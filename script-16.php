
<html>
<body>
<form method="get">
     Enter your sentect<input type="text" name="sen">
	 <input type="submit" value="submit">
</form>
</body>
</html>	 

<?php
$sent=$_GET['sen'];

$vowel=array("a","i","o","u","e");
$count=0;
for ($i=0; $i< strlen($sent); $i++)
{
	if (in_arry(strtolower($sent[$i]),$vowel))
	{
		$count++;
	}
	
}
echo "Number of vowel in $sent is : $count":
	

?>