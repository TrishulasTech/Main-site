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
}
