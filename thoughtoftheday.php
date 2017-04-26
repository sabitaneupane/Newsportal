<?php $page = 'home' ?>
<?php include('header.php') ?>


<!-- ********* section starts ******** --> 
<div id="section">
	<div id="breadcrumbcontent">
		<ol class="breadcrumb">
		  <li><a href="index.php">Home</a></li>
		  <li class="active"><a href="thoughtoftheday.php">thoughtoftheday</a></li>
		</ol>

	</div>
<div class="row">
     <div class="col-lg-8 col-md-8 col-sm-12 col-xm-12" style="padding:10px 0px;">
     	<div class="container-fluid">
			<h1 class="bgstyleheader"> <span>Thought of the day </span>  </h1>

			<div class="newspagepost">
					<div class="row">
							
							<?php
							include('dashboard/includes/connection.php');
							$sql = "SELECT * FROM thoughtoftheday ORDER BY Datetimes DESC";
							$result = mysqli_query($conn, $sql);


							if(mysqli_num_rows($result) > 0){
								while($row = $result-> fetch_assoc()){
									$id=$row['id'];
									$Datetimes=$row['Datetimes'];
									$Name=$row['Name'];
									$Thought=$row['Thought'];
									$Photo=$row['Photo'];
								

															echo '<div class="col-lg-6 col-md-6 col-sm-12 col-xm-12">';
																echo '<div class="thoughtcontent">';
											     		      		echo ' <img src="img/uploads/' .$Photo. '"class="img-responsive" alt="" style="padding-bottom: 10px;">';
											     		      		echo ' <p> <span  class="datetime"> '.$Datetimes.' </span> </p>';
																	echo '<h1 class="headerfont"> Name&nbsp;:  <span class="">' . $Name .'</span> </h1>';
												     		       echo '	<blockquote> <span> ' . $Thought .'</span>	</blockquote> ';

																echo '</div> ';
															echo '</div>';

									}
								}else{
									echo "0 results";
								}

							?>


							
						</div>
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