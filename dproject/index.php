<?php
    $con = new mysqli("localhost","root","","assignment");
    // $id=$_REQUEST['Did'];
    


    if (isset($_REQUEST['delbtn']))
    {
            $id=$_REQUEST['delbtn'];
            $sql="DELETE FROM details WHERE uid ='$id'";
            $del=$con->query($sql);

            header("location:index.php");
    }

?>

    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> DATABASE RECORDS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>
<body>
    <div class="container mt-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4> DATABASE RECORDS
                        <a href="form1.php" class="btn btn-primary float-end">Add new</a>
                    </h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped ">
                        <thead>
                            <tr>
                            <th>ID</th>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>confirm_pwd</th>
                            <th>Gender</th>
                            <th>HObbies</th>
                            <th>Image</th>
                            <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                
                                    <?php
                                       $fetch="select * from details";
                                       $res = $con->query($fetch); 
                                   
                                       while($row = mysqli_fetch_array($res))
                                       {
                                    ?>
                                      <tr >
                                            <td><?php echo $row['uid'] ?></td>
                                            <td><?php echo $row['fname'] ?></td>
                                            <td><?php echo $row['lname'] ?></td>
                                            <td><?php echo $row['email'] ?></td>
                                            <td><?php echo $row['password'] ?></td>
                                            <td><?php echo $row['c_password'] ?></td>
                                            <td><?php echo $row['gender'] ?></td>
                                            <td><?php echo $row['hobbies'] ?></td>
                                            <td>
                                                <img src="images/<?php echo $row['file']?>" height="100px"/>
                                            </td>
                                            <td style="display:flex;">

                                                <a href="view.php?vid=<?php echo $row['uid'];?>" class="btn btn-info btn-sm"><i class="fa fa-eye fa-2x" aria-hidden="true"></i></a>
                                                <a href="edit1.php?Eid=<?php echo $row['uid'];?>" class="btn btn-success btn-sm"><i class="material-icons">edit</i></a>



                                                <form action="" method="POST">
                                                  <button name="delbtn" value="<?php echo $row['uid']; ?>" type="submit"  class="btn btn-danger btn-sm"><i class="material-icons">delete</button>
                                                </form>
                                            </td>

                                        </tr>

                                    <?php  } ?>


                                
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>