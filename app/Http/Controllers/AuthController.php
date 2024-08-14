<?php

declare(strict_types=1);
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    /*
     * トップページを表示する
     *
     * @return \Illuminate\view\view
     *
    */
    public function index()
    {
        return view('index');
    }
}
