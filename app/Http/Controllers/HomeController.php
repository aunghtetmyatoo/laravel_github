<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $data = "Home Page Template";
        return view('home', compact('data'));
    }

    public function phpPage() {
        $data = array(
            "lesson1" => "this is php lesson1",
            "lesson2" => "this is php lesson2",
            "lesson3" => "this is php lesson3",
        );
        return view('php', compact('data'));
    }

    public function jsPage() {
        $data = array(
            "lesson1" => "this is js lesson1",
            "lesson2" => "this is js lesson2",
            "lesson3" => "this is js lesson3",
        );
        return view('php', compact('data'));
    }
}
