<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\View;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    protected function setTitle(string $title): void
    {
        View::share('title', sprintf('%s | sidearrow.net', $title));
    }

    protected function setBreadcrumb(array $items): void
    {
        array_unshift($items, [
            'url' => route('index'), 'title' => 'sidearrow.net',
        ]);

        View::share('breadcrumb', $items);
    }
}
