<?php
error_reporting(0);
$con = new mysqli("localhost", "root", "", "assignment");
// if($con){
//     echo"sucsees";
// }
$id = $_GET['Eid'];
if (isset($_POST['sub'])) {

    if (!$id) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $pass = $_POST['password'];
        $c_pass = $_POST['c_password'];


        $sql = "INSERT INTO users(name,email,pass,c_pass) values ('$name','$email','$pass','$c_pass')";

        $res = $con->query($sql);
    } else {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $pass = $_POST['password'];
        $c_pass = $_POST['c_password'];

        $up = "UPDATE users SET name='$name',email='$email',pass='$pass',c_pass='$c_pass' WHERE id='$id'";

        $edit = $con->query($up);
    }
    header("location: index.php");
}

$fetch = "SELECT * FROM users WHERE id='$id'";
$var = $con->query($fetch);


if ($var->num_rows > 0) {
    while ($ro = mysqli_fetch_array($var)) {

        $v[] = $ro;
    }
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <section class="vh-100 bg-image" style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
        <div class="mask d-flex align-items-center h-100 gradient-custom-3">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                        <div class="card" style="border-radius: 15px;">
                            <div class="card-body">
                                <!-- <h2 class="text-uppercase text-center mb-5">Create an account</h2> -->
                                <!-- <a href="index.php" class="btn btn-primary float-end">back</a> -->

                                <form method="POST">
                                    <div class="d-flex">
                                        <a href="index.php"><i style="color: black;" class="fa-solid fa-arrow-left fa-lg">BACK</i></a>
                                    </div><br>

                                    <input type="text" name="id" id="" hidden value="<?php echo $v[0]['id']; ?>">
                                    <div data-mdb-input-init class="form-outline mb-4">
                                        <input type="text" name="name" id="nm" class="form-control form-control-lg" value="<?php echo $v[0]['name']; ?>">
                                        <label class="form-label" for="form3Example1cg">Your Name</label>
                                    </div>

                                    <div data-mdb-input-init class="form-outline mb-4">
                                        <input type="email" name="email" id="em" class="form-control form-control-lg" value="<?php echo $v[0]['email']; ?>">
                                        <label class="form-label" for="form3Example3cg">Your Email</label>
                                    </div>

                                    <div data-mdb-input-init class="form-outline mb-4">
                                        <input type="text" name="password" id="pass" class="form-control form-control-lg" value="<?php echo $v[0]['pass']; ?>">
                                        <label class="form-label" for="form3Example4cg">Password</label>
                                    </div>

                                    <div data-mdb-input-init class="form-outline mb-4">
                                        <input type="text" name="c_password" id="c_pass" class="form-control form-control-lg" value="<?php echo $v[0]['c_pass']; ?>">
                                        <label class="form-label" for="form3Example4cdg">Repeat your password</label>
                                    </div>

                                    <div class="d-flex justify-content-center">
                                        <button type="submit" name="sub" data-mdb-button-init data-mdb-ripple-init class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button>
                                    </div>

                                    <!-- <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="#!" class="fw-bold text-body"><u>Login here</u></a></p> -->

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>