<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class SitemapController extends Controller
{
    public function __invoke(Request $request)
    {
        $routes = Route::getRoutes()->get('GET');

        $urls = [];
        foreach ($routes as $r) {
            if (!$this->isTargetRoute($r)) {
                continue;
            }
            $urls[] = 'https://sidearrow.net/' . ltrim($r->uri(), '/');
        }
        sort($urls);

        return response(implode("\n", $urls))->header('Content-Type', 'text/plain');
    }

    private function isTargetRoute(\Illuminate\Routing\Route $route): bool
    {
        $uri = $route->uri();
        if (str_starts_with($uri, '_debugbar')) {
            return false;
        }
        if (in_array($uri, ['sanctum/csrf-cookie', 'sitemap.txt', '_ignition/health-check'])) {
            return false;
        }
        return true;
    }
}
