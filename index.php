<?php $page = 'home' ?>
<?php include('header.php') ?>

<!-- ********* section starts ******** --> 
<div id="section">
	<div id="breadcrumbcontent">
		<ol class="breadcrumb">
		  <li class="active"><a href="index.php">Home</a></li>
		</ol>

	</div>
<div class="row">
     <div class="col-lg-8 col-md-8 col-sm-12 col-xm-12" style="padding:22px 0px;">
     		
    	 <div id="topslider">
     		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
     		  <!-- Indicators -->
     		  <ol class="carousel-indicators">
     		    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
     		    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
     		    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
     		  </ol>

     		  <!-- Wrapper for slides -->
     		  <div class="carousel-inner" role="listbox" id="carouselcustom">
     		  	<?php
     		  	include('dashboard/includes/connection.php');
     		  	$sql = "SELECT * FROM dailynews ORDER BY Datetimes DESC LIMIT 3";
     		  	$result = mysqli_query($conn, $sql);

     		  		$u = 1;
     		  	if(mysqli_num_rows($result) > 0){
     		  	  while($row = $result-> fetch_assoc()){
     		  	    $id=$row['id'];
     		  	    $Datetimes=$row['Datetimes'];
     		  	    $Topic=$row['Topic'];
     		  	    $Description=$row['Description'];
     		  	    $Photo=$row['Photo'];
     		  	  
     		  	   	$dailynewsheading = $Topic;
     		  	   	$dailynewsstringheading = strip_tags($dailynewsheading);
     		  	   	if (strlen($dailynewsstringheading) > 40) {
     		  	   	    $dailynewsstringCutheading = substr($dailynewsstringheading, 0, 40);
     		  	   	    $dailynewstrimsheading = substr($dailynewsstringCutheading, 0, strrpos($dailynewsstringCutheading, ' ')).' .....  '; 
     		  	   	}else{
     		  	   		 $dailynewstrimsheading = $dailynewsheading;
     		  	   	}

     		  	   	$dailynewsdetails = $Description;
     		  	   	$dailynewsstringdetails = strip_tags($dailynewsdetails);
     		  	   	if (strlen($dailynewsstringdetails) > 70) {
     		  	   	    $dailynewsstringCutdetails = substr($dailynewsstringdetails, 0, 70);
     		  	   	    $dailynewstrimsdetails = substr($dailynewsstringCutdetails, 0, strrpos($dailynewsstringCutdetails, ' ')).' .....  '; 
     		  	   	}else{
     		  	   		 $dailynewstrimsdetails = $details;
     		  	   	}


     		  	        if ($u == 1 ){
									     		  echo '  <div class="item active"> ';
									     		       echo '    	<a href="news.php?post=dailynews&id='.$id.'">';
									     		       echo '   		<img src="img/uploads/'.$Photo.'" alt="" >';
									     		       echo '   	</a>';
									     		       echo '   <div class="carousel-caption">';
									     		       echo '    	<a href="news.php?post=dailynews&id='.$id.'">';
										     		    echo '       	<h1 class="media-heading headerfont"> <span style="padding:0px 15px;background-color:#B71C1C;color:white;"> '.$dailynewstrimsheading.' </span> </h1>';
									     		      echo '  </a>';
									     		      echo '    </div>';
									     		     echo '   </div>';
						}else{
										     		 echo '  <div class="item"> ';
									     		       echo '    	<a href="news.php?post=dailynews&id='.$id.'">';
									     		       echo '   		<img src="img/uploads/'.$Photo.'" alt="" >';
									     		       echo '   	</a>';
									     		       echo '   <div class="carousel-caption">';
									     		       echo '    	<a href="news.php?post=dailynews&id='.$id.'">';
										     		    echo '       	<h1 class="media-heading headerfont"> <span style="padding:0px 15px;background-color:#B71C1C;color:white;"> '.$dailynewstrimsheading.' </span> </h1>';
										     		      echo '  </a>';
									     		      echo '    </div>';
									     		     echo '   </div>';
														     		}
														     $u++;
					     		  						     		 
					     		  			}
					     		  		}else{
					     		  			echo "0 results";
					     		  		}
					     ?>
     		   
     		   
     		     
     		    </div>
     		    

     		  <!-- Controls -->
     		  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
     		    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
     		    <span class="sr-only">Previous</span>
     		  </a>
     		  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
     		    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
     		    <span class="sr-only">Next</span>
     		  </a>
     		</div>
		</div>

		

		<div class="subpost">
			<div class="container-fluid">
			  <h1 class="bgstyleheader"> <span>  National </span>  </h1>
				<div class="newspagepost">
					<div class="row">
							<?php
							include('dashboard/includes/connection.php');
							$sql = "SELECT * FROM national ORDER BY Datetimes DESC LIMIT 2";
							$result = mysqli_query($conn, $sql);


							if(mysqli_num_rows($result) > 0){
								while($row = $result-> fetch_assoc()){
									$id=$row['id'];
									$Datetimes=$row['Datetimes'];
									$Topic=$row['Topic'];
									$Description=$row['Description'];
									$Photo=$row['Photo'];
								
									$heading = $Topic;
									$stringheading = strip_tags($heading);
									if (strlen($stringheading) > 40) {
									    $stringCutheading = substr($stringheading, 0, 40);
									    $trimsheading = substr($stringCutheading, 0, strrpos($stringCutheading, ' ')).' .....  '; 
									}else{
										 $trimsheading = $heading;
									}

									$details = $Description;
									$stringdetails = strip_tags($details);
									if (strlen($stringdetails) > 70) {
									    $stringCutdetails = substr($stringdetails, 0, 70);
									    $trimsdetails = substr($stringCutdetails, 0, strrpos($stringCutdetails, ' ')).' .....  '; 
									}else{
										 $trimsdetails = $details;
									}


										
											echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xm-12">';
												echo '<div class="homenewspost">';
													echo '<a href="news.php?post=national&id='.$id.'"> <img class="img-responsive" src="img/uploads/'.$Photo.'" alt="" >';
													echo ' <h1 class="headerfont"> <span class="">  ' .$trimsheading .'</span> </h1>';
									     		     echo '<p>' . $trimsdetails . '</span></p> </a>';
								     		   echo ' </div>';
											echo '</div>';
										

									}
								}else{
									echo "0 results";
								}

							?>
					</div>

				</div>
			</div>
		</div>

		<div class="adbannerpost">
			<div class="container-fluid">
              <img src="img/adbanner.png" class="img-respnsive" >
             </div>
		</div>

		<div class="subpost">
			<div class="container-fluid">
			  <h1 class="bgstyleheader"> <span>  Interational </span>  </h1>
				<div class="newspagepost">
					<div class="row">
							<?php
							include('dashboard/includes/connection.php');
							$sql = "SELECT * FROM international ORDER BY Datetimes DESC LIMIT 2";
							$result = mysqli_query($conn, $sql);


							if(mysqli_num_rows($result) > 0){
								while($row = $result-> fetch_assoc()){
									$id=$row['id'];
									$Datetimes=$row['Datetimes'];
									$Topic=$row['Topic'];
									$Description=$row['Description'];
									$Photo=$row['Photo'];
								
									$heading = $Topic;
									$stringheading = strip_tags($heading);
									if (strlen($stringheading) > 40) {
									    $stringCutheading = substr($stringheading, 0, 40);
									    $trimsheading = substr($stringCutheading, 0, strrpos($stringCutheading, ' ')).' .....  '; 
									}else{
										 $trimsheading = $heading;
									}

									$details = $Description;
									$stringdetails = strip_tags($details);
									if (strlen($stringdetails) > 70) {
									    $stringCutdetails = substr($stringdetails, 0, 70);
									    $trimsdetails = substr($stringCutdetails, 0, strrpos($stringCutdetails, ' ')).' .....  '; 
									}else{
										 $trimsdetails = $details;
									}


										
											echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xm-12">';
												echo '<div class="homenewspost">';
													echo '<a href="news.php?post=international&id='.$id.'"> <img class="img-responsive" src="img/uploads/'.$Photo.'" alt="" >';
													echo ' <h1 class="headerfont"> <span class="">  ' .$trimsheading .'</span> </h1>';
									     		     echo '<p>' . $trimsdetails . '</span></p> </a>';
								     		   echo ' </div>';
											echo '</div>';
										

									}
								}else{
									echo "0 results";
								}

							?>
					</div>

				</div>
			</div>
		</div>

		<div class="adbannerpost">
			<div class="container-fluid">
              <img src="img/adbanner.png" class="img-respnsive" >
             </div>
		</div>

		<div class="subpost">
			<div class="container-fluid">
			  <h1 class="bgstyleheader"> <span>  Business </span>  </h1>
				<div class="newspagepost">
					<div class="row">
							<?php
							include('dashboard/includes/connection.php');
							$sql = "SELECT * FROM business ORDER BY Datetimes DESC LIMIT 2";
							$result = mysqli_query($conn, $sql);


							if(mysqli_num_rows($result) > 0){
								while($row = $result-> fetch_assoc()){
									$id=$row['id'];
									$Datetimes=$row['Datetimes'];
									$Topic=$row['Topic'];
									$Description=$row['Description'];
									$Photo=$row['Photo'];
								
									$heading = $Topic;
									$stringheading = strip_tags($heading);
									if (strlen($stringheading) > 40) {
									    $stringCutheading = substr($stringheading, 0, 40);
									    $trimsheading = substr($stringCutheading, 0, strrpos($stringCutheading, ' ')).' .....  '; 
									}else{
										 $trimsheading = $heading;
									}

									$details = $Description;
									$stringdetails = strip_tags($details);
									if (strlen($stringdetails) > 70) {
									    $stringCutdetails = substr($stringdetails, 0, 70);
									    $trimsdetails = substr($stringCutdetails, 0, strrpos($stringCutdetails, ' ')).' .....  '; 
									}else{
										 $trimsdetails = $details;
									}


										
											echo '<div class="col-lg-6 col-md-6 col-sm-6 col-xm-12">';
												echo '<div class="homenewspost">';
													echo '<a href="news.php?post=business&id='.$id.'"> <img class="img-responsive" src="img/uploads/'.$Photo.'" alt="" >';
													echo ' <h1 class="headerfont"> <span class="">  ' .$trimsheading .'</span> </h1>';
									     		     echo '<p>' . $trimsdetails . '</span></p> </a>';
								     		   echo ' </div>';
											echo '</div>';
										

									}
								}else{
									echo "0 results";
								}

							?>
					</div>

				</div>
			</div>
		</div>

		


		<div class="adbannerpost">
			<div class="container-fluid">
              <img src="img/adbanner.png" class="img-respnsive" >
             </div>
		</div>
		
	</div>


	


<?php include('sidebar.php') ?>

	</div>
</div>

<!-- ********* section ends ******** --> 

<?php include('footer.php') ?>
