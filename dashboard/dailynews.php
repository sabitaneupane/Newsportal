
<?php $page = 'dailynews' ?>
<?php include('header.php') ?>


<!-- ********* section starts ******** --> 
<div id="section">
	<div class="postpage_info">
			<div class="container-fluid"   id="dailynews_container" >
				<div>
					<h1> Daily News </h1>
					<form method="post" action="includes/insertpost.php?<?php echo'page='.$page; ?>" accept-charset="character_set" enctype="multipart/form-data">
							
						<div id="postpage_content" > 
							<label> Topic </label> <br/>
							<textarea rows="2" name="Topic" id="Topic" > </textarea>
						</div><br/>

						<div class="row"  id="postpage_content">
							<div class="col-lg-4 col-md-5 col-sm-12 col-xm-12" > 
								<label> Date </label> <br/>
								<input type="date" name="Datetimes"  id="Datetimes">
							</div><br/>

							<div class="col-lg-8 col-md-8 col-sm-12 col-xm-12" >
								<label> Upload Photo </label> <br/>
								<input type="file" name="fileToUpload" id="fileToUpload">
							</div><br/>
						</div>
						
						<div  id="postpage_content" > 
							<label>  Description </label> <br/>
							<textarea rows="12" name="Description" id="Description"> </textarea> 
						</div><br/>

						<input type="submit" value="Post"  class="btn btn-primary pull-right" id="post_button">
					</form>
				</div>

			</div>
		</div>

		<br/><br/><br/>
	<div class="postpage_info">
		<h1> Daily News (View) </h1>
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
					include('includes/connection.php');
					$sql = "SELECT * FROM $page ORDER BY Datetimes DESC";
					$result = mysqli_query($conn, $sql);

					$u = 1; 

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

<!-- ********* section ends ******** --> 




<?php include('footer.php') ?>
