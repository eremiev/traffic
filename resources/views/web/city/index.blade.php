@extends('master')



@section('content')
    <div class="col-lg-12">
        <div class="bs-component">
            <ul class="list-group">
                @foreach($cities as $city)
                    <a href="{{ URL::route('cities.show',[$city->id] ) }}">
                        <li class="list-group-item">
                            <span class="badge"> {{ $city->stations->count() }}</span>
                            {{ $city->name }}
                        </li>
                    </a>
                @endforeach
            </ul>
        </div>

@endsection