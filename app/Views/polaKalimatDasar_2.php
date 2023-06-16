<?= $this->extend('components/layout') ?>

<?= $this->section('title') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/polaKalimatDasar1.css"); ?>">
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


    <p class="fontBlack" id="subjekKataKerja">2. Subjek - Kata Kerja - Objek</p>
    <p class="fontBlack" id=""><strong>- Struktur</strong></p>
    <div class="Struktur"><p id="pola2">Subj. + Kata Kerja + Obj.</p></div>
    <p class="fontBlack"><strong>- Contoh</strong></p>

    <table>
        <tr>
            <th class="fontGrey">Subjek</th>
            <th class="fontGrey">Kata Kerja</th>
            <th class="fontGrey">Objek</th>
            <th class="fontGrey">Translasi</th>
        </tr>

        <tr>
            <td class="fontGrey" >他们 <br> Tāmen</td>
            <td class="fontGrey" >吃 <br> Chī </td>
            <td class="fontGrey" >肉 <br> Ròu </td>
            <td class="fontGrey" >Mereka makan daging.</td>
        </tr>
        
        <tr>
            <td class="fontGrey" >你 <br> nǐ</td>
            <td class="fontGrey" >喝 <br> hē </td>
            <td class="fontGrey" > 茶吗 ？ <br> chá ma ? </td>
            <td class="fontGrey" >Apakah kamu minum teh ?</td>
        </tr>

        <tr>
            <td class="fontGrey" >我 <br> Wǒ</td>
            <td class="fontGrey" >去 <br> qù </td>
            <td class="fontGrey" > 学校 <br> xuéxiào </td>
            <td class="fontGrey" >Aku pergi ke sekolah.</td>
        </tr>

        <tr>
            <td class="fontGrey" >他 <br> tā</td>
            <td class="fontGrey" >说<br> shuō </td>
            <td class="fontGrey" >中文<br> zhōngwén </td>
            <td class="fontGrey" >Dia berbicara bahasa mandarin</td>
        </tr>
    </table>

<div class="paddingBottom"></div>

    <!-- ===== Footer ====== -->
    <?= $this->endSection() ?>
<?= $this->endSection() ?>
</html>