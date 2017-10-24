<?php

namespace App\Controllers\Admin;

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
            $link = '/login';
            return view('not-access', compact('link'));
        }
    }

    public function index()
    {
        $feedbacks = $this->feedback->selectAll();
        return view('admin/feedback/index');
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
            $feedbackFromUser = $_POST['feedbackFromUser'];
            $email = $_POST['emailTo'];

            $content = "{$email}: ";
            $content .= '<br>';
            $content .= "<i>\"{$feedbackFromUser}\"</i>";
            $content .= '<br><br>';
            $content .= $_POST['content'];

            $this->mailer->setEmailTo($email);
            $this->mailer->setContent($content);
            $this->mailer->sendMail();
            redirect('admin/feedback');
        }
    }

    public function searchFeedback()
    {
        $feedbacks = $this->feedback->searchFeedback();
        return view('admin/feedback/feedbacksTable', compact('feedbacks'));
    }
}
