<?php

namespace App\Http\Controllers;
use App\Models\ExpertContact;

use Illuminate\Http\Request;

class ExpertContactController extends Controller
{
    //
    public function index()
     {
         $expert = ExpertContact::latest()->get();
         return view('contactus', compact('expert'));
     }

}
