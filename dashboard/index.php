<?php $page = 'thoughtoftheday' ?>
<?php include('header.php') ?>


<!-- ********* section starts ******** --> 
<div id="section">
	<div class="postpage_info">
			<div class="container-fluid"   id="postpage_container" >
				<div>
					<h1> Thought of the day  </h1>

					 
					<form  method="post" action="includes/insertpost.php?<?php echo'page='.$page; ?>"  accept-charset="character_set" enctype="multipart/form-data">
							
						<div id="postpage_content" > 
							<label> Name </label> <br/>
							<input type="text" name="Name"  style="width:100%;">
						</div><br/>

							
						<div class="row"  id="postpage_content">
							<div class="col-lg-4 col-md-5 col-sm-12 col-xm-12" > 
								<label> Date </label> <br/>
								<input type="date" name="Datetimes"  >
							</div><br/>

							<div class="col-lg-8 col-md-8 col-sm-12 col-xm-12" >
								<label> Upload Thoughtphoto </label> <br/>
								<input type="file" name="fileToUpload" id="fileToUpload">
							</div><br/>
						</div>

						<div  id="postpage_content" > 
							<label> Thought of the Day  </label> <br/>
							<textarea rows="3" name="Thought" id="" > </textarea> 
						</div><br/>

						

						<input type="submit" value="Post" name="Submit"  class="btn btn-primary pull-right" id="post_button">
					</form>
				</div>

			</div>
		</div>

		<br/><br/><br/>
	<div class="postpage_info">
		<h1> Thought of the Day (View) </h1>
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
						include('includes/connection.php');

					$sql = "SELECT * FROM thoughtoftheday ORDER BY Datetimes DESC";
					$result = mysqli_query($conn, $sql);

					$u = 1; 

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
								echo '<td> <img src="../img/uploads/' .$Photo. '" id="postingpageimg"> </td>';
								
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
