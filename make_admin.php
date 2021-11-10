<?php
include "./includes/db.php";

if(isset($_GET['user_id'])){
    $user_id =$_GET['user_id'];
    $query = "UPDATE users SET user_role='admin' WHERE user_id='" . $user_id . "'";
    $result = mysqli_query($connection, $query);

        if($result){
            $_SESSION['user_role'] = 'admin';
            header("Location: index.php");
        }else{
            header("Location: /");
        }
}else{
    echo "Not Found 404!";
}
?>