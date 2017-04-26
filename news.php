<?php
include('dashboard/includes/connection.php');
$post = $_GET['post'];
$rid = $_GET['id'];
$sql = "SELECT * FROM $post WHERE id='$rid' ";
$result = mysqli_query($conn, $sql);


if(mysqli_num_rows($result) > 0){
	while($row = $result-> fetch_assoc()){
		$id=$row['id'];
		$Datetimes=$row['Datetimes'];
		$Topic=$row['Topic'];
		$Description=$row['Description'];
		$Photo=$row['Photo'];
	
	}
}

?>

<?php $page = $post ?>

<?php include('header.php') ?>

<!-- ********* section starts ******** --> 
<div id="section">
	
<div class="row">
     <div class="col-lg-8 col-md-8 col-sm-12 col-xm-12" style="padding:10px 0px;">
     	<div class="newscontentpage">
     		<div class="container-fluid">


	     		<h1 class="headerfont"> <span class=""> <?php echo $Topic; ?>   </span> </h1> <img class="img-responsive" src="img/uploads/<?php echo $Photo; ?>" alt="" >
	            <p> <span  class="datetime">  <?php echo $Datetimes; ?> </span> </p>
	     		<p class="Description"> <?php echo $Description; ?> </p>
     		</div>
     	</div>

	</div>


		
<?php include('sidebar.php') ?>

	</div>
</div>

<!-- ********* section ends ******** --> 






<?php include('footer.php') ?>

