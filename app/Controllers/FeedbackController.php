<?php

namespace App\Controllers;

use App\Models\Project;
use Core\App;

class FeedbackController
{
    public function index()
    {
        $greeting = Project::greeting();
        return view('feedback/index', compact('greeting'));
    }

    public function store() {}

    public function delete() {}
}
