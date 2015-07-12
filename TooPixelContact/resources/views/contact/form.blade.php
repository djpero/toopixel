@extends('app')

@section('content')
    <h1>{{Lang::get('localization.contact_us')}}</h1>
    {!! Form::open(array('url' => '/contact/send', 'files' => true)) !!}
    {!! Form::label('name', Lang::get('localization.name')) !!}
    {!! Form::text('name') !!}
    {!! Form::label('name', Lang::get('localization.surname')) !!}
    {!! Form::text('surname') !!}
    {!! Form::label('name', Lang::get('localization.email')) !!}
    {!! Form::text('email') !!}
    {!! Form::label('info', Lang::get('localization.message')) !!}
    {!! Form::textarea('info') !!}
    {!! Form::label(Lang::get('localization.image')) !!}
    {!! Form::file('attachment', null) !!}
    {!! Form::submit(Lang::get('localization.send')) !!}
    {!! Form::close() !!}
@stop