<?= $this->extend('components/layout') ?>

<?= $this->section('title') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/berlebihanDenganTai.css"); ?>">
    <meta charset="utf-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chilingua</title>
</head>
<body>

<?= $this->section('content') ?>

    <!-- ===== Body ===== -->
<div class="headerPadding"></div>
<p class="fontBlack" id="belajarSusunan">Belajar Susunan Kalimat Dasar <br> Dan Grammar Dalam Bahasa Mandarin</p>
<?= img(['src' => 'assets/images/Tata Bahasa Background.jpg', 'id' => 'background', 'alt' => '', 'class' => '']) ?>
<div class="headerPadding"></div>
    <p class="fontBlack" id="mengekspresikan"><strong>Mengekspresikan terlalu atau sangat dengan 太 (tài)</strong></p>
    <p class="fontGrey" id="dalamBahasa">Dalam bahasa mandarin, cara yang paling sederhana untuk mengekspresikan 
        hal yang secara belebih-lebihan atau biasa disebut dengan kata "terlalu"
         adalah dengan menggunakan kata 太 (tài). Perhatikan jangan lupa juga 
         untuk menambahkan kata 了 (le) setelah kata sifat, hal ini bertujuan
          untuk menjaga agar pengucapan bahasa mandarin terasa lebih alami.</p>
    
    <p class="fontBlack"><strong>Struktur</strong></p>
    <div class="Struktur"><p class="fontBlack">太 + Adj. + 了</p></div>
    <p class="fontBlack"><strong>Contoh</strong></p>
    <ul>
        <li class="fontGrey" >米饭太多了 <br> mǐfàn tài duō le <br> Nasinya terlalu banyak </li> <br>
        <li class="fontGrey" >现在太晚了 <br> xiànzài tài wǎn le <br> Sekarang sudah terlalu malam </li> <br>
        <li class="fontGrey" >老板太忙了 <br> lǎobǎn tài máng le <br> Si Boss terlalu sibuk </li> <br>
        <li class="fontGrey" > 这个厕所太脏了 <br> zhege cèsuǒ tài zāng le <br> Toilet ini sangat kotor </li> <br> 
    </ul>


    <!-- ===== Footer ===== -->

    <?= $this->endSection() ?>
<?= $this->endSection() ?>