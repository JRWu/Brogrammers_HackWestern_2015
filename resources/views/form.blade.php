@extends('layouts.master')

@section('content')
    {!! Form::open(['url' => '/results', 'method' => 'POST', 'id' => 'form'])  !!}

    {!! Form::hidden('location', '43, -81') !!}

    {!! Form::hidden('dateType', 'family') !!}

    {!! Form::submit('Submit') !!}

    {!! Form::close() !!}
@stop