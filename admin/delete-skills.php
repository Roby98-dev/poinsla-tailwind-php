<?php
include('../config/constants.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM tbl_skills WHERE id = $id";
    $res = mysqli_query($conn, $sql);

    if ($res == true) {
        $_SESSION['delete'] = "<div class='alert alert-success'>Skills Deleted Successfully.</div>";
?>
        <script>
            window.location = "manage-skills.php";
        </script>
    <?php
    } else {
        $_SESSION['delete'] = "<div class='alert alert-danger'>Failed to Delete Skills.</div>";
    ?>
        <script>
            window.location = "manage-skills.php";
        </script>
    <?php
    }
} else {
    $_SESSION['unauthorize'] = "<div class='alert alert-danger'>Unauthorized Access.</div>";
    ?>
    <script>
        window.location = "manage-skills.php";
    </script>
<?php
}
