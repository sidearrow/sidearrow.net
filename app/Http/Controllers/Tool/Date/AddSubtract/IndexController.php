<?php

namespace App\Http\Controllers\Tool\Date\AddSubtract;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __invoke()
    {
        $form = [
            'base_date' => old('base_date', date('Ymd')),
            'operator' => 'p',
            'day_num' => '10',
        ];

        $result = session('result');

        return view('pages.tool.date.index', ['form' => $form ,'result' => $result]);
    }
}
