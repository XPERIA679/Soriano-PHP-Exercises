<?php

namespace src\Controllers;

use src\Models\DateTimeModel;
use src\Views\DateTimeView;

class DateTimeController
{
    private $dateTimeModel;
    private $dateTimeView;

    public function __construct()
    {
        $this->dateTimeModel = new DateTimeModel();
        $this->dateTimeView = new DateTimeView();
    }

    public function displayDateTime()
    {
        $dateOne = $this->dateTimeModel->dateOne();
        $dateTwo = $this->dateTimeModel->dateTwo();
        $dateThree = $this->dateTimeModel->dateThree();
        $dateFour = $this->dateTimeModel->dateFour();
        $dateFive = $this->dateTimeModel->dateFive();
        $dateSix = $this->dateTimeModel->dateSix();
        $dateSeven = $this->dateTimeModel->dateSeven();

        $this->dateTimeView->renderDateTime($dateOne, $dateTwo, $dateThree, 
        $dateFour, $dateFive, $dateSix, $dateSeven);
    }
}

