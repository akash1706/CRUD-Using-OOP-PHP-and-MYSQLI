<?php
 
 include 'classes/employee.php';

   $showobject = new employee(); // Creating database object;
?>
<!DOCTYPE html>
<html>
<head>
	<title>new page</title>
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
</head>



<body>
  
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
	<!--table-->
	<div class="container mt-4">
		<div class="row-lg-12">
			<div class="col-lg-12">
         <div class="jumbotron">
         	<h4 class="mb-4">ALL EMPLOYEES</h4>
             <table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">city</th>
      <th scope="col">designation</th>
      <th scope="col">Action</th>
    </tr>
  </thead>

  <tbody>

    <?php
  $s=$showobject->select();
  $cnt=1;
  while($row=mysqli_fetch_array($s))
  {
  ?>
    <tr>
      <td ><?php echo $row['id'];  $var=$row['id'];  ?></td>
      <td><?php echo $row['name'];?></td>
      <td><?php echo $row['city'];?></td>
      <td><?php echo $row['designation'];?></td>
      <td>
        <?php  
      echo ' <a class="btn btn-sn btn-primary" href="update.php?value='.$var.'">edit</a><a class="btn btn-sn btn-danger" href="delete.php?value='.$var.'">Delete</a></td> ';
        ?>
    </tr>
   <?php $cnt=$cnt+1;} ?>
  </tbody>
</table> 
         </div>
         	
         </div>			
		</div>
	</div>

</body>
</html>