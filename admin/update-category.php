<?php include('partials/menu.php'); ?>

<div class="main-content">
    <h1 class="text-uppercase text-center my-5">Update Category</h1>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <?php
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                //Create SQL Query to get all other details
                $sql = "SELECT * FROM tbl_category WHERE id = $id";

                //Execute the Query
                $res = mysqli_query($conn, $sql);

                //Count the Rows to check whether the id is valid or not
                $count = mysqli_num_rows($res);

                if ($count == 1) {
                    //Get all the data
                    $row = mysqli_fetch_assoc($res);
                    $title = $row['title'];
                    $current_image = $row['image_name'];
                    $featured = $row['featured'];
                    $active = $row['active'];
                } else {
                    //redirect to manage category with session message
                    $_SESSION['no-category-found'] = "<div class='alert alert-danger'>Category not Found.</div>";
            ?>
                    <script>
                        window.location = "manage-category.php";
                    </script>
                <?php
                }
            } else {
                // Redirect to Manage Category
                ?>
                <script>
                    window.location = "manage-category.php";
                </script>
            <?php
            }

            ?>
            <div class="col-lg-4 col-md-12 col-sm-12">
                <form action="" method="POST" enctype="multipart/form-data">
                    <table class="tbl-30">
                        <tr>
                            <td>Title: </td>
                            <td>
                                <input type="text" name="title" value="<?= $title; ?>">
                            </td>
                        </tr>

                        <tr>
                            <td>Current Image: </td>
                            <td>
                                <?php
                                if ($current_image != "") {
                                ?>
                                    <img src="<?= SITEURL; ?>images/category/<?= $current_image; ?>" width="150px">
                                <?php
                                } else {
                                    echo "<div class='error'>Image Not Added.</div>";
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
                            <td>Featured: </td>
                            <td>
                                <input <?php if ($featured == "Yes") {
                                            echo "checked";
                                        } ?> type="radio" name="featured" value="Yes"> Yes

                                <input <?php if ($featured == "No") {
                                            echo "checked";
                                        } ?> type="radio" name="featured" value="No"> No
                            </td>
                        </tr>

                        <tr>
                            <td>Active: </td>
                            <td>
                                <input <?php if ($active == "Yes") {
                                            echo "checked";
                                        } ?> type="radio" name="active" value="Yes"> Yes

                                <input <?php if ($active == "No") {
                                            echo "checked";
                                        } ?> type="radio" name="active" value="No"> No
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <input type="hidden" name="current_image" value="<?= $current_image; ?>">
                                <input type="hidden" name="id" value="<?= $id; ?>">
                                <input type="submit" name="submit" value="Update Category" class="btn my-5 btn-primary">
                            </td>
                        </tr>

                    </table>

                </form>
            </div>
        </div>


        <?php
        if (isset($_POST['submit'])) {

            $id = $_POST['id'];
            $title = $_POST['title'];
            $current_image = $_POST['current_image'];
            $featured = $_POST['featured'];
            $active = $_POST['active'];

            if (isset($_FILES['image']['name'])) {
                $image_name = $_FILES['image']['name'];

                if ($image_name != "") {

                    $ext = end(explode('.', $image_name));

                    $image_name = "Food_Category_" . rand(000, 999) . '.' . $ext;


                    $source_path = $_FILES['image']['tmp_name'];

                    $destination_path = "../images/category/" . $image_name;

                    $upload = move_uploaded_file($source_path, $destination_path);

                    if ($upload == false) {
                        $_SESSION['upload'] = "<div class='alert alert-danger'>Failed to Upload Image. </div>";
        ?>
                        <script>
                            window.location = "manage-category.php";
                        </script>
                        <?php
                        die();
                    }

                    if ($current_image != "") {
                        $remove_path = "../images/category/" . $current_image;

                        $remove = unlink($remove_path);

                        if ($remove == false) {
                            $_SESSION['failed-remove'] = "<div class='alert alert-danger'>Failed to remove current Image.</div>";
                        ?>
                            <script>
                                window.location = "manage-category.php";
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

            //3. Update the Database
            $sql2 = "UPDATE tbl_category SET 
                    title = '$title',
                    image_name = '$image_name',
                    featured = '$featured',
                    active = '$active' 
                    WHERE id=$id
                ";

            //Execute the Query
            $res2 = mysqli_query($conn, $sql2);

            if ($res2 == true) {
                //Category Updated
                $_SESSION['update'] = "<div class='alert alert-success'>Category Updated Successfully.</div>";
                ?>
                <script>
                    window.location = "manage-category.php";
                </script>
            <?php
            } else {
                //failed to update category
                $_SESSION['update'] = "<div class='alert alert-danger'>Failed to Update Category.</div>";
            ?>
                <script>
                    window.location = "manage-category.php";
                </script>
        <?php
            }
        }

        ?>

    </div>
</div>

<?php include('partials/footer.php'); ?>