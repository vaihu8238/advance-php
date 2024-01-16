<?php

// $con = new mysqli("localhost","root","","assignment");

// if(isset($_POST['sub']))
// {
//     $fname= $_POST['fn'];
//     $lname= $_POST['ln'];
//     $email= $_POST['em'];
//     $pass= $_POST['pwd'];
//     $cpass= $_POST['cpwd'];
//     $gen= $_POST['gender'];
   
//     $ch= $_POST['chk'];
//     $chk="";
//     foreach($ch as $v)
//     {
//         $chk =$chk.$v . ",";
//     }
    
    
//     // $img= $_POST['file'];
//     $file = $_FILES["file"]["name"];
//     $temp_file = $_FILES["file"]["tmp_name"];
//     $location = "image/".$file;
//     if(move_uploaded_file($temp_file,$location))
//     {
//         // echo"uplod";
//     }


 
//   $sql=  "insert into details(fname,lname,email,password,c_password,gender,hobbies,file) 
//   values('$fname','$lname','$email','$pass','$cpass','$gen','$chk','$file')";
  
//   $con->query($sql);
// }

?>
<!-- 
<html>
<head>
     
<title>data insert in database :</title>

</head>
<body>
<form method="post" enctype="multipart/form-data">
        FRIST NAME:<input name="fn" id="fnm"/><br><br>
        LASTNAME:<input name="ln" id="lnm"/><br><br>
        EMAIL:<input name="em" id="em"/><br><br>
        PASSWORD:<input type="password" name="pwd" id="pass"/><br><br>
        C-PASSWORD:<input type="password" name="cpwd" id="cpass"/><br><br>

        GENDER:<input type="radio" name="gender" id="m" value="male"/>male
               <input type="radio" name="gender" id="f" value="female"/>female<br><br>

        HOBBIES:<input type="checkbox" name="chk[]" value="music"/>music
                <input type="checkbox" name="chk[]" value="dance"/>dance
                <input type="checkbox" name="chk[]" value="football"/>football<br><br>

        SELECT FILE:<input type="file" name="file" id="file"/><br><br>

        <input type="submit" name="sub" value="submit" onclick=" return validateform() ">    
</form>

<h1> DATABASE RECORDS </h1>

<table border="1" cellpadding="5px">
    <tr>
        <td>ID</td>
        <td>Firstname</td>
        <td>Lastname</td>
        <td>Email</td>
        <td>Password</td>
        <td>confirm_pwd</td>
        <td>Gender</td>
        <td>HObbies</td>
        <td>Image</td>
        <td>Actions</td>

    </tr>

    <?php
    
    // $fetch="select * from details";
    // $res = $con->query($fetch); 

    // while($row = mysqli_fetch_array($res))
     {


    ?>

    <tr>
        <td><?php echo $row['uid'] ?></td>
        <td><?php echo $row['fname'] ?></td>
        <td><?php echo $row['lname'] ?></td>
        <td><?php echo $row['email'] ?></td>
        <td><?php echo $row['password'] ?></td>
        <td><?php echo $row['c_password'] ?></td>
        <td><?php echo $row['gender'] ?></td>
        <td><?php echo $row['hobbies'] ?></td>
        <td>
            <img src="image/<?php echo $row['file']?>" height="100px"/>
        </td>
        <td>
            <a href="edit.php?Eid=<?php echo $row['uid'];?>"><button>Edit</button></a>
            <a href="delete.php?Did=<?php echo $row['uid']; ?>"><button>Delete</button></a>
        </td>

    </tr>

   <?php  } ?>
</table>

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

</body>
</html> -->
