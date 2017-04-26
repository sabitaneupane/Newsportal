<?php $page = 'business' ?>
<?php include('header.php') ?>

<!-- ********* section starts ******** --> 
<div id="section">
	<div id="breadcrumbcontent">
		<ol class="breadcrumb">
		  <li><a href="index.php">Home</a></li>
		  <li class="active"><a href="business.php">business</a></li>
		</ol>

	</div>
<div class="row">
     <div class="col-lg-8 col-md-8 col-sm-12 col-xm-12" style="padding:10px 0px;">
     	<div class="container-fluid">
			<h1 class="bgstyleheader"> <span> Business </span>  </h1>

		<div class="newspagepost">

				<?php
				include('dashboard/includes/connection.php');
				$sql = "SELECT * FROM business ORDER BY Datetimes DESC";
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

								echo '<div class="newspagepostcontent"> ';
									echo '<ul class="media-list">';
									  echo '<li class="media">';
									    echo '<div class="media-left">';
									      echo '<a href="news.php?post='.$page.'&id='.$id.'">';
											    echo '<img class="media-object" src="img/uploads/'.$Photo.'" alt="" style="width:64px;height:64px;">';
									     echo ' </a>';
									    echo '</div>';
									    echo '<div class="media-body">';
									     echo ' <a href="news.php?post='.$page.'&id='.$id.'">';
									     echo '<h1 class="media-heading headerfont"> <span class="">  ' .$trimsheading .'</span> </h1>';
									      	echo ' <p> <span  class="datetime"> ' . $Datetimes . '</span> </p>';
											
											 echo '<p>' . $trimsdetails . '</span></p> </a>';
									   echo ' </div>';
									 echo ' </li>';
									echo '</ul>';
								echo '</div>';
								
						}
					}else{
						echo "0 results";
					}

				?>
			

				<div class="pagepaginationbuttom">
					<nav>
					  <ul class="pager">
					    <li><a href="#">Previous</a></li>
					    <li><a href="#">Next</a></li>
					  </ul>
					</nav>
				</div>

			</div>
		</div>

	</div>


		
<?php include('sidebar.php') ?>

	</div>
</div>

<!-- ********* section ends ******** --> 




<?php include('footer.php') ?>
