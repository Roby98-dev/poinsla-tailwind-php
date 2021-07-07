<section class="bg-gray-800 pt-10 py-2">
    <div class="justify-center flex">
        <div class="max-w-5xl mx-auto">
            <a href="https://www.instagram.com/poinsla.xyz/" class="text-gray-100 md:mx-4 mx-2 py-5 text-xl">
                <i class="hover:bg-blue-900 rounded-full p-2 hover:text-blue-300 transition duration-300 bx bxl-facebook"></i>
            </a>
            <a href="https://www.instagram.com/poinsla.xyz/" class="text-gray-100 md:mx-4 mx-2 py-5 text-xl">
                <i class="hover:bg-blue-900 rounded-full p-2 hover:text-blue-300 transition duration-300 bx bxl-instagram"></i>
            </a>
            <a href="https://github.com/Roby98-dev" class="text-gray-100 md:mx-4 mx-2 py-5 text-xl">
                <i class="hover:bg-blue-900 rounded-full p-2 hover:text-blue-300 transition duration-300 bx bxl-twitter"></i>
            </a>
            <a class="text-gray-100 md:mx-4 mx-2 py-5 text-xl" href="">
                <i class="hover:bg-blue-900 rounded-full p-2 hover:text-blue-300 transition duration-300 bx bxl-github"></i>
            </a>
            <a class="text-gray-100 md:mx-4 mx-2 py-5 text-xl" href="">
                <i class="hover:bg-blue-900 rounded-full p-2 hover:text-blue-300 transition duration-300 bx bxl-linkedin"></i>
            </a>
        </div>
    </div>
    <div class="md:max-w-xl mx-auto px-4">
        <form action="<?= SITEURL; ?>portfolio-search.php" method="POST">
            <div class="text-center bg-white flex border border-gray-300 rounded-full p-2 shadow my-6 px-4">
                <input type="search" name="search" placeholder="Search..." class="w-full text-xl outline-none px-3">
                <button type="submit" name="submit" value="Search" class="px-2">
                    <i class="bx bx-search pt-2"></i>
                </button>
            </div>
        </form>
    </div>
</section>