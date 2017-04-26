<?php
include('connection.php');
$page = $_GET['page'];

if ($page == 'thoughtoftheday'){
	// create table --------------------------
	$sql = " CREATE TABLE IF NOT EXISTS $page(
			id INT(15) PRIMARY KEY AUTO_INCREMENT,
			Datetimes DATE,
			Name VARCHAR(200),
			Thought VARCHAR(2000),
			Photo VARCHAR(200)
			)";

	if($conn->query($sql)==true){
		echo "Table created successfully <br/>";
	}else{
		echo "error creating table <br/>". $conn->error;
	}

	// insert data in  table --------------------------
	$Datetimes = $_POST['Datetimes'];
	$Name = $_POST['Name'];
	$Thought = htmlspecialchars($_POST['Thought'],ENT_QUOTES);
	$Photo = $_FILES["fileToUpload"]["name"];

	include('imageupload.php');


	 if ($uploadOk == 0) {
	    echo "Sorry, your file was not uploaded.";
	// if everything is ok, try to upload file
	} else {
	    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
	    	$insertsql = "INSERT INTO $page(
				  	Datetimes,Name,Thought,Photo
				  )
				  VALUES(
				  	'$Datetimes','$Name','$Thought','$Photo'
				  )";
				  if(mysqli_query($conn,$insertsql)){
				  	echo '<br/> <a href="../index.php"> Go Back to index ..... </a> </br>';
				  }else{
				  	echo "error:" . $insertsql. "<br>" . mysqli_error($conn);
				  }
	        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
	    } else {
	        echo "Sorry, there was an error uploading your file.";
	    }
	}

}elseif ($page == 'horoscope' ){

	// create table --------------------------
	$sql = "CREATE TABLE IF NOT EXISTS $page(
					id INT(15) PRIMARY KEY AUTO_INCREMENT,
					Datetimes DATE,
					Aries VARCHAR(1000),
					Taurus VARCHAR(1000),
					Gemini VARCHAR(1000),
					Cancer VARCHAR(1000),
					Leo VARCHAR(1000),
					Virgo VARCHAR(1000),
					Libra VARCHAR(1000),
					Scorpio VARCHAR(1000),
					Sagittarius VARCHAR(1000),
					Capricorn VARCHAR(1000),
					Aquarius VARCHAR(1000),
					Pisces VARCHAR(1000)
					 )";

	if($conn->query($sql) === true){
		echo "Table created successfully <br/>";
	}else{
		echo "error creating table <br/>" . $conn->error;
	}


	// insert data in  table --------------------------
	$Datetimes = $_POST['Datetimes'];
	$Aries = htmlspecialchars($_POST['Aries'], ENT_QUOTES);
	$Taurus = htmlspecialchars($_POST['Taurus'], ENT_QUOTES);
	$Gemini = htmlspecialchars($_POST['Gemini'], ENT_QUOTES);
	$Cancer = htmlspecialchars($_POST['Cancer'], ENT_QUOTES);
	$Leo = htmlspecialchars($_POST['Leo'], ENT_QUOTES);
	$Virgo = htmlspecialchars($_POST['Virgo'], ENT_QUOTES);
	$Libra = htmlspecialchars($_POST['Libra'], ENT_QUOTES);
	$Scorpio = htmlspecialchars($_POST['Scorpio'], ENT_QUOTES);
	$Sagittarius = htmlspecialchars($_POST['Sagittarius'], ENT_QUOTES);
	$Capricorn = htmlspecialchars($_POST['Capricorn'], ENT_QUOTES);
	$Aquarius = htmlspecialchars($_POST['Aquarius'], ENT_QUOTES);
	$Pisces = htmlspecialchars($_POST['Pisces'], ENT_QUOTES);

	$insertsql = "INSERT INTO $page(
					Datetimes,Aries,Taurus,Gemini,Cancer,Leo,Virgo,Libra,Scorpio,Sagittarius,Capricorn,Aquarius,Pisces
					)
				 VALUES(
				 	'$Datetimes','$Aries','$Taurus','$Gemini','$Cancer','$Leo','$Virgo','$Libra','$Scorpio','$Sagittarius','$Capricorn','$Aquarius','$Pisces'
				 )";
	if(mysqli_query($conn, $insertsql)){
		echo "new record created successfully";
				  	echo '<br/> <a href="../horoscope.php"> Go Back to horoscope ..... </a> </br>';
		
	}else{
		echo "error:" . $insertsql. "<br>" . mysqli_error($conn);
	}
}elseif ($page == 'fashion'){
	// create table --------------------------
	$sql = "CREATE TABLE IF NOT EXISTS $page (
					id INT(15) PRIMARY KEY AUTO_INCREMENT,
					Datetimes DATE,
					Peoplename VARCHAR(1000),
					Description VARCHAR(5000),
					Photo VARCHAR(1000)
					)";
			if($conn->query($sql) == true){
				echo "Table Created Successfully </br>";
			}else{
				echo "Error Creating Table </br>" . $conn->error;
			}

			// insert data in  table --------------------------
				$Datetimes = $_POST['Datetimes'];
				$Peoplename = $_POST['Peoplename'];
				$Description = htmlspecialchars($_POST['Description'],ENT_QUOTES);
				$Photo = $_FILES["fileToUpload"]["name"];

				include('imageupload.php');


				 if ($uploadOk == 0) {
				    echo "Sorry, your file was not uploaded.";
				// if everything is ok, try to upload file
				} else {
				    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
				    	$insertsql = "INSERT INTO $page(
							  	Datetimes,Peoplename,Description,Photo
							  )
							  VALUES(
							  	'$Datetimes','$Peoplename','$Description','$Photo'
							  )";
							  if(mysqli_query($conn,$insertsql)){
							  	echo '<br/> <a href="../fashion.php"> Go Back to fashion ..... </a> </br>';
							  }else{
							  	echo "error:" . $insertsql. "<br>" . mysqli_error($conn);
							  }
				        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
				    } else {
				        echo "Sorry, there was an error uploading your file.";
				    }
				}

}elseif ($page == 'dailynews' || $page == 'national' ||$page == 'international' || $page == 'technology' ||$page == 'entertainment' ||$page == 'sports' ||$page == 'business'){
	$sql = "CREATE TABLE IF NOT EXISTS $page (
				id INT(15) PRIMARY KEY AUTO_INCREMENT,
				Datetimes DATE,
				Topic VARCHAR(1000),
				Description VARCHAR(5000),
				Photo VARCHAR(1000)
				)";
		if($conn->query($sql) == true){
			echo "Table Created Successfully </br>";
		}else{
			echo "Error Creating Table </br>" . $conn->error;
		}

		// insert data in  table --------------------------
		$Datetimes = $_POST['Datetimes'];
		$Topic = htmlspecialchars($_POST['Topic'],ENT_QUOTES);
		$Description = htmlspecialchars($_POST['Description'],ENT_QUOTES);
		$Photo = $_FILES["fileToUpload"]["name"];

		include('imageupload.php');


		 if ($uploadOk == 0) {
		    echo "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
		} else {
		    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
		    	$insertsql = "INSERT INTO $page(
					  	Datetimes,Topic,Description,Photo
					  )
					  VALUES(
					  	'$Datetimes','$Topic','$Description','$Photo'
					  )";
					  if(mysqli_query($conn,$insertsql)){
					  	echo '<br/> <a href="../';
					  	echo $page;
					  	echo '.php"> Go Back to '; 
					  	echo  $page;
					  	echo '..... </a> </br> ';
					  }else{
					  	echo "error:" . $insertsql. "<br>" . mysqli_error($conn);
					  }
		        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
		    } else {
		        echo "Sorry, there was an error uploading your file.";
		    }
		}
}elseif ($page == 'interview' ){
	$sql = "CREATE TABLE IF NOT EXISTS $page (
				id INT(15) PRIMARY KEY AUTO_INCREMENT,
				Datetimes DATE,
				Topic VARCHAR(1000),
				Names VARCHAR(500),
				Description VARCHAR(5000),
				Photo VARCHAR(1000)
				)";
		if($conn->query($sql) == true){
			echo "Table Created Successfully </br>";
		}else{
			echo "Error Creating Table </br>" . $conn->error;
		}

		// insert data in  table --------------------------
		$Names = $_POST['Names'];
		$Datetimes = $_POST['Datetimes'];
		$Topic = htmlspecialchars($_POST['Topic'],ENT_QUOTES);
		$Description = htmlspecialchars($_POST['Description'],ENT_QUOTES);
		$Photo = $_FILES["fileToUpload"]["name"];

		include('imageupload.php');


		 if ($uploadOk == 0) {
		    echo "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
		} else {
		    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
		    	$insertsql = "INSERT INTO $page(
					  	Datetimes,Topic,Names,Description,Photo
					  )
					  VALUES(
					  	'$Datetimes','$Topic','$Names','$Description','$Photo'
					  )";
					  if(mysqli_query($conn,$insertsql)){
					  	echo '<br/> <a href="../';
					  	echo $page;
					  	echo '.php"> Go Back to '; 
					  	echo  $page;
					  	echo '..... </a> </br> ';
					  }else{
					  	echo "error:" . $insertsql. "<br>" . mysqli_error($conn);
					  }
		        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
		    } else {
		        echo "Sorry, there was an error uploading your file.";
		    }
		}
}else{
	echo "sorry page note found";
}

?>



