<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function welcome() /* Define a visualização view Welcome */
    {
        return view('welcome');
    }

    public function plans() /* Define a visualização da view Planos */
    {
        return view('planos');
    }


}
