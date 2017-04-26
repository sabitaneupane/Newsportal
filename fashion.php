<?php $page = 'fashion' ?>
<?php include('header.php') ?>

 

<!-- ********* section starts ******** --> 
<div id="section">
	<div id="breadcrumbcontent">
		<ol class="breadcrumb">
		  <li><a href="index.php">Home</a></li>
		  <li class="active"><a href="fashion.php">fashion</a></li>
		</ol>

	</div>
<div class="row">
     <div class="col-lg-8 col-md-8 col-sm-12 col-xm-12" style="padding:10px 0px;">
     	<div class="container-fluid">
			<h1 class="bgstyleheader"> <span> Fashion </span>  </h1>

			<div class="newspagepost">
				 <div id="galleryArea">

           <ul class="row">
              <?php
              include('dashboard/includes/connection.php');
              $sql = "SELECT * FROM $page ORDER BY Datetimes DESC";
              $result = mysqli_query($conn, $sql);

              $u = 1; 

              if(mysqli_num_rows($result) > 0){
                while($row = $result-> fetch_assoc()){
                  $id=$row['id'];
                  $Datetimes=$row['Datetimes'];
                  $Peoplename=$row['Peoplename'];
                  $Description=$row['Description'];
                  $Photo=$row['Photo'];

                     echo '<li class="col-lg-4 col-md-6 col-sm-6 col-xs-12">';
                      echo ' <figure>';
                         echo '<a href="model.php?post='.$page.'&id='.$id.'"><img src="img/uploads/' .$Photo. '"  class="img-responsive"></a>';
                         echo '  <figcaption>' .$Peoplename. '</figcaption>';
                       echo ' </figure>';
                     echo '</li>';
                  
                  $u++;
                }
              }else{
                echo "0 results";
              }


              ?>

                       
                             
                            </ul>
                    </div>

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