<?php

session_start();
$email = $_SESSION['email'];
if (empty($_SESSION['email'])) {
    header("Location:http://localhost/user_management/index.php");
}

include('connection.php');
$sql = "SELECT * FROM `Customer_Account`";
$result = mysqli_query($conn, $sql);


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Activity</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <div class="kkk">
        <?php
        include('adminNavbar.php');
        ?>
    </div>

    <div class="mt-1 pt-1">
        <h3 style="text-align: center; font-weight: bold;">Form one  Activity</h3>
        <hr>
    </div>

    <div class="px-2" style="text-align: center;">
        <div class="table-responsive">
            <table class="table table-striped  table-hover">
                <tr>
                    <th>Id</th>
                    <th>Name of customer</th>
                    <th>Bank Name</th>
                    <th>Account No</th>
                    <th>Status</th>
                    <th colspan="3" style="text-align: center;">Operation </th>

                </tr>

                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                ?>

                    <tr>
                    <td><?php echo $row['Id']; ?></td>
                        <td><?php echo $row['cuNameCustomer']; ?></td>
                        <td><?php echo $row['cuBankName']; ?></td>
                        <td><?php echo $row['cuAccountNo']; ?></td>
                        <td><?php echo $row['status']; ?></td>
                        <td><a href="http://localhost/user_management/Pages/Admin/ViewOne.php?id=<?php echo $row['Id']; ?>"><button class="btn btn-info">View</button></a></td>
                        <td><a href="http://localhost/user_management/Pages/Admin/UpdateViewOne.php?id=<?php echo $row['Id']; ?>"><button class="btn btn-success">Update</button></a></td>
                        <td><a href="http://localhost/user_management/Pages/Admin/deleteFormOne.php?id=<?php echo $row['Id']; ?>"><button class="btn btn-danger" onclick="confirmDelete(event)">X</button></a></td>
                    </tr>

                <?php
                }
                ?>
            </table>
        </div>
    </div>
    <br><br><br><br><br><br><br><br><br><br>
    <div class="bg-black py-2">
        <?php
        include('adminFooter.php');
        ?>
    </div>

    <!-- Bootstrap Js CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>

</body>

</html>



<script>
    function confirmDelete(event) {
        event.preventDefault();

        if (confirm("Are you sure you want to delete this user?")) {
            // User confirmed, proceed to the delete page
            const deleteUrl = event.target.parentElement.href; // Get the delete page URL
            window.location.href = deleteUrl;
        } else {
            // User canceled, do nothing
        }
    }
</script>