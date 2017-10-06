<?php

namespace App\Controllers;

use App\Models\Feedback;

class FeedbackController
{
    protected $feedback;

    public function __construct()
    {
        $this->feedback = new Feedback;
    }

    public function index()
    {
        $feedbacks = $this->feedback->selectAll();
        return view('/feedback/index', compact('feedbacks'));
    }

    public function delete()
    {
        if (isset($_GET['id'])) {
            $this->feedback->deleteItem($_GET['id']);
            echo 'Deleted';
            redirect('feedback');
        } else {
            echo 'Delete error';
        }
    }
}
