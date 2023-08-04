<?php

namespace App\Http\Controllers\Tool\Date\AddSubtract;

use App\Http\Controllers\Controller;
use App\Rules\StrictYmd;
use DateTimeImmutable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ExecuteController extends Controller
{
    public function __invoke(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'base_date' => ['required', new StrictYmd],
            'operator' => ['required'],
            'day_num' => ['required', 'integer'],
        ]);
        $validator->validate();

        $baseDate = $request->post('base_date');
        $operator = $request->post('operator');
        $dayNum = $request->post('day_num');

        $baseDate = DateTimeImmutable::createFromFormat('Ymd', $baseDate);
        $operator = $operator === 'p' ? '+' : '-';
        $resultDate = $baseDate->modify($operator . $dayNum . 'days')->format('Y/m/d');

        return back()->withErrors($validator)->with('result', $resultDate);
    }
}
