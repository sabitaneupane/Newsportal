<!-- ********* footer starts ******** --> 
<div id="footer" class="footer_bg">


<div class="topfooter_bg">
  <div class="container-fluid">

      <div class="row">
      
        <div class="col-lg-6 col-md-6 col-sm-6 col-xm-12">

           <div class="container-fluid">
              <div class="socialmedia pull-left">
                <span style="color:white;"> Join us at  </span>
                <a href=""><i class="fa fa-facebook-square" aria-hidden="true"></i> </a>
                <a href=""> <i class="fa fa-twitter-square" aria-hidden="true"></i> </a>
                <a href=""><i class="fa fa-youtube-square" aria-hidden="true"></i> </a>
              </div>
           </div> 
        </div>
       
        <div class="col-lg-6 col-md-6 col-sm-6 col-xm-12">

            
        </div>
        <div class="clearfix"></div>

      </div>

    
  </div>
</div>

  <div class="footercontent_bg">
    <div class="container-fluid" style="padding:10px 70px;">

        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-12 col-xm-12">
              <div id="latestpost">
               <h1 class="bgstyleheader"> <span>  Technology  </span>  </h1>
               
                

                <?php
                include('dashboard/includes/connection.php');
                $sql = "SELECT * FROM technology ORDER BY Datetimes DESC LIMIT 3";
                $result = mysqli_query($conn, $sql);


                if(mysqli_num_rows($result) > 0){
                  while($row = $result-> fetch_assoc()){
                    $id=$row['id'];
                    $Datetimes=$row['Datetimes'];
                    $Topic=$row['Topic'];
                    $Description=$row['Description'];
                    $Photo=$row['Photo'];
                  
                    $headingtechnology = $Topic;
                    $stringheadingtechnology = strip_tags($headingtechnology);
                    if (strlen($stringheadingtechnology) > 40) {
                        $stringCutheadingtechnology = substr($stringheadingtechnology, 0, 40);
                        $trimsheadingtechnology = substr($stringCutheadingtechnology, 0, strrpos($stringCutheadingtechnology, ' ')).' .....  '; 
                    }else{
                       $trimsheadingtechnology = $headingtechnology;
                    }

                    $detailstechnology = $Description;
                    $stringdetailstechnology = strip_tags($detailstechnology);
                    if (strlen($stringdetailstechnology) > 70) {
                        $stringCutdetailstechnology = substr($stringdetailstechnology, 0, 70);
                        $trimsdetailstechnology = substr($stringCutdetailstechnology, 0, strrpos($stringCutdetailstechnology, ' ')).' .....  '; 
                    }else{
                       $trimsdetailstechnology = $details;
                    }


                          echo '<div class="latestnewspost">';
                              echo '<div class="media">';
                               echo ' <div class="media-left">';
                                 echo ' <a href="news.php?post=technology&id='.$id.'">';
                                    echo '<img class="media-object" src="img/uploads/'.$Photo.'" alt="" style="width:64px;height:64px;">';
                                 echo ' </a>';
                                echo '</div>';
                                echo '<div class="media-body">';
                                 echo ' <a href="news.php?post=technology&id='.$id.'">';
                                  echo '<h1 class="media-heading headerfont"> <span class="">  ' .$trimsheadingtechnology .'</span> </h1>';
                                  echo '<p>' . $trimsdetailstechnology . '</span></p> </a>';
                                echo '</div>';
                              echo '</div>';
                          echo '</div>';
                          

                    }
                  }else{
                    echo "0 results";
                  }

                ?>
                
              </div>

          </div>

          <div class="col-lg-4 col-md-4 col-sm-12 col-xm-12">
              <div id="latestpost">
                <h1 class="bgstyleheader"> <span> Daily News  </span></h1>
                  <?php
                  include('dashboard/includes/connection.php');
                  $sql = "SELECT * FROM dailynews ORDER BY Datetimes DESC LIMIT 3";
                  $result = mysqli_query($conn, $sql);


                  if(mysqli_num_rows($result) > 0){
                    while($row = $result-> fetch_assoc()){
                      $id=$row['id'];
                      $Datetimes=$row['Datetimes'];
                      $Topic=$row['Topic'];
                      $Description=$row['Description'];
                      $Photo=$row['Photo'];
                    
                      $headingdailynews = $Topic;
                      $stringheadingdailynews = strip_tags($headingdailynews);
                      if (strlen($stringheadingdailynews) > 40) {
                          $stringCutheadingdailynews = substr($stringheadingdailynews, 0, 40);
                          $trimsheadingdailynews = substr($stringCutheadingdailynews, 0, strrpos($stringCutheadingdailynews, ' ')).' .....  '; 
                      }else{
                         $trimsheadingdailynews = $headingdailynews;
                      }

                      $detailsdailynews = $Description;
                      $stringdetailsdailynews = strip_tags($detailsdailynews);
                      if (strlen($stringdetailsdailynews) > 70) {
                          $stringCutdetailsdailynews = substr($stringdetailsdailynews, 0, 70);
                          $trimsdetailsdailynews = substr($stringCutdetailsdailynews, 0, strrpos($stringCutdetailsdailynews, ' ')).' .....  '; 
                      }else{
                         $trimsdetailsdailynews = $details;
                      }


                            echo '<div class="latestnewspost">';
                                echo '<div class="media">';
                                 echo ' <div class="media-left">';
                                   echo ' <a href="news.php?post=dailynews&id='.$id.'">';
                                      echo '<img class="media-object" src="img/uploads/'.$Photo.'" alt="" style="width:64px;height:64px;">';
                                   echo ' </a>';
                                  echo '</div>';
                                  echo '<div class="media-body">';
                                   echo ' <a href="news.php?post=dailynews&id='.$id.'">';
                                    echo '<h1 class="media-heading headerfont"> <span class="">  ' .$trimsheadingdailynews .'</span> </h1>';
                                    echo '<p>' . $trimsdetailsdailynews . '</span></p> </a>';
                                  echo '</div>';
                                echo '</div>';
                            echo '</div>';
                            

                      }
                    }else{
                      echo "0 results";
                    }

                  ?>
               
                
              </div>

          </div>

          <div class="col-lg-4 col-md-4 col-sm-12 col-xm-12">
              <div id="contactinfo">
                <h1 class="bgstyleheader"> <span> Contact Information </span> </h1>
               
                <p> 
                  <i class="fa fa-map-marker facustom" aria-hidden="true"></i>&nbsp; Address : Butwal 15, belbas <br/>
                  <i class="fa fa-phone facustom" aria-hidden="true"></i>&nbsp; Phone Number : 64553225656 <br/>
                  <i class="fa fa-mobile facustom" aria-hidden="true"></i> &nbsp; Mobile Number : 44321564  <br/>
                 <i class="fa fa-facebook facustom" aria-hidden="true"></i> &nbsp;Facebook : /newsportal <br/>
                </p>

              </div>

          </div>
          
          <div class="clearfix"></div>
          
         
        </div>
    </div>
  </div>

  <div class="copyright_bg">
    <div class="container-fluid">
        <div class="row">
            
              <div class="col-lg-6 col-md-6 col-sm-6 col-xm-12">
                <div class="copyright"> 
                  <p> <span> Copyright All reserved &copy; 2016 </span> </p>
                </div>
              </div>
             
              <div class="col-lg-6 col-md-6 col-sm-6 col-xm-12">
                   <div class="designedby"> 
                    <p class="pull-right"> <span> Designed By: <a href="http://nsabita.com.np/" target="_blank" style="color:black;font-weight: 900"> Sabita Neupane </a> </span> </p>
                   </div>
              </div>
              <div class="clearfix"></div>

            </div>
    </div>
  </div>
          <div class="clearfix"></div>

</div>
<!-- ********* footer ends ******** --> 


</div>

</div>
	

        
    </body>

  
  </html>
