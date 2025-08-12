<?php
require __DIR__ . '/vendor/autoload.php';

use Carbon\Carbon;

Carbon::setLocale('id');
date_default_timezone_set('Asia/Jakarta');

$tanggal = Carbon::now()->addDays(7);
$output = $tanggal->translatedFormat('l, d F Y');


if (isset($_POST['export'])) {
    file_put_contents(__DIR__ . '/hasil.txt', "Tanggal 7 hari ke depan: $output");
    $message = "File hasil.txt berhasil disimpan!";
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Export Carbon Date</title>
</head>
<body>
    <h1>Tanggal 7 hari ke depan:</h1>
    <p><?= $output ?></p>

    <form method="post">
        <button type="submit" name="export">Export ke hasil.txt</button>
    </form>

    <?php if (!empty($message)): ?>
        <p style="color:green;"><?= $message ?></p>
    <?php endif; ?>
</body>
</html>
