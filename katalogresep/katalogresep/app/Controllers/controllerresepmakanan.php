<?php

namespace App\Controllers;

class ControllerResepMakanan extends BaseController
{
    protected $about;

    public function __construct()
    {
        $this->about = 'about';
    }

    public function about()
    {
        return view($this->about);
    }

    public function ayamBlue()
    {
        return view('ayamblue');
    }

    public function beef()
    {
        return view('beef');
    }

    public function index()
    {
        return view('index');
    }

    public function potato()
    {
        return view('potato');
    }
}
