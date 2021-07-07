<?php include('partials/menu.php'); ?>

<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql2 = "SELECT * FROM tbl_skills WHERE id = $id";
    $res2 = mysqli_query($conn, $sql2);

    $row2 = mysqli_fetch_assoc($res2);

    $title = $row2['title'];
    $percent = $row2['percent'];
    $active = $row2['active'];
} else {
?>
    <script>
        window.location = "manage-skills.php";
    </script>
<?php
}
?>


<div class="main-content">
    <h1 class="text-uppercase text-center mt-5">Update Skills</h1>
    <div class="container">
        <br><br>
        <div class="row d-flex justify-content-center py-5">
            <div class="col-lg-4 col-md-12 col-sm-12">
                <form action="" method="POST">
                    <table class="tbl-30">
                        <tr>
                            <td>Title: </td>
                            <td>
                                <input type="text" name="title" value="<?= $title; ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Percent: </td>
                            <td>
                                <input type="number" name="percent" value="<?= $percent; ?>">
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
                                <input type="hidden" name="id" value="<?= $id; ?>">
                                <input type="submit" name="submit" value="Update Skills" class="btn-primary btn mt-5">
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
            $percent = $_POST['percent'];
            $active = $_POST['active'];

            $sql3 = "UPDATE tbl_skills SET 
                    title = '$title',
                    percent = $percent,
                    active = '$active'
                    WHERE id = $id
                ";

            $res3 = mysqli_query($conn, $sql3);

            if ($res3 == true) {
                $_SESSION['update'] = "<div class='success alert alert-success'>Skills Updated Successfully.</div>";
        ?>
                <script>
                    window.location = "manage-skills.php";
                </script>
            <?php
            } else {
                $_SESSION['update'] = "<div class='error alert alert-danger'>Failed to Update Skills.</div>";
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