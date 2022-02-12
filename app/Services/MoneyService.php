<?php

namespace App\Services;



use App\Contracts\Money;

class MoneyService implements Money
{

    public function CBR_XML_Daily_Ru($link)
    {
        static $rates;

        if ($rates === null) {
            $rates = json_decode(file_get_contents($link));
        }
        foreach ($rates->Valute as $Valute)
        {
            $Valute->changes = $Valute->Value - $Valute->Previous;
        }


        return $rates;
    }
}
