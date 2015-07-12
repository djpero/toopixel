@extends('app')

@section('content')

    <h1>{{Lang::get('localization.contact_success')}}</h1>
    <p class="center">{{$name}} {{$surname}}, {{Lang::get('localization.will_contact_you')}}</p>

@stop