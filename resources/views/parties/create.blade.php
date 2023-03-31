@extends('layouts.main')
@section('title', 'Create a Party')
@section('content')


<div id='cabeca'>
    <strong>
        Create a Party!
    </strong>
</div>

<form action="/parties" method='POST' class='form' enctype="multipart/form-data">
    @csrf <!-- é o que permite enviar dados ao banco. precisamos dele! -->

    <div class='label-title'>
        <label for="image">Party Image:</label>
    </div>
    <input type="file" id='image' name='image' class='input-image'>

    <div class='label-title'>
        <label for="title">Name:</label>
    </div>

    <input class='form-input' type='text' id='Title' name='Title' placeholder="Party Name">

    <div class='label-title'>
        <label for="title">City:</label></br>
    </div>

    <input class='form-input' type='text' id='city' name='city' placeholder="Where your party will be?">


    <div class='label-title'>
        <label for="title">Description:</label></br>
    </div>


    <input class='form-input' type='text' id='description' name='description' placeholder="Describe your party">


    <div class='label-title'>
        <label for="title">Private?</label></br>
    </div>

    <div>
        <select name='private' id='private'>
            <option value="0">No</option>
            <option value='1'>Yes</option>
        </select>
    </div>

    <div>
    <label for='date'>Party Date:</label>
    </div>
        <div>
        
        <div class='date'>
            <input class='date' type='date' name='date'>
        </div>
    </div>
    </br></br>

    <label for='title'><b>Add items for your party:</b></label>
    <div>
        <div class='org-checks'>
        
        <div class='checks'>
            <input class='checks' type='checkbox' name='items[]' value='stage'>Stage
        </div>

        
        <div class='checks'>
            <input class='checks' type='checkbox' name='items[]' value='chair'>Chairs
        </div>

        <div class='checks'>
            <input class='checks' type='checkbox' name='items[]' value='food'>Food
        </div>

        <div class='checks'>
            <input class='checks' type='checkbox' name='items[]' value='drink'>Drinks
        </div>

        <div class='checks'>
            <input class='checks' type='checkbox' name='items[]' value='waiter'>Waiter
        </div>

        <div class='checks'>
            <input class='checks' type='checkbox' name='items[]' value='ballon'>Ballons
        </div>

        <div class='checks'>
            <input class='checks' type='checkbox' name='items[]' value='LED'>LED
        </div>
        </div>





    </div>

    <button class="button"><strong>Submit</strong></button>
</form>
</br></br>


@endsection