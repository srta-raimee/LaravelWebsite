@extends('layouts.main')

@section('title', $party->Title)

@section('content')

<h1 class='title-org'>✧.* {{ $party->Title }} ✧.*</h1>
<div class='content-org'>
    <div class='img-org'>
    <img  src="/img/parties/{{ $party->image  }}" width="550px" height="550px"> 
    </div>
    <div id='party-org'>
        <div class="org-icon">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQiuJlW_aywpqqGOQuCPBIovEsfhHxn3kGI6w&usqp=CAU">
        <p><strong> Where?</strong></p>
        </div>
        <p>{{ $party->city }}</p>
</br></br>

<div class="org-icon">
        <img src="data:image/png;base64,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">
            <p><strong>  About:</strong></p>
</div>
            <p>{{ $party->description }}</p>
            </br></br>
<div class="org-icon">
    <img src="https://cdn-icons-png.flaticon.com/512/3106/3106921.png">
            <p><strong>Owner:</strong> </p>       
</div>
</br>
<p><strong> X</strong> PEOPLE JOINED</p>
</br>
<div class="button-org">
        <a href=''>Join this party!</a>
</div>
    </div>
</div>

@endsection