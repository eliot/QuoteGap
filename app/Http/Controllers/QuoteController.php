<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class QuoteController extends Controller
{    
    /**
     * The home page
     *
     * @return Response
     */
    public function home()
    {
        return view('home');
    }
    
    /**
     * Show the page for a quotable person
     *
     * @param  string  $slug
     * @return Response
     */
    public function person($slug)
    {
        return view('person');
    }
    
    /**
     * Permalink for a single quote
     *
     * @param  string  $id
     * @return Response
     */
    public function quote_single($id)
    {

        return view('person');
    }
}