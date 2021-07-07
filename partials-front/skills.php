<!-- Skills section start -->
<section id="skills" class="pb-10 bg-gray-200">
    <div class="py-10">
        <h1 class="text-center text-green-700 font-semibold text-4xl uppercase">Skills</h1>
        <div class="flex justify-center">
            <div class="h-1 w-24 mb-3 bg-green-700"></div>
        </div>
    </div>
    <div x-data="{ width: '50' }" x-init="$watch('width', value => { if (value > 100) { width = 100 } if (value == 0) { width = 10 } })">
        <div class="grid grid-cols-1 md:grid-cols-2 justify-center mx-auto md:max-w-6xl"">

            <?php
            $sql = "SELECT * FROM tbl_skills WHERE active = 'Yes' ORDER BY id DESC LIMIT 6";

            $res = mysqli_query($conn, $sql);

            $count = mysqli_num_rows($res);

            if ($count > 0) {
                while ($row = mysqli_fetch_assoc($res)) {
                    $id = $row['id'];
                    $title = $row['title'];
                    $percent = $row['percent'];
                    $active = $row['active'];
            ?>

        <div class=" bg-white p-5 shadow-lg rounded-lg m-4">
            <h5 class="uppercase"><?= $title; ?></h5>
            <div class="bg-gray-200 rounded h-6 mt-5" role=" progressbar" :aria-valuenow="<?= $percent; ?>" aria-valuemin="0" aria-valuemax="100">
                <div class="bg-green-400 rounded h-6 text-center text-white text-sm" style="width: <?= $percent; ?>%;"><?= $percent; ?>%</div>
            </div>
        </div>
    <?php
                }
            } else {
    ?>
    <div class='alert alert-danger'>Skills not available.</div>
<?php
            }
?>
    </div>
    </div>
</section>
<!-- Skills section end -->