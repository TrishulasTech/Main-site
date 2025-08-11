<?php

namespace App\Controllers\Frontend;

use App\Controllers\BaseController;

class HomeController extends BaseController
{
    public function index(): string
    {
        // return "Not Working";
        return view('Frontend/index');
    }

    public function contact(): string
    {
        return view('Frontend/layouts/header')
            . view('Frontend/contact')
            . view('Frontend/layouts/footer');
    }
    public function about(): string
    {
        return view('Frontend/Layouts/header')
            . view('Frontend/about')
            . view('Frontend/Layouts/footer');
    }
    public function projects(): string
    {
        return view('Frontend/Layouts/header')
            . view('Frontend/projects')
            . view('Frontend/Layouts/footer');
    }
    public function services(): string
    {
        return view('Frontend/Layouts/header')
            . view('Frontend/services')
            . view('Frontend/Layouts/footer');
    }
}
