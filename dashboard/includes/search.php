<?php
include('connection.php');
$page = $_GET['page'];

 include('header.php') ;

echo '<div style="margin:30px;">';

if ($page == 'thoughtoftheday'){


	// search data from  table --------------------------
	$Searchkeyword = $_POST['Searchkeyword'];
	echo 'Searchkeyword : <span style="background-color:yellow;padding:5px 10px;">  '.$Searchkeyword . '</span> <br/> <br/>' ;

	$sql = "SELECT * FROM $page WHERE Name like '%$Searchkeyword%%' || Thought like '%$Searchkeyword%%' ORDER BY Datetimes DESC";
	$result = mysqli_query($conn, $sql);

	$u = 1; 

	?>
	<table class="table table-striped table-bordered table-hover table-condensed" >
		<thead>
			<tr>
				<th>S.N.</th>
				<th>Date</th>
				<th>Name</th>
				<th>Thought of the Day</th>
				<th>Images</th>
				<th>Delete</th>
				<th>Update</th>
			</tr>
		</thead>

		<tfoot>
			<tr> 
				<td colspan="7" style="text-align: center;"> 
						<nav>
						  <ul class="pager pagercustom">
						    <li><a href="#">Previous</a></li>
						    <li><a href="#">Next</a></li>
						  </ul>
						</nav>
				</td>
			</tr>
		</tfoot>

		<tbody>

		<?php 

	if(mysqli_num_rows($result) > 0){
		while($row = $result-> fetch_assoc()){
			$id=$row['id'];
			$Datetimes=$row['Datetimes'];
			$Name=$row['Name'];
			$Thought=$row['Thought'];
			$Photo=$row['Photo'];

		
			
			echo '<tr>';
				echo '<td>' .$u. '</td>';
				echo '<td>' .$Datetimes. '</td>';
				echo '<td>' .$Name. '</td>';
				echo '<td>' .$Thought. '</td>';
				echo '<td> <img src="../../img/uploads/' .$Photo. '" id="postingpageimg"> </td>';
				
				echo '<td> <a href="deletepost.php?';
				echo "page=$page";
				echo "&id=$id";
				echo '" > Delete </a></td>';
				
				echo '<td> <a href="updatepost.php?';
				echo "page=$page";
				echo "&id=$id";
				echo '" > Update </a></td>';
				
			echo '</tr>';

			$u++;
		}
	}else{
		echo "0 results <br/> <br/>  ";
	}

	?>
		</tbody>


	</table>

<?php

}elseif ($page == 'horoscope' ){

		// search data from  table --------------------------
		$Searchkeyword = $_POST['Searchkeyword'];
		echo 'Searchkeyword : <span style="background-color:yellow;padding:5px 10px;">  '.$Searchkeyword . '</span> <br/> <br/>' ;

		$sql = "SELECT * FROM $page WHERE Aries like '%$Searchkeyword%%' || 
										Taurus like '%$Searchkeyword%%'  || 
										Gemini like '%$Searchkeyword%%' || 
										Cancer like '%$Searchkeyword%%' || 
										Leo like '%$Searchkeyword%%' || 
										Virgo like '%$Searchkeyword%%' || 
										Libra like '%$Searchkeyword%%' ||
										Scorpio like '%$Searchkeyword%%' ||
									    Sagittarius like '%$Searchkeyword%%' || 
										Capricorn like '%$Searchkeyword%%' || 
										Aquarius like '%$Searchkeyword%%' ||
										Pisces like '%$Searchkeyword%%' ORDER BY Datetimes DESC";
		$result = mysqli_query($conn, $sql);

		$u = 1; 

		?>
		<table class="table table-striped table-bordered table-hover table-condensed">
			<thead>
				<tr>
					<th>S.N.</th>
					<th>Date</th>
					<th>Horoscope</th>
					<th>Horoscope</th>
					<th>Delete</th>
					<th>Update</th>
				</tr>
			</thead>

			<tfoot>
				<tr> 
					<td colspan="7" style="text-align: center;"> 
							<nav>
							  <ul class="pager pagercustom">
							    <li><a href="#">Previous</a></li>
							    <li><a href="#">Next</a></li>
							  </ul>
							</nav>
					</td>
				</tr>
			</tfoot>

			<tbody>

			<?php

			$u = 1; 
				
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

						echo '<tr>';
							echo '<td>' .$u. '</td>';
							echo '<td>' .$Datetimes. '</td>';
							echo '<td> 
									<p id="Aries"> <b> Aries: </b> ' .$Aries. '</p> '.'
									<p id="Taurus"> <b> Taurus: </b> ' .$Taurus. '</p> '.'
									<p id="Gemini"> <b> Gemini: </b> ' .$Gemini. '</p> '.'
									<p id="Cancer"> <b> Cancer: </b> ' .$Cancer. '</p> '.'
									<p id="Leo"> <b> Leo: </b> ' .$Leo. '</p> '.'
									<p id="Virgo"> <b> Virgo: </b> ' .$Virgo. '</p> '.'

								 </td>';
							echo '<td> 
									<p id="Libra"> <b> Libra: </b> ' .$Libra. '</p> '.'
									<p id="Scorpio"> <b> Scorpio: </b> ' .$Scorpio. '</p> '.'
									<p id="Sagittarius"> <b> Sagittarius: </b> ' .$Sagittarius. '</p> '.'
									<p id="Capricorn"> <b> Capricorn: </b> ' .$Capricorn. '</p> '.'
									<p id="Aquarius"> <b> Aquarius: </b> ' .$Aquarius. '</p> '.'
									<p id="Pisces"> <b> Pisces: </b> ' .$Pisces. '</p> '.'

								 </td>';
							
							echo '<td> <a href="deletepost.php?';
							echo "page=$page";
							echo "&id=$id";
							echo '" > Delete </a></td>';

							echo '<td> <a href="updatepost.php?';
							echo "page=$page";
							echo "&id=$id";
							echo '" > Update </a></td>';
							
							
						echo '</tr>';
										
						$u++;										
					}
				}else{
				echo "0 results";
			}									
								
			?>
			 
			</tbody>


		</table>

	<?php
	
}elseif ($page == 'fashion'){
		// search data from  table --------------------------
		$Searchkeyword = $_POST['Searchkeyword'];
		echo 'Searchkeyword : <span style="background-color:yellow;padding:5px 10px;">  '.$Searchkeyword . '</span> <br/> <br/>' ;

		$sql = "SELECT * FROM $page WHERE Peoplename like '%$Searchkeyword%%' || Description like '%$Searchkeyword%%' ORDER BY Datetimes DESC";
		$result = mysqli_query($conn, $sql);

		$u = 1; 

		?>
		<table class="table table-striped table-bordered table-hover table-condensed">
					<thead>
						<tr>
							<th>S.N.</th>
							<th>Date</th>
							<th>Peoplename</th>
							<th>Description</th>
							<th>Images</th>
							<th>Delete</th>
							<th>Update</th>
						</tr>
					</thead>

					<tfoot>
						<tr> 
							<td colspan="7" style="text-align: center;"> 
									<nav>
									  <ul class="pager pagercustom">
									    <li><a href="#">Previous</a></li>
									    <li><a href="#">Next</a></li>
									  </ul>
									</nav>
							</td>
						</tr>
					</tfoot>

					<tbody>
							<?php

							if(mysqli_num_rows($result) > 0){
								while($row = $result-> fetch_assoc()){
									$id=$row['id'];
									$Datetimes=$row['Datetimes'];
									$Peoplename=$row['Peoplename'];
									$Description=$row['Description'];
									$Photo=$row['Photo'];

									
									echo '<tr>';
										echo '<td>' .$u. '</td>';
										echo '<td>' .$Datetimes. '</td>';
										echo '<td>' .$Peoplename. '</td>';
										echo '<td>' .$Description. '</td>';
										echo '<td> <img src="../../img/uploads/' .$Photo. '" id="postingpageimg"> </td>';

										echo '<td> <a href="deletepost.php?';
										echo "page=$page";
										echo "&id=$id";
										echo '" > Delete </a></td>';

										echo '<td> <a href="updatepost.php?';
										echo "page=$page";
										echo "&id=$id";
										echo '" > Update </a></td>';
										
									echo '</tr>';

									$u++;
								}
							}else{
								echo "0 results";
							}


							?>

					</tbody>

				</table>

	<?php
}elseif ($page == 'interview' ){

	// search data from  table --------------------------
	$Searchkeyword = $_POST['Searchkeyword'];
	echo 'Searchkeyword : <span style="background-color:yellow;padding:5px 10px;">  '.$Searchkeyword . '</span> <br/> <br/>' ;

	$sql = "SELECT * FROM $page WHERE Topic like '%$Searchkeyword%%' || Names like '%$Searchkeyword%%' || Description like '%$Searchkeyword%%' ORDER BY Datetimes DESC";
	$result = mysqli_query($conn, $sql);

	$u = 1; 


	 

	?>
	<table class="table table-striped table-bordered table-hover table-condensed">
		<thead>
			<tr>
				<th>S.N.</th>
				<th>Date</th>
				<th>Topic</th>
				<th>Name</th>
				<th>Description</th>
				<th>Images</th>
				<th>Delete</th>
				<th>Update</th>
			</tr>
		</thead>

		<tfoot>
			<tr> 
				<td colspan="7" style="text-align: center;"> 
						<nav>
						  <ul class="pager pagercustom">
						    <li><a href="#">Previous</a></li>
						    <li><a href="#">Next</a></li>
						  </ul>
						</nav>
				</td>
			</tr>
		</tfoot>

		<tbody>
				<?php
				
				if(mysqli_num_rows($result) > 0){
									while($row = $result-> fetch_assoc()){
										$id=$row['id'];
										$Datetimes=$row['Datetimes'];
										$Names=$row['Names'];
										$Topic=$row['Topic'];
										$Description=$row['Description'];
										$Photo=$row['Photo'];

										
										echo '<tr>';
											echo '<td>' .$u. '</td>';
											echo '<td>' .$Datetimes. '</td>';
											echo '<td>' .$Topic. '</td>';
											echo '<td>' .$Names. '</td>';
											echo '<td>' .$Description. '</td>';
											echo '<td> <img src="../../img/uploads/' .$Photo. '" id="postingpageimg"> </td>';

											echo '<td> <a href="deletepost.php?';
											echo "page=$page";
											echo "&id=$id";
											echo '" > Delete </a></td>';

											echo '<td> <a href="updatepost.php?';
											echo "page=$page";
											echo "&id=$id";
											echo '" > Update </a></td>';
											
										echo '</tr>';

										$u++;
									}
								}else{
									echo "0 results";
								}


				?>

		</tbody>

	</table>

<?php
}elseif ($page == 'dailynews' || $page == 'national' ||$page == 'international' || $page == 'technology' ||$page == 'entertainment' ||$page == 'sports' ||$page == 'business' ){
			// search data from  table --------------------------
			$Searchkeyword = $_POST['Searchkeyword'];
			echo 'Searchkeyword : <span style="background-color:yellow;padding:5px 10px;">  '.$Searchkeyword . '</span> <br/> <br/>' ;

			$sql = "SELECT * FROM $page WHERE Topic like '%$Searchkeyword%%'  || Description like '%$Searchkeyword%%' ORDER BY Datetimes DESC";
			$result = mysqli_query($conn, $sql);

			$u = 1; 


			 

			?>
			<table class="table table-striped table-bordered table-hover table-condensed">
				<thead>
					<tr>
						<th>S.N.</th>
						<th>Date</th>
						<th>Topic</th>
						<th>Description</th>
						<th>Images</th>
						<th>Delete</th>
						<th>Update</th>
					</tr>
				</thead>

				<tfoot>
					<tr> 
						<td colspan="7" style="text-align: center;"> 
								<nav>
								  <ul class="pager pagercustom">
								    <li><a href="#">Previous</a></li>
								    <li><a href="#">Next</a></li>
								  </ul>
								</nav>
						</td>
					</tr>
				</tfoot>

				<tbody>
						<?php
						
						if(mysqli_num_rows($result) > 0){
											while($row = $result-> fetch_assoc()){
												$id=$row['id'];
												$Datetimes=$row['Datetimes'];
												$Topic=$row['Topic'];
												$Description=$row['Description'];
												$Photo=$row['Photo'];

												
												echo '<tr>';
													echo '<td>' .$u. '</td>';
													echo '<td>' .$Datetimes. '</td>';
													echo '<td>' .$Topic. '</td>';
													echo '<td>' .$Description. '</td>';
													echo '<td> <img src="../../img/uploads/' .$Photo. '" id="postingpageimg"> </td>';

													echo '<td> <a href="deletepost.php?';
													echo "page=$page";
													echo "&id=$id";
													echo '" > Delete </a></td>';

													echo '<td> <a href="updatepost.php?';
													echo "page=$page";
													echo "&id=$id";
													echo '" > Update </a></td>';
													
												echo '</tr>';

												$u++;
											}
										}else{
											echo "0 results";
										}


						?>

				</tbody>

			</table>

		<?php	
}else{
	echo "sorry page note found";
}
?>

<?php echo '</div>';?>
<?php include('footer.php') ;?>

