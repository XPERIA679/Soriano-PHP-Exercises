<?php

namespace src\Models;

class DateTimeModel
{
    public function dateOne()
    {
        return date("l jS \of F Y h:i:s A");
    }

    public function dateTwo()
    {
        return date(DATE_COOKIE);
    }

    public function dateThree()
    {
        return date(DATE_ATOM);
    }

    public function dateFour()
    {
        return date(DATE_RFC822);
    }

    public function dateFive()
    {
        return date(DATE_RFC850);
    }

    public function dateSix()
    {
        return date(DATE_RSS);
    }

    public function dateSeven()
    {
        return date(DATE_RFC3339_EXTENDED);
    }
}
