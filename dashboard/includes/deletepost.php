<?php

include('connection.php');
if(isset($_GET['id'])){

	$page = $_GET['page'];
	$id = $_GET['id'];
	$sql = "DELETE FROM $page WHERE id='$id' " ;
	$result = mysqli_query($conn, $sql);

	if($conn->query($sql) == TRUE){
	 echo "Record deleted successfully";
	 if($page="thoughtoftheday"){
	 	echo '<br/> <a href="../';
	 	echo 'index.php"> Go Back to index';  
	 	echo '..... </a> </br> ';
	 }else{
	 	echo '<br/> <a href="../';
	 	echo $page;
	 	echo '.php"> Go Back to';  
	 	echo  $page;
	 	echo '..... </a> </br> ';	 	
	 }
		
}
}else{
	    echo "Error deleting record: " . $conn->error;
}



?>