<?php

// include database connection file
require_once'classes/employee.php';
// Get the userid
$userid=intval($_GET['value']);
$record=new employee();
$sql=$record->select();
$cnt=1;
while($row=mysqli_fetch_array($sql))
  {
  	if($userid==$row['id'])
  	{
  ?>
  <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css">
	<style type="text/css">
		.fh2{
			font-family:Lobster; 
		}
		.white-color{
			color: white;
		}
		td{
			font-size: 16px;
		}
	</style>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">



	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand fh2 white-color" href="#">POWER EMPLOYEE</a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link white-color" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link white-color" href="#">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link white-color" href="insert.php" >Contact</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<div class="container mt-4 mr-sm-2">
<form name="editrecord" method="post" action="afterupdate.php">
<div class="row">
<div class="col-md-4"><b>id</b>
<input type="int" name="id" value="<?php echo htmlentities($row['id']);?>" class="form-control" required>
</div>
<div class="col-md-4"><b>Name</b>
<input type="text" name="name" value="<?php echo htmlentities($row['name']);?>" class="form-control" required>
</div>
</div>
<div class="row">
<div class="col-md-4"><b>city</b>
<input type="text" name="city" value="<?php echo htmlentities($row['city']);?>" class="form-control" required>
</div>
<div class="col-md-4"><b>designation</b>
<input type="text" name="designation" value="<?php echo htmlentities($row['designation']);?>" class="form-control"  required>
</div>
</div>
</div >

<?php
   } 
 } 
 ?>
 <div class="container mt-4 mr-sm-2">
<div class="row" style="margin-top:1%">
<div class="col-md-8">
<input class="btn btn-sn btn-primary" type="submit" name="update" value="Update">
</div>
</div>
</div>
     </form>