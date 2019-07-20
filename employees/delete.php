<?php //Deletion
// include database connection file
require_once'classes/employee.php';
if(isset($_GET['value']))
    {
// Geeting deletion row id
$rid=$_GET['value'];
$deletedata=new employee();
$delete=$deletedata->delete($rid);
if($delete)
{
// Message for successfull insertion
echo "<script>alert('Record deleted successfully');</script>";
echo "<script>window.location.href='index.php'</script>";
}
    }
?>