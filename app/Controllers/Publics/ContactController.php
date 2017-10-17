<?php

namespace App\Controllers\Publics;

use App\Models\Feedback;

class ContactController
{
    protected $feedback;

    public function __construct()
    {
        $this->feedback = new Feedback;
    }

    public function index()
    {
        return view('public/contact/index');
    }

    public function create()
    {
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $content = $_POST['content'];
        $email = $_POST['email'];

        $this->feedback->createFeedback($name, $phone, $email, $content);
        $_SESSION['notice_contact'] = 'Bạn đã gửi phản hồi thành công';
        redirect('contact');
    }
}
