<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function aboutme() {
      return view("pages.aboutme");
    }

    public function contact() {
      return view("pages.contact");
    }

    public function admin()
    {
      return view("admin.layout.index");
    }
}
