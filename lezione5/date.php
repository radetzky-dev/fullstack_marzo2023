<?php

echo 'Now: ' . time() . '<br>';

echo $_SERVER['REQUEST_TIME'];

echo strtotime("now"), "<br>";
echo strtotime("10 September 2000"), "<br>";
echo strtotime("+1 day"), "<br>";
echo strtotime("+1 week"), "<br>";
echo strtotime("+1 week 2 days 4 hours 2 seconds"), "<br>";
echo strtotime("next Thursday"), "<br>";
echo strtotime("last Monday"), "<br>";

// Prints something like: Monday
echo date("l") . '<br>';

// Prints something like: Monday 8th of August 2005 03:12:46 PM
echo date('l jS \of F Y h:i:s A');
echo "<br>";

// Prints: July 1, 2000 is on a Saturday
echo "July 1, 2000 is on a " . date("l", mktime(0, 0, 0, 7, 1, 2000));
echo "<br>";
echo "Today is on a " . date("l", mktime(0, 0, 0, 3, 17, 2024));

echo "<br>";
echo date('l \t\h\e jS');

echo "<br>";
$tomorrow = mktime(0, 0, 0, date("m"), date("d") + 1, date("Y"));
$lastmonth = mktime(0, 0, 0, date("m") - 1, date("d"), date("Y"));
$nextyear = mktime(0, 0, 0, date("m"), date("d"), date("Y") + 1);


echo "Domani $tomorrow | Mese scorso $lastmonth | anno prossimo $nextyear <br>";

echo "<br>Domani  " . date("l j-m-Y", $tomorrow);
echo "<br>Mese scorso  " . date("l j-m-Y", $lastmonth);
echo "<br>Anno prossimo  " . date("l j-m-Y", $nextyear);

echo "<hr>";
$today = date("F j, Y, g:i a");                 // March 10, 2001, 5:16 pm
echo $today . '<br>';
$today = date("d.m.y");                         // 03.10.01
echo $today . '<br>';
$today = date("j, n, Y");                       // 10, 3, 2001
echo $today . '<br>';
$today = date("Y-m-d");                           // 20010310
echo $today . '<br>';
$today = date('h-i-s, j-m-y, it is w Day');     // 05-16-18, 10-03-01, 1631 1618 6 Satpm01
echo $today . '<br>';
$today = date('\i\t \i\s \t\h\e jS \d\a\y.');   // it is the 10th day.
echo $today . '<br>';
$today = date("D M j G:i:s T Y");               // Sat Mar 10 17:16:18 MST 2001
echo $today . '<br>';
$today = date('H:m:s \m \i\s\ \m\o\n\t\h');     // 17:03:18 m is month
echo $today . '<br>';
$today = date("H:i:s");                         // 17:16:18
echo "Solo le ore " . $today . '<br>';
$today = date("Y-m-d H:i:s");                   // 2001-03-10 17:16:18 (the MySQL DATETIME format)

echo "<hr>";

echo date("M-d-Y", mktime(0, 0, 0, 12, 32, 1997));
echo "<br>";
echo date("M-d-Y", mktime(0, 0, 0, 14, 1, 1997));
echo "<br>";
echo date("m-d-Y", mktime(0, 0, 0, 1, 1, 1998));
echo "<br>";
echo date("m-d-Y", mktime(0, 0, 0, 1, 1, 98));
echo "<br>";

echo "<hr>";
$today = getdate();
echo "<pre>";
print_r($today);
echo "</pre>";
/*
(
    [seconds] => 40
    [minutes] => 58
    [hours]   => 21
    [mday]    => 17
    [wday]    => 2
    [mon]     => 6
    [year]    => 2003
    [yday]    => 167
    [weekday] => Tuesday
    [month]   => June
    [0]       => 1055901520
*/

echo $today['hours'] . ':' . $today['minutes'] . '<br>';

echo "Oggi è il " . $today['mday'] . " " . $today['mon'] . ' ' . $today['year'] . ' <br>';

echo "Mese " . $today['month'] . ' <br>';

$Now = new DateTime('now', new DateTimeZone('Europe/Rome'));
echo "In Italia sono le " . $Now->format('d-m-Y H:i:s');

echo "<hr>";


$utc_timezone = new DateTimeZone("UTC");
$tallinn_timezone = new DateTimeZone("Asia/Dubai");

// Create a new DateTime object in the UTC format
$datetime = new DateTime('now', $utc_timezone);

// Convert the DateTime object to the timezone of Tallinn
$datetime->setTimezone($tallinn_timezone);
// Display the result in the YYYY-MM-DD HH:MM:SS format
echo "<br>A Dubai sono le " . $datetime->format('Y-m-d H:i:s');

$tallinn_timezone = new DateTimeZone("Asia/Taipei");
$datetime = new DateTime('now', $utc_timezone);

// Convert the DateTime object to the timezone of Tallinn
$datetime->setTimezone($tallinn_timezone);
// Display the result in the YYYY-MM-DD HH:MM:SS format
echo "<br>A Taipei sono le " . $datetime->format('Y-m-d H:i:s');

echo "<hr>";

$date = DateTimeImmutable::createFromFormat('j-M-Y', '15-Feb-2009');
echo $date->format('d-m-Y');

echo "<hr>";
echo 'Current time: ' . date('d-m-Y H:i:s') . "<br>";

$format = 'Y-m-d';
$date = DateTimeImmutable::createFromFormat($format, '2009-02-15');
echo "Format: $format; " . $date->format('Y-m-d H:i:s') . "<br>";

$format = 'Y-m-d H:i:s';
$date = DateTimeImmutable::createFromFormat($format, '2009-02-15 15:16:17');
echo "Format: $format; " . $date->format('Y-m-d H:i:s') . "<br>";

$format = 'Y-m-!d H:i:s';
$date = DateTimeImmutable::createFromFormat($format, '2009-02-15 15:16:17');
echo "Format: $format; " . $date->format('Y-m-d H:i:s') . "<br>";

$format = '!d';
$date = DateTimeImmutable::createFromFormat($format, '15');
echo "Format: $format; " . $date->format('Y-m-d H:i:s') . "<br>";

$format = 'i';
$date = DateTimeImmutable::createFromFormat($format, '15');
echo "Format: $format; " . $date->format('Y-m-d H:i:s') . "<br>";

echo "<hr>";

$format = 'd-m-Y';
$date = DateTimeImmutable::createFromFormat($format, '01-03-2024');
echo "Format: $format; " . $date->format('Y-m-d') . "<br>";

echo "<hr>";
$date = new DateTimeImmutable();
$newDate = $date->setDate(2001, 2, 3);
echo $newDate->format('d-m-Y');

echo "<hr>";
$date = new DateTimeImmutable('2001-01-01');

$newDate = $date->setTime(14, 55);
echo $newDate->format('Y-m-d H:i:s') . "<br>";

$newDate = $date->setTime(16, 21, 24);
echo $newDate->format('d-m-Y H:i:s') . "<br>";

echo "<hr>";
$date = new DateTime('2006-12-31');
$date->modify('+1 day');
echo $date->format('Y-m-d');

echo "<hr>";
$date = new DateTime('2000-12-31');

$date->modify('+1 month');
echo $date->format('Y-m-d') . "<br>";

$date->modify('+2 month');
echo $date->format('Y-m-d') . "<br>";

$date->modify('+6 month');
echo $date->format('Y-m-d') . "<br>";

echo "<hr>";
$date = new DateTimeImmutable('2000-01-01');
$newDate = $date->add(new DateInterval('P2M'));
echo $newDate->format('Y-m-d') . "<br>";

$date = new DateTimeImmutable('2022-01-01');
$newDate = $date->add(new DateInterval('P2Y2M17D'));
echo $newDate->format('Y-m-d') . "<br>";

$date = new DateTimeImmutable('2000-01-20');
$newDate = $date->sub(new DateInterval('P10D'));
echo $newDate->format('Y-m-d') . "<br>";

$date = new DateTimeImmutable('2024-03-18');
$newDate = $date->sub(new DateInterval('P1Y17D'));
echo $newDate->format('Y-m-d') . "<br>";

echo "<hr>";
$date = new DateTimeImmutable('2000-01-01');
echo $date->format('Y-m-d H:i:s') . '<br>';
echo $date->format('l jS \o\f F Y h:i:s A'), "<br>";

echo "<br>";
$origin = new DateTimeImmutable('2009-10-11');
$target = new DateTimeImmutable('2019-12-09');
$interval = $origin->diff($target);
echo $interval->format('%R%a days %m %Y');

echo "<br>";
$originalTime = new DateTimeImmutable("2023-01-01 UTC");
$targedTime = new DateTimeImmutable("2023-12-31 UTC");
$interval = $originalTime->diff($targedTime);
echo "Full days: ", $interval->format("%a"), "<br>";

echo "<hr>";
$start_date = date_create("2021-01-01");
$end_date = date_create("2021-01-16"); // If you want to include this date, add 1 day

$interval = DateInterval::createFromDateString('3 day');
$daterange = new DatePeriod($start_date, $interval, $end_date);

function show_dates($dr)
{
    foreach ($dr as $date1) {
        echo $date1->format('d-m-Y') . '<br>';
    }
}

show_dates($daterange);

echo '<br>';

// reverse the array

$daterange = array_reverse(iterator_to_array($daterange));

show_dates($daterange);