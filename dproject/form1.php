<?php
$con = new mysqli("localhost","root","","assignment");

if(isset($_POST['sub']))
{
    $fname= $_POST['fn'];
    $lname= $_POST['ln'];
    $email= $_POST['em'];
    $pass= $_POST['pwd'];
    $cpass= $_POST['cpwd'];
    $gen= $_POST['gender'];
   
    $ch= $_POST['chk'];
    $chk="";
    foreach($ch as $v)
    {
        $chk =$chk.$v . ",";
    }
    
    
    // $img= $_POST['file'];
    $file = $_FILES["file"]["name"];
    $temp_file = $_FILES["file"]["tmp_name"];
    $location = "images/".$file;
    if(move_uploaded_file($temp_file,$location))
   

 
  $sql2 =  "INSERT into details (fname,lname,email,password,c_password,gender,hobbies,file) 
  values('$fname','$lname','$email','$pass','$cpass','$gen','$chk','$file')";
 $in = $con->query($sql2);

 if($in)
 {
    header('location:index.php');
 }

}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
     <link rel="stylesheet" href="style.css">
  </head>
  <body>
   
<div class="container-fluid bg-dark text-light py-3">
    <header class="text-center">
        <h1 class="display-6">welcome</h1>
    </header>
</div>

<section class="container my-2 bg-dark w-50 text-light p-2">
<form class="row g-3 p-3" method="POST"  enctype="multipart/form-data"  onsubmit="return validateform()">

<div class="col-md-6">
    <label for="fnm" class="form-label">Fname</label>
    <input type="text" class="form-control" name="fn" id="fnm">
  </div>
  <div class="col-md-6">
    <label for="lnm" class="form-label">Lname</label>
    <input type="text" class="form-control"name="ln" id="lnm">
  </div>
  <div class="col-md-6">
    <label for="em" class="form-label">Email</label>
    <input type="email" class="form-control" name="em" id="em">
  </div>
  <div class="col-md-6">
    <label for="pass" class="form-label">Password</label>
    <input type="password" class="form-control" name="pwd" id="pass">
  </div>
  <div class="col-12">
    <label for="cpass" class="form-label">confirm-password</label>
    <input type="password" class="form-control" name="cpwd" id="cpass">
  </div><br>
  Select Gender:
 <div class="form-check">
  <input class="form-check-input" type="radio" name="gender" value="male" id="m">
  <label class="form-check-label" for="m">
    male
  </label>
 </div>
 <div class="form-check">
  <input class="form-check-input" type="radio" name="gender" value="female" id="f">
  <label class="form-check-label" for="f">
    female
  </label>
  </div><br>

 hobbies:
 <div class="form-check form-check-inline">
      <label class="form-check-label">
        <input type="checkbox" class="form-check-input" name="chk[]" value="workout">workout
      </label>
    </div>
    <div class="form-check form-check-inline">
      <label class="form-check-label">
        <input type="checkbox" class="form-check-input" name="chk[]" value="music">music
      </label>
    </div>
    <div class="form-check form-check-inline">
      <label class="form-check-label">
        <input type="checkbox" class="form-check-input" name="chk[]" value="dance">dance
      </label>
    </div>

 <br><br><br>
 <div class="mb-3">
  <label for="file" class="form-label">Select file:</label>
  <input class="form-control" type="file" name="file" id="file">
</div>
<br><br><br>
  <div class="col-12">
    <button type="submit" name="sub" class="btn btn-primary" value="submit">submit</button>
    <!-- <a href="index.php" class="btn btn-primary float-end">back</a> -->
  </div><br>
  
  
  
  
</form>

<script>
     
     
    fn= document.getElementById('fnm');
    ln= document.getElementById('lnm');
    em= document.getElementById('em');
    pwd= document.getElementById('pass');
    cpwd= document.getElementById('cpass');

    gender = document.getElementByName('gender');
    console.log(gen[1])



    file= document.getElementById('file');

    function validateform()
    {   
        if(fn.value == "")
        {
            alert("firstname required..!");
            return false;
        }

        if(ln.value == "")
        {
            alert("lastname required..!");
            return false;
        }

        if(em.value == "")
        {
            alert("email required..!");
            return false;
        }
        if(pwd.value == "")
        {
            alert("password is required..!");
            return false;
        }
        if(pwd.value !== cpwd.value)
        {
            alert("password must be same..!");
            return false;
        }
        if(gender[0].checked == flase && gender[1].checked == false)
        {
            alert("select gender is required..!");
            return false;
        }
        if(file.value == "")
        {
            alert("at least 1 file selection is  required..!");
            return false;
        }
        

    }
    
    
</script>


</section>
  </body>
</html>