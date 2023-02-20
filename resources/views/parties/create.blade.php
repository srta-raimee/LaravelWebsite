@extends('layouts.main')
@section('title', 'Create a Party')
@section('content')


    <div id='cabeca'>
    <strong>
        Create a Party!
    </strong>
    </div>

    <form action="/parties" method='POST' class='form'>
     @csrf   <!-- é o que permite enviar dados ao banco. precisamos dele! -->
     <div class='label-title'>
           <label for="title">Name:</label>
     </div>

         <input class='form-input' type='text' id='Title' name='Title' placeholder="Party Name">
   
         <div class='label-title'>
            <label for="title">City:</label></br>
     </div>

        <input class='form-input'type='text' id='city' name='city' placeholder="Where your party will be?">


    <div class='label-title'>
         <label for="title">Description:</label></br>
    </div>


         <input class='form-input' type='text' id='description' name='description' placeholder="Describe your party">

    
    <div class='label-title'>
         <label for="title">Private?</label></br>
    </div>

    <div >
        <select name='private' id='private'>
          <option value="0">No</option>
          <option value='1'>Yes</option>
        </select>
    </div>
    <button class="button"><strong>Submit</strong></button>
        </form>
</br></br>
    

@endsection