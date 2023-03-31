@extends('layouts.main')

@section('title', 'Raimee Studios')

@section('content')

<strong>
    <div id='cabeca'>
    <strong> ..⋅˙ॱᐧ.˳˳.⋅˚ Which parties are happening now? ⋅ॱ⋅.˳˳.⋅˙ॱᐧ.˳˚</strong>
    </div>
</br></br>

<div id='searching'>
   
    <form action="/" method = "GET">
    
        <div id='center_search'>
        
        <p id='text-title'><strong>Search for a Party!</strong></p>
        <input type='text' id='search' name='search' placeholder="Search parties around you...">
        </div>
            <a href=""><button id="search_button"><strong>Search now</strong></button></a>
    </form>


</div>

@if($search)
            <h3>Buscando por: {{ $search }}</h3>
@endif
</br> 
<h5>Look for the next parties!</h5>
<div class="card">


@foreach($parties as $party)
    
       <div id='cards'> 
            <div class='title'>
                <strong>✧.* {{ $party->Title }} ✧.*</strong>
            </div>
           <div id='img-card'>
            <img  src="/img/parties/{{ $party->image  }}" width="150px" height="150px">
           </div> 
            
            <div class= 'conteudo'>
        {{ $party->description }}</br> 
    
            </div>
            <div class='city-center'>
               <p>City: {{ $party->city }}</p>
            </div>

            <div class='city-center'>Date: {{ date('d/m/y', strtotime($party->date))}}</div>

            <div class='buttons'>
            <a href="/parties/{{ $party->id }}"><button class="button"><strong>let's go!</strong></button></a>
        </div> 
  
       </div>
        
@endforeach
@if(count($parties) == 0 && $search)
    <p>There's no available parties named "{{ $search }}" :( </br><a href="/">Go back to homepage</a></p>
@elseif(count($parties) == 0)
    <p>There's no available parties yet :( </br><a href="/parties/create">Create new party</a></p>
@endif
</div>

@endsection
