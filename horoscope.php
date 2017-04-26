<?php $page = 'horoscope' ?>
<?php include('header.php') ?>


<!-- ********* section starts ******** --> 
<div id="section">
	<div id="breadcrumbcontent">
		<ol class="breadcrumb">
		  <li><a href="index.php">Home</a></li>
		  <li class="active"><a href="horoscope.php">horoscope</a></li>
		</ol>

	</div>
<div class="row">
     <div class="col-lg-8 col-md-8 col-sm-12 col-xm-12" style="padding:10px 0px;">
     	<div class="container-fluid">
			<h1 class="bgstyleheader"> <span>Horoscope </span>  </h1>

			<div class="newspagepost">
				<?php
				include('dashboard/includes/connection.php');
				$sql = "SELECT * FROM horoscope  ORDER BY Datetimes DESC";
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

							$content = $Aries.' '.$Taurus.' '.$Gemini.' '.$Cancer.' '.$Leo.' '.$Virgo.' '.$Libra.' '.$Scorpio.' '.$Sagittarius.' '.$Capricorn.' '.$Aquarius.' '.$Pisces;
							$string = strip_tags($content);
							if (strlen($string) > 200) {
							    $stringCut = substr($string, 0, 200);
							    $trimstring = substr($stringCut, 0, strrpos($stringCut, ' ')).' ..... [ Read More .......... ] '; 
							}else{
								 $trimstring = $content;
							}

							echo '<div class="newspagepostcontent">'; 
							echo '	<ul class="media-list">'; 
							echo '	  <li class="media">'; 
							echo '	    <div class="media-left">'; 
							echo '	      <a href="dailyhoroscope.php?id='.$id.'">'; 
							echo '			    <img class="media-object" src="img/horoscope/Aquarius.jpg" alt="" style="width:140px;height:140px;">'; 
							echo '	      </a>'; 
							echo '	    </div>'; 
							echo '	    <div class="media-body">'; 
							echo '	      <a href="dailyhoroscope.php?id='.$id.'" >'; 
							echo '	       <h1 class="media-heading headerfont"> <span class="">  Horoscope today: Aries, Taurus....., Pisces  </span> </h1>'; 
							echo '	       <p> <span  class="datetime">'.  $Datetimes. ' </span> </p>'; 
							echo '			<p>' .$trimstring.' </p> </a>'; 
							echo '	    </div>'; 
							echo '	  </li>'; 
							echo '	</ul>'; 
							echo '</div>'; 
						}
						}
				?>
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