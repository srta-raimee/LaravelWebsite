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

    public function store(Request $request){

        $party = new Party;

        $party->Title = $request->Title;
        $party->city = $request->city;
        $party->description = $request->description;
        $party->private = $request->private;
    //image upload 

    if($request->hasFile('image') && $request->file('image')->isValid()){

        $requestImage = $request->image;
        $extension = $requestImage->extension();
        $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
        $request->image->move(public_path('./img/parties'), $imageName);
        $party->image= $imageName;

    }    

        $party->save();

        return redirect('/')->with('msg', 'Party has been successfully created!');


    }

    public function show($id){
        $party = Party::findOrFail($id);

        return view('parties.show', ['party'=> $party]);
    }
}


