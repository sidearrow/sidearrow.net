<?php

namespace App\Http\Controllers\Tool\Date\AddSubtract;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

class IndexController extends Controller
{
    public function __invoke()
    {
        $form = [
            'base_date' => old('base_date', date('Ymd')),
            'operator' => old('operator', 'p'),
            'day_num' => old('day_num', '10'),
        ];

        $message = session('message');
        $result = session('result');

        $this->setBreadcrumb([
            ['title' => 'tool', 'url' => route('tool_index')],
            ['title' => '日付の加減算', 'url' => null],
        ]);
        $this->setTitle('日付の加減算');

        return view('pages.tool.date.index', ['form' => $form, 'result' => $result, 'message' => $message]);
    }
}
