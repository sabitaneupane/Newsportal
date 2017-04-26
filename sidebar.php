<div class="col-lg-4 col-md-4 col-sm-12 col-xm-12" style="padding:10px 0px;">

			<div class="aboutside" style="margin-top:0px">
				<div class="container-fluid">
					<h1 class="bgstyleheader"> <span> About Us </span>  </h1>
						<div class="aboutsidecontent">
							<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							<a href="about.php"> Read More .....</a>
							</p>
						</div>
				</div>
			</div>


			<div id="latestpostside">
				<div class="container-fluid">
					<h1 class="bgstyleheader"> <span> Entertainment </span>  </h1>


					<?php
					include('dashboard/includes/connection.php');
					$sql = "SELECT * FROM entertainment ORDER BY Datetimes DESC LIMIT 5";
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


										echo '<div class="latestnewspost">';
												echo '<div class="media">';
												 echo ' <div class="media-left">';
												   echo ' <a href="news.php?post=entertainment&id='.$id.'">';
												      echo '<img class="media-object" src="img/uploads/'.$Photo.'" alt="" style="width:64px;height:64px;">';
												   echo ' </a>';
												  echo '</div>';
												  echo '<div class="media-body">';
												   echo ' <a href="news.php?post=entertainment&id='.$id.'">';
												    echo '<h1 class="media-heading headerfont"> <span class="">  ' .$trimsheading .'</span> </h1>';
												    echo '<p>' . $trimsdetails . '</span></p> </a>';
												  echo '</div>';
												echo '</div>';
										echo '</div>';
										

							}
						}else{
							echo "0 results";
						}

					?>

				</div>
			</div>

				<div class="thoughtoftheday">
					<div class="container-fluid">
						<h1 class="bgstyleheader"> <span>Thought of the day </span></h1>
						<div class="thoughtcontent">
						<?php
						include('dashboard/includes/connection.php');
						$sql = "SELECT * FROM thoughtoftheday ORDER BY Datetimes DESC LIMIT 1";
						$result = mysqli_query($conn, $sql);


						if(mysqli_num_rows($result) > 0){
							while($row = $result-> fetch_assoc()){
								$id=$row['id'];
								$Datetimes=$row['Datetimes'];
								$Name=$row['Name'];
								$Thought=$row['Thought'];
								$Photo=$row['Photo'];
							
								     		      		echo ' <img src="img/uploads/' .$Photo. '"class="img-responsive" alt="" style="padding-bottom: 10px;">';
								     		      		 echo '<p> <span  class="datetime"> November 15, 2016 </span> </p>';
														echo '<h1 class="headerfont">  Name&nbsp;:  <span class="">' . $Name .'</span> </h1>';
									     		       	echo '<blockquote> <span>  "' . $Thought .' " </span>	<a href="thoughtoftheday.php" target="_blank" class="pull-right" id="readmorebtn" > Read More </a> </blockquote> ';
								}
							}else{
								echo "0 results";
							}

						?>
	     		      		

						</div> 
					</div>
				</div>

				<div class="fashionslider">
					<div class="container-fluid">
					<h1 class="bgstyleheader"> <span> Top Models </span>  </h1>



					    <div id="carousel-example-generic2" class="carousel slide" data-ride="carousel">

					     		  <!-- Wrapper for slides -->
					     		  <div class="carousel-inner" role="listbox" id="carouselcustom">
					     		    
					     		  	<?php
					     		  	include('dashboard/includes/connection.php');
					     		  	$sql = "SELECT * FROM fashion ORDER BY Datetimes DESC LIMIT 5";
					     		  	$result = mysqli_query($conn, $sql);

					     		  	$u = 1;
					     		  	if(mysqli_num_rows($result) > 0){
					     		  		while($row = $result-> fetch_assoc()){
					     		  				$id=$row['id'];
												$Datetimes=$row['Datetimes'];
												$Peoplename=$row['Peoplename'];
												$Description=$row['Description'];
												$Photo=$row['Photo'];

													if ($u == 1 ){
														     		  echo  ' <div class="item active">';
														     		        echo  '	<a href="fashion.php">';
														     		      	 echo  '	<img src="img/uploads/'.$Photo.'" alt="" >';
														     		      	 echo  '</a>';
														     		      echo  ' <div class="carousel-caption">';
														     		       echo  ' 	<a href="fashion.php">';
															     		       	
															     		     echo  '   <p> <span style="background:#B71C1C;padding:5px 10px;"> '.$Peoplename. ' </span> </p> ';
															     		    echo  ' </a>';
														     		      echo  ' </div>';
														     		    echo  ' </div>';

														     		}else{
														     			 echo  ' <div class="item">';
					     		  						     		        echo  '	<a href="fashion.php">';
					     		  						     		      	 echo  '	<img src="img/uploads/'.$Photo.'" alt="" >';
					     		  						     		      	 echo  '</a>';
					     		  						     		      echo  ' <div class="carousel-caption">';
					     		  						     		       echo  ' 	<a href="fashion.php">';
					     		  							     		       	
					     		  							     		     echo  '   <p> <span style="background:#B71C1C;padding:5px 10px;"> '.$Peoplename. ' </span> </p>';
					     		  							     		    echo  ' </a>';
					     		  						     		      echo  ' </div>';
					     		  						     		    echo  ' </div>';

														     		}
														     $u++;
					     		  						     		 
					     		  			}
					     		  		}else{
					     		  			echo "0 results";
					     		  		}

					     		  	?>

						     		   
					     		   
					     		    </div>
					     		    

					     		  <!-- Controls -->
					     		  <a class="left carousel-control" href="#carousel-example-generic2" role="button" data-slide="prev">
					     		    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					     		    <span class="sr-only">Previous</span>
					     		  </a>
					     		  <a class="right carousel-control" href="#carousel-example-generic2" role="button" data-slide="next">
					     		    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					     		    <span class="sr-only">Next</span>
					     		  </a>
					    </div>
					 </div>
				</div>
			</div>

