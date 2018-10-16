<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome To Laravel!';
        $p1 = 'This is the Laravel application from YTzz';
        return view('pages/index')
            ->with('title', $title)
            ->with('p1', $p1);;
    }

    public function about(){
        $title = 'About Laravel!';
        return view('pages/about')
            ->with('title', $title);
    }

    public function services(){
        $data = array(
            'title' => 'Services',
            'services' => ['Web Design', 'Programming', 'SEO']
        );
        return view('pages/services')->with($data);
    }
}
