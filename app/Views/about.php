<?= $this->extend('components/layout') ?>

<?= $this->section('title') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/tentang.css"); ?>">
    <meta charset="utf-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chilingua</title>
</head>
<body>

<?= $this->section('content') ?>

<!-- About -->

    <!--Div 1 -->
        <div id="BelajarBahasaMandarinDescDiv">
        <?= img(['src' => 'assets/images/Bio.jpg', 'width' => '300px', 'height' => '400px', 'align' => 'left', 'type' => '']) ?>
            <h1 id="BelajarBahasaMandarinH1"> Tentang Saya </h1>
            <p id="BelajarBahasaMandarinDescP">Perkenalkan saya Dzawil Uqul, nama chinese saya adalah 哈笛 (dibaca : Hādí)
                . Nama ini berasal dari nama terakhir ayah saya yang bernama Solikhul Hadi
                . Nama chinese ini didapatkan dari guru saya yang bernama Miya Laoshi pada saat saya menempuh pendidikan bahasa mandarin di China pada tahun 2019.
                
                <br><br>
                Saya kelahiran Desember tahun 2000. Saya tumbuh besar di kota kecil dekat pantai yang indah yaitu Kota Jepara.  
                Pada tahun 2019 saya mendapatkan kesempatan untuk belajar mandarin di China selama 5 bulan dan dilanjutkan secara daring di Indonesia karena pandemik. 
                Akhir bulan Oktober tahun 2020 saya menempuh ujian HSK 4 yang dilaksanakan secara daring dan Alhamdulillah saya berhasil lulus dengan nilai yang cukup memuaskan.

                <br><br>
                Alasan saya membuat website ini adalah untuk menyelesaikan tugas mata kuliah Pemrograman Berbasis Web.
                Melalu website ini saya juga ingin membagikan ilmu yang saya dapatkan ketika saya belajar mandarin di China dan di Indonesia.
            </p>
        </div>

<div class="line"></div>

<?= $this->endSection() ?>
<?= $this->endSection() ?>