<?php

 $con = new mysqli("localhost","root","","assignment");

      $id = $_REQUEST['abc'];
//    $id =$_REQUEST['vid'];
//      echo $id;/

$fetch ="SELECT * from details WHERE uid='$id'";
$var=$con->query($fetch);
 
if($var->num_rows>0)
{
  while($ro=mysqli_fetch_array($var))
  {
    $v[]=$ro;
  }
}
    
    // echo"<pre>";
    // print_r($v);
    // echo"</pre>";
    // $A=$v[0]['file'];
    // echo "<img src='../images/$A' height='150px' width='150px' />";

    if(isset($_FILES['file']))
    {
        $file = $_FILES["file"]["name"];
        $temp_file = $_FILES["file"]["tmp_name"];
        $location = "images/".$file;
        move_uploaded_file($temp_file,$location);
    }
    if(isset($_REQUEST['sub']))
    {
        // $id = $_GET['abc'];
        // $name=$_REQUEST['file'];
        $u = "UPDATE details SET file='$file' WHERE uid='$id'";
        $con->query($u);

        // echo $u;
        // header('location:view.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>upadte image</title>
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
     <link rel="stylesheet" href="style.css">
     
</head>
<body>
    <section class="container my-2 bg-dark w-50 text-light p-2">
    <form class="row g-3 p-3" method="post" enctype="multipart/form-data">
        
     <a target="_blank">
     <img src="../images/<?php echo $v[0]['file']?>" height="150px" width="150px" />
     
 
     <img src="C:\xampp\htdocs\advance-php\dproject\images" alt="">
     <div class="mb-6">
         <label for="file" class="form-label">Select file:</label>
         <input class="form-control" type="file" name="file" id="file">
        </div>
        
        <div class="col-12">
        <button type="submit" name="sub" class="btn btn-primary">update-image</button>
        <!-- <a href="view.php" class="btn btn-primary float-end">back</a> -->
   </div><br>


    </section>
    </form>
</body>
</html>