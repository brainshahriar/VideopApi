<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index()
    {
      return view('frontend.pages.faq');
    }
    public function create()
    {
      return view('backend.pages.faq.create');
    }

}
