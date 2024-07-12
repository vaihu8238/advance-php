<?php
$con = new mysqli("localhost", "root", "", "assignment");

// Pagination variables
$results_per_page = 4;
$current_page = isset($_GET['page']) ? $_GET['page'] : 1;
$start_from = ($current_page - 1) * $results_per_page;

// Delete record if delete button is clicked
if (isset($_POST['delbtn'])) {
    $id = $_REQUEST['delbtn'];
    $sql = "DELETE FROM users WHERE id='$id'";
    $del = $con->query($sql);
    header("location:index.php");
}

// Fetch records with pagination
$fetch = "SELECT * FROM users LIMIT $start_from, $results_per_page";
$res = $con->query($fetch);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <div class="container mt-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4> DATABASE RECORDS
                        <a href="form.php" class="btn btn-primary float-end">Add new</a>
                    </h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped ">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            
                            $j = ($current_page - 1) * $results_per_page + 1; // Base value of $j for the current page
                            while ($row = mysqli_fetch_array($res)) {
                            ?>
                                <tr>
                                    <td><?php echo $j++; ?></td>
                                    <td><?php echo $row['name']; ?></td>
                                    <td><?php echo $row['email']; ?></td>
                                    <td><?php echo $row['pass']; ?></td>
                                    <td style="display:flex;">
                                        <a href="form.php?Eid=<?php echo $row['id'] ?>"><i class="fa-solid fa-edit fa-xl"></i></a>
                                        <form action="" method="POST">
                                            <button value="<?php echo $row['id'] ?>" name="delbtn" type="submit"><i class="fa-solid fa-trash fa-xl"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            <?php } ?>

                        </tbody>
                    </table>

                    <!-- Pagination links -->
                    <?php
                    // Count total number of records
                    $sql_count = "SELECT COUNT(*) AS total FROM users";
                    $result_count = $con->query($sql_count);
                    $row_count = $result_count->fetch_assoc();
                    $total_pages = ceil($row_count['total'] / $results_per_page);

                    // Display pagination links
                    echo '<ul class="pagination justify-content-center">';
                    for ($i = 1; $i <= $total_pages; $i++) {
                        echo '<li class="page-item ' . ($current_page == $i ? 'active' : '') . '"><a class="page-link" href="index.php?page=' . $i . '">' . $i . '</a></li>';
                    }
                    echo '</ul>';
                    ?>

                </div>
            </div>
        </div>
    </div>

</body>

</html>

<?php
$con->close();
?>