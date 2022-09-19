<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
   public function index()
   {

    $word = "Oim Ngajar di STIMATA";
    return view('profile', ['word' => $word]);
    // return view('profile', compact('word');
   }
}
