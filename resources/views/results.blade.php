@extends('layouts.master')

@section('content')
    @if(!empty($events))

        @foreach($events as $key => $eventList)
            <h1>{!! $key !!}</h1>
            <table class="table" id="table">
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

<!--<style>
    .table
    {
        color: white;
        border: 5px solid black;
    }

    table td
    {
        border: 5px solid black;
    }

    table th
    {
        border: 5px solid black;
    }

    th
    {
        color: black;
    }
</style>!-->

<style>
    .table {
        margin:0px;padding:0px;
        width:100%;
        box-shadow: 10px 10px 5px #888888;
        border:1px solid #000000;

        -moz-border-radius-bottomleft:0px;
        -webkit-border-bottom-left-radius:0px;
        border-bottom-left-radius:0px;

        -moz-border-radius-bottomright:0px;
        -webkit-border-bottom-right-radius:0px;
        border-bottom-right-radius:0px;

        -moz-border-radius-topright:0px;
        -webkit-border-top-right-radius:0px;
        border-top-right-radius:0px;

        -moz-border-radius-topleft:0px;
        -webkit-border-top-left-radius:0px;
        border-top-left-radius:0px;
    }.table table{
         border-collapse: collapse;
         border-spacing: 0;
         width:100%;
         height:100%;
         margin:0px;padding:0px;
     }.table tr:last-child td:last-child {
          -moz-border-radius-bottomright:0px;
          -webkit-border-bottom-right-radius:0px;
          border-bottom-right-radius:0px;
      }
    .table table tr:first-child td:first-child {
        -moz-border-radius-topleft:0px;
        -webkit-border-top-left-radius:0px;
        border-top-left-radius:0px;
    }
    .table table tr:first-child td:last-child {
        -moz-border-radius-topright:0px;
        -webkit-border-top-right-radius:0px;
        border-top-right-radius:0px;
    }.table tr:last-child td:first-child{
         -moz-border-radius-bottomleft:0px;
         -webkit-border-bottom-left-radius:0px;
         border-bottom-left-radius:0px;
     }.table tr:hover td{

      }
    .table tr:nth-child(odd){ background-color:#ffaa56; }
    .table tr:nth-child(even)    { background-color:#ffffff; }.table td{
                                                                  vertical-align:middle;


                                                                  border:1px solid #000000;
                                                                  border-width:0px 1px 1px 0px;
                                                                  text-align:left;
                                                                  padding:7px;
                                                                  font-size:10px;
                                                                  font-family:Arial;
                                                                  font-weight:normal;
                                                                  color:#000000;
                                                              }.table tr:last-child td{
                                                                   border-width:0px 1px 0px 0px;
                                                               }.table tr td:last-child{
                                                                    border-width:0px 0px 1px 0px;
                                                                }.table tr:last-child td:last-child{
                                                                     border-width:0px 0px 0px 0px;
                                                                 }
    .table tr:first-child td{
        background:-o-linear-gradient(bottom, #ff7f00 5%, #bf5f00 100%);	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #ff7f00), color-stop(1, #bf5f00) );
        background:-moz-linear-gradient( center top, #ff7f00 5%, #bf5f00 100% );
        filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#ff7f00", endColorstr="#bf5f00");	background: -o-linear-gradient(top,#ff7f00,bf5f00);

        background-color:#ff7f00;
        border:0px solid #000000;
        text-align:center;
        border-width:0px 0px 1px 1px;
        font-size:14px;
        font-family:Arial;
        font-weight:bold;
        color:#ffffff;
    }
    .table tr:first-child:hover td{
        background:-o-linear-gradient(bottom, #ff7f00 5%, #bf5f00 100%);	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #ff7f00), color-stop(1, #bf5f00) );
        background:-moz-linear-gradient( center top, #ff7f00 5%, #bf5f00 100% );
        filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#ff7f00", endColorstr="#bf5f00");	background: -o-linear-gradient(top,#ff7f00,bf5f00);

        background-color:#ff7f00;
    }
    .table tr:first-child td:first-child{
        border-width:0px 0px 1px 0px;
    }
    .table tr:first-child td:last-child{
        border-width:0px 0px 1px 1px;
</style>