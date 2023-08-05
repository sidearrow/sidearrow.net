<?php

namespace App\Http\Controllers;

class IndexController extends Controller
{
    public function __invoke()
    {
        $links = [
            ['title' => 'TOOL', 'url' => route('tool_index'), 'description' => '簡単なツールを公開しています'],
            ['title' => 'NOTE', 'url' => url('note'), 'description' => 'Web 関連技術などを雑多に公開しています'],
            ['title' => 'RAILWAY', 'url' => 'https://railway.sidearrow.net', 'description' => '鉄道関連データを収集して公開しています'],
        ];

        return view('pages.index', ['links' => $links]);
    }
}
