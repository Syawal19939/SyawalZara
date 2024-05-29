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

if (isset($_GET['pesan'])) {
    $fp = fopen('data.html', 'r');
    $content = '';
    while (!feof($fp)) {
        $content .= fgets($fp);
    }
    fclose($fp);
    echo $content;
    die;
}
?>
