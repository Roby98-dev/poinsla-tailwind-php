<?php include('partials/menu.php'); ?>

<div class="main-content">
    <div class="container">
        <h1 class="text-center my-5 text-uppercase">Update Admin</h1>

        <?php
        $id = $_GET['id'];

        $sql = "SELECT * FROM tbl_admin WHERE id = $id";

        $res = mysqli_query($conn, $sql);

        if ($res == true) {
            $count = mysqli_num_rows($res);
            if ($count == 1) {
                $row = mysqli_fetch_assoc($res);

                $full_name = $row['full_name'];
                $username = $row['username'];
                $current_image = $row['image_name'];
            } else {
        ?>
                <script>
                    window.location = "manage-admin.php";
                </script>
        <?php
            }
        }

        ?>

        <div class="row d-flex justify-content-center">
            <div class="col-lg-4 col-md-12 col-sm-12">
                <form action="" method="POST" enctype="multipart/form-data">

                    <table class="tbl-30">
                        <tr>
                            <td>Full Name: </td>
                            <td>
                                <input type="text" name="full_name" value="<?= $full_name; ?>">
                            </td>
                        </tr>

                        <tr>
                            <td>Username: </td>
                            <td>
                                <input type="text" name="username" value="<?= $username; ?>">
                            </td>
                        </tr>

                        <tr>
                            <td>Current Image: </td>
                            <td>
                                <?php
                                if ($current_image != "") {
                                ?>
                                    <img src="<?= SITEURL; ?>images/profile/<?= $current_image; ?>" width="150px">
                                <?php
                                } else {
                                    echo "<div class='alert alert-danger'>Image Not Added.</div>";
                                }
                                ?>
                            </td>
                        </tr>

                        <tr>
                            <td>New Image: </td>
                            <td>
                                <input type="file" name="image">
                            </td>
                        </tr>

                        <tr>
                            <td colspan="2">
                                <input type="hidden" name="id" value="<?= $id; ?>">
                                <input type="submit" name="submit" value="Save update" class="btn-primary my-5">
                            </td>
                        </tr>

                    </table>

                </form>
            </div>
        </div>
    </div>
</div>

<?php

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $full_name = $_POST['full_name'];
    $username = $_POST['username'];
    $current_image = $_POST['current_image'];

    if (isset($_FILES['image']['name'])) {
        $image_name = $_FILES['image']['name'];

        if ($image_name != "") {

            $ext = end(explode('.', $image_name));

            $image_name = "Photo_Profile_Edit" . rand(000, 999) . '.' . $ext;

            $source_path = $_FILES['image']['tmp_name'];

            $destination_path = "../images/profile/" . $image_name;

            $upload = move_uploaded_file($source_path, $destination_path);

            if ($upload == false) {
                $_SESSION['upload'] = "<div class='alert alert-danger'>Failed to Upload Image. </div>";
?>
                <script>
                    window.location = "index.php";
                </script>
                <?php
                die();
            }

            if ($current_image != "") {
                $remove_path = "../images/profile/" . $current_image;

                $remove = unlink($remove_path);

                if ($remove == false) {
                    $_SESSION['failed-remove'] = "<div class='alert alert-danger'>Failed to remove current Image.</div>";
                ?>
                    <script>
                        window.location = "index.php";
                    </script>
        <?php
                    die();
                }
            }
        } else {
            $image_name = $current_image;
        }
    } else {
        $image_name = $current_image;
    }

    $sql2 = "UPDATE tbl_admin SET
        full_name = '$full_name',
        username = '$username',
        image_name = '$image_name'
        WHERE id = '$id'
        ";

    $res2 = mysqli_query($conn, $sql2);

    if ($res2 == true) {
        $_SESSION['update'] = "<div class='alert alert-success'>Admin Updated Successfully.</div>";
        ?>
        <script>
            window.location = "index.php";
        </script>
    <?php
    } else {
        //Failed to Update Admin
        $_SESSION['update'] = "<div class='alert alert-danger'>Failed to Edit Admin.</div>";
    ?>
        <script>
            window.location = "index.php";
        </script>
<?php
    }
}

?>


<?php include('partials/footer.php'); ?>