8a.html
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Simple Calculator</title>
</head>
<body>
<form action="8a.php" method="post">
<h1>Simple Calculator</h1>
<p>First Operand: <input type="text" name="op1"
/></p> <p>Choose Operator:
<input type="radio" name="operator" checked="checked" value="+" /> Add(+)
<input type="radio" name="operator" value="-" /> Subtract(-)
<input type="radio" name="operator" value="*" /> Multiply(*)
<input type="radio" name="operator" value="/" /> Divide(/)
</p>
<p>Second Operand: <input type="text" name="op2"></p>
<p><input type="submit" name="submit" value="Submit">
<input type="reset" name="submit" value="Reset"></p>
</form>
</body>
</html>


8a.php
<html>
<head>
<title>Result Page</title>
<style type="text/css">
h1,h2 {text-align: center}
</style>
</head>
<body>
<?php
$op1=$_POST['op1'];
$op2=$_POST['op2'];
$operator=$_POST['operator'];
switch($operator)
{
case '+':$res=$op1+$op2;
break;
case '-':$res=$op1-$op2;
break;
case '*':$res=$op1*$op2;
break;
case '/':if($op2==0)
$res=0;
else
$res=$op1/$op2;
break;
}
echo "<h1>Simple Calculator</h1>";
echo
"<h2>".$op1.$operator.$op2."=".$res."</h2>"; ?>
</body>


8b.php

<?php
$mat=Array(Array(1,2),
Array(4,5),
Array(7,8)); //Initializing Array in PHP
$transpose=Array(); //Creating empty array in PHP
echo "<html><head><title>Matrix Transpose</title></head><body>";
echo "<h1>Matrix is:<br/>";
for($i = 0; $i < count($mat); $i++)
{
for ($j = 0; $j < count($mat[0]); $j++)
{
echo $mat[$i][$j] . " ";
}
echo "</br/>";
}
echo "</h1>";
for($i = 0; $i < count($mat); $i++) //calculation for Transpose
for($j = 0; $j < count($mat[0]); $j++)
{
$transpose[$j][$i]=$mat[$i][$j];
}
echo "<h1>Transpose of a Matrix is:<br/>";
for($i = 0; $i < count($transpose); $i++)
{
for ($j = 0; $j < count($transpose[0]); $j++)
{
echo $transpose[$i][$j] . " ";
}
echo "<br/>";
}
echo "</h1>";
echo "</body></html>";
?>