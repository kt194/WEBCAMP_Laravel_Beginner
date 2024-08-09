<?php

declare(strict_type=1);
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
    * トップページ を表示する
    *
    * @return \illuminate\view\view
    */
    public function index()
    {
        return view('welcome');
    }
    
    /**
     *  2ndページ を表示する
     * 
     * @return \Illuminate\View\View
     */
     public function second()
     {
         return view('welcome_second');
     }
}
