<?php
$annoCorrente = date("Y");
$nomeAzienda = "MYCOMPANY s.r.l.";

echo "© " . "copyright " . $annoCorrente . " " . $nomeAzienda;
echo "<hr>";


//data corrente
$dataCorrente = date("Y-m-d");
$formati = array("Y/m/d", "y.m.d", "d.m.y");

foreach ($formati as $formato) {
    echo date($formato, strtotime($dataCorrente)) . "<br>";
}
echo "<hr>";

/**
 * getBirthdayCountdown
 *
 * @param  mixed $birthdate
 * @return DateInterval
 */
function getBirthdayCountdown(DateTime $birthdate): DateInterval
{

    $today = new DateTime('now');
    $todayYear = (int) $today->format('Y');

    $todayMonth = (int) $today->format('n');
    $todayDay = (int) $today->format('j');

    $birthday = new DateTime();
    $birthdayDay = (int) $birthdate->format('j');
    $birthdayMonth = (int) $birthdate->format('n');

    if ($birthdayMonth < $todayMonth) {
        $todayYear++;
    }

    if ($birthdayMonth == $todayMonth && $birthdayDay < $todayDay) {
        $todayYear++;
    }

    $birthday->setDate($todayYear, $birthdayMonth, $birthdayDay);

    return $birthday->diff($today);
}


$dates = [
    '13-1-2001',
    '11-2-2001',
    '10-9-2001',
    '14-5-2001',
    '28-03-2001',
    '19-03-2001',
    '18-03-2001',
    '17-03-2001'
];

foreach ($dates as $date) {
    $interval = getBirthdayCountdown(
        DateTime::createFromFormat('j-n-Y', $date)
    );
    $suffix = $interval->days > 1 ? 'i' : 'o';
    echo PHP_EOL;

    if ($interval->days == 0) {
        echo '<br>' . $date . ' Tanti auguri oggi è il tuo compleanno!';
    } else {
        echo '<br>' . $date . ' Al tuo compleanno manca ' . $interval->days . ' giorn' . $suffix;
    }

}