<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Party;

class PartyController extends Controller
{
    public function index(){
        $parties = Party::all();
        return view('home', ['parties' => $parties]);
    }

    public function create(){
        return view('parties.create');
    }

    public function signin(){
        return view('signin');
    }

    public function signup(){
        return view('signup');
    }
}


