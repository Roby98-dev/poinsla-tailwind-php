<?php include_once('../config/constants.php'); ?>

<!-- Contact -->
<section class="pb-10" id="contact ">
    <div class="py-10">
        <h1 class="text-center text-green-700 font-semibold text-4xl uppercase">Contact Me</h1>
        <div class="flex justify-center">
            <div class="h-1 w-24 mb-3 bg-green-700"></div>
        </div>
    </div>
    <div class="flex justify-center">
        <div class="grid grid-cols-1 md:grid-cols-2 md:max-w-6xl">
            <div class="shadow-lg mx-4 my-4 bg-gray-500 rounded-lg items-center flex">
                <?php
                if (isset($_SESSION['add'])) {
                    echo $_SESSION['add'];
                    unset($_SESSION['add']);
                }
                ?>
                <div class="p-5 text-gray-200">
                    <p><i class="fas fa-map-marker-alt mr-2"></i> Jl. Legong Keraton, Undisan Kelod, Tembuku, Bangli, Bali, Indonesia</p>
                    <p><i class="fas fa-envelope-open-text mr-2"></i> Roby@poinsla.xyz</p>
                    <p><i class="bx bxl-twitter mr-2"></i> @roby_hjz</p>
                    <p><i class="bx bxl-whatsapp mr-2"></i> +62 813-3755-9615</p>
                </div>
            </div>
            <div class="mx-4">
                <form action="" method="POST" id="contact-form">
                    <div class="mb-3">
                        <label class="block">Name:</label>
                        <input class="w-full px-4 border border-gray-400 rounded p-4 shadow" type="text" name="name" placeholder="Enter your name">
                    </div>
                    <div class="mb-3">
                        <label class="block">Email:</label>
                        <input class="w-full px-4 border border-gray-400 rounded p-4 shadow" type="email" name="email" placeholder="Enter your email">
                    </div>
                    <div class="mb-3">
                        <label class="block">Message:</label>
                        <textarea class="w-full px-4 border border-gray-400 rounded p-4 shadow" name="message" placeholder="Enter your messages"></textarea>
                    </div>
                    <div class="mt-3">
                        <input class="px-4 font-semibold hover:text-black text-gray-200 hover:bg-blue-700 cursor-pointer rounded-full bg-blue-500 w-full shadow-lg" name="submit" type="submit" value="Send">
                    </div>
                </form>
            </div>

            <?php
            if (isset($_POST['submit'])) {
                $name = $_POST['name'];
                $email = $_POST['email'];
                $message = $_POST['message'];

                $sql = "INSERT INTO tbl_message SET 
                    name ='$name',
                    email = '$email',
                    message ='$message'
                ";

                $res = mysqli_query($conn, $sql);

                if ($res == true) {
                    $_SESSION['add'] = "<div class='alert alert-success'>Send message successfully.</div>";
            ?>
                    <script>
                        window.location = "index.php";
                    </script>
                <?php
                } else {
                    $_SESSION['add'] = "<div class='alert alert-danger'>Failed to send message.</div>";
                ?>
                    <script>
                        window.location = "index.php";
                    </script>
            <?php
                }
            }
            ?>
        </div>
    </div>
</section>