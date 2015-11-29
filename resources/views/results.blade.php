@extends('layouts.master')

@section('content')
    @if(!empty($events))

        @foreach($events as $key => $eventList)
            <h1>{!! $key !!}</h1>
            <table class="table">
                <tr>
                    <th>Name</th>
                    {{--<th>Location</th>--}}
                    <th>Address</th>
                    <th>Description</th>
                    <th>Date</th>
                </tr>
                @foreach($eventList as $index => $event)
                    <tr>
                        <td>@if(!empty($event->placeName)) {!! $event->placeName !!} @endif</td>
                        {{--                    <td>@if(!empty($event->location)) {!! $event->location  !!}} @endif</td>--}}
                        <td>@if(!empty($event->address)) {!! $event->address  !!} @endif</td>
                        <td>@if(!empty($event->description)) {!! $event->description  !!} @endif</td>
                        <td>@if(!empty($event->date)) {!! $event->date  !!}} @endif</td>
                    </tr>
                @endforeach
            </table>
        @endforeach

    @endif
@stop