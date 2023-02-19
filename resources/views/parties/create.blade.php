@extends('layouts.main')
@section('title', 'Create a Party')
@section('content')


    <div id='cabeca'>
    <strong>
        Create a Party!
    </strong>
    </div>

    <form action="/events" method='POST' class='form'>
     <div class='label-title'>
           <label for="title">Name:</label>
     </div>

     <div>
         <input class='form-input' type='text' id='Title' name='Title' placeholder="Party Name">
     </div>

    <div class='label-title'>
         <label for="title">Description:</label></br>
    </div>

    <div >
         <input class='form-input' type='text' id='description' name='description' placeholder="Describe your party">
    </div>

     <div class='label-title'>
            <label for="title">City:</label></br>
     </div>

     <div >
        <input class='form-input'type='text' id='city' name='city' placeholder="Where your party will be?">
     </div>

    <div class='label-title'>
         <label for="title">Private?</label></br>
    </div>

    <div >
         <input class='form-input' type='text' id='private' name='private' placeholder="Is it private?">
    </div>
        </form>
</br></br>

@endsection