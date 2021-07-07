<?php include_once('partials-front/menu.php'); ?>
<?php include_once('partials-front/search-top.php'); ?>
<?php include_once('partials-front/nav.php'); ?>

<section class="pb-10">
    <div class="py-10">
        <h1 class="text-center text-green-700 font-semibold text-4xl uppercase">Portfolio</h1>
        <div class="flex justify-center">
            <div class="h-1 w-24 mb-3 bg-green-700"></div>
        </div>
    </div>
    <div class="justify-center flex">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3">

            <?php
            $sql = "SELECT * FROM tbl_food WHERE active='Yes' ORDER BY id DESC";

            $res = mysqli_query($conn, $sql);

            $count = mysqli_num_rows($res);

            if ($count > 0) {
                while ($row = mysqli_fetch_assoc($res)) {
                    $id = $row['id'];
                    $title = $row['title'];
                    $description = $row['description'];
                    $price = $row['price'];
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
                        <div class="px-4 text-center pb-4">
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
                //Food not Available
                echo "<div class='error'>Food not found.</div>";
            }
            ?>





            <div class="clearfix"></div>



        </div>
    </div>
</section>

<?php include('partials-front/footer.php'); ?>