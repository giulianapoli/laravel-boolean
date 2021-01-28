@extends('layouts.main')

@section('content')

<div class="jumbotron">

    <ul class="menu">

        @foreach ($user as $person) 
    
            <li class="">
                id: {{ $person->id }}, 
                Nome: {{ $person->first_name }}, 
                Cognome: {{ $person->last_name }}
                <a href="/user/{{$person->id}}">Vedi Dettagli</a>
            </li>
            
        @endforeach
    
        <li>
            <button class="btn">
                Candidati Ora
            </button>
        </li>
    
    </ul>

</div>

@endsection

{{-- @foreach ($person as $property)
                <span>{{$property}}</span>
            @endforeach --}}
