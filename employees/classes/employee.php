<?php
include 'Db.php';
class employee extends Db{
    //Data read Function
    public function select()
    {
    	$sql="SELECT * FROM employees";
    	
    	$pre=$this->connect();
    	//this will connect with Db.php function connect()
    	$result=mysqli_query($pre,$sql);
    	if(mysqli_num_rows($result)>0)
    	{
    		return $result;
    	}
    }

    //Data Insertion Function
	public function insert($id1,$name1,$city1,$designation1)
	{
	$sql1="insert into employees(id,name,city,designation) 
	values('$id1','$name1','$city1','$designation1')";
    $ret=mysqli_query($this->connect(),$sql1);
	return $ret;
	}

	//Data Deletion function Function
    public function delete($rid)
	{
	$deleterecord=mysqli_query($this->connect(),"delete from employees where id=$rid");
	return $deleterecord;
	}

	//Data updation Function
public function update($id1,$name1,$city1,$designation1)
	{
	$updaterecord=mysqli_query($this->connect(),"update employees set id='$id1',name='$name1',city='$city1',designation='$designation1' where id='$id1' ");
	return $updaterecord;
	}
}

?>