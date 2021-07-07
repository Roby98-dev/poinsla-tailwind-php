<?php include('partials-front/menu.php'); ?>
<?php include_once('partials-front/nav.php'); ?>

<section class="pb-10">
    <div class="py-10">
        <h1 class="text-center text-green-700 font-semibold text-4xl uppercase">Explore Tech</h1>
        <div class="flex justify-center">
            <div class="h-1 w-24 mb-3 bg-green-700"></div>
        </div>
    </div>
    <div class="flex justify-center">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 md:max-w-6xl">

            <?php
            $sql = "SELECT * FROM tbl_category WHERE active='Yes' ORDER BY id DESC";

            $res = mysqli_query($conn, $sql);

            $count = mysqli_num_rows($res);

            if ($count > 0) {
                while ($row = mysqli_fetch_assoc($res)) {
                    $id = $row['id'];
                    $title = $row['title'];
                    $image_name = $row['image_name'];
            ?>

                    <div class="w-72 m-5 shadow-lg bg-gray-800 rounded-lg">
                        <a href="<?= SITEURL; ?>category-projects.php?category_id=<?= $id; ?>">
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
                                <a target="blank" href="<?= SITEURL; ?>images/category/<?= $image_name; ?>">
                                    <div style="background-position: center; background-repeat: no-repeat; background-size: cover; background-image: url('<?= SITEURL; ?>images/category/<?= $image_name; ?>');" class="h-60 rounded-t-lg shadow-lg">
                                    </div>
                                </a>
                            <?php
                            }
                            ?>
                            <div class="">
                                <h4 class="my-2 text-uppercase text-center text-white"><?= $title; ?></h4>
                            </div>
                        </a>
                    </div>

            <?php
                }
            } else {
                echo "<div class='error'>Category not found.</div>";
            }
            ?>
        </div>
    </div>
</section>
<!-- Categories Section Ends Here -->

<?php include('partials-front/footer.php'); ?>