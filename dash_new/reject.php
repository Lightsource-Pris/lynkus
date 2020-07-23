<?php
      
      function response($message){
                echo "<script type='text/javascript'>alert('".$message."')</script>";
              }

      include "../includes/db.php";
      $id = $_GET['id'];
      $query4 = "UPDATE rent SET status = 'rejected' WHERE ID = '$id'";
      $result4 = mysqli_query($connection,$query4);
      if ($result4) {
        response("You have succesfully rejected the request");
        echo "<script>location.href='index.php'</script>";
      }else{
        response("There was an error, please try again");
        echo "<script>location.href='index.php'</script>";
      }
    
    
  ?>