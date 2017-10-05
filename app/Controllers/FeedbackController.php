<?php

namespace App\Controllers;

use App\Models\Project;

class FeedbackController
{
    public function index()
    {
        $greeting = Project::greeting();
        return view('feedback/index', compact('greeting'));
    }
}
