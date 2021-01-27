@extends('layouts.main')

@section('content')

<div class="jumbotron">

    <ul class="menu">

        @foreach ($users as $person) 
    
        <li class="">
            @foreach ($person as $property)
                <span>{{$property}}</span>
            @endforeach
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


