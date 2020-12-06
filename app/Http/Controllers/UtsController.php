<?php 

namespace App\Http\Controllers;

class UtsController extends Controller
{
    public function uts()
    {
        return view("master.main");
    }

    public function satu()
    {
        return view("master.test");
    }
}