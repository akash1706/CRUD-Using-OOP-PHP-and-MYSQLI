<?php
// include database connection file
require_once'classes/employee.php';
// Object creation
$insertdata=new employee();
if(isset($_POST['insert']))
{
// Posted Values
$id1=$_POST['id'];
$name1=$_POST['name'];
$city1=$_POST['city'];
$designation1=$_POST['designation'];

//Function Calling
$insert=$insertdata->insert($id1,$name1,$city1,$designation1);
if($insert)
{
// Message for successfull insertion
echo "<script>alert('Record inserted successfully');</script>";
echo "<script>window.location.href='index.php'</script>";
}
else
{
// Message for unsuccessfull insertion
echo "<script>alert('Something went wrong. Please try again');</script>";
echo "<script>window.location.href='index.php'</script>";
}
}
?>