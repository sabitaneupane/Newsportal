<?php $page = 'fashion' ?>
<?php include('header.php') ?>

<!-- ********* section starts ******** --> 
<div id="section">
	<div class="postpage_info">
			<div class="container-fluid"   id="fashion_container" >
				<div>
					<h1> Fashion </h1>
					<form>
							
						<div id="postpage_content" > 
							<label> Name </label> <br/>
							<textarea rows="2" name="" id="" > </textarea>
						</div><br/>

						<div class="row"  id="postpage_content">
							<div class="col-lg-4 col-md-5 col-sm-12 col-xm-12" > 
								<label> Date </label> <br/>
								<input type="date" name=""  >
							</div><br/>

							<div class="col-lg-8 col-md-8 col-sm-12 col-xm-12" >
								<label> Upload Photo </label> <br/>
								<input type="file" name="" id="picupload" >
							</div><br/>
						</div>
					

						<div  id="postpage_content" > 
							<label>  Description </label> <br/>
							<textarea rows="12s" name="" id="" > </textarea> 
						</div><br/>

						<input type="submit" value="Post"  class="btn btn-primary pull-right" id="post_button">
					</form>
				</div>

			</div>
		</div>

		<br/><br/><br/>
	<div class="postpage_info">
		<h1> Fashion (View) </h1>
		<table class="table table-striped table-bordered table-hover table-condensed">
			<thead>
				<tr>
					<th>S.N.</th>
					<th>Name</th>
					<th>Date</th>
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
				<tr>
					<td>1</td>
					<td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</td>
					<td>2017/6/4</td>
					<td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute  rure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat no proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute  rure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat no proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute  rure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat no proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</td>
					<td><img src="../img/newsimg/footballplayer.jpg" id="postingpageimg"> </td>
					<td> <a href="delete.php" target="_blank"> Delete </a> </td>
					<td> <a href="update.php" target="_blank"> Update </a> </td>
				</tr>
				<tr>
					<td>1</td>
					<td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</td>
					<td>2017/6/4</td>
					<td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute  rure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat no proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute  rure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat no proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute  rure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat no proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</td>
					<td><img src="../img/newsimg/footballplayer.jpg" id="postingpageimg"> </td>
					<td> <a href="delete.php" target="_blank"> Delete </a> </td>
					<td> <a href="update.php" target="_blank"> Update </a> </td>
				</tr>
				<tr>
					<td>1</td>
					<td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</td>
					<td>2017/6/4</td>
					<td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute  rure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat no proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute  rure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat no proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute  rure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat no proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</td>
					<td><img src="../img/newsimg/footballplayer.jpg" id="postingpageimg"> </td>
					<td> <a href="delete.php" target="_blank"> Delete </a> </td>
					<td> <a href="update.php" target="_blank"> Update </a> </td>
				</tr>
				<tr>
					<td>1</td>
					<td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</td>
					<td>2017/6/4</td>
					<td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute  rure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat no proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute  rure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat no proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute  rure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat no proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</td>
					<td><img src="../img/newsimg/footballplayer.jpg" id="postingpageimg"> </td>
					<td> <a href="delete.php" target="_blank"> Delete </a> </td>
					<td> <a href="update.php" target="_blank"> Update </a> </td>
				</tr>
				<tr>
					<td>1</td>
					<td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</td>
					<td>2017/6/4</td>
					<td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute  rure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat no proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute  rure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat no proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute  rure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat no proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</td>
					<td><img src="../img/newsimg/footballplayer.jpg" id="postingpageimg"> </td>
					<td> <a href="delete.php" target="_blank"> Delete </a> </td>
					<td> <a href="update.php" target="_blank"> Update </a> </td>
				</tr>
				<tr>
					<td>1</td>
					<td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</td>
					<td>2017/6/4</td>
					<td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute  rure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat no proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute  rure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat no proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute  rure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat no proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</td>
					<td><img src="../img/newsimg/footballplayer.jpg" id="postingpageimg"> </td>
					<td> <a href="delete.php" target="_blank"> Delete </a> </td>
					<td> <a href="update.php" target="_blank"> Update </a> </td>
				</tr>
				
				
			</tbody>

		</table>


		<br/> <br/> <br/> 
	</div>

</div>

<!-- ********* section ends ******** --> 





<?php include('footer.php') ?>
