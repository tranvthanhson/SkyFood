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
        $this->feedback = new Feedback;
        $this->mailer = new Mailer;
    }

    public function index()
    {
        // $feedbacks = $this->feedback->selectAll();
        // return view('/feedback/index', compact('feedbacks'));

        $this->mailer->setEmailTo('tranvthanhson@gmail.com');
        $this->mailer->setContent('Dell Vostro so coll');
        $this->mailer->sendMail();
    }

    public function delete()
    {
        if (isset($_GET['id'])) {
            $this->feedback->deleteItem($_GET['id']);
            redirect('feedback');
        } else {
            echo 'Delete error';
        }
    }

    public function reply()
    {
        // redirect('feedback');
        // echo 'hihi';
        // echo $_GET['emailTo'] . ' _ ' . $_GET['content'];
    }
}
