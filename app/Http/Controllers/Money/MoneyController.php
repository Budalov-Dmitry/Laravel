<?php

namespace App\Http\Controllers\Money;

use App\Contracts\Money;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MoneyController extends Controller
{

    public function index(Money $service)
    {
        $data = $service->CBR_XML_Daily_Ru('https://www.cbr-xml-daily.ru/daily_json.js');
        //dd($data);
        return view('money', [
            'data' => $data
        ]);
    }

}
