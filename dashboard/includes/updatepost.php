
<?php
include('connection.php');
$page = $_GET['page'];
$rid = $_GET['id'];

 include('header.php') ;

if ($page == 'thoughtoftheday'){

 	$sql = "SELECT * FROM $page WHERE id='$rid'";
	$result = mysqli_query($conn, $sql);

	if(mysqli_num_rows($result) > 0){
		while($row = $result->fetch_assoc()){
			$id=$row['id'];
			$Datetimes=$row['Datetimes'];
			$Name=$row['Name'];
			$Thought=$row['Thought'];
			$Photo=$row['Photo'];

			
			}
		}
?> 
	
	<!-- ********* section starts ******** --> 
	<div id="section">
		<div class="postpage_info">
				<div class="container-fluid"   id="postpage_container" >
					<div>
						<h1> Thought of the day  </h1>

						 
						<form  method="post" action="updatedata.php?<?php echo "page=$page&id=$id"; ?>" accept-charset="character_set" enctype="multipart/form-data">
								
							<div id="postpage_content" > 
								<label> Name </label> <br/>
								<input type="text" name="Name"  style="width:100%;" value="<?php echo $Name ?>" >
							</div><br/>

								
							<div class="row"  id="postpage_content">
								<div class="col-lg-4 col-md-5 col-sm-12 col-xm-12" > 
									<label> Date </label> <br/>
									<input type="date" name="Datetimes" value="<?php echo $Datetimes ?>" >
								</div><br/>

								<div class="col-lg-4 col-md-4 col-sm-6 col-xm-6" >
									<label> Upload Thoughtphoto </label> <br/>
									<input type="file" name="fileToUpload" id="fileToUpload">
								</div><br/>

								<div class="col-lg-4 col-md-4 col-sm-6 col-xm-6" >
									<img src="../../img/uploads/<?php echo $Photo ; ?> " id="postingpageimg">
								</div><br/>

							</div>

							<div  id="postpage_content" > 
								<label> Thought of the Day  </label> <br/>
								<textarea rows="3" name="Thought" id="" > <?php echo $Thought ?> </textarea> 
							</div><br/>

							

							<input type="submit" value="update" name="update"  class="btn btn-primary pull-right" id="post_button">
						</form>
					</div>

				</div>
			</div>

	</div>

	<!-- ********* section ends ******** --> 

<?php	 
}elseif ($page == 'horoscope' ){
		if (isset($_GET['id'])) {

		 	$sql = "SELECT * FROM $page WHERE id='$rid'";
			$result = mysqli_query($conn, $sql);

			if(mysqli_num_rows($result) > 0){
				while($row = $result->fetch_assoc()){
					$id=$row['id'];
					$Datetimes=$row['Datetimes'];
					$Aries=$row['Aries'];
					$Taurus=$row['Taurus'];
					$Gemini=$row['Gemini'];
					$Cancer = $row['Cancer'];
					$Leo = $row['Leo'];
					$Virgo =$row['Virgo'];
					$Libra =$row['Libra'];
					$Scorpio =$row['Scorpio'];
					$Sagittarius = $row['Sagittarius'];
					$Capricorn = $row['Capricorn'];
					$Aquarius = $row['Aquarius'];
					$Pisces = $row['Pisces'];

				}
			}
		}
		?>
		<!-- ********* section starts ******** --> 
		<div id="section">
			<div class="postpage_info">
					<div class="container-fluid"   id="horoscope_container" >
						<div>
							<h1> Horoscope </h1>
							<form  method="post" action="updatedata.php?<?php echo "page=$page&id=$id"; ?>" accept-charset="character_set" enctype="multipart/form-data">
								<div  id="postpage_content"> 
									<label> Date </label> <br/>
									<input type="date" name="Datetimes" value="<?php echo $Datetimes ?>" >
								</div><br/>

								<div class="row">
									<div class="col-lg-4 col-md-5 col-sm-12 col-xm-12">
										<div id="postpage_content"> 
											<label> Aries </label> <br/>
											<textarea rows="4" name="Aries" id="Aries"> <?php echo $Aries ?> </textarea>
										</div><br/>
										
									</div>
									<div class="col-lg-4 col-md-5 col-sm-12 col-xm-12">
										<div id="postpage_content"> 
											<label> Taurus </label> <br/>
											<textarea rows="4" name="Taurus" id="Taurus"> <?php echo $Taurus ?></textarea>
										</div><br/>
										
									</div>
									<div class="col-lg-4 col-md-5 col-sm-12 col-xm-12">
										<div id="postpage_content"> 
											<label> Gemini </label> <br/>
											<textarea rows="4" name="Gemini" id="Gemini"> <?php echo $Gemini ?> </textarea>
										</div><br/>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4 col-md-5 col-sm-12 col-xm-12">
										<div id="postpage_content"> 
											<label> Cancer </label> <br/>
											<textarea rows="4" name="Cancer" id="Cancer"> <?php echo $Cancer ?> </textarea>
										</div><br/>
										
									</div>
									<div class="col-lg-4 col-md-5 col-sm-12 col-xm-12">
										<div id="postpage_content"> 
											<label> Leo </label> <br/>
											<textarea rows="4" name="Leo" id="Leo"> <?php echo $Leo ?> </textarea>
										</div><br/>
										
									</div>
									<div class="col-lg-4 col-md-5 col-sm-12 col-xm-12">
										<div id="postpage_content"> 
											<label> Virgo </label> <br/>
											<textarea rows="4" name="Virgo" id="Virgo"> <?php echo $Virgo ?> </textarea>
										</div><br/>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4 col-md-5 col-sm-12 col-xm-12">
										<div id="postpage_content"> 
											<label> Libra </label> <br/>
											<textarea rows="4" name="Libra" id="Libra"> <?php echo $Libra ?> </textarea>
										</div><br/>
										
									</div>
									<div class="col-lg-4 col-md-5 col-sm-12 col-xm-12">
										<div id="postpage_content"> 
											<label> Scorpio </label> <br/>
											<textarea rows="4" name="Scorpio" id="Scorpio"> <?php echo $Scorpio ?> </textarea>
										</div><br/>
										
									</div>
									<div class="col-lg-4 col-md-5 col-sm-12 col-xm-12">
										<div id="postpage_content"> 
											<label> Sagittarius </label> <br/>
											<textarea rows="4" name="Sagittarius" id="Sagittarius"> <?php echo $Sagittarius ?> </textarea>
										</div><br/>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4 col-md-5 col-sm-12 col-xm-12">

										<div id="postpage_content"> 
											<label> Capricorn </label> <br/>
											<textarea rows="4" name="Capricorn" id="Capricorn"> <?php echo $Capricorn ?> </textarea>
										</div><br/>
										
									</div>
									<div class="col-lg-4 col-md-5 col-sm-12 col-xm-12">
										<div id="postpage_content"> 
											<label> Aquarius </label> <br/>
											<textarea rows="4" name="Aquarius" id="Aquarius"> <?php echo $Aquarius ?> </textarea>
										</div><br/>
										
									</div>
									<div class="col-lg-4 col-md-5 col-sm-12 col-xm-12">
										<div id="postpage_content"> 
											<label> Pisces </label> <br/>
											<textarea rows="4" name="Pisces" id="Pisces"> <?php echo $Pisces ?> </textarea>
										</div><br/>
									</div>
								</div>

								<input type="submit" value="update" name="update"  class="btn btn-primary pull-right" id="post_button">
							</form>
						</div>

					</div>
				</div>

				<br/><br/><br/>

		</div>

		<!-- ********* section ends ******** --> 

<?php
}elseif ($page == 'fashion'){

		
			 	$sql = "SELECT * FROM $page WHERE id='$rid'";
				$result = mysqli_query($conn, $sql);

				if(mysqli_num_rows($result) > 0){
					while($row = $result->fetch_assoc()){
						$id=$row['id'];
						$Datetimes=$row['Datetimes'];
						$Peoplename=$row['Peoplename'];
						$Description=$row['Description'];
						$Photo=$row['Photo'];

						
						}
					}
			?>

			<!-- ********* section starts ******** --> 
			<div id="section">
				<div class="postpage_info">
						<div class="container-fluid"   id="postpage_container" >
							<div>
								<h1 style="text-transform: capitalize;"> <?php echo $page;?> </h1>

								 
								<form  method="post" action="updatedata.php?<?php echo "page=$page&id=$id"; ?>" accept-charset="character_set" enctype="multipart/form-data">
										
									<div id="postpage_content" > 
										<label> Topic </label> <br/>
										<textarea rows="2" name="Peoplename" id="Peoplename" ><?php echo $Peoplename ?> </textarea>
									</div><br/>

										
									<div class="row"  id="postpage_content">
										<div class="col-lg-4 col-md-5 col-sm-12 col-xm-12" > 
											<label> Date </label> <br/>
											<input type="date" name="Datetimes" value="<?php echo $Datetimes ?>" >
											
										</div><br/>

										<div class="col-lg-4 col-md-4 col-sm-6 col-xm-6" >
											<label> Upload Thoughtphoto </label> <br/>
											<input type="file" name="fileToUpload" id="fileToUpload">
										</div><br/>

										<div class="col-lg-4 col-md-4 col-sm-6 col-xm-6" >
											<img src="../../img/uploads/<?php echo $Photo ; ?> " id="postingpageimg">
										</div><br/>

									</div>

									<div  id="postpage_content" > 
										<label> Description  </label> <br/>
										<textarea rows="12" name="Description" id="" > <?php echo $Description ?> </textarea> 
									</div><br/>

									

									<input type="submit" value="update" name="update"  class="btn btn-primary pull-right" id="post_button">
								</form>
							</div>

						</div>
					</div>

			</div>

			<!-- ********* section ends ******** --> 


	<?php
}elseif ($page == 'dailynews' || $page == 'national' ||$page == 'international' || $page == 'technology' ||$page == 'entertainment' ||$page == 'sports' ||$page == 'business' ){
	
		 	$sql = "SELECT * FROM $page WHERE id='$rid'";
			$result = mysqli_query($conn, $sql);

			if(mysqli_num_rows($result) > 0){
				while($row = $result->fetch_assoc()){
					$id=$row['id'];
					$Datetimes=$row['Datetimes'];
					$Topic=$row['Topic'];
					$Description=$row['Description'];
					$Photo=$row['Photo'];

					
					}
				}
		?>

		<!-- ********* section starts ******** --> 
		<div id="section">
			<div class="postpage_info">
					<div class="container-fluid"   id="postpage_container" >
						<div>
							<h1 style="text-transform: capitalize;"> <?php echo $page;?> </h1>

							 
							<form  method="post" action="updatedata.php?<?php echo "page=$page&id=$id"; ?>" accept-charset="character_set" enctype="multipart/form-data">
									
								<div id="postpage_content" > 
									<label> Topic </label> <br/>
									<textarea rows="2" name="Topic" id="Topic" ><?php echo $Topic ?> </textarea>
								</div><br/>

									
								<div class="row"  id="postpage_content">
									<div class="col-lg-4 col-md-5 col-sm-12 col-xm-12" > 
										<label> Date </label> <br/>
										<input type="date" name="Datetimes" value="<?php echo $Datetimes ?>" >
										
									</div><br/>

									<div class="col-lg-4 col-md-4 col-sm-6 col-xm-6" >
										<label> Upload Thoughtphoto </label> <br/>
										<input type="file" name="fileToUpload" id="fileToUpload">
									</div><br/>

									<div class="col-lg-4 col-md-4 col-sm-6 col-xm-6" >
										<img src="../../img/uploads/<?php echo $Photo ; ?> " id="postingpageimg">
									</div><br/>

								</div>

								<div  id="postpage_content" > 
									<label> Description  </label> <br/>
									<textarea rows="12" name="Description" id="" > <?php echo $Description ?> </textarea> 
								</div><br/>

								

								<input type="submit" value="update" name="update"  class="btn btn-primary pull-right" id="post_button">
							</form>
						</div>

					</div>
				</div>

		</div>

		<!-- ********* section ends ******** --> 


<?php
}elseif ($page == 'interview' ){
	
		 	$sql = "SELECT * FROM $page WHERE id='$rid'";
			$result = mysqli_query($conn, $sql);

			if(mysqli_num_rows($result) > 0){
				while($row = $result->fetch_assoc()){
					$id=$row['id'];
					$Datetimes=$row['Datetimes'];
					$Names=$row['Names'];
					$Topic=$row['Topic'];
					$Description=$row['Description'];
					$Photo=$row['Photo'];

					
					}
				}
		?>

		<!-- ********* section starts ******** --> 
		<div id="section">
			<div class="postpage_info">
					<div class="container-fluid"   id="postpage_container" >
						<div>
							<h1 style="text-transform: capitalize;"> <?php echo $page;?> </h1>

							 
							<form  method="post" action="updatedata.php?<?php echo "page=$page&id=$id"; ?>" accept-charset="character_set" enctype="multipart/form-data">

								<div id="postpage_content" > 
									<label> Name </label> <br/>
									<input type="text" name="Names" value="<?php echo $Names ?>" style="width:100%;">
								</div><br/>
									
								<div id="postpage_content" > 
									<label> Topic </label> <br/>
									<textarea rows="2" name="Topic" id="Topic" ><?php echo $Topic ?> </textarea>
								</div><br/>

									
								<div class="row"  id="postpage_content">
									<div class="col-lg-4 col-md-5 col-sm-12 col-xm-12" > 
										<label> Date </label> <br/>
										<input type="date" name="Datetimes" value="<?php echo $Datetimes ?>" >
										
									</div><br/>

									<div class="col-lg-4 col-md-4 col-sm-6 col-xm-6" >
										<label> Upload Thoughtphoto </label> <br/>
										<input type="file" name="fileToUpload" id="fileToUpload">
									</div><br/>

									<div class="col-lg-4 col-md-4 col-sm-6 col-xm-6" >
										<img src="../../img/uploads/<?php echo $Photo ; ?> " id="postingpageimg">
									</div><br/>

								</div>

								<div  id="postpage_content" > 
									<label> Description  </label> <br/>
									<textarea rows="12" name="Description" id="" > <?php echo $Description ?> </textarea> 
								</div><br/>

								

								<input type="submit" value="update" name="update"  class="btn btn-primary pull-right" id="post_button">
							</form>
						</div>

					</div>
				</div>

		</div>

		<!-- ********* section ends ******** --> 


<?php
}else{
	echo "sorry page note found";
}

?>



<?php include('footer.php') ?>
