<?php 
require __DIR__ . '/vendor/autoload.php'; 
use Carbon\Carbon;

//https://carbon.nesbot.com/docs/
//https://www.php.net/manual/en/timezones.php
date_default_timezone_set("Asia/Jakarta");

// https://dev.to/rizkypujiraharja/cara-mengubah-format-tanggal-menjadi-bahasa-indonesia-di-laravel-iim

Carbon::setLocale('id');
$save = "7 hari ke depan: " . Carbon::now()->addDay(7)->isoFormat('dddd, D MMMM Y'). PHP_EOL;

?>

<!DOCTYPE html>
<html>
<body>



<?php
echo "Sekarang: " . Carbon::now()->toDateTimeString() . PHP_EOL;
echo "<br>";
echo  $save;


//browsing https://www.google.com/search?q=save+files+with+php&rlz=1C1ONGR_enID1078ID1078&oq=save+files+with+php&aqs=chrome..69i57j0i22i30j0i512i546j0i751.5890j0j4&sourceid=chrome&ie=UTF-8
 $filename = "another_file.txt";
    $file_handle = fopen($filename, "w") or die("Couldn't open file for writing!");
    fwrite($file_handle, $save);
    fclose($file_handle);
    echo "<br>Content written to " . $filename;
?>
</body>
</html>