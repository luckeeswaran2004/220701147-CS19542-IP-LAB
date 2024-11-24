<?php
$host ='localhost';
$user ='root';
$pass ='';
$dbname='dbcon';
$conn = mysqli_connect($host, $user,$pass,$dbname);
if(!$conn)
{
die('Could not connect:
'.mysqli_connect_error());
}
echo 'Connected successfully<br/>';

$sql = "INSERT INTO emptab(empid,ename,desig,dept,salary,doj) VALUES (0,'logesh','employee','chemical',100000,'20203-22-12')";
$sql = "UPDATE emptab SET salary = 120000 WHERE empid = 0 ";
mysqli_query($conn,$sql);
?>