<?php

namespace src\Views;

date_default_timezone_set('asia/manila');

class DateTimeView
{
    public function renderDateTime($dateOne, $dateTwo, $dateThree, $dateFour,
    $dateFive, $dateSix, $dateSeven)
    {
        echo "Date Format One:  $dateOne<br><br>";
        echo "Date Format Two:  $dateTwo<br><br>";
        echo "Date Format Three:  $dateThree<br><br>";
        echo "Date Format Four:  $dateFour<br><br>";
        echo "Date Format Five:  $dateFive<br><br>";
        echo "Date Format Six:  $dateSix<br><br>";
        echo "Date Format Seven:  $dateSeven<br>";
    }
}

