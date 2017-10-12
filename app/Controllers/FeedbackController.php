<?php

namespace App\Controllers;

use App\Mailer\Mailer;
use App\Models\Feedback;

class FeedbackController
{
    protected $feedback;
    protected $mailer;

    public function __construct()
    {
        $this->verify();
    }

    public function verify()
    {
        if (isset($_SESSION['user'])) {
            $this->feedback = new Feedback;
            $this->mailer = new Mailer;
        } else {
            echo 'Ban khong co quyen truy cap trang nay';
        }
    }

    public function index()
    {
        die('a');
        $feedbacks = $this->feedback->selectAll();
        return view('feedback/index', compact('feedbacks'));
    }

    public function delete()
    {
        if (isset($_GET['id'])) {
            $this->feedback->deleteItem($_GET['id']);
            redirect('admin/feedback');
        } else {
            echo 'Delete error';
        }
    }

    public function reply()
    {
        if (isset($_POST['emailTo']) && isset($_POST['content'])) {
            $this->mailer->setEmailTo($_POST['emailTo']);
            $this->mailer->setContent($_POST['content']);
            $this->mailer->sendMail();
            redirect('admin/feedback');
        }
    }

    public function searchFeedback()
    {
        $feedbacks = $this->feedback->searchFeedback();
        return view('feedback/feedbacksTable', compact('feedbacks'));
    }
}
