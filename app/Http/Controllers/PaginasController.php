<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginasController extends Controller
{
	public function nosotros()
    {
    	return view('nosotros');
    }
    public function contacto()
    {
    	return view('contacto');
    }
    public function login()
    {
    	return view('login');
    }
    public function index()
    {
    	return view('index');
    }
   
}
