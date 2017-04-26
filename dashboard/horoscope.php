<?php $page = 'horoscope' ?>
<?php include('header.php') ?>

<!-- ********* section starts ******** --> 
<div id="section">
	<div class="postpage_info">
			<div class="container-fluid"   id="horoscope_container" >
				<div>
					<h1> Horoscope </h1>
					<form>
						<div  id="postpage_content"> 
							<label> Date </label> <br/>
							<input type="date" name=""  >
						</div><br/>

						<div class="row">
							<div class="col-lg-4 col-md-5 col-sm-12 col-xm-12">
								<div id="postpage_content"> 
									<label> Aries </label> <br/>
									<textarea rows="4" name="" id="" > </textarea>
								</div><br/>
								
							</div>
							<div class="col-lg-4 col-md-5 col-sm-12 col-xm-12">
								<div id="postpage_content"> 
									<label> Taurus </label> <br/>
									<textarea rows="4" name="" id="" > </textarea>
								</div><br/>
								
							</div>
							<div class="col-lg-4 col-md-5 col-sm-12 col-xm-12">
								<div id="postpage_content"> 
									<label> Gemini </label> <br/>
									<textarea rows="4" name="" id="" > </textarea>
								</div><br/>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-4 col-md-5 col-sm-12 col-xm-12">
								<div id="postpage_content"> 
									<label> Cancer </label> <br/>
									<textarea rows="4" name="" id="" > </textarea>
								</div><br/>
								
							</div>
							<div class="col-lg-4 col-md-5 col-sm-12 col-xm-12">
								<div id="postpage_content"> 
									<label> Leo </label> <br/>
									<textarea rows="4" name="" id="" > </textarea>
								</div><br/>
								
							</div>
							<div class="col-lg-4 col-md-5 col-sm-12 col-xm-12">
								<div id="postpage_content"> 
									<label> Virgo </label> <br/>
									<textarea rows="4" name="" id="" > </textarea>
								</div><br/>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-4 col-md-5 col-sm-12 col-xm-12">
								<div id="postpage_content"> 
									<label> Libra </label> <br/>
									<textarea rows="4" name="" id="" > </textarea>
								</div><br/>
								
							</div>
							<div class="col-lg-4 col-md-5 col-sm-12 col-xm-12">
								<div id="postpage_content"> 
									<label> Scorpio </label> <br/>
									<textarea rows="4" name="" id="" > </textarea>
								</div><br/>
								
							</div>
							<div class="col-lg-4 col-md-5 col-sm-12 col-xm-12">
								<div id="postpage_content"> 
									<label> Sagittarius </label> <br/>
									<textarea rows="4" name="" id="" > </textarea>
								</div><br/>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-4 col-md-5 col-sm-12 col-xm-12">

								<div id="postpage_content"> 
									<label> Capricorn </label> <br/>
									<textarea rows="4" name="" id="" > </textarea>
								</div><br/>
								
							</div>
							<div class="col-lg-4 col-md-5 col-sm-12 col-xm-12">
								<div id="postpage_content"> 
									<label> Aquarius </label> <br/>
									<textarea rows="4" name="" id="" > </textarea>
								</div><br/>
								
							</div>
							<div class="col-lg-4 col-md-5 col-sm-12 col-xm-12">
								<div id="postpage_content"> 
									<label> Pisces </label> <br/>
									<textarea rows="4" name="" id="" > </textarea>
								</div><br/>
							</div>
						</div>

						
						
						
						

						<input type="submit" value="Post"  class="btn btn-primary pull-right" id="post_button">
					</form>
				</div>

			</div>
		</div>

		<br/><br/><br/>
	<div class="postpage_info">
		<h1> Horoscope (View) </h1>
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
				<tr>
					<td>1</td>
					<td>2017/6/4</td>
					<td>
						<p id="Aries"> <b> Aries: </b> 
						 Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et b olore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p> 
						<p id="Taurus"><b> Taurus: </b>
						 Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et b olore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p> 
						<p id="Gemini"><b> Gemini: </b>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et b olore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p> 
						<p id="Cancer"><b> Cancer: </b>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et b olore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p> 
						<p id="Leo"><b> Leo: </b>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et b olore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p> 
						<p id="Virgo"><b> Virgo: </b>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et b olore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p> 
					</td>
					<td>
						<p id="Libra"> <b> Libra: </b> 
						 Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et b olore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p> 
						<p id="Scorpio"><b> Scorpio: </b>
						 Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et b olore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p> 
						<p id="Sagittarius"><b> Sagittarius: </b>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et b olore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p> 
						<p id="Capricorn"><b> Capricorn: </b>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et b olore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p> 
						<p id="Aquarius"> <b> Aquarius: </b> 
						 Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et b olore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p> 
						<p id="Pisces"><b> Pisces: </b>
						 Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et b olore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p> 
					</td>
					
					
					
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
