<?= $this->extend('components/layout') ?>

<?= $this->section('title') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/kataBendaDenganShi.css"); ?>">
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
<p class="fontBlack" id="menghubungkanKata">Menghubungkan kata benda dengan 是 (shì)</p>
<p class="fontGrey" id="shiMerupakan">是 | shì merupakan kata kerja dan dipergunakan untuk 
menghubungkan dua kata benda, dalam bahasa Indonesia 
sering diterjemahkan sebagai adalah.</p>

<p class="fontBlack"><strong>Struktur</strong></p>
<div class="Struktur"><p class="fontBlack" id="pola1"> Kata Benda 1 + 是 + Kata Benda 2</p></div>
<p class="fontBlack"><strong>Contoh</strong></p>
<ul>
    <li class="fontGrey" >我是学生。 <br> wǒ shì xuéshēng <br> Saya seorang pelajar </li>
    <br>
    <li class="fontGrey" >他们是有钱人。 <br> tāmen shì yǒu qián rén <br> Mereka adalah orang kaya. </li>
    <br>
    <li class="fontGrey" >您是老师吗？ <br> nín shì lǎoshī ma <br>  Apakah anda seorang guru ? </li>
    <br>
    <li class="fontGrey" >这都是你的钱。 <br> zhe dōu shì nǐ de qián  <br> Ini semua adalah uangmu. </li>
    <br>
    <li class="fontGrey" >我也是他的朋友。 <br> wǒ yě shì nǐ de péngyou <br> Saya juga teman dia. </li>
</ul>

    <!-- ===== Footer ===== -->

    <?= $this->endSection() ?>
<?= $this->endSection() ?>
    
</body>
</html>