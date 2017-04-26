
<?php
include('connection.php');
$page = $_GET['page'];
$rid = $_GET['id'];


if ($page == 'thoughtoftheday'){

		 	
		if (isset($_POST['update'])) {
			$rid = $_GET['id'];
			$Datetimes = $_POST['Datetimes'];
				$Name = $_POST['Name'];
				$Thought = htmlspecialchars($_POST['Thought'],ENT_QUOTES);
				$Photo = $_FILES["fileToUpload"]["name"];

		if($Photo == '' || $Photo == 'undefined'){
			
			$sql = "UPDATE $page SET Datetimes='$Datetimes', Name='$Name' ,Thought='$Thought' WHERE id='$rid' ";
			 echo "Data update successfully";

		}else{
			
			$target_dir = "../../img/uploads/";
			$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

			$uploadOk = 1;
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
			// Check if image file is a actual image or fake image
			if(isset($_POST["submit"])) {
			    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
			    if($check !== false) {
			        echo "File is an image - " . $check["mime"] . ".";
			        $uploadOk = 1;
			    } else {
			        echo "File is not an image.";
			        $uploadOk = 0;
			    }
			}
			// Check if file already exists
			if (file_exists($target_file)) {
			    echo "Sorry, file already exists.<br/>";
			    $uploadOk = 0;
			}else if ($_FILES["fileToUpload"]["size"] > 500000) {
			    echo "Sorry, your file is too large.";
			    $uploadOk = 0;
			}else if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
			&& $imageFileType != "gif" ) {
			    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
			    $uploadOk = 0;
			}

			 if ($uploadOk == 0) {
			 	$sql = "UPDATE $page SET Datetimes='$Datetimes', Name='$Name' ,Thought='$Thought' WHERE id='$rid' ";
			    echo "Sorry, your file was not uploaded.";
			// if everything is ok, try to upload file
			} else {
			    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
			    	$sql = "UPDATE $page SET Datetimes='$Datetimes', Name='$Name' ,Thought='$Thought',Photo='$Photo' WHERE id='$rid' ";
			        echo "Data update successfully";
			        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
			    } else {
			        echo "Sorry, there was an error uploading your file.";
			    }
			}
			
			
		}
			
			$result = mysqli_query($conn, $sql);

			if (mysqli_query($conn, $sql)) {
				echo '<br/> <a href="../index.php"> Go Back to index..... </a>';

			} else {
			    echo "Error updating record: " . mysqli_error($conn);
			}

		}


}elseif ($page == 'horoscope' ){
		
	if (isset($_POST['update'])) {
		$rid = $_GET['id'];
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

		$sql = "UPDATE horoscope SET Datetimes='$Datetimes',Aries='$Aries' ,Taurus='$Taurus',Gemini='$Gemini',Cancer='$Cancer',Leo='$Leo',Virgo='$Virgo',Libra='$Libra',Scorpio='$Scorpio',Sagittarius='$Sagittarius',Capricorn='$Capricorn',Aquarius='$Aquarius',Pisces='$Pisces' WHERE id='$rid' ";

		$result = mysqli_query($conn, $sql);

		if (mysqli_query($conn, $sql)) {
	   		 echo "Record updated successfully";
			echo '<br/> <a href="../horoscope.php"> Go Back to horoscope..... </a>';

		} else {
		    echo "Error updating record: " . mysqli_error($conn);
		}

	}

}elseif ($page == 'fashion'){
	if (isset($_POST['update'])) {
		$rid = $_GET['id'];
		$Datetimes=$_POST['Datetimes'];
		$Peoplename=$_POST['Peoplename'];
		$Description = htmlspecialchars($_POST['Description'],ENT_QUOTES);
		$Photo=$_FILES["fileToUpload"]["name"];

	if($Photo == '' || $Photo == 'undefined'){
		
		$sql = "UPDATE $page SET Datetimes='$Datetimes', Peoplename='$Peoplename' ,Description='$Description' WHERE id='$rid' ";
		 echo "Data update successfully";

	}else{
		
		$target_dir = "../../img/uploads/";
		$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
		    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
		    if($check !== false) {
		        echo "File is an image - " . $check["mime"] . ".";
		        $uploadOk = 1;
		    } else {
		        echo "File is not an image.";
		        $uploadOk = 0;
		    }
		}
		// Check if file already exists
		if (file_exists($target_file)) {
		    echo "Sorry, file already exists.<br/>";
		    $uploadOk = 0;
		}else if ($_FILES["fileToUpload"]["size"] > 500000) {
		    echo "Sorry, your file is too large.";
		    $uploadOk = 0;
		}else if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {
		    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		    $uploadOk = 0;
		}

		 if ($uploadOk == 0) {
		 	$sql = "UPDATE $page SET Datetimes='$Datetimes', Peoplename='$Peoplename' ,Description='$Description' WHERE id='$rid' ";
		    echo "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
		} else {
		    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
		    	$sql = "UPDATE $page SET Datetimes='$Datetimes', Peoplename='$Peoplename' ,Description='$Description',Photo='$Photo' WHERE id='$rid' ";
		        echo "Data update successfully";
		        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
		    } else {
		        echo "Sorry, there was an error uploading your file.";
		    }
		}
		
		
	}
		
		$result = mysqli_query($conn, $sql);

		if (mysqli_query($conn, $sql)) {
			echo '<br/> <a href="../';
			echo $page;
			echo '.php"> Go Back to '; 
			echo  $page;
			echo '..... </a> </br> ';
		} else {
		    echo "Error updating record: " . mysqli_error($conn);
		}

	}

	
}elseif ($page == 'dailynews' || $page == 'national' ||$page == 'international' || $page == 'technology' ||$page == 'entertainment' ||$page == 'sports' ||$page == 'business'  ){
	
	if (isset($_POST['update'])) {
			$rid = $_GET['id'];
			$Datetimes=$_POST['Datetimes'];
			$Topic = htmlspecialchars($_POST['Topic'],ENT_QUOTES);
			$Description = htmlspecialchars($_POST['Description'],ENT_QUOTES);
			$Photo=$_FILES["fileToUpload"]["name"];

		if($Photo == '' || $Photo == 'undefined'){
		
		$sql = "UPDATE $page SET Datetimes='$Datetimes', Topic='$Topic' ,Description='$Description' WHERE id='$rid' ";
		 echo "Data update successfully";

	}else{
		
		$target_dir = "../../img/uploads/";
		$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
		    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
		    if($check !== false) {
		        echo "File is an image - " . $check["mime"] . ".";
		        $uploadOk = 1;
		    } else {
		        echo "File is not an image.";
		        $uploadOk = 0;
		    }
		}
		// Check if file already exists
		if (file_exists($target_file)) {
		    echo "Sorry, file already exists.<br/>";
		    $uploadOk = 0;
		}else if ($_FILES["fileToUpload"]["size"] > 500000) {
		    echo "Sorry, your file is too large.";
		    $uploadOk = 0;
		}else if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {
		    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		    $uploadOk = 0;
		}

		 if ($uploadOk == 0) {
		 	$sql = "UPDATE $page SET Datetimes='$Datetimes', Topic='$Topic' ,Description='$Description' WHERE id='$rid' ";
		    echo "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
		} else {
		    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
		    	$sql = "UPDATE $page SET Datetimes='$Datetimes', Topic='$Topic' ,Description='$Description' ,Photo='$Photo' WHERE id='$rid' ";
		        echo "Data update successfully";
		        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
		    } else {
		        echo "Sorry, there was an error uploading your file.";
		    }
		}
		
		
	}
		
		$result = mysqli_query($conn, $sql);

		if (mysqli_query($conn, $sql)) {
			echo '<br/> <a href="../';
			echo $page;
			echo '.php"> Go Back to '; 
			echo  $page;
			echo '..... </a> </br> ';

		} else {
		    echo "Error updating record: " . mysqli_error($conn);
		}

	}

		
}elseif ($page == 'interview' ){
	
	if (isset($_POST['update'])) {
			$rid = $_GET['id'];
			$Datetimes=$_POST['Datetimes'];
			$Names=$_POST['Names'];
			$Topic = htmlspecialchars($_POST['Topic'],ENT_QUOTES);
			$Description = htmlspecialchars($_POST['Description'],ENT_QUOTES);
			$Photo=$_FILES["fileToUpload"]["name"];

		if($Photo == '' || $Photo == 'undefined'){
		
		$sql = "UPDATE $page SET Datetimes='$Datetimes', Names='$Names', Topic='$Topic' ,Description='$Description' WHERE id='$rid' ";
		 echo "Data update successfully";

	}else{
		
		$target_dir = "../../img/uploads/";
		$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
		    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
		    if($check !== false) {
		        echo "File is an image - " . $check["mime"] . ".";
		        $uploadOk = 1;
		    } else {
		        echo "File is not an image.";
		        $uploadOk = 0;
		    }
		}
		// Check if file already exists
		if (file_exists($target_file)) {
		    echo "Sorry, file already exists.<br/>";
		    $uploadOk = 0;
		}else if ($_FILES["fileToUpload"]["size"] > 500000) {
		    echo "Sorry, your file is too large.";
		    $uploadOk = 0;
		}else if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {
		    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		    $uploadOk = 0;
		}

		 if ($uploadOk == 0) {
		 	$sql = "UPDATE $page SET Datetimes='$Datetimes', Names='$Names', Topic='$Topic' ,Description='$Description' WHERE id='$rid' ";
		    echo "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
		} else {
		    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
		    	$sql = "UPDATE $page SET Datetimes='$Datetimes', Names='$Names', Topic='$Topic' ,Description='$Description' ,Photo='$Photo' WHERE id='$rid' ";
		        echo "Data update successfully";
		        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
		    } else {
		        echo "Sorry, there was an error uploading your file.";
		    }
		}
		
		
	}
		
		$result = mysqli_query($conn, $sql);

		if (mysqli_query($conn, $sql)) {
			echo '<br/> <a href="../';
			echo $page;
			echo '.php"> Go Back to '; 
			echo  $page;
			echo '..... </a> </br> ';

		} else {
		    echo "Error updating record: " . mysqli_error($conn);
		}

	}

		
}else{
	echo "sorry page note found";
}

?>



