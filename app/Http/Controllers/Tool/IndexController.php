<?php

namespace App\Http\Controllers\Tool;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke(Request $request)
    {
        $links = [
            [
                'title' => '日付加減算',
                'url' => route('tool_date_add-subtract_index'),
            ]
        ];

        return view('pages.tool.index', [
            'links' => $links,
        ]);
    }
}
