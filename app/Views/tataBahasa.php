<?= $this->extend('components/layout') ?>

<?= $this->section('title') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/tataBahasa.css"); ?>">
    <meta charset="utf-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chilingua</title>
</head>
<body>

<?= $this->section('content') ?>

    <!-- Body -->
<div class="headerPadding"></div>

<p id="titleP">Struktur Tata Bahasa Dasar</p>

<table class="descFont">
    <tr>
        <th>Poin Tata Bahasa</th>
        <th>Pola</th>
        <th>Contoh</th>
    </tr>

    <tr>
        <td> <p class="paddingSubMenu"> Pola Kalimat Dasar </p>
            <a class="subMenu" href="<?php echo base_url("courses/tatabahasa/polakalimatdasar_1"); ?>">1. Subjek - Predikat</a> <br>
            <a class="subMenu" href="<?php echo base_url("courses/tatabahasa/polakalimatdasar_2"); ?>">2. Subjek - Kata Kerja - Objek</a>
        </td>
        <td>Subj. + Verb (+ Obj.)</td>
        <td>	我 爱 你 。</td>
    </tr>

    <tr>
        <td> <a href="<?php echo base_url("courses/tatabahasa/katabendadenganshi"); ?>"> Menghubungkan kata benda dengan 是 (shì) </a></td>
        <td>	A + 是 + B</td>
        <td>	我 是 学生 。</td>
    </tr>

    <tr>
        <td> <a href="<?php echo base_url("courses/tatabahasa/berlebihandengantai"); ?>"> Mengekspresikan "terlalu" atau "sangat" dengan 太 (tài) </a> </td>
        <td>	太 + Adj. + 了</td>
        <td>	太 好 了 !</td>
    </tr>

    <tr>
        <td> <a href="<?php echo base_url("courses/tatabahasa/katabendasifat"); ?>">Menggabungkan Kata Sifat dan Kata Benda <br> menggunakan 很 (hěn) </a> </td>
        <td>	Noun + 很 + Adj.</td>
        <td>	我 很 好。</td>
    </tr>
</table>

<div class="paddingBottom"></div>

<?= $this->endSection() ?>
<?= $this->endSection() ?>