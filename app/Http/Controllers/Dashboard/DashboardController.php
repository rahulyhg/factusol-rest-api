<?php

namespace App\Http\Controllers\Dashboard;

use App\Components\Controller;

class DashboardController extends Controller
{
    public function Index()
    {
        $data = [
            'title' => 'Dashboard',
            'description' => 'Control panel',
            'sidebar_active' => 'dashboard',
        ];

        return view('dashboard.index', $data);
    }

    public function getChangeLog()
    {
        $path = base_path('CHANGELOG.md');
        $content = file_get_contents($path);
        $content = str_replace('# Change Log', '', $content);

        $engine = new \Parsedown();

        $data = [
            'title' => 'ChangeLog',
            'description' => 'File where version changes are specified',
            'content' => $engine->text($content)
        ];

        return view('dashboard.content', $data);
    }
}