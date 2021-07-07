<?php include('partials/menu.php'); ?>

<div class="container">
    <h1 class="text-center mt-5 text-uppercase">Add Skills</h1>

    <br><br>

    <?php
    if (isset($_SESSION['add'])) {
        echo $_SESSION['add'];
        unset($_SESSION['add']);
    }
    ?>

    <div class="row justify-content-center">
        <div class="col-lg-4 col-md-12 col-sm-12 mb-5">
            <form action="" method="POST">
                <div class="mb-3">
                    <label class="form-label">Title: </label>
                    <input class="form-control" type="text" name="title" placeholder="Skills Title">
                </div>
                <div class="mb-3">
                    <label class="form-label">Percent: </label>
                    <input class="form-control" type="number" name="percent" placeholder="Skills Percent">
                </div>
                <div class="mb-3">
                    <label class="form-label">Active: </label>
                    <input class="form-check-input" type="radio" name="active" value="Yes"> Yes
                    <input class="form-check-input" type="radio" name="active" value="No"> No
                </div>
                <div class="col-auto">
                    <input type="submit" name="submit" value="Add Skills" class="btn btn-primary">
                </div>
            </form>
            <!-- Add Category Form Ends -->
        </div>

        <?php
        if (isset($_POST['submit'])) {
            $title = $_POST['title'];
            $percent = $_POST['percent'];

            if (isset($_POST['active'])) {
                $active = $_POST['active'];
            } else {
                $active = "No";
            }

            $sql = "INSERT INTO tbl_skills SET 
                    title ='$title',
                    percent = $percent,
                    active ='$active'
                ";

            $res = mysqli_query($conn, $sql);

            if ($res == true) {
                $_SESSION['add'] = "<div class='alert alert-success'>Skills Added Successfully.</div>";
        ?>
                <script>
                    window.location = "manage-skills.php";
                </script>
            <?php
            } else {
                $_SESSION['add'] = "<div class='alert alert-danger'>Failed to Add Skills.</div>";
            ?>
                <script>
                    window.location = "manage-skills.php";
                </script>
        <?php
            }
        }
        ?>
    </div>
</div>

<?php include('partials/footer.php'); ?>