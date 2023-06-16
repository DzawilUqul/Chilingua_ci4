<?= $this->extend('components/layout') ?>

<?= $this->section('title') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/courses.css"); ?>">
    <meta charset="utf-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chilingua</title>
</head>
<body>

<?= $this->section('content') ?>

    <!-- Vocabulary -->

<!-- div1 -->
    <div id="vocabularyDescDiv1">
        <?= img(['src' => 'assets/images/cihui.jpg', 'width' => '230px', 'height' => '200px', 'style' => 'float: left;']); ?>
        <h1 id="vocabularyH1">KOSAKATA </h1>
        <p id="vocabularyDescP">EzChinese menyediakan daftar kosakata dari HSK 1 - HSK 6 disertai <br> pinyin dan arti yang telah diurutkan berdasarkan kemampuan pelajar. <br><br>
                <a href="<?php echo base_url("courses/kosakata"); ?>">Lebih Banyak...</a>
        </p>
                
    </div>

    <div class="line"></div>

<!-- div2 -->
    <div id="tatabahasaDescDiv">
        <?= img(['src' => 'assets/images/yufa.jpg', 'width' => '230px', 'height' => '200px', 'style' => 'float: right;']); ?>
        <h1 id="tatabahasaH1"> TATA BAHASA </h1>
        <p id="tatabahasaDescP">EzChinese menyediakan daftar materi tata bahasa (grammar) <br> yang berisi deskripsi pengertian, pola kalimat, dan contoh kalimat. <br><br>
                <a href="<?php echo base_url("courses/tatabahasa"); ?>">Lebih Banyak...</a>
        </p>
    </div>

    <div class="line"></div>

<!-- div3 -->
    <div id="pengucapanDescDiv1">
        <?= img(['src' => 'assets/images/fayin.jpg', 'width' => '230px', 'height' => '200px', 'style' => 'float: left;']); ?>
        <h1 id="pengucapanH1"> PENGUCAPAN </h1>
        <p id="pengucapanDescP">EzChinese menyediakan materi pengucapan (Pronunciation) <br> mulai dari pengertian dari pinyin, nada, vokal, dan konsonan <br> disertai dengan contoh dan cara baca. <br><br>
                <a href="<?php echo base_url("courses/pengucapan"); ?>">Lebih Banyak...</a>
        </p>
    </div>

    <div class="line"></div>
    
<?= $this->endSection() ?>
<?= $this->endSection() ?>
