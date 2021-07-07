<?php
include('../config/constants.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM tbl_message WHERE id = $id";
    $res = mysqli_query($conn, $sql);

    if ($res == true) {
        $_SESSION['delete-message'] = "<div class='alert alert-success'>Message Deleted Successfully.</div>";
?>
        <script>
            window.location = "index.php";
        </script>
    <?php
    } else {
        $_SESSION['delete-message'] = "<div class='alert alert-danger'>Failed to Delete Message.</div>";
    ?>
        <script>
            window.location = "index.php";
        </script>
    <?php
    }
} else {
    $_SESSION['unauthorize'] = "<div class='alert alert-danger'>Unauthorized Access.</div>";
    ?>
    <script>
        window.location = "index.php";
    </script>
<?php
}
