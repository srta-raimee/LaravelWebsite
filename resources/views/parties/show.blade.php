@extends('layouts.main')

@section('title', $party->Title)

@section('content')

<h1 class='title'>--- {{ $party->Title }} ---</h1>
<div class='content-org'>
    <div class='img-org'>
    <img  src="/img/parties/{{ $party->image  }}" width="550px" height="550px"> 
    </div>
    <div class='party-org'>
        <p><strong>Where?</strong></p>
        <p>{{ $party->city }}</p>
</br></br>
            <p><strong>About this Party:</strong></p>
            <p>{{ $party->description }}</p>
            </br></br>

            <p><strong>Event Owner:</strong> </p>
            <p><strong>X</strong> PEOPLE JOINED</p>

</br>
<div id="button-org">
        <a href=''>Join this party!</a>
</div>
    </div>
</div>

@endsection