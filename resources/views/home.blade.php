@extends('layouts.main')

@section('title', 'Raimee Studios')

@section('content')

<strong>
    <div id='cabeca'>
        Home - Which parties are happening now?</strong>
    </div>
</br></br>

<div id='searching'>
   
    <form action="">
    
        <div id='center_search'>
        <p id='text-title'><strong>Search for a Party!</strong></p>
        <input type='text' id='search' name='search' placeholder="Search parties around you...">
        </div>
        <!-- <div class='center'> -->
            <a href=""><button id="search_button"><strong>Search now</strong></button></a>
        <!-- </div> -->
    </form>


</div>

<div class="card">
@foreach($parties as $party)
    
       <div id='cards'> 
            <div id='title'>
                <strong>-- {{ $party->Title }} --</strong>
            </div> 
    </br></br>
            <div id= 'conteudo'>
        {{ $party->description }}</br> {{ $party->city }}
        <div id='buttons'>
            <a href=""><button class="button"><strong>let's go!</strong></button></a>
        </div>    
            </div>
       </div>



@endforeach
</div>

@endsection
