<?php

namespace App\Controllers;

use App\Models\Feedback;

class FeedbackController
{
    public function index()
    {
        $feedbacks = (new Feedback)->selectAll();
        return view('feedback/index', compact('feedbacks'));
    }
}
