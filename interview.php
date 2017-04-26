<?php $page = 'interview' ?>
<?php include('header.php') ?>


<!-- ********* section starts ******** --> 
<div id="section">
	<div id="breadcrumbcontent">
		<ol class="breadcrumb">
		  <li><a href="index.php">Home</a></li>
		  <li class="active"><a href="interview.php">interview</a></li>
		</ol>

	</div>
<div class="row">
     <div class="col-lg-8 col-md-8 col-sm-12 col-xm-12" style="padding:10px 0px;">
     	<div class="container-fluid">
			<h1 class="bgstyleheader"> <span> Interview </span>  </h1>
			<div class="newspagepost">
					<div class="row">
							<?php
							include('dashboard/includes/connection.php');
							$sql = "SELECT * FROM $page ORDER BY Datetimes DESC LIMIT 2";
							$result = mysqli_query($conn, $sql);


							if(mysqli_num_rows($result) > 0){
								while($row = $result-> fetch_assoc()){
									$id=$row['id'];
									$Datetimes=$row['Datetimes'];
									$Names=$row['Names'];
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
													echo '<a href="news.php?post='.$page.'&id='.$id.'">';
													echo ' <h1 class="headerfont" style=" color:#B71C1C;"> <span class="">  ' .$trimsheading .'</span> </h1>';
													echo ' <img class="img-responsive" src="img/uploads/'.$Photo.'" alt="" ></a>';
													echo ' <h2 class="headerfont" >Name: <span class="">  ' .$Names .'</span> </h2>';
									     		     echo '<p>' . $trimsdetails . '</span></p> ';
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


		
<?php include('sidebar.php') ?>

	</div>
</div>

<!-- ********* section ends ******** --> 







<?php include('footer.php') ?>