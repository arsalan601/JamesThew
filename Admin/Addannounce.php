<?php 
include"header.php";
include"sidebar.php";

echo "<script>alert('helloo')</script>"; 
if(isset($_SESSION['competition_id']) && isset($_SESSION['contest_id']))
{
  echo "<script>alert(".$_SESSION['competition_id'].")</script>"; 

 $comp_id=$_SESSION['competition_id'];
 $cat_id=$_SESSION['contest_id'];
 $date=date("Y/m/d");
     $obj->addanounce($comp_id,$cat_id,$date);
     $obj->updatecompetition($comp_id);
      $obj->updatecontest($cat_id);
     echo '<script> 
                                      window.location.assign("AnnouncementList.php");
                                       </script>';



}









include"footer.php";
?>
  
         