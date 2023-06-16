<?= $this->extend('components/layout') ?>

<?= $this->section('title') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/kataBendaSifat.css"); ?>">
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
    <p class="fontBlack"><strong>Menggabungkan Kata Sifat dan Kata Benda menggunakan 很(hěn)</strong></p>
    <p class="fontGrey">Kita sering melihat kata benda yang memiliki kata sifat, 
        seperti kalimat "buku baru" (Buku adalah kata benda dan 
        baru adalah kata sifat) dan masih banyak lagi. Dalam bahasa
         mandarin kita dapat menggunakan kata benda sebagai penghubung
          terhadap kata sifat atau kata benda dengan kata kerja.Kali ini 
          kita akan mengenal cara menghubungkan kata benda dengan kata
           sifat menggunakan 很(hěn).
    </p>

    <p class="fontBlack"><strong>Struktur</strong></p>
    <div class="Struktur"><p class="fontBlack">Kata Benda + 很 + Kata Sifat</p></div>
    <p class="fontBlack"><strong>Contoh</strong></p>

    <ul>
        <li class="fontGrey" >我很好 <br> wǒ hěn hǎo <br> Saya baik </li> <br>
        <li class="fontGrey" >你很漂亮 <br> nǐ hěn piàoliǎng <br> Kamu sangat cantik </li> <br>
        <li class="fontGrey" >他很高兴 <br> tā hěn gāoxìng <br> Dia sangat senang </li> <br>
        <li class="fontGrey" > 你家也很远吗 ?  <br> nǐ jiā yě hěn yuǎn ma ? <br> Apakah rumahmu juga sangat jauh ? </li> <br>
        <li class="fontGrey" >我哥哥也很高 <br> wǒ gēgē yě hěn gāo <br> Kakakku juga sangat tinggi </li> <br>
    </ul>

    <!-- ===== Footer ===== -->

    <?= $this->endSection() ?>
<?= $this->endSection() ?>