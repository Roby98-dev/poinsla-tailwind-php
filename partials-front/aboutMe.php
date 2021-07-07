<section class="py-5">
    <div class="pt-10">
        <h1 class="text-center text-green-700 font-semibold text-4xl uppercase">About Me</h1>
        <div class="flex justify-center">
            <div class="h-1 w-24 bg-green-700"></div>
        </div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 my-5 mb-20 pt-3 rounded-lg md:bg-gray-100 md:max-w-6xl md:mx-auto">
        <div class="flex justify-center mb-4">
            <img class="about-image rounded-lg shadow-lg" src="<?= SITEURL; ?>assets/images/about/about-me.jpeg" alt="Roby Adi Putra">
        </div>
        <div class="p-5 md:px-10">
            <h3 class="about-name mb-5 lg:max-w-5xl">I'am Roby</h3>
            <p class="mb-5">Hei! My name is Roby, I'am a Web Developer. I have 2 years of experience on building webistes using HTML, CSS, JavaScript and WordPress. I also able to developing website using Frameworks, such as Bootstrap, React and any others technology.</p>
            <a class="bg-blue-500 hover:bg-blue-600 px-4 py-1 text-gray-200 font-semibold rounded-full uppercase my-5 shadow-lg" href="<?= SITEURL; ?>contact.php">Contact Now!</a>
            <a target="blank" class="bg-green-500 hover:bg-green-600 font-semibold px-4 py-1 text-gray-200 rounded-full uppercase my-5 shadow-lg" href="<?= SITEURL; ?>cv.php">Resume</a>
        </div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-3 my-5 md:max-w-6xl md:mx-auto" x-data="{aboutData: aboutMeData}">
        <template x-for="about in aboutData" :key="about">
            <div data-aos="fade-up" data-aos-duration="1000" class="shadow-lg rounded-lg mb-5 w-72 mx-auto bg-gray-600 p-5 text-gray-200">
                <img :src="about.image" :alt="about.alt" class="mx-auto w-40 p-5">
                <div x-text="about.desc"></div>
            </div>
        </template>
    </div>
</section>