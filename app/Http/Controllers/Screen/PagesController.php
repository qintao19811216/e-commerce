<?php

namespace App\Http\Controllers\Screen;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function app()
    {
    	return view('screens.layouts.app');
    }

    public function root()
    {
    	return view('screens.pages.root');
    } 
}
