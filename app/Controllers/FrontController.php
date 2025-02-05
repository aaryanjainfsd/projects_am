<?php

namespace App\Controllers;

class FrontController extends BaseController
{
    public function index(): string
    {
        return view('front/index');
    }
}
