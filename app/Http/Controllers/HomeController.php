<?php

namespace App\Http\Controllers;
use App\books;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $books = books::orderBy('id', 'desc')->get();
        
        return view('home', ['datas' => $books]);
    }
}