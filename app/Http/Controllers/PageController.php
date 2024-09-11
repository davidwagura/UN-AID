<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function services()
    {
        return view('pages.services');
    }

    public function about()
    {
        return view('pages.about');
    }
    public function mission()
    {
        return view('pages.mission');
    }

    public function index()
    {
        $users = User::all(); // Retrieve all users

        return view('admin.users.index', compact('users')); // Return view with users

    }
    
}
