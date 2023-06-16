<?= $this->extend('components/layout') ?>

<?= $this->section('title') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/style.css"); ?>">
    <meta charset="utf-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chilingua</title>
</head>
<body>

<?= $this->section('content') ?>
<!-- Chinese Is Easy -->

    <div id="BelajarBahasaMandarinDescDiv">
        <?php echo img(['src' => 'assets/images/billyInBook.png', 'width' => '230px', 'height' => '200px', 'style' => 'float: left;']); ?>
        <h1 id="BelajarBahasaMandarinH1">BELAJAR BAHASA MANDARIN DENGAN MUDAH</h1>
        <p id="BelajarBahasaMandarinDescP">EzChinese menawarkan berbagai materi 
                mulai dari kosakata, pengucapan, dan tata bahasa mandarin yang dikemas 
                secara terstruktur berdasarkan kemampuan pelajar</p>
    </div>

    <div class="line"></div>


<!-- Benefit Belajar di Ez Chinese -->

    <div id="benefitDescDiv">
            <h1 id="benefitH1">BENEFIT BELAJAR DI EZ CHINESE</h1>

        <div id="divDescP1">
            <p class="benefitTitleP1">Efektif dan Efisien
                <p class="benefitDescP1">Materi dikategorikan sesuai dengan kemampuan pelajar 
                    <br> sehingga sangatlah efisien</p>
            </p>

            <p class="benefitTitleP1">Disertai Dengan Audio
                <p class="benefitDescP1">Setiap materi disertai dengan audio untuk melatih kemampuan pendengaran pelajar</p>
            </p>
        </div>

        <?php echo img(['id' => 'benefitImg', 'src' => 'assets/images/fu.jpg', 'alt' => '']); ?>

        <div id="benefitDescP2">
            <p class="benefitTitleP1">Grammar Berbahasa Indonesia
                <p class="benefitDescP1">Tersedia materi tentang grammar 
                    atau <br> tata bahasa lengkap berbahasa Indonesia</p> <br>
            </p>
            

            <p class="benefitTitleP1">Super Quiz (Akan datang)
                <p class="benefitDescP1">Ez Chinese menyediakan quiz <br>
                    dalam bentuk soal-soal ujian HSK</p>
            </p>
        </div>


    </div>

    <div class="line"></div>


<!-- Courses -->

    <h1 id="CoursesTitleH1">APA SIH YANG DIPELAJARI</h1>
    <a href="courses.html#vocabularyDescDiv1">
        <div id="course1">
            <?php echo img(['class' => 'courseImgBorderRad', 'src' => 'assets/images/cihui.jpg', 'width' => '300px', 'height' => '200px', 'alt' => '']); ?>
            <p class="courseP">Kosakata</p>
        </div>
    </a>

    <a href="courses.html#vocabularyDescP">
        <div id="course2">
            <?php echo img(['class' => 'courseImgBorderRad', 'src' => 'assets/images/yufa.jpg', 'width' => '300px', 'height' => '200px', 'alt' => '']); ?>
            <p class="courseP">Tata Bahasa</p>
        </div>
    </a>

    <a href="courses.html#tatabahasaDescP">
        <div id="course3">
            <?php echo img(['class' => 'courseImgBorderRad', 'src' => 'assets/images/fayin.jpg', 'width' => '300px', 'height' => '200px', 'alt' => '']); ?>
            <p class="courseP">Pengucapan</p>
        </div>
    </a>

    <div id="lineCourses"></div>

<!-- Testimonial -->

    <h1 id="TestimonialTitleH1">Testimonial</h1>

    <div id="TestimonialDescDiv">
        <div id="TestimonialImgDiv">
            <div class="testimonialDiv">
                <?php echo img(['class' => 'TestimonialImg', 'src' => 'assets/images/Testi1 (1).jpg', 'alt' => '']); ?>
                <p class="testimonialDescP">多亏 Ez Chinese，我已经取得HSK3级和HSK4级的好成绩~ 我会继续努力，希望也能顺利通过HSK5级！
                </p>
            </div>

            <div class="testimonialDiv">
                <?php echo img(['class' => 'TestimonialImg', 'src' => 'assets/images/Testi1 (2).jpg', 'alt' => '']); ?>
                <p class="testimonialDescP">Saya lulus HSK level 4 dengan belajar Ez Chinese. Saya sangat merekomendasikan belajar mandarin di website ini. 
                </p>
            </div>

            <div class="testimonialDiv">
                <?php echo img(['class' => 'TestimonialImg', 'src' => 'assets/images/Testi1 (3).jpg', 'alt' => '']); ?>
                <p class="testimonialDescP">Saya lulus HSK 3 dengan menggunakan situs web ini. Terimakasih Ez Chinese, kalian sangat membantu proses belajar saya.
                </p>
            </div>
                
            <div class="testimonialDiv">
                <?php echo img(['class' => 'TestimonialImg', 'src' => 'assets/images/Testi1 (4).jpg', 'alt' => '']); ?>
                <p class="testimonialDescP">Saya mendapat skor tinggi di HSK 6 dengan belajar di sini.<br> Belajar di sini sangatlah menyenangkan 
                </p>
            </div>
        </div>
    </div>

<?= $this->endSection() ?>
<?= $this->endSection() ?>

