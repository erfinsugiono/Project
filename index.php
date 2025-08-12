<?php 
require __DIR__ . '/vendor/autoload.php'; 
use Carbon\Carbon; 
echo "Sekarang: " . Carbon::now()->toDateTimeString() . PHP_EOL; echo "Besok: " . Carbon::now()->addDay()->toDateString() . PHP_EOL;