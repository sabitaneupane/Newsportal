<?php

session_start();
$_SESSION['login']='Login';

include('connection.php');
$page = $_GET['page'];

	// // create table --------------------------
	// $sql = " CREATE TABLE IF NOT EXISTS $page(
	// 		id INT(15) PRIMARY KEY AUTO_INCREMENT,
	// 		Username VARCHAR(200),
	// 		Password VARCHAR(200)
	// 		)";

	// if($conn->query($sql)==true){
	// 	echo "Table created successfully <br/>";
	// }else{
	// 	echo "error creating table <br/>". $conn->error;
	// }

	// // insert data in  table --------------------------
	//   $insertsql = "INSERT INTO $page(
	// 			  	Username,Password
	// 			  )
	// 			  VALUES(
	// 			  	'neupane',md5('neupane')
	// 			  )";

	// 	if(mysqli_query($conn,$insertsql)){
	// 		echo '<br/> <a href="../index.php"> Go Back to index ..... </a> </br>';
	// 	}else{
	// 		echo "error:" . $insertsql. "<br>" . mysqli_error($conn);
	// 	}


		// view data from table
		$Username = $_POST[ "Username" ];
		$Password = md5($_POST[ "Password" ]);

		

		// echo $Username;
		// echo $Password;

		$viewsql = ( "SELECT * FROM $page 
				WHERE Username='$Username' AND Password='$Password'" );

			if($result = mysqli_query($conn,$viewsql)){
				if (mysqli_num_rows($result) > 0) {
					echo "Login successfully";
					header ('location: ../index.php');

				}else{
					echo "invalid username or password";
					session_start();
					session_destroy (  );
					header ('location: ../login.php');
				}
				
			}else{
				
				echo "error:" . $insertsql. "<br>" . mysqli_error($conn);
			}

		
?>