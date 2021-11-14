<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Mail\ContactUs;
use Mail; 



class FrontController extends Controller
{
    //======== Home Page ======== 
    public function index()
    {
        return view('front.welcome');     
    }

}
