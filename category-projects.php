    <?php include_once('partials-front/menu.php'); ?>
    <?php include_once('partials-front/nav.php'); ?>

    <?php
    if (isset($_GET['category_id'])) {
        $category_id = $_GET['category_id'];
        $sql = "SELECT title FROM tbl_category WHERE id=$category_id";

        $res = mysqli_query($conn, $sql);

        $row = mysqli_fetch_assoc($res);

        $category_title = $row['title'];
    } else {
        header('location:' . SITEURL);
    }
    ?>

    <section class="text-center bg-gray-500 py-5">
        <div class="mx-auto">
            <h2>
                <p class="text-gray-100 text-xl">"<?= $category_title; ?>"</p>
            </h2>
            <div class="flex justify-center">
                <div class="h-1 w-24 mb-3 bg-green-700"></div>
            </div>
        </div>
    </section>

    <section class="justify-center flex">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3">

            <?php

            $sql2 = "SELECT * FROM tbl_food WHERE category_id=$category_id ORDER BY id DESC";

            $res2 = mysqli_query($conn, $sql2);

            $count2 = mysqli_num_rows($res2);

            if ($count2 > 0) {

                while ($row2 = mysqli_fetch_assoc($res2)) {
                    $id = $row2['id'];
                    $title = $row2['title'];
                    $price = $row2['price'];
                    $description = $row2['description'];
                    $image_name = $row2['image_name'];
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
                ?>
                <div class='alert alert-danger'>Food not available.</div>
            <?php
            }
            ?>
        </div>
    </section>

    <?php include('partials-front/footer.php'); ?>