<!-- social Section Starts Here -->
<div class="footer-front text-light pt-3 pb-16 md:pb-0">
    <div class="justify-center flex">
        <div class="max-w-5xl mx-auto" x-data="{sosmedData: sosmedsData}">
            <template x-for="sosmed in sosmedData" :key="sosmed">
                <a :href="`${sosmed.link}`" class="text-gray-100 md:mx-4 mx-2 py-5 text-2xl">
                    <i :class="sosmed.icon" class="hover:bg-blue-900 rounded-full p-2 hover:text-blue-300 transition duration-300"></i>
                </a>
            </template>
        </div>
    </div>

    <!-- footer Section Starts Here -->
    <div class="pb-4">
        <div class="container text-center text-gray-200 mt-5">
            <p>&copy; 2019 - <?= date('Y'); ?> All Rights Reserved. Designed By: <a href="https://poinsla.xyz">Poinsla.xyz</a> | v 1.2.10.1 | <a href="<?= SITEURL; ?>admin/"><i class="bx bxs-user"></i></a></p>
        </div>
    </div>
</div>

<!--========== SCROLL TOP ==========-->
<a href="#" class="scrolltop" id="scroll-top">
    <i class="bx bx-up-arrow-alt scrolltop__icon"></i>
</a>

<!-- <script src="<?= SITEURL; ?>assets/js/bootstrap.bundle.min.js"></script> -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script src="<?= SITEURL; ?>assets/vendors/alpine/dist/alpine.js" defer></script>
<script src="<?= SITEURL; ?>assets/vendors/swiperjs/swiper-bundle.min.js"></script>
<script src="<?= SITEURL; ?>assets/js/main.js"></script>
<script src="<?= SITEURL; ?>assets/assets-cv/js/main.js"></script>
<script src="<?= SITEURL; ?>assets/js/poinsla_data.js"></script>
</body>

</html>