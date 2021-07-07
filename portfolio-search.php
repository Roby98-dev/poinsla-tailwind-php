<?php include('partials-front/menu.php'); ?>
<?php include('partials-front/nav.php'); ?>

<section class="text-center bg-gray-500 py-5">
    <div class="mx-auto">
        <?php $search = $_POST['search']; ?>
        <h2 class="text-white">Your Search For: <p class="text-white mt-1">"<?= $search; ?>"</p>
        </h2>
        <div class="flex justify-center">
            <div class="h-1 w-24 mb-3 bg-green-700"></div>
        </div>
    </div>
</section>

<section class="project bg-dark pt-4 pb-4">
    <div class="container">
        <div class="flex justify-center py-10">

            <?php

            $sql = "SELECT * FROM tbl_food WHERE title LIKE '%$search%' OR description LIKE '%$search%' ORDER BY id DESC";

            $res = mysqli_query($conn, $sql);

            $count = mysqli_num_rows($res);

            if ($count > 0) {
                while ($row = mysqli_fetch_assoc($res)) {
                    $id = $row['id'];
                    $title = $row['title'];
                    $price = $row['price'];
                    $description = $row['description'];
                    $image_name = $row['image_name'];
            ?>

                    <div class="w-72 m-5 shadow-lg bg-gray-800 rounded-lg">
                        <?php
                        if ($image_name == "") {
                        ?>
                            <a target="blank" href="assets/images/dafault/dafault.jpeg">
                                <div style="background-position: center; background-repeat: no-repeat; background-size: cover; background-image: url('assets/images/dafault/dafault.jpeg');" class="h-60 rounded-lg shadow-lg">
                                </div>
                            </a>
                        <?php
                        } else {
                        ?>
                            <a target="blank" href="<?= SITEURL; ?>images/food/<?= $image_name; ?>">
                                <div style="background-position: center; background-repeat: no-repeat; background-size: cover; background-image: url('<?= SITEURL; ?>images/food/<?= $image_name; ?>');" class="h-60 rounded-t-lg shadow-lg">
                                </div>
                            </a>
                        <?php
                        }
                        ?>
                        <div class="px-4 pb-4 text-center">
                            <h5 class="mt-3 uppercase text-gray-100"><?= $title; ?></h5>
                            <p class="text-blue-200 py-4">
                                <?= $description; ?>
                            </p>
                            <a href="<?= $price; ?>" class="bg-blue-500 rounded-full px-4 mt-4">Visit now!</a>
                        </div>
                    </div>
            <?php
                }
            } else {
                echo "<div class='alert alert-danger'>Item not found.</div>";
            }

            ?>
        </div>
    </div>
</section>

<?php include('partials-front/footer.php'); ?>