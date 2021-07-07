<?php
include('partials/menu.php');

//Sql Query 
$sql = "SELECT * FROM tbl_category";
//Execute Query
$res = mysqli_query($conn, $sql);
//Count Rows
$count = mysqli_num_rows($res);

//Sql Query 
$sql2 = "SELECT * FROM tbl_food";
//Execute Query
$res2 = mysqli_query($conn, $sql2);
//Count Rows
$count2 = mysqli_num_rows($res2);

//Sql Query 
$sql3 = "SELECT * FROM tbl_skills";
//Execute Query
$res3 = mysqli_query($conn, $sql3);
//Count Rows
$count3 = mysqli_num_rows($res3);

//Sql Query 
$sql4 = "SELECT * FROM tbl_message";
//Execute Query
$res4 = mysqli_query($conn, $sql4);
//Count Rows
$count4 = mysqli_num_rows($res4);
?>

<!-- Main Content Section Starts -->
<div class="container text-uppercase">
    <h1 class="text-center mt-5 mb-5">Dashboard</h1>

    <?php
    if (isset($_SESSION['login'])) {
        echo $_SESSION['login'];
        unset($_SESSION['login']);
    }
    ?>

    <div class="row mt-5 mb-5">
        <div class="col-lg-3 col-md-12 col-sm-12 mt-3">
            <div class="card bg-dark text-light text-center py-3">
                <h1>
                    <?= $count; ?>
                </h1>
                <p>Categories</p>
            </div>
        </div>
        <div class="col-lg-3 col-md-12 col-sm-12 mt-3">
            <div class="card bg-dark text-light text-center py-3">
                <h1>
                    <?= $count2; ?>
                </h1>
                <p>Portfolio</p>
            </div>
        </div>
        <div class="col-lg-3 col-md-12 col-sm-12 mt-3">
            <div class="card bg-dark text-light text-center py-3">
                <h1>
                    <?= $count3; ?>
                </h1>
                <p>Total Skills</p>
            </div>
        </div>
        <div class="col-lg-3 col-md-12 col-sm-12 mt-3">
            <div class="card bg-dark text-light text-center py-3">
                <h1>
                    <?= $count4; ?>
                </h1>
                <p>Total Message</p>
            </div>
        </div>
    </div>
</div>
<!-- Main Content Setion Ends -->

<!-- Main Content Section Starts -->
<div class="container">
    <h1 class="text-center mt-5 text-uppercase">Manage Admin</h1>
    <a href="add-admin.php" class="btn btn-primary mt-2 mb-3">Add Admin</a>
    <div class="row">

        <?php
        if (isset($_SESSION['add'])) {
            echo $_SESSION['add'];
            unset($_SESSION['add']);
        }

        if (isset($_SESSION['delete'])) {
            echo $_SESSION['delete'];
            unset($_SESSION['delete']);
        }

        if (isset($_SESSION['update'])) {
            echo $_SESSION['update'];
            unset($_SESSION['update']);
        }

        if (isset($_SESSION['user-not-found'])) {
            echo $_SESSION['user-not-found'];
            unset($_SESSION['user-not-found']);
        }

        if (isset($_SESSION['pwd-not-match'])) {
            echo $_SESSION['pwd-not-match'];
            unset($_SESSION['pwd-not-match']);
        }

        if (isset($_SESSION['change-pwd'])) {
            echo $_SESSION['change-pwd'];
            unset($_SESSION['change-pwd']);
        }
        if (isset($_SESSION['upload'])) {
            echo $_SESSION['upload'];
            unset($_SESSION['upload']);
        }
        ?>

        <!-- Button to Add Admin -->

        <div class="table-responsive mb-5">
            <table class="table-hover table">
                <tr class="table-dark">
                    <th>#</th>
                    <th>Full Name</th>
                    <th>Username</th>
                    <th class="text-center">Photo</th>
                    <th class="text-center">Action</th>
                </tr>

                <?php
                $sql = "SELECT * FROM tbl_admin ORDER BY id DESC";
                $res = mysqli_query($conn, $sql);

                if ($res == TRUE) {
                    $count = mysqli_num_rows($res);

                    $no = 1;

                    if ($count > 0) {
                        while ($rows = mysqli_fetch_assoc($res)) {
                            $id = $rows['id'];
                            $full_name = $rows['full_name'];
                            $username = $rows['username'];
                            $profile = $rows['image_name'];
                ?>

                            <tr>
                                <td><?= $no++; ?>. </td>
                                <td><?= $full_name; ?></td>
                                <td><?= $username; ?></td>
                                <td class="text-center">
                                    <?php
                                    if ($profile == "") {
                                    ?>
                                        <img class="img-fluid img-thumbnail rounded-circle" src="../assets/images/default/default.jpg" width="100px">
                                    <?php
                                    } else {
                                    ?>
                                        <a target="blank" href="<?= SITEURL; ?>images/profile/<?= $profile; ?>">
                                            <img class="img-fluid rounded-circle" src="<?= SITEURL; ?>images/profile/<?= $profile; ?>" width="100px">
                                        </a>
                                    <?php
                                    }
                                    ?>
                                </td>
                                <td class="text-center">
                                    <a href="<?= SITEURL; ?>admin/update-admin.php?id=<?= $id; ?>" class="badge btn-secondary">Edit</a>
                                    <a href="<?= SITEURL; ?>admin/update-password.php?id=<?= $id; ?>" class="badge btn-primary">Reset password</a>
                                    <a href="<?= SITEURL; ?>admin/delete-admin.php?id=<?= $id; ?>" class="badge btn-danger">Delete</a>
                                </td>
                            </tr>

                <?php
                        }
                    } else {
                        echo "Data not found";
                    }
                }
                ?>
            </table>
        </div>

    </div>
</div>
<!-- Main Content Setion Ends -->

<?php include('tbl_msgs.php') ?>
<?php include('partials/footer.php') ?>