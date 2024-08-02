<?php 

include "config.php";

if($_POST['type']==1){

    $fname =$_POST['fname'];
    $lname =$_POST['lname'];
    $email =$_POST['email'];

    $sql = "INSERT INTO users(fname,lname,email) VALUE ('$fname','$lname','$email')";

    $run = $conn->query($sql);

    if($run){
        echo json_encode(array("status"=>200));
    }
}



?>


