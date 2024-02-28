<?php

namespace App\Controllers;

use App\Models\PostModel;

class Benar extends BaseController
{
    public function index()
    {
        $sess = session();
        $sess->start();
        $post_model = new PostModel();
        list($categories, $posts) = $post_model->getAllPost('default');
        $data['posts'] = $posts;
        $data['categories'] = $categories;
        echo view('templates/header');
        echo view('benar', $data);
        echo view('templates/footer');
    }
}
