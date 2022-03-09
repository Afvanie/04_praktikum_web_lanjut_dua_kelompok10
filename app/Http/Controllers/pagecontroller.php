<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagecontroller extends Controller
{
    public function home()
    {
        return view('home', ['title' => '- Home Page']);
    }

    public function program()
    {
        return view('program', ['title' => '- Program' ]);
    }
    public function news()
    {
        return view('news', ['title' => '- News' ]);
    }
    public function about()
    {
        return view('about', ['title' => '- About Us']);
    }
    public function contact()
    {
        return view('contact', ['title' => '- Contact Us']);
    }
    public function product()
    {
        return view('product', ['title' => '- product']);
    }
}