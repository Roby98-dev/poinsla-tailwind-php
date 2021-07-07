<?php
include('partials/menu.php'); ?>

<!-- Main Content Section Starts -->
<div class="container">
    <h1 class="text-center mt-5 text-uppercase">Manage Skills</h1>
    <a href="add-skills.php" class="btn btn-primary mt-2 mb-3">Add Skills</a>
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
        ?>

        <!-- Button to Add Admin -->

        <br /><br />

        <div class="table-responsive mb-5">
            <table class="table">
                <tr class="table-dark">
                    <th>#</th>
                    <th>Title</th>
                    <th>Percent</th>
                    <th>Active</th>
                    <th class="text-center">Action</th>
                </tr>

                <?php
                $sql = "SELECT * FROM tbl_skills ORDER BY id DESC";
                $res = mysqli_query($conn, $sql);

                if ($res == TRUE) {
                    $count = mysqli_num_rows($res);

                    $no = 1;

                    if ($count > 0) {
                        while ($rows = mysqli_fetch_assoc($res)) {
                            $id = $rows['id'];
                            $title = $rows['title'];
                            $percent = $rows['percent'];
                            $active = $rows['active'];
                ?>

                            <tr>
                                <td><?= $no++; ?>. </td>
                                <td class="text-uppercase"><?= $title; ?></td>
                                <td><?= $percent; ?>%</td>
                                <td><?= $active; ?></td>
                                <td class="text-center">
                                    <a href="<?= SITEURL; ?>admin/update-skills.php?id=<?= $id; ?>" class="badge btn-secondary">Edit</a>
                                    <a href="<?= SITEURL; ?>admin/delete-skills.php?id=<?= $id; ?>" class="badge btn-danger">Delete</a>
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

<?php include('partials/footer.php'); ?>