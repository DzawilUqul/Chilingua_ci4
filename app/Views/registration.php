<?= $this->extend('components/layout') ?>

<?= $this->section('title') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/registration.css"); ?>">
    <meta charset="utf-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chilingua</title>
</head>
<body>

<?= $this->section('content') ?>


    <!-- Body -->

<div><br><br></div>

<div class="containerMainPersonalInfo">
    <form action="index.php" method="post">
        <p class="fontBlack" id="pMargin" >Registration Form</p>
        <div class="borderLine"></div>

        <div class="divLabel"> 
            <label class="fontBlack" for="email">Email</label><br>
            <input class="inputFocus" size="80" id="email" type="email" name="Email" required>
        </div>
        
        <div class="divLabel"> 
            <label class="fontBlack" for="username">Username</label><br>
            <input class="inputFocus" size="80" id="username" type="text" name="Username" required>
        </div>
        
        <div class="divLabel"> 
            <label class="fontBlack" for="password">Password</label><br>
            <input class="inputFocus" size="80" id="password" type="password" name="Password" required>
        </div>

        <div class="divLabel"> 
            <input type="checkbox" required>
            <label class="fontGrey" for="">Saya menyetujui segala persyaratan</label>
        </div>

        <div class="divLabel"> 
            <label for="submit"></label>
            <input class="fontGrey" id="submitFont" type="submit" name="simpan">
        </div>
</div>

</form>

<div><br><br><br></div>




<!-- Footer -->

<?= $this->endSection() ?>
<?= $this->endSection() ?>