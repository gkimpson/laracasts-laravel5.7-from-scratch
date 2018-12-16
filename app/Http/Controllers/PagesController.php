<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home() 
    {
        $tasks = ['task 1', 'task 2'];
        return view('welcome', [
            'tasks' => $tasks,
            'foo' => request('title'),
        ]); 
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }
}
