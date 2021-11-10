   <div class="well">

   <h4>Want to become an Admin?</h4>
   <?php
   if(isset($_SESSION['user_id'])){
      $user_id = $_SESSION['user_id'];
      ?>
      <h5><a href="make_admin.php?user_id=<?php echo $user_id?>">Make me an Admin</a></h5>
      <?php
      }else{
         echo "<h4>You are admin</h4>";
      }
      ?>
      
   </div>
