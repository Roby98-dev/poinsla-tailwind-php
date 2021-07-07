<!-- Main Content Section Starts -->
<div class="container">
    <h1 class="text-center my-5 text-uppercase">Messages</h1>
    <div class="row">
        <?php
        if (isset($_SESSION['delete-message'])) {
            echo $_SESSION['delete-message'];
            unset($_SESSION['delete-message']);
        }
        ?>
        <!-- Button to Add Admin -->
        <div class="table-responsive mb-5">
            <table class="table table-hover">
                <tr class="table-dark">
                    <th>#</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th class="text-center">Action</th>
                </tr>

                <?php
                $sql = "SELECT * FROM tbl_message ORDER BY id DESC";
                $res = mysqli_query($conn, $sql);

                if ($res == TRUE) {
                    $count = mysqli_num_rows($res);

                    $no = 1;

                    if ($count > 0) {
                        while ($rows = mysqli_fetch_assoc($res)) {
                            $id = $rows['id'];
                            $name = $rows['name'];
                            $email = $rows['email'];
                            $message = $rows['message'];
                ?>

                            <tr>
                                <td><?= $no++; ?>. </td>
                                <td><?= $name; ?></td>
                                <td><?= $email; ?></td>
                                <td><?= $message; ?></td>
                                <td class="text-center">
                                    <a href="<?= SITEURL; ?>admin/delete-message.php?id=<?= $id; ?>" class="badge btn-danger">Delete</a>
                                </td>
                            </tr>
                <?php
                        }
                    } else {
                        echo "Message not found";
                    }
                }
                ?>
            </table>
        </div>

    </div>
</div>
<!-- Main Content Setion Ends -->