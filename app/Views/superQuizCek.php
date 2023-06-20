<?= $this->extend('components/layout') ?>

<?= $this->section('title') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/superquiz.css"); ?>">
    <meta charset="utf-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chilingua</title>
</head>
<body>

<?= $this->section('content') ?>
<style>
  nav ul {
    height: 90px;
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: white;
    display: flex;
    justify-content: center; /* Center the navbar horizontally */
  }

  nav li {
    display: inline-block;
  }

  nav li a {
    display: block;
    color: #333;
    text-align: center;
    padding: 30px 20px 30px;
    text-decoration: none;
  }

  nav li a:hover {
    background-color: #ddd;
  }

  .dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
    z-index: 1;
  }

  .dropdown-content a {
    color: #333;
    padding: 12px 45px;
    text-decoration: none;
    display: block;
    text-align: left;
  }

  .dropdown:hover .dropdown-content {
    display: block;
  }
</style>
<?php foreach($ques as $que) : ?>

<nav class="fontGrey">
  <ul>
    <li class="dropdown">
        <a href="#" class="">
            HSK Level <?= $que['HSK']; ?> &#x25BE;
        </a>

        <div class="dropdown-content">
            <a href="#">HSK Level 1</a>
            <a href="#">HSK Level 2</a>
            <a href="#">HSK Level 3</a>
        </div>
    </li>

    <li><a href="#">Home</a></li>
    <li><a href="#">About</a></li>
    <li><a href="#">Contact</a></li>
  </ul>
</nav>





<div style="float: right; margin-top: 30px; margin-right: 30px;">
  <p style="text-align: center;" class="fontBlack">Notes</p>
      <?php helper('form') ?>  
      <?php echo form_open('/cek//'.$que['id'])?>
        <div>
            <textarea style="resize: none;
            border-radius: 10px 10px 10px 10px;
            box-shadow: 0px 0px 10px 5px rgb(225, 225, 225);
            border: none;
            outline: none;
            padding: 10px;
            " class="fontGrey"
            name="catatan" id="" cols="20" rows="10"><?= $que['catatan']; ?></textarea>
        </div>

          <input type="hidden" name="id" value="<?= $que['id']; ?>">
          <input type="submit" id="simpanHover" class="fontGrey" style="margin-top: 10px;
              border-radius: 10px 10px 10px 10px;
              border: none;
              height: 35px;
              width: 100%;
              background-color: rgb(57,160,255);
              font-size: 18px;
              cursor: pointer;
              color: white;">
            </input>
          </div>
      <?php echo form_close() ?>

    <?php 
        $imageData = $que['que_img'];
        $imageBase64 = base64_encode($imageData);
        $image = 'data:image/jpeg;base64,'.$imageBase64;
    ?>

    <div class="container" id="containerCopy">
        <p class="containerP fontBlack">HSK 1 Reading   </p>

        <div class="fontBlack title">
            <p class="pRight">Reading - Benar atau Salah  <span class="right"><span class="numbS"><?= $que['id']; ?>/5</span></span></p>
        </div>
        <p class="spanLeft fontGrey"><?= $que['id']; ?>. Pilih benar atau salah berdasarkan gambar dibawah</p>

        <div class="center">
            <?= img(['src' => $image, 'height' => '225px', 'style' => 'display: block; margin: 0 auto;']) ?>
            <p class="center fontGrey"><?= $que['que_text']; ?></p>
        </div>

        <div class="option"><span>✔</span></div>
        <div class="option" id="padding"><span>✘</span></div>


        <div id="dragDivId" class="dragDiv"></div>
        <a href="<?php echo base_url("/cek//".$que['id'] - 1); ?>">
          <button onmousedown="onMouseButton()" onmouseup="onMouseUp()" id="prevHover" class="prevButton fontBlack disabled opacity">Pertanyaan Sebelumnya</button>
        </a>

        <a href="<?php echo base_url("/cek//".$que['id'] + 1); ?>">
          <button onmousedown="onMouseButton2()" onmouseup="onMouseUp2()" id="nextHover" class="nextButton fontBlack">Pertanyaan Selanjutnya</button>
        </a>
    </div>

    <div><br><br><br></div>
<?php endforeach ?>

    <script type="text/JavaScript">
        const nextButton = document.querySelector(".nextButton");
        const prevButton = document.querySelector(".prevButton");

        if(<?php echo $que['id'] != '1' ?>)
        {
            prevButton.classList.remove('disabled');
            prevButton.classList.remove('opacity');
        }
          
          
        function onMouseButton()
        {
            prevButton.classList.add('onMouseButton');
        }
        
        function onMouseUp()
        {
          prevButton.classList.remove('onMouseButton');
        }

        function onMouseButton2()
        {
          nextButton.classList.add('onMouseButton2');
        }

        function onMouseUp2()
        {
          nextButton.classList.remove('onMouseButton2');
        }
    </script>


<?= $this->endSection() ?>
<?= $this->endSection() ?>
