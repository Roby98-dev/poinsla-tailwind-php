<section class="bg-gray-100 h-36">
    <div class="relative bottom-20 mx-2 rounded-xl md:max-w-6xl md:mx-auto bg-gray-800">
        <div class="flex justify-center p-6 pt-4">
            <div class="bg-gray-600 h-1 w-20"></div>
        </div>
        <div class="pb-12">
            <div class="justify-center flex">
                <div class="max-w-5xl mx-auto" x-data="{sosmedData: sosmedsData}">
                    <template x-for="sosmed in sosmedData" :key="sosmed">
                        <a :href="`${sosmed.link}`" class="text-gray-100 md:mx-4 mx-2 py-5 text-2xl">
                            <i :class="sosmed.icon" class="hover:bg-blue-900 rounded-full p-2 hover:text-blue-300 transition duration-300"></i>
                        </a>
                    </template>
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
        </div>
    </div>
</section>