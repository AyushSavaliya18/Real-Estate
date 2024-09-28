<?php


 include "conn.php";
$myid=$_GET['id'];  



  $q3 = "delete from cart where cid=$myid";
  if ($q3>0) 
  {
    mysqli_query($con,$q3);


   header("Location: cart.php");
   }
   else
   {
        echo "not deleted";
   }
     

   


    
   
 ?>