<?php
namespace App\Controllers\Admin;

use App\Models\IndexAdmin;
use Core\App;

class AdminController
{
    protected $indexAdmin;

    public function __construct()
    {
        $this->verify();
    }

    public function verify()
    {
        if (isset($_SESSION['user'])) {
            $this->indexAdmin = new IndexAdmin;
        } else {
            $link = '/login';
            return view('not-access', compact('link'));
        }
    }

    public function index()
    {
        $indexAdmin = $this->indexAdmin->indexAdmin();
        $title = ['0' => ['title' => 'Bài đăng',
            'icon' => 'pencil',
            'link' => '/admin/shop',
        ],
            '1' => ['title' => 'User',
                'icon' => 'user',
                'link' => '/admin/user',
            ],
            '2' => ['title' => 'Danh mục',
                'icon' => 'list-alt',
                'link' => '/admin/type',
            ],
            '3' => ['title' => 'Phản hồi',
                'icon' => 'reply',
                'link' => '/admin/feedback',
            ],
        ];
        // foreach ($title as $titles) {
        //     foreach ($indexAdmin as $indexAdmins) {
        //         $titles['count']=$indexAdmin
        //     }
        // }
        // echo '<pre>';
        // var_dump($title);
        // echo '</pre>';
        return view('admin/index/index', compact('indexAdmin'));
    }
}
