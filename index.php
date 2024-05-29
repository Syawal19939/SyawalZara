<?php
date_default_timezone_set('Asia/Jakarta');

if (isset($_POST['p'])) {
    $fp = fopen('data.html', 'a');
    fwrite($fp, '<div class="cp">Pesan :<br/>' . $_POST['p'] . '<p>' . date("d-M-Y (H:i)") . '</p></div>');
    fclose($fp);
    die('{"s":200}');
}

if (isset($_POST['d'])) {
    $fa = fopen('data.html', 'a');
    fwrite($fa, $_POST['d']);
    fclose($fa);
    die('{"s":200}');
}

if (isset($_GET['d'])) {
    $fa = fopen('data.html', 'a');
    fclose($fa);
    $fr = fopen('data.html', 'r');
    echo json_encode(array("d" => fgets($fr)));
    fclose($fr);
    die;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://dekatutorial.github.io/ct/s.js"></script>
</head>
<body>
<?php
if (isset($_GET['pesan'])) {
    echo "<div id='ccp'>";
    $fp = fopen('data.html', 'r');
    fgets($fp);
    while (!feof($fp)) {
        echo fgets($fp);
    }
    fclose($fp);
    die("</div></body></html>");
}
?>
<script>
    teksHai = "Hai, ada surat buat kamu nih";
    konten = [
        { gambar: "sticker3.gif", ucapan: "Hai Sayang" },
        { gambar: "sticker1.gif", ucapan: " Aku sayang loh sama kamu" },
        { gambar: "sticker2.gif", ucapan: " Aku gak mau kamu pergi atau memilih orang lain " },
        { gambar: "sticker4.gif", ucapan: " Kalo aku punya salah minta maaf ya ayng" },
        { gambar: "sticker5.gif" },
    ];
    musik = "musik.mp3";
    nomorWhatsapp = "6288225715139";
    DekaTutorial(konten, musik, nomorWhatsapp);
</script>
</body>
</html>
