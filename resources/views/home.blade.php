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
            <a href=""><button id="search_button"><strong>Search now</strong></button></a>
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
        {{ $party->description }}</br> 
    
            </div>
            <div id='city-center'>
               <strong><p>Where? </p>{{ $party->city }}</strong>
            </div>

            <div id='buttons'>
            <a href="/parties/{{ $party->id }}"><button class="button"><strong>let's go!</strong></button></a>
        </div> 
  
       </div>
        
@endforeach

</div>

@endsection
