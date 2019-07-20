<?php
// include database connection file
require_once'classes/employee.php';
//Object
$updatedata=new employee();
if(isset($_POST['update']))
{

// Posted Values
$id1=$_POST['id'];
$name1=$_POST['name'];
$city1=$_POST['city'];
$designation1=$_POST['designation'];
//Function Calling
$update=$updatedata->update($id1,$name1,$city1,$designation1);
// Mesage after updation
echo "<script>alert('Record Updated successfully');</script>";
// Code for redirection
echo "<script>window.location.href='index.php'</script>";
}
?>