<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavigationController extends Controller
{
    public function home(Request $request)
    {
        $search = $request->get('search', '');
        return view('home', compact('search'));
    }

    public function catalog(Request $request)
    {
        $search = $request->get('search', '');
        return view('catalog', compact('search'));
    }

    public function survey(Request $request)
    {
        $search = $request->get('search', '');
        return view('survey', compact('search'));
    }

    public function contactus(Request $request)
    {
        $search = $request->get('search', '');
        return view('contactus', compact('search'));
    }


}
