<?php $page = 'horoscope' ?>
<?php include('header.php') ?>

<!-- ********* section starts ******** --> 
<div id="section">
	<div class="postpage_info">
			<div class="container-fluid"   id="horoscope_container" >
				<div>
					<h1> Horoscope </h1>
					<form method="post" action="includes/insertpost.php?<?php echo'page='.$page; ?>" accept-charset="character_set" enctype="multipart/form-data">
						<div  id="postpage_content"> 
							<label> Date </label> <br/>
							<input type="date" name="Datetimes"  >
						</div><br/>

						<div class="row">
							<div class="col-lg-4 col-md-5 col-sm-12 col-xm-12">
								<div id="postpage_content"> 
									<label> Aries </label> <br/>
									<textarea rows="4" name="Aries" id="Aries" > </textarea>
								</div><br/>
								
							</div>
							<div class="col-lg-4 col-md-5 col-sm-12 col-xm-12">
								<div id="postpage_content"> 
									<label> Taurus </label> <br/>
									<textarea rows="4" name="Taurus" id="Taurus" > </textarea>
								</div><br/>
								
							</div>
							<div class="col-lg-4 col-md-5 col-sm-12 col-xm-12">
								<div id="postpage_content"> 
									<label> Gemini </label> <br/>
									<textarea rows="4" name="Gemini" id="Gemini" > </textarea>
								</div><br/>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-4 col-md-5 col-sm-12 col-xm-12">
								<div id="postpage_content"> 
									<label> Cancer </label> <br/>
									<textarea rows="4" name="Cancer" id="Cancer" > </textarea>
								</div><br/>
								
							</div>
							<div class="col-lg-4 col-md-5 col-sm-12 col-xm-12">
								<div id="postpage_content"> 
									<label> Leo </label> <br/>
									<textarea rows="4" name="Leo" id="Leo" > </textarea>
								</div><br/>
								
							</div>
							<div class="col-lg-4 col-md-5 col-sm-12 col-xm-12">
								<div id="postpage_content"> 
									<label> Virgo </label> <br/>
									<textarea rows="4" name="Virgo" id="Virgo" > </textarea>
								</div><br/>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-4 col-md-5 col-sm-12 col-xm-12">
								<div id="postpage_content"> 
									<label> Libra </label> <br/>
									<textarea rows="4" name="Libra" id="Libra" > </textarea>
								</div><br/>
								
							</div>
							<div class="col-lg-4 col-md-5 col-sm-12 col-xm-12">
								<div id="postpage_content"> 
									<label> Scorpio </label> <br/>
									<textarea rows="4" name="Scorpio" idScorpio > </textarea>
								</div><br/>
								
							</div>
							<div class="col-lg-4 col-md-5 col-sm-12 col-xm-12">
								<div id="postpage_content"> 
									<label> Sagittarius </label> <br/>
									<textarea rows="4" name="Sagittarius" id="Sagittarius" > </textarea>
								</div><br/>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-4 col-md-5 col-sm-12 col-xm-12">

								<div id="postpage_content"> 
									<label> Capricorn </label> <br/>
									<textarea rows="4" name="Capricorn" id="Capricorn" > </textarea>
								</div><br/>
								
							</div>
							<div class="col-lg-4 col-md-5 col-sm-12 col-xm-12">
								<div id="postpage_content"> 
									<label> Aquarius </label> <br/>
									<textarea rows="4" name="Aquarius" id="Aquarius" > </textarea>
								</div><br/>
								
							</div>
							<div class="col-lg-4 col-md-5 col-sm-12 col-xm-12">
								<div id="postpage_content"> 
									<label> Pisces </label> <br/>
									<textarea rows="4" name="Pisces" id="Pisces" > </textarea>
								</div><br/>
							</div>
						</div>

						<input type="submit" value="Post" name="submit"  class="btn btn-primary pull-right" id="post_button">
					</form>
				</div>

			</div>
		</div>

		<br/><br/><br/>
	<div class="postpage_info">
		<h1> Horoscope (View) </h1>

		<div id="searchcontent">
			  <div class="searchbutton">
			  	<form action="includes/search.php?<?php echo'page='.$page; ?>" method="post" >
			    <input type="text" name="Searchkeyword" id="search" placeholder="Search" style="padding:5px 10px;">
			  	<input type="submit" value="search" class="button" style="padding:5px 10px;background-color: #B71C1C;border-color:#B71C1C;color:white;">
			  	</form>
			  </div>
		</div> <br/>
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
					include('includes/connection.php');
					$sql = "SELECT * FROM horoscope ORDER BY Datetimes DESC";
					$result = mysqli_query($conn, $sql);

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
									
									echo '<td> <a href="includes/deletepost.php?';
									echo "page=$page";
									echo "&id=$id";
									echo '" > Delete </a></td>';

									echo '<td> <a href="includes/updatepost.php?';
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


		<br/> <br/> <br/> 
	</div>

</div>

<!-- ********* section ends ******** --> 





<?php include('footer.php') ?>
