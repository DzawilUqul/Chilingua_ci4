<?= $this->extend('components/layout') ?>

<?= $this->section('title') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/pengucapan.css"); ?>">
    <meta charset="utf-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chilingua</title>
</head>
<body>

<?= $this->section('content') ?>

    <!-- ===== Body ===== -->
<div class="headerPadding"></div>
<p class="fontBlack" id="belajarSusunan">Belajar mengenal Pinyin dan Nada <br> dalam Bahasa Mandarin</p>
<?= img(['src' => 'assets/images/Tata Bahasa Background.jpg', 'id' => 'background', 'alt' => '']) ?>
<div class="headerPadding"></div>
    
<p class="fontBlack"><strong>Mengenal Pinyin dan Nada dalam Bahasa Mandarin</strong></p>
<p class="fontGrey">Si, Shi, Se, She. Tiap kata ini memiliki pelafalan yang berbeda. Ditambah dengan nada, masing-masing kata memiliki arti yang juga berbeda.</p>
<p class="fontGrey" >Hal ini membuat banyak orang merasa takut sekaligus bingung untuk belajar bahasa Mandarin. Namun, bahasa Mandarin merupakan bahasa nomor satu yang paling banyak digunakan di dunia lho!</p>
<p class="fontGrey" >Kalau kamu berpikir untuk mulai belajar bahasa Mandarin, tapi mulai dari mana? Kamu bisa mulai dengan mengenali pengucapan dan nadanya terlebih dahulu.</p>
<p class="fontGrey" >Pelafalan merupakan bagian paling dasar dalam menguasai bahasa Mandarin. Tanpa pelafalan yang tepat, kata dengan bunyi yang sama bisa memiliki arti yang berbeda.</p>

<p class="fontBlack"><strong>Apa itu pinyin?</strong></p>
<p class="fontGrey" >Bahasa Mandarin bukanlah bahasa fonetik. Artinya, pengucapan suatu kata tidak terkait dengan penulisan karakternya. Karakter dalam bahasa mandarin yang biasa digunakan untuk menulis disebut Hanzi.</p>
<p class="fontGrey" >Pinyin merupakan sistem khusus yang ibuat untuk belajar pengucapan dari karakter-karakter bahasa Mandarin. Biasanya, pinyin juga digunakan oleh orang Tiongkok untuk mengetik hanzi di komputer atau smartphone.</p>
<p class="fontGrey" >Penulisan pinyin sama dengan alfabet di bahasa Indonesia. Namun, ejaan dan pengucapannya berbeda. Huruf-huruf pinyin tidak dibaca persis seperti pada bahasa Indonesia.</p>
<p class="fontGrey" >Ada konsonan-konsonan yang dibaca persis seperti bahasa Indonesia, ada juga yang berbeda. Ada juga beberapa konsonan tambahan.</p>

<p class="fontBlack"><strong>Konsonan dalam bahasa Mandarin</strong></p>
<p class="fontBlack"><strong>Konsonan yang dibaca sama seperti bahasa Indonesia antara lain:</strong></p>
<ul>
    <li class="fontGrey">f, l, m, n, s, w, y</li>
</ul>

<p class="fontGrey"><strong>Sementara konsonan yang bunyinya sedikit berbeda dengan bahasa Indonesia ialah:</strong></p>
<ul>
    <li class="fontGrey">b, dilafalkan seperti huruf ‘p’ dalam bahasa Indonesia
        <br> contoh: 爸 (Bà) – dibaca ‘pa’ – arti: ayah
    </li>
    <li class="fontGrey">p, dilafalkan seperti ‘ph’
        <br> contoh: 怕 (Pà) – dibaca ‘pha’ – arti: takut
    </li>
    <li class="fontGrey">
        d, dilafalkan seperti huruf ‘t’
        <br> contoh: 大(Dà) – dibaca ‘ta’ – arti: besar
    </li>
    <li class="fontGrey">
        t, dilafalkan seperti ‘th’
        <br> contoh: 他 (Tā) – dibaca ‘tha’ – arti: dia
    </li>
    <li class="fontGrey">
        t, dilafalkan seperti ‘th’
        <br> contoh: 他 (Tā) – dibaca ‘tha’ – arti: dia
    </li>
    <li class="fontGrey">
        g, dilafalkan seperti huruf ‘k’
        <br> contoh: 高 (Gāo) – dibaca ‘kao’ – arti: tinggi
    </li>
    <li class="fontGrey">
        k, dilafalkan seperti ‘kh’
        <br> contoh: 口 (Kǒu) – dibaca ‘khou’ – arti: mulut
    </li>
    <li class="fontGrey">
        j, dilafalkan seperti huruf ‘c’
        <br> contoh: 家(Jiā) – dibaca ‘cia’ – arti: rumah
    </li>
    <li class="fontGrey">
        q, dilafalkan seperti ‘ch’
        <br> contoh: 去 (Qù) – dibaca ‘chi’ – arti: pergi
    </li>
    <li class="fontGrey">
        x, dilafalkan seperti huruf ‘s’
        <br> contoh: 小 (Xiǎo) – dibaca ‘siao’ – arti: kecil
    </li>
    <li class="fontGrey">
        r, dilafalkan seperti huruf ‘r’ tetapi dengan lidah ditekuk ke langit-langit mulut
        <br> contoh: 热 (Rè) – dibaca: ‘re’ -arti: panas
    </li>
    <li class="fontGrey">
        z, dilafalkan seperti huruf ‘c’
        <br> contoh: 早 (Zǎo) – dibaca ‘cao’ – arti: pagi
    </li>
    <li class="fontGrey">
        c, dilafalkan seperti ‘ch’
        <br> contoh: 从 (Cóng) – dibaca ‘chong’ – arti: dari
    </li>
</ul>

<p class="fontBlack"><strong>Ada pula konsonan-konsonan yang tidak ada dalam bahasa Indonesia, antara lain:</strong></p>
<ul>
    <li class="fontGrey">zh, dilafalkan seperti ‘c’ tetapi dengan lidah ditekuk ke langit-langit mulut
        <br> contoh: 这 (Zhè) – dibaca ‘ce’ – arti: ini
    </li>
    <li class="fontGrey">
        ch, dilafalkan seperti ‘ch’ tetapi dengan lidah ditekuk ke langit-langit mulut
        <br> contoh: 出(Chū) – dibaca ‘chu’ – arti: keluar
    </li>
    <li class="fontGrey">
        sh, dibaca seperti ‘sh’ tetapi dengan lidah ditekuk ke langit-langit mulut
        <br> contoh: 树 (Shù) – dibaca ‘shu’ – arti: pohon
    </li>
</ul>

<p class="fontBlack"><strong>Sejumlah konsonan memiliki aturan khusus, misalnya:</strong></p>
<li class="fontGrey">
    apabila ‘w’ diikuti dengan huruf ‘u’, maka dilafalkan seperti ‘u’
 <br> contoh: 午安 (Wǔ ān) – dibaca ‘u an’ – arti: selamat siang
</li>
<li class="fontGrey">
    apabila ‘y’ diikuti dengan huruf ‘i’, maka dilafalkan seperti ‘i’
 <br> contoh: 一 (Yī) – dibaca ‘i’ – arti: satu
</li>
<li class="fontGrey">
    apabila ‘s’, ‘sh’, ‘c’, ‘ch’, ‘z’, dan ‘zh’ diikuti huruf ‘i’, maka huruf ‘i’ tersebut dilafalkan seperti huruf ‘e’ pada kata ‘dekat’. Contoh:
    <ul>
        <li class="fontGrey">
            四 (Sì) – dibaca ‘se’ – arti: empat
        </li>
        <li class="fontGrey">
            是 (Shì) – dibaca ‘she’ – arti: adalah
        </li>
        <li class="fontGrey">
            吃 (Chī) – dibaca ‘che’ – arti: makan
        </li>
        <li class="fontGrey">
            自己 (Zìjǐ) – dibaca ‘ce ci’ – arti: diri sendiri
        </li>
    </ul>
</li>

<p class="fontGrey">Sementara untuk huruf-huruf vokal pada pinyin rata-rata dibaca seperti pada bahasa Indonesia. Namun, terdapat satu huruf vokal tambahan yaitu ‘ü’. Huruf ‘ü’ ini dilafalkan seperti ‘i’ dengan bentuk mulut ‘u’. Contoh:</p>
<ul><li class="fontGrey">鱼 (Yú) – dibaca ‘yi’ – arti: ikan</li></ul>

<p class="fontBlack"><strong>Nada</strong></p>
<p class="fontGrey">Bahasa Mandarin merupakan bahasa bernada. Artinya, bunyi yang diucapkan mempengaruhi makna dari kata yang diucapkan. Sebuah kata, jika diucapkan dengan nada yang salah, bisa menyebabkan miskomunikasi.</p>
<p class="fontGrey">Mandarin memiliki empat nada. Tabel di bawah ini dapat memberikan sedikit penjelasan mengenai nada-nada dalam bahasa Mandarin.</p>
<table>
    <tr>
        <th class="fontBlack">
            Nada
        </th>
        <th class="fontBlack">
            Bunyi
        </th>
        <th class="fontBlack">
            Goresan
        </th>
        <th class="fontBlack">
            Contoh
        </th>
    </tr>
    <tr>
        <td class="fontGrey" >
            Nada ke-1
        </td>
        <td class="fontGrey">
            Suara tinggi yang datar
        </td>
        <td class="fontGrey">
            ˉ
        </td>
        <td class="fontGrey">
            妈 (Mā)
        </td>
    </tr>
    <tr>
        <td class="fontGrey" >
            Nada ke-2
        </td>
        <td class="fontGrey">
            Nada naik dari rendah ke tinggi seperti sedang mengucapkan kalimat tanya
        </td>
        <td class="fontGrey">
            ˊ
        </td>
        <td class="fontGrey">
            麻 (má)
        </td>
    </tr>
    <tr>
        <td class="fontGrey" >
            Nada ke-3
        </td>
        <td class="fontGrey">
            Nada melengkung dari turun kemudian naik lagi, sesuai dengan goresannya
        </td>
        <td class="fontGrey">
            ˇ
        </td>
        <td class="fontGrey">
            马 (Mǎ)
        </td>
    </tr>
    <tr>
        <td class="fontGrey" >
            Nada ke-4
        </td>
        <td class="fontGrey">
            Nada turun dari tinggi ke rendah dan diucapkan dengan pendek dan kuat
        </td>
        <td class="fontGrey">
            ˋ
        </td>
        <td class="fontGrey">
            骂 (Mà)
        </td>
    </tr>
</table>

<p class="fontGrey">Nada ketiga dalam bahasa Mandarin memiliki aturan spesial. Ketika nada ketiga diikuti dengan nada ketiga lainnya, nada pada kata pertama otomatis berubah menjadi nada kedua. Namun dalam penulisan, nada keduanya tetap ditulis dalam bentuk nada ketiga.</p>
<p class="fontGrey">Contoh: <br> 你 + 好 (Nǐ+ hǎo) menjadi 你 好 (ní hǎo) </p>


<?= $this->endSection() ?>
<?= $this->endSection() ?>