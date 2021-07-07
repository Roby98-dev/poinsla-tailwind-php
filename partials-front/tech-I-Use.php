<section class="bg-gray-200 pb-10">
    <div class="py-10">
        <h1 class="text-center text-green-700 font-semibold text-4xl uppercase">Tech I Use</h1>
        <div class="flex justify-center">
            <div class="h-1 w-24 mb-3 bg-green-700"></div>
        </div>
    </div>
    <div class="justify-center flex md:max-w-6xl md:mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4">

            <?php
            $sql = "SELECT * FROM tbl_category WHERE active='Yes' AND featured='Yes' ORDER BY id DESC LIMIT 4";

            $res = mysqli_query($conn, $sql);
            $count = mysqli_num_rows($res);

            if ($count > 0) {

                while ($row = mysqli_fetch_assoc($res)) {

                    $id = $row['id'];
                    $title = $row['title'];
                    $image_name = $row['image_name'];
            ?>

                    <div class="mt-3 mx-4">
                        <a href="<?= SITEURL; ?>category-projects.php?category_id=<?= $id; ?>">
                            <div class=" w-52 hover:bg-gray-400 transition duration-300 bg-gray-600 shadow-lg p-2 rounded-lg">
                                <div class="card-body border border-blue-500">
                                    <h4 class="title text-gray-200 hover:text-black font-semibold text-center uppercase mt-2 mb-2"><?= $title; ?></h4>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php
                }
            } else {
                ?>
                <div class='alert alert-danger'>Category not Added.</div>
            <?php
            }
            ?>
        </div>
    </div>
</section>