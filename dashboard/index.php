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
			    <input type="text" id="search" placeholder="Search" style="padding:5px 10px;">
			  	<button type="submit"> Search</button>
			  </div>
			  
		</div> <br/>
		<table class="table table-striped table-bordered table-hover table-condensed">
			<thead>
				<tr>
					<th>S.N.</th>
					<th>Date</th>
					<th> Name</th>
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
				
							
							<tr>
								<td>1</td>
								<td>2017/6/4</td>
								<td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</td>
								<td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute  rure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat no proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute  rure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat no proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute  rure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat no proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</td>
								<td><img src="../img/newsimg/footballplayer.jpg" id="postingpageimg"> </td>
								<td> <a href="delete.php" target="_blank"> Delete </a> </td>
								<td> <a href="delete.php" target="_blank"> Update </a> </td>
							</tr>
							
							<tr>
								<td>2</td>
								<td>2017/6/4</td>
								<td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</td>
								<td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute  rure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat no proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute  rure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat no proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute  rure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat no proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</td>
								<td><img src="../img/newsimg/footballplayer.jpg" id="postingpageimg"> </td>
								<td> <a href="delete.php" target="_blank"> Delete </a> </td>
								<td> <a href="delete.php" target="_blank"> Update </a> </td>
							</tr>
							
							<tr>
								<td>3</td>
								<td>2017/6/4</td>
								<td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</td>
								<td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute  rure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat no proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute  rure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat no proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute  rure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat no proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</td>
								<td><img src="../img/newsimg/footballplayer.jpg" id="postingpageimg"> </td>
								<td> <a href="delete.php" target="_blank"> Delete </a> </td>
								<td> <a href="delete.php" target="_blank"> Update </a> </td>
							</tr>
							
							<tr>
								<td>4</td>
								<td>2017/6/4</td>
								<td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</td>
								<td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute  rure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat no proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute  rure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat no proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute  rure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat no proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</td>
								<td><img src="../img/newsimg/footballplayer.jpg" id="postingpageimg"> </td>
								<td> <a href="delete.php" target="_blank"> Delete </a> </td>
								<td> <a href="delete.php" target="_blank"> Update </a> </td>
							</tr>
							
							<tr>
								<td>5</td>
								<td>2017/6/4</td>
								<td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</td>
								<td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute  rure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat no proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute  rure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat no proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute  rure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat no proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</td>
								<td><img src="../img/newsimg/footballplayer.jpg" id="postingpageimg"> </td>
								<td> <a href="delete.php" target="_blank"> Delete </a> </td>
								<td> <a href="delete.php" target="_blank"> Update </a> </td>
							</tr>


			</tbody>


		</table>

		<br/> <br/> <br/> 
	</div>

</div>

<!-- ********* section ends ******** --> 



<?php include('footer.php') ?>
