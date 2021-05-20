<?php

namespace App\Controllers;

class Page extends BaseController
{

    public function contact()
    {
        echo "tangkap contak";
    }
    public function faqs()
    {
        echo view("faqs");
    }

public function about()
{
    echo "tangkp about";
}
}
