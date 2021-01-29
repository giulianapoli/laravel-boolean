@extends('layouts.main')

@section('content')

<div class="jumbotron">

    <ul class="menu">
    
            <li class="">
                ID: {{ $users->id }}, 
                Nome: {{ $users->first_name }}, 
                Cognome: {{ $users->last_name}}, 
                Sesso: {{$users->gender}}, ProfilePic: <img src="{{$users->image}}" alt="">
            </li>
            
        </ul>
        
    </div>
    
    @endsection
    