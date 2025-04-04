$html = file_get_contents('https://www.stenalive.co.uk/holyhead.php');


//str_replace('<p style="font-family:Arial; color:#FF0000; font-size: 60px; text-align:center;">', "", $html);

$start = stripos($html, '<p style="font-family:Arial; color:#FF0000; font-size: 60px; text-align:center;">');
$end = stripos($html, '</p>', $offset = $start);
$length = $end - $start;
$gust = str_replace('<p style="font-family:Arial; color:#FF0000; font-size: 60px; text-align:center;">', "", substr($html, ($start), ($length)));

$html = substr($html, $end);//delete first part
$start = stripos($html, '<p style="font-family:Arial; color:#FF0000; font-size: 60px; text-align:center;">');
$end = stripos($html, '</p>', $offset = $start);
$length = $end - $start;
$ave = str_replace('<p style="font-family:Arial; color:#FF0000; font-size: 60px; text-align:center;">', "", substr($html, ($start), ($length)));

$html = substr($html, $end);//delete first part
$start = stripos($html, '<p style="font-family:Arial; color:#FF0000; font-size: 60px; text-align:center;">');
$end = stripos($html, '</p>', $offset = $start);
$length = $end - $start;
$dir = str_replace('<p style="font-family:Arial; color:#FF0000; font-size: 60px; text-align:center;">', "", substr($html, ($start), ($length-4)));

$html = substr($html, $end);//delete first part
$start = stripos($html, '<p style="font-family:Arial; color:#FF0000; font-size: 60px; text-align:center;">');
$end = stripos($html, '</p>', $offset = $start);
$length = $end - $start;
$tide = str_replace('<p style="font-family:Arial; color:#FF0000; font-size: 60px; text-align:center;">', "", substr($html, ($start), ($length)));

$html = substr($html, $end);//delete first part
$start = stripos($html, '<p style="font-family:Arial; color:#FF0000; font-size: 60px; text-align:center;">');
$end = stripos($html, '</p>', $offset = $start);
$length = $end - $start;
$wave = str_replace('<p style="font-family:Arial; color:#FF0000; font-size: 60px; text-align:center;">', "", substr($html, ($start), ($length)));

echo "Holyhead Live Weather = Gust {$gust} Ave {$ave} Dir {$dir} Tide {$tide} Wave {$wave}";
