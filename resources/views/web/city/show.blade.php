@extends('master')



@section('content')

    <h2>{{$city->name}}</h2>
    @foreach($city->stations as $station)
        <a href="{{$station->street}}" class="list-group-item">
            <h4 class="list-group-item-heading">{{$station->name}}</h4>

            <p class="list-group-item-text">MAPS</p>
        </a>
    @endforeach
@endsection