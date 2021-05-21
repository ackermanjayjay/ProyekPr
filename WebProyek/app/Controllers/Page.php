<?php

namespace App\Controllers;

class Page extends BaseController
{

    public function contact()
    {
        echo view('contact');
    }
    public function faqs()
    {
        echo view("faqs");
    }

public function about()
{
    echo view('about');
}
}
