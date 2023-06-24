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

<nav class="fontGrey">
  <ul>
    <li class="dropdown">
      <a href="#" class="">
        HSK Level 1 &#x25BE;
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




<?php helper('form') ?>
<?= form_open("/cek") ?>
<?php foreach($ques as $que) : ?>
  

<div style="float: right; margin-top: 30px; margin-right: 30px;">
  <p style="text-align: center;" class="fontBlack">Notes</p>
      
        <div>
            <textarea style="resize: none;
            border-radius: 10px 10px 10px 10px;
            box-shadow: 0px 0px 10px 5px rgb(225, 225, 225);
            border: none;
            outline: none;
            padding: 10px;
            " class="fontGrey"
            name="catatan[]" id="" cols="20" rows="10"><?= $que['catatan']; ?></textarea>
        </div>

          <!-- <input type="hidden" name="id" value="<?= $que['id']; ?>">
          <input type="submit" id="simpanHover" class="fontGrey" style="margin-top: 10px;
              border-radius: 10px 10px 10px 10px;
              border: none;
              height: 35px;
              width: 100%;
              background-color: rgb(57,160,255);
              font-size: 18px;
              cursor: pointer;
              color: white;">
            </input> -->
          </div>
      

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

        <div>
          <input type="radio" value="benar" name="option<?= $que['id']; ?>[]" id="benar<?= $que['id']; ?>" required>
          <label for="benar<?= $que['id']; ?>" class="fontGrey">Benar</label>

          <input type="radio" value="salah" name="option<?= $que['id']; ?>[]" id="salah<?= $que['id']; ?>">
          <label for="salah<?= $que['id']; ?>" class="fontGrey">Salah</label>
        </div>


        <!-- <div class="option fontGrey" id="optionSelected" onmousedown="OptionSelected()"><span>Benar</span></div>
        <div class="option fontGrey" id="optionSelected" onmousedown="OptionSelected2()" id="padding"><span>Salah</span></div> -->


        <div id="dragDivId" class="dragDiv"></div>
    </div>

    <div><br><br><br></div>

    <input type="hidden" name="id[]" value="<?= $que['id']; ?>">
    

<?php endforeach ?>

        
<input type="submit" value="Lihat Hasil">
  <?= form_close() ?>


    <script type="text/JavaScript">
        const nextButton = document.querySelector(".nextButton");
        const prevButton = document.querySelector(".prevButton");
        const optionSelected1 = document.querySelector("#optionSelected1");
        const optionSelected2 = document.querySelector("#optionSelected2");
        const optionSelected3 = document.querySelector(".option");
      
        let selected1 = false;
        let selected2 = false;        
          
        function onMouseButton()
        {
            prevButton.classList.add('onMouseButton');
        }
        
        // function onMouseUp()
        // {
        //   prevButton.classList.remove('onMouseButton');
        // }

        function onMouseButton2()
        {
          nextButton.classList.add('onMouseButton2');
        }

        function onMouseUp2()
        {
          nextButton.classList.remove('onMouseButton2');
        }

        function OptionSelected1()
        {
            selected1 = true;
            selected2 = false;
            optionSelected1.classList.add('optionSelected');
            if(selected1 == true)
            {
              optionSelected2.classList.remove('disabled');
            }
          optionSelected2.classList.remove('optionSelected');
          optionSelected1.classList.add('disabled');
        }

        function OptionSelected2()
        {
          selected1 = false;
          selected2 = true;
          optionSelected2.classList.add('optionSelected');
          if (selected2 == true) 
          {
            optionSelected1.classList.remove('disabled');
          }
          optionSelected1.classList.remove('optionSelected');
          optionSelected2.classList.add('disabled');
        }

        function OptionSelected3()
        {
          console.log(true);
          optionSelected3.classList.add('optionSelected');
          optionSelected3.classList.add('disabled');
        }

    </script>


<?= $this->endSection() ?>
<?= $this->endSection() ?>
