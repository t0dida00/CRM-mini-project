<?php
class process extends Controller
{
 
    public function ABC(){
        $connection =	mysqli_connect('localhost' , 'root' ,'' ,'hr');
  if(isset($_POST['id']))
    {
	
	$firstName = $_POST['firstName'];
	$id = $_POST['id'];
	$result  = mysqli_query($connection , "UPDATE position SET Name='$firstName'  WHERE ID='$id'");
	if($result){
		echo 'data updated';
	}

}}
}
?>