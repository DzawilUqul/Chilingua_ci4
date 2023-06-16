<?= $this->extend('components/layout') ?>

<?= $this->section('title') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/kosakata.css"); ?>">
    <meta charset="utf-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chilingua</title>
</head>
<body>

<?= $this->section('content') ?>

    <!--  ===== Pilih Level HSK =====  -->
    <p class="fontBlack" id="apasihHSK">Apasih HSK Itu...?</p>
    <?= img(['src' => 'assets/images/hskBook.jpg', 'class' => 'hskBook', 'alt' => '']) ?>
    <?= img(['src' => 'assets/images/HSK-logo.jpg', 'width' => '400px', 'alt' => '']) ?>
    <p class="fontGrey">HSK yaitu singkatan dari Hanyu Shuiping Kaoshi merupakan standar ujian kecakapan bahasa mandarin yang terdiri dari 6 level, dari HSK level 1 sampai level 6.
    
        HSK 1 merupakan HSK paling dasar dimana materinya tentang pengenalan bahasa mandarin, pelafalan, nada dan penulisan huruf dasar hanzi. Dan terdiri dari 150 kosakata.
        
        Tes HSK 1 terdiri dari soal listening dan reading dengan total  40 soal dan harus dikerjakan selama 35 menit. Soalnya terdiri dari hanzi dan pinyin.</p>
    <p id="HSK1_"> Pilih Kosakata Berdasarkan Level HSK</p>

<div id="divHSK123">
    <a href="<?php echo base_url("courses/kosakata/HSK1_1"); ?>">
        <div class="HSK1">
            <p class="hskP">HSK 1</p>
        </div>
    </a>

    <a href="<?php echo base_url("courses/kosakata/HSK2_1"); ?>">
        <div class="HSK1">
            <p class="hskP">HSK 2</p>
        </div>
    </a>

    <a href="<?php echo base_url("courses/kosakata/HSK3_1"); ?>">
        <div class="HSK1">
            <p class="hskP">HSK 3</p>
        </div>
    </a>

</div>

        <!-- HSK 4-6 -->

<div id="divHSK456">
    <a href="">
        <div class="HSK1_1">
            <p class="hskP_1">HSK 4 (Akan datang)</p>
        </div>
    </a>

    <a href="">
        <div class="HSK1_1">
            <p class="hskP_1">HSK 5 (Akan datang)</p>
        </div>
    </a>

    <a href="">
        <div class="HSK1_1">
            <p class="hskP_1">HSK 6 (Akan datang)</p>
        </div>
    </a>
</div>

<?= $this->endSection() ?>
<?= $this->endSection() ?>