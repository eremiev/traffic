@extends('master')



@section('content')


    <div class="col-lg-12">
        <div class="well bs-component">

            {!! Form::open(['route' => ['stations.store'],
               'method' => 'POST',
               'class'=>'form-horizontal']) !!}
            <fieldset>
                <legend>Добави стоянка</legend>

                <div class="form-group">
                    <label for="inputCity" class="col-lg-2 control-label">Град</label>

                    <div class="col-lg-10">
                        <select class="form-control" id="select" name="city">
                            @foreach($cities as $city)
                                <option value="{{$city->id}}">{{$city->name}}</option>
                            @endforeach

                        </select>
                    </div>
                </div>


                <div class="form-group">
                    <label for="inputAddress" class="col-lg-2 control-label">Адрес</label>

                    <div class="col-lg-10">
                        <input type="text" class="form-control" id="inputAddress" name="address"
                               placeholder="Адрес">
                    </div>
                </div>
                <input type="hidden" id="url"  name="url" />
                <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                        <div id="map" class="" style="width:100%;height:200px;"></div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                        <button type="reset" class="btn btn-default">Изчисти</button>
                        <button type="submit" class="btn btn-primary">Запиши</button>
                    </div>
                </div>
            </fieldset>
            {!! Form::close() !!}
        </div>
    </div>

    @include('web.station.maps_scripts')
@endsection