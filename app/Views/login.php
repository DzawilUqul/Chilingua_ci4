<?= $this->extend('components/layout') ?>

<?= $this->section('title') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/login.css"); ?>">
    <meta charset="utf-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chilingua</title>
</head>
<body>

<?= $this->section('content') ?>

<div><br><br></div>
<div class="containerMainPersonalInfo">
    <form action="../../php/get1.php" method="post">
        <p class="fontBlack" id="pMargin" >Login Form</p>
        <div class="borderLine"></div>
        
        <div class="divLabel"> 
            <label class="fontBlack" for="username">Username</label><br>
            <input placeholder="Masukkan Username Anda" class="inputFocus" size="60" id="username" type="text" name="Username" required>
        </div>
        
        <div class="divLabel"> 
            <label class="fontBlack" for="password">Password</label><br>
            <input class="inputFocus" placeholder="Masukkan Password Anda" size="60" id="password" type="password" name="Password" required>
        </div>

        <div class="divLabel"> 
            <label for="submit"></label>
            <input class="fontBlack" id="submitFont" type="submit" name="simpan" value="Login">
        </div>


</div>

</form>
<div><br><br><br><br><br></div>




<!-- Footer -->

<?= $this->endSection() ?>
<?= $this->endSection() ?>