<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\info;
use Illuminate\Http\Request;

class PublikController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
        return view('Home.Layout');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function publik()
    {
        return view('Publik.Dashboard');
    }

}