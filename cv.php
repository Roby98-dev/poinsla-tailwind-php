<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume CV</title>

    <link rel="stylesheet" href="assets/boxicons/css/boxicons.min.css">
    <link rel="stylesheet" href="assets/assets-cv/css/style.css">
</head>

<body>
    <!--========== HEADER ==========-->
    <header class="l-header" id="header">
        <nav class="nav bd-container">
            <a href="#" class="nav__logo">Roby Adi Putra</a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="#home" class="nav__link">
                            <i class="bx bx-home nav__icon active-link"></i> Home
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#profile" class="nav__link">
                            <i class="bx bx-user nav__icon"></i> Profile
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#education" class="nav__link">
                            <i class="bx bx-book nav__icon"></i> Education
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#skills" class="nav__link">
                            <i class="bx bx-receipt nav__icon"></i> Skills
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#experience" class="nav__link">
                            <i class="bx bx-briefcase-alt nav__icon"></i> Experience
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#certificates" class="nav__link">
                            <i class="bx bx-award nav__icon"></i> Certificates
                        </a>
                    </li>
                    <!-- <li class="nav__item">
                        <a href="#certificates" class="nav__link">
                            <i class="bx bx-link-external nav__icon"></i> References
                        </a>
                    </li> -->
                </ul>
            </div>

            <div class="nav__toggle" id="nav-toggle">
                <i class="bx bx-grid-alt"></i>
            </div>
        </nav>
    </header>

    <main class="l-main bd-container">
        <!-- All elements within this div, is generated in PDF -->
        <div class="resume" id="area-cv">
            <div class="resume__left">
                <!--========== HOME ==========-->
                <section class="home" id="home">
                    <div class="home__container section bd-grid">
                        <div class="home__data bd-grid">
                            <img class="home__img" src="assets/assets-cv/images/profile.jpeg" alt="">
                            <h1 class="home__title">Roby Adi Putra</h1>
                            <h3 class="home__profession">Web Developer</h3>

                            <div>
                                <a download="" href="#" class="home__button-movil">Download</a>
                            </div>
                        </div>

                        <div class="home__address bd-grid">
                            <span class="home__information">
                                <i class="bx bx-map home__icon"></i> Bangli, Bali, Indonesia.
                            </span>
                            <span class="home__information">
                                <i class="bx bx-envelope home__icon"></i> roby.hjz@gmail.com
                            </span>
                            <span class="home__information">
                                <i class="bx bx-phone home__icon"></i> +62 813-3775-9615
                            </span>
                        </div>
                    </div>
                    <i class="bx bx-moon change-theme" title="Theme" id="theme-button"></i>
                </section>

                <!--========== SOCIAL ==========-->
                <section class="social section">
                    <h2 class="section-title">SOCIAL</h2>

                    <div class="social__container bd-grid">
                        <a target="_blank" href="" class="social__link">
                            <i class="bx social__icon bxl-linkedin-square"></i> @roby_hjz
                        </a>
                        <a target="_blank" href="" class="social__link">
                            <i class="bx social__icon bxl-twitter"></i> @roby_hjz
                        </a>
                        <a target="_blank" href="" class="social__link">
                            <i class="bx social__icon bxl-github"></i> @robyDev-98
                        </a>
                    </div>
                </section>

                <!--========== PROFILE ==========-->
                <section class="profile section" id="profile">
                    <h2 class="section-title">Profile</h2>
                    <p class="profile__description">Nama saya Roby Adi Putra. Saya sangat berminat bekerja di bidang IT khususnya programming. Karena kecintaan saya terhadap dunia programing, walapun saya tidak berasal dari bakcground IT, saya terus belajar untuk mengembangkan pengetahuan saya di bidang pemrograman.</p>
                </section>

                <!--========== EDUCATION ==========-->
                <section class="education section" id="education">
                    <h2 class="section-title">Education</h2>
                    <div class="education__container bd-grid">
                        <div class="education__content">
                            <div class="education__time">
                                <span class="education__rounder"></span>
                                <!-- <span class="education__line"></span> -->
                            </div>
                            <div class="education__data bd-grid">
                                <h3 class="education__title">SMA Saraswati Klungkung</h3>
                                <span class="education__studies">Pariwisata</span>
                                <span class="education__year">2013 - 2016</span>
                            </div>
                        </div>
                    </div>
                </section>


                <!--========== SKILLS  ==========-->
                <section class="skills section" id="skills">
                    <h2 class="section-title">Skills</h2>

                    <div class="skills__content bd-grid">
                        <ul class="skills__data">
                            <li class="skills__name">
                                <span class="skills__circle"></span> html
                            </li>
                            <li class="skills__name">
                                <span class="skills__circle"></span> css
                            </li>
                            <li class="skills__name">
                                <span class="skills__circle"></span> javascript
                            </li>
                            <li class="skills__name">
                                <span class="skills__circle"></span> php
                            </li>
                        </ul>
                        <ul class="skills__data">
                            <li class="skills__name">
                                <span class="skills__circle"></span> laravel
                            </li>
                            <li class="skills__name">
                                <span class="skills__circle"></span> codeigniter
                            </li>
                            <li class="skills__name">
                                <span class="skills__circle"></span> nodejs
                            </li>
                            <li class="skills__name">
                                <span class="skills__circle"></span> mysql
                            </li>
                        </ul>
                    </div>
                </section>

            </div>

            <div class="resume__right">
                <!--========== EXPERIENCE ==========-->
                <section class="experience section" id="experience">
                    <h2 class="section-title">Experience</h2>

                    <div class="experience__container bd-grid">
                        <div class="experience__content">
                            <div class="experience__time">
                                <span class="experience__rounder"></span>
                                <span class="experience__line"></span>
                            </div>

                            <div class="experience__data bd-grid">
                                <h3 class="experience__title">Keboiwa Express</h3>
                                <span class="experience__company">2018 - 2019 | Reservation | Web Developer</span>
                                <span class="experience__description">Membuat dan mengembangkan aplikasi reservasi berbasis web untuk membantu serservation bekerja dan menjadi tiketing agent.</span>
                            </div>
                        </div>
                        <div class="experience__content">
                            <div class="experience__time">
                                <span class="experience__rounder"></span>
                                <span class="experience__line"></span>
                            </div>

                            <div class="experience__data bd-grid">
                                <h3 class="experience__title">BBM Tours</h3>
                                <span class="experience__company">2019 - 2020 | Operational | Web Developer</span>
                                <span class="experience__description">Membuat dan mengembangkan aplikasi reservasi berbasis web untuk membantu serservation bekerja, membuat website profile perusahaan dan menjadi operational travel agent.</span>
                            </div>
                        </div>
                        <div class="experience__content">
                            <div class="experience__time">
                                <span class="experience__rounder"></span>
                            </div>

                            <div class="experience__data bd-grid">
                                <h3 class="experience__title">D'Karang Eco Lodge</h3>
                                <span class="experience__company">2020 - 2021 | Web Developer</span>
                                <span class="experience__description">Membuat dan mengembangkan aplikasi reservasi berbasis web untuk membantu serservation Home Stay bekerja dan membantu membuat wesite perusahaan.</span>
                            </div>
                        </div>
                    </div>
                </section>

                <!--========== CERTIFICATES ==========-->
                <section class="certificate section" id="certificates">
                    <h2 class="section-title">Certificates</h2>

                    <div class="sertificate__container bd-grid">
                        <div class="certificate__content">
                            <h3 class="sertificate__title">html Solo Learn 2018</h3>
                            <p class="sertificate__description">
                                <a target="blank" href="https://www.sololearn.com/Certificate/1014-8887167/pdf/">Link</a>
                            </p>
                        </div>
                        <div class="certificate__content">
                            <h3 class="sertificate__title">css Solo Learn 2018</h3>
                            <p class="sertificate__description">
                                <a target="blank" href="https://www.sololearn.com/Certificate/1023-8887167/pdf/">Link</a>
                            </p>
                        </div>
                        <div class="certificate__content">
                            <h3 class="sertificate__title">javascript Solo Learn 2018</h3>
                            <p class="sertificate__description">
                                <a target="blank" href="https://www.sololearn.com/Certificate/1024-8887167/pdf/">Link</a>
                            </p>
                        </div>
                    </div>
                </section>

                <!--========== REFERENCES ==========-->
                <!-- <section class="references section" id="references">
                    <h2 class="section-title">References</h2>

                    <div class="reference__container bd-grid">
                        <div class="reference__content bd-grid">
                            <span class="references__subtitle">Director</span>
                            <h3 class="references__title">Mr. Clay Doe</h3>
                            <ul>
                                <li>Phone: +64 81337559615</li>
                                <li>Email: roby@poinsla.com</li>
                            </ul>
                        </div>
                    </div>
                </section> -->

                <!--========== LANGUAGES ==========-->
                <section class="languages section">
                    <h2 class="section-title">Languages</h2>

                    <div class="language__container">
                        <ul class="language__content bd-grid">
                            <li class="languages__name">
                                <span class="languages__circle"></span> Indonesia
                            </li>
                            <li class="languages__name">
                                <span class="languages__circle"></span> English
                            </li>
                        </ul>
                    </div>
                </section>

                <!--========== INTERESTS ==========-->
                <section class="interests section">
                    <h2 class="section-title">Interest</h2>

                    <div class="interest__container bd-grid">
                        <div class="interest__content">
                            <i class="bx bx-headphone interest__icon"></i>
                            <span class="interest__name">Music</span>
                        </div>

                        <div class="interest__content">
                            <i class="bx bx-code interest__icon"></i>
                            <span class="interest__name">Coding</span>
                        </div>

                        <div class="interest__content">
                            <i class="bx bx-book interest__icon"></i>
                            <span class="interest__name">Reading</span>
                        </div>

                        <div class="interest__content">
                            <i class="bx bx-pen interest__icon"></i>
                            <span class="interest__name">Writing</span>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </main>

    <!--========== SCROLL TOP ==========-->
    <a href="#" class="scrolltop" id="scroll-top">
        <i class="bx bx-up-arrow-alt scrolltop__icon"></i>
    </a>

    <!--========== HTML2PDF ==========-->
    <script src="assets/assets-cv/js/html2pdf.bundle.min.js"></script>

    <!--========== MAIN JS ==========-->
    <script src="assets/assets-cv/js/main.js"></script>
</body>

</html>