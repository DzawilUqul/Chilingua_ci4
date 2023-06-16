<?= $this->extend('components/layout') ?>

<?= $this->section('title') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/polaKalimatDasar.css"); ?>">
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
    <p class="fontBlack" id="mengapaPerlu">Mengapa perlu belajar struktur kalimat dasar dan grammar dalam bahasa Mandarin?</p>
    <p class="fontGrey" id="strukturKalimat" >Struktur kalimat dalam bahasa Mandarin adalah chapter termudah untuk memulai proses adopsi bahasa asing yang satu ini. <br> Alasannya adalah:</p>
        <ul class="fontGrey" id="merupakanUl">
            <li>Merupakan bagian dasar dari bahasa Mandarin</li>
            <li>Relatif sederhana dan dapat membantu membangun kepercayaan diri</li>
            <li>Belajar kalimat dasar dapat membantu kamu memahami kualitas tata bahasa</li>
        </ul>
    <p class="fontGrey" id="bagianYang">Bagian yang paling membingungkan dari tata bahasa di bahasa Mandarin adalah pembentukan struktur kalimat. Tapi untungnya, layaknya dalam bahasa Indonesia, tata bahasa Mandarin juga tidak memiliki bentuk kata atau konjugasi.</p>

    <p class="fontBlack" id="subjekPredikatTitle">1. Subjek - Predikat</p>
    <p class="fontBlack" id="struktur1" ><strong>- Struktur</strong></p>
    <div class="Struktur"><p class="fontBlack" id="pola1">Subj. + Kata Kerja</p></div>
    <p class="fontBlack"><strong>- Contoh</strong></p>

    <table>
        <tr>
            <th class="fontBlack">Subjek</th>
            <th class="fontBlack">Kata Kerja</th>
            <th class="fontBlack">Translasi</th>
        </tr>

        <tr>
            <td class="fontGrey" >你 <br> Nǐ</td>
            <td class="fontGrey" >吃 <br> Chī </td>
            <td class="fontGrey" >Kamu makan.</td>
        </tr>
        
        <tr>
            <td class="fontGrey" >他 <br> Tā</td>
            <td class="fontGrey" >笑 <br> Xiào </td>
            <td class="fontGrey" >Dia senyum.</td>
        </tr>

        <tr>
            <td class="fontGrey" >我 <br> Wǒ</td>
            <td class="fontGrey" >读 <br> Dú </td>
            <td class="fontGrey" >Aku membaca.</td>
        </tr>

        <tr>
            <td class="fontGrey" >谁 <br> Shéi</td>
            <td class="fontGrey" > 要学 ?<br> Yào Xué ? </td>
            <td class="fontGrey" >Siapa ingin belajar ?</td>
        </tr>
    </table>

    <div class="headerPadding"></div>


<div class="paddingBottom"></div>

<?= $this->endSection() ?>
<?= $this->endSection() ?>