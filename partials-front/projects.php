<section class="pb-10">
    <div class="py-10">
        <h1 class="text-center text-green-700 font-semibold text-4xl uppercase">Portfolio</h1>
        <div class="flex justify-center">
            <div class="h-1 w-24 mb-3 bg-green-700"></div>
        </div>
    </div>
    <div class="justify-center md:flex hidden">
        <div class="grid md:grid-cols-2 lg:grid-cols-3 md:max-w-6xl">
            <?php

            $sql2 = "SELECT * FROM tbl_food WHERE active='Yes' AND featured='Yes' ORDER BY id DESC LIMIT 6";

            //Execute the Query
            $res2 = mysqli_query($conn, $sql2);

            //Count Rows
            $count2 = mysqli_num_rows($res2);

            if ($count2 > 0) {
                //Food Available
                while ($row = mysqli_fetch_assoc($res2)) {
                    $id = $row['id'];
                    $title = $row['title'];
                    $price = $row['price'];
                    $description = $row['description'];
                    $image_name = $row['image_name'];
            ?>

                    <div class="w-72 m-5 shadow-lg bg-gray-800 rounded-lg relative">
                        <?php
                        if ($image_name == "") {
                        ?>
                            <a target="blank" href="assets/images/dafault/dafault.jpeg">
                                <div style="background-position: center; background-repeat: no-repeat; background-size: cover; background-image: url('assets/images/dafault/dafault.jpeg');" class="h-60 rounded-t-lg shadow-lg">
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

                        <div class="p-5 pb-5">
                            <div class="font-bold text-3xl text-gray-200"><?= $title; ?></div>
                            <div class="h-1 w-16 mb-3 bg-yellow-400"></div>
                            <h4 class="font-semibold text-gray-200 pb-5"><?= $description; ?></h4>
                            <a href="<?= $price; ?>" class="text-yellow-300 bottom-0 absolute pb-2 font-semibold block tracking-wide">Learn more</i></a>
                        </div>
                    </div>
                <?php
                }
            } else {
                ?>
                <div class=''>Portfolio not available.</div>
            <?php
            }
            ?>
        </div>
    </div>

    <!-- Swiper -->
    <div class="swiper-container md:hidden">
        <div class="swiper-wrapper">
            <?php

            $sql2 = "SELECT * FROM tbl_food WHERE active='Yes' AND featured='Yes' ORDER BY id DESC LIMIT 6";

            //Execute the Query
            $res2 = mysqli_query($conn, $sql2);

            //Count Rows
            $count2 = mysqli_num_rows($res2);

            if ($count2 > 0) {
                //Food Available
                while ($row = mysqli_fetch_assoc($res2)) {
                    $id = $row['id'];
                    $title = $row['title'];
                    $price = $row['price'];
                    $description = $row['description'];
                    $image_name = $row['image_name'];
            ?>
                    <div style="width: 80%; height: 35rem;" class="swiper-slide shadow-lg bg-gray-800 rounded-lg relative">
                        <?php
                        if ($image_name == "") {
                        ?>
                            <a target="blank" href="assets/images/dafault/dafault.jpeg">
                                <div style="background-position: center; background-repeat: no-repeat; background-size: cover; background-image: url('assets/images/dafault/dafault.jpeg');" class="h-60 rounded-t-lg shadow-lg">
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

                        <div class="p-5 pb-5">
                            <div class="font-bold text-3xl text-gray-200"><?= $title; ?></div>
                            <div class="h-1 w-16 mb-3 bg-yellow-400"></div>
                            <h4 class="font-semibold text-gray-200 pb-5"><?= $description; ?></h4>
                            <a href="<?= $price; ?>" class="text-yellow-300 bottom-0 absolute pb-2 font-semibold block tracking-wide">Learn more</i></a>
                        </div>
                    </div>
                <?php
                }
            } else {
                ?>
                <div class=''>Portfolio not available.</div>
            <?php
            }
            ?>
        </div>
    </div>

    <div>
        <p class="text-center mt-5">
            <a class="text-gray-200 bg-blue-500 shadow-lg hover:bg-blue-600 px-3 py-1 rounded-full" href="<?= SITEURL; ?>portfolios.php">See All My Work</a>
        </p>
    </div>
</section>