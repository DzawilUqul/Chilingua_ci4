<?= $this->extend('components/layout') ?>

<?= $this->section('title') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/superQuizListening.css"); ?>">
    <meta charset="utf-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chilingua</title>
</head>
<body>

<?= $this->section('content') ?>

<!-- Body -->

    <!-- <div class="landing">
        <p id="landingP" class="fontBlack">Selamat Datang di Super Quiz</p>
        <p id="landingP2" class="fontGrey">Latihan Soal Berdasarkan Ujian Asli</p>
        <button class="startButton fontBlack" onclick="startFunc()">Start</button>
        <img id="background" src="Pictures/Tata Bahasa Background.jpg" alt="">
    </div> -->
    <div class="sideBar">
            <div class="dropdown">
                <button onclick="myFunction()" class="dropbtn fontBlack">HSK 1</button>
                <div id="myDropdown" class="dropdown-content">
                    <a class="fontGrey" href="#home">HSK 1</a>
                    <a class="fontGrey" href="#about">HSK 2</a>
                    <a class="fontGrey" href="#contact">HSK 3</a>
                    <a class="fontGrey" href="#contact">HSK 4</a>
                    <a class="fontGrey" href="#contact">HSK 5</a>
                    <a class="fontGrey" href="#contact">HSK 6</a>
                </div>
            </div>
        <button class="itemList1 " id="Reading"><a href="superQuiz.html" id="itemListSpan" class="fontBlack">Reading</a></button>
        <button class="itemList disabled" id="Listening"><span id="itemListSpan" class="fontBlack">Listening</span></button>
    </div>

    <!-- Show Questions -->
    <!-- <button onclick="popup()" >cek</button> -->
    <div class="popup hilangDiv">
        <button onclick="close1()" class="cross" >asd</button>
        <form action="">
            <input type="text">
        </form>
    </div>
    
    


    
    <span class="p hilangDiv" id="pi">1</span><span></span>
    

    

    <div class="container hilangDiv" id="containerCopy">
        
        <p class="containerP hilangDiv fontBlack">HSK 1 Listening   </p>

        <div class="fontBlack title">
            <p class="pRight">Listening - Benar atau Salah  <span class="right"><span class="numbS"></span></span></p>
        </div>

        <div id="dragDivId" class="dragDiv">
        </div>
        
        <button onmousedown="onMouseButton()" onmouseup="onMouseUp()" id="prevHover" class="prevButton hilangDiv fontBlack opacity">Pertanyaan Sebelumnya</button>
        <button onmousedown="onMouseButton2()" onmouseup="onMouseUp2()" id="nextHover" class="nextButton hilangDiv fontBlack">Pertanyaan Selanjutnya</button>
    </div>
    
    <div class="resultContainer hilangDiv">
        <button class="bubble" onclick="resultClose()"> <span class="x fontBlack">X</span></button>
        <div id="container1Id" class="container1">
            
            <p class="containerP fontBlack">HSK 1 Listening   </p>

            <div class="fontBlack title">
                <p class="pRight">Listening - Benar atau Salah  <span class="right"><span class="numbS"></span>1/5</span></p>
            </div>
            <!-- <p class="que1 spanLeft fontGrey showQueFont" id="que11"></p> -->
            <p class="que1 spanLeft fontGrey showQueFont"></p>

            <div id="dragDivId1" class="dragDiv1">
            </div>
            
            <div class="option1"><span class="fontBlack">✔</span></div>
            <div class="option2" id="padding"><span class="fontBlack">✘</span></div>
            
            <div class="explanation "><p class="explanationP fontGrey"></p></div>

        </div>


        <div class="container2">
            
            <p class="containerP fontBlack">HSK 1 Listening   </p>

            <div class="fontBlack title">
                <p class="pRight">Listening - Benar atau Salah  <span class="right"><span class="numbS"></span>2/5</span></p>
            </div>

            <p class="que1 spanLeft fontGrey showQueFont"></p>

            <div id="dragDivId2" class="dragDiv2">
            </div>
            
            <div class="option1"><span class="fontBlack">✔</span></div>
            <div class="option2" id="padding"><span class="fontBlack">✘</span></div>
            
            <div class="explanation"><p class="explanationP fontGrey"></p></div>

        </div>
        <div class="container3">
            
            <p class="containerP fontBlack">HSK 1 Listening   </p>

            <div class="fontBlack title">
                <p class="pRight">Listening - Benar atau Salah  <span class="right"><span class="numbS"></span>3/5</span></p>
            </div>

            <p class="que1 spanLeft fontGrey showQueFont"></p>

            <div id="dragDivId3" class="dragDiv3">
            </div>
            
            <div class="option1"><span class="fontBlack">✔</span></div>
            <div class="option2" id="padding"><span class="fontBlack">✘</span></div>
            
            <div class="explanation"><p class="explanationP fontGrey"></p></div>

        </div>
        <div class="container4">
            
            <p class="containerP fontBlack">HSK 1 Listening   </p>

            <div class="fontBlack title">
                <p class="pRight">Listening - Benar atau Salah  <span class="right"><span class="numbS"></span>4/5</span></p>
            </div>

            <p class="que1 spanLeft fontGrey showQueFont"></p>

            <div id="dragDivId4" class="dragDiv4">
            </div>
            
            <div class="option1"><span class="fontBlack">✔</span></div>
            <div class="option2" id="padding"><span class="fontBlack">✘</span></div>
            
            <div class="explanation"><p class="explanationP fontGrey"></p></div>

        </div>

        <div class="container5">
            
            <p class="containerP fontBlack">HSK 1 Listening   </p>

            <div class="fontBlack title">
                <p class="pRight">Listening - Benar atau Salah  <span class="right"><span class="numbS"></span>5/5</span></p>
            </div>

            <p class="que1 spanLeft fontGrey showQueFont"></p>

            <div id="dragDivId5" class="dragDiv5">
            </div>
            
            <div class="option1"><span class="fontBlack">✔</span></div>
            <div class="option2" id="padding"><span class="fontBlack">✘</span></div>
            
            <div class="explanation"><p class="explanationP fontGrey"></p></div>

        </div>
    </div>

    
    

<!-- Footer -->

<div class="padding1 hilangDiv"></div>
<?= $this->endSection() ?>
<?= $this->endSection() ?>
